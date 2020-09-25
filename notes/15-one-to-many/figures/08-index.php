<?php

// use Route Model Binding to get the specified article
public function index(Article $article)
{
  // return all comments for a specific article
  // uses Eloquent's magic relationship properties
  return CommentResource::collection($article->comments);
}
