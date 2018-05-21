USE dogadoptions;

CREATE TABLE `flightbuddy`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL,
    `flightdate` DATE NOT NULL,
    `destination` VARCHAR(128) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `email` VARCHAR(255) NOT NULL
);
--if you want to Store "Country + area + number separately". Try using a VARCHAR(20). This allows you the ability to store international phone numbers properly, should that need arise.