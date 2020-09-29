<?php

public function rules()
{
    return [
        "title" => ["required", "string"],
        "content" => ["required", "string"],
    ];
}
