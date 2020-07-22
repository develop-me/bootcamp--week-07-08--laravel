<?php

Route::group(["prefix" => "articles"], function () {
    Route::get('create', "Articles@create");

    // a *post* request
    // needs to go to a different controller method
    Route::post('create', "Articles@createPost");

    Route::get('{article}', "Articles@show");
});
