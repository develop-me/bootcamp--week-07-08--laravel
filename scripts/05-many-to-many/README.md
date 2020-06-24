# Day 3: Morning

## Many-to-Many

- Symmetrical relationship
- Need to use a pivot table
- Termlists: use `name` column name
- Write migration
    - add two tables
    - remove timestamps from `tags`
    - pivot table second: `article_tag`
    - remove both in `down` but backwards
- Add `public $timestamps = false;` to `Tag`
- Add relationships: `belongsToMany()`
- Need to accept an array of tags
- Use TDD to write `fromString` static method
    - Create test file
    - Setup with database stuff:
        - `use Tests\TestCase`
        - `use Illuminate\Foundation\Testing\RefreshDatabase;`
    - First test: single tag called "Test"
        - `assertInstanceOf(Tag::class, $tag)`
        - `assertSame("Test", $tag->name)`
    - Next test: single tag called "Hammock"
    - Next test: check in DB
    - Next test: check doesn't duplicate tags
- Use TDD to write `fromStrings` static method
    - First test, check it's a `Collection`
    - Check, first is "Test", second is "Hammock"
- Other tests later: trim tags, make sure unique
- Don't need new routes, just update article `POST` and `PUT`
- Add `use App\Tag` to `Articles` controller
- Switch to `$request->only('title', 'article')`
- Use `Tag::fromStrings()`
- Use `sync` method: `$article->tags()->sync($tags->pluck("id")->all())`
- Move repeated logic into `Article` model
- Add `tags` validation to `ArticleRequest`
- Update both article `Resources` to include tags array: `->pluck("name")`
