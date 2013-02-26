-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2013 at 11:12 AM
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
(1, 'TAoIA', '/images/portfolio/aoia.png', 'The Alliance of Independent authors backend development.', 'http://allianceindependentauthors.org/', 0),
(2, 'Telia Latvia', '/images/portfolio/netw.png', 'Multiple internal systems for Telia Latvia', 'internal', 0),
(3, 'edavanas.lv', '/images/portfolio/edavanas.png', 'Functionality for edavanas.lv website, also SEO improvement', 'http://edavanas.site90.com/lv/latest', 0),
(4, 'THI', '/images/portfolio/inhabitants.png', 'The Happiest Inhabitants simple voting site. Not finished, some functionality not working.', 'http://happypeople.uphero.com/?page=index_p', 0);

-- --------------------------------------------------------

--
-- Table structure for table `working_on_items`
--

DROP TABLE IF EXISTS `working_on_items`;
CREATE TABLE IF NOT EXISTS `working_on_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `working_on_items`
--

INSERT INTO `working_on_items` (`id`, `title`, `description`, `timestamp`) VALUES
(1, 'VoIP call fixing', 'VoIP call fixing for my company. Incorrect operators after retrieving prefixes.', 1361877073),
(2, 'Feature transfer from testing environment to production', 'Feature transfer from testing environment to production', 1361877118),
(3, 'Personal portfolio web page latest finishing steps', 'Personal portfolio web page latest finishing steps', 1361877156);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
