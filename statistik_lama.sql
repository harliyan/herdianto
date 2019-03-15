-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 02:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statistik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jarak_desa`
--

CREATE TABLE `tb_jarak_desa` (
  `id` int(11) NOT NULL,
  `id_desa_awal` int(11) DEFAULT NULL,
  `id_desa_akhir` int(11) DEFAULT NULL,
  `jarak` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kependudukan`
--

CREATE TABLE `tb_kependudukan` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `laki_laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kependudukan`
--

INSERT INTO `tb_kependudukan` (`id`, `id_desa`, `laki_laki`, `perempuan`, `tahun`) VALUES
(1, 0, 1212, 3131, 2018),
(2, 0, 123, 567, 0000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_luas_wilayah`
--

CREATE TABLE `tb_luas_wilayah` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `luas_wilayah` int(11) DEFAULT '0',
  `tanah_sawah` int(11) DEFAULT '0',
  `tanah_kering` int(11) DEFAULT '0',
  `tahun` year(4) DEFAULT '2000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi_kependudukan`
--

CREATE TABLE `tb_mutasi_kependudukan` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `jenis_mutasi` enum('kematian','kelahiran','datang','pergi') NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_panen_produksi`
--

CREATE TABLE `tb_panen_produksi` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `kuas_panen` int(11) DEFAULT NULL,
  `rata_rata_produksi` int(11) DEFAULT NULL,
  `produksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembagian_desa`
--

CREATE TABLE `tb_pembagian_desa` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `dukuh` int(11) NOT NULL DEFAULT '0',
  `dusun` int(11) NOT NULL DEFAULT '0',
  `rw` int(11) NOT NULL DEFAULT '0',
  `rt` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) NOT NULL DEFAULT '2000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pln_pdam`
--

CREATE TABLE `tb_pln_pdam` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `rumah_tangga` int(11) DEFAULT NULL,
  `pelanggan_pln` int(11) DEFAULT NULL,
  `pelanggan_pdam` int(11) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanah_bengkok`
--

CREATE TABLE `tb_tanah_bengkok` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `bengkok_sawah` int(11) NOT NULL DEFAULT '0',
  `bengkok_lahan_kering` int(11) NOT NULL DEFAULT '0',
  `kas_sawah` int(11) NOT NULL DEFAULT '0',
  `kas_lahan_kering` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pangkat_golongan` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `unit_kerja` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `level` enum('admin','kepala','staf') DEFAULT NULL,
  `pass_status` int(11) DEFAULT '0',
  `data_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nip`, `nama`, `pangkat_golongan`, `tempat_lahir`, `tanggal_lahir`, `pendidikan`, `jabatan`, `unit_kerja`, `jenis_kelamin`, `level`, `pass_status`, `data_status`) VALUES
