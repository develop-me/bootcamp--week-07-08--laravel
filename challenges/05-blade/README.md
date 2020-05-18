# Challenges

You should make sure you have the [`laravel-blade` VS Code extension](https://marketplace.visualstudio.com/items?itemName=cjhowe7.laravel-blade) installed before starting these challenges.

---

Remember, you're building an app for a veterinary clinic.

- Update the `welcome.blade.php` file to display a basic page based on [HTML5 Boilerplate](https://html5boilerplate.com/) and using [Bootstrap 4](https://getbootstrap.com/). It should have at least:
    - A header/navigation bar
    - Display a basic welcome message in the `<main>` section
    - A footer
- We want the `welcome.blade.php` file to just contain the contents of the `<main>` element. Create an `app.blade.php` file to contain the rest of the markup that will appear the same on every page (e.g. the `<head>`). Then update `welcome.blade.php` to extend this.
- Break up your `app.blade.php` into appropriate partials, like one for the nav bar and one for the footer
- Use `App\Owners::all()` and `@foreach` to list all of your owners on the front page
- Break up `welcome.blade.php` into appropriate partials

## Tricksy

- Add a `@section("title")` to `welcome.blade.php`. Then update `app.blade.php` to output whatever is in it in the `<title>` tag inside `<head>`.

    **Hint**: If you don't want whitespace to appear in the output, but do want to use whitespace to keep your template clean, put whitespace *inside* the moustaches and then use a string:

    ```html
    @section("title"){{
        "Blah blah blah"
    }}@endsection
    ```
