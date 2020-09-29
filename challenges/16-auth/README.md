# Challenges

---

## Auth

- Get Passport setup on your site
- Create a user with `tinker`
- Make an authorisation request
    - Make a note of your token!
- Update your routes so that only logged in users can make `POST`, `PUT`, `PATCH` and `DELETE` requests
    - Make sure you check that it works
- Add `admin` and `vet` roles to your API
    - Update your existing user with the `admin` role
    - Add a new user with the `vet` role
- Update the auth rules so that
    - Only `admin` users can submit data (`POST`/`PUT`/`PATCH`/`DELETE`)
    - `vet` users can view all routes (`GET`)
    - Non-users can't access any routes
