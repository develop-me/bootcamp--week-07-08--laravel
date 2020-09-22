<?php

public static function fromStrings(array $strings) : Collection
{
    return collect($strings)->map(fn($str) => trim($str))
                            ->unique()
                            ->map(fn($str) => Tag::firstOrCreate(["name" => $str]));
}
