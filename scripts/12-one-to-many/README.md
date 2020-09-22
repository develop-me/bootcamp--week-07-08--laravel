# Day 2: Morning

## One-to-Many
- We want to add comments
- Naive approaches to storing comments: serialized array, comments columns
- Talk about relational databases
- Quickly discuss NoSQL
- One-to-many
- Write migration
    `artisan make:model Comment -m`
- Discuss foreign keys
    - Data integrity: can't add invalid relationships
    - Cascading guarantees can't end up with invalid relationships
    ```php
    // create the article_id column
    $table->foreignId("article_id")->unsigned();

    // set up the foreign key constraint
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

- Add form to bottom of `article.blade.php` (see **resources/comments-form.blade.php**)
- Add route for POST:

    ```php
    Route::post('/articles/{article}', [Articles::class, "commentPost"]);
    ```
- Add method:

    ```php
    use App\Models\Comment;
    ```

    ```php
    public function commentPost(Request $request, Article $article)
    {
      // create a new comment, passing in the data from the request JSON
      $comment = new Comment($request->all());

      // this syntax is a bit odd, but it's in the documentation
      // stores the comment in the DB while setting the article_id
      $article->comments()->save($comment);

      // return the stored comment
      return redirect("/articles/{$article->id}");
    }
    ```

- Discuss adding validation `CommentRequest` - but no need to show
- Add list of comments to `article.blade.php`

    ```html
    {{ /* if an article has comments list them */ }}
    @if($article->comments->isNotEmpty())
      <div class="list-group">
        @foreach ($comments as $comment)
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $comment->email }}</h5>
          </div>

          <p class="mb-1">{{ $comment->comment }}</p>
        @endforeach
      </div>
    @else
      <p class="alert alert-secondary">No comments found</p>
    @endif

    @include("articles/comments/form")
    ```
