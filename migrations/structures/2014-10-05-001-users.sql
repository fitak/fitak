CREATE TABLE `users` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`email` varchar(100) COLLATE utf8_czech_ci NOT NULL,
	`password_hash` char(60) COLLATE utf8_czech_ci NOT NULL,
	`sign_up_token_hash` char(60) COLLATE utf8_czech_ci DEFAULT NULL,
	`sign_up_time` datetime NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
