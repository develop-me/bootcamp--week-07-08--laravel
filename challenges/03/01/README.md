# Challenges

---

## Many-to-Many Relationships (Chapter 7)

The "Section 7.x" bits refer to the relevant section in the notes

- Add a new model type `Treatment` - you'll need a migration too
- In your migration add (Section 7.1):
    - A `treatments` term-list table:
        - `id`
        - `name`
    - A `animals_treatments` pivot table:
        - `id`
        - `animal_id`
        - `treatment_id`
- Update your models with appropriate relations (Section 7.2):
    - `Treament`: `animals`
    - `Animal`: `treatments`
- Use TDD to create a static `Treatment::fromStrings` method (Section 7.3):
    - It should take an array of strings and return a `Collection` of `Treatment` objects

        ```php
        $treatments = Treatment::fromStrings(["Fel-O-Vax Lv-K", "Pecti-Cap", "Zymox Ear Cleanser"]);
        ```

        **Hint**: [even more treatments here](https://www.drugs.com/vet-a-to-z-treatment-list.html)

    - Make sure strings are trimmed before being added to the database
    - If a `Treatment` already exists, make sure it doesn't get added twice
- Use TDD to add a method to `Animal` so it's easy to treatments to an animal (Section 7.4)
- Use TDD to update your `API\Animals` controller's `store` and `update` method so that they can accept an array of treatments (Section 7.4)

    ```json
    POST /api/animals

    {
        "name": "Miss Kitty Fantastico",
        "dob": "1997-03-10",
        "biteyness": 4,
        "treatments": ["Veda-Sorb Bolus", "Keto-Gel", "QuickDerm Wound Ointment"]
    }
    ```

- Add validation for treatments to the `/api/animals` routes (Section 7.5)
- Update your `Animals` resources to return treatments (Section 7.6)
