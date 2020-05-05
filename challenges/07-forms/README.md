# Challenges

## Create Owner Form

- Create a form at `/owners/create` so that you can add an owner
- Make sure that when the form is submitted you're redirected to an appropriate location
- Make sure you add appropriate validation rules
- Update your form to display the validation rules

### Tricksy

- Create an Edit owner form at an appropriate URL

    - **You should be able to reuse your existing owner form**
    - You'll probably want to use the ternary operator in your template so that if there is no `old()` input the form displays the values from the appropriate `owner`

- Add a search form to your [navigation bar](https://getbootstrap.com/docs/4.4/components/navbar/#forms). It should submit the query as a `GET` request. It should then search all of your owners to match against first or last name. You'll want to use a [`like` clause](https://laravel.com/docs/master/queries#where-clauses). It should display the matching users in a list.
    - **You should already have a template for listing owners that you can reuse**
