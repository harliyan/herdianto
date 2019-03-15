-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for statistik
CREATE DATABASE IF NOT EXISTS `statistik` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `statistik`;

-- Dumping structure for table statistik.tb_desa
CREATE TABLE IF NOT EXISTS `tb_desa` (
  `id_desa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_desa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_desa: ~0 rows (approximately)
DELETE FROM `tb_desa`;
/*!40000 ALTER TABLE `tb_desa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_desa` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_jarak_desa
CREATE TABLE IF NOT EXISTS `tb_jarak_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa_awal` int(11) DEFAULT NULL,
  `id_desa_akhir` int(11) DEFAULT NULL,
  `jarak` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_jarak_desa: ~0 rows (approximately)
DELETE FROM `tb_jarak_desa`;
/*!40000 ALTER TABLE `tb_jarak_desa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_jarak_desa` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_kependudukan
CREATE TABLE IF NOT EXISTS `tb_kependudukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `laki_laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_kependudukan: ~2 rows (approximately)
DELETE FROM `tb_kependudukan`;
/*!40000 ALTER TABLE `tb_kependudukan` DISABLE KEYS */;
INSERT INTO `tb_kependudukan` (`id`, `id_desa`, `laki_laki`, `perempuan`, `tahun`) VALUES
	(1, 0, 1212, 3131, '2018');
/*!40000 ALTER TABLE `tb_kependudukan` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_luas_wilayah
CREATE TABLE IF NOT EXISTS `tb_luas_wilayah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) DEFAULT NULL,
  `luas_wilayah` int(11) DEFAULT '0',
  `tanah_sawah` int(11) DEFAULT '0',
  `tanah_kering` int(11) DEFAULT '0',
  `tahun` year(4) DEFAULT '2000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_luas_wilayah: ~0 rows (approximately)
DELETE FROM `tb_luas_wilayah`;
/*!40000 ALTER TABLE `tb_luas_wilayah` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_luas_wilayah` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_mutasi_kependudukan
CREATE TABLE IF NOT EXISTS `tb_mutasi_kependudukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `jenis_mutasi` enum('kematian','kelahiran','datang','pergi') NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_mutasi_kependudukan: ~0 rows (approximately)
DELETE FROM `tb_mutasi_kependudukan`;
/*!40000 ALTER TABLE `tb_mutasi_kependudukan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_mutasi_kependudukan` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_panen_produksi
CREATE TABLE IF NOT EXISTS `tb_panen_produksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) DEFAULT NULL,
  `kuas_panen` int(11) DEFAULT NULL,
  `rata_rata_produksi` int(11) DEFAULT NULL,
  `produksi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_panen_produksi: ~0 rows (approximately)
DELETE FROM `tb_panen_produksi`;
/*!40000 ALTER TABLE `tb_panen_produksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_panen_produksi` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_pembagian_desa
CREATE TABLE IF NOT EXISTS `tb_pembagian_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `dukuh` int(11) NOT NULL DEFAULT '0',
  `dusun` int(11) NOT NULL DEFAULT '0',
  `rw` int(11) NOT NULL DEFAULT '0',
  `rt` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) NOT NULL DEFAULT '2000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_pembagian_desa: ~0 rows (approximately)
DELETE FROM `tb_pembagian_desa`;
/*!40000 ALTER TABLE `tb_pembagian_desa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pembagian_desa` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_pln_pdam
CREATE TABLE IF NOT EXISTS `tb_pln_pdam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) DEFAULT NULL,
  `rumah_tangga` int(11) DEFAULT NULL,
  `pelanggan_pln` int(11) DEFAULT NULL,
  `pelanggan_pdam` int(11) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_pln_pdam: ~0 rows (approximately)
DELETE FROM `tb_pln_pdam`;
/*!40000 ALTER TABLE `tb_pln_pdam` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pln_pdam` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_tanah_bengkok
CREATE TABLE IF NOT EXISTS `tb_tanah_bengkok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_desa` int(11) NOT NULL DEFAULT '0',
  `bengkok_sawah` int(11) NOT NULL DEFAULT '0',
  `bengkok_lahan_kering` int(11) NOT NULL DEFAULT '0',
  `kas_sawah` int(11) NOT NULL DEFAULT '0',
  `kas_lahan_kering` int(11) NOT NULL DEFAULT '0',
  `tahun` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tb_tanah_bengkok: ~0 rows (approximately)
DELETE FROM `tb_tanah_bengkok`;
/*!40000 ALTER TABLE `tb_tanah_bengkok` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tanah_bengkok` ENABLE KEYS */;

