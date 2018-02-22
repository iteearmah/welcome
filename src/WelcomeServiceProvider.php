<?php

namespace Iteearmah\Welcome;

use Illuminate\Support\ServiceProvider;

class WelcomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'iteearmahwelcome');
        $this->publishes([
            __DIR__.'/views'  => resource_path('views/vendor/iteearmah/welcome'),
        ], 'welcome_view');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
