<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Shops;

use App\Models\Postcode;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Attributes\WithCastable;
use Spatie\LaravelData\Data;

class NearPostcodeData extends Data
{
    public function __construct(
        #[WithCastable(Postcode::class)]
        public readonly Postcode $postcode,
        public readonly float $distance
    ) {
    }
}
