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
- Test `truncate` method of `Article`
    - Test once with short content
    - Test with long content
- Can use `setUp` to share values between tests, e.g. an `Article`
    - Make sure to run `parent::setUp()` first
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
