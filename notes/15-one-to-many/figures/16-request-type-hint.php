<?php

// use CommentRequest instead of Request
public function store(CommentRequest $request, Article $article)
{
  // ...store code
}

public function update(CommentRequest $request, Article $article, Comment $comment)
{
  // ...update code
}
