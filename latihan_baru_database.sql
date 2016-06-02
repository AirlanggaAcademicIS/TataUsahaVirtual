-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2016 at 05:37 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id_presensi` int(9) NOT NULL AUTO_INCREMENT,
  `id_log_tu` int(9) NOT NULL,
  `hari_absen` date NOT NULL,
  `keterangan_absen` text NOT NULL,
  PRIMARY KEY (`id_presensi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_presensi`, `id_log_tu`, `hari_absen`, `keterangan_absen`) VALUES
(1, 3, '2016-05-10', 'Sakit'),
(2, 4, '2016-05-11', 'Mengikuti lomba nasional'),
(3, 5, '2016-05-11', 'SAKIT BRO'),
(4, 6, '0000-00-00', '0'),
(5, 7, '0000-00-00', '0'),
(6, 8, '0000-00-00', '0'),
(7, 9, '0000-00-00', '0'),
(8, 10, '0000-00-00', '0'),
(9, 11, '0000-00-00', '0'),
(10, 12, '0000-00-00', '0'),
(11, 13, '0000-00-00', '0'),
(12, 14, '0000-00-00', '0'),
(13, 15, '0000-00-00', '0'),
(14, 20, '2016-10-10', 'Sakit'),
(15, 22, '2016-05-23', 'Saya merasa kurang enak badan'),
(16, 27, '2016-05-24', 'Sakit berat'),
(17, 28, '2016-05-24', 'Tidak bisa masuk'),
(18, 35, '2016-05-24', 'Sedang demam'),
(19, 38, '2015-03-23', 'sakit hati'),
(20, 40, '2013-12-24', '86r8o6r6r'),
(21, 1, '2016-05-03', 'Melakukan perjalanan ke barat'),
(22, 2, '2016-05-09', 'Melakukan perjalanan mencari kitab suci');

-- --------------------------------------------------------

--
-- Table structure for table `bantuan_fasilitas`
--

CREATE TABLE IF NOT EXISTS `bantuan_fasilitas` (
  `id_bantuan` int(9) NOT NULL AUTO_INCREMENT,
  `id_log_tu` int(9) NOT NULL,
  `dosen_wali` int(9) NOT NULL,
  `kepada_bagian` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_bantuan`),
  KEY `id_log_tu` (`id_log_tu`),
  KEY `dosen_wali` (`dosen_wali`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bantuan_fasilitas`
--

INSERT INTO `bantuan_fasilitas` (`id_bantuan`, `id_log_tu`, `dosen_wali`, `kepada_bagian`, `deskripsi`) VALUES
(2, 19, 1, 'Admin Lab', 'saya pinjam ruangan'),
(3, 23, 1, 'Admin Lab', 'Saya ingin meminjam speaker'),
(4, 36, 1, 'Sistem Informasi Fakultas', 'ttvtyvyt'),
(5, 37, 3, 'Sarana Prasana', 'nhjnuibiun'),
(6, 39, 1, 'Tata Usaha Pusat', 'huhuuuu'),
(7, 41, 1, 'Sistem Informasi Fakultas', 'Saya meminjam speaker');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE IF NOT EXISTS `dokumen` (
  `id_dokumen` int(9) NOT NULL AUTO_INCREMENT,
  `nip` varchar(15) NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `url_dokumen` text NOT NULL,
  `tanggal_upload` date NOT NULL,
  `jumlah_pendownload` int(9) NOT NULL,
  PRIMARY KEY (`id_dokumen`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `nip`, `nama_dokumen`, `url_dokumen`, `tanggal_upload`, `jumlah_pendownload`) VALUES
(1, '000001', 'Form Usulan Topik Skripsi', 'download/document/usulan topik skripsi prodi S1 SI format new 5.doc', '2016-05-09', 0),
(2, '000001', 'Jadwal Pelatihan Sertifikasi', 'download/document/Jadwal Pelatihan Sertifikasi.xlsx', '2016-05-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(9) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `telepon`, `email`) VALUES
(1, 'Pak Indra', '-', '-'),
(2, 'Pak Badrus', '-', '-'),
(3, 'Pak Kartono', '-', '-'),
(4, 'Pak Barry', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ganti_jadwal`
--

CREATE TABLE IF NOT EXISTS `ganti_jadwal` (
  `id_ganti_jadwal` int(9) NOT NULL AUTO_INCREMENT,
  `id_log_tu` int(9) NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL,
  `jumlah_sks` int(3) NOT NULL,
  `jumlah_mahasiswa` int(9) NOT NULL,
  `ruang_sebelumnya` varchar(30) NOT NULL,
  `ruang_request` varchar(30) NOT NULL,
  `jadwal_sebelumnya` varchar(30) NOT NULL,
  `jadwal_request` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ganti_jadwal`),
  KEY `id_log_tu` (`id_log_tu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ganti_jadwal`
--

INSERT INTO `ganti_jadwal` (`id_ganti_jadwal`, `id_log_tu`, `mata_kuliah`, `jumlah_sks`, `jumlah_mahasiswa`, `ruang_sebelumnya`, `ruang_request`, `jadwal_sebelumnya`, `jadwal_request`) VALUES
(1, 33, 'RPL', 4, 57, '312', '101', 'Senin 7-8', 'Jumat 9-10'),
(2, 34, 'SPK', 3, 48, '102', '321', 'Selasa 3-4', 'Kamis 1-2');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sidang`
--

CREATE TABLE IF NOT EXISTS `jadwal_sidang` (
  `id_jadwal_sidang` int(9) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `id_dosen` int(9) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `hari_sidang` date NOT NULL,
  `waktu_sidang` int(3) NOT NULL,
  `ruang_sidang` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jadwal_sidang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(9) NOT NULL AUTO_INCREMENT,
  `jenis_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`) VALUES
(1, 'Absensi'),
(2, 'Bantuan Fasilitas'),
(3, 'Pengajuan Proposal'),
(4, 'Ganti Jadwal');

-- --------------------------------------------------------

--
-- Table structure for table `log_tu`
--

CREATE TABLE IF NOT EXISTS `log_tu` (
  `id_log_tu` int(9) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `tanggal_log` datetime NOT NULL,
  `id_kategori_log` int(11) NOT NULL,
  `isi_log` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id_log_tu`),
  KEY `nim` (`nim`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `log_tu`
--

INSERT INTO `log_tu` (`id_log_tu`, `nim`, `tanggal_log`, `id_kategori_log`, `isi_log`, `status`) VALUES
(1, '081311633027', '2016-05-10 20:28:29', 1, 'Hello World!', 1),
(2, '081311633027', '2016-05-10 20:45:32', 1, 'Hello World!', 1),
(3, '081311633027', '2016-05-10 20:46:51', 1, 'Hallo Iqbal', 0),
(4, '081311633027', '2016-05-11 12:35:28', 1, '', 0),
(5, '081311633027', '2016-05-11 13:07:22', 1, '', 0),
(6, '081311633027', '2016-05-11 13:09:19', 1, '', 0),
(7, '081311633027', '2016-05-11 13:10:11', 1, '', 0),
(8, '081311633027', '2016-05-11 13:10:13', 1, '', 0),
(9, '081311633027', '2016-05-11 13:10:14', 1, '', 0),
(10, '081311633027', '2016-05-11 13:10:20', 1, '', 1),
(11, '081311633027', '2016-05-11 13:10:53', 1, '', 0),
(12, '081311633027', '2016-05-11 13:10:59', 1, '', 0),
(13, '081311633027', '2016-05-11 13:11:10', 1, '', 0),
(14, '081311633027', '2016-05-11 13:12:14', 1, '', 1),
(15, '081311633027', '2016-05-11 13:12:22', 1, '', 0),
(16, '081311633027', '2016-05-11 13:45:27', 2, '', 1),
(17, '081311633027', '2016-05-11 13:51:39', 2, '', 0),
(18, '081311633027', '2016-05-11 13:52:11', 2, '', 0),
(19, '081311633027', '2016-05-11 13:54:15', 2, '', 0),
(20, '081311633027', '2016-05-17 09:49:06', 1, '', 0),
(21, '081311633027', '2016-05-17 09:51:49', 2, '', 0),
(22, '081311633027', '2016-05-23 22:29:28', 1, '', 0),
(23, '081311633027', '2016-05-23 22:30:08', 2, '', 0),
(24, '081311633027', '2016-05-24 05:34:32', 1, '', 0),
(25, '081311633027', '2016-05-24 05:34:39', 1, '', 0),
(26, '081311633027', '2016-05-24 05:34:47', 1, '', 0),
(27, '081311633027', '2016-05-24 05:59:35', 1, '', 0),
(28, '081311633027', '2016-05-24 06:02:17', 1, '', 0),
(29, '081311633027', '2016-05-24 06:37:57', 3, '', 0),
(30, '081311633027', '2016-05-24 06:41:43', 3, '', 0),
(31, '081311633027', '2016-05-24 06:43:16', 3, '', 0),
(32, '081311633027', '2016-05-24 07:06:39', 4, '', 0),
(33, '081311633027', '2016-05-24 07:08:27', 4, '', 0),
(34, '081311633027', '2016-05-24 07:10:44', 4, '', 0),
(35, '081311633027', '2016-05-24 07:16:59', 1, '', 0),
(36, '081311633027', '2016-05-24 09:49:20', 2, '', 0),
(37, '081311633027', '2016-05-24 09:50:06', 2, '', 0),
(38, '081311633027', '2016-05-24 09:51:11', 1, '', 1),
(39, '081311633027', '2016-05-24 09:53:54', 2, '', 0),
(40, '081311633027', '2016-05-24 10:04:01', 1, '', 0),
(41, '081311633027', '2016-05-24 10:16:32', 2, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `alamat_surabaya` text NOT NULL,
  `alamat_rumah` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `password`, `nama_mahasiswa`, `angkatan`, `alamat_surabaya`, `alamat_rumah`, `telepon`, `email`) VALUES
('081311633027', 'rio', 'Rio Ramadhan Dharmawan', 2013, 'Kalijudan VIII H', 'Wagir 10/03 Masangan Wetan Sukodono Sidoarjo', '089678482575', 'ramadhanar.rio@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_proposal`
--

CREATE TABLE IF NOT EXISTS `pengajuan_proposal` (
  `id_p_proposal` int(9) NOT NULL AUTO_INCREMENT,
  `id_proposal_skripsi` int(9) NOT NULL,
  `id_log_tu` int(9) NOT NULL,
  `topik` text NOT NULL,
  PRIMARY KEY (`id_p_proposal`),
  KEY `id_prosopal_skripsi` (`id_proposal_skripsi`),
  KEY `id_log_tu` (`id_log_tu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengajuan_proposal`
--

INSERT INTO `pengajuan_proposal` (`id_p_proposal`, `id_proposal_skripsi`, `id_log_tu`, `topik`) VALUES
(1, 3, 31, 'Sistem Pendukung Keputusan');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_skripsi`
--

CREATE TABLE IF NOT EXISTS `pengajuan_skripsi` (
  `id_p_skripsi` int(9) NOT NULL AUTO_INCREMENT,
  `id_proposal_skripsi` int(9) NOT NULL,
  `id_log_tu` int(9) NOT NULL,
  `nilai_toefl` int(9) NOT NULL,
  PRIMARY KEY (`id_p_skripsi`),
  KEY `id_proposal_skripsi` (`id_proposal_skripsi`),
  KEY `id_log_tu` (`id_log_tu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_informasi`
--

CREATE TABLE IF NOT EXISTS `post_informasi` (
  `id_post` int(9) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url_gambar` text NOT NULL,
  `isi_post` text NOT NULL,
  `tanggal_upload_post` datetime NOT NULL,
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proposal_skripsi`
--

CREATE TABLE IF NOT EXISTS `proposal_skripsi` (
  `id_proposal_skripsi` int(9) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `judul_proposal` varchar(100) NOT NULL,
  `dosen_wali` int(9) NOT NULL,
  `pembimbing_1` int(9) NOT NULL,
  `pembimbing_2` int(9) NOT NULL,
  PRIMARY KEY (`id_proposal_skripsi`),
  KEY `nim` (`nim`),
  KEY `dosen_wali` (`dosen_wali`),
  KEY `pembimbing_1` (`pembimbing_1`),
  KEY `pembimbing_2` (`pembimbing_2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `proposal_skripsi`
--

INSERT INTO `proposal_skripsi` (`id_proposal_skripsi`, `nim`, `judul_proposal`, `dosen_wali`, `pembimbing_1`, `pembimbing_2`) VALUES
(1, '081311633027', 'Sistem Pendukung Keputusan rumah sakit', 1, 1, 3),
(2, '081311633027', 'Rancang bangun sistem akademik', 2, 1, 4),
(3, '081311633027', 'Sistem Informasi geografis pencarian lereng sawah', 3, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tata_usaha`
--

CREATE TABLE IF NOT EXISTS `tata_usaha` (
  `nip` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_tu` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tata_usaha`
--

INSERT INTO `tata_usaha` (`nip`, `password`, `nama_tu`, `email`) VALUES
('000001', 'rio', 'Rio Ramadhan Dharmawan', 'ramadhanar.rio@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tata_usaha` (`nip`);

--
-- Constraints for table `ganti_jadwal`
--
ALTER TABLE `ganti_jadwal`
  ADD CONSTRAINT `ganti_jadwal_ibfk_1` FOREIGN KEY (`id_log_tu`) REFERENCES `log_tu` (`id_log_tu`);

--
-- Constraints for table `log_tu`
--
ALTER TABLE `log_tu`
  ADD CONSTRAINT `log_tu_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `pengajuan_proposal`
--
ALTER TABLE `pengajuan_proposal`
  ADD CONSTRAINT `pengajuan_proposal_ibfk_1` FOREIGN KEY (`id_proposal_skripsi`) REFERENCES `proposal_skripsi` (`id_proposal_skripsi`),
  ADD CONSTRAINT `pengajuan_proposal_ibfk_2` FOREIGN KEY (`id_log_tu`) REFERENCES `log_tu` (`id_log_tu`);

--
-- Constraints for table `pengajuan_skripsi`
--
ALTER TABLE `pengajuan_skripsi`
  ADD CONSTRAINT `pengajuan_skripsi_ibfk_1` FOREIGN KEY (`id_proposal_skripsi`) REFERENCES `proposal_skripsi` (`id_proposal_skripsi`),
  ADD CONSTRAINT `pengajuan_skripsi_ibfk_2` FOREIGN KEY (`id_log_tu`) REFERENCES `log_tu` (`id_log_tu`);

--
-- Constraints for table `post_informasi`
--
ALTER TABLE `post_informasi`
  ADD CONSTRAINT `post_informasi_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tata_usaha` (`nip`);

--
-- Constraints for table `proposal_skripsi`
--
ALTER TABLE `proposal_skripsi`
  ADD CONSTRAINT `proposal_skripsi_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `proposal_skripsi_ibfk_2` FOREIGN KEY (`dosen_wali`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `proposal_skripsi_ibfk_3` FOREIGN KEY (`pembimbing_1`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `proposal_skripsi_ibfk_4` FOREIGN KEY (`pembimbing_2`) REFERENCES `dosen` (`id_dosen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
