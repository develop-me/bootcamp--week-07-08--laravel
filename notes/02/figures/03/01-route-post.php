<?php

// when the user makes a POST request to the URL /articles
// call the store method of the Articles controller
$router->post("articles", "Articles@store");
