-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 09:58 AM
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
-- Database: `simulasi_bisnis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(2) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `password_admin` varchar(20) NOT NULL,
  `nama_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username_admin`, `password_admin`, `nama_admin`) VALUES
(1, 'morganteng98', 'morganteng98', 'Morgan Adianto'),
(2, 'admin', 'admin123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_bahan`
--

CREATE TABLE `tbl_jenis_bahan` (
  `id_jb` int(3) NOT NULL,
  `nama_jb` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_bahan`
--

INSERT INTO `tbl_jenis_bahan` (`id_jb`, `nama_jb`) VALUES
(1, 'Sayur'),
(2, 'Kacang-kacangan'),
(3, 'jb1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_macam_bahan`
--

CREATE TABLE `tbl_macam_bahan` (
  `id_mb` int(3) NOT NULL,
  `nama_mb` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_macam_bahan`
--

INSERT INTO `tbl_macam_bahan` (`id_mb`, `nama_mb`) VALUES
(1, 'Kedelai'),
(2, 'Kacang'),
(3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media_promosi`
--

CREATE TABLE `tbl_media_promosi` (
  `id_mp` int(3) NOT NULL,
  `nama_mp` varchar(25) NOT NULL,
  `str_mp` varchar(100) NOT NULL,
  `wks_mp` varchar(100) NOT NULL,
  `oprt_mp` varchar(100) NOT NULL,
  `thrt_mp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_media_promosi`
--

INSERT INTO `tbl_media_promosi` (`id_mp`, `nama_mp`, `str_mp`, `wks_mp`, `oprt_mp`, `thrt_mp`) VALUES
(9, 'Youtube', 'Banyak orang yang menggunakan youtube', 'Kuota youtube mahal', 'Banyak sekali peluang bagi untuk mendapatkan adsense', 'Bnyak [plat form');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `id_perusahaan` int(3) NOT NULL,
  `nama_perusahaan` varchar(25) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `bentuk_usaha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `bentuk_usaha`) VALUES
(1, 'PT MalangMilk', 'Jl Veteran', 'UMKM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(4) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `str_produk` varchar(100) NOT NULL,
  `wks_produk` varchar(100) NOT NULL,
  `oprt_produk` varchar(100) NOT NULL,
  `thrt_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `str_produk`, `wks_produk`, `oprt_produk`, `thrt_produk`) VALUES
(2, 'Tahu', 'Kekautan', 'KElemahan', 'kesematan', 'ancaman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sasaran`
--

CREATE TABLE `tbl_sasaran` (
  `id_ssrn` int(3) NOT NULL,
  `nama_ssrn` varchar(50) NOT NULL,
  `str_ssrn` varchar(125) NOT NULL,
  `wks_ssrn` varchar(125) NOT NULL,
  `oprt_ssrn` varchar(125) NOT NULL,
  `thrt_ssrn` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sasaran`
--

INSERT INTO `tbl_sasaran` (`id_ssrn`, `nama_ssrn`, `str_ssrn`, `wks_ssrn`, `oprt_ssrn`, `thrt_ssrn`) VALUES
(5, 'Kampus', 'a', 'd', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spesifikasi`
--

CREATE TABLE `tbl_spesifikasi` (
  `id_sp` int(2) NOT NULL,
  `nama_sp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_spesifikasi`
--

INSERT INTO `tbl_spesifikasi` (`id_sp`, `nama_sp`) VALUES
(1, 'Hewan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sumber_bahan`
--

CREATE TABLE `tbl_sumber_bahan` (
  `id_sumber` int(3) NOT NULL,
  `nama_sumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sumber_bahan`
--

INSERT INTO `tbl_sumber_bahan` (`id_sumber`, `nama_sumber`) VALUES
(1, 'Hewani'),
(2, 'Nabati'),
(3, 'a'),
(4, 'a'),
(5, 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(4) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `nama_usaha` varchar(35) NOT NULL,
  `lokasi_usaha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username_user`, `email`, `password`, `pendidikan`, `telepon`, `nama_usaha`, `lokasi_usaha`) VALUES
(1, 'Hendra', 'Hendra@gmail.com', 'Hendra', 'D4', '081324567890', 'Usaha Susu', 'Malang'),
(2, 'Laksmana', 'Laksmana@gmail.com', 'Laksmana', 'D3', '0134', 'Tempe', 'Jember'),
(3, 'morganteng99', 'morgan_ardianto@yahoo.com', 'q', 'D4', '0812345432', 'Morgan', 'morganteng99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_jenis_bahan`
--
ALTER TABLE `tbl_jenis_bahan`
  ADD PRIMARY KEY (`id_jb`);

--
-- Indexes for table `tbl_macam_bahan`
--
ALTER TABLE `tbl_macam_bahan`
  ADD PRIMARY KEY (`id_mb`);

--
-- Indexes for table `tbl_media_promosi`
--
ALTER TABLE `tbl_media_promosi`
  ADD PRIMARY KEY (`id_mp`);

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_sasaran`
--
ALTER TABLE `tbl_sasaran`
  ADD PRIMARY KEY (`id_ssrn`);

--
-- Indexes for table `tbl_spesifikasi`
--
ALTER TABLE `tbl_spesifikasi`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `tbl_sumber_bahan`
--
ALTER TABLE `tbl_sumber_bahan`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jenis_bahan`
--
ALTER TABLE `tbl_jenis_bahan`
  MODIFY `id_jb` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_macam_bahan`
--
ALTER TABLE `tbl_macam_bahan`
  MODIFY `id_mb` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_media_promosi`
--
ALTER TABLE `tbl_media_promosi`
  MODIFY `id_mp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  MODIFY `id_perusahaan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_sasaran`
--
ALTER TABLE `tbl_sasaran`
  MODIFY `id_ssrn` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_spesifikasi`
--
ALTER TABLE `tbl_spesifikasi`
  MODIFY `id_sp` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sumber_bahan`
--
ALTER TABLE `tbl_sumber_bahan`
  MODIFY `id_sumber` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
