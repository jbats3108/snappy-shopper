<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Jobs\FetchPostcode;
use Exception;
use Illuminate\Console\Command;

class FetchPostcodes extends Command
{
    protected $signature = 'app:fetch-all-postcodes
    {postcode* : Postcode(s) to pass in individually}';

    protected $description = 'Calls the Postcodes.io API to retrieve and insert Postcode data';

    /**
     * Execute the console command.
     * @throws Exception
     */
    public function handle(): void
    {
        $postcodesToFetch = is_array($this->argument('postcode'))
            ? $this->argument('postcode')
            : [$this->argument('postcode')];

        foreach ($postcodesToFetch as $postcode) {
            dispatch(new FetchPostcode($postcode));
        }
    }
}
