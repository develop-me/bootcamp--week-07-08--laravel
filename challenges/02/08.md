# Challenges

1. Create an `Animal` model (and corresponding database table) with the following properties:
    - `name`: the name of the animal/patient
    - `type`: what type of animal it is
    - `dob`: when was the patient born
    - `biteyness`: a number between 1 and 5
1. Use `artisan tinker` to create some animals in the database, use `Animal::all()` each time to check that it's worked