<?php

declare(strict_types=1);

namespace Tests\Unit\Http\Controllers\Shop;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CreateShopControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test] public function it_requires_a_shop_name()
    {
        // Given
        $request =
            [
                'latitude' => 12345,
                'longitude' => '5678',
                'open' => true,
                'type' => 'shop',
                'max_delivery_distance' => 12.5
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertUnprocessable();

        $response->assertJsonValidationErrors('name');

        $response->assertJsonMissingValidationErrors(
            [
                'latitude',
                'longitude',
                'open',
                'type',
                'max_delivery_distance'
            ]
        );
    }

    #[Test] public function it_requires_latitude()
    {
        // Given
        $request =
            [
                'name' => 'Foo',
                'longitude' => '5678',
                'open' => true,
                'type' => 'shop',
                'max_delivery_distance' => 12.5
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertUnprocessable();

        $response->assertJsonValidationErrors('latitude');
        $response->assertJsonMissingValidationErrors(
            [
                'name',
                'longitude',
                'open',
                'type',
                'max_delivery_distance'
            ]
        );
    }

    #[Test] public function it_requires_longitude()
    {
        // Given
        $request =
            [
                'name' => 'Foo',
                'latitude' => '12345',
                'open' => true,
                'type' => 'shop',
                'max_delivery_distance' => 12.5
            ];


        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertUnprocessable();

        $response->assertJsonValidationErrors('longitude');

        $response->assertJsonMissingValidationErrors(
            [
                'name',
                'latitude',
                'open',
                'type',
                'max_delivery_distance'
            ]
        );
    }

    #[Test] public function it_requires_the_open_status_as_a_boolean()
    {
        // Given
        $request =
            [
                'name' => 'Foo',
                'latitude' => '12345',
                'longitude' => '5678',
                'open' => 'Bar',
                'type' => 'shop',
                'max_delivery_distance' => 12.5
            ];


        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertUnprocessable();

        $response->assertJsonValidationErrors('open');
        $response->assertJsonMissingValidationErrors(
            [
                'name',
                'latitude',
                'longitude',
                'type',
                'max_delivery_distance'
            ]
        );
    }

    #[Test] public function it_requires_the_shop_type_to_be_a_valid_option()
    {
        $request =
            [
                'name' => 'Foo',
                'latitude' => '12345',
                'longitude' => '5678',
                'open' => true,
                'type' => 'Invalid',
                'max_delivery_distance' => 12.5
            ];


        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertUnprocessable();

        $response->assertJsonValidationErrors('type');

        $response->assertJsonMissingValidationErrors(
            [
                'name',
                'latitude',
                'longitude',
                'open',
                'max_delivery_distance'
            ]
        );
    }

    #[Test] public function it_requires_a_max_delivery_distance()
    {
        $request =
            [
                'name' => 'Foo',
                'latitude' => '12345',
                'longitude' => '5678',
                'open' => true,
                'type' => 'shop'
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertUnprocessable();

        $response->assertJsonValidationErrors('max_delivery_distance');

        $response->assertJsonMissingValidationErrors(
            [
                'name',
                'latitude',
                'longitude',
                'open',
                'type',
            ]
        );
    }

    #[Test] public function it_creates_a_new_shop()
    {
        // Given
        $request =
            [
                'name' => 'New Shop',
                'latitude' => 123.45,
                'longitude' => 56.78,
                'open' => true,
                'type' => 'shop',
                'max_delivery_distance' => 12.5
            ];

        // When
        $response = $this->sendRequest($request);

        // Then
        $response->assertCreated();

        $this->assertDatabaseHas('shops', $request);
    }

    public function sendRequest(array $request): TestResponse
    {
        return $this->postJson(route('shop.create'), $request);
    }
}
