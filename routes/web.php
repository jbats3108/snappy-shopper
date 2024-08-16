<?php

use App\Http\Controllers\CreateShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/shop')->group(function () {
    Route::post('/create')->uses(CreateShopController::class)->name('shop.create');
});

