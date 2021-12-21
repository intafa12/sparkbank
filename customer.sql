-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 09:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grip`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_no` int(5) NOT NULL,
  `account_no` varchar(13) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `current_bal` bigint(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_no`, `account_no`, `name`, `email`, `gender`, `current_bal`, `address`) VALUES
(1, 'TSF1154102001', 'MARY YANGER', 'maryyanger@gmail.com', 'female', 78000, 'Guwahati,Assam'),
(2, 'TSF1154102002', 'JOHN DOLEY', 'doleyjohn@gmail.com', 'male', 84445, 'Dimapur,Assam'),
(3, 'TSF1154102003', 'RIYA GAREWAL', 'riyagarewal002@gmail.com', 'female', 67987, 'Nagaon,Assam'),
(4, 'TSF1154102004', 'ANAND MATHUR', 'anandmathur27@gmail.com', 'male', 78443, 'Jorhat,Assam'),
(5, 'TSF1154102005', 'NISHANT ROY', 'nishuroy@gmail.com', 'male', 60987, 'Titabar,Assam'),
(6, 'TSF1154102006', 'KUMAR SANU', 'sanukumar1991@gmail.com', 'male', 75097, 'Tinsukia,Assam'),
(7, 'TSF1154102008', 'MARIA D SOUZA', 'mariad3344@gmail.com', 'female', 43030, 'Dibrugarh,Assam'),
(8, 'TSF1154102011', 'ANKIT TIWARI', 'tiwari@gmail.com', 'male', 50333, 'Jorhat,Assam'),
(9, 'TSF1154102012', 'ATIF ASLAM', 'atifaslam@gmail.com', 'male', 83996, 'Guwahati,Assam'),
(10, 'TSF1154102013', 'MANJIT SINGH', 'manjit456@gmail.com', 'male', 70100, 'Jorhat,Assam'),
(11, 'TSF1154102014', 'PRITAM CHOUDHARY', 'pritamchoudhary@gmail.com', 'male', 58983, 'Dibrugarh,Assam'),
(12, 'TSF1154102022', 'NEHA SHARMA', 'nehuu@gmail.com', 'female', 80050, 'Tinsukia,Assam'),
(13, 'TSF1154102023', 'INDRANIL SAHA', 'indranil007@gmail.com', 'male', 30100, 'Jorhat,Assam'),
(14, 'TSF1154102024', 'ARIJIT SINGH', 'arijitsingh@gmail.com', 'male', 25000, 'Dimapur,Assam'),
(15, 'TSF1154102025', 'DIVYA KOUSHAL', 'dkoushal@gmail.com', 'female', 39020, 'Jorhat,Assam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_no`,`account_no`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
