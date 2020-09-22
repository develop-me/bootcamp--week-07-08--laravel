<?php

public function rules()
{
    return [
        "title" => ["required", "string", "max:100"],
        "article" => ["required", "string"]
    ];
}
