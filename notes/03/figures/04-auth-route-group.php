<?php

Route::group([
  "prefix" => "articles",
  "middleware" => ["auth:api"],
], function () {
  // ...routes
}
