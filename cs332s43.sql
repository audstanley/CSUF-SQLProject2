-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2018 at 11:30 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs332s43`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_number` int(11) NOT NULL,
  `c_title` text NOT NULL,
  `textbook` text NOT NULL,
  `units` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_number`, `c_title`, `textbook`, `units`) VALUES
(123, 'Intro to programming', 'Intro to programming 123', 3),
(335, 'Databases', 'The Database Almanac', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_number` int(11) NOT NULL,
  `d_name` text NOT NULL,
  `d_phone` bigint(11) UNSIGNED NOT NULL,
  `office_location` text NOT NULL,
  `chairSsn` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_number`, `d_name`, `d_phone`, `office_location`, `chairSsn`) VALUES
(0, 'CPSC', 6579550000, 'Computer Science Building', 556760001);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `e_sId` bigint(11) NOT NULL,
  `e_course` int(11) NOT NULL,
  `e_section` int(11) NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`e_sId`, `e_course`, `e_section`, `grade`) VALUES
(1234, 335, 2, 'A'),
(5632, 335, 1, 'B-'),
(7467, 335, 2, 'C-'),
(9634, 335, 2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `p_ssn` bigint(11) UNSIGNED NOT NULL,
  `p_name` text NOT NULL,
  `address` text NOT NULL,
  `p_phone` bigint(20) UNSIGNED NOT NULL,
  `sex` text NOT NULL,
  `title` text NOT NULL,
  `salary` int(11) UNSIGNED NOT NULL,
  `college_degrees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`p_ssn`, `p_name`, `address`, `p_phone`, `sex`, `title`, `salary`, `college_degrees`) VALUES
(556760001, 'Wang', '8726 Iris Ave', 6572691070, 'M', 'Dr.', 100000, 'Computer Science,\r\nMathematics');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `s_number` int(11) NOT NULL,
  `c_num` int(11) NOT NULL,
  `classroom` text NOT NULL,
  `meeting_days` text NOT NULL,
  `beginning_time` text NOT NULL,
  `end_time` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `professor` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`s_number`, `c_num`, `classroom`, `meeting_days`, `beginning_time`, `end_time`, `capacity`, `professor`) VALUES
(1, 123, 'ECS202', 'M W F', '6:00am', '7:30am', 30, 556760001),
(2, 335, 'ECS203', 'T Th', '10:30am', '12:00pm', 30, 556760001);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` int(11) UNSIGNED NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(11) UNSIGNED NOT NULL,
  `s_phone` bigint(16) NOT NULL,
  `major` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `fname`, `lname`, `street`, `city`, `state`, `zip`, `s_phone`, `major`) VALUES
(1234, 'Richard', 'Stanley', '123 Stanley St', 'Lake Forest', 'CA', 92630, 9499030246, 0),
(5632, 'Pam', 'Beezly', '37103 Terry Lane', 'Fullerton', 'CA', 93870, 6058027820, 0),
(7467, 'Bob', 'Roberts', '827 Newport Coast', 'Newport Beach', 'CA', 92625, 9492799738, 0),
(9634, 'Jim', 'Halpert', '3964 Scranton st.', 'Irvine', 'CA', 92602, 9497028738, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_number`),
  ADD UNIQUE KEY `c_number` (`c_number`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_number`),
  ADD UNIQUE KEY `number` (`d_number`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`e_sId`,`e_course`,`e_section`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`p_ssn`),
  ADD UNIQUE KEY `ssn` (`p_ssn`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`s_number`,`c_num`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`),
  ADD UNIQUE KEY `studentId` (`studentId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
