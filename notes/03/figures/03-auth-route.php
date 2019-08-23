<?php

$router->get("", "Articles@index")->middleware('auth:api');
