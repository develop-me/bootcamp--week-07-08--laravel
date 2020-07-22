<?php

static public function fromStrings(array $strings) : Collection
{
    return collect($strings)->map([Tag::class, "fromString"]);
}
