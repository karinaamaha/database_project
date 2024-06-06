-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 06:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_fasilitas`
--

CREATE TABLE `info_fasilitas` (
  `fasilitas` varchar(20) NOT NULL,
  `detail_fasilitas` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_fasilitas`
--

INSERT INTO `info_fasilitas` (`fasilitas`, `detail_fasilitas`, `harga`) VALUES
('FASILITAS A', 'Kasur, Lemari, Meja, Kursi, AC', 800000),
('FASILITAS B', 'Kasur, Lemari, Meja, Kursi, Kipas', 650000);

-- --------------------------------------------------------

--
-- Table structure for table `info_kos`
--

CREATE TABLE `info_kos` (
  `no_kos` int(11) NOT NULL,
  `lantai` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_kos`
--

INSERT INTO `info_kos` (`no_kos`, `lantai`, `fasilitas`) VALUES
(1, 1, 'FASILITAS B'),
(2, 1, 'FASILITAS B'),
(3, 1, 'FASILITAS B'),
(4, 1, 'FASILITAS B'),
(5, 1, 'FASILITAS B'),
(6, 1, 'FASILITAS B'),
(7, 1, 'FASILITAS B'),
(8, 1, 'FASILITAS B'),
(9, 1, 'FASILITAS B'),
(10, 1, 'FASILITAS B'),
(11, 1, 'FASILITAS A'),
(12, 1, 'FASILITAS A'),
(13, 1, 'FASILITAS A'),
(14, 1, 'FASILITAS A'),
(15, 1, 'FASILITAS A'),
(16, 1, 'FASILITAS B'),
(17, 1, 'FASILITAS B'),
(18, 1, 'FASILITAS B'),
(19, 1, 'FASILITAS B'),
(20, 1, 'FASILITAS B'),
(21, 2, 'FASILITAS A'),
(22, 2, 'FASILITAS A'),
(23, 2, 'FASILITAS A'),
(24, 2, 'FASILITAS A'),
(25, 2, 'FASILITAS A'),
(26, 2, 'FASILITAS B'),
(27, 2, 'FASILITAS B'),
(28, 2, 'FASILITAS B'),
(29, 2, 'FASILITAS B'),
(30, 2, 'FASILITAS B'),
(31, 2, 'FASILITAS B'),
(32, 2, 'FASILITAS B'),
(33, 2, 'FASILITAS B'),
(34, 2, 'FASILITAS B'),
(35, 2, 'FASILITAS B'),
(36, 2, 'FASILITAS B'),
(37, 2, 'FASILITAS B'),
(38, 2, 'FASILITAS B'),
(39, 2, 'FASILITAS B'),
(40, 2, 'FASILITAS B'),
(41, 3, 'FASILITAS B'),
(42, 3, 'FASILITAS B'),
(43, 3, 'FASILITAS B'),
(44, 3, 'FASILITAS B'),
(45, 3, 'FASILITAS B'),
(46, 3, 'FASILITAS B'),
(47, 3, 'FASILITAS B'),
(48, 3, 'FASILITAS B'),
(49, 3, 'FASILITAS B'),
(50, 3, 'FASILITAS B'),
(51, 3, 'FASILITAS B'),
(52, 3, 'FASILITAS B'),
(53, 3, 'FASILITAS B'),
(54, 3, 'FASILITAS B'),
(55, 3, 'FASILITAS B'),
(56, 3, 'FASILITAS B'),
(57, 3, 'FASILITAS B'),
(58, 3, 'FASILITAS B'),
(59, 3, 'FASILITAS B'),
(60, 3, 'FASILITAS B');

-- --------------------------------------------------------

--
-- Table structure for table `info_layanan`
--

CREATE TABLE `info_layanan` (
  `nama_layanan` varchar(20) NOT NULL,
  `harga_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_layanan`
--

INSERT INTO `info_layanan` (`nama_layanan`, `harga_layanan`) VALUES
('Catering', 14000),
('Laundry', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `info_pesanan`
--

CREATE TABLE `info_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `id_penghuni` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat_pegawai` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `alamat_pegawai`, `jenis_kelamin`, `no_hp`, `gaji`) VALUES
(4, 'Rahayu Handayani', 'Jl. Dr Masyur, Gg Saudara, Nomor 33 Merdeka', 'Perempuan', '081319262965', 1500000),
(5, 'Budi Cahaya', 'Jl. Dr Masyur, Gg Saudara, Nomor 33 Merdeka', 'laki-laki', '081319262965', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `id_penghuni` int(11) NOT NULL,
  `nama_penghuni` varchar(50) NOT NULL,
  `alamat_penghuni` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `no_kos` int(11) NOT NULL,
  `durasi_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`id_penghuni`, `nama_penghuni`, `alamat_penghuni`, `jenis_kelamin`, `no_hp`, `no_kos`, `durasi_sewa`) VALUES
