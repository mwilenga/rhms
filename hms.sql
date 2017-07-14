-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 02:32 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `hms_houses`
--

CREATE TABLE `hms_houses` (
  `id` int(11) NOT NULL,
  `house_id` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_houses`
--

INSERT INTO `hms_houses` (`id`, `house_id`, `location`) VALUES
(1, 'KG-01', 'Kigoma'),
(2, 'ML-01', 'Mwananyamala'),
(3, 'TGT-03', 'Tegeta'),
(4, 'KILIMAHEWA-O4', 'Mlimani');

-- --------------------------------------------------------

--
-- Table structure for table `hms_rooms`
--

CREATE TABLE `hms_rooms` (
  `id` int(11) NOT NULL,
  `house` varchar(30) NOT NULL,
  `room_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hms_rooms`
--

INSERT INTO `hms_rooms` (`id`, `house`, `room_id`) VALUES
(1, 'KG-01', 'SIMBA'),
(2, 'KG-01', 'CHUI'),
(3, 'KG-01', 'SWALA'),
(4, 'KG-01', 'SUNGURA'),
(5, 'KG-01', 'CHATU'),
(6, 'ML-01', '01'),
(7, 'ML-01', '02');

-- --------------------------------------------------------

--
-- Table structure for table `sms_users`
--

CREATE TABLE `sms_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_users`
--

INSERT INTO `sms_users` (`id`, `fname`, `lname`, `username`, `password`, `gender`, `phone`, `email`, `role`, `status`) VALUES
(1, 'Adeline', 'Mhenga', 'ademhenga', 'admin', 'M', '0716810178', 'eddieadeline@gmail.com', 'House Manager', 'Yes'),
(3, 'Domina', 'Golden', 'domy', 'house', 'M', '0716776633', 'jlo@gmail.com', 'Manage', 'Yes'),
(4, 'Victoria', 'Jarome', 'vick', 'sales', 'F', '0652776633', 'dinna3@gmail.com', 'Sales', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `fname` int(11) NOT NULL,
  `lname` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `issue_date` int(11) NOT NULL,
  `end_contract` int(11) NOT NULL,
  `amount_due` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hms_houses`
--
ALTER TABLE `hms_houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_rooms`
--
ALTER TABLE `hms_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_users`
--
ALTER TABLE `sms_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hms_houses`
--
ALTER TABLE `hms_houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hms_rooms`
--
ALTER TABLE `hms_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
