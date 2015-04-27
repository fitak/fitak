CREATE TABLE `users` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`email` varchar(100) COLLATE utf8_czech_ci NOT NULL,
	`password_hash` char(60) COLLATE utf8_czech_ci NOT NULL,
	`sign_up_token_hash` char(60) COLLATE utf8_czech_ci DEFAULT NULL,
	`sign_up_time` datetime NOT NULL,
	`facebook_id` VARCHAR(16) DEFAULT NULL,
	`facebook_access_token` VARCHAR(256) DEFAULT NULL,
	`last_name` VARCHAR(20) DEFAULT NULL,
	`first_name` VARCHAR(20) DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
