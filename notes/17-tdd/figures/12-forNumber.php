<?php

public function forNumber(int $number) : string
{
    if ($number === 4) {
        return "IV";
    }

    return str_repeat("I", $number);
}
