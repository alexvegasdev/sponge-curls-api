<?php
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CurlTypeController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'middleware' => 'guest'
], static function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('curl-types', CurlTypeController::class);
    Route::apiResource('products', ProductController::class);
});