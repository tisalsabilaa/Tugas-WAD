-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 02:15 PM
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
-- Database: `tugaswad`
--

-- --------------------------------------------------------

--
-- Table structure for table `skincare`
--

CREATE TABLE `skincare` (
  `no` int(11) NOT NULL,
  `kodebarang` varchar(10) DEFAULT NULL,
  `namabarang` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `hargajual` int(11) DEFAULT NULL,
  `stokbarang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`no`, `kodebarang`, `namabarang`, `gambar`, `hargajual`, `stokbarang`) VALUES
(2, 'SK02', 'Toner', 'toner.png', 150000, 150),
(3, 'SK03', 'Facial Wash', 'facial wash.webp', 90000, 400),
(4, 'SK04', 'Moisturizer', 'moisturizer.jpg', 76000, 165),
(5, 'SK05', 'Masker', 'masker.jpeg', 79000, 8726),
(6, 'SK01', 'Serum', 'serum.webp', 75000, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skincare`
--
ALTER TABLE `skincare`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skincare`
--
ALTER TABLE `skincare`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
