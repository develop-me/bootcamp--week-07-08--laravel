<?php

// back to just 5 and 4
private $dictionary = [
    5 => "V",
    4 => "IV",
];

public function forNumber(int $number) : string
{
    // keep track of result
    $result = "";

    foreach ($this->dictionary as $value => $numeral) {
        // if $number is bigger than or equal to
        // the current dictionary value
        if ($number >= $value) {
            // concatenate the numeral onto the result
            $result .= $numeral;

            // subtract the value from number
            $number -= $value;
        }
    }

    // add I on as many times as necessary
    return $result . str_repeat("I", $number);
}
