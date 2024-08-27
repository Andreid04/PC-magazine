-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 01:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `product`) VALUES
(7, 'test', 9),
(9, 'test', 7),
(10, 'test', 3),
(14, 'andrei', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cpus`
--

CREATE TABLE `cpus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `cores` int(11) DEFAULT NULL,
  `turbo` float DEFAULT NULL,
  `generation` int(11) DEFAULT NULL,
  `brand` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cpus`
--

INSERT INTO `cpus` (`id`, `name`, `details`, `price`, `cores`, `turbo`, `generation`, `brand`) VALUES
(1, 'Core i9-13900K', '16 cores (8 cores + 8 eCores), up to 5.2 GHz', 579, 16, 5.2, 13, 'Intel'),
(2, 'Core i7-13700K', '16 cores (8 cores + 8 eCores), up to 5.0 GHz', 399, 16, 5, 13, 'Intel'),
(3, 'Core i5-13500', '12 cores (6 cores + 6 eCores), up to 4.6 GHz', 249, 12, 4.6, 13, 'Intel'),
(4, 'Core i3-13300', '8 cores (4 cores + 4 eCores), up to 4.2 GHz', 159, 8, 4.2, 13, 'Intel'),
(5, 'Core i9-13900KF', '16 cores (8 cores + 8 eCores), up to 5.2 GHz', 559, 16, 5.2, 13, 'Intel'),
(6, 'Core i7-13700KF', '16 cores (8 cores + 8 eCores), up to 5.0 GHz', 379, 16, 5, 13, 'Intel'),
(7, 'Core i5-13500F', '12 cores (6 cores + 6 eCores), up to 4.6 GHz', 229, 12, 4.6, 13, 'Intel'),
(8, 'Core i3-13300F', '8 cores (4 cores + 4 eCores), up to 4.2 GHz', 139, 8, 4.2, 13, 'Intel'),
(9, 'Core i9-14900K', '16 cores (8 cores + 8 eCores), up to 5.5 GHz', 629, 16, 5.5, 14, 'Intel'),
(10, 'Core i7-14700K', '16 cores (8 cores + 8 eCores), up to 5.3 GHz', 449, 16, 5.3, 14, 'Intel'),
(11, 'Core i5-14500', '12 cores (6 cores + 6 eCores), up to 4.8 GHz', 279, 12, 4.8, 14, 'Intel'),
(12, 'Core i3-14300', '8 cores (4 cores + 4 eCores), up to 4.4 GHz', 179, 8, 4.4, 14, 'Intel'),
(13, 'Core i9-14900KF', '16 cores (8 cores + 8 eCores), up to 5.5 GHz', 599, 16, 5.5, 14, 'Intel'),
(14, 'Core i7-14700KF', '16 cores (8 cores + 8 eCores), up to 5.3 GHz', 419, 16, 5.3, 14, 'Intel'),
(15, 'Core i5-14500F', '12 cores (6 cores + 6 eCores), up to 4.8 GHz', 249, 12, 4.8, 14, 'Intel'),
(16, 'Core i3-14300F', '8 cores (4 cores + 4 eCores), up to 4.4 GHz', 159, 8, 4.4, 14, 'Intel'),
(17, 'Ryzen 9 5950X', '16 cores, up to 4.9 GHz', 799, 16, 4.9, 5, 'AMD'),
(18, 'Ryzen 9 5900X', '12 cores, up to 4.8 GHz', 549, 12, 4.8, 5, 'AMD'),
(19, 'Ryzen 7 5800X', '8 cores, up to 4.7 GHz', 449, 8, 4.7, 5, 'AMD'),
(20, 'Ryzen 5 5600X', '6 cores, up to 4.6 GHz', 299, 6, 4.6, 5, 'AMD'),
(21, 'Ryzen 9 7950X', '24 cores, up to 5.0 GHz', 899, 24, 5, 7, 'AMD'),
(22, 'Ryzen 9 7900X', '16 cores, up to 4.9 GHz', 649, 16, 4.9, 7, 'AMD'),
(23, 'Ryzen 7 7800X', '12 cores, up to 4.8 GHz', 499, 12, 4.8, 7, 'AMD'),
(24, 'Ryzen 5 7600X', '8 cores, up to 4.7 GHz', 349, 8, 4.7, 7, 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `gpus`
--

CREATE TABLE `gpus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `brand` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gpus`
--

INSERT INTO `gpus` (`id`, `name`, `price`, `score`, `brand`) VALUES
(1, 'GeForce RTX 3050', 249, 3500, 'NVIDIA'),
(2, 'GeForce RTX 3050 Ti', 299, 3700, 'NVIDIA'),
(3, 'GeForce RTX 3060', 329, 4100, 'NVIDIA'),
(4, 'GeForce RTX 3060 Ti', 399, 4500, 'NVIDIA'),
(5, 'GeForce RTX 3070', 499, 5000, 'NVIDIA'),
(6, 'GeForce RTX 3070 Ti', 599, 5200, 'NVIDIA'),
(7, 'GeForce RTX 3080', 699, 6100, 'NVIDIA'),
(8, 'GeForce RTX 3080 Ti', 1199, 6500, 'NVIDIA'),
(9, 'GeForce RTX 3090', 1499, 6800, 'NVIDIA'),
(10, 'GeForce RTX 4090', 1999, 8000, 'NVIDIA'),
(11, 'GeForce RTX 4060', 399, 5200, 'NVIDIA'),
(12, 'GeForce RTX 4060 Ti', 499, 5400, 'NVIDIA'),
(13, 'GeForce RTX 4070', 599, 6000, 'NVIDIA'),
(14, 'GeForce RTX 4070 Ti', 699, 6500, 'NVIDIA'),
(15, 'GeForce RTX 4080', 899, 7000, 'NVIDIA'),
(16, 'GeForce RTX 4080 Ti', 1199, 7500, 'NVIDIA'),
(17, 'GeForce RTX 4090', 1499, 8000, 'NVIDIA'),
(18, 'Radeon RX 6600', 329, 4000, 'AMD'),
(19, 'Radeon RX 6600 XT', 399, 4200, 'AMD'),
(20, 'Radeon RX 6700', 479, 4500, 'AMD'),
(21, 'Radeon RX 6700 XT', 579, 4700, 'AMD'),
(22, 'Radeon RX 6800', 649, 5300, 'AMD'),
(23, 'Radeon RX 6800 XT', 699, 5500, 'AMD'),
(24, 'Radeon RX 6900 XT', 999, 6000, 'AMD'),
(25, 'Radeon RX 6950 XT', 1199, 6200, 'AMD'),
(26, 'Radeon RX 6700 XT Navi 22', 549, 4700, 'AMD'),
(27, 'Radeon RX 6700 Navi 22', 479, 4500, 'AMD'),
(28, 'Radeon RX 7800', 699, 6600, 'AMD'),
(29, 'Radeon RX 7800 XT', 799, 6800, 'AMD'),
(30, 'Radeon RX 7900', 999, 7000, 'AMD'),
(31, 'Radeon RX 7900 XT', 1199, 7500, 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `account`, `password`) VALUES
(1, 'andrei', '1234'),
(2, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `motherboards`
--

CREATE TABLE `motherboards` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `chipset` varchar(10) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `compatibility` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motherboards`
--

INSERT INTO `motherboards` (`id`, `name`, `chipset`, `price`, `compatibility`) VALUES
(1, 'ASUS ROG Maximus Z690 Hero (WiFi)', 'Z690', 449, 'Intel'),
(2, 'MSI MPG Z690 Carbon WiFi', 'Z690', 349, 'Intel'),
(3, 'GIGABYTE Z690 AORUS Elite AX DDR4', 'Z690', 249, 'Intel'),
(4, 'ASRock Z690 Taichi', 'Z690', 379, 'Intel'),
(5, 'ASUS ROG Strix B660-F Gaming WiFi', 'B660', 229, 'Intel'),
(6, 'MSI MAG B660M Mortar WiFi', 'B660', 149, 'Intel'),
(7, 'GIGABYTE B660M AORUS PRO AX DDR4', 'B660', 159, 'Intel'),
(8, 'ASRock B660 Steel Legend', 'B660', 169, 'Intel'),
(9, 'ASUS TUF Gaming H670-PRO (WiFi)', 'H670', 159, 'Intel'),
(10, 'MSI MAG H670M Mortar WiFi', 'H670', 129, 'Intel'),
(11, 'GIGABYTE H670M AORUS PRO AX DDR4', 'H670', 139, 'Intel'),
(12, 'ASRock H670 Steel Legend', 'H670', 149, 'Intel'),
(13, 'ASUS Prime B660M-A (WiFi)', 'B660', 129, 'Intel'),
(14, 'MSI B660M PRO-VDH WiFi', 'B660', 99, 'Intel'),
(15, 'GIGABYTE B660M DS3H DDR4', 'B660', 89, 'Intel'),
(16, 'ASUS ROG Maximus Z790 Extreme Glacial', 'Z790', 799, 'Intel'),
(17, 'MSI MEG Z790 Godlike', 'Z790', 749, 'Intel'),
(18, 'GIGABYTE Z790 AORUS Xtreme DDR5', 'Z790', 699, 'Intel'),
(19, 'ASUS Prime Z490-A', 'Z490', 229, 'Intel'),
(20, 'MSI MPG Z490 Gaming Plus', 'Z490', 179, 'Intel'),
(21, 'GIGABYTE Z490 AORUS Elite AC', 'Z490', 199, 'Intel'),
(22, 'ASRock Z490 Phantom Gaming 4', 'Z490', 149, 'Intel'),
(23, 'ASUS ROG Strix Z390-E Gaming', 'Z390', 229, 'Intel'),
(24, 'MSI MPG Z390 Gaming Pro Carbon', 'Z390', 199, 'Intel'),
(25, 'GIGABYTE Z390 AORUS Elite', 'Z390', 189, 'Intel'),
(26, 'ASRock Z390 Taichi', 'Z390', 249, 'Intel'),
(27, 'ASUS Prime H470-Plus', 'H470', 139, 'Intel'),
(28, 'MSI B460M Mortar', 'B460', 119, 'Intel'),
(29, 'MSI B450 Tomahawk Max', 'B450', 109, 'AMD'),
(30, 'GIGABYTE X570 AORUS Elite', 'X570', 199, 'AMD'),
(31, 'ASRock B550M Steel Legend', 'B550', 129, 'AMD'),
(32, 'ASUS TUF Gaming X570-Plus (WiFi)', 'X570', 189, 'AMD'),
(33, 'MSI B550-A Pro', 'B550', 129, 'AMD'),
(34, 'ASUS ROG Crosshair XV Extreme', 'X670', 499, 'AMD'),
(35, 'MSI MEG X670 Godlike', 'X670', 549, 'AMD'),
(36, 'GIGABYTE X670 AORUS Master DDR5', 'X670', 449, 'AMD'),
(37, 'ASRock X670 Taichi', 'X670', 399, 'AMD'),
(38, 'ASUS Prime X670-Pro', 'X670', 349, 'AMD'),
(39, 'MSI MPG X670 Gaming Pro Carbon WiFi', 'X670', 349, 'AMD'),
(40, 'GIGABYTE X670 AORUS Elite DDR5', 'X670', 279, 'AMD'),
(41, 'ASRock B650M Pro4', 'B650', 149, 'AMD'),
(42, 'ASUS TUF Gaming B650M-Plus (WiFi)', 'B650', 129, 'AMD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpus`
--
ALTER TABLE `cpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpus`
--
ALTER TABLE `gpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motherboards`
--
ALTER TABLE `motherboards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cpus`
--
ALTER TABLE `cpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gpus`
--
ALTER TABLE `gpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motherboards`
--
ALTER TABLE `motherboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
