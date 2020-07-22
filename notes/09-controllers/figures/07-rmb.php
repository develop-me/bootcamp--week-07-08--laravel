<?php

public function show(Article $article)
{
    return view("articles/show", [
        "article" => $article
    ]);
}
