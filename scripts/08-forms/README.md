# Day 4

## Forms

- going to create a form to create articles
- new route:
    ```php
    Route::get('/articles/create', [ArticleController::class, "create"]);
    ```
- new Controller method:
    ```php
    // shows create article form
    public function create()
    {
        return view("articles/form");
    }
    ```
- form structure:
    ```php
    <form method="post" class="form card">
        <h2 class="card-header">Create Article</h2>

        <fieldset class="card-body">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value=""
                />
            </div>

            <!--more fields here-->

        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Create Article</button>
        </div>
    </form>
    ```
- talk about `method` attribute
- GET vs. POST
    - Demonstrate with GET: in URL, messy, browser history
    - GET useful for search, when you want a unique URL
    - POST sends data in body of request - will cover that in more detail next week
- form needs `@csrf`
- fields not nullable, add them all in
- demo adding article content field


## Dealing with the post request (submitted data)

- new route:
    ```php
    Route::post('/articles/create', [ArticleController::class, "createPost"]);
    ```
- note `post` part
- new Controller method structure:
    ```php
    public function createPost(Request $request)
    {

    }
    ```
- explore Laravel Request class, $request object, `dump()` it
- full Controller method:
    ```php
    public function createPost(Request $request)
    {
        $data = $request->all();

        dd($data);

        $article = Article::create($data);

        return redirect("/articles/{$article->id}");
    }
    ```

- demo after removing `dd($data)`

## Mass Assignment Vulnerability
- discuss security issues
- should already be on model:
    `protected $fillable = ["title", "content"];`


## Validation
- Should always have server-side validation
- SQL:
    - non-null: `required`
    - `VARCHAR`: `max` length
    - type: `string`, `integer`, `date`
- General:
    - email
    - in database already: `exists:articles,title`
- Create a `FormRequest`: `artisan make:request ArticleRequest`
- Set `auth` to `true` - will look at auth later in week
- Add `rules`
    ```php
    public function rules()
    {
        return [
            "title" => ["required", "string"],
            "content" => ["required", "string"],
        ];
    }
    ```
- Add `use App\Http\Requests\ArticleRequest`
- Inherits from `Request`, so has all same behaviours
- Update `Request` to `ArticleRequest`
- test submitting incorrect data


## Errors
- output error message JUST AFTER field (`<input>` or `<textarea>`):

    ```php
    @error('title')
        <p class="invalid-feedback">
            {{ $message }}
        </p>
    @enderror
    ```

- add class to field `@error('title') is-invalid @enderror`
- repopulating field with submitted content `{{ old("title") }}`
