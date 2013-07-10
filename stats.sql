CREATE TABLE `stats` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `day` varchar(20) NOT NULL,
  `page` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `count` int(4) NOT NULL,
  PRIMARY KEY (`auto_id`),
  UNIQUE KEY `updateKey` (`day`,`page`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8$$