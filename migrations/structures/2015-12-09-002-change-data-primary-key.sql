ALTER TABLE `data`
CHANGE COLUMN `id` `fb_id` bigint(20) NOT NULL;

ALTER TABLE `data`
ADD COLUMN `id` int(11) NOT NULL FIRST;

ALTER TABLE `data`
DROP FOREIGN KEY `data_ibfk_1`,
DROP FOREIGN KEY `data_ibfk_2`;

ALTER TABLE `data_tags`
DROP FOREIGN KEY `data_tags_ibfk_1`,
DROP FOREIGN KEY `data_tags_ibfk_2`;

ALTER TABLE `data`
DROP PRIMARY KEY,
ADD PRIMARY KEY (`id`);

ALTER TABLE `data`
MODIFY COLUMN `parent_id` int(11) NULL DEFAULT NULL,
ADD FOREIGN KEY `data_ibfk_1` (`parent_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD FOREIGN KEY `data_ibfk_2` (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `data_tags`
MODIFY COLUMN `data_id` int(11) NOT NULL AFTER `id`,
ADD FOREIGN KEY `data_tags_ibfk_1` (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD FOREIGN KEY `data_tags_ibfk_2` (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
