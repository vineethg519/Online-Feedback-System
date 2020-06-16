-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2015 at 06:58 PM
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
-- Table structure for table `faculty_all_sections_average`
--

CREATE TABLE IF NOT EXISTS `faculty_all_sections_average` (
`id` int(11) NOT NULL,
  `branch` text NOT NULL,
  `semester` varchar(5) NOT NULL,
  `section` text NOT NULL,
  `subject/facultyname` varchar(50) NOT NULL,
  `average` decimal(2,1) NOT NULL,
  `comments` mediumtext NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_all_sections_average`
--

INSERT INTO `faculty_all_sections_average` (`id`, `branch`, `semester`, `section`, `subject/facultyname`, `average`, `comments`, `date`) VALUES
(1, 'CSE', 'A', '3-2', 'P. Kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>', '2015-03-16 22:48:35'),
(2, 'CSE', 'A', '3-2', 'G. Ravi Kishore<br/>(VLSI)', '6.7', '#perfect<br/>#very good at teaching VLSI<br/>', '2015-03-16 22:48:35'),
(3, 'CSE', 'A', '3-2', 'K. Kavitha<br/>(MEFA)', '5.7', '#awesome<br/>#very good at teaching MEFA<br/>', '2015-03-16 22:48:35'),
(4, 'CSE', 'A', '3-2', 'A. Swarna Reddy<br/>(CD)', '6.0', '#great<br/>#very good at teaching CD<br/>', '2015-03-16 22:48:35'),
(5, 'CSE', 'A', '3-2', 'G. Surekha<br/>(WT)', '7.0', '#cool<br/>#very good at teaching WT<br/>', '2015-03-16 22:48:35'),
(6, 'CSE', 'A', '3-2', 'D. Venkateshwarlu<br/>(NS)', '6.7', '#going grt<br/>#very good at teaching NS<br/>', '2015-03-16 22:48:35'),
(7, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT Lab)', '6.8', '#lab1<br/>#very good at teaching LAB1<br/>', '2015-03-16 22:48:35'),
(8, 'CSE', 'A', '3-2', 'Sareen Raj<br/>(AELCS Lab)', '5.8', '#lab2<br/>#very good at teaching lab2<br/>', '2015-03-16 22:48:35'),
(9, 'CSE', 'A', '3-2', 'P.Kiran Kumar<br/>(OOAD)', '5.2', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>', '2015-03-20 09:24:13'),
(10, 'CSE', 'A', '3-2', 'G.ravi kishore\r\n(vlsi)', '6.0', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>', '2015-03-20 09:24:13'),
(11, 'CSE', 'A', '3-2', 'K. Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>', '2015-03-20 09:24:13'),
(12, 'CSE', 'A', '3-2', 'A. Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>', '2015-03-20 09:24:13'),
(13, 'CSE', 'A', '3-2', 'G. Surekha<br/>(WT)', '6.2', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>', '2015-03-20 09:24:13'),
(14, 'CSE', 'A', '3-2', 'D. Venkateshwarlu<br/>(NS)', '6.2', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>', '2015-03-20 09:24:13'),
(15, 'CSE', 'A', '3-2', 'G.ravi kishore\r\n(vlsi)', '6.2', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>', '2015-03-20 09:24:13'),
(16, 'CSE', 'A', '3-2', 'Sareen Raj<br/>(AELCS Lab)', '5.4', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>', '2015-03-20 09:24:14'),
(17, 'CSE', 'A', '3-2', 'P.Kiran Kumar<br/>(OOAD)', '5.2', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>', '2015-03-20 09:31:26'),
(18, 'CSE', 'A', '3-2', 'G.ravi kishore\r\n(vlsi)', '6.0', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>', '2015-03-20 09:31:26'),
(19, 'CSE', 'A', '3-2', 'K. Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>', '2015-03-20 09:31:27'),
(20, 'CSE', 'A', '3-2', 'A. Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>', '2015-03-20 09:31:27'),
(21, 'CSE', 'A', '3-2', 'G. Surekha<br/>(WT)', '6.2', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>', '2015-03-20 09:31:27'),
(22, 'CSE', 'A', '3-2', 'D. Venkateshwarlu<br/>(NS)', '6.2', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>', '2015-03-20 09:31:27'),
(23, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT Lab)', '6.2', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>', '2015-03-20 09:31:27'),
(24, 'CSE', 'A', '3-2', 'Sareen Raj<br/>(AELCS Lab)', '5.4', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>', '2015-03-20 09:31:27'),
(25, 'CSE', 'A', '3-2', 'P.Kiran Kumar<br/>(OOAD)', '5.2', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>', '2015-03-20 09:46:43'),
(26, 'CSE', 'A', '3-2', 'G.ravi kishore\r\n(vlsi)', '6.0', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>', '2015-03-20 09:46:43'),
(27, 'CSE', 'A', '3-2', 'K. Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>', '2015-03-20 09:46:43'),
(28, 'CSE', 'A', '3-2', 'A. Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>', '2015-03-20 09:46:43'),
(29, 'CSE', 'A', '3-2', 'G. Surekha<br/>(WT)', '6.2', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>', '2015-03-20 09:46:43'),
(30, 'CSE', 'A', '3-2', 'D. Venkateshwarlu<br/>(NS)', '6.2', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>', '2015-03-20 09:46:43'),
(31, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT Lab)', '6.2', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>', '2015-03-20 09:46:43'),
(32, 'CSE', 'A', '3-2', 'Sareen Raj<br/>(AELCS Lab)', '5.4', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>', '2015-03-20 09:46:43'),
(33, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 22:54:49'),
(34, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 22:54:49'),
(35, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 22:54:49'),
(36, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 22:54:49'),
(37, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 22:54:49'),
(38, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 22:54:49'),
(39, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 22:54:49'),
(40, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 22:54:49'),
(41, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 22:55:58'),
(42, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 22:55:58'),
(43, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 22:55:58'),
(44, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 22:55:58'),
(45, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 22:55:59'),
(46, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 22:55:59'),
(47, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 22:55:59'),
(48, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 22:55:59'),
(49, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 22:56:01'),
(50, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 22:56:01'),
(51, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 22:56:01'),
(52, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 22:56:01'),
(53, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 22:56:02'),
(54, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 22:56:02'),
(55, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 22:56:02'),
(56, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 22:56:02'),
(57, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 22:56:03'),
(58, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 22:56:03'),
(59, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 22:56:04'),
(60, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 22:56:04'),
(61, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 22:56:04'),
(62, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 22:56:04'),
(63, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 22:56:04'),
(64, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 22:56:04'),
(65, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 22:58:17'),
(66, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 22:58:17'),
(67, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 22:58:17'),
(68, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 22:58:17'),
(69, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 22:58:17'),
(70, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 22:58:17'),
(71, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 22:58:17'),
(72, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 22:58:17'),
(73, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '2.3', '#C<br/>', '2015-03-22 22:59:39'),
(74, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '1.6', '#C1<br/>', '2015-03-22 22:59:39'),
(75, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '1.8', '#C2<br/>', '2015-03-22 22:59:39'),
(76, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '1.6', '#c3<br/>', '2015-03-22 22:59:39'),
(77, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '1.6', '#c4<br/>', '2015-03-22 22:59:39'),
(78, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '1.6', '#c5<br/>', '2015-03-22 22:59:39'),
(79, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '1.7', '#c6<br/>', '2015-03-22 22:59:39'),
(80, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '1.8', '#c7<br/>', '2015-03-22 22:59:39'),
(81, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '4.9', '#nice<br/>', '2015-03-22 23:00:18'),
(82, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '6.1', '#perfect<br/>', '2015-03-22 23:00:18'),
(83, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>', '2015-03-22 23:00:18'),
(84, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.4', '#great<br/>', '2015-03-22 23:00:18'),
(85, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '6.5', '#cool<br/>', '2015-03-22 23:00:18'),
(86, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '6.1', '#going grt<br/>', '2015-03-22 23:00:18'),
(87, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '6.2', '#lab1<br/>', '2015-03-22 23:00:18'),
(88, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.2', '#lab2<br/>', '2015-03-22 23:00:18'),
(89, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.2', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>', '2015-03-22 23:00:35'),
(90, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '6.0', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>', '2015-03-22 23:00:35'),
(91, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>', '2015-03-22 23:00:35'),
(92, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>', '2015-03-22 23:00:35'),
(93, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '6.2', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>', '2015-03-22 23:00:35'),
(94, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '6.2', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>', '2015-03-22 23:00:35'),
(95, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '6.2', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>', '2015-03-22 23:00:35'),
(96, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.4', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>', '2015-03-22 23:00:35'),
(97, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 23:00:52'),
(98, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 23:00:52'),
(99, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 23:00:52'),
(100, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 23:00:52'),
(101, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 23:00:52'),
(102, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 23:00:52'),
(103, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 23:00:52'),
(104, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 23:00:52'),
(105, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '2.7', '#b1<br/>', '2015-03-22 23:02:21'),
(106, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '2.1', '#b2<br/>', '2015-03-22 23:02:21'),
(107, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '2.1', '#b3<br/>', '2015-03-22 23:02:21'),
(108, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '2.1', '#b4<br/>', '2015-03-22 23:02:21'),
(109, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '2.2', '#b5<br/>', '2015-03-22 23:02:21'),
(110, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '2.1', '#b6<br/>', '2015-03-22 23:02:22'),
(111, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '2.3', '#b7<br/>', '2015-03-22 23:02:22'),
(112, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '2.3', '#b8<br/>', '2015-03-22 23:02:22'),
(113, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '2.3', '#C<br/>', '2015-03-22 23:02:37'),
(114, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '1.6', '#C1<br/>', '2015-03-22 23:02:37'),
(115, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '1.8', '#C2<br/>', '2015-03-22 23:02:37'),
(116, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '1.6', '#c3<br/>', '2015-03-22 23:02:37'),
(117, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '1.6', '#c4<br/>', '2015-03-22 23:02:37'),
(118, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '1.6', '#c5<br/>', '2015-03-22 23:02:37'),
(119, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '1.7', '#c6<br/>', '2015-03-22 23:02:37'),
(120, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '1.8', '#c7<br/>', '2015-03-22 23:02:38'),
(121, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 23:02:45'),
(122, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 23:02:45'),
(123, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 23:02:45'),
(124, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 23:02:45'),
(125, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 23:02:45'),
(126, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 23:02:45'),
(127, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 23:02:45'),
(128, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 23:02:45'),
(129, 'CSE', 'B', '3-2', 'P.kiran Kumar<br/>(OOAD)', '2.7', '#b1<br/>', '2015-03-22 23:04:53'),
(130, 'CSE', 'B', '3-2', 'G.Ravi kishore<br/>(VLSI)', '2.1', '#b2<br/>', '2015-03-22 23:04:53'),
(131, 'CSE', 'B', '3-2', 'K.Kavitha<br/>(MEFA)', '2.1', '#b3<br/>', '2015-03-22 23:04:53'),
(132, 'CSE', 'B', '3-2', 'A.Swarna Reddy<br/>(CD)', '2.1', '#b4<br/>', '2015-03-22 23:04:53'),
(133, 'CSE', 'B', '3-2', 'G.Surekha<br/>(WT)', '2.2', '#b5<br/>', '2015-03-22 23:04:53'),
(134, 'CSE', 'B', '3-2', 'D.Venkateswarlu<br/>(NS)', '2.1', '#b6<br/>', '2015-03-22 23:04:53'),
(135, 'CSE', 'B', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '2.3', '#b7<br/>', '2015-03-22 23:04:53'),
(136, 'CSE', 'B', '3-2', 'Sareen Raj<br/>( AELCS)', '2.3', '#b8<br/>', '2015-03-22 23:04:53'),
(137, 'CSE', 'C', '3-2', 'P. Kiran Kumar<br/>(OOAD)', '2.3', '#C<br/>', '2015-03-22 23:08:24'),
(138, 'CSE', 'C', '3-2', 'g.ravi <br/>(vlsi)', '1.6', '#C1<br/>', '2015-03-22 23:08:24'),
(139, 'CSE', 'C', '3-2', 'K. Kavitha<br/>(MEFA)', '1.8', '#C2<br/>', '2015-03-22 23:08:24'),
(140, 'CSE', 'C', '3-2', 'A. Swarna Reddy<br/>(CD)', '1.6', '#c3<br/>', '2015-03-22 23:08:24'),
(141, 'CSE', 'C', '3-2', 'G. Surekha<br/>(WT)', '1.6', '#c4<br/>', '2015-03-22 23:08:24'),
(142, 'CSE', 'C', '3-2', 'D. Venkateshwarlu<br/>(NS)', '1.6', '#c5<br/>', '2015-03-22 23:08:24'),
(143, 'CSE', 'C', '3-2', 'Swarna/Surekha<br/>(CD/WT Lab)', '1.7', '#c6<br/>', '2015-03-22 23:08:24'),
(144, 'CSE', 'C', '3-2', 'Sareen Raj<br/>(AELCS Lab)', '1.8', '#c7<br/>', '2015-03-22 23:08:24'),
(145, 'CSE', 'C', '3-2', 'P. Kiran Kumar<br/>(OOAD)', '2.3', '#C<br/>', '2015-03-22 23:08:55'),
(146, 'CSE', 'C', '3-2', 'g.ravi <br/>(vlsi)', '1.6', '#C1<br/>', '2015-03-22 23:08:55'),
(147, 'CSE', 'C', '3-2', 'K. Kavitha<br/>(MEFA)', '1.8', '#C2<br/>', '2015-03-22 23:08:55'),
(148, 'CSE', 'C', '3-2', 'A. Swarna Reddy<br/>(CD)', '1.6', '#c3<br/>', '2015-03-22 23:08:55'),
(149, 'CSE', 'C', '3-2', 'G. Surekha<br/>(WT)', '1.6', '#c4<br/>', '2015-03-22 23:08:56'),
(150, 'CSE', 'C', '3-2', 'D. Venkateshwarlu<br/>(NS)', '1.6', '#c5<br/>', '2015-03-22 23:08:56'),
(151, 'CSE', 'C', '3-2', 'Swarna/Surekha<br/>(CD/WT Lab)', '1.7', '#c6<br/>', '2015-03-22 23:08:56'),
(152, 'CSE', 'C', '3-2', 'Sareen Raj<br/>(AELCS Lab)', '1.8', '#c7<br/>', '2015-03-22 23:08:56'),
(153, 'CSE', 'A', '3-2', 'P.kiran Kumar<br/>(OOAD)', '5.3', '#nice<br/>#very good at teaching OOAD<br/>#asd<br/>#kiran<br/>', '2015-03-22 23:09:55'),
(154, 'CSE', 'A', '3-2', 'G.Ravi kishore<br/>(VLSI)', '5.8', '#perfect<br/>#very good at teaching VLSI<br/>#qwe<br/>#ravi <br/>', '2015-03-22 23:09:55'),
(155, 'CSE', 'A', '3-2', 'K.Kavitha<br/>(MEFA)', '5.1', '#awesome<br/>#very good at teaching MEFA<br/>#zxc<br/>#kavi<br/>', '2015-03-22 23:09:55'),
(156, 'CSE', 'A', '3-2', 'A.Swarna Reddy<br/>(CD)', '5.5', '#great<br/>#very good at teaching CD<br/>#asd<br/>#swarn<br/>', '2015-03-22 23:09:55'),
(157, 'CSE', 'A', '3-2', 'G.Surekha<br/>(WT)', '5.9', '#cool<br/>#very good at teaching WT<br/>#qwer<br/>#surekha<br/>', '2015-03-22 23:09:55'),
(158, 'CSE', 'A', '3-2', 'D.Venkateswarlu<br/>(NS)', '5.6', '#going grt<br/>#very good at teaching NS<br/>#xcvb<br/>#venkat<br/>', '2015-03-22 23:09:55'),
(159, 'CSE', 'A', '3-2', 'Swarna/Surekha<br/>(CD/WT)', '5.8', '#lab1<br/>#very good at teaching LAB1<br/>#ert<br/>#lab1 cd and wt<br/>', '2015-03-22 23:09:55'),
(160, 'CSE', 'A', '3-2', 'Sareen Raj<br/>( AELCS)', '5.5', '#lab2<br/>#very good at teaching lab2<br/>#wer<br/>#aelcslab<br/>', '2015-03-22 23:09:55'),
(161, 'CSE', 'B', '3-2', 'p.swetha<br/>(OOAD)', '2.7', '#b1<br/>', '2015-03-22 23:10:45'),
(162, 'CSE', 'B', '3-2', 'Tarangini<br/>(VLSI)', '2.1', '#b2<br/>', '2015-03-22 23:10:45'),
(163, 'CSE', 'B', '3-2', 'K. Kavitha<br/>(MEFA)', '2.1', '#b3<br/>', '2015-03-22 23:10:45'),
(164, 'CSE', 'B', '3-2', 'B.Sailaja<br/>(CD)', '2.1', '#b4<br/>', '2015-03-22 23:10:45'),
(165, 'CSE', 'B', '3-2', 'M.Tarakeshwar Rao<br/>(WT)', '2.2', '#b5<br/>', '2015-03-22 23:10:45'),
(166, 'CSE', 'B', '3-2', 'Ravi Mathey<br/>(NS)', '2.1', '#b6<br/>', '2015-03-22 23:10:45'),
(167, 'CSE', 'B', '3-2', 'Sunitha/M.Tarakeshwar Rao<br/>(CD/WT Lab)', '2.3', '#b7<br/>', '2015-03-22 23:10:45'),
(168, 'CSE', 'B', '3-2', 'Sareen Raj<br/>(AELCS Lab)', '2.3', '#b8<br/>', '2015-03-22 23:10:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_all_sections_average`
--
ALTER TABLE `faculty_all_sections_average`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_all_sections_average`
--
ALTER TABLE `faculty_all_sections_average`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=169;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
