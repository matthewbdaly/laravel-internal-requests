<?php

namespace Tests\Unit\Providers;

use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function it_sets_up_the_service()
    {
        $service = $this->app->make('Matthewbdaly\LaravelInternalRequests\Contracts\Services\MakesInternalRequests');
        $this->assertInstanceOf(\Matthewbdaly\LaravelInternalRequests\Services\InternalRequest::class, $service);
    }
}
