USE `myDB`;

CREATE TABLE `volunteers` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(60) NOT NULL, 
    `phone` varchar(60) NOT NULL,
    `email` varchar(60) NOT NULL,
    `workType1` varchar(20) NOT NULL,
    `workType2` varchar(20) NOT NULL,
    `availability` varchar(60) NOT NULL
)

