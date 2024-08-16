<?php

namespace App\Jobs;

use App\DataTransferObjects\PostcodeResponseData;
use App\Models\Postcode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FetchPostcode implements ShouldQueue
{
    use Queueable;

    public const string NOT_FOUND = 'Postcode %s was not found';

    public function __construct(public readonly string $postcode)
    {
    }

    public function handle(): void
    {
        $url = sprintf('https://postcodes.io/postcodes/%s', urlencode($this->postcode));
        try {
            $response = Http::get($url)->throw()->json();
            $postcodeResponse = PostcodeResponseData::fromResponse($response['result']);
        } catch (RequestException) {
            $logMessage = sprintf(self::NOT_FOUND, $this->postcode);
            Log::info($logMessage);
            return;
        }

        Postcode::create($postcodeResponse->toArray());
    }
}
