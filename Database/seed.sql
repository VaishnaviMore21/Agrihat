-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 03:41 PM
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
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `seed`
--

CREATE TABLE `seed` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seed`
--

INSERT INTO `seed` (`id`, `name`, `price`, `image`) VALUES
(1, 'Moraleda Beans', 1111, 'beans.png'),
(2, 'Radhika Bhendi Seeds', 719, 'radhika_bhindi.png'),
(3, 'FITO Brinjal', 60, 'brinjal.png'),
(4, 'SAINT Cabbage', 267, 'cabbage.png'),
(5, 'Indira Hybrid Capsium Seeds', 1194, 'capsicum.png'),
(6, 'Syngenta Cauliflower Seeds', 621, 'cauliflowerseed.png'),
(7, 'NS 1101 Chili Seeds', 391, 'chili.png'),
(8, 'NS 404 Cucumber Seeds', 143, 'cucumber.png'),
(9, 'Green Magic Broccoli', 560, 'greenmagic.png'),
(10, 'Fito BitterGuard Seeds', 255, 'karal.png'),
(11, 'Prema 178 Onion Seeds', 850, 'onoin.png'),
(12, 'Arjuna Pumpkin Seeds', 1225, 'pumpkin.png'),
(13, 'Naga Ridge Gourd', 719, 'ridge_gourd.png'),
(14, 'SEMINIS Tomato Seeds', 1000, 'tomato_seed.png'),
(15, 'Kundan Hybrid Muskmelon seeds', 2877, 'muskmelon.png'),
(16, 'Sahoo Tomato Seeds', 1000, 'Sahoo.jpg'),
(17, 'bhindi', 2020, 'bhindi.png'),
(18, 'bhindi', 2020, 'bhindi.png'),
(19, 'bhindi', 2020, 'bhindi.png'),
(20, 'bhindi', 2020, 'bhindi.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seed`
--
ALTER TABLE `seed`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
