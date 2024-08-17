<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\DataTransferObjects\Shops\CreateShopData;
use App\Models\Shop;

class CreateShopController extends Controller
{
    public function __invoke(CreateShopData $request)
    {
        return Shop::create($request->toArray());
    }
}
