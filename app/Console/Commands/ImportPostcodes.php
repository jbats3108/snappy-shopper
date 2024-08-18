<?php

namespace App\Console\Commands;

use App\Models\Postcode;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class ImportPostcodes extends Command
{
    protected $signature = 'app:import-postcodes {filename : Filename of the csv containing the postcodes to import}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports Postcode data from a CSV file';

    public function handle(): void
    {
        $filename = $this->argument('filename');

        $file = collect(file($filename));

        $file->shift();

        $data = $file->map(function (string $row) {
            $row = str_getcsv($row);

            $postcode = $row[0];
            $splitPostcode = explode(' ', $postcode);
            $outcode = $splitPostcode[0];
            $incode = $splitPostcode[1];

            return
                [
                    'postcode' => $postcode,
                    'outcode' => $outcode,
                    'incode' => $incode,
                    'latitude' => $row[1],
                    'longitude' => $row[2],
                ];
        });

        $data->chunk(1000)->each(function (Collection $chunk) {
            $chunk->each(
                fn(array $row) => Postcode::upsert($row, ['postcode', 'outcode', 'incode'], ['latitude', 'longitude'])
            );
        });
    }
}
