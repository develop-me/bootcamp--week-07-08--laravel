<?php

static public function fromString(string $string) : Tag
{
    return Tag::create(["name" => $string]);
}
