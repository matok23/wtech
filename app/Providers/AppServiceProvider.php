<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsLoggedIn;
use App\Http\Middleware\AdminAccess;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Route::aliasMiddleware('isloggedin', IsLoggedIn::class);
        Route::aliasMiddleware('adminAccess', AdminAccess::class);
    }
}
