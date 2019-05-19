-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 07:49 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `KdAnggota` int(10) NOT NULL,
  `Nama` varchar(191) NOT NULL,
  `Prodi` varchar(191) NOT NULL,
  `Jenjang` varchar(191) NOT NULL,
  `Alamat` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`KdAnggota`, `Nama`, `Prodi`, `Jenjang`, `Alamat`) VALUES
(2, 'pegi', 'ilkom', 'bb', 'bali'),
(3, 'a', 'a', 'a', 'a'),
(4, 'a', 'a', 'a', 'a'),
(20, 's', 'ss', 'ss', '4'),
(21, 'ff', 'ff', 'ff', 'ff'),
(22, 'fff', 'ff', 'ff', '12345'),
(23, 'ss', 'ss', 'ss', 'sss'),
(24, 'd', 'd', 'd', 'ddd'),
(25, 's', 's', 'ss', 'ss'),
(26, 'h', 'h', 'h', 'hh'),
(27, 'hh', 'hh', 'hh', 'jj'),
(28, 'pegi', 'ilkom', 's1', 'batubulan');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `KdRegister` int(10) NOT NULL,
  `Judul_Buku` varchar(191) NOT NULL,
  `Pengarang` varchar(191) NOT NULL,
  `Penerbit` varchar(191) NOT NULL,
  `Tahun_Terbit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`KdRegister`, `Judul_Buku`, `Pengarang`, `Penerbit`, `Tahun_Terbit`) VALUES
(2, 's', 'f', 'g', 2018),
(3, 's', 's', 's', 12),
(4, 'a', 'a', 'a', 3),
(16, 'gg', 'gg', 'gg', 1234),
(17, 'kk', 'kk', 'kk', 123456),
(18, 'inuyasha', 'masashi kisimota', 'elex media', 1998);

-- --------------------------------------------------------

--
-- Table structure for table `detil_pinjam`
--

CREATE TABLE `detil_pinjam` (
  `Kdregister` int(11) NOT NULL,
  `Kdpinjam` int(11) NOT NULL,
  `Tglpinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Tglkembali` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_pinjam`
--

INSERT INTO `detil_pinjam` (`Kdregister`, `Kdpinjam`, `Tglpinjam`, `Tglkembali`, `id`) VALUES
(3, 4, '2019-05-18 16:49:27', '2019-05-06 16:00:00', 4),
(3, 6, '2019-05-18 17:11:32', '2019-05-27 16:00:00', 6),
(3, 7, '2019-05-18 17:48:49', '2019-05-30 16:00:00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `Kdpinjam` int(11) NOT NULL,
  `Kdanggota` int(11) NOT NULL,
  `Kdpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`Kdpinjam`, `Kdanggota`, `Kdpetugas`) VALUES
(4, 3, 3),
(6, 3, 3),
(7, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `KdPetugas` int(10) NOT NULL,
  `Nama` varchar(191) NOT NULL,
  `Alamat` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`KdPetugas`, `Nama`, `Alamat`, `username`, `password`, `last_login`) VALUES
(3, 'pegi', 'batubulan', 'pegi', '12345678', '2019-05-03 07:13:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`KdAnggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`KdRegister`);

--
-- Indexes for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`Kdpinjam`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`KdPetugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `KdAnggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `KdRegister` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `KdPetugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
