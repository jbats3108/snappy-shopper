<?php

namespace Tests\Unit;


use App\Models\Postcode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ShopsNearPostcodeControllerTest extends TestCase
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
        $response->assertJsonMissingValidationErrors('distance');

        $response->assertJsonValidationErrors('postcode');
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

    #[Test] public function it_returns_a_list_of_shops_within_the_provided_distance_from_the_provided_postcode()
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


    }


    public function sendRequest(array $request): TestResponse
    {
        return $this->getJson(route('shops.near-postcode', $request));
    }
}
