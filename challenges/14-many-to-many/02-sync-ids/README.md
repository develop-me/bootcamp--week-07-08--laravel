# Challenges

---

## Many-to-Many Relationships

### Syncing IDs

- Use `artisan tinker` to create a number of treatments and note down their IDs

- Update your `store` and `update` methods on the `API\Owners\AnimalController` so that they can accept an array of treatment IDs

    **Hint**: in the `store` method, make sure the animal is saved before setting treatments.

    ```json
    POST /api/owners/{owner}/animals

    {
        "name": "Miss Kitty Fantastico",
        "dob": "1996-03-10",
        "biteyness": 4,
        "treatment_ids": [1, 3, 12]
    }
    ```

- Add validation for treatment IDs to the `/api/{owner}/animals` routes
- Update your `Animals` resources to return treatments
