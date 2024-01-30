<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(\App\Http\Controllers\DashboardController::class)->group(function (){
    Route::get('/', 'index')->name('dashboard');
});


Route::controller(\App\Http\Controllers\AuthController::class)->group(function (){
    Route::get('/login', 'loginView')->name('login');
    Route::post('/login/store', 'login')->name('login.store');
    Route::get('/register', 'registerView')->name('register');
    Route::post('/register/store', 'login')->name('register.store');
});

Route::controller(\App\Http\Controllers\ProductController::class)->group(function (){
    Route::get('/products', 'index')->name('products');
    Route::get('/products/create', 'create')->name('products_create');
});

Route::controller(\App\Http\Controllers\PurchaseController::class)->group(function (){
    Route::get('purchases', 'index')->name('purchases');
});
