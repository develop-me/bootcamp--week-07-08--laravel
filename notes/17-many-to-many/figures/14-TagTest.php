<?php

// test no duplicates
$result = Tag::fromString("Test");
$allTags = Tag::where("name", "Test");
$this->assertSame(1, $allTags->count());
