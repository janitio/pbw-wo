-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 05:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wed-org`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id_cat` int(3) NOT NULL,
  `nama_cat` varchar(50) NOT NULL,
  `menu_cat` text NOT NULL,
  `porsi_cat` varchar(3) NOT NULL,
  `harga_cat` int(16) NOT NULL,
  `telp_cat` varchar(12) NOT NULL,
  `foto_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gaun`
--

CREATE TABLE `gaun` (
  `id_gaun` int(3) NOT NULL,
  `model_gaun` varchar(50) NOT NULL,
  `pemilik_gaun` varchar(50) NOT NULL,
  `harga_gaun` int(16) NOT NULL,
  `telp_gaun` varchar(12) NOT NULL,
  `foto_gaun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id_ged` int(3) NOT NULL,
  `nama_ged` varchar(50) NOT NULL,
  `alamat_ged` text NOT NULL,
  `harga_ged` int(16) NOT NULL,
  `telp_ged` varchar(12) NOT NULL,
  `kapasitas_ged` varchar(7) NOT NULL,
  `foto_ged` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_part` int(3) NOT NULL,
  `nama_part` varchar(50) NOT NULL,
  `paket_part` varchar(20) NOT NULL,
  `alamat_part` text NOT NULL,
  `telp_part` varchar(12) NOT NULL,
  `email_part` varchar(50) NOT NULL,
  `foto_part` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id_wed` int(3) NOT NULL,
  `nama_wed` varchar(50) NOT NULL,
  `harga_wed` varchar(15) NOT NULL,
  `telp_wed` varchar(12) NOT NULL,
  `keterangan_wed` text NOT NULL,
  `foto_wed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id_wed`, `nama_wed`, `harga_wed`, `telp_wed`, `keterangan_wed`, `foto_wed`) VALUES
(1, 'test-pre-wed', '10000', '2193874', 'test-pre-wed', 're.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `gaun`
--
ALTER TABLE `gaun`
  ADD PRIMARY KEY (`id_gaun`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_ged`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_part`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id_wed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id_cat` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gaun`
--
ALTER TABLE `gaun`
  MODIFY `id_gaun` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_ged` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_part` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id_wed` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
