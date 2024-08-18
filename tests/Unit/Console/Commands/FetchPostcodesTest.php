<?php

namespace Tests\Unit\Console\Commands;

use App\Jobs\FetchPostcode;
use PHPUnit\Framework\Attributes\Test;
use Queue;
use Tests\TestCase;

class FetchPostcodesTest extends TestCase
{
    public const string COMMAND_STRING = 'app:fetch-all-postcodes';

    #[Test] public function it_will_dispatch_a_job_for_every_postcode_supplied_as_an_option()
    {
        // Given
        Queue::fake();

        $postcodes =
            [
                'AB1 1AA',
                'AB1 1AB',
                'AB1 1AC',
            ];

        $parameters =
            [
                'postcode' => $postcodes,
            ];

        // When
        $this->callCommand($parameters);

        // Then
        foreach ($postcodes as $postcode) {
            Queue::assertPushed(FetchPostcode::class, fn($job) => $job->postcode === $postcode);
        }
    }

    #[Test] public function it_only_requires_one_postcode_option()
    {
        // Given
        Queue::fake();

        $postcode = 'AB1 1AA';

        $parameters =
            [
                'postcode' => $postcode,
            ];

        // When
        $this->callCommand($parameters);

        // Then
        Queue::assertPushed(FetchPostcode::class, fn($job) => $job->postcode === $postcode);
    }

    public function callCommand(array $parameters = []): void
    {
        $this->artisan(self::COMMAND_STRING, $parameters);
    }
}
