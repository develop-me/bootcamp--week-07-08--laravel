<?php

public function toArray($request)
{
  return [
    "id" => $this->id,
    "email" => $this->email,
    "comment" => $this->comment,
  ];
}
