-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2021 at 03:40 PM
-- Server version: 5.1.72-community
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `data_arsip`
--

CREATE TABLE IF NOT EXISTS `data_arsip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idarsip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noarsip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pencipta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` text COLLATE utf8_unicode_ci NOT NULL,
  `ket` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nobox` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `media` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci,
  `tgl_input` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_update` datetime DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noarsip` (`noarsip`),
  KEY `pencipta` (`pencipta`),
  KEY `unit_pengolah` (`unit_pengolah`),
  FULLTEXT KEY `uraian` (`uraian`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_arsip`
--

INSERT INTO `data_arsip` (`id`, `idarsip`, `noarsip`, `nama_dokumen`, `pencipta`, `unit_pengolah`, `tanggal`, `uraian`, `ket`, `kode`, `jumlah`, `nobox`, `lokasi`, `media`, `file`, `tgl_input`, `tgl_update`, `username`) VALUES
(1, 'd0hjVHBpbEFOQzFqRHFGN3Z0OVpyZz09', '123', 'PANDUAN BUKU TAMU PERNIKAHAN ONLINE', '1', '1', '2021-02-11', '123', 'asli', '1', 1, 'A', '1', '1', 'Buku_Tamu_Pernikahan_Online.pdf', '2021-02-11 21:10:40', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `master_kode`
--

CREATE TABLE IF NOT EXISTS `master_kode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `retensi` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`),
  KEY `nama` (`nama`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_kode`
--

INSERT INTO `master_kode` (`id`, `kode`, `nama`, `retensi`) VALUES
(1, 'public', 'Umum', 0),
(2, 'private', 'Pribadi', 0),
(3, 'A', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_lokasi`
--

CREATE TABLE IF NOT EXISTS `master_lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_lokasi` (`nama_lokasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_lokasi`
--

INSERT INTO `master_lokasi` (`id`, `nama_lokasi`) VALUES
(1, 'Lokasi 1'),
(2, 'Lokasi 2'),
(3, 'Lokasi 3');

-- --------------------------------------------------------

--
-- Table structure for table `master_media`
--

CREATE TABLE IF NOT EXISTS `master_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_media` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_media` (`nama_media`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_media`
--

INSERT INTO `master_media` (`id`, `nama_media`) VALUES
(1, 'PDF');

-- --------------------------------------------------------

--
-- Table structure for table `master_pencipta`
--

CREATE TABLE IF NOT EXISTS `master_pencipta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pencipta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_pencipta` (`nama_pencipta`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_pencipta`
--

INSERT INTO `master_pencipta` (`id`, `nama_pencipta`) VALUES
(1, 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `master_pengolah`
--

CREATE TABLE IF NOT EXISTS `master_pengolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengolah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama_pengolah` (`nama_pengolah`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_pengolah`
--

INSERT INTO `master_pengolah` (`id`, `nama_pengolah`) VALUES
(1, 'Default Arsip');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE IF NOT EXISTS `master_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipe` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL,
  `akses_klas` text COLLATE utf8_unicode_ci NOT NULL,
  `akses_modul` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`id`, `username`, `password`, `tipe`, `akses_klas`, `akses_modul`) VALUES
(1, 'admin', '$2y$10$M57KBHBtl9HsFQP6rxrqUOuSqO/MiQJnTqTu4wM5OlWwa/lTKyb2S', 'admin', '', '{"entridata":"on","sirkulasi":"on","klasifikasi":"on","pencipta":"on","pengolah":"on","lokasi":"on","media":"on","user":"on","import":"on"}'),
(2, 'user', '$2y$10$uE3PKQ/tWOoGQwnfKXVYjOXHRHQ43o5PgYpN2wf2lp.iI4.DFshoq', 'user', '', '{"entridata":"on"}'),
(3, 'test', '$2y$10$MzeJ/J59FLjzJVgt70CDHejFoW8YMc3Hcat0BrZwkrjbmhbg0buC.', 'user', '', '{"entridata":"on"}');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_background` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_pengaturan`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `site_title`, `site_logo`, `site_nama`, `site_background`) VALUES
(1, 'Sistem Arsip Dokumen', 'logo.png', 'IT Shop Purwokerto', 'register_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sirkulasi`
--

CREATE TABLE IF NOT EXISTS `sirkulasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noarsip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username_peminjam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8_unicode_ci,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_haruskembali` datetime NOT NULL,
  `tgl_pengembalian` datetime DEFAULT NULL,
  `tgl_transaksi` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noarsip` (`noarsip`),
  KEY `username_peminjam` (`username_peminjam`),
  KEY `tgl_pinjam` (`tgl_pinjam`),
  KEY `tgl_pengembalian` (`tgl_pengembalian`),
  KEY `tgl_haruskembali` (`tgl_haruskembali`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sirkulasi`
--

INSERT INTO `sirkulasi` (`id`, `noarsip`, `username_peminjam`, `keperluan`, `tgl_pinjam`, `tgl_haruskembali`, `tgl_pengembalian`, `tgl_transaksi`) VALUES
(1, '123', 'user', 'test', '2021-03-20 00:00:00', '2021-03-31 00:00:00', NULL, '2021-03-21 00:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE IF NOT EXISTS `system_log` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username_transaksi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_transaksi` (`kode_transaksi`),
  KEY `username_transaksi` (`username_transaksi`),
  KEY `tgl_transaksi` (`tgl_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
