<?php

declare(strict_types=1);

namespace Tests\Unit\Http\Controllers\Shop;


use App\Models\Postcode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class NearPostcodeControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test] public function it_requires_a_postcode()
    {
        // Given
        $request =
            [
                'distance' => 15
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertJsonValidationErrors('postcode');

        $response->assertJsonMissingValidationErrors('distance');
    }

    #[Test] public function the_provided_postcode_must_exist_in_the_database()
    {
        // Given
        $invalidPostcode = 'ZZ1 1ZZ'; // Ensures any real seeded postcodes will never match

        $request =
            [
                'distance' => 15,
                'postcode' => $invalidPostcode
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertNotFound();
    }

    #[Test] public function it_requires_a_distance_value()
    {
        // Given
        $postcode = Postcode::factory()->create(
            [
                'postcode' => 'AB1 1AB'
            ]
        );

        $request =
            [
                'postcode' => $postcode->postcode,
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertJsonValidationErrors('distance');
        $response->assertJsonMissingValidationErrors('postcode');
    }

    #[Test] public function the_distance_value_must_be_numeric()
    {
        // Given
        $postcode = Postcode::factory()->create(
            [
                'postcode' => 'AB1 1AB',
            ]
        );

        $request =
            [
                'postcode' => $postcode->postcode,
                'distance' => 'foo'
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertJsonValidationErrors('distance');
        $response->assertJsonMissingValidationErrors('postcode');
    }

    #[Test] public function it_returns_a_paginated_list_of_shops_within_the_given_distance_from_the_provided_postcode()
    {
        // Given
        $this->seed();

        $postcode = Postcode::first();

        /*
         * Setting a high distance to account for the wide distribution of coordinates in the seeded Shops
         */
        $searchDistance = 150;

        $request =
            [
                'postcode' => $postcode->postcode,
                'distance' => $searchDistance,
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertOk();

        $response->assertJsonStructure(
            [
                'current_page',
                'data' => [],
                'first_page_url',
                'from',
                'last_page',
                'last_page_url',
                'links' => [],
                'next_page_url',
                'path',
                'per_page',
                'prev_page_url',
                'to',
                'total',
            ]
        );
    }


    public function sendRequest(array $request): TestResponse
    {
        return $this->getJson(route('shops.near-postcode', $request));
    }
}
