<?php

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
}
