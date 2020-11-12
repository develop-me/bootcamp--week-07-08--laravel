# Challenges

---

## Unit Testing

### Testing Model methods

1) Create a new static method on your Owner model (in `app/Models/Owner.php`) called `haveWeBananas()`:

    **Hint**: See the Read-Only Chapter 8 of Week 6 for more on `static` methods and properties

    ```php
    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        }

        return "Yes we have {$number} bananas";
    }
    ```

1) Create a new Unit Test to test this method with `artisan make:test BananaTest --unit` and set it to use the Owner model with `App\Models\Owner;`

1) Run all your 1 tests with `vendor/bin/phpunit --testsuite Unit`

1) Now modify your test to check if the output from `haveWeBananas()` function is correct for 0 bananas and 2 bananas:

    ```php
    $this->assertSame(Owner::haveWeBananas(0), "No we have no bananas");

    $this->assertSame(Owner::haveWeBananas(2), "Yes we have 2 bananas");
    ```

1) What about 1 banana? or -12 bananas?

    ```php
    $this->assertSame(Owner::haveWeBananas(1), "Yes we have 1 banana");

    $this->assertSame(Owner::haveWeBananas(-12), "Yes we have -12 bananas");
    ```

1) fix the `haveWeBananas` method so the tests pass.

### Testing Database methods

1) Create a unit test that adds a new Owner to the database. Fetch the owner from the database and check the returned fields match the originals.

1) Create a static method on the `Owner` model that checks if an owner with a given email address already exists

1) Create a unit test that checks for an email address that **isn't** in database, and also for an email that **is** in the database (use `Owner::create` to first make sure an owner with that email does exist).

1) Create a unit test that updates an Owner's telephone number to an entry that is too long, then verifies that the returned value is the correct length.

### Tricksy

1) Create a method on `Owner` called `validPhoneNumber`. It should return `true` if the owner's telephone number is valid and `false` otherwise. Test it with at least five different values.
