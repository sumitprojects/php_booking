-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2018 at 06:29 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `bill_id` int(10) NOT NULL,
  `reg_id` int(20) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `bill_date` date NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `card_no` bigint(50) NOT NULL,
  `expire_date` date NOT NULL,
  `paid_amt` bigint(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(10) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `reg_id` int(20) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `adult` bigint(20) NOT NULL,
  `children` bigint(20) NOT NULL,
  `total_amount` varchar(20) NOT NULL,
  `bill_id` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `room_no`, `reg_id`, `guest_name`, `tdate`, `check_in`, `check_out`, `type`, `adult`, `children`, `total_amount`, `bill_id`) VALUES
(15, '101L', 1, 'sdsad', '2018-04-12 18:58:45', '2018-04-13', '2018-04-28', 'Deluxe Guest Room', 1, 1, '1500', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(20) NOT NULL,
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
  `designation` varchar(50) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `branch_city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `first_name`, `last_name`, `address`, `city`, `state`, `country`, `dob`, `gender`, `maritial_status`, `mobile_no`, `designation`, `salary`, `branch_city`, `email`, `u_name`, `password`, `join_date`, `status`) VALUES
(1, 'Maitri', 'Patel', 'Kankaria', 'Parkland', 'Washington', 'US', '1997-05-15', 'Female', 'Un Married', 9909878909, 'Worker', '700000', 'Los Angeles', 'maitri@gmail.com', 'maitri', 'maitri', '2018-04-22', 'Enable'),
(2, 'Dimple', 'Patel', 'Kankaria', 'San Francisco', 'California', 'US', '1978-11-22', 'Female', 'Married', 9989098789, 'Manager', '50000', 'Los Anegeles', 'dimple@gmail.com', 'dimple', 'dimple', '2018-03-30', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
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
('Maitri Patel', 'maitri@gmail.com', 'Rooms', 'Service was not good.', 9909098789),
('Ashish Mishra', 'ashish@gmail.com', 'Room Service', 'Excellent', 9909898789);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` bigint(20) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `hotel_image` varchar(100) NOT NULL,
  `hotel_status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `address`, `city`, `state`, `country`, `hotel_image`, `hotel_status`) VALUES
(1, 'Rosewood International', '11, Streek Park', 'San Francisco', 'California', 'United States', 'C.jpg', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE IF NOT EXISTS `issue` (
  `i_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `problem` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`i_id`, `subject`, `problem`) VALUES
(1, 'Balcony', 'Balcony'),
(2, 'Maitri', 'Maitri'),
(3, 'Facility', 'Minor Changes In Parking');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `uname`, `password`) VALUES
(1, 'dimple', 'dimple');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(20) NOT NULL,
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
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `fname`, `lname`, `address`, `city`, `state`, `country`, `dob`, `gender`, `maritial_status`, `mobile_no`, `email`, `uname`, `password`, `sec_ques`, `answer`, `status`) VALUES
(1, 'Maitri', 'Patel', 'Kankaria', 'Ahmedabad', 'Gujarat', 'India', '1997-05-15', 'Female', 'Unmarried', 2147483647, 'maitri@gmail.com', 'maitri', 'maitri', 'maitri', 'maitri', ''),
(2, 'Suhani ', 'Patel', 'Gajera', 'Surat', 'Gujarat', 'India', '2007-02-19', 'Female', 'Unmarried', 2147483647, 'suhani@gmail.com', 'suhani', 'suhani', 'suhani', 'suhani', ''),
(3, 'Ashish ', 'Mishra', '287,Laxmi nagar Chalthan', 'Surat', 'Gujarat', 'Indi', '1995-11-04', 'Male', 'Unmarried', 2147483647, 'rahulmashish@gmail.com', 'Ashish', 'Ashish', 'Ashish', 'Ashish', ''),
(4, 'Dimple', 'Patel', 'Kankaria', 'Baroda', 'Gujarat', 'India', '2017-03-04', 'Female', 'Unmarried', 2147483647, 'dimple@gmail.com', 'dimple', 'dimple', 'dimple', 'dimple', ''),
(10, 'Rohit', 'Patel', 'Kankaria', 'Mumbai', 'Maharashtra', 'India', '1972-12-11', 'Male', 'Unmarried', 2147483647, 'rohit@gmail.com', 'rohit', 'rohit', 'Favourite Color', 'Blue', ''),
(11, 'Dipesh', 'Yadav', 'Adajan', 'Surat', 'Gujarat', 'India', '2018-04-09', 'Male', 'Unmarried', 2147483647, 'dipesh@gmail.com', 'dipesh', 'dipesh', 'abc', 'xyz', ''),
(12, 'vipul', 'patel', '848/b shiv park', 'surat', 'gujarat', 'india', '1999-09-12', 'male', 'no', 989777827, 'vipul@gmail.com', 'vipul', 'vipul123', 'hi', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(20) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `booking_status` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL,
  `hotel_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_no`, `image`, `room_type`, `capacity`, `rent`, `facility`, `booking_status`, `status`, `hotel_id`) VALUES
