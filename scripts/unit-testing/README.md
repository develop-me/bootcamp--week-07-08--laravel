## Unit Testing

- Testing small bits of code to check it works
- Easier to see what's going on than `dump`ing all over the place
- Automated testing is useful as it saves manual testing
- Laravel makes it really easy


### Running Tests

- In `tests/Unit`
- Already an `ExampleText
- `vendor/bin/phpunit --testsuite Unit`
- Need to filter to avoid "Feature Tests"
- Delete `ExampleTest`

### Generating Tests

- `artisan make:test ArticleTest --unit`
- Look at `ArticleTest`
- Class should end in `Test`
- Methods should start with `test`
- Need to "assert" something

### Assertions

- Saying "x *should* be the case"
- Lots of different ones, but we'll look at
    - `assertTrue`
    - `assertSame`: same type and value
    - Could use `assertTrue` for all, but other methods provide better feedback
- Create an `Article`
    - **If the model has a date property, `use Tests\TestCase`**, if it doesn't then not necessary (faster not to if possible)
    - New method `assertFillable`
    - Create an `Article`
    - Use `assertTrue` to check `title` matches
    - Change to `assertSame`: `expected` then `actual`
    - Add `"danger" => "Aaaaargh!"` property
    - Use `assertSame(null, $article->danger)` to check it's not been added
    - Rerun test: make it fail too
- Last test was a bit pointless, not checking our code
- Test `truncate` method of `Article`
    - Test once with short content
    - Test with long content
- Setup reused article in `__construct`
    - Make sure to run `parent::__construct()` first
    - Store as property
    - Update tests

### Testing Database

- Don't want to use the same database
    - Will pollute our data
    - Makes the tests unpredictable
- Laravel uses an in-memory SQLite DB for testing by default
    - Fast!
    - Show `phpunit.xml` - `DB_` bits
- Update test to use `Tests\TestCase`
- `use Illuminate\Foundation\Testing\RefreshDatabase;` trait
- Automatically resets database for **each test**
- Use `Article::create()`
    - Get out of DB and use `assertSame`
    - Database wiped for each test, so guaranteed to be first item
- SQLite won't let you add new columns to existing database tables unless the new column either has a default value or is nullable
    - Makes sense from a data consistency stand-point
    - MySQL doesn't enforce this (which it probably should)
    - Update any migrations appropriately (`->nullable()` or `->default()`)


### Testing Controllers

- Technically verging into feature testing
    - But very useful to be able to test controllers
- `artisan make:test Http\\Controllers\\ArticlesTest --unit`
    - Update with DB stuff (`use Tests\TestCase` and `RefreshDatabase`)
    - Add `use` for model
    - Use `$response = $this->call('POST', '/api/articles', [/* data */])`
    - Get from DB and check `->content`
    - run tests `vendor/bin/phpunit --testsuite Unit`
- If the fake request goes wrong your assertions will fail. In this case, make the same request with the exact same data for real (e.g. in the browser) and then you should see what's going on.
