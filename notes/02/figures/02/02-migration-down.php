<?php

// update the down method
public function down()
{
  // remove the pivot table first
  // otherwise all the tags foreign key contraints would fail
  Schema::dropIfExists("article_tag");

  // then drop the tags table
  Schema::dropIfExists("tags");
}
