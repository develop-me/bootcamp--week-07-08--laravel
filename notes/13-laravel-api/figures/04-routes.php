<?php

// use the API controller
use App\Http\Controllers\API\Articles;

// all of the routes are in the /articles end-point
Route::group(["prefix" => "articles"], function () {
    // GET /articles: show all articles
    Route::get("", [Articles::class, "index"]);

    // POST /articles: create a new article
    Route::post("", [Articles::class, "store"]);

    // all these routes also have an article ID in the
    // end-point, e.g. /articles/8
    Route::group(["prefix" => "{article}"], function () {
        // GET /articles/8: show the article
        Route::get("", [Articles::class, "show"]);

        // PUT /articles/8: update the article
        Route::put("", [Articles::class, "update"]);

        // DELETE /articles/8: delete the article
        Route::delete("", [Articles::class, "destroy"]);
    });
});
