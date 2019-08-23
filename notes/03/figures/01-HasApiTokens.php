<?php

use Laravel\Passport\HasApiTokens;
// ...

class User extends Authenticatable
{
  use HasApiTokens, Notifiable;
  // ...
}
