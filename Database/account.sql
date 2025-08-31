-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 06:59 PM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `fname` varchar(20) NOT NULL,
  `mail` varchar(10) NOT NULL,
  `number` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pin` int(10) NOT NULL,
  `bankaccount` int(20) DEFAULT NULL,
  `adhar` int(12) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`fname`, `mail`, `number`, `gender`, `city`, `pin`, `bankaccount`, `adhar`, `password`) VALUES
('Sujeet Padavi', 'rame@gmail', 888888888, '', 'Chopda', 13425655, NULL, NULL, NULL),
('Shailesh Borase', 'shailesh', 888888888, '', 'Kanashhi', 13425655, NULL, NULL, NULL),
('Vijay Khairnar', 'shailesh', 546647737, '', 'Jalgaon', 425426, NULL, NULL, NULL),
('Vivek kote', 'vivek', 888888888, '', 'Thane', 13425655, NULL, NULL, NULL),
('Vaishali Maali', 'vaishali@g', 2147483647, '', 'Nandurbar', 0, 0, 0, ''),
('Vaishali Maali', 'vaishali@g', 2147483647, '', 'Nandurbar', 0, 0, 0, ''),
('Rajendra Devhad', 'viju@gmail', 2147483647, '', 'jalgaon', 425426, 0, 0, ''),
('Rajendra Devhad', 'viju@gmail', 2147483647, '', 'jalgaon', 425426, 0, 0, ''),
('Ridhima Pandey', 'ridhi@gmai', 987862901, 'Female', 'Indore', 456719, 987656101, 87656, 'ridhi1234'),
('Narendra Dagadu Chit', 'nary123@gm', 890357067, 'Male', 'Boris', 424001, 98092567, NULL, NULL),
('Pankaj Dadaji Khairn', 'pankuu!@#@', 990423281, 'Male', 'Dondaicha', 424001, 98765123, 876561111, 'panku8888899'),
('Nandkumar Sanjay Mor', 'nandimore1', 988065456, 'Male', 'Sonigir', 425426, 11054682, 14122008, '008888'),
('Imran Isukh Pathan', 'imarnhashm', 76564443, 'Male', 'Jatoda', 456719, 97675643, 23254753, '899711immmu'),
('Yuvraj Ashok More', 'yuvi@gmail', 87516341, 'Male', 'Betawad', 424001, 983863, 871536, 'yuvvv');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
