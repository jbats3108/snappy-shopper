<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\DataTransferObjects\ShopsNearPostcodeData;
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

        $shopsWithinDistance = Shop::withinDistanceFromPostcode($postcode, $distance);

        return response()->json($shopsWithinDistance);
    }
}
