<?php

namespace Tests\Unit\Exceptions;

use Tests\TestCase;
use Mockery as m;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Matthewbdaly\LaravelInternalRequests\Exceptions\FailedInternalRequestException;

class FailedInternalRequestTest extends TestCase
{
    /** @test */
    public function it_gets_the_request()
    {
        $request = Request::create('/api/endpoint', 'POST', [], [], [], [
            'HTTP_Accept'             => 'application/json',
        ]);
        $response = Response::create();
        $exception = new FailedInternalRequestException($request, $response);
        $this->assertEquals($request, $exception->getRequest());
    }

    /** @test */
    public function it_gets_the_response()
    {
        $request = Request::create('/api/endpoint', 'POST', [], [], [], [
            'HTTP_Accept'             => 'application/json',
        ]);
        $response = Response::create();
        $exception = new FailedInternalRequestException($request, $response);
        $this->assertEquals($response, $exception->getResponse());
    }
}
