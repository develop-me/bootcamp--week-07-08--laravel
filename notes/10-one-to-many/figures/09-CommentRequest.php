<?php

class CommentRequest extends FormRequest
{
  // set to true so the request goes through
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      // required, use email validation rule
      // and VARCHAR(100), so make sure no longer than 100
      "email" => ["required", "email", "max:100"],

      // required and a string
      "comment" => ["required", "string"],
    ];
  }
}
