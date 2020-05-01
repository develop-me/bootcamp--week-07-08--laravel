<?php

class Article extends Model
{
  // ...etc.

  // plural, as an article can have multiple comments
  public function comments()
  {
    // use hasMany relationship method
    return $this->hasMany(Comment::class);
  }
}
