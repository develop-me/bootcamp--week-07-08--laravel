<?php

static public function fromString(string $string) : Tag
{
    return new Tag(["name" => $string]);
}
