<?php

namespace Matthewbdaly\LaravelInternalRequests\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for internal requests
 */
class InternalRequestServiceProvider extends ServiceProvider
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
