<?php

namespace App\DataTransferObjects\Shops;

use App\Enums\ShopType;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class CreateShopData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly string $latitude,
        public readonly string $longitude,
        public readonly bool $open,
        public readonly ShopType $type,
        #[MapInputName('max_delivery_distance')]
        public readonly float $maxDeliveryDistance
    ) {
    }
}
