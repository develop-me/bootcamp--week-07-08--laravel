<?php

public function up()
{
  Schema::create("comments", function (Blueprint $table) {
    // create the basic comments columns
    $table->id();
    $table->string("email", 100); // use a VARCHAR
    $table->text("comment"); // could be any length
    $table->timestamps();

    // create the article_id column
    // add a foreign key constraint
    // setup cascading on delete
    // this tells MySQL that the article_id column
    // references the id column on the articles table
    // we also want MySQL to automatically remove any
    // comments linked to articles that are deleted
    $table->foreignId("article_id")
          ->constrained()
          ->onDelete("cascade");

    // in older version of Laravel this would have been written as 
    /*
    // create the column
    $table->bigInteger("article_id)->unsigned();

    // setup the foreign key 
    $table->foreign("article_id")
          ->references("id")->on("articles")
          ->onDelete("cascade");
    */
  });
}