<?php

private $numerals = [
    10 => "X",
    9 => "IX",
    5 => "V",
    4 => "IV",
];

public function forNumber(int $number) : string
{
    $result = "";

    foreach ($this->dictionary as $value => $numeral) {
        // change the if to a while
        // will repeat on a number until it
        // gets lower than it
        while ($number >= $value) {
            $result .= $numeral;
            $number -= $value;
        }
    }

    return $result . str_repeat("I", $number);
}
