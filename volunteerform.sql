USE dogadoptions;

CREATE TABLE `volunteerform`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `worktype` VARCHAR(128) NULL,
    `preferences` VARCHAR(64) NULL,
    `availability` VARCHAR(128) NOT NULL
);

