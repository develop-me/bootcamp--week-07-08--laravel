<?php

class Article extends Model
{
  // ...etc.

  // just accept an array of strings
  // we don't want to pass request in as there's no
  // reason models should know about about the request
  public function setTags(array $strings)
  {
    $tags = Tag::fromStrings($strings);

    // we're on an article instance, so use $this
    // pass in collection of IDs
    $this->tags()->sync($tags->pluck("id"));

    // return $this in case we want to chain
    return $this;
  }
}
