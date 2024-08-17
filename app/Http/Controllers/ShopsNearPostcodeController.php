<?php

namespace App\Http\Controllers;

use App\Data\ShopsNearPostcodeData;
use App\Models\Postcode;
use App\Models\Shop;

class ShopsNearPostcodeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ShopsNearPostcodeData $request)
    {
        $distance = $request->distance;
        $postcode = Postcode::firstWhere('postcode', $request->postcode);

        $shopsWithinDistance = Shop::distanceFrom($postcode)
            ->having('distance', '<=', $distance)
            ->orderBy('distance')
            ->get();

        return response()->json($shopsWithinDistance);
    }
}
