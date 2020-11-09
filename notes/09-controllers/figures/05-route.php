<?php

Route::get("/articles/{article}", [Articles::class, "show"]);
