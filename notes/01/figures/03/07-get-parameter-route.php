<?php

// {article} is a url parameter representing the id we want
$router->get("/articles/{article}", "Articles@show");
