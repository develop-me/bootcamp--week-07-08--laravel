<?php

protected $fillable = ["name"];

static public function fromString() : Tag
{
    return new Tag(["name" => "Test"]);
}
