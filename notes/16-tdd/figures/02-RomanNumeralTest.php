<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\RomanNumeral;

class RomanNumeralTest extends TestCase
{
    // store the RomanNumeral object
    private $rn;

    // create a new instance of the object
    // when the test starts
    public function setUp() : void
    {
        parent::setUp();
        $this->rn = new RomanNumeral();
    }
}
