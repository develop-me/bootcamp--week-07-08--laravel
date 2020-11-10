<?php

Route::get("/articles/{id}", [Articles::class, "show"]);
