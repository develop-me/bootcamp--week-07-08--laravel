<?php

public function up()
{
  // create the tags table
  // it's a termlist so call the string column name
  // don't need timestamps - not very useful here
  Schema::create("tags", function (Blueprint $table) {
    $table->id();
    $table->string("name", 30);
  });

  // create the pivot table using the Eloquent naming convention
  Schema::create("article_tag", function (Blueprint $table) {
    // still have an id column
    $table->id();

    // create the article id column and foreign key
    $table->foreignId("article_id")->unsigned();
    $table->foreign("article_id")->references("id")
          ->on("articles")->onDelete("cascade");

    // create the tag id column and foreign key
    $table->foreignId("tag_id")->unsigned();
    $table->foreign("tag_id")->references("id")
          ->on("tags")->onDelete("cascade");
  });
}
