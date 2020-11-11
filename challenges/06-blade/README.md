# Challenges

You should make sure you have the [`laravel-blade` VS Code extension](https://marketplace.visualstudio.com/items?itemName=cjhowe7.laravel-blade) installed before starting these challenges.

---

Remember, you're building an app for a veterinary clinic.

- Update the `welcome.blade.php` file to display a basic page based on the **HTML from notes**. It should have at least:
  - A header/navigation bar
  - Display a basic welcome message in the `<main>` section
  - A footer
- We want the `welcome.blade.php` file to just contain the contents of the `<main>` element. Create an `app.blade.php` file to contain the rest of the markup that will appear the same on every page (e.g. the `<head>`). Then update `welcome.blade.php` to extend this.
- Break up your `app.blade.php` into appropriate partials, like one for the nav bar and one for the footer and use `@include` to include each subview
- Use `App\Models\Owners::all()` and `@foreach` to list all of your owners on the front page
- Break up `welcome.blade.php` into appropriate partials, for example you may want to use the markup for an owner in other places later, so this could be made reusable

## Reference

If you want to use more of the boilerplate's component styling:

- [HTML5 Boilerplate documentation](https://html5boilerplate.com/)
- [Bootstrap 4 documentation](https://getbootstrap.com/)

## Tricksy

- Add a `@section("title")` to `welcome.blade.php`. Then update `app.blade.php` to output whatever is in it in the `<title>` tag inside `<head>`.

    **Hint**: If you don't want whitespace to appear in the output, but do want to use whitespace to keep your template clean, put whitespace *inside* the moustaches and then use a string:

    ```html
    @section("title"){{
        "Blah blah blah"
    }}@endsection
    ```

- Add unit tests for your `/` homepage Route, ensure a `200` response from Routes that should exist, and `404` from a route (URL) that shouldn't exist [(see docs here)](https://laravel.com/docs/master/http-tests#introduction). You'll need to change `use PHPUnit\Framework\TestCase;` to `use Tests\TestCase;`.
- Add unit tests for your views to ensure the correct Blade template is invokes with e.g. `assertViewIs('welcome');` [(see docs here)](https://laravel.com/docs/master/http-tests#assert-view-is)
