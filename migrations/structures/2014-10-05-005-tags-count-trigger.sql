ALTER TABLE `tags`
CHANGE `count` `count` int(10) unsigned NOT NULL DEFAULT '0' AFTER `name`;

UPDATE `tags`
SET `count` = (
	SELECT COUNT(*)
	FROM `data_tags`
	WHERE `data_tags`.`tags_id` = `tags`.id
);

DELIMITER ;;
	CREATE TRIGGER `data_tags_ai` AFTER INSERT ON `data_tags` FOR EACH ROW
	UPDATE `tags`
	SET `count` = `count` + 1
	WHERE `id` = NEW.`tags_id`;;

	CREATE TRIGGER `data_tags_ad` AFTER DELETE ON `data_tags` FOR EACH ROW
	UPDATE `tags`
	SET `count` = `count` - 1
	WHERE `id` = OLD.`tags_id`;;
DELIMITER ;
