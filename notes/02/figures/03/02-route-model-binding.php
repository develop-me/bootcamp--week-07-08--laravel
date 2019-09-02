<?php

// accept the type-hinted article instead of $id
public function show(Article $article)
{
  // and just return it
  return $article;
}

// accept the article
public function update(Request $request, Article $article)
{
  // no need to find it anymore
  $data = $request->only(["title", "article"]);
  $article->fill($data)->save();
  return $article;
}

// accept the article
public function destroy(Article $article)
{
  // no need to find it anymore
  $article->delete();
  return response(null, 204);
}
