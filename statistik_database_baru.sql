-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 04:27 PM
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
-- Database: `statistik_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `id_user`, `nip`, `nama`, `golongan`, `tempat_lahir`, `tanggal_lahir`, `pendidikan`, `jenis_kelamin`, `foto_profil`) VALUES
(1, 1, '21120114120021', 'Admin Sistem', '1', 'batang', '0000-00-00', 'S1', 'L', 'kepsek.png'),
(2, 2, '21120114120021', 'Camat', '1', 'boyolali', '0000-00-00', 'S1', 'L', 'kepsek.png'),
(3, 3, '21120114120021', 'Staf', '2', 'solo', '0000-00-00', 'S1', 'L', 'kepsek.png'),
(4, 4, '4', 'f', 'f', 'f', '2019-01-02', 'f', 'L', 'f'),
(5, 5, 'dd', 'dd', 'dd', 'dd', '2019-01-10', 'dd', 'L', 'dd'),
(6, 6, 'dd', 'dd', 'dd', 'dd', '2019-01-09', 'dd', 'P', 'dd'),
(7, 7, 'ff', 'ff', 'ff', 'ff', '2019-01-17', 'ff', 'P', 'fff'),
(8, 8, 'ef', 'fef', 'fe', 'fef', '0000-00-00', 'fw', 'L', 'fwf'),
(9, 9, '20000000000', 'mukjizat', 'Gol 2', 'purbalingga', '1996-12-12', 'S2', 'L', ''),
(10, 10, '123456789', 'Taufiq n', 'Gol 3', 'sng', '2003-11-12', 'D1', 'L', ''),
(11, 11, '1234567890', 'Taufiq n', 'Gol 4', 'purbalingga', '2004-03-02', 'D3', 'L', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_desa`) VALUES
(1, 'Glintang'),
(2, 'Jatisari'),
(3, 'Canden'),
(4, 'Senting'),
(5, 'Tempursari'),
(6, 'Sandi'),
(7, 'Demangan'),
(8, 'Kepoh'),
(9, 'Jagoan'),
(10, 'Babadan'),
(11, 'Tawengan'),
(12, 'Catur'),
(13, 'Ngaglik'),
(14, 'Troboso'),
(15, 'Cermo'),
(16, 'Nglembu');

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
  `id_desa` int(11) NOT NULL,
  `laki_laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kependudukan`
--

