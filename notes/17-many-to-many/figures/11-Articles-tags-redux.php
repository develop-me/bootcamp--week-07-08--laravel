<?php

class Articles extends Controller
{
  // ...etc.

  public function store(ArticleRequest $request)
  {
    $data = $request->only(["title", "article"]);

    // use the new method
    $article = Article::create($data)->setTags($request->get("tags"));

    return new ArticleResource($article);
  }

  // ...etc.

  public function update(ArticleRequest $request, Article $article)
  {
    $data = $request->only(["title", "article"]);
    $article->fill($data)->save();

    // use the new method - can't chain as save returns a bool
    $article->setTags($request->get("tags"));

    return new ArticleResource($article);
  }

  // ...etc.
}
