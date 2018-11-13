<?php

namespace creavixstd\cekongkir;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class CekOngkirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
                __DIR__.'/config/cekongkir.php' => config_path().'/cekongkir.php',
            ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('cekOngkir', function()
        {
            return new CekOngkir;
        });
    }
}