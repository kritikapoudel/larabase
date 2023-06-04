<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\support\Facades\schema;

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
       schema::defaultstringLength(191);
    }
}
