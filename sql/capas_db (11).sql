-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2016 at 10:07 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `instructor_name` varchar(200) NOT NULL,
  `instructor_college` varchar(200) NOT NULL,
  `instructor_dept` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `A1` double NOT NULL,
  `A2` double NOT NULL,
  `A3` double NOT NULL,
  `A4` double NOT NULL,
  `A5` double NOT NULL,
  `B1` double NOT NULL,
  `B2` double NOT NULL,
  `B3` double NOT NULL,
  `B4` double NOT NULL,
  `B5` double NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` double NOT NULL,
  `C5` double NOT NULL,
  `D1` double NOT NULL,
  `D2` double NOT NULL,
  `D3` double NOT NULL,
  `D4` double NOT NULL,
  `D5` double NOT NULL,
  `average` double NOT NULL,
  `rating` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `student_name`, `instructor_name`, `instructor_college`, `instructor_dept`, `subject`, `A1`, `A2`, `A3`, `A4`, `A5`, `B1`, `B2`, `B3`, `B4`, `B5`, `C1`, `C2`, `C3`, `C4`, `C5`, `D1`, `D2`, `D3`, `D4`, `D5`, `average`, `rating`, `type`) VALUES
(27, '10-0000', 'Char,Char L.', '', '', 'MAT02B', 5, 5, 5, 5, 5, 4, 4, 4, 4, 4, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 3.5, 'Satisfactory', 'Student Evaluation'),
(28, '10-0000', 'Baba,Doom Doom', '', '', 'MAT01c', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 3, 3, 3, 5, 5, 5, 5, 5, 2.5, 'Fair', 'Student Evaluation'),
(29, '10-0000', 'Baba,Doom Doom', '', '', 'MAT01c', 2, 2, 4, 4, 1, 3, 3, 3, 3, 3, 5, 5, 5, 5, 5, 1, 1, 1, 1, 1, 2.9, 'Fair', 'Student Evaluation'),
(30, '10-0000', 'Baba,Doom Doom', '', '', 'MAT01c', 4, 4, 4, 4, 4, 5, 5, 5, 4, 3, 2, 2, 2, 2, 2, 5, 5, 5, 5, 5, 3.85, 'Satisfactory', 'Student Evaluation'),
(31, '10-0000', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', 'MAT01c', 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 1, 1, 1, 1, 1, 4, 4, 4, 4, 4, 3.5, 'Satisfactory', 'Student Evaluation'),
(32, '10-0000', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', 'MAT01c', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Poor', 'Student Evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `answer2`
--

CREATE TABLE IF NOT EXISTS `answer2` (
  `id` int(11) NOT NULL,
  `instructor_name` varchar(200) NOT NULL,
  `instructor_evaluatee` varchar(200) NOT NULL,
  `instructor_college` varchar(200) NOT NULL,
  `instructor_dept` varchar(200) NOT NULL,
  `A1` double NOT NULL,
  `A2` double NOT NULL,
  `A3` double NOT NULL,
  `A4` double NOT NULL,
  `A5` double NOT NULL,
  `B1` double NOT NULL,
  `B2` double NOT NULL,
  `B3` double NOT NULL,
  `B4` double NOT NULL,
  `B5` double NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` double NOT NULL,
  `C5` double NOT NULL,
  `D1` double NOT NULL,
  `D2` double NOT NULL,
  `D3` double NOT NULL,
  `D4` double NOT NULL,
  `D5` double NOT NULL,
  `average` double NOT NULL,
  `rating` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer2`
--

INSERT INTO `answer2` (`id`, `instructor_name`, `instructor_evaluatee`, `instructor_college`, `instructor_dept`, `A1`, `A2`, `A3`, `A4`, `A5`, `B1`, `B2`, `B3`, `B4`, `B5`, `C1`, `C2`, `C3`, `C4`, `C5`, `D1`, `D2`, `D3`, `D4`, `D5`, `average`, `rating`, `type`) VALUES
(1, 'Misa,Nery B.', 'Misa,Nery B.', '0', 'bSECE', 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 1.5, 'Poor', 'Self Evaluation'),
(2, 'Baba,Doom Doom', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Poor', 'Peer Evaluation'),
(3, 'Baba,Doom Doom', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 3, 'Satisfactory', 'Peer Evaluation'),
(4, 'fsdf', 'fsdf', 'College of Agriculture', 'BAgriTech', 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1.5, 'Poor', 'Dean Evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `dean_evaluate`
--

CREATE TABLE IF NOT EXISTS `dean_evaluate` (
  `id` int(11) NOT NULL,
  `deaninstructor_id` varchar(200) NOT NULL,
  `dean_name` varchar(200) NOT NULL,
  `instructor_evaluatee` varchar(200) NOT NULL,
  `instructor_college` varchar(200) NOT NULL,
  `instructor_dept` varchar(200) NOT NULL,
  `evaluated` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dean_evaluate`
