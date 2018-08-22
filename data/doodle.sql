CREATE database doodle;

use doodle;

CREATE TABLE `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `url` varchar(512) NULL,
  `title` varchar(512) NULL,
  `description` varchar(512) NULL,
  `keywords` varchar(512) NULL,
  `clicks` INT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8301;
