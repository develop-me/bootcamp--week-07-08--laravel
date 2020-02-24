<?php

// request is passed in because we ask for it with type hinting
// and the URL parameter is always passed in
public function update(Request $request, Article $article)
{
    // get the request data
    $data = $request->all();

    // update the article using the fill method
    // then save it to the database
    $article->fill($data)->save();

    // return the updated version
    return $article;
}
