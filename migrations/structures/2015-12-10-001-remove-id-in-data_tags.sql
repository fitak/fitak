ALTER TABLE `data_tags`
DROP COLUMN `id`,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`data_id`, `tags_id`);