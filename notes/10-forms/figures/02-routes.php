<?php

Route::group(["prefix" => "articles"], function () {
    // add *above* route with URL parameter
    // otherwise 'create' will get included in that
    Route::get('create', [ArticleController::class, "create"]);
    Route::get('{article}', [ArticleController::class, "show"]);
});
