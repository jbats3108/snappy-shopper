<?php
declare(strict_types=1);

namespace App\DataTransferObjects;

use Spatie\LaravelData\Data;

class PostcodeResponseData extends Data
{
    public function __construct(
        public readonly string $postcode,
        public readonly string $outcode,
        public readonly string $incode,
        public readonly string $longitude,
        public readonly string $latitude
    ) {
    }

    public static function fromResponse(array $responseResult): self
    {
        return new self(
            $responseResult['postcode'],
            $responseResult['outcode'],
            $responseResult['incode'],
            (string)$responseResult['longitude'],
            (string)$responseResult['latitude']
        );
    }
}
