<?php

// don't actually use $article, but required for route model binding
public function destroy(Article $article, Comment $comment)
{
  // delete the comment
  $comment->delete();

  // return an empty response
  return response(null, 204);
}
