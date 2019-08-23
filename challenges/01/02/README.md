# Challenges

Using your `library` project, build an API with the following spec and test each route with Postman.

Make sure you:

- Use Route Model Binding for 404s in your library API
- Use a Resource to control the JSON output of your API
- Validate all requests
- Add CORS support to your library API


### `POST /books`

Creates a new "book" with the following attributes:

- `title`: the book title
- `pages`: the number of pages
- `published`: the date the book was published
- `ISBN`: the book's ISBN
- `rating`: a number between 1 and 5

Should return the newly added book in JSON format.

### `GET /books`

Returns a list of all the books in JSON format.

### `PUT /books/{book}`

Updates the given book and returns the updated book in JSON format.

### `DELETE /books/{book}`

Removes the given book.

---

A finished version of the Library API is [available on GitHub](https://github.com/develop-me/library-api)
