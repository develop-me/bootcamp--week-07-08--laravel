<?php

class Comment extends Model
{
  // setup the other side of the relationship
  // use singular, as a comment only has one article
  public function article()
  {
    // a comment belongs to an article
    return $this->belongsTo(Article::class);
  }
}
