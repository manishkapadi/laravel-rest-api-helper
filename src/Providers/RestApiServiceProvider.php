<?php

namespace ManishKapadi\LaravelRestApiHelper\Providers;

use ManishKapadi\LaravelRestApiHelper\Services\GuzzleService;
use Illuminate\Support\ServiceProvider;

class RestApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton('guzzle-laravel-rest-api-helper', function ($app) {
            return new GuzzleService();
        });
    }
}
