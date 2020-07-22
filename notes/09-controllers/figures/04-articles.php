<?php

public function index()
{
    return view("articles", [
        // pass in all the articles
        "articles" => Article::all(),
    ]);
}
