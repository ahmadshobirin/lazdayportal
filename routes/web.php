<?php

$router->get('/', function () use ($router) {
    return response()->json([
        "success" => 200,
        "message" => "OK",
        "data"    => [
            "project" => "Lazday Portal",
            "framework_version" => $router->app->version(),
            "creator" => "Ahmad Shobirin"
        ],
    ]);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');

    // $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('/me','AuthController@me');
    // });
});
