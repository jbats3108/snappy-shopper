<?php

declare(strict_types=1);


namespace Tests\Unit\Console\Commands;

use App\Models\Postcode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ImportPostcodesTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    #[Test] public function it_imports_a_csv_of_postcodes_and_coordinates_into_the_postcodes_table()
    {
        // Given
        $filename = 'test.csv';

        if (file_exists($filename)) {
            unlink($filename);
        }

        $handler = fopen($filename, 'w');

        fputcsv($handler, ['postcode', 'latitude', 'longitude']);

        $data =
            [
                ['AB1 1AB', $this->faker->latitude, $this->faker->longitude],
                ['C2 2CV', $this->faker->latitude, $this->faker->longitude],
                ['EX1 1XE', $this->faker->latitude, $this->faker->longitude],
            ];

        foreach ($data as $row) {
            fputcsv($handler, $row);
        }

        fclose($handler);

        // When
        $this->artisan('app:import-postcodes', ['filename' => $filename]);

        // Then
        $this->assertDatabaseCount('postcodes', 3);

        foreach ($data as $importedRow) {
            $this->assertDatabaseHas('postcodes', ['postcode' => $importedRow[0]]);
        }

        unlink($filename);
    }

    #[Test] public function it_will_update_an_existing_row_if_the_postcode_already_exists()
    {
        // Given
        $existingPostcode = Postcode::factory()->create();

        $filename = 'test.csv';

        if (file_exists($filename)) {
            unlink($filename);
        }

        $handler = fopen($filename, 'w');

        fputcsv($handler, ['postcode', 'latitude', 'longitude']);

        $newLatitude = 1234.56;
        $newLongitude = -0.33344;
        $data =
            [
                [$existingPostcode->postcode, $newLatitude, $newLongitude],
                ['C2 2CV', $this->faker->latitude, $this->faker->longitude],
                ['EX1 1XE', $this->faker->latitude, $this->faker->longitude],
            ];

        foreach ($data as $row) {
            fputcsv($handler, $row);
        }

        fclose($handler);

        // When
        $this->artisan('app:import-postcodes', ['filename' => $filename]);

        // Then
        $this->assertDatabaseCount('postcodes', 3);

        $existingPostcode->refresh();

        $this->assertEquals($newLatitude, $existingPostcode->latitude);
        $this->assertEquals($newLongitude, $existingPostcode->longitude);

        unlink($filename);
    }
}
