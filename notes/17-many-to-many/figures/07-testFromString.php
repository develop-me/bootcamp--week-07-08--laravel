<?php

public function testFromString()
{
    // call the Tag::fromString static method
    $result = Tag::fromString("Test");

    // check we get back a Tag
    // using assertInstanceOf to check the class
    $this->assertInstanceOf(Tag::class, $result);

    // check the tag has the right name
    $this->assertSame("Test", $result->name);
}
