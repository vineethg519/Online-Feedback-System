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
-- Table structure for table `subjects_average`
--

CREATE TABLE IF NOT EXISTS `subjects_average` (
`id` int(4) NOT NULL,
  `branch` text NOT NULL,
  `semester` text NOT NULL,
  `section` text NOT NULL,
  `ooad` decimal(2,1) NOT NULL,
  `vlsi` decimal(2,1) NOT NULL,
  `mefa` decimal(2,1) NOT NULL,
  `cd` decimal(2,1) NOT NULL,
  `wt` decimal(2,1) NOT NULL,
  `ns` decimal(2,1) NOT NULL,
  `cd/wt_lab` decimal(2,1) NOT NULL,
  `aelcs_lab` decimal(2,1) NOT NULL,
  `ooadComm` varchar(100) NOT NULL,
  `vlsiComm` varchar(100) NOT NULL,
  `mefaComm` varchar(100) NOT NULL,
  `cdComm` varchar(100) NOT NULL,
  `wtComm` varchar(100) NOT NULL,
  `nsComm` varchar(100) NOT NULL,
  `cdwtlabComm` varchar(100) NOT NULL,
  `aelcslabComm` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_average`
--

INSERT INTO `subjects_average` (`id`, `branch`, `semester`, `section`, `ooad`, `vlsi`, `mefa`, `cd`, `wt`, `ns`, `cd/wt_lab`, `aelcs_lab`, `ooadComm`, `vlsiComm`, `mefaComm`, `cdComm`, `wtComm`, `nsComm`, `cdwtlabComm`, `aelcslabComm`, `date`) VALUES
(1, 'CSE', '3-2', 'A', '4.9', '6.1', '5.1', '5.4', '6.5', '6.1', '6.2', '5.2', 'nice', 'perfect', 'awesome', 'great', 'cool', 'going grt', 'lab1', 'lab2', '2015-03-15 16:55:45'),
(2, 'CSE', '3-2', 'A', '5.7', '7.2', '6.2', '6.5', '7.5', '7.2', '7.3', '6.3', 'very good at teaching OOAD', 'very good at teaching VLSI', 'very good at teaching MEFA', 'very good at teaching CD', 'very good at teaching WT', 'very good at teaching NS', 'very good at teaching LAB1', 'very good at teaching lab2', '2015-03-15 17:09:09'),
(3, 'CSE', '3-2', 'A', '5.0', '4.7', '4.0', '4.5', '4.5', '5.3', '5.0', '4.7', 'asd', 'qwe', 'zxc', 'asd', 'qwer', 'xcvb', 'ert', 'wer', '2015-03-18 19:21:51'),
(4, 'CSE', '3-2', 'A', '5.4', '5.2', '5.0', '5.7', '4.9', '3.9', '4.6', '5.9', 'kiran', 'ravi ', 'kavi', 'swarn', 'surekha', 'venkat', 'lab1 cd and wt', 'aelcslab', '2015-03-20 10:20:47'),
(5, 'CSE', '3-2', 'C', '2.3', '1.6', '1.8', '1.6', '1.6', '1.6', '1.7', '1.8', 'C', 'C1', 'C2', 'c3', 'c4', 'c5', 'c6', 'c7', '2015-03-22 22:52:02'),
(6, 'CSE', '3-2', 'B', '2.7', '2.1', '2.1', '2.1', '2.2', '2.1', '2.3', '2.3', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', '2015-03-22 23:02:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects_average`
--
ALTER TABLE `subjects_average`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects_average`
--
ALTER TABLE `subjects_average`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
