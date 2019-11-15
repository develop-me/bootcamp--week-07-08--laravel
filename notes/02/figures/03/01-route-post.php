<?php

// when the user makes a GET request to the URL /articles
// call the index method of the Articles controller
$router->get("articles", "Articles@index");
