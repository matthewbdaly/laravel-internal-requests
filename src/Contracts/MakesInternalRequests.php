<?php

namespace Matthewbdaly\LaravelInternalRequests\Contracts;

interface MakesInternalRequests
{
    /**
     * Make an internal request
     *
     * @param string $action   The HTTP verb to use.
     * @param string $resource The API resource to look up.
     * @param array  $data     The request body.
     * @return \Illuminate\Http\Response
     */
    public function request(string $action, string $resource, array $data = []);
}
