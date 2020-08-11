# Database Migrations

Over the course of the next two weeks were going to be building an app to help us run a veterinary practice.

## Setup

1) Create a new Laravel project called `vet`
1) Setup Homestead
1) Run `vagrant up`
1) Verify your Homestead is working by visiting [homestead.test](http://homestead.test) or whatever domain you set above [192.168.10.10](http://192.168.10.10) on Windows

## Challenges

We need to have some way of keeping track of all of the owners of the animals. So we'll need an `Owner` model to represent this.

1) Create an `Owner` model
1) Write the migration to create a table with the following fields:

    - `first_name`: the first name of the owner
    - `last_name`: the last name of the owner
    - `telephone`: the phone number of the owner (`string` of length 11)
    - `email`: the email address of the owner

    You'll need to pick sensible types (and lengths) for the fields

    **Note: you should use snake_case, or this will cause you trouble later on!**

1) Run your migration with `artisan migrate`
1) use `mysql` and `USE homestead;` `SHOW TABLES;` to prove its worked
1) Test the rollback with `artisan migrate:rollback` and `artisan migrate` again to recreate.

Next, we'll add some address fields to the `owners` table. We'll do it as a separate migration to get practice.

1) Create a new migration and give it an appropriate name.
    - It will be adding columns to the existing `owners` table
1) Add the following columns:

    - `address_1`: the first line of the owner's address
    - `address_2`: the second line of the owner's address (should be optional, [have a look at the `nullable()` column modifier in the documentation](https://laravel.com/docs/master/migrations#column-modifiers))
    - `town`: the town/city of the owner's address
    - `postcode`: the postcode of the owner's address

1) Make sure you write an appropriate `down()` method
1) Run your migration with `artisan migrate`
1) use `mysql` and `USE homestead;` `SHOW TABLES;` to prove its worked
1) Test the rollback with `artisan migrate:rollback` and `artisan migrate` again to recreate.

## Tricksy

We're going to change the length of the `telephone` column in the `owners` table.

1) Make sure you have `doctrine/dbal` package installed
1) Create a new migration and give it an appropriate name.
    - It will be updating columns of the existing `owners` table
1) Update the `telephone` column so that it can support international phone numbers (a length of 14)
1) Make sure you write an appropriate `down()` method
1) Run your migration with `artisan migrate`
1) use `mysql` and `USE homestead;` `SHOW TABLES;` to prove its worked
1) Test the rollback with `artisan migrate:rollback` and `artisan migrate` again to recreate.
