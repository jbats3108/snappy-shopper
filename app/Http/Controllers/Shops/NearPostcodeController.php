<?php

declare(strict_types=1);

namespace App\Http\Controllers\Shops;

use App\DataTransferObjects\Shops\NearPostcodeData;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class NearPostcodeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(NearPostcodeData $request)
    {
        return response()->json(Shop::withinDistanceFromPostcode($request->postcode, $request->distance)->paginate());
    }
}
