<?php
declare(strict_types=1);

namespace App\Http\Controllers\Shop;

use App\DataTransferObjects\Shop\CreateData;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class CreateController extends Controller
{
    public function __invoke(CreateData $request)
    {
        return Shop::create($request->toArray());
    }
}
