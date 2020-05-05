# Challenges

- Create an `Owners` controller
- Create an `index` method and route `/owners` to it, it should display a list of all the owners
    - Make sure you pass through the owners **from the controller**
- Create a `show` method and route `/owners/{owner}` to it, so that it displays the relevant information for the specified owner ID
    - Pass the `Owner` object in **from the controller**
    - Use Route Model Binding to get 404s working

## Tricksy

- Update your site to paginate the owners so that it only display 5 per page
    - [Pagination](http://laravel.com/docs/master/pagination#paginating-eloquent-results)
