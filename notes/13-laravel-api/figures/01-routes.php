<?php

# use the appropriate controller
use App\Http\Controllers\API\Articles;

# use array syntax to point to controller
# tidier and harder to make typos
Route::get("/articles", [Articles::class, "index"]);
