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
-- Table structure for table `insecticide`
--

CREATE TABLE `insecticide` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insecticide`
--

INSERT INTO `insecticide` (`id`, `name`, `price`, `image`) VALUES
(1, 'Amruth ALMAX Liquid', 215, 'beans.png'),
(2, 'AZAAL Neem Oil', 400, 'radhika_bhindi.png'),
(3, 'Pioneer Aigro Bio METAZ', 690, 'BIOMETAZ.png'),
(4, 'Anand DR Bacto\'s Brave', 550, 'brave.png'),
(5, 'T.STANES Bio Catch', 1088, 'catch.png'),
(6, 'Econeem Plus', 2100, 'ECONEEM.jpg'),
(7, 'Margo ECOTIN', 1105, 'ecotin.png'),
(8, 'KAYBEE Thrips Raze', 304, 'kaybee.jpg'),
(9, 'TERPA Pillar', 400, 'pillar.png'),
(10, 'SONKUL Sun Bio Beviguard', 1770, 'sonkul.png'),
(11, 'White', 30, 'wektocon.png'),
(12, 'Neem-AZADIRACHTIN', 378, 'neem.png'),
(13, 'Katyayani Neem Oil', 265, 'neem_oil.png'),
(14, 'T.STANES Nimbecidine', 932, 'Nimbecidine.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
