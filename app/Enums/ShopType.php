<?php

declare(strict_types=1);

namespace App\Enums;


enum ShopType: string
{
    case takeaway = 'takeaway';
    case shop = 'shop';
    case restaurant = 'restaurant';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
