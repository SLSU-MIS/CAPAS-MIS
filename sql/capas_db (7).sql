-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 02:38 PM
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
  `answer_id` int(11) NOT NULL,
  `ins_id` varchar(200) NOT NULL,
  `subj_code` varchar(200) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `college_id` varchar(200) NOT NULL,
  `course_id` varchar(200) NOT NULL,
  `course_description` varchar(200) NOT NULL,
  `section_id` varchar(200) NOT NULL,
  `section_description` varchar(200) NOT NULL,
  `year_level` varchar(200) NOT NULL,
  `sem_id` varchar(200) NOT NULL,
  `school_year` varchar(200) NOT NULL,
  `rating_period` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `assignment_ins` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `average`
--

CREATE TABLE IF NOT EXISTS `average` (
  `ave_id` int(11) NOT NULL,
  `ins_id` varchar(200) NOT NULL,
  `ins_name` varchar(200) NOT NULL,
  `average` int(20) NOT NULL,
  `rating` varchar(200) NOT NULL,
  `sem_id` varchar(200) NOT NULL,
  `school_year` varchar(200) NOT NULL,
  `rating_period` varchar(200) NOT NULL,
  `DONE` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `average`
--

INSERT INTO `average` (`ave_id`, `ins_id`, `ins_name`, `average`, `rating`, `sem_id`, `school_year`, `rating_period`, `DONE`) VALUES
(5, 'EA-1234', 'Misa,Nery B.', 20, 'Poor', 'sem_01', '2016-2017', 'August-December', '0'),
(6, 'EA-7777', 'Great,Chan A.', 0, 'Poor', 'sem_01', '2015-2016', 'July - November', '0');

-- --------------------------------------------------------

--
-- Table structure for table `average_student`
--

CREATE TABLE IF NOT EXISTS `average_student` (
  `ave_id` int(11) NOT NULL,
  `prof_id` varchar(200) NOT NULL,
  `prof_name` varchar(200) NOT NULL,
  `average` int(20) NOT NULL,
  `rating` varchar(200) NOT NULL,
  `sem_id` varchar(200) NOT NULL,
  `school_year` varchar(200) NOT NULL,
  `rating_period` varchar(200) NOT NULL,
  `DONE` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` varchar(200) NOT NULL,
  `college_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`) VALUES
('CEn1', 'College of Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(200) NOT NULL,
  `course_description` varchar(200) NOT NULL,
  `college_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_description`, `college_id`) VALUES
('CEn_01', 'BSCE', 'CEn'),
('CEn_02', 'BSCpE', 'CEn'),
('CEn_03', 'BSECE', 'CEn'),
('CEn_04', 'BSEE', 'CEn'),
('CEn_05', 'BSIE', 'CEn'),
('CEn_06', 'BSME', 'CEn');

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
  `activate` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_evaluator`
--

INSERT INTO `instructor_evaluator` (`ins_id`, `ins_name`, `ins_college`, `ins_dept`, `ins_pass`, `ins_sem`, `ins_ay`, `date_created`, `activate`) VALUES
('EA-1234', 'Misa,Nery B.', 'College of Engineering', 'bSECE', '12345', '', '', '2016-09-30 08:39:51', '1'),
('EA-7777', 'Great,Chan A.', 'College of Engineering', 'bSCE', '12345', '', '', '2016-09-30 09:22:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `professor_evaluate`
--

CREATE TABLE IF NOT EXISTS `professor_evaluate` (
  `prof_id` int(11) NOT NULL,
  `ins_id` varchar(200) NOT NULL,
  `ins_fullname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` varchar(200) NOT NULL,
  `section_description` varchar(200) NOT NULL,
  `course_id` varchar(200) NOT NULL,
  `college_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_description`, `course_id`, `college_id`) VALUES
('GA_01', 'GA', 'CEn_01', 'CEn'),
('GB_01', 'GB', '', ''),
('GC_01', 'GC', '', ''),
('GD_01', 'GD', '', ''),
('GE_01', 'GE', '', '');

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
('10-0000', 'Cruz,Juana B.', 'College of Engineering', 'BSCpE', '4th Year', 'GM', '12345', '', '', '2016-09-30 09:21:45', '0'),
('12-0000', 'Dela Cruz, Juan B.', 'College of Engineering', 'BSIE', '3rd Year', 'GM', '12345', '', '', '2016-09-30 08:38:49', '0'),
('13-0000', 'Barlos,Jeru Shalom A.', 'College of Engineering', 'BSECE', '2nd Year', 'GM', '12345', '', '', '2016-09-30 10:49:12', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_section`
--

CREATE TABLE IF NOT EXISTS `student_section` (
  `student_section_id` int(11) NOT NULL,
  `stud_id` varchar(200) NOT NULL,
  `section_id` varchar(200) NOT NULL,
  `section_description` varchar(200) NOT NULL,
  `sem_id` varchar(200) NOT NULL,
  `school_year` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_section`
--

INSERT INTO `student_section` (`student_section_id`, `stud_id`, `section_id`, `section_description`, `sem_id`, `school_year`) VALUES
(2, '12345', 'GA_01', 'GA', '', ''),
(3, '12-0000', 'GA_01', 'GA', '', ''),
(7, '10-0000', 'GA_01', 'GA', '', ''),
(8, '10-0000', 'GA_01', 'GB', '', ''),
(9, '10-0000', 'GA_01', 'GC', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stud_prof`
--

CREATE TABLE IF NOT EXISTS `stud_prof` (
  `id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `ins_id` varchar(200) NOT NULL,
  `prof_name` varchar(200) NOT NULL,
  `subj_code` varchar(200) NOT NULL,
  `section_id` varchar(200) NOT NULL,
  `sem_id` varchar(200) NOT NULL,
  `school_year` varchar(200) NOT NULL,
  `evaluated` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_prof`
--

INSERT INTO `stud_prof` (`id`, `student_id`, `ins_id`, `prof_name`, `subj_code`, `section_id`, `sem_id`, `school_year`, `evaluated`) VALUES
(1, '12-0000', 'EA-1234', 'Misa,Nery B.', 'ELE01', 'GA_01', 'sem_01', '2015-2016', '0'),
(3, '12-0000', 'EA-1234', 'Misa,Nery B.', 'PE01', 'GA_01', 'sem_01', '2015-2016', '0'),
(4, '10-0000', 'EA-7777', 'Great,Chan A.', 'FIL01', 'GA_01', 'sem_01', '2015-2016', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subj_code` varchar(200) NOT NULL,
  `subj_des` varchar(200) NOT NULL,
  `sem_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subj_code`, `subj_des`, `sem_id`) VALUES
('ELE01', 'ELectric Circuits', 'sem_01'),
('ENG00', 'English Communication', 'sem_01'),
('FIL01', 'Sining Sa Pakikipagtalastasan', 'sem_01'),
('HUM01', 'Humanities', 'sem_01'),
('PE01', 'Physical Fitness', 'sem_01');

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
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `average`
--
ALTER TABLE `average`
  ADD PRIMARY KEY (`ave_id`);

--
-- Indexes for table `average_student`
--
ALTER TABLE `average_student`
  ADD PRIMARY KEY (`ave_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `dean_evaluator`
--
ALTER TABLE `dean_evaluator`
  ADD PRIMARY KEY (`dean_id`);

--
-- Indexes for table `instructor_evaluator`
--
ALTER TABLE `instructor_evaluator`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `professor_evaluate`
--
ALTER TABLE `professor_evaluate`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `ins_id` (`ins_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student_evaluator`
--
ALTER TABLE `student_evaluator`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_section`
--
ALTER TABLE `student_section`
  ADD PRIMARY KEY (`student_section_id`);

--
-- Indexes for table `stud_prof`
--
ALTER TABLE `stud_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `ins_id` (`ins_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subj_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `average`
--
ALTER TABLE `average`
  MODIFY `ave_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `average_student`
--
ALTER TABLE `average_student`
  MODIFY `ave_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor_evaluate`
--
ALTER TABLE `professor_evaluate`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_section`
--
ALTER TABLE `student_section`
  MODIFY `student_section_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stud_prof`
--
ALTER TABLE `stud_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `professor_evaluate`
--
ALTER TABLE `professor_evaluate`
  ADD CONSTRAINT `professor_evaluate_ibfk_1` FOREIGN KEY (`ins_id`) REFERENCES `instructor_evaluator` (`ins_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
