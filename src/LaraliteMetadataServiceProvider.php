<?php

namespace SeyedMR\LaraliteMetadata;

use Illuminate\Support\ServiceProvider;

class LaraliteMetadataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../publishable/migrations');
    }
}
