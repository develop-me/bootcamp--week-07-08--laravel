# Challenges

---

## Unit Testing (Chapter 5)

1) Make a new `Animal` and check that all and *only* properties listed in `$fillable` are added to the `Animal` object.

1) Create a method on `Animal` called `dangerous`. It should return `false` if the animal's biteyness is `2` or less and `true` otherwise. Add tests for all five possible values of `biteyness`.

1) Create a test to check that your `AnimalResource` doesn't return the `created_at` and `updated_at` properties.


### Testing With Databases

1) Use `Animal::create()` and test that it gets added to the database (This is testing Laravel rather than code we've written, so would not be a good test in a real app, but it's a good starting point)

1) Create a method on `Owner` called `numberOfAnimals`. It should return the number of animals that an owner owns. Write three tests to check an owner with no pets, and owner with one pet, and an owner with 4 pets.

    **Hint**: You can save many items to a model with [`saveMany`](http://laravel.com/docs/6.x/eloquent-relationships)


### Tricksy

- Add appropriate unit tests to all methods on (Section 5.4 & Section 5.5):
    - `App\Http\Controllers\API\Animals`
    - `App\Http\Controllers\API\Owners`
    - `App\Http\Controllers\API\Owners\Animals`
