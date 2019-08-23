<?php

class Tag extends Model
{
  // accepts the array of strings from the request
  public static function fromStrings(array $strings)
  {
    return collect($strings)->map(function ($string) {
      // trim any whitespace around string
      return trim($string);
    })->map(function ($string) {
      // check if it's in the database
      $tag = Tag::where("name", $string)->first();

      // if tag exists return it, otherwise create a new one
      return $tag ? $tag : Tag::create(["name" => $string]);
    });
  }

  // ...etc.
}
