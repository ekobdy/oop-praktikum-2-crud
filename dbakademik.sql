-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbakademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhsw`
--

CREATE TABLE `tb_mhsw` (
  `mhsw_id` int(11) NOT NULL,
  `mhsw_nim` varchar(25) NOT NULL,
  `mhsw_nama` varchar(100) NOT NULL,
  `mhsw_alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mhsw`
--

INSERT INTO `tb_mhsw` (`mhsw_id`, `mhsw_nim`, `mhsw_nama`, `mhsw_alamat`) VALUES
(1, '17021000', 'Hendra Kusuma', 'Medan'),
(2, '17021001', 'Dwi Andriani', 'Pematang Siantar'),
(3, '17021002', 'Maya Anita', 'Rantau Parapat'),
(4, '17021003', 'Faiza Rizky', 'Tanjung Morawa'),
(5, '17021004', 'Fauziah Fitri', 'Kisaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mhsw`
--
ALTER TABLE `tb_mhsw`
  ADD PRIMARY KEY (`mhsw_id`),
  ADD UNIQUE KEY `mhsw_nim` (`mhsw_nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mhsw`
--
ALTER TABLE `tb_mhsw`
  MODIFY `mhsw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
