<?php

Route::group(["prefix" => "articles"], function () {
    // put behind the auth middleware
    // need to be logged in to use
    Route::group(["middleware" => "auth"], function () {
        Route::get('create', "Articles@create");
        Route::post('create', "Articles@createPost");
        Route::get('{article}/edit', "Articles@edit");
        Route::post('{article}/edit', "Articles@editPost");
    });

    // don't need to be logged in to view or comment
    Route::get('{article}', "Articles@show");
    Route::post('{article}', "Articles@commentPost");
});
