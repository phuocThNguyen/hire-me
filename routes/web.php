<?php

use App\Http\Controllers\CarControllers\CarBrandController;
use App\Http\Controllers\CarControllers\CarController;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'index', ['cars' => Car::orderBy('price', 'desc')->take(8)->get()]);
Route::view('/about', 'about');

Route::get('/gallery', [CarBrandController::class, 'index']);

Route::get('/gallery/{brand_name}', [CarBrandController::class, 'cars']);

Route::resource('/cars', CarController::class);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
