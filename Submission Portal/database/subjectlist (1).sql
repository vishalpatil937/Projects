-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 05:13 AM
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
-- Table structure for table `subjectlist`
--

CREATE TABLE `subjectlist` (
  `index` int(5) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `taught_by_id` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectlist`
--

INSERT INTO `subjectlist` (`index`, `branch`, `semester`, `subject`, `taught_by_id`) VALUES
(1, 'comps', '5', 'wtl', '101'),
(2, 'comps', '5', 'os', '102'),
(3, 'comps', '5', 'mp', '102'),
(4, 'comps', '5', 'sooad', NULL),
(5, 'comps', '5', 'bce', ''),
(6, 'it', '5', 'cgvr', NULL),
(7, 'it', '5', 'microcontroller', NULL),
(8, 'comps', '4', 'cg', '101'),
(9, 'comps', '4', 'aoa', '101'),
(10, 'comps', '5', 'cn', '101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjectlist`
--
ALTER TABLE `subjectlist`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjectlist`
--
ALTER TABLE `subjectlist`
  MODIFY `index` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
