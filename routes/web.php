<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('paypal/return',[\App\Http\Controllers\CheckoutController::class,'return'])->name('paypal.return');
Route::get('paypal/cancel',[\App\Http\Controllers\CheckoutController::class,'cancel'])->name('paypal.cancel');
Route::get('checkout',[\App\Http\Controllers\CheckoutController::class,'checkout'])->name('checkout');
