<?php

$router->group([
  "prefix" => "articles",
  "middleware" => ["auth:api"],
], function ($router) {
  // ...routes
}
