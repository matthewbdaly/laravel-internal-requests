# laravel-internal-requests

[![Build Status](https://travis-ci.org/matthewbdaly/laravel-internal-requests.svg?branch=master)](https://travis-ci.org/matthewbdaly/laravel-internal-requests)
[![Coverage Status](https://coveralls.io/repos/github/matthewbdaly/laravel-internal-requests/badge.svg?branch=master)](https://coveralls.io/github/matthewbdaly/laravel-internal-requests?branch=master)

Make internal requests against your Laravel application.

Installation
------------

```
composer require matthewbdaly/laravel-internal-requests
```

What do I want this for?
------------------------

I've used this approach for a mobile app that had offline functionality. Every time it made a change to some data, it needed to be able to store the changes locally. Then, when the app was online again, it needed to send the changes up in a batch so that they could be synced. I created a sync endpoint that used something like this to loop through every request in the batch and process it all in one go. If one failed, I could then catch the exception and persist the unsynced changes in a table in the database so that they could be resolved later without losing the data.

I honestly can't think of any other situation where you'd want to use this approach, but someone else may.

Usage
-----

Type-hint the interface `Matthewbdaly\LaravelInternalRequests\Contracts\Services\MakesInternalRequests` to retrieve the internal request service. Then use it as follows:

```php
$service->request('POST', '/api/resource', ['content' => 'blah']);
```

Any one request accepts three arguments:

* The HTTP verb to use
* The route to hit
* The payload (optional)
