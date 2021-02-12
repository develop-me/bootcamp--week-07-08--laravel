# Day 2: Morning

## One-to-Many

### DB & Models

- We want to add comments
- Naive approaches to storing comments: serialized array, comments columns
- Talk about relational databases
- Quickly discuss NoSQL
- One-to-many
- Write migration
    `artisan make:model Comment -m`
- Discuss foreign keys
    - Data integrity **really important**
    - Means we can't add invalid relationships
    - Cascading guarantees can't end up with invalid relationships
    - Laravel 8.0

    ```php
    // create the article_id column
    $table->foreignId("article_id")->constrained()->onDelete("cascade");
    ```
    - Same as (older Laravel):

    ```php
    // laravel 8.0 method just assumes you've named everything in the standard way
    $table->bigInteger("article_id")->unsigned(); 
    $table->foreign("article_id")->references("id")->on("articles")->onDelete("cascade");
    ```

- Add Eloquent relationships

    On articles:
    ```php
    // plural, as an article can have multiple comments
    public function comments() {
        // use hasMany relationship method
        return $this->hasMany(Comment::class);
    }
    ```

    On comments:

    ```php
    // setup the other side of the relationship
    // use singular, as a comment only has one article
    public function article()
    {
        // a comment belongs to an article
        return $this->belongsTo(Article::class);
    }
    ```

- Demonstrate adding comment with `tinker`:

    ```php
    $comment->article_id = 1;
    $comment->save();
    ```
    Then to show have access to the article object from the comment:
    ```php
    $article = $comment->article;
    $article->title;
    ```

- Demonstrate accessing comments for an article:

    ```php
    $article->comments
    ```

**Challenges: 13-one-to-many/01-models**


## Controllers

- Create an `API\Articles\CommentController`
- The URL structure should express the data hierarchy
- Create the routes as a sub-group of `/articles/{article}`

    ```php
    Route::group(["prefix" => "articles"], function () {
      // ...etc

      Route::group(["prefix" => "{article}"], function () {
        // ...etc

        Route::group(["prefix" => "comments"], function () {
          Route::get("", [CommentController::class, "index"]);
          Route::post("", [CommentController::class, "store"]);

          Route::group(["prefix" => "{comment}"], function () {
            Route::get("", [CommentController::class, "show"]);
            Route::put("", [CommentController::class, "update"]);
            Route::delete("", [CommentController::class, "destroy"]);
          });
        });
      });
    });
    ```

- Create a CommentResource

    ```php
    public function toArray($request)
    {
      return [
        "id" => $this->id,
        "email" => $this->email,
        "comment" => $this->comment,
      ];
    }
    ```

- Add the `index` method to controller
    - Get the article with Route Model Binding
    - Use comments property
    - Test with Postman

    ```php
    public function index(Article $article)
    {
      return CommentResource::collection($article->comments);
    }
    ```

- Add the `show` method to controller
    - Need the article for Route Model Binding, but don't use it
    - Test with Postman

    ```php
    public function show(Article $article, Comment $comment)
    {
      return new CommentResource($comment);
    }
    ```

- Add the `destroy` method to controller
    - Need the article for Route Model Binding, but don't use it
    - Test with Postman

    ```php
    public function destroy(Article $article, Comment $comment)
    {
        $comment->delete();
        return response(null, 204);
    }
    ```

- Add `fillable` properties to `Comment`
- Add the `store` method to controller
    - get Article with Route Model Binding
    - use `associate`
    - save
    - test with Postman

    ```php
    public function store(Request $request, Article $article)
    {
      $data = $request->all();
      $comment = new Comment($data);
      $comment->article()->associate($article);
      $comment->save();
      return new CommentResource($comment);
    }
    ```

- Add the `update` method to controller
    - Need the article for Route Model Binding, but don't use it - already associated
    - Test with Postman

    ```php
    public function update(Request $request, Article $article, Comment $comment)
    {
      $data = $request->all();
      $comment->update($data);
      return new CommentResource($comment);
    }
    ```

- Add validation

    ```php
    return [
      // required, use email validation rule
      // and VARCHAR(100), so make sure no longer than 100
      "email" => ["required", "email", "max:100"],

      // required and a string
      "comment" => ["required", "string"],
    ];
    ```


**Challenges: 13-one-to-many/02-controllers**
