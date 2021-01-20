<?php

Route::get("/articles/{id}", [ArticleController::class, "show"]);
