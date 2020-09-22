<?php

public function index()
{
  // needs to return multiple articles
  // so we use the collection method
  return ArticleListResource::collection(Article::all());
}
