# Day 2

## Structure of Day
- Laravel
- Homestead (setup a Vagrant box for Laravel + tools)
- Models & Eloquent
- Blade templating
- Routes & Controllers

## Setup
- Going to set up a Laravel app boilerplate (template) and build it out into 2 apps
- I'm going to build a blog app for demonstration
- You're going to build an app for a Vets practice
- Mention `composer global require laravel/installer` run once - refer to notes

### Demo

- Add `laravel/homestead` package
- Run `vendor/bin/homestead make`
- Update `.env`:

    ```
    DB_DATABASE=homestead
    DB_USERNAME=root
    DB_PASSWORD=secret
    ```

- Get vagrant box up and running: set memory to `512`
- `vagrant up`
- http://homestead.test
- What is Laravel?
    - OOP PHP framework
    - Uses all the OOP stuff from last week: classes, interfaces, inheritance
- MVC
- compare to other stack: e.g. WordPress, backend, frontend, database, templates, data structures, logic, WP has REST API, can use headless with /wp-json/
- Why not Node?
- Introduce https://laravel.com/docs/master/
- What is Homestead


## Artisan
- Show `artisan`: **run on VM** with `vagrant ssh` then `cd code`

## Database Migrations
- How to version database structure: database dumps?
- Migrations solve: version controllable
- Create `Article` model and migration:
    `artisan make:model Article -m`
- Explain `up()` and `down()` methods
- Write article migration
    - `title`: string
    - `content`: text
    - discuss timestamps
- DO NOT USE SPACES OR HYPHENS OR FUNKY STUFF - snake_case
- Run article migration: `artisan migrate`
- Check database
- Explain rollback:
    - `artisan migrate:rollback`: rolls back last "batch"
    - `artisan migrate:rollback --step=1`: rolls back last individual migration
    - `artisan migrate:rollback --step=2`: rolls back last two individual migrations
- Write rollback and demo

## Adding columns
- additional migration, don't change current one
- demo `artisan make:migration modify_articles_table`
- add column
- test migration
- rollback

## Altering columns

- Doctrine DBAL library is used to determine the current state of the column and create the SQL queries needed to make the required adjustments
- `composer require doctrine/dbal`
- make new migration
    ```php
    Schema::table('articles', function (Blueprint $table) {
        $table->string('name', 150)->change();
    });
    ```
