<?php

declare(strict_types=1);

namespace App\Http\Controllers\Shops;

use App\DataTransferObjects\Shops\NearPostcodeData;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\JsonResponse;

class NearPostcodeController extends Controller
{
    public function __invoke(NearPostcodeData $request): JsonResponse
    {
        return response()->json(Shop::withinDistanceFromPostcode($request->postcode, $request->distance)->paginate());
    }
}
