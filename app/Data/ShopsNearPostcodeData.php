<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Exists;
use Spatie\LaravelData\Data;

class ShopsNearPostcodeData extends Data
{
    public function __construct(
        #[Exists('postcodes', 'postcode')]
        public readonly string $postcode,
        public readonly float $distance
    ) {
    }
}
