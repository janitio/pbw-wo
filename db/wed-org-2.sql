-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2020 pada 08.58
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '123', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catering`
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
-- Struktur dari tabel `gaun`
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
-- Struktur dari tabel `gedung`
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
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id-part` int(3) NOT NULL,
  `nama_part` varchar(50) NOT NULL,
  `paket_part` varchar(20) NOT NULL,
  `alamat_part` text NOT NULL,
  `telp_part` varchar(12) NOT NULL,
  `email_part` varchar(50) NOT NULL,
  `foto_part` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wedding`
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
-- Dumping data untuk tabel `wedding`
--

INSERT INTO `wedding` (`id_wed`, `nama_wed`, `harga_wed`, `telp_wed`, `keterangan_wed`, `foto_wed`) VALUES
(1, 'test-pre-wed', '10000', '2193874', 'test-pre-wed', 're.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indeks untuk tabel `gaun`
--
ALTER TABLE `gaun`
  ADD PRIMARY KEY (`id_gaun`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_ged`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id-part`);

--
-- Indeks untuk tabel `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id_wed`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `catering`
--
ALTER TABLE `catering`
  MODIFY `id_cat` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gaun`
--
ALTER TABLE `gaun`
  MODIFY `id_gaun` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_ged` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id-part` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id_wed` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
