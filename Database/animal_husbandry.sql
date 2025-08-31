-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 03:39 PM
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
-- Table structure for table `animal_husbandry`
--

CREATE TABLE `animal_husbandry` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animal_husbandry`
--

INSERT INTO `animal_husbandry` (`id`, `name`, `price`, `image`) VALUES
(0, 'Animal Mat\r\n\r\n', 2800, 'mat.png'),
(0, 'Milk Claw', 1900, 'milk claw.png'),
(0, 'Milk Tube', 699, 'milk tube.png'),
(0, 'Regulator', 509, 'regulator.png'),
(0, 'Teat Shell', 1766, 'teat shell.png'),
(0, 'Tapas Silage Culture', 1000, 'silage culture.png\r\n'),
(0, 'Transparent Teat Shell', 1059, 't teat shell.png'),
(0, 'Ecowealth Short Tube', 85, 'tube.png'),
(0, 'Milking Machine', 65520, 'dairy milking machine.png'),
(0, 'Vaccum Pump', 10599, 'vaccum pump.png'),
(0, 'Milking Long Liner', 1372, 'ecowealth.png'),
(0, 'Ecowealth Non Return Valve', 509, 'valve.png'),
(0, 'Ecowealth(EM) 01 Milking machine', 22500, 'milking machine.png'),
(0, 'agil', 1330, 'agil.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
