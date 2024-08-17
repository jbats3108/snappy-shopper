<?php
declare(strict_types=1);

namespace Tests\Unit\Models;

use App\Models\Postcode;
use App\Models\Shop;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ShopTest extends TestCase
{
    use RefreshDatabase;

    #[Test] public function it_finds_the_distance_from_a_postcode_for_all_shops()
    {
        // Given
        $postcode = Postcode::factory()->create();
        Shop::factory()->count(3)->create();

        // When
        $shopsWithDistance = Shop::distanceFrom($postcode)->get();

        // Then
        $distances = $shopsWithDistance->pluck('distance');

        /**
         * I'm not making any assertions on the value of 'distance' - the fact that any value is produced
         * is the point of this test.
         */

        $this->assertCount(3, $distances);
    }

    #[Test] public function it_finds_all_shops_within_a_given_distance_from_a_postcode()
    {
        // Given
        $this->seed();

        $postcode = Postcode::first();

        /*
         * Setting a high distance to account for the wide distribution of coordinates in the seeded Shops
         */
        $searchDistance = 150;

        // When
        $results = Shop::withinDistanceFromPostcode($postcode, $searchDistance)->get();

        // Then
        $distances = $results->pluck('distance');

        $distances->each(fn(float $distance) => $this->assertLessThan($searchDistance, $distance));
    }
}
