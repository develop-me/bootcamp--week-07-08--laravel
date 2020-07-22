<?php

// get the first tag from the database
$tagFromDB = Tag::all()->first();

// check we get a tag
$this->assertInstanceOf(Tag::class, $tagFromDB);

// check it's got the right name
$this->assertSame("Test", $tagFromDB->name);
