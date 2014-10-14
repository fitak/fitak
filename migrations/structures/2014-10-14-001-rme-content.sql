SET FOREIGN_KEY_CHECKS=0;

ALTER TABLE `data_tags` DROP FOREIGN KEY `data_tags_ibfk_1`;
DROP INDEX `data_id` ON `data_tags`;
ALTER TABLE `data` DROP FOREIGN KEY `data_ibfk_1`;
DROP INDEX `PRIMARY` ON `data`;



ALTER TABLE `data`
ADD `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST,
ADD `type` varchar(255) NOT NULL AFTER `id`,
CHANGE `id` `facebook_id` bigint(20) NULL AFTER `id`,
CHANGE `group_id` `group_id` bigint(20) NULL AFTER `parent_id`,
CHANGE `updated_time` `updated_time` datetime NOT NULL AFTER `created_time`,
CHANGE `from_name` `from_name` varchar(250) COLLATE 'utf8_czech_ci' NULL AFTER `comments`,
CHANGE `from_id` `from_id` bigint(20) NULL AFTER `from_name`,
CHANGE `type` `thread_type` enum('status','video','link','photo') COLLATE 'utf8_czech_ci' NULL DEFAULT 'status' AFTER `from_id`;



UPDATE `data`
SET `type` = If(Isnull(`parent_id`), 'Fitak\\FacebookThread', 'Fitak\\FacebookComment');



ALTER TABLE `data`
ADD UNIQUE `data_tags_ibfk_1` (`facebook_id`);



UPDATE `data_tags` `t`
LEFT JOIN `data` `d` ON `t`.`data_id` = `d`.`facebook_id`
SET `t`.`data_id` = `d`.`id`;

ALTER TABLE `data_tags`
ADD FOREIGN KEY `data_tags_ibfk_1` (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;



UPDATE `data` `child`
LEFT JOIN `data` `parent` ON `child`.`parent_id` = `parent`.`facebook_id`
SET `child`.`parent_id` = `parent`.`id`;

ALTER TABLE `data`
ADD FOREIGN KEY `data_ibfk_1` (`parent_id`) REFERENCES `data` (`id`);


SET FOREIGN_KEY_CHECKS=1;
