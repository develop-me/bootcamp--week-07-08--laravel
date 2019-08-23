<?php

$router->group(["prefix" => "articles"], function ($router) {
  // create an article
  $router->post("", "Articles@store");
  // show all articles
  $router->get("", "Articles@index");

  // show a specific article
  $router->get("{article}", "Articles@show");
});
