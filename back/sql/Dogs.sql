USE dogadoptions;

CREATE TABLE `dogs`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL,
    `gender` ENUM("male", "female"),
    `age` VARCHAR(64) NULL,
    `spayed` VARCHAR(64) NOT NULL,
    `weight` VARCHAR(64) NOT NULL,
    `breed` VARCHAR(64) NULL,
    `arrivaldate` DATETIME NOT NULL DEFAULT NOW(),
    `notes` VARCHAR(1000) NULL,
    `picture` VARCHAR(1000) NULL,
    `status` INT NOT NULL
);
