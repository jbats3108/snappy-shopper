<?php


use App\Http\Controllers\Shop\CreateController;
use App\Http\Controllers\Shops\DeliveringToPostcodeController;
use App\Http\Controllers\Shops\NearPostcodeController;
use Illuminate\Support\Facades\Route;

Route::post('shop/create')->uses(CreateController::class)->name('shop.create');

Route::prefix('/shops')->group(function () {
    Route::get('/near-postcode')->uses(NearPostcodeController::class)->name('shops.near-postcode');

    Route::get('/delivering-to/{postcode}')
        ->uses(DeliveringToPostcodeController::class)
        ->name('shops.delivering-to.postcode');
});

