<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BrowsingController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('layouts.app');
// });

Route::resource('/landing',LandingController::class);

Route::resource('/',LandingController::class);

Route::resource('/products',ProductController::class);

Route::resource('/index',IndexController::class);

Route::resource('/browsing',BrowsingController::class);

Route::get('/login', function() {
    return view('login.index');
});

Route::post('/login', [LoginController::class, 'login']);

// Route::get('/cart', function() {
//     return view('cart.index');
// })->middleware('isloggedin');