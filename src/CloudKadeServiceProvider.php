<?php

namespace idegostaran\cloudkade;

use Illuminate\Support\ServiceProvider;

class CloudKadeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/cloudkade.php' => config_path('cloudkade.php'),
        ], 'config');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(Cloudkade::class, function () {
            return new Cloudkade();
        });
//        include __DIR__ . '/routes.php';
    }

}
