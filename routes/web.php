<?php

$router->get('/', function () use ($router) {
    return response()->json([
        "success" => 200,
        "message" => "OK",
        "data"    => [
            "project" => "Lazday Portal",
            "framewrok_version" => $router->app->version(),
            "created" => "Ahmad Shobirin"
        ],
    ]);
});
