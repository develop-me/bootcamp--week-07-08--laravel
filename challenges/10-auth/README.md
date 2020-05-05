# Challenges

## Auth Scaffolding

- Create a `User`
- Add login functionality to your site
- Make it so that only logged-in users can add/edit the data on the site
- Add an indicator in your `<nav>` to say who is logged in (if at all)

### Tricksy

- Add a "Logout" button
    You can logout by submitting a `POST` request to the `/logout` route
- Add a relationship between users and owners
    - When viewing an owner it should show you which user added the owner
- Create a user profile page at a sensible URL, where a user can update their name, email address, and password
- Look into [Authorization](http://laravel.com/docs/master/authorization) and update your user profile form so a user can only edit *their own* profile. Create a few users to test this.
- Add a Unit Test to check that a user can only edit their own profile. You'll need to look at [HTTP Tests](http://laravel.com/docs/master/http-tests)
