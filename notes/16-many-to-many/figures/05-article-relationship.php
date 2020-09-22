<?php

class Article extends Model
{
  // ...etc.

  // use the belongsToMany() method again
  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }
}
