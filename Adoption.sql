USE dogadoptions;

CREATE TABLE `flightbuddy`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `dogid` INT NOT NULL,
    `name` VARCHAR(64) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `address` VARCHAR(128) NOT NULL,
    `zip` VARCHAR(10) NOT NULL,
    `submitdate` DATETIME NOT NULL DEFAULT NOW()
);

flightbuddy.dogid