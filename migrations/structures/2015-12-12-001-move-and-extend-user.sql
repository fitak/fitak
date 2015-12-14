ALTER TABLE `users`
DROP COLUMN `first_name`,
DROP COLUMN `last_name`,
ADD COLUMN `name` varchar(100) NOT NULL,
MODIFY COLUMN `email` varchar(100) NULL DEFAULT NULL,
MODIFY COLUMN `password_hash` char(60) NULL DEFAULT NULL,
MODIFY COLUMN `sign_up_time` datetime NULL DEFAULT NULL,
CHANGE COLUMN `facebook_id` `fb_id` varchar(255) NULL,
CHANGE COLUMN `facebook_access_token` `fb_access_token` text NULL,
ADD COLUMN `profile_picture` varchar(255) NULL DEFAULT NULL,
ADD COLUMN `registered` tinyint(1) NOT NULL;

ALTER TABLE `data`
ADD COLUMN `user` int(255) NOT NULL,
DROP COLUMN `from_name`,
DROP COLUMN `from_id`;
