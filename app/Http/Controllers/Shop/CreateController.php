<?php
declare(strict_types=1);

namespace App\Http\Controllers\Shop;

use App\DataTransferObjects\Shops\CreateShopData;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class CreateController extends Controller
{
    public function __invoke(CreateShopData $request)
    {
        return Shop::create($request->toArray());
    }
}
