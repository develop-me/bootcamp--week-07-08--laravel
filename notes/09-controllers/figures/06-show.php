<?php

public function show($id)
{
    $article = Article::find($id);

    return view("articles/show", [
        "article" => $article
    ]);
}
