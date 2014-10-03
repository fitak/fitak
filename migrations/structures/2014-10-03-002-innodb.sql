ALTER TABLE `data` ENGINE='InnoDB';
ALTER TABLE `data_tags` ENGINE='InnoDB';
ALTER TABLE `groups` ENGINE='InnoDB';
ALTER TABLE `ip` ENGINE='InnoDB';
ALTER TABLE `likes` ENGINE='InnoDB';
ALTER TABLE `news` ENGINE='InnoDB';
ALTER TABLE `tags` ENGINE='InnoDB';
ALTER TABLE `tokens` ENGINE='InnoDB';

-- drop fulltext indexes
ALTER TABLE `data` DROP INDEX `message`;
