<?php

class ArticleRequest extends FormRequest
{
  // always return true
  // unless you add user logins
  public function authorize()
  {
    return true;
  }

  // an array of validation rules for each submitted value
  public function rules()
  {
    return [
      "title" => ["required", "string", "max:100"],
      "content" => ["required", "string"],
    ];
  }
}
