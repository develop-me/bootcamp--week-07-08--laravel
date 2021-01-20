<?php

Route::group(["prefix" => "articles"], function () {
    Route::get('create', [ArticleController::class, "create"]);

    // a *post* request
    // needs to go to a different controller method
    Route::post('create', [ArticleController::class, "createPost"]);

    Route::get('{article}', [ArticleController::class, "show"]);
});
