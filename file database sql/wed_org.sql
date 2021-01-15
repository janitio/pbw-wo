-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:33 PM
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
-- Database: `wed_org`
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

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id_cat`, `nama_cat`, `menu_cat`, `porsi_cat`, `harga_cat`, `telp_cat`, `foto_cat`) VALUES
(2, 'Cinta Indah Permata ', 'Menu Berdasarkan Foto Yang Tertera', '100', 20000000, '081231381411', '1.jpg'),
(3, 'Bu Jurnailah ', 'Menu Berdasarkan Permintaan ', '100', 15000000, '0823211231', '2.jpg'),
(4, 'Sonata Catering', 'Menu Tradisional Indonesia', '100', 5000000, '08128024324', 'cat1.png'),
(5, 'Mitra Katering', '1. Nasi Putih\r\na. Nasi Goreng\r\nb. Mie Goreng\r\nc. Bihun Goreng\r\n2. SOP ( PILIHAN )\r\na. Sop kimlo\r\nb. Sop ayam sosis\r\nc. Sop ayam jagung\r\nd. Sop daging\r\ne. Sop iga\r\n3. Ayam ( PILIHAN )\r\na. Ayam grg mentega\r\nb. Ayam pg bali\r\nc. Ayam rica2\r\nd. Ayam lapis keju\r\ne. Ayam cusnut\r\n4. Daging ( PILIHAN )\r\na. Daging teriaki\r\nb. Daging rolade\r\nc. Daging lada hitam\r\nd. Daging rica2\r\ne. Daging krengseng\r\nf. Daging steak\r\n5. Kakap Asam Manis / Udang Goreng Tepung\r\n6. Macaroni Scotell\r\n7. Sayuran ( PILIHAN )\r\na. Asinan jakarta\r\nb. Slada bangkok\r\nc. Capcay\r\n8. Kerupuk\r\n9. Buah\r\n10. Puding\r\n11. Snack Tampah\r\n12. Softdrink\r\n13. Air Mineral', '100', 4500000, '081233124312', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_gal` int(3) NOT NULL,
  `tema_gal` varchar(50) NOT NULL,
  `keterangan_gal` text NOT NULL,
  `foto_gal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_gal`, `tema_gal`, `keterangan_gal`, `foto_gal`) VALUES
(6, 'Gunung Bromo', 'Pernikahan Dengan Tema Gunung Bromo', 'bromo.jpg'),
(7, 'Kebun Teh ', 'Foto Pre-Wedding dengan Tema Kebun Teh', 'foto (22).jpg'),
(8, 'Kebun Bunga Matahari', 'Foto Pre-Wedding dengan Tema Kebun Bunga Matahari', 'foto (5).jpg');

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

--
-- Dumping data for table `gaun`
--

