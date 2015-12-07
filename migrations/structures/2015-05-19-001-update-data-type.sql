-- assumes graph api v2.3
-- https://developers.facebook.com/docs/graph-api/reference/post

ALTER TABLE `data`
CHANGE `type` `type` enum('link','status','photo','video','offer','event')
COLLATE 'utf8_czech_ci' NOT NULL DEFAULT 'status' AFTER `from_id`;
