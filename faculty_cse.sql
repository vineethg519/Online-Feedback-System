-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2015 at 06:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_feedback_cse32`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_cse`
--

CREATE TABLE IF NOT EXISTS `faculty_cse` (
`id` int(3) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `semester` varchar(4) NOT NULL,
  `section` varchar(1) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `csea` int(1) NOT NULL,
  `cseb` int(1) NOT NULL,
  `csec` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_cse`
--

INSERT INTO `faculty_cse` (`id`, `branch`, `semester`, `section`, `faculty_name`, `csea`, `cseb`, `csec`) VALUES
(1, 'CSE', '3-2', 'A', 'P.kiran Kumar<br/>(OOAD)', 1, 0, 0),
(2, 'CSE', '3-2', 'A', 'G.Ravi kishore<br/>(VLSI)', 1, 0, 0),
(3, 'CSE', '3-2', 'A', 'K.Kavitha<br/>(MEFA)', 1, 0, 0),
(4, 'CSE', '3-2', 'A', 'A.Swarna Reddy<br/>(CD)', 1, 0, 0),
(5, 'CSE', '3-2', 'A', 'G.Surekha<br/>(WT)', 1, 0, 0),
(6, 'CSE', '3-2', 'A', 'D.Venkateswarlu<br/>(NS)', 1, 0, 0),
(7, 'CSE', '3-2', 'A', 'Swarna/Surekha<br/>(CD/WT)', 1, 0, 0),
(8, 'CSE', '3-2', 'A', 'Sareen Raj<br/>( AELCS)', 1, 0, 0),
(9, 'CSE', '3-2', 'B', 'p.swetha<br/>(OOAD)', 0, 1, 0),
(10, 'CSE', '3-2', 'B', 'Tarangini<br/>(VLSI)', 0, 1, 0),
(11, 'CSE', '3-2', 'B', 'K. Kavitha<br/>(MEFA)', 0, 1, 0),
(12, 'CSE', '3-2', 'B', 'B.Sailaja<br/>(CD)', 0, 1, 0),
(13, 'CSE', '3-2', 'B', 'M.Tarakeshwar Rao<br/>(WT)', 0, 1, 0),
(14, 'CSE', '3-2', 'B', 'Ravi Mathey<br/>(NS)', 0, 1, 0),
(15, 'CSE', '3-2', 'B', 'Sunitha/M.Tarakeshwar Rao<br/>(CD/WT Lab)', 0, 1, 0),
(16, 'CSE', '3-2', 'B', 'Sareen Raj<br/>(AELCS Lab)', 0, 1, 0),
(17, 'CSE', '3-2', 'C', 'P. Kiran Kumar<br/>(OOAD)', 0, 0, 1),
(18, 'CSE', '3-2', 'C', 'G.RaviKishore<br/>(vlsi)', 0, 0, 1),
(19, 'CSE', '3-2', 'C', 'K. Kavitha<br/>(MEFA)', 0, 0, 1),
(20, 'CSE', '3-2', 'C', 'A. Swarna Reddy<br/>(CD)', 0, 0, 1),
(21, 'CSE', '3-2', 'C', 'G. Surekha<br/>(WT)', 0, 0, 1),
(22, 'CSE', '3-2', 'C', 'D. Venkateshwarlu<br/>(NS)', 0, 0, 1),
(23, 'CSE', '3-2', 'C', 'Swarna/Surekha<br/>(CD/WT Lab)', 0, 0, 1),
(24, 'CSE', '3-2', 'C', 'Sareen Raj<br/>(AELCS Lab)', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_cse`
--
ALTER TABLE `faculty_cse`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_cse`
--
ALTER TABLE `faculty_cse`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
