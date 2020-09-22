# Challenges

## One-to-Many Relationships


### Migrations & Models

Now we can add animals to our owners.

- Add an `Animal` model
- Create a database migration

    It should have properties for:

    - Name
    - Type (e.g. "cat", "dog", "shark")
    - Date of Birth
    - Weight (in kg)
    - Height (in metres)
    - Biteyness (a value between 1 and 5)

    **Note: you should use snake_case, or this will cause you trouble later on!**

    It should also keep track of the owner of the animal

    An animal can only have one owner, but an owner can have multiple animals

- Add the relevant relationships to the `Animal` and `Owner` models
- Use `artisan tinker` to add some animals to some of your owners
- Create a method on `Animal` called `dangerous()`. It should return `true` if biteyness is 3 or more and `false` otherwise.


### Routes

- Add a `GET /api/owners/{owner}/animals` route that lists all the animals that belong to the specified owner
- Add a `GET /api/owners/{owner}/animals/{animal}` route that shows a specific animal
- Add a `POST /api/owners/{owner}/animals` route so that you can add an animal to an owner
- Add a `PUT /api/owners/{owner}/animals/{animal}` route so that you can update an animal
- Add a `DELETE /api/owners/{owner}/animals/{animal}` route so that you can delete an animal


## Tricksy

- Use a Resource to return animals for `GET`, `POST` and `PUT` requests, so that they're formatted as follows:

    ```json
    {
        "name": "Miss Kitty Fantastico",
        "type": "cat",
        "dob": "2000-05-09",
        "weight": 3.2,
        "height": 0.3,
        "biteyness": 2,
        "owner_name": "Willow Rosenberg"
    }
    ```

- Add validation for all of the properties on your `POST` and `PUT` routes

## Über-Tricksy

Make it so that you can only make a request (of any HTTP method) for an animal that belongs to the specified owner.

e.g. If owner with the ID `2` has an animal with the ID `4` then the following route should work (for all HTTP methods):

`/api/owners/2/animals/4`

But the following shouldn't:

```
/api/owners/1/animals/4
/api/owners/3/animals/4
/api/owners/4/animals/4
etc.
```

There are a few options for this:

### 1) With a Controller

This is the easiest option, but leads to a lot of repeated code

- Add a private method to the Animals controller
- Use it to check the owner on each request

### 2) With Middleware

This is the neatest option, but will [require research](http://laravel.com/docs/master/middleware)!

Middleware sites between a request and the controller. A cleverly written piece of middleware can do all the work for you and keep your controller nice an neat.

You'll need to:

- [Create the middleware](http://laravel.com/docs/master/middleware#defining-middleware)
- Add it to your Animals routes
    - **Hint**: You can add a `middleware` property to your animals group:

    ```php
        Route::group([
            "prefix" => "animals",
            "middleware" => "check.owner"
        ], function () {
            // animals routes
        });

    ```

    - You can call `abort(404)` to trigger a 404 from anywhere in your code (inside a Middleware for example)

    - Inside a middleware you can use `$request->route("owner")` to get the Route Model Binding for `Owner` and `$request->route("animal")` to get the Route Model Binding for `Animal`

    See the following files for some examples:

    - [app/Http/Middleware/CheckArticle.php](https://github.com/develop-me/bootcamp--laravel-project/blob/develop/app/Http/Middleware/CheckArticle.php)
    - [app/Http/Kernel.php (Line 65)](https://github.com/develop-me/bootcamp--laravel-project/blob/develop/app/Http/Kernel.php#L65)
    - [routes/api.php (Lines 15-27)](https://github.com/develop-me/bootcamp--laravel-project/blob/develop/routes/api.php#L15-L27)
