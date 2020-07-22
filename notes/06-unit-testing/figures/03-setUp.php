<?php

private $article;

public function setUp() : void
{
    // make sure we call the parent's setUp() method
    parent::setUp();

    // setup the article
    $this->article = new Article([
        "title" => "Hello",
        "content" => "Blah blah blah",
    ]);
}

public function testTruncate()
{
    // use the article *property*
    $this->assertSame("Blah blah blah", $this->article->truncate());

    // ...rest of test
}
