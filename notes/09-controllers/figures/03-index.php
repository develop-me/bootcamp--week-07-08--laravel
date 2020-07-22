<?php

public function index()
{
    return view("welcome", [
        // pass in all the articles
        "articles" => Article::all(),
    ]);
}
