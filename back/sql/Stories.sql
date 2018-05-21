USE dogadoptions;

CREATE TABLE `stories`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `uploaddate` DATETIME NOT NULL,
    `content` VARCHAR(2000) NOT NULL,
    `picture` VARCHAR(1000) NOT NULL
);

CREATE TABLE `mappingmultiple`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,    
	`storyid` INT NOT NULL,
    `dogid` INT NOT NULL
);