<?php

// we need to accept Request first, using type hinting
// and then use route model binding to get the relevant
// article from the URL parameter
public function commentPost(Request $request, Article $article)
{
  // create a new comment, passing in the data from the request JSON
  $comment = new Comment($request->all());

  // this syntax is a bit odd, but it's in the documentation
  // stores the comment in the DB while setting the article_id
  $article->comments()->save($comment);

  // return the stored comment
  return redirect("/articles/{$article->id}");
}
