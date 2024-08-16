<?php

namespace Database\Factories;

use App\Models\Postcode;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostcodeFactory extends Factory
{
    protected $model = Postcode::class;

    public function definition(): array
    {
        return [
            'postcode' => 'SW1A 1AA',
            'outcode' => 'SW1A',
            'incode' => '1AA',
            'longitude' => $this->faker->longitude(),
            'latitude' => $this->faker->latitude(),
        ];
    }
}
