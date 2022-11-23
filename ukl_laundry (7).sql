-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 01:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukl_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_paket`, `qty`, `subtotal`) VALUES
(56, 80, 4, 5, 10000),
(57, 80, 6, 2, 16000),
(58, 81, 4, 3, 6000),
(59, 81, 6, 2, 16000),
(60, 82, 3, 3, 54000),
(61, 82, 7, 4, 48000),
(62, 83, 4, 0, 2000),
(63, 83, 6, 2, 16000),
(64, 83, 7, 3, 36000),
(65, 84, 4, 0, 2000),
(66, 84, 6, 1, 8000),
(67, 84, 7, 1, 12000),
(68, 85, 1, 0, 25000),
(69, 85, 2, 5, 75000),
(70, 85, 3, 5, 90000),
(71, 86, 1, 3, 15000),
(72, 86, 2, 7, 105000),
(73, 86, 3, 2, 36000);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(1, 'Andre', 'Malang', 'Laki-laki', '081328878542'),
(2, 'Ihsan', 'Depok', 'Laki-laki', '081234567890'),
(3, 'Jelita', 'Pasuruan', 'Perempuan', '081234567890'),
(4, 'Orin', 'Blitar', 'Perempuan', '081234567890'),
(5, 'Arumi', 'Depok', 'Perempuan', '081234567890'),
(6, 'Adi', 'Kediri', 'Laki-laki', '081234567890'),
(7, 'Rafli', 'Pakis', 'Laki-laki', '081234567890'),
(8, 'Mama', 'Danau Sentani', 'Perempuan', '081333110367'),
(10, 'Bu Whyna', 'Malang', 'Perempuan', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `id_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama`, `alamat`, `tlp`, `id_owner`) VALUES
(1, 'Laundry Kawi', 'Jl. Kawi Atas No.38, Gading Kasri, Kota Malang', '081328878542', 3),
(2, 'Laundry Suhat', 'Jl. Soekarno Hatta No.36, Mojolangu, Kota Malang', '081234567890', 4),
(3, 'Laundry Matos', 'Jl. Veteran No.2, Penanggungan, Kota Malang', '081234567890', 5),
(4, 'Laundry Sulfat', 'Jalan Terusan Sulfat', '081234567890', 3),
(5, 'Laundry Sawojajar', 'Jalan Danau Bratan', '081234567890', 4),
(8, 'Laundry Depan Telkom', 'Jalan Danau Ranau', '081234567890', 5),
(9, 'Laundry Pakis', 'Pakis', '081234567890', 16);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `jenis`, `harga`) VALUES
(1, 'kiloan', 5000),
(2, 'selimut', 15000),
(3, 'bed_cover', 18000),
(4, 'kaos', 2000),
(6, 'Celana', 8000),
(7, 'Jas', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `dibayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `status`, `dibayar`, `id_user`, `id_outlet`) VALUES
(80, 1, '2022-11-18', '2022-11-25', '2022-11-29', 'diambil', 'dibayar', 1, 1),
(81, 2, '2022-11-18', '2022-11-25', '2022-11-29', 'diambil', 'dibayar', 1, 2),
(82, 3, '2022-11-18', '2022-11-25', '2022-11-29', 'diambil', 'dibayar', 1, 4),
(83, 10, '2022-11-22', '2022-11-29', '2022-11-29', 'diambil', 'dibayar', 17, 9),
(84, 10, '2022-11-22', '2022-11-29', '2022-11-29', 'diambil', 'dibayar', 17, 9),
(85, 1, '2022-11-22', '2022-11-29', '2022-11-29', 'diambil', 'dibayar', 1, 9),
(86, 2, '2022-11-22', '2022-11-29', '2022-11-29', 'diambil', 'dibayar', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'Kasir 1', 'kasir', '202cb962ac59075b964b07152d234b70', 'kasir'),
(3, 'Owner 1', 'owner', '202cb962ac59075b964b07152d234b70', 'owner'),
(4, 'Owner 2', 'owner2', '202cb962ac59075b964b07152d234b70', 'owner'),
(5, 'Owner 3', 'owner3', '202cb962ac59075b964b07152d234b70', 'owner'),
(16, 'Owner 5', 'owner5', '202cb962ac59075b964b07152d234b70', 'owner'),
(17, 'Kasir 2', 'kasir2', '202cb962ac59075b964b07152d234b70', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `qty` (`qty`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_owner` (`id_owner`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id_outlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
