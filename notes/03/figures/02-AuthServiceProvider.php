<?php

use Laravel\Passport\Passport;
// ...

class AuthServiceProvider extends ServiceProvider
{
  // ...

  public function boot()
  {
    // ...
    Passport::routes();
  }
}
