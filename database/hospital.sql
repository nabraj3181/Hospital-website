-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 06:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `S.No.` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `doctor` varchar(200) NOT NULL,
  `day` text NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`S.No.`, `name`, `phone`, `email`, `gender`, `doctor`, `day`, `time`) VALUES
(4, 'janak joshi', 98577654, 'fsa@45.bom', 'male', 'Dr.Abasesh Bhandari', 'sunday', '2:30-3:30'),
(11, 'janak joshi', 9848840530, 'janakjoshi6789@gmail.com', 'male', 'Dr.Nima Tamang', 'sunday', '3:30-4:30'),
(12, 'Nabraj Joshi', 9848840530, 'nabraj788@gmail.com', 'female', 'Dr.Niroj Nepal', 'monday', '1:30-2:30'),
(13, 'krishna shrestha', 9847635492, 'janakjoshi6789@gmail.com', 'male', 'Dr.Abasesh Bhandari', 'sunday', '3:30-4:30'),
(14, 'swostima shrestha', 9840403181, 'swha567@gmail.com', 'male', 'Dr.Nima Tamang', 'tuesday', '3:30-4:30'),
(15, 'manish bhatta', 9844453818, 'manish5363@gmail.com', 'male', 'Dr.Nirjala Shrestha', 'thursday', '2:30-3:30'),
(16, 'Sandeep Lamichhane', 9809406625, 'janakjoshi6789@gmail.com', 'female', 'Dr.Dhiraj Joshi', 'friday', '1:30-2:30'),
(17, 'janak raj joshi', 9809414839, 'joshijanak6789@gmail.com', 'male', 'Dr.Swostika Shrestha', 'tuesday', '4:00-4:30'),
(18, 'krishna shrestha', 9847536452, 'kkk@yahoo.com', 'female', 'Dr.Niroj Nepal', 'monday', '3:30-4:30'),
(19, 'Sandeep Lamichhane', 9846574536, 'janakjoshi6789@gmail.com', 'male', 'Dr.Niroj Nepal', 'sunday', '1:30-2:30'),
(20, 'pratikshya joshi', 9866847843, 'janakjoshi6789@gmail.com', 'female', 'Dr.Niroj Nepal', 'monday', '2:30-3:30'),
(21, 'humayoo', 9848535364, 'janakjoshi6789@gmail.com', 'male', 'Dr.Niroj Nepal', 'monday', '2:30-3:30'),
(22, 'Sandeep Lamichhane', 9866847843, 'janakjoshi6789@gmail.com', 'male', 'Dr.Niroj Nepal', 'monday', '1:30-2:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `S.No.` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S.No.`, `name`, `phone`, `email`, `message`) VALUES
(1, 'janak', 2147483647, 'janakjoshi6789@gmail.com', 'jsagshfd'),
(3, 'janak joshi', 9848840530, 'janakjoshi6789@gmail.com', 'what is hospital???'),
(4, 'krishna shrestha', 9808313748, 'krishna@gmail.com', 'dhdhd'),
(5, 'sjshd josnd', 9848847534, 'jdhdgdg@gmail.com', 'who are you???'),
(6, 'jenish shrestha', 9846456374, 'jenish@gmail.com', 'What is medicine??'),
(7, 'swostika shrestha', 9836453536, 'swostika@gmail.com', 'what id jjjdhdgdffd??'),
(8, 'Pratikshya Joshi', 9848840530, 'janakjoshi6789@gmail.com', 'thank you!'),
(9, 'manisha loirala', 9845365746, 'manish@gmail.com', 'what is website all about ?'),
(10, 'slaman', 99999999999, 'salmankhan@gmail.com', 'i am spiderman.'),
(11, 'krishna shrestha', 9848840530, 'janakjoshi6789@gmail.com', 'hdhgddfd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `S.No.` int(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`S.No.`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`S.No.`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`S.No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `S.No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `S.No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `S.No.` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
