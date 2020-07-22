<?php

class Tag extends Model
{
  // ...etc.

  // using the belongsToMany() method
  // as it's a many-to-many relationship
  public function articles()
  {
    return $this->belongsToMany(Article::class);
  }
}
