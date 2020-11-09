<?php

Route::group(["prefix" => "articles"], function () {
    // put behind the auth middleware
    // need to be logged in to use
    Route::group(["middleware" => "auth"], function () {
        Route::get('create', [Articles::class, "create"]);
        Route::post('create', [Articles::class, "createPost"]);
        Route::get('{article}/edit', [Articles::class, "edit"]);
        Route::post('{article}/edit', [Articles::class, "editPost"]);
    });

    // don't need to be logged in to view or comment
    Route::get('{article}', [Articles::class, "show"]);
    Route::post('{article}', [Articles::class, "commentPost"]);
});
