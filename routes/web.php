<?php


use App\Http\Controllers\Shop\CreateController;
use App\Http\Controllers\Shops\NearPostcodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/shop')->group(function () {
    Route::post('/create')->uses(CreateController::class)->name('shop.create');

    Route::get('/near-postcode')->uses(NearPostcodeController::class)->name('shops.near-postcode');
});

