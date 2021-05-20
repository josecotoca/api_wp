<?php

$router->get('/', function () use ($router) {
    return [
        'version' => $router->app->version(),
        'environment' => $router->app->environment()
    ];
});

$router->post('auth/signin', 'IdentityController@signin');