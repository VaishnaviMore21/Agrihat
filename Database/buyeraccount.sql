-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 07:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farming`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyeraccount`
--

CREATE TABLE `buyeraccount` (
  `fname` varchar(16) NOT NULL,
  `email` varchar(17) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no` int(10) NOT NULL,
  `city` varchar(18) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyeraccount`
--

INSERT INTO `buyeraccount` (`fname`, `email`, `gender`, `no`, `city`, `password`) VALUES
('Jyoti More', 'parthvee@gmail.co', '', 2147483647, 'Nandurbar', ''),
('Jyoti More', 'parthvee@gmail.co', '', 2147483647, 'Nandurbar', ''),
('Sujeet Padavi', 'rona@gmail.com', '', 657809472, 'Chopda', ''),
('Shailesh Borase', 'shailesh1974663@g', '', 456789876, 'Kanashhi', ''),
('Vijay Khairnar', 'rc7@gmail.com', '', 83903576, 'Jalgaon', ''),
('Vivek kote', 'vivek3333@gmail.c', '', 657489202, 'Thane', ''),
('Hemraj Malhari C', 'hem1222@gmail.com', 'Male', 954552342, 'Dhule', 'hemya@3#'),
('Satish Sanjay Bo', 'satya@gmail.com', 'Male', 87665422, 'Baroda', 'satussuuu'),
('Ravsaheb Bhika J', 'ravvya@yahooo.com', 'Male', 969204898, 'Ahemdabad', 'guturevvvv');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
