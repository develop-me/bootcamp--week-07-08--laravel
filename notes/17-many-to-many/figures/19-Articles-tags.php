<?php

class Articles extends Controller
{
  // ...etc.

  public function store(ArticleRequest $request)
  {
    // only get the title and content fields
    $data = $request->only(["title", "content"]);
    $article = Article::create($data);

    // get back a collection of tag objects
    $tags = Tag::fromStrings($request->get("tags"));

    // sync the tags: needs an array of Tag ids
    $article->tags()->sync($tags->pluck("id")->all());

    return new ArticleResource($article);
  }

  // ...etc.

  public function update(ArticleRequest $request, Article $article)
  {
    // only get the title and content fields
    $data = $request->only(["title", "content"]);
    $article->fill($data)->save();

    // get back a collection of tag objects
    $tags = Tag::fromStrings($request->get("tags"));

    // sync the tags: needs an array of Tag ids
    $article->tags()->sync($tags->pluck("id")->all());

    return new ArticleResource($article);
  }

  // ...etc.
}
