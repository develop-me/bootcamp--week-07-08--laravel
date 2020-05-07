# Challenges

---

## API Details (Chapter 4)

**Check your results in Postman as you're going along**

### Validation (Section 4.1)

- Add validation to your API
- Make sure you get a `422` error if you pass in invalid data

### API Resources (Section 4.2)

- Add resources to your `/api/animals` routes so that they return:
    - `id`
    - `name`
    - `dob`
    - `biteyness`
    - `owner`: the *name* of the owner

- Add resources to your `/api/owners` routes so that they return:
    - `id`
    - `name`
    - `address`
    - `animals`: an *array* of animal names

### CORS (Section 4.3)

- Check it's working by adding an `Origin` header to one of your requests


### Tricksy

- Add resources to your `/api/owners/{owner}/animals` routes so that they return:
    - `id`
    - `name`
    - `dob`
    - `biteyness`
    - `owner`: the *name* of the owner

    **Hint**: you should already have a resource lying around that you can use for this
