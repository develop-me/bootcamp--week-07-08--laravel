<?php

public function index()
{
    // i.e. resources/views/articles/index.blade.php
    return view("articles/index", [
        // pass in all the articles
        "articles" => Article::all(),
    ]);
}
