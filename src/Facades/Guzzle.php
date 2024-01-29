<?php

namespace ManishKapadi\LaravelRestApiHelper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \ManishKapadi\LaravelRestApiHelper\Services\GuzzleService makeRequest(\ManishKapadi\LaravelRestApiHelper\Models\GuzzleRequest $request)
 * @method static \ManishKapadi\LaravelRestApiHelper\Models\GuzzleRequest buildRequest($method, $data, $endPoint, $headers, $queryParams)
 */
class Guzzle extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'guzzle-laravel-rest-api-helper';
    }
}