(1, 'Annisa Della Santika Tanjung', 'Gunungsitoli, jalan kelapa nomor 60', 'Perempuan', '082297726995', 1, 12),
(2, 'Erni Esensiani Hia', 'Nias Selatan Desa Bawomataluo', 'Perempuan', '081260531989', 2, 12),
(3, 'Yohana', 'Jl. Batu bara', 'Perempuan', '089669006500', 3, 12),
(4, 'Arlita', 'Jl. Gatot subroto', 'Perempuan', '0895601345004', 4, 6),
(5, 'Difa Mareza Hanifah Lubis', 'Jl. Muara Patontang', 'Perempuan', '081344530490', 5, 12),
(6, 'Nawang Pramesti', 'Jl. Tunah Gajah', 'Perempuan', '082250254572', 7, 12),
(7, 'Siti Jahrona Rambe', 'Dusun II Lidah Tanah Perbaungan', 'Perempuan', '081361531106', 8, 12),
(8, 'Raisya Shabira Suri', 'Jln Prof Ismuha No 2', 'Perempuan', '082277534367', 9, 12),
(9, 'Zakiah Muallimah Nasution', 'Tanjung sarang elang', 'Perempuan', '082268363296', 9, 9),
(10, 'Uswatun Nisa Ritonga', 'Gang Buntu', 'Perempuan', '082122523707', 10, 6),
(11, 'Dela', 'Jln. Simangambat', 'Perempuan', '082243203303', 11, 12),
(12, 'Elisabet Sherlyta Cantika Daely', 'Jl. Angger Gg. Anggrek No. 8', 'Perempuan', '082277410516', 11, 12),
(13, 'Yeti Driati Manurung', 'Jl. Cemara', 'Perempuan', '087749499328', 12, 6),
(14, 'Clara Novita', 'Jln. Danau laut tawar no 43 ', 'Perempuan', '081260834005', 12, 6),
(15, 'Christine Artha Uli', 'Jalan Limau', 'Perempuan', '081212802651', 13, 12),
(16, 'Tri Febrita Ziliwu', 'Afia', 'Perempuan', '085270858909', 13, 12),
(17, 'Adellia Fitri Lubis', 'Dolok merawan', 'Perempuan', '082230857827', 14, 9),
(18, 'Regina Simbolon', 'Jln. Bunga Cempaka', 'Perempuan', '081260914253', 15, 6),
(19, 'Anggi Namira', 'Jl. Alboin Hutabarat', 'Perempuan', '082386221188', 16, 9),
(20, 'Eiren Triana', 'Dapur 12,Jalan Kamboja', 'Perempuan', '089652425915', 18, 4),
(21, 'Dina Lestari Lubis', 'Dusun 2 Dolok Merawan', 'Perempuan', '085260397862', 19, 6),
(22, 'Intan Permatasari Hia', 'Jalan Raya Onolimbu', 'Perempuan', '082264295157', 22, 9),
(23, 'Irma Amelia', 'Jln. Trans Sumatera Bukittinggi - Padang Sidempuan', 'Perempuan', '082368407005', 23, 12),
(24, 'Lili', 'Padang Lawas', 'Perempuan', '0822722825', 23, 12),
(25, 'Dewi Sari Angel Sianturi', 'Jalan Kemuning 19', 'Perempuan', '082284471422', 24, 12),
(26, 'Siti Khairunisa', 'Jln SM Raja Gg Rukun LK IV', 'Perempuan', '083103828398', 25, 9),
(27, 'Ika Ros Wita Zega', 'Tambalou', 'Perempuan', '081218325391', 26, 8),
(28, 'Sutriyaningsih', 'Jl. Pendidikan', 'Perempuan', '087812579899', 28, 12),
(29, 'Eirene Emiliani Zega', 'Jl. Arah awaai km 11', 'Perempuan', '082172997954', 29, 12),
(30, 'Naomy Dwi Cahyani Harefa', 'Jl. Sisobahili No. 01', 'Perempuan', '082164441028', 30, 6),
(32, 'Adhitya Alam Saputra', 'Jl. Sejahtera', 'Laki-laki', '081367684538', 31, 13),
(33, 'Kevin Sean Yasaro Zebua', 'Jalan Gada', 'Laki-laki', '081260743602', 32, 7),
(34, 'Rizky Kirana', 'Gang Lau Kawar', 'Perempuan', '081397157116', 33, 12),
(35, 'Rizky Ziliwu', 'Gang bubut', 'Laki-laki', '081260260041', 34, 6),
(36, 'Brian Tobing', 'Jln. Bagot Jitta ', 'Laki-laki', '081269969941', 35, 9),
(37, 'Mario Arvin', '	\r\nJl. Tengku Amir Hamzah', 'Laki-laki', '081272858251', 36, 12),
(38, 'Mhd Rafly Purba', 'Perumahan citra damuli permai no 62 lubuk tiko', 'Laki-laki', '081269895464', 36, 12),
(39, 'Hapy Zega', 'Jln.Jend Sudirman', 'Laki-laki', '085270086198', 37, 15),
(40, 'Aldi', 'Jl. Baloho', 'Laki-laki', '082361705463', 38, 18),
(41, 'Hotasi Jordan', 'Jalan Pandu', 'Laki-laki', '082273923052', 39, 6),
(42, 'Jacob Panangian Lumbanbatu', 'Brooklyn Apartment, Jalan Alam Sutera Boulevard', 'Laki-laki', '081360922352', 39, 12),
(43, 'Yarman J. Zega', 'Jl. Yos Sudarso', 'Laki-laki', '081397561946', 40, 9),
(44, 'Nediar Hafiz', 'Jl Batu bara No.14', 'Laki-laki', '0882015426036', 40, 6),
(45, 'Rizky Nimpar', 'Jalan Jamin Ginting Gg.Garuda', 'Laki-laki', '089560123467', 41, 3),
(46, 'Mario', 'Jln. Selebes No.225 Gg.VII Belawan', 'Laki-laki', '082168232677', 42, 18),
(47, 'Ananda Austin Aritonang', 'Stabat', 'Laki-laki', '0i2361954620', 44, 12),
(48, 'Safrizal', 'Peudada', 'Laki-laki', '082274629064', 45, 15),
(49, 'Teofilus lase', 'Jl arah Nias tengah ', 'Laki-laki', '082272458830', 46, 12),
(50, 'Khairulza Ikhwanda Siregar', 'Jalan kota cane', 'Laki-laki', '082277034815', 47, 24),
(51, 'Arga Hasian', 'Jl.Nusantara No 22', 'Laki-laki', '082276854916', 48, 18),
(52, 'Jonathan Pakpahan', 'Jalan Flamboyan No. 12', 'Laki-laki', '083170117725', 50, 15),
(53, 'Poltak Sitorus ', 'Jl. Surya II', 'Laki-laki', '082276854917', 51, 6),
(54, 'Abednego Simaremare', 'Jl.Ir Sutami no 79', 'Laki-laki', '082364345598', 52, 18),
(55, 'Sabar Isodorus Ebenezer', 'Jalan Runding No. 34', 'Laki-laki', '081234521688', 58, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `no_tagihan` int(11) NOT NULL,
  `jlh_tagihan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_penghuni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Kak Sri', 'srikos@gmail.com', '5f83d0bb9b7dc85d2b33b49bd6c4ba41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_fasilitas`
--
ALTER TABLE `info_fasilitas`
  ADD PRIMARY KEY (`fasilitas`);

--
-- Indexes for table `info_kos`
--
ALTER TABLE `info_kos`
  ADD PRIMARY KEY (`no_kos`),
  ADD KEY `fasilitas` (`fasilitas`);

--
-- Indexes for table `info_layanan`
--
ALTER TABLE `info_layanan`
  ADD PRIMARY KEY (`nama_layanan`);

--
-- Indexes for table `info_pesanan`
--
ALTER TABLE `info_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_penghuni` (`id_penghuni`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `nama_layanan` (`nama_layanan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id_penghuni`),
  ADD KEY `no_kos` (`no_kos`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`no_tagihan`),
  ADD KEY `id_penghuni` (`id_penghuni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pesanan`
--
ALTER TABLE `info_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id_penghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `no_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_kos`
--
ALTER TABLE `info_kos`
  ADD CONSTRAINT `info_kos_ibfk_2` FOREIGN KEY (`fasilitas`) REFERENCES `info_fasilitas` (`fasilitas`);

--
-- Constraints for table `info_pesanan`
--
ALTER TABLE `info_pesanan`
  ADD CONSTRAINT `info_pesanan_ibfk_1` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`),
  ADD CONSTRAINT `info_pesanan_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `info_pesanan_ibfk_3` FOREIGN KEY (`nama_layanan`) REFERENCES `info_layanan` (`nama_layanan`);

--
-- Constraints for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`no_kos`) REFERENCES `info_kos` (`no_kos`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
