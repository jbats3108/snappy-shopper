<?php

declare(strict_types=1);

namespace App\Http\Controllers\Shops;

use App\DataTransferObjects\Shops\NearPostcodeData;
use App\Http\Controllers\Controller;
use App\Models\Postcode;
use App\Models\Shop;

class NearPostcodeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(NearPostcodeData $request)
    {
        $postcode = Postcode::firstWhere('postcode', $request->postcode);
        return response()->json(Shop::withinDistanceFromPostcode($postcode, $request->distance)->paginate());
    }
}
