USE dogadoptions;

CREATE TABLE `stories`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `uploaddate` DATETIME NOT NULL,
    `content` VARCHAR(1000) NOT NULL,
    `picture` VARCHAR(1000) NOT NULL
);

CREATE TABLE `mappingmultiple`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,    
	`storyid` INT NOT NULL,
    `dogid` INT NOT NULL
);
--mappingmultiple.storyid = stories.id
--mappingmultiple.dogid = dogs.id
-----------------------------------------------
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now(), "This is about first dog and second (Dona and Illana)", "Picture");

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (1, 1),
    (1, 2);


SELECT *
FROM stories
INNER JOIN mappingmultiple ON stories.id = mappingmultiple.storyid;
-- WHERE ;

--NO FOREIGN KEYS