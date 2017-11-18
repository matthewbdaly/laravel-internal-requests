<?php

namespace Matthewbdaly\LaravelCart\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for shopping cart
 */
class CartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Matthewbdaly\LaravelInternalRequests\Contracts\Services\MakesInternalRequests',
            'Matthewbdaly\LaravelInternalRequests\Services\InternalRequest'
        );
    }
}
