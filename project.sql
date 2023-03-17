-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 09:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `FCODE` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `MOBILE` varchar(10) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `DEPARTMENT` varchar(25) NOT NULL,
  `SUBJECT` varchar(25) NOT NULL,
  `SUBJECTCODE` varchar(25) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`FCODE`, `NAME`, `MOBILE`, `EMAIL`, `DEPARTMENT`, `SUBJECT`, `SUBJECTCODE`, `id`) VALUES
('T001', 'Neha Gupta', '8982613633', 'neha.gupta@suas.ac.in', 'CSIT', 'Microsoft Products Lab', 'BTCS01CCB6', 1),
('T002', 'Neha Sharma', '9993314307', 'neha.sharma@suas.ac.in', 'CSIT', 'Programming Concepts Usin', 'btcs01ccb4', 2),
('T003', 'Manish Khule', '9179961771', 'manish.khule@suas.ac.in', 'CSIT', 'Web Technology', 'BTCS01CCB2', 3),
('T004', 'Abhishek Anand', '7004486070', 'abhishek.anand@suas.ac.in', 'CSIT', 'Database Management Syste', 'BTCS01CCB5', 4),
('T005', 'Makrand Samvastar', '9826075471', 'makrand.samvastar@suas.ac', 'CSIT', 'Computer Organization and', 'BTCS01CCB3', 5),
('T006', 'Shilpa Umdekar', '7566568984', 'shilpa.umdekar@suas.ac.in', 'CSIT', 'Applied Mathematics-1', '2020BTCS01CFB1', 6),
('T007', 'Charul Jain', '9009966001', 'charul.jain@suas.ac.in', 'MBA', 'Interdisciplinary Course', '2020BTCS01CFB7', 7);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `FCODE` varchar(10) NOT NULL,
  `SEM` varchar(10) NOT NULL,
  `SUBJECT` varchar(50) NOT NULL,
  `SUBJECTCODE` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`FCODE`, `SEM`, `SUBJECT`, `SUBJECTCODE`) VALUES
('T005', '8', 'Advanced Cloud Computing', 'BTCS01AAA1'),
('T004', '8', 'Advanced Database managment system', 'BTCS01AAA2'),
('T005', '6', 'Agile Technology', 'BTCS01CCC4'),
('T003', '4', 'Application development F', 'BTCS01CCA5'),
('T006', '1', 'Applied Mathematics-1', 'BTCS01CCB1'),
('T001', '4', 'Computer Network', 'BTCS01CCA6'),
('T005', '1', 'Computer Organization and Architecture', 'BTCS01CCB3'),
('T004', '6', 'Data Analysing Using R & Python', 'BTCS01CCC4'),
('T002', '4', 'Data Warehousing and Mining', 'BTCS01CCA6'),
('T004', '1', 'Database Management System', 'BTCS01CCB5'),
('T001', '8', 'Final Project and Dissertation', 'BTCS01AAA3'),
('T002', '6', 'Frameworks(Node & Angular JS)', 'BTCS01BBB6'),
('T001', '1', 'Microsoft Products Lab', 'BTCS01CCB6'),
('T002', '1', 'Programming Concepts Using C & C++', 'BTCS01CCB4'),
('T003', '6', 'Python', 'BTCS01BBB5'),
('T006', '4', 'Statics-2', 'BTCS01CCA1'),
('T003', '1', 'Web Technology', 'BTCS01CCB2');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `FCODE` varchar(10) NOT NULL,
  `WEEKDAYS` varchar(25) NOT NULL,
  `10:00-11:00` varchar(35) NOT NULL,
  `11:00-12:00` varchar(35) NOT NULL,
  `12:00-1:00` varchar(35) NOT NULL,
  `1:00-1:30` varchar(25) NOT NULL,
  `1:30-2:30` varchar(40) NOT NULL,
  `2:30-3:30` varchar(35) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`FCODE`, `WEEKDAYS`, `10:00-11:00`, `11:00-12:00`, `12:00-1:00`, `1:00-1:30`, `1:30-2:30`, `2:30-3:30`, `id`) VALUES
