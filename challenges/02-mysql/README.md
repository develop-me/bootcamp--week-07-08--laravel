# Challenges

## Accessing the MySQL Prompt

1. Run `vagrant ssh` to access your virtual machine's terminal
1. Run `mysql -u homestead -p` and use password `secret` to access the MySQL prompt.
1. View which databases already exist with `SHOW DATABASES;`
1. Create a new database.
1. `USE` that database, so for future queries you don't need to specify which database you're working with.

---

## Create your first table

1. Create a table called `graduates` with the following columns:

    ```sql
    CREATE TABLE graduates (
        id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        full_name varchar(255),
        location varchar(255),
        age int(11) NOT NULL
    );
    ```

1. Verify your table exists with `SHOW TABLES;`

1. Verify your table structure with `DESCRIBE graduates;`

1. Populate your table with data:

    ```sql
    INSERT INTO `graduates` (`id`, `full_name`, `location`, `age`) VALUES
        (1, 'Oli Ward', 'Bedminster', 36),
        (2, 'Simon Capet', 'College Green', 49),
        (3, 'Simon New', 'Montpelier', 33),
        (4, 'Kasia Pranke', 'Bedminster', 34),
        (5, 'Josh Simons', 'Redland', 32),
        (6, 'Zoot Fandango', 'Mars', 212);
    ```

---

## Reading data from your database table

1. Use `SELECT * FROM graduates;` to see all the data in your table.
1. Use a `SELECT` query to find the just the full names of people who are under 35.
1. Find the ages of people who live in "Bedminster".
1. Find a way of returning just the rows that have `full_name` starting with "Simon".

### Tricksy

1. Find the average age of people in the table.

---

## Changing tables

1. Add a new column for `favourite_beverage` and populate with data as below:

    ```sql
    +----+--------------+---------------+-----+--------------------+
    | id | full_name    | location      | age | favourite beverage |
    +----+--------------+---------------+-----+--------------------+
    |  1 | Oli Ward     | Bedminster    |  36 | coffee             |
    |  2 | Simon Capet  | College Green |  49 | coffee             |
    |  3 | Simon New    | Montpelier    |  38 | tea                |
    |  4 | Kasia Pranke | Bedminster    |  34 | water              |
    |  5 | Josh Simons  | Redland       |  32 | herbal tea         |
    +----+--------------+---------------+-----+--------------------+
    ```

1. Add a new column for `last_updated`. Consider the appropriate data type

### Tricksy

1. Set your `last_updated` field to automatically update when any field of the record is changed.

1. Test it works with an `UPDATE` then `SELECT`

---

## Planning and creating tables

1. Plan out a relational database for our vets practice on paper (read the start of the One-to-Many Relationships chapter of the notes for more about relational databases and the Database Design Tips section).

    You'll want to be able to store information on *animals* and *owners*, this should be done with two tables.

    Consider 1 owner who has 3 animals, how would this relationship be represented.

    Think about what other data the vets might want to store, the field names and suitable data types.

1. Show it to the instructor or Teaching Assistant.

1. Write your `CREATE TABLE` queries (best done in a code editor) and run them on the MySQL prompt to create your tables.

### Tricksy

1. Add another table into your vets database system, it could be for *procedures* (name, date, cost, pet ID) or  *invoices* (owner ID, total, invoice date, payment date)

---

## Joins

1. Use `JOIN` type SQL queries to retrieve data from the table like this:

    ```sql
    +-------------+------------+--------------+
    | animal_name | dob        | owner_name   |
    +-------------+------------+--------------+
    | Snoopy      | 2017-01-01 | Oli Ward     |
    | Snoopy      | 2017-01-01 | Simon Capet  |
    | Clara       | 1999-09-14 | Simon New    |
    | Shaggy      | 2003-02-08 | Kasia Pranke |
    | Mr Simons   | 2002-01-04 | NULL         |
    +-------------+------------+--------------+
    ```

    An example query to help you start:

    ```sql
    SELECT * FROM animals JOIN owners ON animals.owner_id = owners.id;
    ```

1. Use `SELECT table.field name AS another_name` to help tidy up the columns output.

### Tricksy

1. Use a `SELECT` to output the age of the animals using just the `dob` field

---

## Foreign Keys

1. Setup `FOREIGN KEY`s on your database, either by recreating the tables:

    ```sql
    CREATE TABLE parent_table (
        id INT NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=INNODB;

    CREATE TABLE child_table (
        id INT,
        parent_id INT,
        FOREIGN KEY (parent_id)
            REFERENCES parent_table(id)
            ON DELETE CASCADE
    ) ENGINE=INNODB;
    ```

    Or to alter an existing table:

    ```sql
    ALTER TABLE child_table ADD FOREIGN KEY (parent_id)
        REFERENCES parent_table(id)
        ON DELETE CASCADE;
    ```

1. Populate your table with new entries that use the foreign keys (by adding an animal with an owner ID).

1. Check the foreign keys are in place with:

    ```sql
    DESCRIBE `table name`;
    ```

    And check for `MUL` on the field that has a foreign key.

1. Verify the foreign keys are working by adding an animal with an owner ID that doesn't exist like `9999`.