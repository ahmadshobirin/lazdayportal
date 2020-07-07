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