(1, '101L', 'E.jpg', 'Deluxe Guest Room', '3', '$100', 'Loundry,Wi-Fi,Food,Room Service', 1, 'Enable', 1),
(2, '102L', 'E.jpg', 'Deluxe Guest Room', '3', '$103', 'Loundry,Wi-Fi,Food,Room Service', 0, 'Enable', 1),
(3, '103L', 'E.jpg', 'Deluxe Guest Room', '4', '$107', 'Loundry,Wi-Fi,Food,Room Service', 0, 'Enable', 1),
(4, '104L', 'E.jpg', 'Deluxe Guest Room', '5', '$109', 'Loundry,Wi-Fi,Food,Room Service', 0, 'Enable', 1),
(5, '105L', 'E.jpg', 'Deluxe Guest Room', '6', '$110', 'Loundry,Wi-Fi,Food,Room Service', 0, 'Enable', 1),
(6, '201L', 'H.jpg', 'Superior Guest Room', '2', '$104', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer', 0, 'Enable', 1),
(7, '202L', 'H.jpg', 'Superior Guest Room', '3', '$105', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer', 0, 'Enable', 1),
(8, '203L', 'H.jpg', 'Superior Guest Room', '4', '$106', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer', 0, 'Enable', 1),
(9, '204L', 'H.jpg', 'Superior Guest Room', '5', '$110', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer', 0, 'Enable', 1),
(10, '205L', 'H.jpg', 'Superior Guest Room', '6', '$112', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer', 0, 'Enable', 1),
(11, '301L', 'B.jpg', 'Club Level Guest Room', '2', '$113', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer,Iron & ironing board,Aircondition', 0, 'Enable', 1),
(12, '302L', 'B.jpg', 'Club Level Guest Room', '3', '$120', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer,Iron & ironing board,Aircondition', 0, 'Enable', 1),
(13, '303L', 'B.jpg', 'Club Level Guest Room', '4', '$120', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer,Iron & ironing board,Aircondition', 0, 'Enable', 1),
(14, '304L', 'B.jpg', 'Club Level Guest Room', '5', '$120', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer,Iron & ironing board,Aircondition', 0, 'Enable', 1),
(15, '305L', 'B.jpg', 'Club Level Guest Room', '6', '$140', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer,Iron & ironing board,Aircondition', 0, 'Enable', 1),
(16, '401L', 'F.png', 'Single Guest Room', '2', '$90', 'Loundry,Wi-Fi,Food,Room Service,Hair dryer,Iron & ironing board,Aircondition', 0, 'Enable', 1),
(17, '402L', 'F.png', 'Single Guest Room', '3', '$100', 'Loundry,Wi-Fi,Food,Room Service', 0, 'Enable', 1),
(18, '403L', 'F.png', 'Single Guest Room', '4', '$100', 'Loundry,Wi-Fi,Food,Room Service', 0, 'Enable', 1),
(19, '404L', 'F.png', 'Junior Guest Room', '2', '$95', 'Food,Room Service', 0, 'Enable', 1),
(20, '405L', 'F.png', 'Deluxe Guest Room', '3', '$98', 'Food,Room Service', 0, 'Enable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'maitri@gmail.com'),
(2, 'maitri@gmail.com'),
(3, 'maitri@gmail.com'),
(4, 'maitri@gmail.com'),
(5, 'maitri@gmail.com'),
(6, 'maitri@gmail.com'),
(7, 'maitri@gmail.com'),
(8, 'maitri@gmail.com'),
(9, 'maitri@gmail.com'),
(10, 'maitri@gmail.com'),
(11, 'maitri@gmail.com'),
(12, 'maitri@gmail.com'),
(13, 'maitri@gmail.com'),
(14, 'maitri@gmail.com'),
(15, 'maitri@gmail.com'),
(16, 'dimple@gmail.com'),
(17, 'dimple@gmail.com'),
(18, 'rohit@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `bill_id` (`bill_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `fk_reg_id` FOREIGN KEY (`reg_id`) REFERENCES `registration` (`reg_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_bill` FOREIGN KEY (`bill_id`) REFERENCES `billing` (`bill_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reg` FOREIGN KEY (`reg_id`) REFERENCES `registration` (`reg_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `hotel_id_fk` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
