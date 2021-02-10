<?php

# use the appropriate controller
use App\Http\Controllers\API\ArticleController;

# use array syntax to point to controller
# tidier and harder to make typos
Route::get("/articles", [ArticleController::class, "index"]);
