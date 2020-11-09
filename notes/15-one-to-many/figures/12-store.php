<?php

// get the $article using Route Model Binding
public function store(Request $request, Article $article)
{
  $data = $request->all();

  // create a new comment with the data
  $comment = new Comment($data);

  // associate the comment with an article
  $comment->article()->associate($article);

  // save the comment in the DB
  $comment->save();

  // return the new $comment
  return new CommentResource($comment);
}
