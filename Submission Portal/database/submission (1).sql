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
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `assign_id` int(5) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `mode` enum('softcopy','hardcopy') DEFAULT NULL,
  `file` longblob,
  `datetime` date DEFAULT NULL,
  `deadline` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`assign_id`, `branch`, `semester`, `tid`, `subject`, `description`, `mode`, `file`, `datetime`, `deadline`) VALUES
(1, 'it', '3', '501', 'Os', 'Linux assign', NULL, NULL, NULL, NULL),
(2, 'comps', '5', '101', 'wtl', 'this is introduction to html', 'softcopy', 0x31302e706466, '2016-10-13', '2016-10-10'),
(3, 'comps', '5', '102', 'mp', '8086 mp assignment', NULL, '', NULL, '2016-12-13'),
(4, 'comps', '5', '101', 'wtl', 'Introduction to css...create a form', NULL, 0x43454e534f52534849502e646f6378, '2016-10-29', '2016-11-15'),
(5, 'comps', '5', '101', 'cn', 'Introduction to datalink layer', 'softcopy', '', '2016-11-19', '2016-12-30'),
(6, 'comps', '5', '101', 'wtl', 'xml', 'softcopy', 0x4a2044524146542e646f6378, '2016-10-12', '2016-10-19'),
(7, 'comps', '5', '101', 'wtl', 'intoduction to php', 'softcopy', 0x4243457265706f72742e646f6378, '2016-10-31', '2017-01-02'),
(8, 'comps', '5', '101', 'wtl', 'exp 4', 'softcopy', 0x4243457265706f72742e646f6378, '2016-10-04', '2016-12-26'),
(9, 'comps', '5', '101', 'wtl', 'ajax', 'softcopy', 0x416e616c797369732e646f6378, '2016-10-16', '2016-10-28'),
(11, 'comps', '5', '102', 'os', 'System call', 'softcopy', 0x416e616c797369732e646f6378, '2016-10-19', '2017-11-01'),
(12, 'comps', '5', '101', 'wtl', 'get printout of validation using js', 'hardcopy', '', '2016-10-20', '2016-10-26'),
(20, 'comps', '5', '101', 'wtl', 'bootstrap', 'softcopy', 0x636f76657220706167652e706466, '2016-10-22', '2016-11-10'),
(23, 'comps', '5', '101', 'cn', 'PPP Protocol', 'softcopy', 0x636f76657220706167652e706466, '2016-11-02', '2016-11-20'),
(19, 'comps', '5', '101', 'cn', 'DNS', 'softcopy', '', '2016-10-21', '2016-11-11'),
(18, 'comps', '5', '101', 'wtl', 'report on website', 'hardcopy', 0x31312e7072616e616c696b616e65726540676d61696c2e636f6d2e706466, '2016-10-21', '2016-11-10'),
(21, 'comps', '5', '101', 'cn', 'TCP-IP layer protocol', 'softcopy', 0x31302e706466, '2016-11-01', '2016-11-10'),
(22, 'comps', '5', '101', 'cn', 'OSI modal', 'softcopy', 0x31302e706466, '2016-11-01', '2016-11-10'),
(24, 'comps', '5', '101', 'wtl', 'ajax', 'softcopy', 0x31302e706466, '2016-11-02', '2016-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`assign_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `assign_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
