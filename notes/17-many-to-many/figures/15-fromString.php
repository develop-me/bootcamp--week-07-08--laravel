<?php

static public function fromString(string $string) : Tag
{
    $tag = Tag::where("name", $string)->first();
    return $tag ? $tag : Tag::create(["name" => $string]);
}
