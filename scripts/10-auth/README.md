# Authentication

- Laravel makes it easy to add authentication and authorization
- Authentication: checking a user is who they say they are
    - Normally with a username and password
- Authorisation: allowing a user to do specific things
    - e.g. can only edit posts you wrote
- "Auth" covers both - very easy to get the two confused


## Auth Scaffolding

- First add the UI package: `composer require laravel/ui --dev`
- Add the bootstrap: `artisan ui bootstrap --auth`
- update all view in `resources/views/auth` to `@extend("app")`
- delete `resources/views/layouts`
- Update `routes/web.php`: `Auth::routes(['register' => false]);` - don't need registration
- Go to `/login` page
- Can't login, no user

## User Model

- `App\User` already exists
- Migrations too: they've already been run
- Create new `User` with `artisan tinker`:

    ```php
    $user = new User();
    $user->name = "Your Name"
    $user->email = "your@email.horse"
    $user->password = Hash::make("password")
    $user->save()
    ```
- Should be able to login now

## Password Security

- Plain text - bad!
- Encrypting - still reversible by malicious employee
- Hashing - not reversible, doesn't need to be - just hash to check
- Rainbow Tables
- MD5 - bad!
- SHA1 - bad!
- Salting
- bcrypt: good hashing algorithm, salts for us, reruns repeatedly for fixed period of time
    - stores how it was hashed as part of resulting hash, so easy to check in same way


## Authentication

- Finding out who's logged in
- `use Auth`
- `Auth::user()` - gives back the User model
- `Auth::id()` - gives back the user's id


## Authorisation

- Only allow logged in users to add/edit things
- `auth` "middleware"
- middleware: runs between the request/response and your controller code running

    ```php
    Route::group(["middleware" => "auth"], function () {
        // edity routes
    });
    ```

- Can't edit pages unless logged in, will get login page.
- Try logged out (clear cache if necessary), try logged in
- Gates & Policies: for more fine grained control, but beyond scope

## Under the Hood

- Cookies: small text files, get sent to server with each request
- Sessions: creates a unique token on first request, adds as a cookie, based on IP address, needs to be impossible to guess, allows server to see it's the same person. Has performance implications, so not great for quick requests (e.g. APIs)
