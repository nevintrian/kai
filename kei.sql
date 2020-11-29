-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kei`
--

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id_transport` int(5) NOT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `no_kereta` varchar(100) NOT NULL,
  `nama_kereta` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `stamformasi` varchar(100) NOT NULL,
  `relasi` varchar(100) NOT NULL,
  `nama_stasiun` varchar(100) NOT NULL,
  `berangkat` varchar(5) NOT NULL,
  `tiba` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id_transport`, `tanggal`, `no_kereta`, `nama_kereta`, `status`, `jenis`, `stamformasi`, `relasi`, `nama_stasiun`, `berangkat`, `tiba`) VALUES
(2, '2020-11-09', '12', 'wir santoso', 'aktif', 'WR001', 'K1=2, K2=3, K3=4', 'jember-probolinggo', 'stasiun api jember', '14.09', '14.21'),
(3, '2020-11-09', '12', 'wir santoso', 'aktif', 'WR001', 'K1=2, K2=3, K3=4', 'jember-probolinggo', 'statiun api probolinggo', '14.22', '14.33'),
(7, '2020-11-29', '14', 'wir ganteng', 'aktif', 'WR002', 'K1=2, K2=3, K3=4', 'jember-bali', 'Bali', '15.11', '15.21'),
(8, '2020-11-29', '14', 'wir ganteng', 'aktif', 'WR002', 'K1=2, K2=3, K3=4', 'jember-bali', 'bali timur mas', '16.02', '16.21'),
(9, '2020-11-29', '14', 'wir ganteng', 'aktif', 'permen', 'K1=2, K2=3, K3=4', 'jember-bali', 'bukit permai', '18.21', '19.15'),
(10, '2020-11-29', '12', 'wir santoso', 'aktif', 'permen', 'K1=2, K2=3, K3=4', 'jember-probolinggo', 'wirtol mania', '20.35', '21.48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'nevin', '57dd6150d6302a88892a0c5e09dfc7fc', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_transport`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
