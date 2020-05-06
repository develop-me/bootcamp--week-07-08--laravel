# Challenges

- Create an `Owners` controller
- Create an `index` method and route `/owners` to it, it should display a list of all the owners
    - Use the owner list template you already wrote for `welcome.blade.php`
    - Make sure you pass through the owners **from the controller**
    - If there aren't any owners, you should display a message saying "No owners found". You'll need the [Blade `@if` directive](https://laravel.com/docs/master/blade#if-statements)
- Create a `Home` controller with an `index` method and route `/` to it. It should load your `welcome.blade.php` file. Rather then displaying the list of owners, it should say "Good Morning!" if it's the morning, "Good Afternoon" if it's the afternoon, and "Good Evening" if it's the evening.
    - **This logic shouldn't go in the template**
- Create a `show` method and route `/owners/{owner}` to it, so that it displays the relevant information for the specified owner ID
    - Pass the `Owner` object in **from the controller**
    - Use Route Model Binding to get 404s working

## Tricksy

- Update your site to paginate the owners so that it only display 5 per page
    - [Pagination](http://laravel.com/docs/master/pagination#paginating-eloquent-results)
