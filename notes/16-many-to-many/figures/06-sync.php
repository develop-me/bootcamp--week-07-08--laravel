<?php

class ArticleController extends Controller
{
  // ...etc.

  public function store(ArticleRequest $request)
  {
    // create ignores tag_ids because of $fillable
    $data = $request->all();
    $article = Article::create($data);

    // get the tag ids from the request
    $tagIDs = $request->get("tag_ids");

    // use the sync method to update the pivot table
    $article->tags()->sync();

    return new ArticleResource($article);
  }

  // ...etc.

  public function update(ArticleRequest $request, Article $article)
  {
    // update ignores tag_ids because of $fillable
    $data = $request->all();
    $article->update($data);

    // get the tag ids from the request
    $tagIDs = $request->get("tag_ids");

    // use the sync method to update the pivot table
    $article->tags()->sync();

    return new ArticleResource($article);
  }

  // ...etc.
}