(1, 'admin', 'e223245ec36a61838f6d16ce98cc9add5221d46d', '199212270216013122', 'Muhammad Fahmi Mukhlishin, S.Kom.', 'q', 'q', '2018-09-26', 'q', '-', '-', 'L', 'admin', 1, 1),
(6, '199212270216012022', 'e223245ec36a61838f6d16ce98cc9add5221d46d', '199212270216012022', 'perawat 1', '1', '1', '2018-09-21', '1', 'Perawat Terampil', 'ekonomi', 'L', '', 0, 1),
(9, '198501142010122004', 'e223245ec36a61838f6d16ce98cc9add5221d46d', '198501142010122004', 'ada', NULL, NULL, NULL, NULL, 'Perawat Penyelia', NULL, NULL, '', 0, 0),
(13, '199411150218011364', '', '198101010216011017', 'ada', '-', '', '0000-00-00', '', '', '', '', '', 0, 0),
(14, '21120114120023', '6e739954c81278ab4413f2730bb30ec5110fcedb', '21120114120023', 'Tes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'staf', 0, 0),
(15, '12345', '6e739954c81278ab4413f2730bb30ec5110fcedb', '12345', 'qwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'staf', 0, 0),
(16, '211211', '6e739954c81278ab4413f2730bb30ec5110fcedb', '211211', 'aku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kepala', 0, 0),
(17, '123456789', 'e223245ec36a61838f6d16ce98cc9add5221d46d', '123456789', 'Herdianto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'staf', 0, 0),
(18, '199956475362', 'fc76fccab605652687f03aa6c4b3528df7b38b27', '199956475362', 'Aryo Handika  Maulana, S.T.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kepala', 0, 0),
(19, '21120114120020', '6e739954c81278ab4413f2730bb30ec5110fcedb', '21120114120020', 'Harliyan , S.T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kepala', 0, 0),
(21, '12', 'e0a6c970dede87b04a788c476e5105a0940cb4e2', '12', '1235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'staf', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tr_kependudukan_umur`
--

CREATE TABLE `tr_kependudukan_umur` (
  `id` int(11) NOT NULL,
  `id_kependudukan` int(11) DEFAULT NULL,
  `umur` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_luas_tanah_kering`
--

CREATE TABLE `tr_luas_tanah_kering` (
  `id` int(11) NOT NULL,
  `id_luas_wilayah` int(11) DEFAULT NULL,
  `perkarangan_bangunan` int(11) DEFAULT NULL,
  `tegal_kebun` int(11) DEFAULT NULL,
  `padang_gembala` int(11) DEFAULT NULL,
  `tambak_kolam` int(11) DEFAULT NULL,
  `hutan_negara` int(11) DEFAULT NULL,
  `perkebunan_negara` int(11) DEFAULT NULL,
  `lainnya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_luas_tanah_sawah`
--

CREATE TABLE `tr_luas_tanah_sawah` (
  `id` int(11) NOT NULL,
  `id_luas_wilayah` int(11) DEFAULT '0',
  `irigasi_teknis` int(11) DEFAULT '0',
  `irigasi_setengah_teknis` int(11) DEFAULT '0',
  `irigasi_sederhana` int(11) DEFAULT '0',
  `hujan_tadah` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_jarak_desa`
--
ALTER TABLE `tb_jarak_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kependudukan`
--
ALTER TABLE `tb_kependudukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_luas_wilayah`
--
ALTER TABLE `tb_luas_wilayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mutasi_kependudukan`
--
ALTER TABLE `tb_mutasi_kependudukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_panen_produksi`
--
ALTER TABLE `tb_panen_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembagian_desa`
--
ALTER TABLE `tb_pembagian_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pln_pdam`
--
ALTER TABLE `tb_pln_pdam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tanah_bengkok`
--
ALTER TABLE `tb_tanah_bengkok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tr_kependudukan_umur`
--
ALTER TABLE `tr_kependudukan_umur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_luas_tanah_kering`
--
ALTER TABLE `tr_luas_tanah_kering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_luas_tanah_sawah`
--
ALTER TABLE `tr_luas_tanah_sawah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jarak_desa`
--
ALTER TABLE `tb_jarak_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kependudukan`
--
ALTER TABLE `tb_kependudukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_luas_wilayah`
--
ALTER TABLE `tb_luas_wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mutasi_kependudukan`
--
ALTER TABLE `tb_mutasi_kependudukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_panen_produksi`
--
ALTER TABLE `tb_panen_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembagian_desa`
--
ALTER TABLE `tb_pembagian_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pln_pdam`
--
ALTER TABLE `tb_pln_pdam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tanah_bengkok`
--
ALTER TABLE `tb_tanah_bengkok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tr_kependudukan_umur`
--
ALTER TABLE `tr_kependudukan_umur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_luas_tanah_kering`
--
ALTER TABLE `tr_luas_tanah_kering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_luas_tanah_sawah`
--
ALTER TABLE `tr_luas_tanah_sawah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
