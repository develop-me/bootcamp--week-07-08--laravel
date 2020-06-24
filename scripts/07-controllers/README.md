## Routing

- process of determining what code should be run based on the given URL
- routing common in any web based things - e.g. React Router
- Laravel uses `routes/web.php`
- Route already in there is why `welcome.blade.php` gets loaded
    - When user GETs root route `/` show the `welcome` template
- Add a basic "About" page route

## URL Parameters

- Add `/articles/{id}` route
- Load generic `article.blade.php` - nothing specific to actual article
- Show working for `/articles/<anything>`
- Can use this in a Controller


# Controllers

- don't want to put all our in routes file, big app might have hundreds!
- Controller brings together bits of our app: models, views, etc. - it controls the app
- A route points at a controller method, which returns a response
- Make `Articles` controller: `artisan make:controller Articles`
- Update route `Route::get('/', "Articles@index")`
    - Run `index` method of `Articles` controller when root route is visited
- Update `Articles` controller:

    ```php
    public function index()
    {
        return view("welcome");
    }
    ```
- Can now pass in our articles from the controller - then we could reuse the template for listing *any* set of articles

    ```php
    use App\Article;
    ```

    ```php
    return view("welcome", [
        // pass in all the articles
        "articles" => Article::all(),
    ]);
    ```
- Update `welcome.blade.php`

    ```php
    @foreach ($articles as $article)
    ```
- Rename it `articles.blade.php`

- Next, show an article
- `Route::get("/articles/{article}", "Articles@show");`
- Update controller:

    ```php
    public function show($id)
    {
        $article = Article::find($id);

        return view("articles/show", [
            "article" => $article
        ]);
    }
    ```
- ID passed in automatically from the URL parameter
- update `article.blade.php` to use `$article`

    ```html
    <h2 class="card-header">{{ $article->title }}</h2>
    <article class="card-body">
      {{ $article->content }}
    </article>
    ```
- Try for article that exists
- Try for article that doesn't exist
- Need 404s

## Route Model Binding

- Update controller

    ```php
    public function show(Article $article)
    {
        return view("articles/show", [
            "article" => $article
        ]);
    }
    ```
- Update route: `/article/{article}`
- Had no right to work: Laravel does witchcraft using 'Reflection' - not just running your code, it's actually reading it and poking around.
- Normally best to avoid magic, but this is really useful!
    - Sees the `Article` type declation
    - If it finds one that matches ID runs controller code
    - If it doesn't, doesn't even run controller code, just shows a 404
    - Can customise 404 easily by adding a template for it

## View All Routes

- `artisan route:list`
