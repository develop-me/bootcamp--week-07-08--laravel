# Challenges

---

## Many-to-Many Relationships

### Routing & Controllers

- Update your `API\Animals` controller's `store` and `update` method so that they can accept an array of treatments

    ```json
    POST /api/animals

    {
        "name": "Miss Kitty Fantastico",
        "dob": "1996-03-10",
        "biteyness": 4,
        "treatments": ["Veda-Sorb Bolus", "Keto-Gel", "QuickDerm Wound Ointment"]
    }
    ```

- Add validation for treatments to the `/api/animals` routes
- Update your `Animals` resources to return treatments
