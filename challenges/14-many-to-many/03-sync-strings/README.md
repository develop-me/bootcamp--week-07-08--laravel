# Challenges

---

## Many-to-Many Relationships

### Syncing Strings

- Update your `store` and `update` methods on the `API\Owners\AnimalController` so that they can accept an array of treatment strings

    **Hint**: in the `store` method, make sure the animal is saved before setting treatments.

    ```json
    POST /api/owners/{owner}/animals

    {
        "name": "Miss Kitty Fantastico",
        "dob": "1996-03-10",
        "biteyness": 4,
        "treatments": ["Veda-Sorb Bolus", "Keto-Gel", "QuickDerm Wound Ointment"]
    }
    ```

    Make sure you remove anything to do with `treatment_ids`

- Update the validation for treatments to the `/api/{owner}/animals` routes
