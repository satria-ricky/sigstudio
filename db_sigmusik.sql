-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 08:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigmusik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alat`
--

CREATE TABLE `tb_alat` (
  `id_alat` int(7) NOT NULL,
  `nama_alat` varchar(20) NOT NULL,
  `foto_alat` varchar(30) NOT NULL,
  `jenis_alat` varchar(20) NOT NULL,
  `kondisi_alat` varchar(20) NOT NULL,
  `id_studio` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `nama_alat`, `foto_alat`, `jenis_alat`, `kondisi_alat`, `id_studio`) VALUES
(2, 'drum', 'PHP-logo_svg.png', 'Pukul', 'Pukul', 3),
(3, 'gitar', 'PHP-logo_svg1.png', 'Petik', 'Pukul', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_boking`
--

CREATE TABLE `tb_jadwal_boking` (
  `no_boking` int(7) NOT NULL,
  `nama_boking` varchar(30) NOT NULL,
  `tanggal_boking` date NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_berakhir` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_ruangan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(5) NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
(1, 'tes'),
(2, 'Ruangan 2'),
(3, 'Ruangan 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_studio`
--

CREATE TABLE `tb_studio` (
  `id_studio` int(7) NOT NULL,
  `nama_studio` varchar(25) NOT NULL,
  `alamat_studio` varchar(50) NOT NULL,
  `tahun_didirikan` int(4) NOT NULL,
  `foto_studio` varchar(50) NOT NULL,
  `latitude` varchar(9) NOT NULL,
  `harga_sewa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(7) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level_user` int(1) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `id_studio` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level_user`, `nama_user`, `id_studio`) VALUES
(4, 'izki123', 'izki123', 2, 'izki', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tb_jadwal_boking`
--
ALTER TABLE `tb_jadwal_boking`
  ADD PRIMARY KEY (`no_boking`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tb_studio`
--
ALTER TABLE `tb_studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alat`
--
ALTER TABLE `tb_alat`
  MODIFY `id_alat` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jadwal_boking`
--
ALTER TABLE `tb_jadwal_boking`
  MODIFY `no_boking` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_ruangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_studio`
--
ALTER TABLE `tb_studio`
  MODIFY `id_studio` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
