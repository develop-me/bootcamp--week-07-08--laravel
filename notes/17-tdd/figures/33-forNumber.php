<?php

private $dictionary = [
    // ... other values
    1 => "I",
];

public function forNumber(int $number) : string
{
    $result = "";

    foreach ($this->dictionary as $value => $numeral) {
        while ($number >= $value) {
            $result .= $numeral;
            $number -= $value;
        }
    }

    // just return result
    return $result;
}
