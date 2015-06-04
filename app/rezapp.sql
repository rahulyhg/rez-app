-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2015 at 03:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vluna_rezapp`
--


-- --------------------------------------------------------

--
-- Table structure for table `CommunityAdvisor`
--

DROP TABLE IF EXISTS `CommunityAdvisor`;
CREATE TABLE IF NOT EXISTS `CommunityAdvisor` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Building` text NOT NULL,
  `Room` int(7) NOT NULL,
`Id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CommunityAdvisor`
--

INSERT INTO `CommunityAdvisor` (`Username`, `Password`, `Building`, `Room`, `Id`) VALUES
('test', '098f6bcd4621d373cade4e832627b4f6', '', 0, 1),
('test2', 'test', '', 0, 2),
('vlunaram', '098f6bcd4621d373cade4e832627b4f6', 'MCH', 45, 3),
('vlunaram', '098f6bcd4621d373cade4e832627b4f6', 'MCH', 45, 4),
('help', 'help', 'BRH', 0, 5),
('hoho', '74d181ce69fa53e60fb588719cc404e1', 'MCH', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

DROP TABLE IF EXISTS `Events`;
CREATE TABLE IF NOT EXISTS `Events` (
  `Name` varchar(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Date` datetime NOT NULL,
  `Id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Name`, `Description`, `Location`, `Date`, `Id`) VALUES
('Test', 'Testinghehehe iei 3n i3ni nien3 in', 'MCH', '2015-05-12 08:18:15', NULL),
('s', '', '', '0000-00-00 00:00:00', NULL),
('s', 'g', 'g', '0000-00-00 00:00:00', NULL),
('Test', 'ehehe', 'LRH', '2001-12-23 12:01:12', NULL),
('Test', 'heihieheiehcn jfdk', 'BRH', '2001-12-23 12:01:12', 1),
('test', 'test', 'tes', '0000-00-00 00:00:00', 1),
('hoho', 'hoho', 'hoho', '0000-00-00 00:00:00', 6),
('Cho', 'I was born', 'Shell house', '1991-02-27 00:00:00', 6),
('cho', 'Cookie baking', 'SHR', '1991-02-27 00:00:00', 6),
('Cho', 'Birthday', 'SHL', '1991-02-27 00:00:00', 6),
('r', 'r', 'r', '0000-00-00 00:00:00', 1),
('sd', 'sdsd', '', '0000-00-00 00:00:00', 1),
('er', 'er', 'BRH', '0000-00-00 00:00:00', 1),
('hoho', 'eieni', 'TH', '0000-00-00 00:00:00', 1),
('wew', 'wewe', 'Town Houses', '0000-00-00 00:00:00', 1),
('I am Testing', 'YEAH', 'BRae', '2001-12-23 12:01:12', 1),
('TESTING', 'TESTING', 'BRH', '0000-00-00 00:00:00', 1),
('Testin', 'Testgin', 'SHR', '2015-06-18 23:30:00', 1),
('Taco Night', 'Testin', 'LRH', '2015-05-30 19:20:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CommunityAdvisor`
--
ALTER TABLE `CommunityAdvisor`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CommunityAdvisor`
--
ALTER TABLE `CommunityAdvisor`
MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
