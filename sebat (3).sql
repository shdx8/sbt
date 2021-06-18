-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 04:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` varchar(6) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kabel` enum('type-c','micro','lightning','') NOT NULL,
  `total` enum('1000','2000','3000','4000','10000','25000') NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `status` enum('pinjam','selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `nama_peminjam`, `no_hp`, `kabel`, `total`, `tgl_pinjam`, `status`) VALUES
('S-001', 'moon', '888', 'micro', '1000', '2021-01-22', 'selesai'),
('S-005', 'sebat', '1940', 'type-c', '2000', '2021-01-22', 'selesai'),
('S-006', 'baru', '79127', 'micro', '2000', '2021-01-22', 'selesai'),
('S-007', 'mong', '79127', 'micro', '10000', '2021-02-03', 'pinjam'),
('S-011', 'sebat', '1940', 'type-c', '1000', '2021-02-03', 'pinjam'),
('S-013', 'baru', '123', 'micro', '1000', '2021-02-03', 'pinjam'),
('S-014', 'mnm', '086812891798', 'lightning', '2000', '2021-02-03', 'pinjam'),
('S-015', 'deo', '123', 'lightning', '3000', '2021-02-03', 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`) VALUES
(13, 'asd', 'asd@mail.com', 'asd', '7815696ecbf1c96e6894b779456d330e'),
(14, 'zxc', 'zxc@mail.com', 'zxc', '5fa72358f0b4fb4f2c5d7de8c9a41846');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
