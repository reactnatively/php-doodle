CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `siteUrl` varchar(512) NULL,
  `imageUrl` varchar(512) NULL,
  `alt` varchar(512) NULL,
  `title` varchar(512) NULL,
  `clicks` INT NULL,
  `broken` TINYINT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8301;
