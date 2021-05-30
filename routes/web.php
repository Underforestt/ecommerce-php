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


use App\Http\Controllers\MainController;
Route::get('/', [ \App\Http\Controllers\MainController::class, 'index' ])->name('index');
Route::get('/categories', [ \App\Http\Controllers\MainController::class, 'categories' ])->name('categories');
Route::get('/{category}', [ \App\Http\Controllers\MainController::class, 'category' ])->name('category');
Route::get('/{category}/{product?}', [ \App\Http\Controllers\MainController::class, 'product' ])->name('product');
Route::get('/cart', [ \App\Http\Controllers\MainController::class, 'cart'])->name('cart');
Route::get('/cart/place', [ \App\Http\Controllers\MainController::class, 'order'])->name('order');