INSERT INTO `gaun` (`id_gaun`, `model_gaun`, `pemilik_gaun`, `harga_gaun`, `telp_gaun`, `foto_gaun`) VALUES
(2, 'Armarilis Butique', 'Armarilis Butique', 5000000, '088324281283', '97493-jof6iut22ci1.JPG'),
(3, 'Sunda Modern', 'Jumain Butique', 5000000, '08122112212', '30729-fkb4eqp11we0.jpg'),
(4, 'Sunda Minang', 'John Franco', 7000000, '08122143123', '30283-vbr1uhg76ou6.jpg'),
(5, 'Jawa Klasik', 'Karina Busana', 6500000, '081384949068', '67727-g30neq5ddx1a.jpg');

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

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id_ged`, `nama_ged`, `alamat_ged`, `harga_ged`, `telp_ged`, `kapasitas_ged`, `foto_ged`) VALUES
(2, 'Bandung Convention Center', 'Jalan Soekarno Hatta Nomor 354, Lega, Bojongloa Kidul, Bandung.', 10000000, '081276324562', '1600', 'gedung1.png'),
(3, 'Gedung Balai Sartika', ' Jalan Suryalaya Indah Nomor 1-2, Buah Batu, Cijagra, Lengkong, Bandung.', 20000000, '085657432356', '1500', 'dewi-sartika.jpg'),
(4, 'Mepro Hall', ' Jalan Soekarno Hatta Nomor 789, Babakan Penghulu, Cinambo, Bandung.', 20000000, '089612145625', '2000', 'mepro-hall.jpg'),
(5, 'Gedung Kologdam Bandung', 'Jalan Aceh Nomor 50, Merdeka, Sumur Bandung, Bandung.', 17000000, '08126431234', '1500', 'kologdam.jpg');

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
-- Table structure for table `partner_join`
--

CREATE TABLE `partner_join` (
  `id_partjoin` int(3) NOT NULL,
  `nama_partjoin` varchar(50) NOT NULL,
  `paket_partjoin` varchar(30) NOT NULL,
  `alamat_partjoin` text NOT NULL,
  `telp_partjoin` varchar(14) NOT NULL,
  `email_partjoin` varchar(40) NOT NULL,
  `foto_partjoin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_join`
--

INSERT INTO `partner_join` (`id_partjoin`, `nama_partjoin`, `paket_partjoin`, `alamat_partjoin`, `telp_partjoin`, `email_partjoin`, `foto_partjoin`) VALUES
(10, 'ALMER WEDDING DESIGN', 'Pre-Wedding', 'Jl. Komodo 2 No 36 Perumnas 2 Tangerang', '085920684174', 'almerrisma@gmail.com', 'almer.jpg'),
(12, 'My Meal Catering', 'Catering', 'Jl. Angsa 2 No 10 Elok, Tangerang', '081234567899', 'meal_catering@gmail.com', 'mymeal.jpg'),
(16, 'JTB', 'Catering', 'Jl. Timor 17 No 1 Jakarta', '082384953111', 'jtb_catering@gmail.com', 'jtb.jpg');

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
(4, 'Paket A', '2500000', '08823192312', '            – Foto cetak 30x40cm + Bingkai 1pcs\r\n– Foto cetak uk.4R + Bingkai 5pcs\r\n– Foto Outdoor Durasi Pemotretan 4jam unlimited photo\r\n– DVD Softcopy file foto        ', '1.jpg'),
(5, 'Paket B', '3500000', '08823114123', '– cetak Album kolase prewedding uk. 10R (20x25cm), 22 halaman\r\n– Foto cetak 30x40cm + Bingkai 1pcs\r\n– Foto cetak uk.4R + Bingkai 5pcs\r\n– Foto Outdoor Durasi Pemotretan 4jam unlimited photo\r\n– Property foto disediakan (dipinjamkan)\r\n– DVD Softcopy file foto', '2.jpg'),
(6, 'Paket C', '7500000', '08231231421', '– Foto cetak 30x40cm + Bingkai 2pcs\r\n– Foto cetak uk.4R + Bingkai 5pcs\r\n– Foto Outdoor Durasi Pemotretan 4jam unlimited photo\r\n– Make Up-Hairdo/Hijab Style\r\n– Property foto disediakan (dipinjamkan)\r\n– DVD Softcopy file foto\r\n– 1 DVD Video Slideshow Foto Prewedding', '3.jpg'),
(7, 'Paket D', '8500000', '0823412312', '– 1 Foto Liputan wedding\r\n– 1 Foto Candid\r\n– 1 Video Liputan wedding\r\n– 1 slr video; cinematic conceptual wedding video\r\noutput:\r\n– cetak album kolase 20x30cm, 22 halaman : 2 pcs\r\n– fullcover album kolase (photo printed cover full)\r\n– ekslusif printed album box\r\n– cetak foto 40x60cm + bingkai : 1pcs\r\n– DVD softcopy file foto\r\n– DVD video liputan wedding, editing dvd : 1pcs\r\n– DVD Video Cinematic Wedding', '4.jpg');

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
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_gal`);

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
-- Indexes for table `partner_join`
--
ALTER TABLE `partner_join`
  ADD PRIMARY KEY (`id_partjoin`);

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
  MODIFY `id_cat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_gal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gaun`
--
ALTER TABLE `gaun`
  MODIFY `id_gaun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_ged` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_part` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `partner_join`
--
ALTER TABLE `partner_join`
  MODIFY `id_partjoin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id_wed` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
