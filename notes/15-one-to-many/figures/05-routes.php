<?php

use App\Http\Controllers\API\ArticleController;

// need to use the CommentController
use App\Http\Controllers\API\CommentController;

// existing article routes
// e.g. /api/articles
Route::group(["prefix" => "articles"], function () {
  Route::get("", [ArticleController::class, "index"]);
  Route::post("", [ArticleController::class, "store"]);

  // specific article routes
  // e.g. /api/articles/1
  Route::group(["prefix" => "{article}"], function () {
    Route::get("", [ArticleController::class, "show"]);
    Route::put("", [ArticleController::class, "update"]);
    Route::delete("", [ArticleController::class, "destroy"]);

    // new comments routes
    // e.g. /api/articles/1/comments
    Route::group(["prefix" => "comments"], function () {
      // get all the article's comments
      Route::get("", [CommentController::class, "index"]);

      // create a new comment on the article
      Route::post("", [CommentController::class, "store"]);

      // specific comment routes
      // e.g. /api/articles/1/comments/2
      Route::group(["prefix" => "{comment}"], function () {
        // get a specific comment
        Route::get("", [CommentController::class, "show"]);

        // update a specific comment
        Route::put("", [CommentController::class, "update"]);

        // delete a specific comment
        Route::delete("", [CommentController::class, "destroy"]);
      });
    });
  });
});
