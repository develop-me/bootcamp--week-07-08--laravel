<?php

// values we want to check
private $dictionary = [
    5 => "V",
    4 => "IV",
];

public function forNumber(int $number) : string
{
    // go through each value
    // if it's in the dictionary
    // return the corresponding value
    foreach ($this->dictionary as $value => $numeral) {
        if ($number === $value) {
            return $numeral;
        }
    }

    // otherwise just do as before
    return str_repeat("I", $number);
}
