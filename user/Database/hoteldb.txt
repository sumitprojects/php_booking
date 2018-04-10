-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 10:35 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `bill_id` int(10) NOT NULL auto_increment,
  `reg_id` int(10) NOT NULL,
  `bill_date` date NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `card_no` bigint(50) NOT NULL,
  `expire_date` date NOT NULL,
  `paid_amt` bigint(50) NOT NULL,
  `refund` bigint(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`bill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `billing`
--


-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL auto_increment,
  `bill_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `viitor_id` int(10) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `no_of_guest` int(10) NOT NULL,
  `occupancy` varchar(20) NOT NULL,
  `guest_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(20) NOT NULL auto_increment,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritial_status` varchar(50) NOT NULL,
  `mobile_no` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` date NOT NULL,
  `join_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `first_name`, `last_name`, `address`, `city`, `state`, `country`, `dob`, `gender`, `maritial_status`, `mobile_no`, `email`, `uname`, `password`, `last_login`, `join_date`, `status`) VALUES
(1, 'Maitri ', 'Patel', 'Kankaria', 'Ahmedabad', 'Gujarat', 'India', '1997-05-15', 'Female', 'Unmarried', 9909710730, 'maitripatel1505@gmail.com', 'maitri@3012', 'admin', '2018-03-22', '2018-03-15', 'Enable'),
(2, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(3, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(4, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(5, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(6, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(7, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(8, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(9, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(10, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(11, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(12, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(13, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(14, '', '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `contact_no` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`, `contact_no`) VALUES
('', '', '', '', 0),
('', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(20) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hotels`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(20) NOT NULL auto_increment,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(20) NOT NULL auto_increment,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `maritial_status` varchar(30) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sec_ques` varchar(50) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registration`
--


-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(20) NOT NULL auto_increment,
  `room_type_id` int(20) NOT NULL,
  `room_no` text NOT NULL,
  `room_image` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY  (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_type_id`, `room_no`, `room_image`, `status`) VALUES
(1, 0, '', '', ''),
(2, 0, '', '', ''),
(3, 0, '', '', ''),
(4, 0, '', '', ''),
(5, 0, '', '', ''),
(6, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(10) NOT NULL,
  `hotel_id` int(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `capacity` int(10) NOT NULL,
  `advance` float(10,2) NOT NULL,
  `rent` float(10,2) NOT NULL,
  `return_amt` float(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `hotel_id`, `room_type`, `capacity`, `advance`, `rent`, `return_amt`, `status`) VALUES
(0, 0, '', 0, 0.00, 0.00, 0.00, ''),
(0, 0, '', 0, 0.00, 0.00, 0.00, '');
