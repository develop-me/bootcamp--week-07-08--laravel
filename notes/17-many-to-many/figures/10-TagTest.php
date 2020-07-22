<?php

// test a different tag
$result = Tag::fromString("Hammock");
$this->assertInstanceOf(Tag::class, $result);
$this->assertSame("Hammock", $result->name);
