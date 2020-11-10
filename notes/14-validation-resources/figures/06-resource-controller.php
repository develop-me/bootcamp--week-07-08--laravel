<?php

public function store(Request $request)
{
  $data = $request->all();

  // store article in variable
  $article = Article::create($data);

  // return the resource
  return new ArticleResource($article);
}

public function show(Article $article)
{
  // return the resource
  return new ArticleResource($article);
}

public function update(Request $request, Article $article)
{
  $data = $request->all();
  $article->update($data);

  // return the resource
  return new ArticleResource($article);
}
