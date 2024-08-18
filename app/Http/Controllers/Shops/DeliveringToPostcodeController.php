<?php

declare(strict_types=1);


namespace App\Http\Controllers\Shops;

use App\Http\Controllers\Controller;
use App\Models\Postcode;
use App\Models\Shop;
use Illuminate\Http\Request;

class DeliveringToPostcodeController extends Controller
{
    public function __invoke(Request $request, Postcode $postcode)
    {
        return response()->json(Shop::canDeliverToPostcode($postcode)->orderBy('distance')->paginate());
    }
}
