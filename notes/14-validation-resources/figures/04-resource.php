<?php

public function toArray($request)
{
  // just show the id, title, and content properties
  // $this represents the current article
  return [
    "id" => $this->id,
    "title" => $this->title,
    "content" => $this->content,
  ];
}
