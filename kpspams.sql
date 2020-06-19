-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 11:56 AM
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
(5, 'Tarif', 'tarif', 'fa fa-users', 0),
(6, 'Golongan', 'golongan', 'fa fa-users', 2),
(7, 'Pembayaran', '#', 'fa fa-money', 0),
(8, 'Data Pembayaran', 'pembayaran/datapembayaran', 'fa fa-table', 7),
(9, 'Laporan', '#', 'fa fa-file-pdf-o', 0),
(12, 'Laporan Pembayaran', 'cetak', 'fa fa-file-pdf-o', 9),
(14, 'Pengaduan', 'pengaduan', 'fa fa-gavel', 0),
(16, 'Pembayaran Manual', 'pembayaran', 'fa fa-credit-card', 7),
(19, 'Konfirmasi Pembayaran', 'konfirmasi', 'fa fa-check', 7);

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
  `biaya_air` varchar(30) NOT NULL,
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
  `nama` varchar(40) NOT NULL,
  `id_pelanggan` varchar(40) NOT NULL,
  `kode_bayar` varchar(30) NOT NULL,
  `nominal` varchar(40) NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bukti_tf` mediumblob NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `no_pelanggan` varchar(15) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `idgolongan` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`no_pelanggan`, `no_rekening`, `idgolongan`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pekerjaan`) VALUES
('P001', '123456', 1, 'Renita', 'Kediri', '2019-02-19', 'Jalan Ahmad Yani, no 55, Merjosari, Malang\r\n', 'Swasta'),
('P002', '33222', 2, 'Bagas', 'Malang', '1989-06-13', 'Jalan Joyo utomo barat no 6, Merjosari, Malang', 'wiraswasta'),
('P003', '787878', 1, 'Farhan Affandi', 'Jakarta', '1986-09-29', 'Kebon Jeruk 2', 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `kode_bayar` varchar(15) NOT NULL,
  `no_pelanggan` varchar(10) NOT NULL,
  `bulan_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` varchar(15) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `status_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`kode_bayar`, `no_pelanggan`, `bulan_bayar`, `jumlah_bayar`, `tanggal_bayar`, `status_bayar`) VALUES
('PA1903030179', 'P001', 'Februari 2019', '305000', '2019-03-01', 'Lunas'),
('PA1903030266', 'p001', 'Mei 2019', '205000', '2019-03-02', 'Lunas'),
('PA2004040956', 'P001', 'April 2020', '605000', '2020-04-09', 'Lunas'),
('PA2006061947', 'P002', '2020-06-25', '3000', '2020-06-19', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id` int(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `root` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id`, `nama`, `alamat`, `tanggal`, `keluhan`, `status`, `root`) VALUES
(1, 'Bagas', 'Jl. Kauman', '2020-04-07', 'pipa bocor', 'Dikerjakan', 3);

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
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `root` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`idptgs`, `nama_petugas`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `nohp`, `email`, `username`, `password`, `root`) VALUES
(1, 'Farhan', 'Malang', '2020-04-22', 'Laki-laki', 'Akordion', '0876543536221', 'ndip@gmail.com', 'ndip', '12345678', 2),
(5, 'bagas aja', 'lumajang', '1997-07-07', 'Laki-laki', 'Lumajang', '0810283018', 'bagas@gmail.com', 'bagas', '232323', 2);

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
(10, 'P001', 1, 'Februari 2019', '20', '50', '', '', '', '30', '', '305000', 1, '2019-03-01', 'Lunas'),
(11, 'P001', 1, 'Mei 2019', '20', '40', '', '', '', '20', '', '205000', 1, '2019-03-01', 'Lunas'),
(12, 'P001', 1, 'April 2020', '60', '120', '', '', '', '60', '', '605000', 1, '2020-04-09', 'Lunas'),
(16, 'P002', 2, 'Mei 2020', '60', '70', '', '', '', '10', '', '10000', 1, '2020-04-09', 'Belum bayar'),
(17, 'P001', 1, '2020-05-09', '70', '90', '', '', '', '20', '', '25000', 1, '2020-05-09', 'Belum bayar'),
(18, 'P001', 1, '2020-05-10', '70', '100', '', '', '', '30', '', '35000', 1, '2020-05-09', 'Belum bayar'),
(19, 'P001', 1, '2020-06-11', '70', '150', '', '', '', '80', '', '85000', 1, '2020-06-08', 'Belum bayar'),
(20, 'P001', 1, '2020-06-10', '150', '200', '', '', '', '50', '', '55000', 1, '2020-06-08', 'Belum bayar'),
(21, 'P002', 2, '2020-05-18', '250', '300', '10', '40', '0', '50', '', '30000', 1, '2020-06-18', 'Belum bayar'),
(22, 'P002', 2, '2020-06-25', '300', '400', '10', '40', '50', '100', '', '5100', 1, '2020-06-19', 'Belum Lunas'),
(23, 'P001', 1, '2020-05-25', '300', '370', '10', '40', '20', '70', '', '5070', 1, '2020-06-19', 'Belum bayar');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `idgolongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `idptgs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
