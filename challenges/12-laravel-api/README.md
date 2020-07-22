# Challenges

---

## Basic API (Chapters 19)

**Check your results in Postman as you're going along**

### `/api/owners`

Create a new controller `API\\Owners`. Add RESTful API routes for:

- Listing all of your owners
- Showing a specific owner based on their ID
- Deleting an owner
- Creating a new owner
- Updating an existing owner based on their ID


### `/api/animals`

Create a new controller `API\\Animals`. Add RESTful API routes for:

- Listing all your animals
- Showing a specific animal based on its ID
- Deleting an animal based on its ID
- Updating an existing animal based on its ID

You may need to use `artisan tinker` to create some `Animal`s (with an appropriate `owner_id`) if you don't have any in your database.


## Tricksy

### `/api/owners/{owner}/animals`

Create a new controller `API\\Owners\\Animals`. Add RESTful API routes for:

- Listing all of the animals that belong to the specified owner
- Create a new animal that belongs to the specified owner
