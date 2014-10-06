ALTER TABLE `data`
  CHANGE `from_name` `from_name` text NOT NULL,
  CHANGE `link` `link` text NULL,
  CHANGE `name` `name` text NULL,
  CHANGE `caption` `caption` text NULL,
  CHANGE `picture` `picture` text NULL,
  CHANGE `source` `source` text NULL;

ALTER TABLE `groups`
  CHANGE `name` `name` text NOT NULL;
