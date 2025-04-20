<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BrowsingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;




// Route::get('/', function () {
//     // return view('welcome');
//     return view('layouts.app');
// });

Route::resource('/landing',LandingController::class);

Route::resource('/',LandingController::class);

Route::resource('/products',ProductController::class);

Route::resource('/index',IndexController::class);

Route::resource('/browsing',LoginController::class);
Route::resource('/browsing',BrowsingController::class);
Route::get('/index/{category}', [IndexController::class, 'show'])->name('index');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'completeOrder'])->name('checkout.complete');

Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/checkout/complete', [OrderController::class, 'checkout'])->name('checkout.complete');

// web.php
Route::post('/cart/updateCoupon', [CartController::class, 'updateCoupon'])->name('cart.updateCoupon');
Route::post('/cart/updateDelivery', [CartController::class, 'updateDelivery'])->name('cart.updateDelivery');
Route::post('/cart/updatePayment', [CartController::class, 'updatePayment'])->name('cart.updatePayment');


Route::get('/login', function() {
    return view('login.index');
});

Route::post('/login', [LoginController::class, 'login']);

// middleware to force login when accessing cart!!!!
// Route::get('/cart', function() {
//     return view('cart.index');
// })->middleware('isloggedin');