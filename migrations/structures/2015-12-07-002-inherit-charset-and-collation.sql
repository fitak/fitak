ALTER TABLE `data`
MODIFY COLUMN `message` text NOT NULL,
MODIFY COLUMN `from_name` varchar(250) NOT NULL,
MODIFY COLUMN `type` enum('link','status','photo','video','offer','event') NOT NULL DEFAULT 'status',
MODIFY COLUMN `link` text NULL,
MODIFY COLUMN `name` text NULL,
MODIFY COLUMN `caption` text NULL,
MODIFY COLUMN `description` text NULL,
MODIFY COLUMN `picture` text NULL,
MODIFY COLUMN `source` text NULL;

ALTER TABLE `groups`
MODIFY COLUMN `name` varchar(250) NOT NULL;

ALTER TABLE `ip`
MODIFY COLUMN `ip` varchar(150) NOT NULL;

ALTER TABLE `news`
MODIFY COLUMN `message` text NOT NULL;

ALTER TABLE `tags`
MODIFY COLUMN `name` varchar(190) NOT NULL;

ALTER TABLE `key_value`
MODIFY COLUMN `key` varchar(190) NOT NULL,
MODIFY COLUMN `value` text NOT NULL;

ALTER TABLE `users`
MODIFY COLUMN `email` varchar(100) NOT NULL,
MODIFY COLUMN `password_hash` char(60) NOT NULL,
MODIFY COLUMN `sign_up_token_hash` char(60) NULL DEFAULT NULL,
MODIFY COLUMN `password_reset_token_hash` char(60) NULL DEFAULT NULL,
MODIFY COLUMN `facebook_id` varchar(25) NULL DEFAULT NULL,
MODIFY COLUMN `facebook_access_token` text NULL,
MODIFY COLUMN `last_name` varchar(20) NULL DEFAULT NULL,
MODIFY COLUMN `first_name` varchar(20) NULL DEFAULT NULL;
