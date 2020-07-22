<?php

Route::get("", [Articles, "index"])->middleware('auth:api');
