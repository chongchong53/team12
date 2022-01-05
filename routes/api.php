<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VendorsController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function ()
{
    Route::get('vendors', [VendorsController::class, 'api_vendors']);
    // 查詢所有廠牌
    Route::patch('vendors', [VendorsController::class, 'api_update']);
    // 修改指定廠牌
    Route::delete('vendors', [VendorsController::class, 'api_delete']);
    // 刪除指定廠牌
    Route::get('cars', [CarsController::class, 'api_cars']);
    // 查詢所有車輛
    Route::patch('cars', [CarsController::class, 'api_update']);
    // 修改指定車輛
    Route::delete('cars', [CarsController::class, 'api_delete']);
    // 刪除指定車輛
}
);
