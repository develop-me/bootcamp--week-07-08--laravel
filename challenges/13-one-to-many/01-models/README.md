# Challenges

## One-to-Many Relationships

### Migrations & Models

Use `artisan tinker` as you go to check that everything is working as expected.

Now we can add animals to our owners.

- Add an `Animal` model
- Create a database migration

    It should have properties for:

    - Name
    - Type (e.g. "cat", "dog", "shark")
    - Date of Birth
    - Weight (in kg)
    - Height (in metres)
    - Biteyness (a value between 1 and 5)

    **Note: you should use snake_case, or this will cause you trouble later on!**

    It should also keep track of the owner of the animal

    An animal can only have one owner, but an owner can have multiple animals

- Add the relevant relationships to the `Animal` and `Owner` models
- Use `artisan tinker` to add some animals to some of your owners
- Create a method on `Animal` called `dangerous()`. It should return `true` if biteyness is 3 or more and `false` otherwise.
