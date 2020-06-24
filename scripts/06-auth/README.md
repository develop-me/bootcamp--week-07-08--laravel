# Day 3: Afternoon

## Authorisation

- APIs are stateless: no cookies/sessions
- Use tokens to authorise
- OAuth2
    - Make a request to an auth end-point
    - Checks if valid
    - Gives back token
    - Use token on all future requests
    - Checks token to find out which user
    - Gives back response if valid


### Passport

- Does OAuth2 for us

#### Setup

- Install: `composer require laravel/passport`
- Run migrations: `artisan migrate`
- Passport install script: `artisan passport:install`
    - Sets up cryptographic stuff
    - Note `Client ID` and `Client secret`
- Update `User` model with `HasApiTokens` trait
    - `use Laravel\Passport\HasApiTokens;`
- Add to `boot` of `AuthServiceProvider`
    - `Passport::routes();`
- In `config/auth.php`
    - Update `api.driver` to `passport`

#### Create a User

- `artisan tinker`
- Make a user (`Hash::make()` password)
- Make request to `http://homestead.test/oauth/token`:

    ```json
    {
        "grant_type": "password",
        "client_id": "<your_client_id>",
        "client_secret": "<your_client_secret>",
        "username": "an.author@gmail.com",
        "password": "password"
    }
    ```

- Should get back a token

#### Authorisation

- Single route: `->middleware('auth:api');`
- Group: `"middleware" => ["auth:api"],`

#### Roles

- "author" and "subscriber" roles
- `artisan make:migration modify_users_table`
    - up: `$table->string('role')->after('name')->default('subscriber');`
    - down: `$table->dropColumn('role');`
    - `artisan migrate`
    - Add to `$fillable` of `User`
- `artisan tinker`:
    - Update existing user to be `author`
    - Add new user as a `subscriber`
- In request validation `authorize` method: `return $this->user()['role'] === 'author';`
