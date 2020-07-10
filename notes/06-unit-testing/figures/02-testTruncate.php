<?php

public function testTruncate()
{
    $article = new Article([
        "title" => "Hello",
        "content" => "Blah blah blah",
    ]);

    // doesn't need truncating
    $this->assertTrue("Blah blah blah" === $article->truncate());

    $article = new Article([
        "title" => "Hello",
        "content" => "Blah blah blah blah blah blah blah",
    ]);

    // should be truncated
    $this->assertTrue("Blah blah blah blah..." === $article->truncate());
}
