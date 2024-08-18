<?php

namespace Tests\Unit\Http\Controllers\Shops;

use App\Models\Postcode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Routing\Exceptions\UrlGenerationException;
use Illuminate\Testing\TestResponse;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class DeliveringToPostcodeControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test] public function it_requires_a_postcode()
    {
        // When
        $this->expectException(UrlGenerationException::class);

        $response = $this->getJson(route('shops.delivering-to.postcode'));

        // Then
        $response->assertStatus(422);
    }

    #[Test] public function the_provided_postcode_must_exist_in_the_database()
    {
        // Given
        $this->seed();

        $invalidPostcode = 'ZZ1 1ZZ'; // Ensures any real seeded postcodes will never match

        // When
        $response = $this->sendRequest($invalidPostcode);

        // Then
        $response->assertNotFound();
    }

    #[Test] public function it_returns_a_paginated_list_of_shops_that_can_deliver_to_the_provided_postcode()
    {
        // Given
        $this->seed();

        $postcode = Postcode::first();

        // When
        $response = $this->sendRequest($postcode->postcode);

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

    public function sendRequest(string $postcode): TestResponse
    {
        return $this->getJson(route('shops.delivering-to.postcode', $postcode));
    }
}
