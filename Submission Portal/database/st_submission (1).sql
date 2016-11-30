-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 05:16 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtl`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_submission`
--

CREATE TABLE `st_submission` (
  `roll` int(6) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `assign_id` int(5) NOT NULL,
  `attachment` longblob,
  `submit_date` date DEFAULT NULL,
  `grade` enum('A','B','C','D','reject') DEFAULT NULL,
  `remarks` varchar(25) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'uncheck'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_submission`
--

INSERT INTO `st_submission` (`roll`, `branch`, `semester`, `assign_id`, `attachment`, `submit_date`, `grade`, `remarks`, `status`) VALUES
(101422, 'comps', '5', 5, 0x42494c4c5f524543454950545f343838392e706466, '2016-10-21', NULL, NULL, 'uncheck'),
(101422, 'comps', '5', 6, 0x6a6f2e646f6378, NULL, 'D', 'very bad', 'check'),
(101422, 'comps', '5', 7, 0x4243457265706f72742e646f6378, '2016-10-04', NULL, 'goo', 'check'),
(101422, 'comps', '5', 9, 0x416e616c797369732e646f6378, '2016-10-16', NULL, 'excellent', 'check'),
(101422, 'comps', '5', 3, 0x31312e7072616e616c696b616e65726540676d61696c2e636f6d2e706466, '2016-10-19', NULL, NULL, 'uncheck'),
(101431, 'comps', '5', 7, 0x416e616c79736973207468696e67202831292e646f63, '2016-10-19', 'B', '', 'check'),
(101422, 'comps', '5', 8, 0x416e616c797369732e646f6378, '2016-10-20', 'A', 'working', 'check'),
(101422, 'comps', '5', 19, '', '2016-10-22', 'C', 'finall', 'check'),
(101438, 'comps', '5', 6, 0x31302e706466, '2016-10-22', 'A', 'do it again', 'check'),
(101422, 'comps', '5', 12, NULL, '2016-10-30', 'A', 'EXCELLENT', 'check'),
(101422, 'comps', '5', 20, '', '2016-11-01', NULL, NULL, 'uncheck'),
(101422, 'comps', '5', 11, '', '2016-10-30', NULL, NULL, 'uncheck'),
(101411, 'comps', '5', 18, NULL, '2016-10-29', 'A', 'great', 'check');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
