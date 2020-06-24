<?php

// the article gets passed in for us
// using Route Model Binding
public function show(Article $article)
{
  // just return the article
  return $article;
}
