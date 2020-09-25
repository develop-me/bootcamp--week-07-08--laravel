<?php

use App\Http\Controllers\API\Articles;

// need to use the Comments controller
use App\Http\Controllers\API\Comments;

// existing article routes
// e.g. /api/articles
Route::group(["prefix" => "articles"], function () {
  Route::get("", [Articles::class, "index"]);
  Route::post("", [Articles::class, "store"]);

  // specific article routes
  // e.g. /api/articles/1
  Route::group(["prefix" => "{article}"], function () {
    Route::get("", [Articles::class, "show"]);
    Route::put("", [Articles::class, "update"]);
    Route::delete("", [Articles::class, "destroy"]);

    // new comments routes
    // e.g. /api/articles/1/comments
    Route::group(["prefix" => "comments"], function () {
      // get all the article's comments
      Route::get("", [Comments::class, "index"]);

      // create a new comment on the article
      Route::post("", [Comments::class, "store"]);

      // specific comment routes
      // e.g. /api/articles/1/comments/2
      Route::group(["prefix" => "{comment}"], function () {
        // get a specific comment
        Route::get("", [Comments::class, "show"]);

        // update a specific comment
        Route::put("", [Comments::class, "update"]);

        // delete a specific comment
        Route::delete("", [Comments::class, "destroy"]);
      });
    });
  });
});
