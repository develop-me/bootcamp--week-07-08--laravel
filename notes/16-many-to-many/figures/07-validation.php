<?php

public function rules()
{
    return [
       // ...other rules

       // check tag_ids is present and an array
       "tag_ids" => ["required", "array"],

       // checks the items inside the array are integers and exist
       "tag_ids.*" => ["integer", "exists:tags,id"],
    ];
}
