<?php

// the id gets passed in for us
public function show($id)
{
  return Article::find($id);
}
