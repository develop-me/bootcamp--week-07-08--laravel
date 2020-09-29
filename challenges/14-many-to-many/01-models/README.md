# Challenges

---

## Many-to-Many Relationships

### DB & Models

Use `artisan tinker` to check things are working as you go along.

**If you feel confident with TDD, then you might want to consider using it for the following challenges.**

- Add a new model type `Treatment` - you'll need a migration too
- In your migration add
    - A `treatments` term-list table:
        - `id`
        - `name`
    - A `animal_treatment` pivot table:
        - `id`
        - `animal_id`
        - `treatment_id`
- Update your models with appropriate relations
    - `Treament`: `animals`
    - `Animal`: `treatments`
- Create a static `Treatment::fromStrings` method
    - It should take an array of strings and return a `Collection` of `Treatment` objects

        ```php
        $treatments = Treatment::fromStrings(["Fel-O-Vax Lv-K", "Pecti-Cap", "Zymox Ear Cleanser"]);
        ```

        **Hint**: [even more treatments here](https://www.drugs.com/vet-a-to-z-treatment-list.html)

    - Make sure strings are trimmed before being added to the database
    - If a `Treatment` already exists, make sure it doesn't get added twice
- Add a method to `Animal` so it's easy to treatments to an animal

## Tricksy

- Add appropriate unit tests for the `Treatment::fromStrings()` method
