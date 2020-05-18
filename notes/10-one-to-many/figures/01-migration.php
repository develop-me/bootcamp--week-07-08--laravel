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
    $table->foreignId("article_id")->unsigned();

    // set up the foreign key constraint
    // this tells MySQL that the article_id column
    // references the id column on the articles table
    // we also want MySQL to automatically remove any
    // comments linked to articles that are deleted
    $table->foreign("article_id")->references("id")
          ->on("articles")->onDelete("cascade");
  });
}

// if you are adding the article_id field and foreign key
// constraint separately to creating the table then your down()
// method should look like this:
public function down()
{
  Schema::table('comments', function (Blueprint $table) {
    // removes foreign key constraint then drops the foreign id column
    $table->dropForeign('comments_article_id_foreign');
    $table->dropColumn("article_id");
  });
}