-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 12:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safai`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `images` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `address`, `description`, `images`, `user_id`, `status`) VALUES
(1, '123 indore', 'this is my complain', 'upendra.png', 2, 'pending'),
(2, '123 indore', 'this is my complain today', 'upendra.png', 2, 'pending'),
(3, '123 indore', 'this is my complain', 'upendra.png', 1, 'pending'),
(4, '123 indore', 'dsfsa', 'roshan.png', 1, 'pending'),
(5, 'dsfas', 'sdafdsa', 'roshan.png', 1, 'pending'),
(6, 'upendra', 'roshan', 'upendra.png', 1, 'pending'),
(7, 'anuj indore', ' anuj indore', 'upendra.png', 2, 'processing'),
(8, 'bhawarkua', 'gggg', 'Desert.jpg', 3, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` varchar(12) NOT NULL,
  `comm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `pno`, `comm`) VALUES
('sanju', 'sanju@gmail.com', '2147483647', ' good'),
('aman', 'aman@gmail.com', '2147483647', ' good'),
('shu', 'shu@gmail.com', '2147483647', ' good'),
('sanju', 'aman@gmail.com', '9229345678', ' good'),
('lucky', 'csdfsfsfsc@gg.com', '5757575757', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `pledge`
--

CREATE TABLE `pledge` (
  `id` int(11) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pledge` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledge`
--

INSERT INTO `pledge` (`id`, `emailid`, `name`, `pledge`) VALUES
(1, 'upendra@gmail.com', 'upendra', 'individual'),
(2, 'upendra@gmail.com', 'upendra', 'individual'),
(3, 'upendra@gmail.com', 'upendra', 'individual'),
(4, 'anuj', 'abc', 'mass'),
(5, 'abhishek', 'abdj', 'mass'),
(6, 'rinku', 'rinku', 'individual');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dates` int(11) NOT NULL,
  `months` varchar(50) NOT NULL,
  `years` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `dates`, `months`, `years`, `gender`, `email`, `password`, `contactno`, `role`) VALUES
(1, 'admin', 'admin', 12, 'November', 1963, 'male', 'admin@gmail.com', 'admin', '1234567894', 'admin'),
(2, 'anuj', 'jain', 2, 'February', 1951, 'male', 'anuj@gmail.com', '123456', '5487646596', 'user'),
(3, 'aman', 'singh', 17, 'September', 1967, 'male', 'aman@gmail.com', '123', '9229345678', 'user'),
(4, 'sanju', 'singh', 4, 'March', 1952, 'male', 'aman@gmail.com', '123', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pledge`
--
ALTER TABLE `pledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pledge`
--
ALTER TABLE `pledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
