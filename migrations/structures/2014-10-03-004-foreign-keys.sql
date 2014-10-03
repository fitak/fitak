-- remove garbage
DELETE
FROM `likes`
WHERE `message_id` NOT IN (SELECT `id` FROM `data`)
LIMIT 100;

DELETE
FROM `data_tags`
WHERE `data_id` NOT IN (SELECT `id` FROM `data`)
LIMIT 100;

UPDATE `data`
SET `parent_id` = NULL
WHERE `parent_id` = 0;

ALTER TABLE `data`
ADD FOREIGN KEY `data_ibfk_1` (`parent_id`) REFERENCES `data` (`id`),
ADD FOREIGN KEY `data_ibfk_2` (`group_id`) REFERENCES `groups` (`id`);

ALTER TABLE `data_tags`
ADD FOREIGN KEY `data_tags_ibfk_1` (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD FOREIGN KEY `data_tags_ibfk_2` (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `likes`
ADD FOREIGN KEY `likes_ibfk_1` (`message_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
