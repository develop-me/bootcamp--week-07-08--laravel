## Databases

- Intro to databases
- Accessing
    - SSH into your virtual VM:
        `vagrant ssh`
    - access MySQL with the root user account
        `mysql -u root -p`
    - Password is `root`
    - Or, you can type:
        `mysql -u root -proot`

## Demo

- SQL to interact

## Demo: Starting to run SQL queries

- ```sql
    USE `scotchbox`;
    ```
- ```sql
    SHOW TABLES;
    ```
- ```sql
    CREATE TABLE `graduates` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `full_name` varchar(255) NOT NULL,
    `location` varchar(255) NOT NULL,
    `age` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
    ```
- **Always use snake case for table and column names**
- ```sql
    INSERT INTO `graduates` (`id`, `full_name`, `location`, `age`) VALUES
    (1, 'Oli Ward', 'Bedminster', 36),
    (2, 'Simon Capet', 'College Green', 49),
    (3, 'Simon New', 'Montpelier', 38),
    (4, 'Kasia Pranke', 'Bedminster', 34),
    (5, 'Josh Simons', 'Redland', 32);
    ```

## SQL conventions

- "Special" words written in uppercase
    ```sql
    USE DATABASE ...;
    SELECT * FROM ...;
    CREATE TABLE ...;
    ```
- Quotes and backticks
    ```sql
    `table_name`
    `field_name`
    'string value'
    "string value"
   ```

## Demo: SELECT

```sql
SELECT * FROM `graduates`;

SELECT * FROM `graduates` WHERE `age` < 30;

SELECT * FROM `graduates` WHERE `location` = 'Bedminster';
```

## Demo: how to exit

```bash
mysql> exit
vagrant@oli:~$ exit
~/Sites/scotchbox
```

## "Relational" databases

- planning (architecting) databases, change over time, efficiency
- reduce duplication of data
- example of blog articles, authors, login system, comments
- example of `author_id` on `articles`

## One-to-many

- One owner has many animals

## JOINs

https://blog.codinghorror.com/a-visual-explanation-of-sql-joins/

```sql
SELECT * FROM `animals` JOIN `owners` ON `animals`.`id` = `owners`.`animal_id`;
```

```sql
LEFT JOIN
```

```sql
RIGHT JOIN
```

- foreign keys
    ```sql
    CREATE TABLE parent (
        id INT NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=INNODB;

    CREATE TABLE child (
        id INT,
        parent_id INT,
        INDEX par_ind (parent_id),
        FOREIGN KEY (parent_id)
            REFERENCES parent(id)
            ON DELETE CASCADE
    ) ENGINE=INNODB;
    ```

    ```sql
    ALTER TABLE child FOREIGN KEY (parent_id)
        REFERENCES parent(id)
        ON DELETE CASCADE
    ```
- `ON DELETE CASCADE`


## Many-to-many
- What if an animal can have many owners?
