# Challenges

---

## API Details

**Check your results in Postman as you're going along**

### Validation

- Add validation to your API
- Make sure you get a `422` error if you pass in invalid data

### API Resources

- Add resources to your `/api/owners` routes so that they return:
    - `id`
    - `name`
    - `address`
    - `animals`: an *array* of animal names (remember [`pluck()`](https://laravel.com/docs/master/collections#method-pluck))

- Add resources to your `/api/animals` routes so that they return:
    - `id`
    - `name`
    - `dob`
    - `weight`
    - `height`
    - `biteyness`
    - `owner`: the *name* of the owner

### CORS

- Check it's working by adding an `Origin` header to one of your requests


### Tricksy

- Add resources to your `/api/owners/{owner}/animals` routes so that they return:
    - `id`
    - `name`
    - `dob`
    - `weight`
    - `height`
    - `biteyness`
    - `owner`: the *name* of the owner

    **Hint**: you should already have a resource lying around that you can use for this
