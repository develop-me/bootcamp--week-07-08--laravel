# Challenges

---

## Authorisation (Chapter 8)

The "Section 8.x" bits refer to the relevant section in the notes

- Get Passport setup on your site (Section 8.1.1)
- Create a user with `tinker` (Section 8.1.2)
- Make an authorisation request (Section 8.1.2)
    - Make a note of your token!
- Update your routes so that only logged in users can make `POST`, `PUT`, `PATCH` and `DELETE` requests (Section 8.2)
    - Make sure you check that it works
- Add `admin` and `vet` roles to your API (Section 8.3.1)
    - Update your existing user with the `admin` role
    - Add a new user with the `vet` role
- Update the auth rules so that (Section 8.3.2):
    - Only `admin` users can submit data (`POST`/`PUT`/`PATCH`/`DELETE`)
    - `vet` users can view all routes (`GET`)
    - Non-users can't access any routes
