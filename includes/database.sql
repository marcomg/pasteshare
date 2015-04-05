CREATE TABLE IF NOT EXISTS `pasteshare_table` (
  `cid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `pasteshare_table` ADD PRIMARY KEY (`cid`);