<?php

namespace App\Enums;


enum ShopType: string
{
    case takeaway = 'takeaway';
    case shop = 'shop';
    case restaurant = 'restaurant';
}
