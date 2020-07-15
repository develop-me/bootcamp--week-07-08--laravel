<?php

// accept the Request object
// this gives us access to the submitted data
public function createPost(Request $request)
{
    // get all of the submitted data
    $data = $request->all();

    // create a new article, passing in the submitted data
    $article = Article::create($data);

    // redirect the browser to the new article
    return redirect("/articles/{$article->id}");
}
