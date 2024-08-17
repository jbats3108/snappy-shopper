<?php

use App\Http\Controllers\CreateShopController;
use App\Http\Controllers\ShopsNearPostcodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/shop')->group(function () {
    Route::post('/create')->uses(CreateShopController::class)->name('shop.create');

    Route::get('/near-postcode')->uses(ShopsNearPostcodeController::class)->name('shops.near-postcode');
});

