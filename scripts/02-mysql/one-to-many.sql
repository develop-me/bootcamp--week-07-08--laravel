DROP TABLE IF EXISTS `owners`;
CREATE TABLE `owners` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(255),
    `location` varchar(255)
);

DROP TABLE IF EXISTS `animals`;
CREATE TABLE `animals` (
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `owner_id` int(11),
    `name` varchar(255),
    `type` varchar(255),
    `dob` date NOT NULL,
    FOREIGN KEY (`owner_id`)
        REFERENCES `owners`(`id`)
        ON DELETE CASCADE
);

INSERT INTO `owners` (`id`, `name`, `location`) VALUES
(1, 'Oli Ward', 'Bedminster'),
(2, 'Simon Capet', 'College Green'),
(3, 'Simon New', 'Montpelier'),
(4, 'Kasia Pranke', 'Bedminster');

INSERT INTO `animals` (`id`, `owner_id`, `name`, `type`, `dob`) VALUES
(1, 1, 'Snoopy', 'dog', '2017-01-01'),
(2, 2, 'Clara', 'cat', '1999-09-14'),
(3, 2, 'Shaggy', 'bird', '2003-02-08'),
(4, 4, 'Mr Simons', 'fish', '2002-01-04');

SELECT * FROM `animals` LEFT JOIN `owners` ON `animals`.`owner_id` = `owners`.`id`;

SELECT `animals`.`name` AS `animal name`, `animals`.`dob`, `owners`.`name` AS `owner name` FROM `animals` LEFT JOIN `owners` ON `animals`.`owner_id` = `owners`.`id`;