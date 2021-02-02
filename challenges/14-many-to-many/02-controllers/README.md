# Challenges

---

## Many-to-Many Relationships

### Routing & Controllers

- Update your `store` and `update` methods on the `API\Owners\AnimalController` so that they can accept an array of treatments

    ```json
    POST /api/owners/{owner}/animals

    {
        "name": "Miss Kitty Fantastico",
        "dob": "1996-03-10",
        "biteyness": 4,
        "treatments": ["Veda-Sorb Bolus", "Keto-Gel", "QuickDerm Wound Ointment"]
    }
    ```

- Add validation for treatments to the `/api/{owner}/animals` routes
- Update your `Animals` resources to return treatments
