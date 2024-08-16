<?php

namespace Tests\Unit\Jobs;

use App\Jobs\FetchPostcode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;
use TiMacDonald\Log\LogEntry;
use TiMacDonald\Log\LogFake;

class FetchPostcodeTest extends TestCase
{
    use RefreshDatabase;
    #[Test] public function it_logs_and_swallows_the_error_if_the_submitted_postcode_is_not_found()
    {
        // Given
        $logFake = new LogFake();
        Log::swap($logFake);

        $fakePostcode = 'ZZ1 1ZZ';

        $errorResponse =
            [
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Postcode not found',
            ];

        Http::fakeSequence()->push($errorResponse, Response::HTTP_NOT_FOUND);

        $job = new FetchPostcode($fakePostcode);

        // When
        $job->handle();

        // Then
        $logFake->assertLogged(
            fn(LogEntry $logEntry) => $logEntry->level === 'info' && $logEntry->message === sprintf(
                    FetchPostcode::NOT_FOUND,
                    $fakePostcode
                )
        );
    }

    #[Test] public function it_stores_the_postcode_details_if_a_valid_response_is_returned()
    {
        $realPostcode = 'ZZ1 1ZZ'; // Doesn't have to be real since responses are mocked

        $postcodeData = [
            'postcode' => $realPostcode,
            'longitude' => 1234567,
            'latitude' => 987654,
            'outcode' => 'ZZ1',
            'incode' => '1ZZ'
        ];

        $successResponse =
            [
                'status' => Response::HTTP_OK,
                'result' => $postcodeData
            ];

        Http::fakeSequence()->push($successResponse);

        $job = new FetchPostcode($realPostcode);

        // When
        $job->handle();

        $this->assertDatabaseHas(
            'postcodes',
            $postcodeData
        );
    }
}
