<?php

namespace Gegetchkori\LaravelGetEnumValues;

use Illuminate\Support\ServiceProvider;

class GetEnumValuesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../app' => app_path(),
        ],'helpers');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
