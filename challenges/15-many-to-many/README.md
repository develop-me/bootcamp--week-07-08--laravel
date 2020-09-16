# Challenges

---

## Many-to-Many Relationships (Chapter 22)

The "Section 22.x" bits refer to the relevant section in the notes

**If you feel confident with TDD, then you might want to consider using it for the following challenges.**

- Add a new model type `Treatment` - you'll need a migration too
- In your migration add (Section 22.1):
    - A `treatments` term-list table:
        - `id`
        - `name`
    - A `animal_treatment` pivot table:
        - `id`
        - `animal_id`
        - `treatment_id`
- Update your models with appropriate relations (Section 22.2):
    - `Treament`: `animals`
    - `Animal`: `treatments`
- Create a static `Treatment::fromStrings` method (Section 22.3):
    - It should take an array of strings and return a `Collection` of `Treatment` objects

        ```php
        $treatments = Treatment::fromStrings(["Fel-O-Vax Lv-K", "Pecti-Cap", "Zymox Ear Cleanser"]);
        ```

        **Hint**: [even more treatments here](https://www.drugs.com/vet-a-to-z-treatment-list.html)

    - Make sure strings are trimmed before being added to the database
    - If a `Treatment` already exists, make sure it doesn't get added twice
- Add a method to `Animal` so it's easy to treatments to an animal (Section 22.4)
- Update your `API\Animals` controller's `store` and `update` method so that they can accept an array of treatments (Section 22.4)

    ```json
    POST /api/animals

    {
        "name": "Miss Kitty Fantastico",
        "dob": "1996-03-10",
        "biteyness": 4,
        "treatments": ["Veda-Sorb Bolus", "Keto-Gel", "QuickDerm Wound Ointment"]
    }
    ```

- Add validation for treatments to the `/api/animals` routes (Section 22.5)
- Update your `Animals` resources to return treatments (Section 22.6)

## Tricksy

- Add appropriate unit tests for the `Treatment::fromStrings()` method
