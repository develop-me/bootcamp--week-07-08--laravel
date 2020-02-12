# Create your first table

1. Use the supplied SQL to create your first table:
    ```sql
    CREATE TABLE `graduates` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `full name` varchar(255),
    `location` varchar(255),
    `age` int(11) NOT NULL
    );
    ```
1. Verify your table exists with ```SHOW TABLES;```

1. Verify your table structure with ```DESCRIBE `graduates`; ```

1. Populate your table with data:
    ```sql
    INSERT INTO `graduates` (`id`, `full name`, `location`, `age`) VALUES
    (1, 'Oli Ward', 'Bedminster', 36),
    (2, 'Simon Capet', 'College Green', 49),
    (3, 'Simon New', 'Montpelier', 38),
    (4, 'Kasia Pranke', 'Bedminster', 34),
    (5, 'Josh Simons', 'Redland', 32);
    ```