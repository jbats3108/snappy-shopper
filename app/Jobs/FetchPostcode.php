<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FetchPostcode implements ShouldQueue
{
    use Queueable;

    public const NOT_FOUND = 'Postcode %s was not found';

    public function __construct(public readonly string $postcode)
    {
    }

    public function handle(): void
    {
        $url = sprintf('https://postcodes.io/postcodes/%s', urlencode($this->postcode));
        try {
            Http::get($url)->throw()->json();
        } catch (RequestException) {
            $logMessage = sprintf(self::NOT_FOUND, $this->postcode);
            Log::info($logMessage);
            return;
        }
    }
}
