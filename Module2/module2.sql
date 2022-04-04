-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 05:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module2`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `MAHANG` int(11) NOT NULL,
  `TENHANG` varchar(255) NOT NULL,
  `LOAIHANG` varchar(255) NOT NULL,
  `GIA` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `NGAYTAO` date NOT NULL,
  `MOTAMATHANG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`MAHANG`, `TENHANG`, `LOAIHANG`, `GIA`, `SOLUONG`, `NGAYTAO`, `MOTAMATHANG`) VALUES
(1, 'Samsung Galaxy Note10', 'Điện thoại', 50000, 2, '2002-04-01', 'd'),
(3, 'iphone XS Max', 'Điện Thoại', 11500000, 1, '2022-04-03', 'Sang Trọng'),
(31, 'Panasonic ', 'Điều hòa', 50000, 2, '0000-00-00', 'Mát'),
(33, 'Lg', 'Tủ lạnh', 50000, 1, '0000-00-00', 'Mát '),
(36, 'điện thoại loại 65', 'Điều hòa', 50000, 2, '0000-00-00', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`MAHANG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `MAHANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
