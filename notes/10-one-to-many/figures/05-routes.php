<?php

$router->group(["prefix" => "articles"], function ($router) {
    // ...article routes

    // comment routes
    $router->post("{article}/comments", "Comments@store");
    $router->get("{article}/comments", "Comments@index");
});
