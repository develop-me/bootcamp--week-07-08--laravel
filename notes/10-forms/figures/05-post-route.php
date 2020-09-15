<?php

Route::group(["prefix" => "articles"], function () {
    Route::get('create', [Articles::class, "create"]);

    // a *post* request
    // needs to go to a different controller method
    Route::post('create', [Articles::class, "createPost"]);

    Route::get('{article}', [Articles::class, "show"]);
});
