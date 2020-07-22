<?php

public function toArray($request)
{
  // just the id and title properties
  return [
    "id" => $this->id,
    "title" => $this->title,
  ];
}
