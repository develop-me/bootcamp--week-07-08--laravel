<?php

public function destroy(Article $article)
{
  // delete the article from the DB
  $article->delete();

  // use a 204 code as there is no content in the response
  return response(null, 204);
}
