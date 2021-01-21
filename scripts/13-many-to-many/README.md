# Day 2: Afternoon

## Many-to-Many

### DB & Models

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

**Challenges: 14-many-to-many/01-models**

### Controllers

- Need to accept an array of tags: **demonstrate in Postman**

    ```json
    {
        "title": "Agent Smith: Misunderstood?",
        "content": "Dodge this",
        "tags": ["dated", "references", "aplenty"]
    }
    ```

- Add `Tag::fromStrings`:

    ```php
    public static function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map(fn($str) => trim($str))
                                ->unique()
                                ->map(fn($str) => Tag::firstOrCreate(["name" => $str]));
    }
    ```
- Add `Article->setTags()`

    ```php
    public function setTags(array $strings) : Article
    {
      $tags = Tag::fromStrings($strings);

      // we're on an article instance, so use $this
      // pass in collection of IDs
      $this->tags()->sync($tags->pluck("id"));

      // return $this in case we want to chain
      return $this;
    }
    ```

- Don't need new routes, just update article `POST` and `PUT`
- Update ArticleController `update` and `store` methods to use `$article->setTags()`
- Add `tags` validation to `ArticleRequest`
- Update both article `Resources` to include tags array: `->pluck("name")`

**Challenges: 14-many-to-many/02-controllers**
