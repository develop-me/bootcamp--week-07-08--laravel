## Eloquent

- Don't want to write MySQL in PHP: strings are unpleasant to work with and limits us to MySQL
- ORM: Object Relational Mapper - Ruby on Rails popularised, Eloquent
- Going to store blog posts, comments in database
- Way to read/write to database

## Models

- Check out the Article model
- Creates Article model class, thus the uppercase "A"
- Explain why singular name used

### Tinker
- Introduce Tinker
- Demo `artisan tinker` to create a new model:
    ```bash
    $article = new Article();
    $article->title = "My amazing blog post";
    $article->article = "Today I went shopping. I bought some spoons.";
    $article->save();
    ```

- Talk about how methods are built in by extending Laravel's Model class with `class Article extends Model`
- we already have `save()`, `where()`, `all()` etc.

- Class represents a table
- Object instance represents a row of the table

- Look at `id` after save
- Show `new Article([/* data */])`
    - Demonstrate mass assignment error
    - Briefly explain issue: will cover in more detail with forms
    - Add `$fillable` properties
- Show
    - `Article::all()`
        - **Returns a `Collection`**: already worked with these last week
    - `$article = Article::find(1);`
    - `$article->title;`
    - `$article->published = 0;`
    - `$article->save();`
- Make a change and look at `updated_at` property
- Quick `Article::where()` demo: `Article::where('title', 'Blah')->orderBy('title')->get()`
- Comparisons `Article::where('updated_at', '>', '2020-03-01')->orderBy('created_at')->get()`

## Model methods

- define `truncate()` method:
    ```php
    use Illuminate\Support\Str;
    ```

    ```php
    public function truncate()
    {
        // use the Laravel Str::limit method
        // to limit to 20 characters
        return Str::limit($this->content, 20);
    }
    ```
- define method to show how old something is, e.g.
    ```php
    public function relativeDate()
    {
        return $this->created_at->diffForHumans();
    }
    ```
- Use `artisan tinker` to demonstrate new methods on a few object instances
