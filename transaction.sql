-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 03:08 PM
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
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_acc` varchar(50) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_acc` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sender_name`, `sender_acc`, `receiver_name`, `receiver_acc`, `amount`, `date`, `day`) VALUES
(1, 'John Barrera', 'ACC789645', 'Kenny Beasley', 'ACC348910', 500, '19/11/21 12:28pm', 'Friday'),
(2, 'Kenny Beasley', 'ACC348910', 'Sophia Vega', 'ACC008065', 500, '19/11/21 12:42pm', 'Friday'),
(3, 'Kenny Beasley', 'ACC348910', 'Josh Hayden', 'ACC667478', 1000, '19/11/21 12:59pm', 'Friday'),
(4, 'Rogelio Zamora', 'ACC782315', 'John Barrera', 'ACC789645', 976, '19/11/21 01:00pm', 'Friday'),
(5, 'John Barrera', 'ACC789645', 'Alessandro Curtis', 'ACC453216', 52, '19/11/21 01:02pm', 'Friday'),
(6, 'Ray Flynn', 'ACC231908', 'John Barrera', 'ACC789645', 678, '19/11/21 01:02pm', 'Friday'),
(7, 'Erika Hinton', 'ACC112344', 'Maximillian Snyder', 'ACC444478', 1004, '19/11/21 01:29pm', 'Friday'),
(8, 'Josh Hayden', 'ACC667478', 'John Barrera', 'ACC789645', 563, '20/11/21 05:52am', 'Saturday'),
(9, 'Maximillian Snyder', 'ACC444478', 'John Barrera', 'ACC789645', 682, '20/11/21 11:43am', 'Saturday'),
(10, 'Josh Hayden', 'ACC667478', 'Erika Hinton', 'ACC112344', 500, '20/11/21 11:48am', 'Saturday'),
(11, 'Rogelio Zamora', 'ACC782315', 'Maximillian Snyder', 'ACC444478', 924, '20/11/21 11:51am', 'Saturday'),
(12, 'John Barrera', 'ACC789645', 'Draven Greene', 'ACC564290', 323, '21/11/21 12:39pm', 'Sunday'),
(13, 'Alessandro Curtis', 'ACC453216', 'John Barrera', 'ACC789645', 5000, '21/11/21 12:51pm', 'Sunday'),
(14, 'Alessandro Curtis', 'ACC453216', 'Josh Hayden', 'ACC667478', 500, '21/11/21 06:44pm', 'Sunday'),
(15, 'Ray Flynn', 'ACC231908', 'Declan Hays', 'ACC096723', 5000, '21/11/21 06:54pm', 'Sunday'),
(16, 'Alessandro Curtis', 'ACC453216', 'Draven Greene', 'ACC564290', 200, '21/11/21 07:20pm', 'Sunday'),
(17, 'Kenny Beasley', 'ACC348910', 'Draven Greene', 'ACC564290', 5000, '21/11/21 07:39pm', 'Sunday'),
(18, 'Alessandro Curtis', 'ACC453216', 'Josh Hayden', 'ACC667478', 395, '21/11/21 07:45pm', 'Sunday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
