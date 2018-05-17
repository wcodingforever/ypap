CREATE DATABASE `dogadoptions`;

USE dogadoptions;

CREATE TABLE `mailinglist`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL,
    `email` VARCHAR(255) NOT NULL
);