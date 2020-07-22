<?php

public function testDatabase()
{
    // add an article to the database
    Article::create([
        "title" => "Hello",
        "content" => "Blah blah blah",
    ]);

    // get the first article back from the database
    $articleFromDB = Article::all()->first();

    // check the titles match
    $this->assertSame("Hello", $articleFromDB->title);
}
