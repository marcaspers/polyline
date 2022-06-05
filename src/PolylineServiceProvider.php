<?php

namespace EndlessMiles\Polyline;

use Illuminate\Support\ServiceProvider;

class PolylineServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Nothing to boot
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Polyline', function ($app) {
            return new Polyline();
        });
    }
}
