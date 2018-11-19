-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2018 at 04:56 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

DROP TABLE IF EXISTS `draft`;
CREATE TABLE IF NOT EXISTS `draft` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `attach` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`draft_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`draft_id`, `user_id`, `sub`, `attach`, `msg`, `date`) VALUES
(1, 'shubham', 'First Mail', '', 'hi', '2018-10-20'),
(2, 'shubham', 'First Mail', '', 'hi', '2018-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(200) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `phnno` bigint(13) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `username`, `pwd`, `phnno`, `emailid`) VALUES
('Shubham', 'shubham', 'shubh123', 9960889479, 'john@example.com'),
('Satish Kale', 'satish', 'satish', 9970180195, 'satishkale1965@gmail.com'),
('Vijay', 'vijay', 'vijay', 7057886524, 'vijay.kadam16@vit.edu');

-- --------------------------------------------------------

--
-- Table structure for table `latestupd`
--

DROP TABLE IF EXISTS `latestupd`;
CREATE TABLE IF NOT EXISTS `latestupd` (
  `upd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`upd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

DROP TABLE IF EXISTS `mails`;
CREATE TABLE IF NOT EXISTS `mails` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` char(50) NOT NULL,
  `msg` text NOT NULL,
  `draft` text NOT NULL,
  `trash` text NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `msgdate` varchar(50) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

DROP TABLE IF EXISTS `trash`;
CREATE TABLE IF NOT EXISTS `trash` (
  `trash_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`trash_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usermail`
--

DROP TABLE IF EXISTS `usermail`;
CREATE TABLE IF NOT EXISTS `usermail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(30) NOT NULL,
  `sen_id` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(500) NOT NULL,
  `attachment` text NOT NULL,
  `recdt` date NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mail_id`, `rec_id`, `sen_id`, `subject`, `message`, `attachment`, `recdt`) VALUES
(6, 'satish', 'shubham', 'Second Mail', 'Hi there,\r\nThis is my second mail', '', '2018-11-11'),
(7, 'shubham', 'shubham', 'First Mail', 'First mail is here', '', '2018-11-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
