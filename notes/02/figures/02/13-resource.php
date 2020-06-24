<?php

public function toArray($request)
{
    return [
        // ... other properties

        // pluck the name property of each tag
        "tags" => $this->tags->pluck("name"),
    ];
}
