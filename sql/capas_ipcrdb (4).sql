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
-- Database: `capas_ipcrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE IF NOT EXISTS `approval` (
  `approval_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `discussed` varchar(200) NOT NULL,
  `discussed_date` varchar(200) NOT NULL,
  `assesed` varchar(200) NOT NULL,
  `assesed_date` varchar(200) NOT NULL,
  `final` varchar(200) NOT NULL,
  `final_date` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`approval_id`, `name`, `discussed`, `discussed_date`, `assesed`, `assesed_date`, `final`, `final_date`) VALUES
(1, 'Misa,Nery B.', 'None', '2016-09-14', 'None', '2016-09-15', 'None', '2016-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE IF NOT EXISTS `functions` (
  `strategic_no` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `success_indicator` varchar(200) NOT NULL,
  `actual` varchar(200) NOT NULL,
  `Q` varchar(200) NOT NULL,
  `E` varchar(200) NOT NULL,
  `T` varchar(200) NOT NULL,
  `A` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`strategic_no`, `name`, `success_indicator`, `actual`, `Q`, `E`, `T`, `A`, `remarks`) VALUES
(1, 'Misa,Nery B.', 'Quiz', '45', '3', '4', '3', '3', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `reviewed_by` varchar(200) NOT NULL,
  `reviewed_date` varchar(200) NOT NULL,
  `approved_by` varchar(200) NOT NULL,
  `approved_date` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `name`, `reviewed_by`, `reviewed_date`, `approved_by`, `approved_date`) VALUES
(1, 'Misa,Nery B.', 'Engr. Efren Villaverde', '2016-09-16', 'Dr. Milo O. Placino', '2016-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE IF NOT EXISTS `statement` (
  `name` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `period1` varchar(200) NOT NULL,
  `period2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`name`, `unit`, `period1`, `period2`) VALUES
('Misa,Nery B.', 'CEn', '2016-09-14', '2016-09-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`approval_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `functions`
--
ALTER TABLE `functions`
  ADD KEY `name` (`name`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval`
--
ALTER TABLE `approval`
  ADD CONSTRAINT `approval_ibfk_1` FOREIGN KEY (`name`) REFERENCES `review` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `functions`
--
ALTER TABLE `functions`
  ADD CONSTRAINT `functions_ibfk_1` FOREIGN KEY (`name`) REFERENCES `review` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`name`) REFERENCES `statement` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
