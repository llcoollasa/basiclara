<?php

namespace App\Providers;

use App\View\Components\Navigation;
use App\View\Components\Paragraph;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::component('package-navigation', Navigation::class);
        // Blade::component('paragraph-component', Paragraph::class);
    }
}
