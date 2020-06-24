<?php

public function authorize()
{
    return $this->user()['role'] === 'author';
}
