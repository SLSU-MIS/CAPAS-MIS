-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 02:40 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capas_tpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `designation_hours` varchar(200) NOT NULL,
  `committee` varchar(200) NOT NULL,
  `committee_hrs` varchar(200) NOT NULL,
  `research` varchar(200) NOT NULL,
  `research_hrs` varchar(200) NOT NULL,
  `extension` varchar(200) NOT NULL,
  `extension_hrs` varchar(200) NOT NULL,
  `consultation` varchar(200) NOT NULL,
  `consultation_hrs` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `name`, `designation`, `designation_hours`, `committee`, `committee_hrs`, `research`, `research_hrs`, `extension`, `extension_hrs`, `consultation`, `consultation_hrs`) VALUES
(1, 'Misa,Nery B.', '', '', '', '', '', '', '', '', '', ''),
(2, 'Great,Chan A.', 'Coach', '800', 'Coach ng Alipin', '200', '', '', '', '', '', ''),
(3, 'Great,Chan A.', 'Coach', '800', 'Coach ng Alipin', '200', '', '', '', '', '', ''),
(4, 'Great,Chan A.', 'ds', 'das', '', '', '', '', '', '', '', ''),
(5, 'Great,Chan A.', 'ds', 'das', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `basic_information`
--

CREATE TABLE IF NOT EXISTS `basic_information` (
  `name` varchar(200) NOT NULL,
  `rank` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `appointment` varchar(200) NOT NULL,
  `year_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_information`
--

INSERT INTO `basic_information` (`name`, `rank`, `address`, `appointment`, `year_service`) VALUES
('Great,Chan A.', 'Tambay', 'Lucban,Quezon', '2016-11-08', 100),
('Misa,Nery B.', 'COSI', 'Lucban,Quezon', '2016-09-13', 4);

-- --------------------------------------------------------

--
-- Table structure for table `educ_background`
--

CREATE TABLE IF NOT EXISTS `educ_background` (
  `educ_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `educ_deg` varchar(200) NOT NULL,
  `educ_year` varchar(200) NOT NULL,
  `educ_school` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educ_background`
--

INSERT INTO `educ_background` (`educ_id`, `name`, `educ_deg`, `educ_year`, `educ_school`) VALUES
(1, 'Great,Chan A.', 'dasda', 'dad', 'dasd'),
(2, 'Great,Chan A.', 'das', 'dasdas', 'dad'),
(3, 'Great,Chan A.', 'dadadasd', 'dasda', 'dasda');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `civil_status` varchar(200) NOT NULL,
  `birth` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `name`, `status`, `civil_status`, `birth`) VALUES
(1, 'Misa,Nery B.', 'Employed', 'Married', '2016-09-19'),
(2, 'Great,Chan A.', 'Tambay Pa rin', 'Married', '2016-11-08'),
(3, 'Great,Chan A.', 'Tambay Pa rin', 'Married', '2016-11-08'),
(4, 'Great,Chan A.', 'dsad', 'Married', '2016-10-31'),
(5, 'Great,Chan A.', 'dsad', 'Married', '2016-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE IF NOT EXISTS `school_info` (
  `school_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `sy` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`school_id`, `name`, `college`, `sy`, `location`, `sem`) VALUES
(1, 'Misa,Nery B.', 'Engineering', 'AY 2016-2017', 'MHDP', '1st Semester'),
(2, 'Great,Chan A.', 'College of Agriculture', 'AY 2020-2021', 'Lucban', '2nd Semester'),
(3, 'Great,Chan A.', 'College of Agriculture', 'AY 2020-2021', 'Lucban', '2nd Semester'),
(4, 'Great,Chan A.', 'College of Agriculture', 'das', 'das', '1st Semester'),
(5, 'Great,Chan A.', 'College of Agriculture', 'das', 'das', '1st Semester');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_load`
--

CREATE TABLE IF NOT EXISTS `teaching_load` (
  `teaching_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `hrs_week` varchar(200) NOT NULL,
  `units` int(11) NOT NULL,
  `class_size` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_load`
--

INSERT INTO `teaching_load` (`teaching_id`, `name`, `subject`, `time`, `day`, `room`, `course`, `hrs_week`, `units`, `class_size`) VALUES
(1, 'Misa,Nery B.', 'ELE17', '3:30', 'TTh', 'MDPP201', 'CpE', '4', 3, 25),
(2, 'Great,Chan A.', 'CPE0', '1-2', 'Wed', 'Lab1', 'CPE', '3', 2, 1),
(3, 'Great,Chan A.', 'CPE1', '1-3', 'Thurs', 'Lab2', 'EE', '2', 3, 42),
(4, 'Great,Chan A.', 'ELE01', '8-6', 'Mon', 'Lab3', 'ME', '2', 2, 32),
(5, 'Great,Chan A.', 'CPE0', '1-2', 'Wed', 'Lab1', 'CPE', '3', 2, 1),
(6, 'Great,Chan A.', 'CPE1', '1-3', 'Thurs', 'Lab2', 'EE', '2', 3, 42),
(7, 'Great,Chan A.', 'ELE01', '8-6', 'Mon', 'Lab3', 'ME', '2', 2, 32),
(8, 'Great,Chan A.', 'dsa', 'dsa', 'ds', 'das', 'das', 'a', 0, 0),
(9, 'Great,Chan A.', 'dsa', 'dsa', 'ds', 'das', 'das', 'a', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teaching_load2`
--

CREATE TABLE IF NOT EXISTS `teaching_load2` (
  `teaching_id2` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact_hours` int(11) NOT NULL,
  `preparations` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `excess_load` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_load2`
--

INSERT INTO `teaching_load2` (`teaching_id2`, `name`, `contact_hours`, `preparations`, `unit`, `excess_load`) VALUES
(1, 'Misa,Nery B.', 4, 4, 4, 4),
(2, 'Great,Chan A.', 100, 100, 1000, 100),
(3, 'Great,Chan A.', 100, 100, 1000, 100),
(4, 'Great,Chan A.', 0, 0, 0, 0),
(5, 'Great,Chan A.', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `basic_information`
--
ALTER TABLE `basic_information`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `educ_background`
--
ALTER TABLE `educ_background`
  ADD PRIMARY KEY (`educ_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`school_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `teaching_load`
--
ALTER TABLE `teaching_load`
  ADD PRIMARY KEY (`teaching_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `teaching_load2`
--
ALTER TABLE `teaching_load2`
  ADD PRIMARY KEY (`teaching_id2`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `educ_background`
--
ALTER TABLE `educ_background`
  MODIFY `educ_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `school_info`
--
ALTER TABLE `school_info`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teaching_load`
--
ALTER TABLE `teaching_load`
  MODIFY `teaching_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teaching_load2`
--
ALTER TABLE `teaching_load2`
  MODIFY `teaching_id2` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`name`) REFERENCES `basic_information` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `educ_background`
--
ALTER TABLE `educ_background`
  ADD CONSTRAINT `educ_background_ibfk_1` FOREIGN KEY (`name`) REFERENCES `basic_information` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`name`) REFERENCES `basic_information` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `school_info`
--
ALTER TABLE `school_info`
  ADD CONSTRAINT `school_info_ibfk_1` FOREIGN KEY (`name`) REFERENCES `basic_information` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teaching_load`
--
ALTER TABLE `teaching_load`
  ADD CONSTRAINT `teaching_load_ibfk_1` FOREIGN KEY (`name`) REFERENCES `basic_information` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teaching_load2`
--
ALTER TABLE `teaching_load2`
  ADD CONSTRAINT `teaching_load2_ibfk_1` FOREIGN KEY (`name`) REFERENCES `basic_information` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
