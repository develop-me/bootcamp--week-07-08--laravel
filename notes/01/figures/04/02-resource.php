<?php

public function toArray($request)
{
  // just show the id, title, and article properties
  // $this represents the current article
  return [
    "id" => $this->id,
    "title" => $this->title,
    "article" => $this->article,
  ];
}
