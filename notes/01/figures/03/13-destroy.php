<?php

public function destroy($id)
{
  $article = Article::find($id);
  $article->delete();

  // use a 204 code as there is no content in the response
  return response(null, 204);
}
