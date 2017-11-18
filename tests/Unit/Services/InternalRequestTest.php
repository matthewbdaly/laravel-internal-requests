<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use Mockery as m;
use Matthewbdaly\LaravelInternalRequests\Services\InternalRequest;
use Illuminate\Http\Response;

class InternalRequestTest extends TestCase
{
    /** @test */
    public function it_makes_the_request()
    {
        $response = new Response;
        $mock = m::mock($this->app);
        $mock->shouldReceive('handle')->once()->andReturn($response);
        $service = new InternalRequest($mock);
        $service->request('POST', '/api/resource', ['content' => 'blah']);
    }
}
