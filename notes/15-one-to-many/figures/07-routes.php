<?php

// existing show route
Route::get('{article}', [Articles::class, "show"]);

// add the *post* route below
Route::post('{article}', [Articles::class, "commentPost"]);
