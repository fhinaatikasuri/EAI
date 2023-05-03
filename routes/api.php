<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingController;

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

Route::get('/shipping', [\App\Http\Controllers\ShippingController::class, 'index']);
Route::get('/shipping/{id}', [ShippingController::class, 'show']);
Route::post('/shipping', [ShippingController::class, 'store']);
Route::put('/shipping/{id}', [ShippingController::class, 'update']);
Route::get('/shipping/status/{status}', [ShippingController::class, 'getByStatus']);
Route::get('/shipping/customer/{customerId}', [ShippingController::class, 'getByCustomer']);
