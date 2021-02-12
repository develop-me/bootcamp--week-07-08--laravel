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

#### Array of IDs

- Add some tags manually using `artisan tinker` and make a note of their IDs

- Need to accept an array of tag ids: **demonstrate in Postman**

    ```json
    {
        "title": "Agent Smith: Misunderstood?",
        "content": "Dodge this",
        "tag_ids": [1, 3, 8]
    }
    ```

- Don't need new routes, just update article `POST` and `PUT`

- Update `store` and `update` methods of `ArticleContoller` to use `sync`:

    ```php
    $tagIDs = $request->get("tag_ids");
    $article->tags()->sync();
    ```

    - The `create` and `update` methods will ignore `tag_ids` as it's not in `$fillable`, so don't need to change those

- Add validation rules:

    ```php
   // check tag_ids is present and an array
   "tag_ids" => ["required", "array"],

   // checks the items inside the array
   // - are an integer
   // - are an existing tag id
   "tag_ids.*" => ["integer", "exists:tags,id"],
    ```

- Update both article `Resources` to include tags array: `->pluck("name")`

– But: IDs have some issues
    - probably just coming from an input the user has typed into
    - not ideal to have to look up IDs
    - tags already need to exist


**Challenges: 14-many-to-many/02-sync-ids**


#### Array of Tags

- So, let's accept an array of *tags*: **demonstrate in Postman**

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

- Update ArticleController `update` and `store` methods to use `$article->setTags()` (and remove `tag_ids` stuff)

- Add `tags` validation to `ArticleRequest` (and remove `tag_ids`)

    ```php
   "tags" => ["required", "array"], // check tags is an array
   "tags.*" => ["string", "max:30"], // check members of tags are strings
   ```

**Challenges: 14-many-to-many/03-sync-strings**
