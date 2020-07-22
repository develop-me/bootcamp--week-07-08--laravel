<?php

// existing show route
Route::get('{article}', "Articles@show");

// add the *post* route below
Route::post('{article}', "Articles@commentPost");
