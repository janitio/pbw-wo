-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 03:58 AM
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
  `id-admin` int(3) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id-cat` int(3) NOT NULL,
  `nama-cat` varchar(50) NOT NULL,
  `menu-cat` text NOT NULL,
  `porsi-cat` varchar(3) NOT NULL,
  `harga-cat` int(16) NOT NULL,
  `telp-cat` varchar(12) NOT NULL,
  `foto-cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gaun`
--

CREATE TABLE `gaun` (
  `id-gaun` int(3) NOT NULL,
  `model-gaun` varchar(50) NOT NULL,
  `pemilik-gaun` varchar(50) NOT NULL,
  `harga-gaun` int(16) NOT NULL,
  `telp-gaun` varchar(12) NOT NULL,
  `foto-gaun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id-ged` int(3) NOT NULL,
  `nama-ged` varchar(50) NOT NULL,
  `alamat-ged` text NOT NULL,
  `harga-ged` int(16) NOT NULL,
  `telp-ged` varchar(12) NOT NULL,
  `kapasitas-ged` varchar(7) NOT NULL,
  `foto-ged` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id-part` int(3) NOT NULL,
  `nama-part` varchar(50) NOT NULL,
  `paket-part` varchar(20) NOT NULL,
  `alamat-part` text NOT NULL,
  `telp-part` varchar(12) NOT NULL,
  `email-part` varchar(50) NOT NULL,
  `foto-part` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id-wed` int(3) NOT NULL,
  `nama-wed` varchar(50) NOT NULL,
  `harga-wed` varchar(15) NOT NULL,
  `telp-wed` varchar(12) NOT NULL,
  `keterangan-wed` text NOT NULL,
  `foto-wed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id-admin`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id-cat`);

--
-- Indexes for table `gaun`
--
ALTER TABLE `gaun`
  ADD PRIMARY KEY (`id-gaun`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id-ged`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id-part`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id-wed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id-admin` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id-cat` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gaun`
--
ALTER TABLE `gaun`
  MODIFY `id-gaun` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id-ged` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id-part` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id-wed` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