INSERT INTO `tb_kependudukan` (`id_desa`, `laki_laki`, `perempuan`, `tahun`) VALUES
(1, 1428, 1440, 2018),
(2, 1283, 1369, 2018),
(3, 2351, 2220, 2018),
(4, 1798, 1803, 2018),
(5, 1812, 1627, 2018),
(6, 2288, 2223, 2018),
(7, 1665, 1664, 2018),
(8, 1306, 1364, 2018),
(9, 1773, 1873, 2018),
(11, 1187, 1103, 2018),
(12, 1241, 1255, 2018),
(13, 1068, 1176, 2018),
(14, 1268, 1261, 2018),
(15, 1188, 1277, 2018),
(16, 1429, 1353, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kependudukan_umur`
--

CREATE TABLE `tb_kependudukan_umur` (
  `id` int(11) NOT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `umur` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kependudukan_umur`
--

INSERT INTO `tb_kependudukan_umur` (`id`, `id_desa`, `umur`, `jenis_kelamin`, `jumlah`) VALUES
(3, 1, '0-4', 'L', 102),
(4, 1, '0-4', 'P', 87),
(5, 1, '5-9', 'L', 115),
(6, 1, '5-9', 'P', 103),
(7, 1, '10-14', 'L', 147),
(8, 1, '10-14', 'P', 108),
(9, 1, '15-19', 'L', 147),
(10, 1, '15-19', 'P', 120),
(11, 1, '20-24', 'L', 101),
(12, 1, '20-24', 'P', 86),
(13, 1, '25-29', 'L', 86),
(14, 1, '25-29', 'P', 89),
(17, 2, '0-4', 'L', 96),
(18, 2, '0-4', 'P', 88),
(19, 2, '5-9', 'L', 115),
(20, 2, '5-9', 'P', 103),
(21, 2, '10-14', 'L', 147),
(22, 2, '10-14', 'P', 108),
(23, 2, '15-19', 'L', 114),
(24, 2, '15-19', 'P', 113),
(25, 2, '20-24', 'L', 90),
(26, 2, '20-24', 'P', 81),
(27, 2, '25-29', 'L', 86),
(28, 2, '25-29', 'P', 89),
(29, 3, '0-4', 'L', 166),
(30, 3, '0-4', 'P', 134),
(31, 3, '5-9', 'L', 189),
(32, 3, '5-9', 'P', 159),
(33, 3, '10-14', 'L', 240),
(34, 3, '10-14', 'P', 167),
(35, 3, '15-19', 'L', 208),
(36, 3, '15-19', 'P', 186),
(37, 3, '20-24', 'L', 165),
(38, 4, '20-24', 'P', 133),
(39, 3, '25-29', 'L', 141),
(40, 3, '25-29', 'P', 138),
(41, 4, '0-4', 'L', 128),
(42, 4, '0-4', 'P', 109),
(43, 4, '5-9', 'L', 145),
(44, 4, '5-9', 'P', 129),
(45, 4, '10-14', 'L', 184),
(46, 4, '10-14', 'P', 135),
(47, 4, '15-19', 'L', 159),
(48, 4, '15-19', 'P', 151),
(49, 4, '20-24', 'L', 126),
(50, 4, '20-24', 'P', 108),
(51, 4, '25-29', 'L', 108),
(52, 4, '25-29', 'P', 112),
(53, 5, '0-4', 'L', 135),
(54, 5, '0-4', 'P', 102),
(55, 5, '5-9', 'L', 146),
(56, 5, '5-9', 'P', 119),
(57, 5, '10-14', 'L', 187),
(58, 5, '10-14', 'P', 126),
(59, 5, '15-19', 'L', 159),
(60, 5, '15-19', 'P', 136),
(61, 5, '20-24', 'L', 126),
(62, 5, '20-24', 'P', 97),
(63, 5, '25-29', 'L', 108),
(64, 5, '25-29', 'P', 100),
(65, 6, '0-4', 'L', 166),
(66, 6, '0-4', 'P', 139),
(67, 6, '5-9', 'L', 183),
(68, 6, '5-9', 'P', 159),
(69, 6, '10-14', 'L', 233),
(70, 6, '10-14', 'P', 167),
(71, 6, '15-19', 'L', 202),
(72, 6, '15-19', 'P', 186),
(73, 6, '20-24', 'L', 160),
(74, 6, '20-24', 'P', 133),
(75, 6, '25-29', 'L', 137),
(76, 6, '25-29', 'P', 138),
(77, 7, '0-4', 'L', 119),
(78, 7, '0-4', 'P', 100),
(79, 7, '5-9', 'L', 135),
(80, 7, '5-9', 'P', 118),
(81, 7, '10-14', 'L', 171),
(82, 7, '10-14', 'P', 124),
(83, 7, '15-19', 'L', 148),
(84, 7, '15-19', 'P', 138),
(85, 7, '20-24', 'L', 118),
(86, 7, '20-24', 'P', 99),
(87, 7, '25-29', 'L', 101),
(88, 7, '25-29', 'P', 102),
(89, 8, '0-4', 'L', 97),
(90, 8, '0-4', 'P', 86),
(91, 8, '5-9', 'L', 105),
(92, 8, '5-9', 'P', 97),
(93, 8, '10-14', 'L', 134),
(94, 8, '10-14', 'P', 101),
(95, 8, '15-19', 'L', 116),
(96, 8, '15-19', 'P', 113),
(97, 8, '20-24', 'L', 92),
(98, 8, '20-24', 'P', 81),
(99, 8, '25-29', 'L', 79),
(100, 8, '25-29', 'P', 84),
(101, 9, '0-4', 'L', 92),
(102, 9, '0-4', 'P', 114),
(103, 9, '5-9', 'L', 143),
(104, 9, '5-9', 'P', 134),
(105, 9, '10-14', 'L', 182),
(106, 9, '10-14', 'P', 141),
(107, 9, '15-19', 'L', 157),
(108, 9, '15-19', 'L', 157),
(109, 9, '20-24', 'L', 125),
(110, 9, '20-24', 'P', 113),
(111, 9, '25-29', 'L', 107),
(112, 9, '25-29', 'P', 116),
(113, 10, '0-4', 'L', 126),
(114, 10, '0-4', 'P', 93),
(115, 10, '5-9', 'L', 122),
(116, 10, '5-9', 'P', 110),
(117, 10, '10-14', 'L', 155),
(118, 10, '10-14', 'P', 116),
(119, 10, '15-19', 'L', 134),
(120, 10, '15-19', 'P', 129),
(121, 10, '20-24', 'L', 106),
(122, 10, '20-24', 'P', 93),
(123, 10, '25-29', 'L', 116),
(124, 10, '25-29', 'P', 123),
(125, 11, '0-4', 'L', 108),
(126, 11, '0-4', 'P', 67),
(127, 11, '5-9', 'L', 95),
(128, 11, '5-9', 'P', 79),
(129, 11, '10-14', 'L', 121),
(130, 11, '10-14', 'P', 83),
(131, 11, '15-19', 'L', 105),
(132, 11, '15-19', 'P', 93),
(133, 11, '20-24', 'L', 83),
(134, 11, '20-24', 'P', 66),
(135, 11, '25-29', 'L', 71),
(136, 11, '25-29', 'P', 69),
(137, 12, '0-4', 'L', 88),
(138, 12, '0-4', 'P', 75),
(139, 12, '5-9', 'L', 100),
(140, 12, '5-9', 'P', 90),
(141, 12, '10-14', 'L', 127),
(142, 12, '10-14', 'P', 94),
(143, 12, '15-19', 'L', 110),
(144, 12, '15-19', 'P', 105),
(145, 12, '20-24', 'L', 87),
(146, 12, '20-24', 'P', 75),
(147, 12, '25-29', 'L', 75),
(148, 12, '25-29', 'P', 78),
(149, 13, '0-4', 'L', 85),
(150, 13, '0-4', 'P', 82),
(151, 13, '5-9', 'L', 85),
(152, 13, '5-9', 'P', 83),
(153, 13, '10-14', 'L', 108),
(154, 13, '10-14', 'P', 87),
(155, 13, '15-19', 'L', 94),
(156, 13, '15-19', 'P', 97),
(157, 13, '20-24', 'L', 74),
(158, 13, '20-24', 'P', 70),
(159, 13, '25-29', 'L', 64),
(160, 13, '25-29', 'P', 72),
(161, 14, '0-4', 'L', 90),
(162, 14, '0-4', 'P', 80),
(163, 14, '5-9', 'L', 102),
(164, 14, '5-9', 'P', 90),
(165, 14, '10-14', 'L', 130),
(166, 14, '10-14', 'P', 96),
(167, 14, '15-19', 'L', 113),
(168, 14, '15-19', 'P', 105),
(169, 14, '20-24', 'L', 89),
(170, 14, '20-24', 'P', 75),
(171, 14, '25-29', 'L', 77),
(172, 14, '25-29', 'P', 78),
(173, 15, '0-4', 'L', 90),
(174, 15, '85', 'P', 85),
(175, 15, '5-9', 'L', 105),
(176, 15, '5-9', 'P', 103),
(177, 15, '10-14', 'L', 136),
(178, 15, '10-14', 'P', 119),
(179, 1, '15-19', 'L', 110),
(180, 15, '15-19', 'P', 114),
(181, 15, '20-24', 'L', 90),
(182, 15, '20-24', 'P', 84),
(183, 15, '25-29', 'L', 72),
(184, 15, '25-29', 'P', 79),
(185, 16, '0-4', 'L', 102),
(186, 16, '0-4', 'P', 184),
(187, 16, '5-9', 'L', 115),
(188, 16, '5-9', 'P', 101),
(189, 16, '10-14', 'L', 149),
(190, 16, '10-14', 'P', 99),
(191, 16, '15-19', 'L', 126),
(192, 16, '15-19', 'P', 113),
(193, 16, '20-24', 'L', 100),
(194, 16, '20-24', 'P', 81),
(195, 16, '25-29', 'L', 86),
(196, 16, '25-29', 'P', 84),
(197, 1, '30-34', 'L', 95),
(198, 1, '30-34', 'P', 97),
(199, 1, '35-39', 'L', 89),
(200, 1, '35-39', 'P', 95),
(201, 1, '40-44', 'L', 105),
(202, 1, '40-44', 'P', 99),
(203, 2, '30-34', 'L', 85),
(204, 2, '30-34', 'P', 92),
(205, 2, '35-39', 'L', 80),
(206, 2, '35-39', 'P', 90),
(207, 2, '40-44', 'L', 105),
(208, 2, '40-44', 'P', 99),
(209, 3, '30-34', 'L', 156),
(210, 3, '30-34', 'P', 151),
(211, 3, '35-39', 'L', 146),
(212, 3, '35-39', 'P', 146),
(213, 3, '40-44', 'L', 171),
(214, 3, '40-44', 'P', 154);

-- --------------------------------------------------------

--
-- Table structure for table `tb_luas_tanah_kering`
--

CREATE TABLE `tb_luas_tanah_kering` (
  `id_desa` int(11) NOT NULL,
  `perkarangan_bangunan` int(11) DEFAULT NULL,
  `tegal_kebun` int(11) DEFAULT NULL,
  `padang_gembala` int(11) DEFAULT NULL,
  `tambak_kolam` int(11) DEFAULT NULL,
  `hutan_negara` int(11) DEFAULT NULL,
  `perkebunan_negara` int(11) DEFAULT NULL,
  `lainnya` int(11) DEFAULT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_luas_tanah_kering`
--

INSERT INTO `tb_luas_tanah_kering` (`id_desa`, `perkarangan_bangunan`, `tegal_kebun`, `padang_gembala`, `tambak_kolam`, `hutan_negara`, `perkebunan_negara`, `lainnya`, `jumlah`) VALUES
(1, 5, 1, 1, 1, 1, 1, 1, 1),
(2, 1234567, 123456, 3456, 2345, 234456576, 1324354, 243546, 243546789),
(7, 7345, 73245, 34, 56666, 6666, 7, 6666, 66),
(16, 656, 56, 56, 5, 65, 65, 65, 65);

-- --------------------------------------------------------

--
-- Table structure for table `tb_luas_tanah_sawah`
--

CREATE TABLE `tb_luas_tanah_sawah` (
  `id_desa` int(11) NOT NULL,
  `irigasi_teknis` int(11) DEFAULT '0',
  `irigasi_setengah_teknis` int(11) DEFAULT '0',
  `irigasi_sederhana` int(11) DEFAULT '0',
  `hujan_tadah` int(11) DEFAULT '0',
  `jumlah` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_luas_tanah_sawah`
--

INSERT INTO `tb_luas_tanah_sawah` (`id_desa`, `irigasi_teknis`, `irigasi_setengah_teknis`, `irigasi_sederhana`, `hujan_tadah`, `jumlah`) VALUES
(1, 710000, 50000, 140000, 23650, 1373650),
(2, 240000, 1114520, 1371650, 88240, 1373650),
(3, 581400, 0, 114600, 1085104, 1781104),
(4, 0, 25000, 22000, 1162780, 1209780),
(5, 0, 1160000, 0, 130496, 1290496),
(6, 652000, 0, 362135, 406078, 1420213),
(7, 0, 0, 51400, 1398600, 1450000),
(8, 0, 0, 0, 1303720, 1302800),
(9, 0, 0, 0, 1342800, 1342800),
(10, 0, 0, 560000, 1054628, 1614628),
(11, 753700, 30000, 381000, 221775, 1656475),
(12, 1074500, 0, 340000, 10000, 1424500),
(13, 0, 20000, 815000, 590360, 1425360),
(14, 0, 0, 0, 1170000, 1170000),
(15, 0, 110000, 40000, 500000, 650000),
(16, 0, 340000, 704020, 350000, 1394020);

-- --------------------------------------------------------

--
-- Table structure for table `tb_luas_wilayah`
--

CREATE TABLE `tb_luas_wilayah` (
  `id_desa` int(11) NOT NULL,
  `luas_wilayah` int(11) DEFAULT '0',
  `tanah_sawah` int(11) DEFAULT '0',
  `tanah_kering` int(11) DEFAULT '0',
  `tahun` year(4) DEFAULT '2018'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_luas_wilayah`
--

INSERT INTO `tb_luas_wilayah` (`id_desa`, `luas_wilayah`, `tanah_sawah`, `tanah_kering`, `tahun`) VALUES
(1, 2565000, 1373650, 1191350, 2018),
(2, 2846540, 1542760, 1303780, 2018),
(3, 3257830, 1781104, 1476726, 2018),
(4, 2398180, 1209780, 1188400, 2018),
(5, 2273670, 1290496, 983174, 2018),
(6, 3221445, 1420213, 1801232, 2018),
(7, 2816640, 1450000, 1366640, 2018),
(8, 2945110, 1303720, 1641390, 2018),
(9, 3123255, 1342800, 1780455, 2018),
(10, 3199440, 1614628, 1584812, 2018),
(11, 2943480, 1656475, 1287005, 2018),
(12, 2566350, 1424500, 1141850, 2018),
(13, 3288205, 1425360, 1862845, 2018),
(14, 3039435, 1170000, 1869435, 2018),
(15, 2910985, 650000, 2260985, 2018),
(16, 111, 111, 111, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi_kependudukan`
--

CREATE TABLE `tb_mutasi_kependudukan` (
  `id_desa` int(11) NOT NULL,
  `jenis_mutasi` enum('kematian','kelahiran','datang','pergi') NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mutasi_kependudukan`
--

INSERT INTO `tb_mutasi_kependudukan` (`id_desa`, `jenis_mutasi`, `jenis_kelamin`, `jumlah`, `tahun`) VALUES
(1, 'kelahiran', 'L', 10, 2018),
(2, 'kematian', 'L', 111, 2001),
(4, 'kematian', 'L', 455, 2018),
(15, 'kematian', 'L', 121, 2011);

-- --------------------------------------------------------

--
-- Table structure for table `tb_panen_produksi`
--

CREATE TABLE `tb_panen_produksi` (
  `id_desa` int(11) NOT NULL,
  `luas_panen` int(11) DEFAULT NULL,
  `rata_rata_produksi` int(11) DEFAULT NULL,
  `produksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_panen_produksi`
--

INSERT INTO `tb_panen_produksi` (`id_desa`, `luas_panen`, `rata_rata_produksi`, `produksi`) VALUES
(1, 358, 8160, 210528),
(2, 358, 8160, 243824),
(3, 382, 7820, 298724),
(4, 12, 1, 1),
(5, 238, 7020, 167076),
(6, 276, 7520, 20680),
(7, 260, 7360, 19130),
(8, 259, 7360, 190624),
(9, 248, 6904, 1712172),
(10, 305, 7280, 22204),
(11, 323, 8000, 25844),
(12, 346, 7920, 274032),
(13, 290, 7820, 22678),
(14, 234, 7020, 164268),
(15, 157, 6560, 102992),
(16, 11, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembagian_desa`
--

CREATE TABLE `tb_pembagian_desa` (
  `id_desa` int(11) NOT NULL,
  `dukuh` int(11) NOT NULL DEFAULT '0',
  `dusun` int(11) NOT NULL DEFAULT '0',
  `rw` int(11) NOT NULL DEFAULT '0',
  `rt` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) NOT NULL DEFAULT '2018'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembagian_desa`
--

INSERT INTO `tb_pembagian_desa` (`id_desa`, `dukuh`, `dusun`, `rw`, `rt`, `tahun`) VALUES
(1, 5, 2, 2, 18, 2018),
(2, 10, 10, 10, 10, 2018),
(3, 13, 4, 6, 37, 2018),
(4, 11, 3, 4, 19, 2018),
(5, 8, 3, 3, 12, 2018),
(6, 17, 4, 4, 23, 2018),
(7, 15, 3, 3, 16, 2018),
(8, 18, 3, 3, 21, 2018),
(9, 9, 4, 4, 21, 2018),
(10, 7, 4, 5, 24, 2018),
(11, 16, 3, 5, 20, 2018),
(12, 13, 3, 3, 20, 2018),
(13, 10, 3, 3, 18, 2018),
(14, 10, 3, 3, 19, 2018),
(15, 123, 12, 1, 1, 2018),
(16, 12, 3, 5, 20, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pln_pdam`
--

CREATE TABLE `tb_pln_pdam` (
  `id_desa` int(11) NOT NULL,
  `rumah_tangga` int(11) DEFAULT NULL,
  `pelanggan_pln` int(11) DEFAULT NULL,
  `pelanggan_pdam` int(11) DEFAULT NULL,
  `tahun` year(4) DEFAULT '2018'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pln_pdam`
--

INSERT INTO `tb_pln_pdam` (`id_desa`, `rumah_tangga`, `pelanggan_pln`, `pelanggan_pdam`, `tahun`) VALUES
(1, 835, 600, 447, 2018),
(2, 813, 610, 431, 2019),
(3, 1645, 1547, 127, 2018),
(4, 918, 800, 200, 2018),
(5, 1240, 1035, 670, 2018),
(6, 1396, 1211, 613, 2018),
(7, 957, 801, 235, 2018),
(8, 834, 834, 94, 2018),
(9, 1169, 1160, 579, 2018),
(10, 933, 934, 475, 2018),
(11, 710, 379, 751, 2018),
(12, 756, 502, 528, 2018),
(13, 668, 646, 404, 2018),
(14, 793, 586, 0, 2018),
(15, 929, 455, 4, 2018),
(16, 600, 600, 600, 2011);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanah_bengkok`
--

CREATE TABLE `tb_tanah_bengkok` (
  `id_tanah_bengkok` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `bengkok_sawah` decimal(10,4) DEFAULT NULL,
  `bengkok_lahan_kering` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `kas_sawah` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `kas_lahan_kering` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `tahun` year(4) DEFAULT '2018'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tanah_bengkok`
--

INSERT INTO `tb_tanah_bengkok` (`id_tanah_bengkok`, `id_desa`, `bengkok_sawah`, `bengkok_lahan_kering`, `kas_sawah`, `kas_lahan_kering`, `tahun`) VALUES
(2, 1, '67.0000', '7.0000', '7.0000', '7.0000', 2007),
(3, 3, '667.0000', '9.0000', '7676.0000', '76.0000', 0000),
(4, 7, '78.0000', '78.0000', '87.0000', '878.0000', 2007),
(5, 14, '78.0000', '7.0000', '7.0000', '7.0000', 2007),
(7, 8, '8.0000', '8.0000', '8.0000', '8.0000', 2008),
(10, 16, '1000.9999', '878.0000', '78.0000', '7878.0000', 1987),
(11, 12, '77.8800', '77.8800', '77.8800', '77.8800', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL DEFAULT 'camat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `privilege`, `bagian`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin'),
(2, 'camat', '93b89e6160d6c85d709954ce733d5eec131ab0a0', 'camat', 'camat'),
(3, 'wilayah', '8f5dc3bdc21a52f7d7e2dc490edabddd694e1091', 'staf', 'wilayah'),
(4, 'pemerintah', '5e4ee77a02a255342f6cf0fa66fb71b2ccadfb1b', 'staf', 'pemerintah'),
(5, 'penduduk', '230ec8df3aca17589bbc37b1fa6b1b37d295ef18', 'staf', 'penduduk'),
(6, 'pertanahan', '09661562ef1ba7f49247c59ca9f03f1b5bd5490e', 'staf', 'pertanahan'),
(7, 'pertanian', 'ad228250e4a6e16050be99fe165c3f11377a0984', 'staf', 'pertanian'),
(8, 'listrik', 'bfd6e0da9248f7944d3c425987727296ca20ae64', 'staf', 'listrik'),
(9, 'Mukjizat', '8cb2237d0679ca88db6464eac60da96345513964', 'staf', 'penduduk'),
(10, 'taufiq', '8cb2237d0679ca88db6464eac60da96345513964', 'staf', 'wilayah'),
(11, 'taufiq', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'staf', 'wilayah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

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
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_kependudukan_umur`
--
ALTER TABLE `tb_kependudukan_umur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_luas_tanah_kering`
--
ALTER TABLE `tb_luas_tanah_kering`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_luas_tanah_sawah`
--
ALTER TABLE `tb_luas_tanah_sawah`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_luas_wilayah`
--
ALTER TABLE `tb_luas_wilayah`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_mutasi_kependudukan`
--
ALTER TABLE `tb_mutasi_kependudukan`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_panen_produksi`
--
ALTER TABLE `tb_panen_produksi`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_pembagian_desa`
--
ALTER TABLE `tb_pembagian_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_pln_pdam`
--
ALTER TABLE `tb_pln_pdam`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_tanah_bengkok`
--
ALTER TABLE `tb_tanah_bengkok`
  ADD PRIMARY KEY (`id_tanah_bengkok`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_jarak_desa`
--
ALTER TABLE `tb_jarak_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kependudukan`
--
ALTER TABLE `tb_kependudukan`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_kependudukan_umur`
--
ALTER TABLE `tb_kependudukan_umur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `tb_luas_tanah_kering`
--
ALTER TABLE `tb_luas_tanah_kering`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_luas_tanah_sawah`
--
ALTER TABLE `tb_luas_tanah_sawah`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_luas_wilayah`
--
ALTER TABLE `tb_luas_wilayah`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_mutasi_kependudukan`
--
ALTER TABLE `tb_mutasi_kependudukan`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_panen_produksi`
--
ALTER TABLE `tb_panen_produksi`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pembagian_desa`
--
ALTER TABLE `tb_pembagian_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pln_pdam`
--
ALTER TABLE `tb_pln_pdam`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_tanah_bengkok`
--
ALTER TABLE `tb_tanah_bengkok`
  MODIFY `id_tanah_bengkok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD CONSTRAINT `data_admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_panen_produksi`
--
ALTER TABLE `tb_panen_produksi`
  ADD CONSTRAINT `tb_panen_produksi_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
