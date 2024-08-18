<?php
declare(strict_types=1);

namespace App\DataTransferObjects\Shops;

use Spatie\LaravelData\Attributes\Validation\Exists;
use Spatie\LaravelData\Data;

class NearPostcodeData extends Data
{
    public function __construct(
        #[Exists('postcodes', 'postcode')]
        public readonly string $postcode,
        public readonly float $distance
    ) {
    }
}
