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

    #[Test] public function it_calculates_the_distance_from_a_shop_to_a_postcode()
    {
        // Given

        /*
         * This test uses a known location so that the calculation can be verified. The distance is returned
         * in Kilometres. The getDistanceFromPostcode method here would not ordinarily be a public
         * method, but has been created so that this test can exist and prove that the other queries that rely
         * on this calculation can be trusted.
         */

        $shop = Shop::factory()->create(
            [
                'longitude' => -0.1749,
                'latitude' => 50.828089,
            ]
        );

        $postcode = Postcode::factory()->create(
            [
                'postcode' => 'BN1 5AG',
                'outcode' => 'BN1',
                'incode' => '5AG',
                'longitude' => -0.15679,
                'latitude' => 50.841534,
            ]
        );

        // When
        $shopWithDistance = $shop->getDistanceFromPostcode($postcode);

        // Then
        $distance = $shopWithDistance->distance;

        $this->assertTrue($distance > 1.95 && $distance < 1.97);
    }

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

    #[Test] public function it_finds_all_shops_that_can_deliver_to_a_given_postcode()
    {
        // Given
        $this->seed();

        $postcode = Postcode::first();

        // When
        $results = Shop::canDeliverToPostcode($postcode)->get();

        // Then
        $results->each(fn(Shop $shop) => $this->assertTrue($shop->max_delivery_distance >= $shop->distance));
    }
}
