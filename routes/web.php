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

Route::get('cars/senior', [CarsController::class, 'senior'])->name('cars.senior');

Route::resource("cars",CarsController::class);
Route::resource("vendors",VendorsController::class);

