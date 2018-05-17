USE dogadoptions;

CREATE TABLE `fosterform`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pickupdate` DATETIME NOT NULL DEFAULT NOW(),
    `dropoffdate` DATETIME NOT NULL,
    `name` VARCHAR(64) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `address` VARCHAR(128) NOT NULL,
    `preferences` VARCHAR(128) NOT NULL
);
