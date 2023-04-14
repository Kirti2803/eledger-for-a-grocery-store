-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 05:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin', 'admin'),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `cos_id` int(10) NOT NULL,
  `cos_name` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `village` text NOT NULL,
  `p_status` text NOT NULL,
  `cos_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`cos_id`, `cos_name`, `mobile`, `village`, `p_status`, `cos_address`, `date`) VALUES
(30, 'nitesh', '07903100703', 'Sherpur', 'due', 'bangalore', '2019-10-18 08:08:31'),
(31, 'annie', '123', 'Khilchipur', 'due', 'bangalore', '2019-10-18 08:18:34'),
(32, 'a', '456', 'Khilchipur', 'due', '456', '2019-10-18 08:18:49'),
(33, 'a', 'a', 'Sherpur', 'due', 'a', '2019-10-19 13:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `entery`
--

CREATE TABLE `entery` (
  `entery_id` int(50) NOT NULL,
  `cos_id` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `work` text NOT NULL,
  `wr_desc` text NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entery`
--

INSERT INTO `entery` (`entery_id`, `cos_id`, `date`, `work`, `wr_desc`, `price`) VALUES
(33, 30, '2019-10-18 08:08:53', 'tea', '1233', 100),
(34, 30, '2019-10-18 08:09:02', 'tea', '1233', 100),
(35, 30, '2019-10-18 08:10:10', 'apple', '123', 125),
(36, 30, '2019-10-18 08:10:19', 'apple', '123', 125),
(37, 0, '2019-10-19 19:05:03', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_name` varchar(20) NOT NULL,
  `pro_price` varchar(20) NOT NULL,
  `pro_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_name`, `pro_price`, `pro_desc`) VALUES
('a', 'a', '1'),
('1', '1', '1'),
('11', '11', '11'),
('//', '/', '/'),
('p', 'p', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `DATE` varchar(20) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`DATE`, `remarks`) VALUES
('   ', 'NITESH'),
('   ', 'NK'),
('   ', '45'),
('', 'KJDS'),
('12/7/2019', 'm'),
('12/7/2019', 'total');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indexes for table `entery`
--
ALTER TABLE `entery`
  ADD PRIMARY KEY (`entery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `cos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `entery`
--
ALTER TABLE `entery`
  MODIFY `entery_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
