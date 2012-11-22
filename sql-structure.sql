-- Adminer 3.6.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` bigint(20) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) NOT NULL,
  `message` text COLLATE utf8_czech_ci NOT NULL,
  `created_time` datetime NOT NULL,
  `updated_time` datetime DEFAULT NULL,
  `comments` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `from_name` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  FULLTEXT KEY `message` (`message`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `data_tags`;
CREATE TABLE `data_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` bigint(20) NOT NULL,
  `tags_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `data_id` (`data_id`),
  KEY `tags_id` (`tags_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `closed` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `ip`;
CREATE TABLE `ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(150) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id` bigint(20) NOT NULL,
  `message_id` bigint(20) NOT NULL,
  `from_name` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  KEY `id` (`id`),
  KEY `message_id` (`message_id`),
  KEY `from_id` (`from_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `tokens`;
CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(250) COLLATE utf8_czech_ci NOT NULL,
  `expiration` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


-- 2012-11-22 16:18:21
