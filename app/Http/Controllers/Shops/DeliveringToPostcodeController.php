<?php

declare(strict_types=1);


namespace App\Http\Controllers\Shops;

use App\Http\Controllers\Controller;
use App\Models\Postcode;
use Illuminate\Http\Request;

class DeliveringToPostcodeController extends Controller
{
    public function __invoke(Request $request, Postcode $postcode)
    {
        return response();
    }
}
