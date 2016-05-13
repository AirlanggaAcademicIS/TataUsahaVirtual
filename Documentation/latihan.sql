-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 05:34 AM
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
  `id_presensi` int(9) NOT NULL,
  `id_log_tu` int(9) NOT NULL,
  `hari_absen` date NOT NULL,
  `keterangan_absen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE IF NOT EXISTS `dokumen` (
  `id_dokumen` int(9) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(9) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `url_dokumen` text NOT NULL,
  `tanggal_upload` date NOT NULL,
  `jumlah_pendownload` int(9) NOT NULL,
  PRIMARY KEY (`id_dokumen`),
  KEY `id_kategori` (`id_kategori`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_kategori`, `nip`, `nama_dokumen`, `url_dokumen`, `tanggal_upload`, `jumlah_pendownload`) VALUES
(1, 3, '000001', 'Form Usulan Topik Skripsi', 'download/document/usulan topik skripsi prodi S1 SI format new 5.doc', '2016-05-09', 0),
(2, 3, '000001', 'Jadwal Pelatihan Sertifikasi', 'download/document/Jadwal Pelatihan Sertifikasi.xlsx', '2016-05-09', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `telepon`, `email`) VALUES
(1, 'RRD', '089678482575', 'ramadhanar.rio@gmail.com'),
(2, 'DIC', '-', '-');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`) VALUES
(1, 'kompetisi'),
(2, 'pengumuman'),
(3, 'form');

-- --------------------------------------------------------

--
-- Table structure for table `log_tu`
--

CREATE TABLE IF NOT EXISTS `log_tu` (
  `id_log_tu` int(9) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `tanggal_log` datetime NOT NULL,
  `isi_log` text NOT NULL,
  PRIMARY KEY (`id_log_tu`),
  KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `id_prosopal_skripsi` int(9) NOT NULL,
  `id_log_tu` int(9) NOT NULL,
  `topik` text NOT NULL,
  PRIMARY KEY (`id_p_proposal`),
  KEY `id_prosopal_skripsi` (`id_prosopal_skripsi`),
  KEY `id_log_tu` (`id_log_tu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `id_kategori` int(9) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url_gambar` text NOT NULL,
  `isi_post` text NOT NULL,
  `tanggal_upload_post` datetime NOT NULL,
  KEY `id_kategori` (`id_kategori`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proposal_skripsi`
--

CREATE TABLE IF NOT EXISTS `proposal_skripsi` (
  `id_proposal_skirpsi` int(9) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `judul_proposal` varchar(100) NOT NULL,
  `dosen_wali` int(9) NOT NULL,
  `pembimbing_1` int(9) NOT NULL,
  `pembimbing_2` int(9) NOT NULL,
  PRIMARY KEY (`id_proposal_skirpsi`),
  KEY `nim` (`nim`),
  KEY `dosen_wali` (`dosen_wali`),
  KEY `pembimbing_1` (`pembimbing_1`),
  KEY `pembimbing_2` (`pembimbing_2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Constraints for table `bantuan_fasilitas`
--
ALTER TABLE `bantuan_fasilitas`
  ADD CONSTRAINT `bantuan_fasilitas_ibfk_1` FOREIGN KEY (`id_log_tu`) REFERENCES `log_tu` (`id_log_tu`),
  ADD CONSTRAINT `bantuan_fasilitas_ibfk_2` FOREIGN KEY (`dosen_wali`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
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
  ADD CONSTRAINT `pengajuan_proposal_ibfk_1` FOREIGN KEY (`id_prosopal_skripsi`) REFERENCES `proposal_skripsi` (`id_proposal_skirpsi`),
  ADD CONSTRAINT `pengajuan_proposal_ibfk_2` FOREIGN KEY (`id_log_tu`) REFERENCES `log_tu` (`id_log_tu`);

--
-- Constraints for table `pengajuan_skripsi`
--
ALTER TABLE `pengajuan_skripsi`
  ADD CONSTRAINT `pengajuan_skripsi_ibfk_1` FOREIGN KEY (`id_proposal_skripsi`) REFERENCES `proposal_skripsi` (`id_proposal_skirpsi`),
  ADD CONSTRAINT `pengajuan_skripsi_ibfk_2` FOREIGN KEY (`id_log_tu`) REFERENCES `log_tu` (`id_log_tu`);

--
-- Constraints for table `post_informasi`
--
ALTER TABLE `post_informasi`
  ADD CONSTRAINT `post_informasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
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
