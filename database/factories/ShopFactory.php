<?php

namespace Database\Factories;

use App\Enums\ShopType;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'type' => ShopType::shop,
            'open' => true,
            'max_delivery_distance' => $this->faker->numberBetween(50, 300),
        ];
    }
}
