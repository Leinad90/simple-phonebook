/**
 * Author:  Daniel Hejduk <daniel.hejduk at gmail.com>
 * Created: 27. 10. 2021
 */

-- Adminer 4.8.1 MySQL 5.5.5-10.5.12-MariaDB-0+deb11u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

CREATE DATABASE `simple_phonebook` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `simple_phonebook`;

CREATE TABLE `contact_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) NOT NULL COMMENT 'Real name',
  `e_mail` varchar(255) NOT NULL COMMENT 'E-mail',
  `phone` varchar(255) NOT NULL COMMENT 'Phone number',
  `link` varchar(255) NOT NULL COMMENT 'Link to contact',
  `note` text NOT NULL COMMENT 'User note',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='List of contacts';


-- 2021-10-27 10:09:09
