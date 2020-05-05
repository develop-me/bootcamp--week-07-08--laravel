# Challenges

---

## Unit Testing

1) Write a test that makes a new `Owner` and checks that all and *only* properties listed in `$fillable` are added to the `Owner` object.

1) Create a method on `Owner` called `validPhoneNumber`. It should return `true` if the owner's telephone number is valid and `false` otherwise. Test it with at least five different values.


### Testing With Databases

1) Use `Owner::create()` and test that it gets added to the database (This is testing Laravel rather than code we've written, so would not be a good test in a real app, but it's a good starting point)


### Tricksy

- Add appropriate unit tests for any controller methods that accept form data
