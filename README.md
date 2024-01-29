# Laravel Rest API Package Laravel

A Laravel package to help you build RESTful APIs.

# Installation
Add the following code in the composer to install this package into your Laravel Project

Add the package name in the composer require

```json
"manish-kapadi/laravel-rest-api-helper": "^1.0"
```
```json
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/GoApptiv/file-management-package-laravel"
    }
]
```

## Guzzle

```php
use ManishKapadi\LaravelRestApiHelper\Facades\Guzzle;

$request = Guzzle::buildRequest('GET', [], 'www.exapmle.com/api/v1/endpoint', [], []);
$response = Guzzle::makeRequest($request);
```
