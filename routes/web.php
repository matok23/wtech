<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('layouts.app');
// });

Route::resource('landing',LandingController::class);

Route::resource('/',LandingController::class);

Route::resource('products',ProductController::class);
