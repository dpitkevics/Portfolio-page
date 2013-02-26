-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2013 at 03:50 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

DROP TABLE IF EXISTS `portfolio_items`;
CREATE TABLE IF NOT EXISTS `portfolio_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `image_source` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(256) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`id`, `title`, `image_source`, `description`, `link`, `timestamp`) VALUES
(1, 'delfi', 'aa', 'delfi site, newsletter', 'aa', 0),
(2, 'apollo', 'bb', 'apollo site, newsletter', 'bb', 0),
(3, 'tvnet', 'cc', 'tvnet site, newsletter', 'cc', 0),
(4, 'kasjauns', 'http://draugiem.lv', 'kasjauns site, newsletter', 'http://allianceindependentauthors.org/', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
