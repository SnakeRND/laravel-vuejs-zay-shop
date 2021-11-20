<?php

use App\Http\Controllers\AboutBannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainSliderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->name('apiV1')->group(function () {
    Route::prefix('home')->group(function () {
        Route::get('/categories', [CategoryController::class, 'getCategories']);
        Route::get('/slides', [MainSliderController::class, 'getSlides']);
        Route::get('/featured_products', [ProductController::class, 'getFeaturedProducts']);
    });
    Route::prefix('about')->group(function () {
        Route::get('/banner', [AboutBannerController::class, 'getAboutBanner']);
    });
    Route::prefix('shop')->group(function () {
        Route::get('/products', [ProductController::class, 'getProducts']);
    });
});
