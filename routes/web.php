<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\VendorsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return redirect('cars');
});
//500萬以上車輛查詢
Route::get('cars/senior', [CarsController::class, 'senior'])->name('cars.senior');
// 義大利查詢
Route::get('vendors/italy', [VendorsController::class, 'italy'])->name('vendors.italy');
// 英國查詢
Route::get('vendors/uk', [VendorsController::class, 'uk'])->name('vendors.uk');
// 德國查詢
Route::get('vendors/germany', [VendorsController::class, 'germany'])->name('vendors.germany');
// 美國查詢
Route::get('vendors/usa', [VendorsController::class, 'usa'])->name('vendors.usa');
// 日本查詢
Route::get('vendors/japan', [VendorsController::class, 'japan'])->name('vendors.japan');

Route::resource("cars",CarsController::class);
Route::resource("vendors",VendorsController::class);

