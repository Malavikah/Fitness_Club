-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 10:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Lid` int(11) NOT NULL,
  `uname` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `utype` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Lid`, `uname`, `password`, `utype`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', 'admin', 'admin'),
(3, 'a', 'a', 'user'),
(4, 'DDD@gmail.com', '12', 'user'),
(5, 'DDD@gmail.com', '55', 'user'),
(6, 'DDD@gmail.com', 'gg', 'user'),
(7, 'DDD@gmail.com', 'vv', 'user'),
(8, 'DDD@gmail.com', '90', 'user'),
(9, 'aa@a.com', '11', 'user'),
(10, 'swathi@gmail.com', '1234', 'user'),
(11, 'p@gmail.com', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pi` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `charge` int(5) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pi`, `name`, `charge`, `duration`, `details`) VALUES
(1, 'cross fit', 3000, '3 month', 'strength and conditioning workout'),
(2, 'weight loss', 2000, '2 month', ' loss the weight');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `expdate` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prid`, `type`, `name`, `price`, `image`, `descr`, `expdate`, `qty`) VALUES
(4, 'Type1', 'Impact way protien', 2000, 'uploads/20220215095901.jpg', 'Highest-quality British-manufactured product', '2-08-2023', 10),
(5, 'Type1', 'Healthkart pill', 540, 'uploads/20220215101033.jpg', 'multivitamin', '6-8-2022', 9),
(9, 'Type1', 'B green protien', 4530, 'uploads/20220215102751.png', 'Helps in Muscle Growth,Strength', '4-5-2022', 9);

-- --------------------------------------------------------

--
-- Table structure for table `prod_purchase`
--

CREATE TABLE `prod_purchase` (
  `puid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `prid` int(11) NOT NULL,
  `date` date NOT NULL,
  `screen` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_purchase`
--

INSERT INTO `prod_purchase` (`puid`, `uid`, `prid`, `date`, `screen`, `qty`) VALUES
(1, 9, 2, '2022-02-08', 'uploads/20220208104020.png', 0),
(17, 16, 5, '2022-02-15', 'uploads/20220215103213.jpg', 1),
(18, 17, 9, '2022-02-15', 'uploads/20220215103520.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `tid` int(11) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `exp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`tid`, `tname`, `email`, `phone`, `dob`, `gender`, `exp`) VALUES
(1, 'aloke fff', 'aaa@yahoo.com', '9747585232', '2022-02-02', 'Male', '1 year'),
(2, 'Arun', 'arun@gmail.com', '9495286827', '1995-02-12', 'Male', '2 year');

-- --------------------------------------------------------

--
-- Table structure for table `trainigplan`
--

CREATE TABLE `trainigplan` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `ptime` varchar(15) NOT NULL,
  `food` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainigplan`
--

INSERT INTO `trainigplan` (`pid`, `pname`, `plan`, `ptime`, `food`) VALUES
(1, 'cross fit', 'pushups,lunges', '1:00 am', 'milk,dried fruit,eggs'),
(2, 'weight loss', 'squats,running', '9:00 am', 'milk,brazil nuts,protine powder');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `ui` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `height` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `pi` int(5) NOT NULL,
  `Lid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`ui`, `name`, `email`, `phone`, `address`, `dob`, `height`, `weight`, `pi`, `Lid`) VALUES
(14, 'test', 'DDD@gmail.com', '666', 'fghh', '2022-01-26', '90', '90', 2, 8),
(15, 'aaa', 'aa@a.com', '3431111111', 'aaa', '2022-01-30', '23', '23', 1, 9),
(16, 'admin', 'swathi@gmail.com', '9207213740', 'swathivilla', '1999-12-31', '124', '24', 1, 10),
(17, 'prasoon', 'p@gmail.com', '9207213740', 'vayanad', '1999-09-08', '159', '75', 2, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pi`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `prod_purchase`
--
ALTER TABLE `prod_purchase`
  ADD PRIMARY KEY (`puid`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `trainigplan`
--
ALTER TABLE `trainigplan`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`ui`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prod_purchase`
--
ALTER TABLE `prod_purchase`
  MODIFY `puid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainigplan`
--
ALTER TABLE `trainigplan`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `ui` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
