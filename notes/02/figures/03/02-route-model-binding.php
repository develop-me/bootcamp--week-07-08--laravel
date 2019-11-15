<?php

// accept the type-hinted article instead of $id
public function show(Article $article)
{
  // and just return it
  return $article;
}
