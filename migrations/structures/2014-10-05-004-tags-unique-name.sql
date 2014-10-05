ALTER TABLE `tags`
ADD UNIQUE `name` (`name`),
DROP INDEX `name`;
