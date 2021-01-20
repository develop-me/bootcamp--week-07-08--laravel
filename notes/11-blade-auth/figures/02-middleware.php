<?php

Route::group(["prefix" => "articles"], function () {
    // put behind the auth middleware
    // need to be logged in to use
    Route::group(["middleware" => "auth"], function () {
        Route::get('create', [ArticleController::class, "create"]);
        Route::post('create', [ArticleController::class, "createPost"]);
        Route::get('{article}/edit', [ArticleController::class, "edit"]);
        Route::post('{article}/edit', [ArticleController::class, "editPost"]);
    });

    // don't need to be logged in to view or comment
    Route::get('{article}', [ArticleController::class, "show"]);
    Route::post('{article}', [ArticleController::class, "commentPost"]);
});
