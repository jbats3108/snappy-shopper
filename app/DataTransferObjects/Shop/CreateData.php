<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Shop;

use App\Enums\ShopType;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class CreateData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly bool $open,
        public readonly ShopType $type,
        #[MapName('max_delivery_distance')]
        public readonly float $maxDeliveryDistance
    ) {
    }
}
