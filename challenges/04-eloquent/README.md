# Challenges

- Use `artisan` tinker to create five `Owner`s
    - Phone numbers should just be entered as a series of 11 digits (e.g. 01174927728)
- Use MySQL to view your `owners` table
- Add a `fullName` method to the `Owner` class which displays the full name of the owner
- Add a `fullAddress` method to the `Owner` class which displays the full address of the owner
- Get a specific `Owner` from the DB using its ID
    - Update its address properties to be something different
    - Save it back to the database
- Use MySQL to view your `owners` table and check it's updated

## Tricksy

- Add `formattedPhoneNumber` method which formats the phone number appropriately
    e.g. 0117 492 7728

Read the [Retrieving Models](https://laravel.com/docs/master/eloquent#retrieving-models) documentation. Then, in `artisan tinker`:

- Get back just the owners who live in `Bristol`
- Get back the owners in alphabetical order of their last names
- Get back just the owners who have a telephone number starting with `0117`

Read the [Database: Seeding](http://laravel.com/docs/master/seeding), [Model Factories](https://laravel.com/docs/master/database-testing#writing-factories) and [Faker](https://github.com/fzaninotto/Faker) documentation.

- Add 100 new owners to the DB using seeding, this is a useful ability for later when you will be refreshing your database and populating from scratch.
