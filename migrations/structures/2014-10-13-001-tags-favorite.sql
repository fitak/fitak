CREATE TABLE `tags_favorite` (
	`user_id` int(10) unsigned NOT NULL,
	`tag_id` int(11) NOT NULL,
	PRIMARY KEY (`user_id`,`tag_id`),
	KEY `tag_id` (`tag_id`),
	CONSTRAINT `tags_favorite_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
	CONSTRAINT `tags_favorite_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;
