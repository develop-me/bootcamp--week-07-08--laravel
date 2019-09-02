<?php

// use route model binding on the URL parameter
// then we'll get the article passed in for us
public function index(Article $article)
{
  // use the comments property of the article model
  return $article->comments;
}
