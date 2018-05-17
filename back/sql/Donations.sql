USE dogadoptions;

CREATE TABLE `donations`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `donatetime` DATETIME NOT NULL DEFAULT NOW(),
    `amount` VARCHAR(64) NOT NULL
);