-- Dumping structure for table statistik.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `data_status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nip` (`nip`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table statistik.tb_user: ~4 rows (approximately)
DELETE FROM `tb_user`;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`id`, `username`, `password`, `nip`, `nama`, `pangkat_golongan`, `tempat_lahir`, `tanggal_lahir`, `pendidikan`, `jabatan`, `unit_kerja`, `jenis_kelamin`, `level`, `pass_status`, `data_status`) VALUES
	(1, 'admin', 'e223245ec36a61838f6d16ce98cc9add5221d46d', '199212270216013122', 'Muhammad Fahmi Mukhlishin, S.Kom.', 'q', 'q', '2018-09-26', 'q', '-', '-', 'L', 'admin', 1, 1),
	(6, '199212270216012022', 'e223245ec36a61838f6d16ce98cc9add5221d46d', '199212270216012022', 'perawat 1', '1', '1', '2018-09-21', '1', 'Perawat Terampil', 'ekonomi', 'L', '', 0, 1),
	(9, '198501142010122004', 'e223245ec36a61838f6d16ce98cc9add5221d46d', '198501142010122004', 'ada', NULL, NULL, NULL, NULL, 'Perawat Penyelia', NULL, NULL, '', 0, 0),
	(13, '199411150218011364', '', '198101010216011017', 'ada', '-', '', '0000-00-00', '', '', '', '', '', 0, 0);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

-- Dumping structure for table statistik.tr_kependudukan_umur
CREATE TABLE IF NOT EXISTS `tr_kependudukan_umur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kependudukan` int(11) DEFAULT NULL,
  `umur` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tr_kependudukan_umur: ~0 rows (approximately)
DELETE FROM `tr_kependudukan_umur`;
/*!40000 ALTER TABLE `tr_kependudukan_umur` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_kependudukan_umur` ENABLE KEYS */;

-- Dumping structure for table statistik.tr_luas_tanah_kering
CREATE TABLE IF NOT EXISTS `tr_luas_tanah_kering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_luas_wilayah` int(11) DEFAULT NULL,
  `perkarangan_bangunan` int(11) DEFAULT NULL,
  `tegal_kebun` int(11) DEFAULT NULL,
  `padang_gembala` int(11) DEFAULT NULL,
  `tambak_kolam` int(11) DEFAULT NULL,
  `hutan_negara` int(11) DEFAULT NULL,
  `perkebunan_negara` int(11) DEFAULT NULL,
  `lainnya` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tr_luas_tanah_kering: ~0 rows (approximately)
DELETE FROM `tr_luas_tanah_kering`;
/*!40000 ALTER TABLE `tr_luas_tanah_kering` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_luas_tanah_kering` ENABLE KEYS */;

-- Dumping structure for table statistik.tr_luas_tanah_sawah
CREATE TABLE IF NOT EXISTS `tr_luas_tanah_sawah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_luas_wilayah` int(11) DEFAULT '0',
  `irigasi_teknis` int(11) DEFAULT '0',
  `irigasi_setengah_teknis` int(11) DEFAULT '0',
  `irigasi_sederhana` int(11) DEFAULT '0',
  `hujan_tadah` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table statistik.tr_luas_tanah_sawah: ~0 rows (approximately)
DELETE FROM `tr_luas_tanah_sawah`;
/*!40000 ALTER TABLE `tr_luas_tanah_sawah` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_luas_tanah_sawah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
