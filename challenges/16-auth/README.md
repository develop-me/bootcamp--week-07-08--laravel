# Challenges

---

## Auth (Chapter 23)

The "Section 23.x" bits refer to the relevant section in the notes

- Get Passport setup on your site (Section 23.1.1)
- Create a user with `tinker` (Section 23.1.2)
- Make an authorisation request (Section 23.1.2)
    - Make a note of your token!
- Update your routes so that only logged in users can make `POST`, `PUT`, `PATCH` and `DELETE` requests (Section 23.2)
    - Make sure you check that it works
- Add `admin` and `vet` roles to your API (Section 23.3.1)
    - Update your existing user with the `admin` role
    - Add a new user with the `vet` role
- Update the auth rules so that (Section 23.3.2):
    - Only `admin` users can submit data (`POST`/`PUT`/`PATCH`/`DELETE`)
    - `vet` users can view all routes (`GET`)
    - Non-users can't access any routes
