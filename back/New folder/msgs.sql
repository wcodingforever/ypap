CREATE TABLE `msgs` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` varchar(10) NOT NULL,
    `msg` varchar(500) NOT NULL,
    `time` TIME NOT NULL
);
INSERT INTO `msgs` (`user_id`, `msg`, `time`) VALUES (:user_id, :msg, now());
INSERT INTO `msgs` (`user_id`, `msg`, `time`) VALUES ("stupidBear", "Hi~!!", now());

SELECT `user_id`, `msg`, `time`, `private`, `receiver` FROM `msgs`;

ALTER TABLE `msgs` MODIFY COLUMN `msg` TEXT NULL;
ALTER TABLE `msgs` MODIFY COLUMN `private` TINYINT(1) NULL;
ALTER TABLE `msgs` ADD COLUMN `receiver` varchar(10) NULL;
