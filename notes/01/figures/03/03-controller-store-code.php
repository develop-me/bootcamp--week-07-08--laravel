<?php

public function store(Request $request)
{
  // get all the request data
  // returns an array of all the data the user sent
  $data = $request->all();

  // create article with data and store in DB
  // and return it as JSON
  // automatically gets 201 status as it's a POST request
  return Article::create($data);
}
