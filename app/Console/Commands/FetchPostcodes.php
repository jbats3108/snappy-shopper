<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\Jobs\FetchPostcode;
use Exception;
use Illuminate\Console\Command;

class FetchPostcodes extends Command
{
    public const string NO_OPTIONS = 'This command must be thrown with either the filename or postcode option';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-all-postcodes
    {postcode* : Postcode(s) to pass in individually}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @throws Exception
     */
    public function handle(): void
    {
        $postcodesToFetch = is_array($this->argument('postcode')) ? $this->argument('postcode') : [
            $this->argument(
                'postcode'
            )
        ];

        foreach ($postcodesToFetch as $postcode) {
            dispatch(new FetchPostcode($postcode));
        }
    }
}
