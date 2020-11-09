<?php

// don't actually use $article, but required for route model binding
public function show(Article $article, Comment $comment)
{
  // return the comment
  return new CommentResource($comment);
}
