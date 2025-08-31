-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 03:40 PM
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
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) NOT NULL,
  `name` varchar(70) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `price`, `image`) VALUES
(1, 'Balwan Motorpump', 2999, 'balwan_motorpump.jpg'),
(2, 'Mango Friut Picker', 570, 'fruit_picker.png'),
(3, 'Hand Weeder', 560, 'handweeder.jpg'),
(4, 'Kaveri Hosepipe', 2577, 'hosepipe.png'),
(5, 'Khurpa', 166, 'khurpa.png'),
(6, 'Power Wedder', 25450, 'power wedder.png'),
(7, 'Roll Cut Secateur\r\n', 315, 'rollcut.png'),
(8, 'Pruning Secateur', 375, 'secateur.png'),
(9, 'Hedge Shear', 626, 'shear.png'),
(10, 'Mulching Sheet\r\n', 2646, 'sheet.png'),
(11, 'MITVA Solar Light', 1800, 'solar_light.png'),
(12, 'Agrimate Sprayer', 375, 'sprayer.png'),
(13, 'Mipatex Tarpaulin Sheet', 1049, 'tadpatri.png'),
(14, 'TAPAS Pump Motor', 4299, 'tapas_motorpump.jpg'),
(15, 'Mipatex Rain Hosepipe', 1199, 'tape.png'),
(16, 'Multi Utilty Torch', 750, 'torch.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
