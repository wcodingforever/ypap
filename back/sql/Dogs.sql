USE dogadoptions;

CREATE TABLE `dogs`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL,
    `gender` ENUM("male", "female"),
    `age` INT NULL,
    `spayed` VARCHAR(64) NOT NULL,
    `weight` VARCHAR(64) NOT NULL,
    `breed` VARCHAR(64) NULL,
    `arrivaldate` DATETIME NOT NULL DEFAULT NOW(),
    `notes` VARCHAR(155) NULL,
    `picture` VARCHAR(1000) NULL,
    `status` INT NOT NULL
);

--maybe approx age
-----------------------------------------------
INSERT INTO `dogs`
    (`name`, `gender`, `spayed`, `weight`, `status`)
VALUES
    ("Dona", "female", "not Spayed", "10kg", 1);

INSERT INTO `dogs`
    (`name`, `gender`, `spayed`, `weight`, `status`)
VALUES
    ("Illana", "male", "Spayed", "20kg", 1);