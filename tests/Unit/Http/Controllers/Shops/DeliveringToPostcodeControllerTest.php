<?php

namespace Tests\Unit\Http\Controllers\Shops;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Routing\Exceptions\UrlGenerationException;
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
        $response = $this->getJson(route('shops.delivering-to.postcode', $invalidPostcode));

        // Then
        $response->assertNotFound();
    }
}
