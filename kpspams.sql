-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 05:37 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpspams`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `judul_menu` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `judul_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Home', 'utama', 'fa fa-dashboard', 0),
(2, 'Data master', '#', 'fa fa-database', 0),
(3, 'Pelanggan', 'pelanggan', 'fa fa-users', 2),
(4, 'Petugas', 'kasir', 'fa fa-users', 2),
(5, 'Baca Meter', 'tarif', 'fa fa-tasks', 0),
(6, 'Golongan', 'golongan', 'fa fa-group', 2),
(7, 'Pembayaran', '#', 'fa fa-money', 0),
(8, 'Data Pembayaran', 'pembayaran/datapembayaran', 'fa fa-table', 7),
(9, 'Laporan', '#', 'fa fa-file-pdf-o', 0),
(12, 'Laporan Pembayaran', 'cetak', 'fa fa-file-pdf-o', 9),
(14, 'Pengaduan', 'pengaduan', 'fa fa-gavel', 0),
(16, 'Pembayaran', 'pembayaran', 'fa fa-credit-card', 7),
(19, 'Konfirmasi Pembayaran', 'konfirmasi', 'fa fa-check', 7),
(20, 'User Aplikasi', 'user', 'fa fa-users', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idadmin` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `root` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idadmin`, `nama_lengkap`, `username`, `password`, `root`) VALUES
(1, 'Eka Mahendra BagasKara', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `idgolongan` int(11) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `gol1` varchar(30) NOT NULL,
  `gol2` varchar(30) NOT NULL,
  `gol3` varchar(30) NOT NULL,
  `biaya_air` varchar(11) NOT NULL,
  `biaya_adm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`idgolongan`, `golongan`, `gol1`, `gol2`, `gol3`, `biaya_air`, `biaya_adm`) VALUES
(1, 'RMT', '500', '650', '850', '1000', '5000'),
(2, 'SOS', '300', '300', '500', '500', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konfirmasi`
--

CREATE TABLE `tb_konfirmasi` (
  `id` int(20) NOT NULL,
  `id_pelanggan` varchar(40) NOT NULL,
  `kode_bayar` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `bukti_tf` varchar(40) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `no_pelanggan` varchar(15) NOT NULL,
  `idgolongan` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`no_pelanggan`, `idgolongan`, `nama_lengkap`) VALUES
('14060001', 1, 'P SUGIONO'),
('14060002', 2, 'SDN PRONOJIWO 01'),
('14060003', 1, 'P PAIDI'),
('14060004', 1, 'DAMIYEM'),
('14060005', 1, 'ANANG BASUKI'),
('14060091', 1, 'P SIAMAN'),
('14060092', 1, 'YULI R / NENEK'),
('14060093', 1, 'RIKY'),
('14060104', 1, 'SURATINI'),
('14060113', 1, 'MISTINI'),
('14060114', 1, 'NGATIMIN'),
('14060115', 1, 'PAIRIN'),
('14060118', 1, 'DONI CATUR S'),
('14060119', 1, 'SUPANGAT'),
('14060120', 1, 'SUGIYANTO BAN'),
('14060121', 1, 'ANDI SAMI\'AN'),
('14060122', 1, 'SUPARMI'),
('14060123', 1, 'ISDIANTO'),
('14060124', 1, 'SARIATI'),
('14060125', 1, 'MULYADI'),
('14060126', 1, 'SUBAIDAH'),
('14060127', 1, 'MARDI'),
('14060128', 1, 'MOCH FIRDAUS U'),
('14060129', 1, 'P BARI'),
('14060149', 1, 'MISENAN'),
('15060065', 1, 'SUGENG TANI SUBUR'),
('15060066', 1, 'GINO'),
('15060067', 1, 'PITONO'),
('15060068', 1, 'MUSTAWAR'),
('15060070', 1, 'LISWANTO'),
('15060071', 1, 'P KEMIN'),
('15060072', 1, 'MOCH AYON'),
('15060073', 1, 'BAGONG KAYU'),
('15060074', 1, 'SULIONO / MARMEN'),
('15060095', 1, 'RIANTO BS'),
('15060130', 1, 'MANGGAR KRISDIANTO'),
('15060131', 1, 'WIWIT KURNIAWAN'),
('15060132', 1, 'SUTINAH'),
('15060133', 1, 'HEMANTO'),
('15060134', 1, 'DEDIK AGUS W'),
('15060135', 1, 'YUYUN AGUSTYANIK'),
('15060136', 1, 'WAHYONO'),
('15060137', 1, 'NOVIANTO'),
('15060138', 1, 'ATIM'),
('15060139', 1, 'NONO'),
('15060140', 1, 'AMINAH'),
('15060141', 1, 'PONIDI'),
('15060142', 1, 'PURNOMO'),
('16060006', 1, 'SUWAJI'),
('16060007', 1, 'SUNARKO'),
('16060008', 1, 'KARWONO JH'),
('16060009', 1, 'SUTAMSO'),
('16060010', 1, 'WAHYU MUSTAKIM'),
('16060011', 1, 'ROCHMAD'),
('16060012', 1, 'DWI SUWONO'),
('16060013', 1, 'GIANTO'),
('16060014', 1, 'MESERAN'),
('16060015', 1, 'MISRI'),
('16060016', 1, 'AGUS/KASIM'),
('16060017', 1, 'PURWOKO'),
('16060018', 1, 'P ARBI'),
('16060019', 1, 'SAIFUL RIZAL'),
('16060020', 1, 'B. MARSUNI'),
('16060021', 1, 'WAKIDI'),
('16060022', 1, 'MADUN'),
('16060023', 1, 'PAIDUN'),
('16060024', 1, 'SIONO'),
('16060025', 1, 'BAYU RIBOWO'),
('16060026', 1, 'BUANG'),
('16060027', 1, 'P SUWITO PANDE'),
('16060028', 1, 'P JARNO'),
('16060029', 1, 'P MUSTOREJO'),
('16060030', 1, 'TEGUH PRAYITNO'),
('16060031', 1, 'B KASIATI'),
('16060032', 1, 'PAINO'),
('16060033', 1, 'P JA\'I'),
('16060034', 1, 'KABUL BUDIONO'),
('16060035', 1, 'P CIKRAK'),
('16060036', 1, 'ISTONO'),
('16060037', 1, 'MISEMAN'),
('16060038', 1, 'SLAMET'),
('16060039', 1, 'HARIONO'),
('16060040', 1, 'PARTINI'),
('16060041', 1, 'JUARA'),
('16060042', 1, 'P BAMBANG'),
('16060043', 1, 'BAGONG'),
('16060044', 1, 'SUNYOTO'),
('16060045', 1, 'SUSI PAWUH'),
('16060046', 1, 'DJUMADI'),
('16060062', 1, 'DWI/BEJO'),
('16060063', 1, 'SUKES'),
('16060064', 1, 'YOPY DARMANTO'),
('16060075', 1, 'P KAMID'),
('16060076', 1, 'EDY BASUKI'),
('16060077', 1, 'JUMINO'),
('16060078', 1, 'SULIS BENGKEL'),
('16060079', 1, 'DWI JUWARI'),
('16060080', 1, 'KARMINAH'),
('16060081', 1, 'PUPUT'),
('16060084', 1, 'P. WA\'IS'),
('16060085', 1, 'NURYANTI'),
('16060086', 1, 'M. YASIN'),
('16060094', 1, 'TAMINI'),
('16060146', 1, 'HARIONO UPT'),
('16060152', 1, 'drg. DINA EKA PUTRI, MDPPH'),
('17060090', 1, 'B MARIATI'),
('17070047', 1, 'B WASIS / SLAMET'),
('17070048', 1, 'JUMASRI'),
('17070049', 1, 'P LAM'),
('17070050', 1, 'TOTOK/SAMURI'),
('17070051', 1, 'HARIADI'),
('17070052', 1, 'SUKADI/B GIYEM'),
('17070053', 1, 'P SUKADI'),
('17070054', 1, 'B MI\'AH'),
('17070055', 1, 'P RIONO PRANOTO'),
('17070056', 1, 'RIANTO/OGLEK'),
('17070057', 1, 'SIAMIN'),
('17070058', 1, 'NURIYANTO'),
('17070059', 1, 'MARIYAM'),
('17070060', 1, 'YUDI'),
('17070061', 1, 'P ARSAN'),
('17070069', 1, 'KANTOR TNBTS'),
('17070082', 1, 'YUDI T.B.'),
('17070083', 1, 'BAMBANG G PRASOJO'),
('17070087', 1, 'PU\'AH'),
('17070088', 1, 'NGADIONO'),
('17070089', 1, 'SLAMET SETYABUDI'),
('17070143', 1, 'MARKIJAH'),
('17070144', 1, 'MOCH SOLIKIDIN'),
('17070145', 1, 'SUWANDI'),
('17070147', 1, 'HERU'),
('17070148', 1, 'PAIDI/BOINEM'),
('22090096', 1, 'NYONO'),
('22090097', 1, 'SUGIYANTO/GITO'),
('22090098', 1, 'ANTO'),
('22090099', 1, 'TUKIMIN'),
('22090100', 1, 'TIASIH'),
('22090101', 1, 'RIANI'),
('22090102', 1, 'TIAMI'),
('22090103', 1, 'SRIAYEM'),
('22090105', 1, 'YOYOK'),
('22090106', 1, 'SUYONO'),
('22090107', 1, 'NURHOLIS'),
('22090108', 1, 'NORIHARIYANTO'),
('22090109', 1, 'YATI SOFIANINGSIH'),
('22090110', 1, 'IMAM'),
('22090111', 1, 'RIBUT HARTINI'),
('22090112', 1, 'WAHYU HIDAYAT'),
('22090116', 1, 'SUJANATI'),
('22090117', 1, 'ALIMAH'),
('22090150', 1, 'FANDI ACHMAD'),
('22090151', 1, 'VITA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `kode_bayar` varchar(15) NOT NULL,
  `no_pelanggan` varchar(10) NOT NULL,
  `bulan_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(40) NOT NULL,
  `gol1_bayar` int(40) NOT NULL,
  `gol2_bayar` int(40) NOT NULL,
  `gol3_bayar` int(40) NOT NULL,
  `total_bayar` int(40) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `status_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`kode_bayar`, `no_pelanggan`, `bulan_bayar`, `jumlah_bayar`, `gol1_bayar`, `gol2_bayar`, `gol3_bayar`, `total_bayar`, `tanggal_bayar`, `status_bayar`) VALUES
('PA2007071143', '14060001', '2020-06-25', 0, 5000, 26000, 0, 36000, '2020-07-11', 'Belum Lunas'),
('PA2007071149', '14060002', '2020-06-25', 0, 3000, 12000, 25000, 45000, '2020-07-11', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id` int(40) NOT NULL,
  `no_pelanggan` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `root` int(10) NOT NULL,
  `status_no` varchar(50) NOT NULL,
  `imageurl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id`, `no_pelanggan`, `nama`, `alamat`, `tanggal`, `keluhan`, `status`, `root`, `status_no`, `imageurl`) VALUES
(1, '', 'Bagas', 'Jl. Kauman', '2020-04-07', 'pipa bocor', 'Dikerjakan', 3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `idptgs` int(11) NOT NULL,
  `nama_petugas` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `root` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`idptgs`, `nama_petugas`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `nohp`, `email`, `password`, `root`) VALUES
(1, 'Farhan Affandi', 'Malang', '2020-04-22', 'Laki-laki', 'Akordion', '08765', 'ndip@gmail.com', '12345678', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tarif`
--

CREATE TABLE `tb_tarif` (
  `id_tarif` int(11) NOT NULL,
  `no_pelanggan` varchar(20) NOT NULL,
  `idgolongan` int(11) NOT NULL,
  `bulan_rekening` varchar(20) NOT NULL,
  `mawal` varchar(10) NOT NULL,
  `makhir` varchar(10) NOT NULL,
  `gol1` varchar(30) NOT NULL,
  `gol2` varchar(30) NOT NULL,
  `gol3` varchar(30) NOT NULL,
  `pemakaian` varchar(10) NOT NULL,
  `denda` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `input_oleh` int(11) NOT NULL,
  `tanggal_data` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tarif`
--

INSERT INTO `tb_tarif` (`id_tarif`, `no_pelanggan`, `idgolongan`, `bulan_rekening`, `mawal`, `makhir`, `gol1`, `gol2`, `gol3`, `pemakaian`, `denda`, `total_bayar`, `input_oleh`, `tanggal_data`, `status`) VALUES
(46, '14060001', 1, '2020-06-25', '0', '50', '10', '40', '0', '50', '', '55000', 1, '2020-07-11', 'Belum Lunas'),
(47, '14060001', 1, '2020-07-25', '50', '120', '10', '40', '20', '70', '', '75000', 1, '2020-07-11', 'Belum bayar'),
(48, '14060002', 2, '2020-06-25', '0', '100', '10', '40', '50', '100', '', '55000', 1, '2020-07-11', 'Belum Lunas'),
(49, '14060002', 2, '2020-07-25', '100', '120', '10', '10', '0', '20', '', '15000', 1, '2020-07-11', 'Belum bayar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `notlp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `root` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `notlp`, `email`, `password`, `root`) VALUES
(1, 'bagas', '08123123112', 'bagas@gmail.com', '1231237132', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`idgolongan`);

--
-- Indexes for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`no_pelanggan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`kode_bayar`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`idptgs`);

--
-- Indexes for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `idgolongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `idptgs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
