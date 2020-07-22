<?php

// first create a comment
$comment = new Comment();
$comment->email = "malala@example.com";
$comment->comment = "A pleasant and life-affirming comment";
$comment->article_id = 1; // assuming you have an article with id 1
$comment->save();

// now try using the article property
$article = $comment->article; // should give you back an article object
$article->id; // 1
$article->title; // the title of the article with ID 1
$article->article; // the article body of the article with ID 1

// now try getting the article's comments
$sameArticle = Article::find(1); // find the article with ID 1
$sameArticle->comments; // a collection containing the comment above
