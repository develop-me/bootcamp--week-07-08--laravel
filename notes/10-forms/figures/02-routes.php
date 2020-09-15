<?php

Route::group(["prefix" => "articles"], function () {
    // add *above* route with URL parameter
    // otherwise 'create' will get included in that
    Route::get('create', [Articles::class, "create"]);
    Route::get('{article}', [Articles::class, "show"]);
});
