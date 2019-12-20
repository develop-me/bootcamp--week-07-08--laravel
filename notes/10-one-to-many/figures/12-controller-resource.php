<?php

public function index(Article $article)
{
  // return a collection of comments
  return CommentResource::collection($article->comments);
}

public function store(CommentRequest $request, Article $article)
{
  // ...store code

  // return a single comment
  return new CommentResource($comment);
}
