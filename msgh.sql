-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2022 at 09:51 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msgh`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_name` varchar(20) NOT NULL,
  `staff_phone` bigint(10) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `work_type` varchar(20) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_name`, `staff_phone`, `staff_id`, `work_type`) VALUES
('seema', 9123456780, 101, 'security');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_name` varchar(20) NOT NULL,
  `student_email` varchar(20) NOT NULL,
  `roll_number` int(10) NOT NULL,
  `student_phone` bigint(10) NOT NULL,
  `student_password` varchar(10) NOT NULL,
  `discipline` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `room_number` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `student_email`, `roll_number`, `student_phone`, `student_password`, `discipline`, `batch`, `room_number`) VALUES
('Ayushi', 'a@iiitdmj.ac.in', 50, 9898989898, '11111', 'CSE', 'BTech\'21', 'S305'),
('Esha', 'e@iiitdmj.ac.in', 52, 8989898989, '22222', 'CSE', 'BTech\'21', 'S305');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

DROP TABLE IF EXISTS `warden`;
CREATE TABLE IF NOT EXISTS `warden` (
  `warden_name` varchar(20) NOT NULL,
  `fid` int(8) NOT NULL,
  `warden_email` varchar(25) NOT NULL,
  `warden_phone` bigint(10) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`warden_name`, `fid`, `warden_email`, `warden_phone`) VALUES
('Manu Srivastava', 100, 'manu@iiitdmj.ac.in', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `warden_login`
--

DROP TABLE IF EXISTS `warden_login`;
CREATE TABLE IF NOT EXISTS `warden_login` (
  `warden_email` varchar(20) NOT NULL,
  `warden_password` varchar(10) NOT NULL,
  PRIMARY KEY (`warden_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden_login`
--

INSERT INTO `warden_login` (`warden_email`, `warden_password`) VALUES
('manu@iiitdmj.ac.in', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
