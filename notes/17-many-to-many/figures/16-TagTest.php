<?php

public function testFromStrings()
{
    // call the fromStrings method
    $result = Tag::fromStrings(["Test", "Hammock"]);

    // check it's a Collection
    $this->assertInstanceOf(Collection::class, $result);

    // check the first item is "Test"
    $this->assertSame("Test", $result[0]->name);

    // check the second item is "Hammock"
    $this->assertSame("Hammock", $result[1]->name);
}
