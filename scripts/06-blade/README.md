# Blade

- Laravel's templating language
- Templating language: combine data and markup to create a document
- Lets us:
    - Reuse repeated markup
    - Display data
    - Conditionally show content
    - Loop over Collections
- Live in `resources/views`
- Look at `welcome.blade.php`: loaded by default for `/` (because of routes, we'll look at these later)
- Add super basic template:

    ```html
    <!doctype html>
    <html class="no-js" lang="en">
      <head>
        <meta charset="utf-8" />
        <title>My Amazing Blog</title>
      </head>
      <body>
        <div class="container">
          <nav>
            <a href="/">My Amazing Blog</a>
          </nav>

          <main>
            <a href="#">
              <h5>Tea</h5>
              <small>1 Day Ago</small>
              <p>These teas are the bees knees</p>
            </a>
          </main>
      </body>
    </html>
    ```
- Looks pants, add Bootstrap:

    ```html
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    ```
- Update `<body>`

    ```html
    <div class="container">
      <nav class="mt-4 navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">My Amazing Blog</a>
      </nav>

      <main class="mt-4">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Tea</h5>
              <small>1 Day Ago</small>
            </div>
            <p class="mb-1">These teas are the bees knees</p>
          </a>
        </div>
      </main>
    </div>
    ```
- Lots of classes, but looks nice!


## Extending

- much of this will be same for all pages
- Pull out all except contents of `<main>` into `app.blade.php`
    - Add `@yield("content")` to `app`
    - A 'directive'
- Add "content" section to `welcome.blade.php`


## Partials

- Pull out `<nav>` into partial in `_partials/nav.blade.php` and include back in with `@include("_partials/nav")`


## Loops & Moustaches

- add to `welcome.blade.php`

    ```html
      <div class="list-group">

        { /* loop over all of the articles */ }
        { /* each article object goes into $article */ }
        @foreach (App\Models\Article::all() as $article)
          <a href="/articles/{{ $article->id }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">

              { /* output the article title */ }
              <h5 class="mb-1">{{ $article->title }}</h5>

              { /* use the relativeDate() method */ }
              <small>{{ $article->relativeDate() }}</small>
            </div>

            { /* output the truncated content */ }
            <p class="mb-1">{{ $article->truncate() }}</p>
          </a>
        @endforeach
      </div>
    ```
- Explain `@foreach` directive
- Wouldn't normally use `App\Models\Article` like this in a template, we'll sort that in a bit
- Explain "moustaches" to output data

## Passing Data

- Pull out list item into own partial

    ```html
    <a href="/articles/{{ $article->id }}" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $article->title }}</h5>
        <small>{{ $article->relativeDate() }}</small>
      </div>
      <p class="mb-1">{{ $article->truncate() }}</p>
    </a>
    ```
- Use `@include` directive and pass in `$article`


## Other Directives

- `@if` for conditions - will get to use in challenges
