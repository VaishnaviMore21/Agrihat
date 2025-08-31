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
-- Table structure for table `herbicides`
--

CREATE TABLE `herbicides` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `herbicides`
--

INSERT INTO `herbicides` (`id`, `name`, `price`, `image`) VALUES
(1, 'Agil Herbicide', 1155, 'agil.png'),
(2, 'Council Active Herbicide', 621, 'council.png'),
(3, 'Excel Mera 71 Herbicide', 299, 'excel.jpg'),
(4, 'ferio herbicide', 716, 'ferio.png'),
(5, 'foost herbicide', 140, 'foot.png'),
(6, 'Kabuto Herbicide', 430, 'kabuto.png'),
(7, 'Nominee Gold', 506, 'nominegold.png'),
(8, 'Roundup herbicide', 186, 'Roundup.jpg'),
(9, 'Sathi herbicide', 230, 'sathi.png'),
(10, 'Sensor Herbicide', 335, 'sencor.jpg'),
(11, 'Sunrice Herbicide', 395, 'sunrice.png'),
(12, 'Sempra Herbicide ', 224, 'sempra.jpg'),
(13, 'Targa Super ', 184, 'targa.png'),
(14, 'Tata Metri Herbicide', 203, 'tata.png'),
(0, 'almax', 2030, 'almax.png'),
(0, 'almax', 2030, 'almax.png'),
(0, 'bhindi', 200, 'bhindi.png'),
(0, 'agil', 320, 'agil.png'),
(0, 'almax', 430, 'almax.png'),
(0, 'azaal', 130, 'azaal.png'),
(0, 'brave', 410, 'brave.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
