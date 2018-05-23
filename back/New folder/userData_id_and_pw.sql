
CREATE TABLE `users` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` varchar(10) NOT NULL,
    `pw` varchar(18) NOT NULL
);

INSERT INTO `users` (`user_id`, `pw`) VALUES ("stupidBear", "stupidBearpw"), ("alien", "alienpw");

SELECT `id`, `user_id`, `pw` FROM `users`;