--

INSERT INTO `dean_evaluate` (`id`, `deaninstructor_id`, `dean_name`, `instructor_evaluatee`, `instructor_college`, `instructor_dept`, `evaluated`, `type`) VALUES
(1, 'EA-0000', 'Baba,Doom Doom', 'fsdf', 'College of Agriculture', 'BAgriTech', '1', 'Dean Evaluation'),
(2, 'EA-0000', 'Baba,Doom Doom', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0', 'Dean Evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `dean_evaluator`
--

CREATE TABLE IF NOT EXISTS `dean_evaluator` (
  `dean_id` varchar(200) NOT NULL,
  `dean_last` varchar(200) NOT NULL,
  `dean_first` varchar(200) NOT NULL,
  `dean_middle` varchar(200) NOT NULL,
  `dean_college` varchar(200) NOT NULL,
  `dean_pass` varchar(200) NOT NULL,
  `dean_sem` varchar(200) NOT NULL,
  `dean_ay` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activate` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_evaluate`
--

CREATE TABLE IF NOT EXISTS `instructor_evaluate` (
  `id` int(11) NOT NULL,
  `instructor_id` varchar(200) NOT NULL,
  `instructor_name` varchar(200) NOT NULL,
  `instructor_evaluatee` varchar(200) NOT NULL,
  `instructor_college` varchar(200) NOT NULL,
  `instructor_dept` varchar(200) NOT NULL,
  `evaluated` enum('0','1') NOT NULL DEFAULT '0',
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_evaluate`
--

INSERT INTO `instructor_evaluate` (`id`, `instructor_id`, `instructor_name`, `instructor_evaluatee`, `instructor_college`, `instructor_dept`, `evaluated`, `type`) VALUES
(2, 'EA-0000', 'Baba,Doom Doom', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0', 'Peer Evaluation'),
(3, 'EA-0000', 'Baba,Doom Doom', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '1', 'Peer Evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_evaluator`
--

CREATE TABLE IF NOT EXISTS `instructor_evaluator` (
  `ins_id` varchar(200) NOT NULL,
  `ins_name` varchar(200) NOT NULL,
  `ins_college` varchar(200) NOT NULL,
  `ins_dept` varchar(200) NOT NULL,
  `ins_pass` varchar(200) NOT NULL,
  `ins_sem` varchar(200) NOT NULL,
  `ins_ay` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activate` enum('0','1') NOT NULL DEFAULT '0',
  `evaluated` enum('0','1') NOT NULL DEFAULT '0',
  `dean` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_evaluator`
--

INSERT INTO `instructor_evaluator` (`ins_id`, `ins_name`, `ins_college`, `ins_dept`, `ins_pass`, `ins_sem`, `ins_ay`, `date_created`, `activate`, `evaluated`, `dean`) VALUES
('12-0000', 'CHOS', 'College of Arts and Science', 'bSMath', 'qwqwqwq', '', '', '2016-12-16 14:50:24', '0', '0', ''),
('1212121', 'fsdf', 'College of Agriculture', 'BAgriTech', 'fsfsf', '', '', '2016-12-16 14:55:32', '0', '0', 'No'),
('56565q', 'fsdf', 'College of Allied Medicine', 'bSNursing', 'fsfsd', '', '', '2016-12-16 14:45:41', '0', '0', ''),
('EA-0000', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '12345', '1st Semester', '2016-2017', '2016-12-08 15:18:33', '0', '0', 'Yes'),
('EA-1234', 'Misa,Nery B.', 'College of Engineering', 'bSECE', '12345', '', '', '2016-09-30 08:39:51', '0', '1', ''),
('EA-2222', 'Chokchak', 'College of Business Administration', 'bSBA in Marketing', '123313', '', '', '2016-12-16 14:52:21', '0', '0', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_subjectlist`
--

CREATE TABLE IF NOT EXISTS `instructor_subjectlist` (
  `id` int(11) NOT NULL,
  `instructor_id` varchar(200) NOT NULL,
  `instructor_name` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_subjectlist`
--

INSERT INTO `instructor_subjectlist` (`id`, `instructor_id`, `instructor_name`, `college`, `department`, `year`, `section`, `subject`) VALUES
(1, 'EA-0000', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '2nd', 'A', 'MAT01c');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` varchar(200) NOT NULL,
  `sem_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem_description`) VALUES
('sem_01', '1st Semester'),
('sem_02', '2nd Semester');

-- --------------------------------------------------------

--
-- Table structure for table `student_evaluate`
--

CREATE TABLE IF NOT EXISTS `student_evaluate` (
  `id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `instructor_name` varchar(200) NOT NULL,
  `instructor_college` varchar(200) NOT NULL,
  `instructor_dept` varchar(200) NOT NULL,
  `evaluated` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_evaluate`
--

INSERT INTO `student_evaluate` (`id`, `student_id`, `student_name`, `subject`, `instructor_name`, `instructor_college`, `instructor_dept`, `evaluated`) VALUES
(6, '10-0000', 'Cruz,Juana B.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '1'),
(7, '10-0001', 'Lozada,Boom Boom D.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0'),
(8, '10-0003', 'Chos,Chos A.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0'),
(9, '10-0000', 'Cruz,Juana B.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '1'),
(10, '10-0003', 'Chos,Chos A.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0'),
(11, '10-0000', 'Cruz,Juana B.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0'),
(12, '10-0003', 'Chos,Chos A.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0'),
(13, '10-0000', 'Cruz,Juana B.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0'),
(14, '10-0003', 'Chos,Chos A.', 'MAT01c', 'Baba,Doom Doom', 'College of Agriculture', 'BAgriTech', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_evaluator`
--

CREATE TABLE IF NOT EXISTS `student_evaluator` (
  `student_id` varchar(200) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `student_college` varchar(200) NOT NULL,
  `student_dept` varchar(200) NOT NULL,
  `student_year` varchar(200) NOT NULL,
  `student_section` varchar(200) NOT NULL,
  `student_pass` varchar(200) NOT NULL,
  `student_sem` varchar(200) NOT NULL,
  `student_ay` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activate` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_evaluator`
--

INSERT INTO `student_evaluator` (`student_id`, `student_name`, `student_college`, `student_dept`, `student_year`, `student_section`, `student_pass`, `student_sem`, `student_ay`, `date_created`, `activate`) VALUES
('10-0000', 'Cruz,Juana B.', 'College of Teachers Education', 'BSCpE', '4th Year', 'GM', '12345', '', '', '2016-09-30 09:21:45', '0'),
('12-0000', 'Dela Cruz, Juan B.', 'College of Engineering', 'BSIE', '3rd Year', 'GM', '12345', '', '', '2016-09-30 08:38:49', '0'),
('13-0000', 'Barlos,Jeru Shalom A.', 'College of Engineering', 'BSECE', '2nd Year', 'GM', '12345', '', '', '2016-09-30 10:49:12', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_subjectlist`
--

CREATE TABLE IF NOT EXISTS `student_subjectlist` (
  `id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `subject_id` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subjectlist`
--

INSERT INTO `student_subjectlist` (`id`, `student_id`, `student_name`, `college`, `department`, `year`, `section`, `subject_id`) VALUES
(1, '10-0000', 'Cruz,Juana B.', 'College of Agriculture', 'BAgriTech', '1st', 'A', 'MAT01c'),
(2, '10-0001', 'Lozada,Boom Boom D.', 'College of Agriculture', 'College of Agriculture', '1st', 'A', 'MAT01c'),
(3, '10-0003', 'Chos,Chos A.', 'College of Agriculture', 'BAgriTech', '1st', 'A', 'MAT01c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer2`
--
ALTER TABLE `answer2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dean_evaluate`
--
ALTER TABLE `dean_evaluate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dean_evaluator`
--
ALTER TABLE `dean_evaluator`
  ADD PRIMARY KEY (`dean_id`);

--
-- Indexes for table `instructor_evaluate`
--
ALTER TABLE `instructor_evaluate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_evaluator`
--
ALTER TABLE `instructor_evaluator`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `instructor_subjectlist`
--
ALTER TABLE `instructor_subjectlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student_evaluate`
--
ALTER TABLE `student_evaluate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_evaluator`
--
ALTER TABLE `student_evaluator`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_subjectlist`
--
ALTER TABLE `student_subjectlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `answer2`
--
ALTER TABLE `answer2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dean_evaluate`
--
ALTER TABLE `dean_evaluate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `instructor_evaluate`
--
ALTER TABLE `instructor_evaluate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `instructor_subjectlist`
--
ALTER TABLE `instructor_subjectlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_evaluate`
--
ALTER TABLE `student_evaluate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `student_subjectlist`
--
ALTER TABLE `student_subjectlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
