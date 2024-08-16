<?php

namespace Tests\Feature\Services;

use App\Services\PostcodeService;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class PostcodeServiceTest extends TestCase
{
    #[Test] public function it_reads_a_csv_of_prefixes_into_an_array()
    {
        // Given
        $csvData =
            [
                'A',
                'B',
                'X'
            ];

        $fp = fopen('test.csv', 'w');


        foreach ($csvData as $line) {
            fputcsv($fp, [$line]);
        }


        fclose($fp);

        $service = new PostcodeService();

        // When
        $result = $service->readCsv('test.csv');

        // Then
        $this->assertSame($csvData, $result);

        unlink('test.csv');
    }

    #[Test] public function it_creates_an_array_of_possible_uk_postcodes_from_an_array_of_prefixes()
    {
        // Given
        $prefixes = ['A', 'B', 'C'];

        $service = new PostcodeService();

        // When
        $postcodes = $service->buildPossiblePostcodes($prefixes);

        // Then
        $this->assertArrayHasKey('C', $postcodes);

        /*
         * This method should create {Prefix}1 1AA through to {Prefix}99 9ZZ. Checking
         * for all of these will just require reimplementing the code under test, so we
         * are checking for a value in the middle of the range
         */

        $this->assertTrue(in_array('B75 7GZ', $postcodes['B']));

    }
}
