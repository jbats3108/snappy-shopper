<?php

namespace Tests\Feature\Jobs;

use App\Jobs\FetchPostcode;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;
use TiMacDonald\Log\LogEntry;
use TiMacDonald\Log\LogFake;

class FetchPostcodeTest extends TestCase
{
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
}
