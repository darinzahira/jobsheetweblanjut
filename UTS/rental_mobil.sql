-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2020 at 05:05 PM
-- Server version: 8.0.18
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_tlp`, `no_ktp`, `password`, `role_id`) VALUES
(2, 'violet', 'violet', 'Taman Bahagia No 22', 'Perempuan', '081234567876', '00008765432345678', '7856aa3caa7958278f743812441e1e83', 0),
(3, 'Darin', 'darin', 'Bahagia Selalu no 12', 'Perempuan', '086787681234', '00008765432345699', '6aadb7ee57561663ddee65e20d754119', 0),
(4, 'Darin', 'darin', 'Semangat selalu no 13', 'Perempuan', '081234566668', '0000876543274585', 'd391dc926af8170a20de4b9aeca0f10d', 2),
(5, 'admin', 'admin', 'Jakarta no 14', 'Laki-laki', '0897654325675', '000087732846895963', '0192023a7bbd73250516f069df18b500', 1),
(6, 'Meghan', 'meghan', 'Bandung no 56', 'Perempuan', '081234567876', '00008765432345678', '6a3053aa3d1f03475de26e29fa9562ac', 2),
(7, 'Darin', 'darin', 'Taman Bahagia No 22', 'Perempuan', '089765473372', '00008765432345678', '6aadb7ee57561663ddee65e20d754119', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `harga` varchar(120) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `nopol`, `warna`, `tahun`, `harga`, `status`, `gambar`) VALUES
(2, 'MBL', 'Avanza New', 'N1111GG', 'Silver', '2018', '350000', '0', 'avanza.jpg'),
(3, 'PICKUP', 'Isuzu Bison', 'N8787DD', 'Putih', '2017', '270000', '1', 'isuzubison.jpg'),
(4, 'BUS', 'Jetbus MC', 'N9007KK', 'Putih', '2016', '700000', '1', 'jetbus mc.jpg'),
(5, 'BUS', 'Isuzu Elf', 'N6678AA', 'Putih', '2017', '7500000', '1', 'isuzuelf.jpg'),
(6, 'PICKUP', 'Mitshubishi ', 'N8009GG', 'Biru', '2017', '500000', '1', 'mitsubishit120ss.jpg'),
(7, 'MBL', 'Xenia', 'N1234PP', 'Putih', '2018', '300000', '1', 'xenia1.jpg'),
(9, 'MBL', 'Xenia New', 'B1112SN', 'Hitam', '2019', '450000', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `noiden` varchar(15) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `status_rental` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status_pengembalian` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id_rental`, `id_mobil`, `nama`, `noiden`, `notelp`, `tgl_rental`, `tgl_kembali`, `tanggal_pengembalian`, `status_rental`, `status_pengembalian`) VALUES
(2, 3, 'Millan', '123456789', '', '2020-03-05', '2020-03-13', NULL, NULL, NULL),
(3, 4, 'Millan', '123456789', '', '2020-03-06', '2020-03-07', NULL, NULL, NULL),
(4, 5, 'Millan', '123456789', '987654321', '2020-03-04', '2020-03-05', '2020-03-07', '1', '1'),
(5, 5, 'Meghan', '987654321', '123456789', '2020-03-06', '2020-03-07', '2020-03-07', '0', '0'),
(8, 5, 'Millan', '987654321', '987654321', '2020-03-05', '2020-03-13', NULL, NULL, NULL),
(9, 4, 'Millan', '987654321', '987654321', '2020-03-06', '2020-03-12', NULL, NULL, NULL),
(11, 7, 'Meghan', '987654321', '987654321', '2020-04-03', '2020-04-04', NULL, NULL, NULL),
(13, 3, 'Damila', '987654321', '987654321', '2020-04-11', '2020-04-10', NULL, NULL, NULL),
(14, 3, 'violet', '987654321', '987654321', '2020-04-03', '2020-04-04', NULL, NULL, NULL),
(15, 3, 'Darin', '987654321', '089765487843', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(16, 3, 'Darin', '987654321', '089765487843', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(17, 3, 'Meghan', '987654321', '089765846992', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(18, 3, 'Meghan', '987654321', '089765487843', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(19, 3, 'Meghan', '987654321', '089765487843', '2020-04-02', '2020-04-04', NULL, NULL, NULL),
(20, 3, 'Meghan', '987654321', '089765487843', '2020-04-04', '2020-04-07', NULL, NULL, NULL),
(21, 5, 'Meghan', '987654321', '089765487843', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(22, 6, 'Meghan', '987654321', '089765846992', '2020-04-10', '2020-04-02', NULL, NULL, NULL),
(23, 5, 'Damila', '987654321', '089765487843', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(24, 3, 'Meghan', '987654321', '089765487843', '2020-04-03', '2020-04-04', NULL, NULL, NULL),
(25, 3, 'Meghan', '987654321', '089765487843', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(26, 3, 'Meghan', '987654321', '089765487843', '2020-04-03', '2020-04-04', NULL, NULL, NULL),
(27, 6, 'Meghan', '987654321', '089765487843', '2020-04-02', '2020-04-03', NULL, NULL, NULL),
(28, 3, 'Meghan', '987654321', '089765487843', '2020-04-03', '2020-04-04', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `id_mobil`, `tgl_pinjam`, `tgl_kembali`, `tgl_pengembalian`, `status_pengembalian`, `status_transaksi`) VALUES
(1, 4, 2, '0000-00-00', '0000-00-00', '0000-00-00', '0', '0'),
(2, 4, 2, '2020-03-18', '2020-03-19', '2020-03-19', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `nama_type` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'MBL', 'Mobil'),
(2, 'BUS', 'BUS'),
(3, 'PICKUP', 'Pickup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
