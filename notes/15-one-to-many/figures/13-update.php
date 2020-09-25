<?php

// route model binding for the article (which we don't use) and the comment
public function update(Request $request, Article $article, Comment $comment)
{
  $data = $request->all();

  // update the model with new data
  $comment->fill($data);

  // don't need to associate with article as shouldn't have changed
  // but $article required for route model binding
  // save the comment
  $comment->save();

  // return the updated comment
  return new CommentResource($comment);
}
