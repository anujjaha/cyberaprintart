-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2013 at 04:48 PM
-- Server version: 5.1.36-community-log
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE IF NOT EXISTS `job_details` (
  `j_id` int(11) NOT NULL COMMENT 'JOb Id',
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `cusname` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `jname` varchar(255) NOT NULL,
  `jone` varchar(255) NOT NULL,
  `qone` varchar(255) NOT NULL,
  `rone` varchar(255) NOT NULL,
  `jtwo` varchar(255) NOT NULL,
  `qtwo` varchar(255) NOT NULL,
  `rtwo` varchar(255) NOT NULL,
  `jthree` varchar(255) NOT NULL,
  `qthree` varchar(255) NOT NULL,
  `rthree` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `v_date` varchar(255) NOT NULL,
  `v_time` varchar(255) NOT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`j_id`, `type`, `date`, `cusname`, `mob`, `jname`, `jone`, `qone`, `rone`, `jtwo`, `qtwo`, `rtwo`, `jthree`, `qthree`, `rthree`, `total`, `advance`, `due`, `status`, `time`, `v_date`, `v_time`) VALUES
(1, 'new', '06-09-13', 'Anuj Jaha', '8000060541', 'Visiting Cards', 'printing cards', '500', '1500', 'biniding boook', '10', '1000', 'cutting paper', '10', '1000', '3500', '2500', '1000', 'Done', '2013-09-09 22:16:36', '', ''),
(2, 'new', '06-09-13', 'Test', '87878', 'Printing Brochures', 'Brochure Design', '10', '1000', 'Brochure Cutting', '1', '', '', '1', '', '3000', '1000', '2000', 'Working', '2013-09-06 17:39:12', '', ''),
(3, 'new', '06-09-13', 'xyz', '8000060541', 'New Job', 'Brochure Design', '10', '1000', 'biniding boook', '1', '3500', '', '', '', '4500', '1500', '500', 'Pending', '2013-09-09 21:21:14', '', ''),
(4, 'new', '06-09-13', 'abc', '9899989', 'New Job', 'Test One', '10', '1000', 'Test Two', '5', '', '', '5', '', '2500', '2000', '500', 'Pending', '2013-09-06 21:58:45', '', ''),
(5, 'new', '06-09-13', 'Final', '9989', 'Final Job', 'abc ', '10', '1000', '', '', '', '', '', '', '1000', '1000', '0', 'Pending', '2013-09-06 21:59:58', '', ''),
(6, 'new', '09-09-13', 'AAB', '7878787', 'Testing', 'One', '10', '100', 'Two', '20', '2000', '', '', '', '2100', '2000', '100', 'Working', '2013-09-09 21:51:12', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_doing`
--

CREATE TABLE IF NOT EXISTS `job_doing` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `j_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(22) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_doing`
--

INSERT INTO `job_doing` (`d_id`, `j_id`, `amount`, `status`, `date`, `time`) VALUES
(1, 6, '', 'Working', '09-09-13', '2013-09-09 22:04:28'),
(2, 2, '3000', 'Working', '09-09-13', '2013-09-09 22:05:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