('T001', 'MONDAY', '<br>-<br>', 'BTCS01AAA3<br>(Batch-A)', 'BTCS01CCA6<br>(Batch-A)', '<br>LUNCH<br>', 'BTCS01AAA3<br>(Batch-B)', 'BTCS01CCA6<br>(Batch-B)', 0),
('T001', 'TUESDAY', 'BTCS01AAA3<br>(Batch-A)', 'BTCS01AAA3<br>(Batch-B)', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01CCA6<br>(Batch-A)', 'BTCS01CCA6<br>(Batch-B)', 1),
('T001', 'WEDNESDAY', 'BTCS01CCB6', '<br>-<br>', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01AAA3<br>(Batch-A)', 'BTCS01AAA3<br>(Batch-B)', 2),
('T001', 'THURSDAY', '<br>-<br>', 'BTCS01CCA6<br>(Batch-A)', 'BTCS01CCA6<br>(Batch-B)', '<br>LUNCH<br>', 'BTCS01CCB6<br>LAB', 'BTCS01CCB6<br>LAB', 3),
('T001', 'FRIDAY', '<br>-<br>', 'BTCS01CCA6<br>(Batch-A)<br>LAB', 'BTCS01CCA6(Batch-)<br>LAB', '<br>LUNCH<br>', 'BTCS01CCA6<br>(Batch-B)<br>LAB', 'BTCS01CCA6<br>(Batch-A)<br>LAB', 4),
('T001', 'SATURDAY', '<br>-<br>', 'BTCS01CCB6', '<br>-<br>', 'LUNCH', '<br>-<br>', '<br>-<br>', 5),
('T002', 'MONDAY', 'BTCS01CCA6<br>(Batch-A)', 'BTCS01CCA6<br>(Batch-B)', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01BBB6<br>(Batch-A)', 'BTCS01BBB6<br>(Batch-B)', 6),
('T002', 'TUESDAY', '<br>-<br>', 'BTCS01CCA6<br>(Batch-A)', 'BTCS01BBB6<br>(Batch-A)', '<br>LUNCH<br>', 'BTCS01CCA6<br>(Batch-A)<br>LAB', 'BTCS01CCA6<br>(Batch-A)<br>LAB', 7),
('T002', 'WEDNESDAY', '<br>-<br>', 'BTCS01CCA6<br>(Batch-B)', 'BTCS01BBB6<br>(Batch-B)', '<br>LUNCH<br>', 'BTCS01CCA6<br>(Batch-B)<br>LAB', 'BTCS01CCA6<br>(Batch-B)<br>LAB', 8),
('T002', 'THURSDAY', 'BTCS01BBB6<br>(Batch-B)<br>LAB', 'BTCS01BBB6<br>(Batch-B)<br>LAB', 'BTCS01CCB4', '<br>LUNCH<br>', '<br>-<br>', '<br>-<br>', 9),
('T002', 'FRIDAY', 'BTCS01BBB6<br>(Batch-A)<br>LAB', 'BTCS01BBB6<br>(Batch-A)<br>LAB', 'BTCS01CCB4', '<br>LUNCH<br>', 'BTCS01CCB4<br>LAB', 'BTCS01CCB4<br>LAB', 10),
('T002', 'SATURDAY', '<br>-<br>', 'BTCS01CCB4', '<br>-<br>', '<br>LUNCH<br>', '<br>-<br>', '<br>-<br>', 11),
('T003', 'MONDAY', '<br>-<br>', 'BTCS01CCB2', 'BTCS01CCA5<br>(Batch-A)', '<br>LUNCH<br>', 'BTCS01CCB2<br>LAB', 'BTCS01CCA5<br>(Batch-B)', 12),
('T003', 'TUESDAY', 'BTCS01CCB2', 'BTCS01CCA5<br>(Batch-B)', 'BTCS01CCA5<br>(Batch-A)', '<br>LUNCH<br>', 'BTCS01CCB2<br>LAB', 'BTCS01CCB2<br>LAB', 13),
('T003', 'WEDNESDAY', 'BTCS01BBB5(Batch-A)', 'BTCS01BBB5(Batch-B)', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01CCA5<br>(Batch-A)<br>LAB', 'BTCS01CCA5<br>(Batch-A)<br>LAB', 14),
('T003', 'THURSDAY', '<br>-<br>', 'BTCS01BBB5<br>(Batch-A)', 'BTCS01BBB5<br>(Batch-B)', '<br>LUNCH<br>', 'BTCS01CCA5<br>(Batch-B)<br>LAB', 'BTCS01CCA5<br>(Batch-B)<br>LAB', 15),
('T003', 'FRIDAY', 'BTCS01BBB5<br>(Batch-A)<br>LAB', 'BTCS01BBB5<br>(Batch-A)<br>LAB', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01BBB5<br>(Batch-B)<br>LAB', 'BTCS01BBB5<br>(Batch-B)<br>LAB', 16),
('T003', 'SATURDAY', 'BTCS01BBB5<br>(Batch-A) ', 'BTCS01BBB5<br>(Batch-B) ', '<br>-<br>', '<br>LUNCH<br>', '<br>-<br>', '<br>-<br>', 17),
('T004', 'MONDAY', 'BTCS01AAA2<br>(Batch-A)', 'BTCS01CCB5', 'BTCS01AAA2<br>(Batch-B)', '<br>LUNCH<br>', 'BTCS01CCB5<br>LAB', 'BTCS01CCB5<br>LAB', 18),
('T004', 'TUESDAY', 'BTCS01AAA2<br>(Batch-B)<br>LAB', 'BTCS01AAA2<br>(Batch-B)<br>LAB', 'BTCS01CCB5', '<br>LUNCH<br>', 'BTCS01AAA2<br>(Batch-A)<br>LAB', 'BTCS01AAA2<br>(Batch-A)<br>LAB', 19),
('T004', 'WEDNESDAY', 'BTCS01CCC4<br>(Batch-A)', '<br>-<br>', 'BTCS01CCC4<br>(Batch-B)', '<br>LUNCH<br>', '<br>-<br>', 'BTCS01CCB5', 20),
('T004', 'THURSDAY', '<br>-<br>', 'BTCS01CCC4<br>(Batch-B)<br>LAB', 'BTCS01CCC4<br>(Batch-B)<br>LAB', '<br>LUNCH<br>', 'BTCS01AAA2<br>(Batch-B)', '<br>-<br>', 21),
('T004', 'FRIDAY', 'BTCS01AAA2(Batch-A)', '<br>-<br>', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01CCC4<br>(Batch-A)<br>LAB', 'BTCS01CCC4<br>(Batch-A)<br>LAB', 22),
('T004', 'SATURDAY', 'BTCS01CCB5', '<br>-<br>', '<br>-<br>', '<br>LUNCH<br>', '<br>-<br>', '<br>-<br>', 23),
('T005', 'MONDAY', 'BTCS01CCB3', 'BTCS01CCC4<br>(Batch-A)', 'BTCS01CCC4<br>(Batch-B)', '<br>LUNCH<br>', 'BTCS01CCB3<br>LAB', 'BTCS01CCB3<br>LAB', 30),
('T005', 'TUESDAY', 'BTCS01CCB3', 'BTCS01CCC4(Batch-B)', 'BTCS01AAA1(Batch-A)', '<br>LUNCH<br>', 'BTCS01CCC4(Batch-A) LAB', 'BTCS01CCC4(Batch-A) LAB', 31),
('T005', 'WEDNESDAY', 'BTCS01CCB3', 'BTCS01CCC4(Batch-A) ', 'BTCS01AAA1(Batch-B)', '<br>LUNCH<br>', 'BTCS01CCC4(Batch-B) LAB', 'BTCS01CCC4(Batch-B) LAB', 32),
('T005', 'THURSDAY', 'BTCS01AAA1<br>(Batch-A)', 'BTCS01AAA1<br>(Batch-B)', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01AAA1<br>(Batch-B)<br>LAB', 'BTCS01AAA1<br>(Batch-B)<br>LAB', 33),
('T005', 'FRIDAY', 'BTCS01AAA1<br>(Batch-B)', '<br>-<br>', 'BTCS01CCC4<br>(Batch-B)', '<br>LUNCH<br>', 'BTCS01AAA1<br>(Batch-A)<br>LAB', 'BTCS01AAA1<br>(Batch-A)<br>LAB', 34),
('T005', 'SATURDAY', 'BTCS01CCC4<br>(Batch-A)', 'BTCS01CCB3', '<br>-<br>', '<br>LUNCH<br>', '<br>-<br>', '<br>-<br>', 35),
('T006', 'MONDAY', '<br>-<br>', 'BTCS01CCB1', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01CCA1<br>(Batch-A)', 'BTCS01CCA1<br>(Batch-B)', 50),
('T006', 'TUESDAY', 'BTCS01CCB1', '<br>-<br>', '<br>-<br>', '<br>LUNCH<br>', 'BTCS01CCA1<br>(Batch-A)', 'BTCS01CCA1<br>(Batch-B)', 51),
('T006', 'WEDNESDAY', 'BTCS01CCA1<br>(Batch-A)', '<br>-<br>', 'BTCS01CCB1', '<br>LUNCH<br>', 'BTCS01CCA1<br>(Batch-B)', '<br>-<br>', 52),
('T006', 'THURSDAY', '', '', '', '', '', '', 53),
('T006', 'FRIDAY', '', '', '', '', '', '', 54),
('T006', 'SATURDAY', '', '', '', '', '', '', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`FCODE`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJECT`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
