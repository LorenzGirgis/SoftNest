<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // eventueel bindings, niks nodig voor nu
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}