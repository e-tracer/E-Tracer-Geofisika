-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: Apr 19, 2019 at 10:43 AM
=======
-- Generation Time: Apr 15, 2019 at 03:05 PM
>>>>>>> master
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etracer`
--

-- --------------------------------------------------------

--
-- Table structure for table `berits`
--

CREATE TABLE `berits` (
  `id_berita` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` longtext,
  `file_gambar` tinytext,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berits`
--

INSERT INTO `berits` (`id_berita`, `id_user`, `judul`, `isi`, `file_gambar`, `tanggal`) VALUES
(1, '14116036', 'Judul', '<p>diriku&nbsp;<strong><em>sakit hati</em></strong></p>', 'IMG_0396.JPG', '2019-04-19'),
(6, '14116036', 'PPLK 2018', '<p style=\"text-align: justify;\">&nbsp;PPLK atau Program Pengenalan Lingkungan Kampus merupakan acara pesta penyambutan terbesar untuk mahasiswa baru yang diselenggarakan setiap tahunnya di kampus ITERA. Melalui PPLK, kamu akan mendapatkan pengalaman menyenangkan yang tidak terlupakan. Selain itu, kamu juga akan mengetahui hal-hal menarik seputar ITERA dan menciptakan mahasiswa yang berbasis industri 4.0 dan memiliki karakter sehingga akan menumbuhkan rasa cinta terhadap kampus perjuangan, Institut Teknologi Sumatera!</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">PPLK atau Program Pengenalan Lingkungan Kampus merupakan acara pesta penyambutan terbesar untuk mahasiswa baru yang diselenggarakan setiap tahunnya di kampus ITERA. Melalui PPLK, kamu akan mendapatkan pengalaman menyenangkan yang tidak terlupakan. Selain itu, kamu juga akan mengetahui hal-hal menarik seputar ITERA dan menciptakan mahasiswa yang berbasis industri 4.0 dan memiliki karakter sehingga akan menumbuhkan rasa cinta terhadap kampus perjuangan, Institut Teknologi Sumatera!</p>', 'BG1.png', '2019-04-19'),
(7, '14116036', 'Bi Taifah Mencari Pak Iqbal', '<p>cieee pak iqbal</p>', 'bi_taifa.jpg', '2019-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `kerja`
--

CREATE TABLE `kerja` (
  `id_kuisioner` int(11) NOT NULL,
  `id_kerja` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `sesuai` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kerja_wiraswasta`
--

CREATE TABLE `kerja_wiraswasta` (
  `id_kuisioner` int(11) NOT NULL,
  `id_kerjawiraswasta` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `asal_modal` varchar(30) DEFAULT NULL,
  `omset` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuisUtama`
--

CREATE TABLE `kuisUtama` (
  `id_kuisionerUtama` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `pertanyaan3` varchar(50) DEFAULT NULL,
  `pertanyaan4` varchar(35) DEFAULT NULL,
  `pertanyaan5` varchar(5) DEFAULT NULL,
  `pertanyaan6` varchar(5) DEFAULT NULL,
  `pertanyaan9` text,
  `pertanyaan10` text,
  `pertanyaan12` text,
  `pertanyaan13` text,
  `pertanyaan14` text,
  `pertanyaan15` text,
  `pertanyaan16` text,
  `pertanyaan17` text,
  `pertanyaan18` varchar(5) DEFAULT NULL,
  `pertanyaan19` text,
  `pertanyaan20` text,
  `pertanyaan21` text,
  `pertanyaan22` text,
  `pertanyaan23` varchar(5) DEFAULT NULL,
  `pertanyaan27` varchar(5) DEFAULT NULL,
  `pertanyaan28` varchar(5) DEFAULT NULL,
  `pertanyaan30` varchar(5) DEFAULT NULL,
  `pertanyaan31` text,
  `id_masaStudi` int(11) DEFAULT NULL,
  `id_aspekPembelajaran` int(11) DEFAULT NULL,
  `id_aspekBelajar` int(11) DEFAULT NULL,
  `id_fasilitas` int(11) DEFAULT NULL,
  `id_penting` int(11) DEFAULT NULL,
  `id_kontribusi1` int(11) DEFAULT NULL,
  `id_kontribusi2` int(11) DEFAULT NULL,
  `id_kontribusi3` int(11) DEFAULT NULL,
  `id_manfaat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuisUtama`
--

INSERT INTO `kuisUtama` (`id_kuisionerUtama`, `id_user`, `pertanyaan3`, `pertanyaan4`, `pertanyaan5`, `pertanyaan6`, `pertanyaan9`, `pertanyaan10`, `pertanyaan12`, `pertanyaan13`, `pertanyaan14`, `pertanyaan15`, `pertanyaan16`, `pertanyaan17`, `pertanyaan18`, `pertanyaan19`, `pertanyaan20`, `pertanyaan21`, `pertanyaan22`, `pertanyaan23`, `pertanyaan27`, `pertanyaan28`, `pertanyaan30`, `pertanyaan31`, `id_masaStudi`, `id_aspekPembelajaran`, `id_aspekBelajar`, `id_fasilitas`, `id_penting`, `id_kontribusi1`, `id_kontribusi2`, `id_kontribusi3`, `id_manfaat`) VALUES
(1, '14116036', 'sendiri', 'sendiri', '1', '1', 'afwds', 'sdfs', 'asdf', 'sfsaf', 'sadfas', 'sdfas', 'sdfasf', 'asdfsa', '1', 'asdfsa', 'Instansi pemerintah (Termasuk BUMN)', 'asdfaf', 'asdfa', NULL, '2', '1', '1', 'Di pekerjaan ini saya memperoleh prospek karir yang baik', 1, NULL, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kuis_pendahuluan`
--

CREATE TABLE `kuis_pendahuluan` (
  `id_kuisioner` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kel` varchar(20) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `ipk` varchar(6) NOT NULL,
  `tahun_masuk` varchar(6) NOT NULL,
  `almt` varchar(50) NOT NULL,
  `almt_kota` varchar(20) NOT NULL,
  `almt_prov` varchar(30) NOT NULL,
  `almt_kodepos` varchar(8) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kerjaan_pos` varchar(100) DEFAULT NULL,
  `kerjaan_neg` varchar(100) DEFAULT NULL,
  `gambaran_ideal` varchar(100) DEFAULT NULL,
  `id_user` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuis_pendahuluan`
--

INSERT INTO `kuis_pendahuluan` (`id_kuisioner`, `nama`, `jenis_kel`, `angkatan`, `prodi`, `ipk`, `tahun_masuk`, `almt`, `almt_kota`, `almt_prov`, `almt_kodepos`, `telp`, `kerjaan_pos`, `kerjaan_neg`, `gambaran_ideal`, `id_user`) VALUES
(1, 'Nursano Gandung Praseto', 'Laki-laki', '2016', 'Teknik Geofisika', '3.00', '2016', 'Dimana mana hatiku senang', 'Tangerang', 'Banten', '123345', '083170609165', NULL, NULL, NULL, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_data` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `nama_kantor` varchar(30) DEFAULT NULL,
  `bidang_usaha` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `jenis_pekerjaan` varchar(30) DEFAULT NULL,
  `web_kantor` varchar(30) DEFAULT NULL,
  `telp_kantor` varchar(18) DEFAULT NULL,
  `alamat_kantor` varchar(50) DEFAULT NULL,
  `sejak` varchar(19) DEFAULT NULL,
  `penghasilan` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_data`, `id_user`, `nama_kantor`, `bidang_usaha`, `jabatan`, `jenis_pekerjaan`, `web_kantor`, `telp_kantor`, `alamat_kantor`, `sejak`, `penghasilan`) VALUES
(1, '14116036', 'PT Suka suka', 'retail', 'CEO', 'barang', 'kantor@kantor.com', '0821739402', 'disitu', 'dulu', '50000000');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaanLain`
--

CREATE TABLE `pekerjaanLain` (
  `id_data` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `nama_kantor` varchar(30) DEFAULT NULL,
  `bidang_usaha` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `jenis_pekerjaan` varchar(30) DEFAULT NULL,
  `web_kantor` varchar(30) DEFAULT NULL,
  `telp_kantor` varchar(18) DEFAULT NULL,
  `alamat_kantor` varchar(50) DEFAULT NULL,
  `sejak` varchar(19) DEFAULT NULL,
  `penghasilan` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaanLain`
--

INSERT INTO `pekerjaanLain` (`id_data`, `id_user`, `nama_kantor`, `bidang_usaha`, `jabatan`, `jenis_pekerjaan`, `web_kantor`, `telp_kantor`, `alamat_kantor`, `sejak`, `penghasilan`) VALUES
(1, '14116036', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaanSebel`
--

CREATE TABLE `pekerjaanSebel` (
  `id_data` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `nama_kantor` varchar(30) DEFAULT NULL,
  `bidang_usaha` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaanSebel`
--

INSERT INTO `pekerjaanSebel` (`id_data`, `id_user`, `nama_kantor`, `bidang_usaha`, `jabatan`, `deskripsi`) VALUES
(1, '14116036', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian1`
--

CREATE TABLE `penilaian1` (
  `id_penilaian` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `pert1` varchar(30) NOT NULL,
  `pert2` varchar(30) NOT NULL,
  `pert3` varchar(30) NOT NULL,
  `pert4` varchar(30) NOT NULL,
  `pert5` varchar(30) NOT NULL,
  `pert6` varchar(30) NOT NULL,
  `pert7` varchar(30) NOT NULL,
  `pert8` varchar(30) NOT NULL,
  `pert9` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian2`
--

CREATE TABLE `penilaian2` (
  `id_penilaian` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `pert1` varchar(30) NOT NULL,
  `pert2` varchar(30) NOT NULL,
  `pert3` varchar(30) NOT NULL,
  `pert4` varchar(30) NOT NULL,
  `pert5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan1`
--

CREATE TABLE `pertanyaan1` (
  `id_masaStudi` int(11) NOT NULL,
  `pertanyaan11` int(11) NOT NULL,
  `pertanyaan12` int(11) NOT NULL,
  `pertanyaan13` int(11) NOT NULL,
  `pertanyaan14` int(11) NOT NULL,
  `pertanyaan15` int(11) NOT NULL,
  `pertanyaan16` int(11) NOT NULL,
  `pertanyaan17` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan1`
--

INSERT INTO `pertanyaan1` (`id_masaStudi`, `pertanyaan11`, `pertanyaan12`, `pertanyaan13`, `pertanyaan14`, `pertanyaan15`, `pertanyaan16`, `pertanyaan17`, `id_user`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan2`
--

CREATE TABLE `pertanyaan2` (
  `id_aspekPembelajaran` int(11) NOT NULL,
  `pertanyaan21` int(11) NOT NULL,
  `pertanyaan22` int(11) NOT NULL,
  `pertanyaan23` int(11) NOT NULL,
  `pertanyaan24` int(11) NOT NULL,
  `pertanyaan25` int(11) NOT NULL,
  `pertanyaan26` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan2`
--

INSERT INTO `pertanyaan2` (`id_aspekPembelajaran`, `pertanyaan21`, `pertanyaan22`, `pertanyaan23`, `pertanyaan24`, `pertanyaan25`, `pertanyaan26`, `id_user`) VALUES
(1, 1, 1, 1, 1, 1, 1, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan7`
--

CREATE TABLE `pertanyaan7` (
  `id_aspekBelajar` int(11) NOT NULL,
  `pertanyaan71` int(11) NOT NULL,
  `pertanyaan72` int(11) NOT NULL,
  `pertanyaan73` int(11) NOT NULL,
  `pertanyaan74` int(11) NOT NULL,
  `pertanyaan75` int(11) NOT NULL,
  `pertanyaan76` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan7`
--

INSERT INTO `pertanyaan7` (`id_aspekBelajar`, `pertanyaan71`, `pertanyaan72`, `pertanyaan73`, `pertanyaan74`, `pertanyaan75`, `pertanyaan76`, `id_user`) VALUES
(1, 2, 2, 2, 2, 2, 2, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan8`
--

CREATE TABLE `pertanyaan8` (
  `id_fasilitas` int(11) NOT NULL,
  `pertanyaan81` int(11) NOT NULL,
  `pertanyaan82` int(11) NOT NULL,
  `pertanyaan83` int(11) NOT NULL,
  `pertanyaan84` int(11) NOT NULL,
  `pertanyaan85` int(11) NOT NULL,
  `pertanyaan86` int(11) NOT NULL,
  `pertanyaan87` int(11) NOT NULL,
  `pertanyaan88` int(11) NOT NULL,
  `pertanyaan89` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan8`
--

INSERT INTO `pertanyaan8` (`id_fasilitas`, `pertanyaan81`, `pertanyaan82`, `pertanyaan83`, `pertanyaan84`, `pertanyaan85`, `pertanyaan86`, `pertanyaan87`, `pertanyaan88`, `pertanyaan89`, `id_user`) VALUES
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan11`
--

CREATE TABLE `pertanyaan11` (
  `id_penting` int(11) NOT NULL,
  `pertanyaan111` int(11) NOT NULL,
  `pertanyaan112` int(11) NOT NULL,
  `pertanyaan113` int(11) NOT NULL,
  `pertanyaan114` int(11) NOT NULL,
  `pertanyaan115` int(11) NOT NULL,
  `pertanyaan116` int(11) NOT NULL,
  `pertanyaan117` int(11) NOT NULL,
  `pertanyaan118` int(11) NOT NULL,
  `pertanyaan119` int(11) NOT NULL,
  `pertanyaan1110` int(11) NOT NULL,
  `pertanyaan1111` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan11`
--

INSERT INTO `pertanyaan11` (`id_penting`, `pertanyaan111`, `pertanyaan112`, `pertanyaan113`, `pertanyaan114`, `pertanyaan115`, `pertanyaan116`, `pertanyaan117`, `pertanyaan118`, `pertanyaan119`, `pertanyaan1110`, `pertanyaan1111`, `id_user`) VALUES
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan24`
--

CREATE TABLE `pertanyaan24` (
  `id_kontribusi1` int(11) NOT NULL,
  `pertanyaan241` int(11) NOT NULL,
  `pertanyaan242` int(11) NOT NULL,
  `pertanyaan243` int(11) NOT NULL,
  `pertanyaan244` int(11) NOT NULL,
  `pertanyaan245` int(11) NOT NULL,
  `pertanyaan246` int(11) NOT NULL,
  `pertanyaan247` int(11) NOT NULL,
  `pertanyaan248` int(11) NOT NULL,
  `pertanyaan249` int(11) NOT NULL,
  `pertanyaan2410` int(11) NOT NULL,
  `pertanyaan2411` int(11) NOT NULL,
  `pertanyaan2412` int(11) NOT NULL,
  `pertanyaan2413` int(11) NOT NULL,
  `pertanyaan2414` int(11) NOT NULL,
  `pertanyaan2415` int(11) NOT NULL,
  `pertanyaan2416` int(11) NOT NULL,
  `pertanyaan2417` int(11) NOT NULL,
  `pertanyaan2418` int(11) NOT NULL,
  `pertanyaan2419` int(11) NOT NULL,
  `pertanyaan2420` int(11) NOT NULL,
  `pertanyaan2421` int(11) NOT NULL,
  `pertanyaan2422` int(11) NOT NULL,
  `pertanyaan2423` int(11) NOT NULL,
  `pertanyaan2424` int(11) NOT NULL,
  `pertanyaan2425` int(11) NOT NULL,
  `pertanyaan2426` int(11) NOT NULL,
  `pertanyaan2427` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan24`
--

INSERT INTO `pertanyaan24` (`id_kontribusi1`, `pertanyaan241`, `pertanyaan242`, `pertanyaan243`, `pertanyaan244`, `pertanyaan245`, `pertanyaan246`, `pertanyaan247`, `pertanyaan248`, `pertanyaan249`, `pertanyaan2410`, `pertanyaan2411`, `pertanyaan2412`, `pertanyaan2413`, `pertanyaan2414`, `pertanyaan2415`, `pertanyaan2416`, `pertanyaan2417`, `pertanyaan2418`, `pertanyaan2419`, `pertanyaan2420`, `pertanyaan2421`, `pertanyaan2422`, `pertanyaan2423`, `pertanyaan2424`, `pertanyaan2425`, `pertanyaan2426`, `pertanyaan2427`, `id_user`) VALUES
(1, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan25`
--

CREATE TABLE `pertanyaan25` (
  `id_kontribusi2` int(11) NOT NULL,
  `pertanyaan251` int(11) NOT NULL,
  `pertanyaan252` int(11) NOT NULL,
  `pertanyaan253` int(11) NOT NULL,
  `pertanyaan254` int(11) NOT NULL,
  `pertanyaan255` int(11) NOT NULL,
  `pertanyaan256` int(11) NOT NULL,
  `pertanyaan257` int(11) NOT NULL,
  `pertanyaan258` int(11) NOT NULL,
  `pertanyaan259` int(11) NOT NULL,
  `pertanyaan2510` int(11) NOT NULL,
  `pertanyaan2511` int(11) NOT NULL,
  `pertanyaan2512` int(11) NOT NULL,
  `pertanyaan2513` int(11) NOT NULL,
  `pertanyaan2514` int(11) NOT NULL,
  `pertanyaan2515` int(11) NOT NULL,
  `pertanyaan2516` int(11) NOT NULL,
  `pertanyaan2517` int(11) NOT NULL,
  `pertanyaan2518` int(11) NOT NULL,
  `pertanyaan2519` int(11) NOT NULL,
  `pertanyaan2520` int(11) NOT NULL,
  `pertanyaan2521` int(11) NOT NULL,
  `pertanyaan2522` int(11) NOT NULL,
  `pertanyaan2523` int(11) NOT NULL,
  `pertanyaan2524` int(11) NOT NULL,
  `pertanyaan2525` int(11) NOT NULL,
  `pertanyaan2526` int(11) NOT NULL,
  `pertanyaan2527` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan25`
--

INSERT INTO `pertanyaan25` (`id_kontribusi2`, `pertanyaan251`, `pertanyaan252`, `pertanyaan253`, `pertanyaan254`, `pertanyaan255`, `pertanyaan256`, `pertanyaan257`, `pertanyaan258`, `pertanyaan259`, `pertanyaan2510`, `pertanyaan2511`, `pertanyaan2512`, `pertanyaan2513`, `pertanyaan2514`, `pertanyaan2515`, `pertanyaan2516`, `pertanyaan2517`, `pertanyaan2518`, `pertanyaan2519`, `pertanyaan2520`, `pertanyaan2521`, `pertanyaan2522`, `pertanyaan2523`, `pertanyaan2524`, `pertanyaan2525`, `pertanyaan2526`, `pertanyaan2527`, `id_user`) VALUES
(1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan26`
--

CREATE TABLE `pertanyaan26` (
  `id_kontribusi3` int(11) NOT NULL,
  `pertanyaan261` int(11) NOT NULL,
  `pertanyaan262` int(11) NOT NULL,
  `pertanyaan263` int(11) NOT NULL,
  `pertanyaan264` int(11) NOT NULL,
  `pertanyaan265` int(11) NOT NULL,
  `pertanyaan266` int(11) NOT NULL,
  `pertanyaan267` int(11) NOT NULL,
  `pertanyaan268` int(11) NOT NULL,
  `pertanyaan269` int(11) NOT NULL,
  `pertanyaan2610` int(11) NOT NULL,
  `pertanyaan2611` int(11) NOT NULL,
  `pertanyaan2612` int(11) NOT NULL,
  `pertanyaan2613` int(11) NOT NULL,
  `pertanyaan2614` int(11) NOT NULL,
  `pertanyaan2615` int(11) NOT NULL,
  `pertanyaan2616` int(11) NOT NULL,
  `pertanyaan2617` int(11) NOT NULL,
  `pertanyaan2618` int(11) NOT NULL,
  `pertanyaan2619` int(11) NOT NULL,
  `pertanyaan2620` int(11) NOT NULL,
  `pertanyaan2621` int(11) NOT NULL,
  `pertanyaan2622` int(11) NOT NULL,
  `pertanyaan2623` int(11) NOT NULL,
  `pertanyaan2624` int(11) NOT NULL,
  `pertanyaan2625` int(11) NOT NULL,
  `pertanyaan2626` int(11) NOT NULL,
  `pertanyaan2627` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan26`
--

INSERT INTO `pertanyaan26` (`id_kontribusi3`, `pertanyaan261`, `pertanyaan262`, `pertanyaan263`, `pertanyaan264`, `pertanyaan265`, `pertanyaan266`, `pertanyaan267`, `pertanyaan268`, `pertanyaan269`, `pertanyaan2610`, `pertanyaan2611`, `pertanyaan2612`, `pertanyaan2613`, `pertanyaan2614`, `pertanyaan2615`, `pertanyaan2616`, `pertanyaan2617`, `pertanyaan2618`, `pertanyaan2619`, `pertanyaan2620`, `pertanyaan2621`, `pertanyaan2622`, `pertanyaan2623`, `pertanyaan2624`, `pertanyaan2625`, `pertanyaan2626`, `pertanyaan2627`, `id_user`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan29`
--

CREATE TABLE `pertanyaan29` (
  `id_manfaat` int(11) NOT NULL,
  `pertanyaan291` int(11) NOT NULL,
  `pertanyaan292` int(11) NOT NULL,
  `pertanyaan293` int(11) NOT NULL,
  `pertanyaan294` int(11) NOT NULL,
  `pertanyaan295` int(11) NOT NULL,
  `pertanyaan296` int(11) NOT NULL,
  `id_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan29`
--

INSERT INTO `pertanyaan29` (`id_manfaat`, `pertanyaan291`, `pertanyaan292`, `pertanyaan293`, `pertanyaan294`, `pertanyaan295`, `pertanyaan296`, `id_user`) VALUES
(1, 2, 3, 4, 5, 1, 2, '14116036');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_kuisioner` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `pernah_kerja` varchar(30) DEFAULT NULL,
  `berapa_lama` varchar(30) DEFAULT NULL,
  `alasan_tdkkerja` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(8) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `status`, `nama`, `tgl_lahir`, `email`) VALUES
('12345678', 'admin', 'Bi Ijah', '30-02-1987', 'ijah@dosen.itera.ac.id'),
('14116036', 'alumni', 'Nursano Gandung Praseto', '18-10-1997', 'nursano.14116036@student.itera.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `wiraswasta`
--

CREATE TABLE `wiraswasta` (
  `id_kuisioner` int(11) NOT NULL,
  `id_wiraswasta` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `kerja_sebelum` varchar(30) DEFAULT NULL,
  `brp_lama` varchar(10) DEFAULT NULL,
  `alasan` varchar(50) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `asal_modal` varchar(30) DEFAULT NULL,
  `omset` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wiraswasta`
--

INSERT INTO `wiraswasta` (`id_kuisioner`, `id_wiraswasta`, `id_user`, `kerja_sebelum`, `brp_lama`, `alasan`, `jenis`, `asal_modal`, `omset`) VALUES
(1, 1, '14116036', 'sudah', '5 tahun', 'gak punya duit', 'jual diri', 'ngemis', '2 milyar'),
(1, 2, '14116036', 'sudah', '5 tahun', 'gak punya duit', 'jual diri', 'ngemis', '2 milyar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berits`
--
ALTER TABLE `berits`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kerja`
--
ALTER TABLE `kerja`
  ADD PRIMARY KEY (`id_kerja`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kuisioner` (`id_kuisioner`);

--
-- Indexes for table `kerja_wiraswasta`
--
ALTER TABLE `kerja_wiraswasta`
  ADD PRIMARY KEY (`id_kerjawiraswasta`),
  ADD KEY `id_kuisioner` (`id_kuisioner`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kuisUtama`
--
ALTER TABLE `kuisUtama`
  ADD PRIMARY KEY (`id_kuisionerUtama`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_aspekPembelajaran` (`id_aspekPembelajaran`),
  ADD KEY `id_aspekBelajar` (`id_aspekBelajar`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `id_penting` (`id_penting`),
  ADD KEY `id_kontribusi1` (`id_kontribusi1`),
  ADD KEY `id_kontribusi2` (`id_kontribusi2`),
  ADD KEY `id_kontribusi3` (`id_kontribusi3`),
  ADD KEY `id_manfaat` (`id_manfaat`),
  ADD KEY `id_masaStudi` (`id_masaStudi`);

--
-- Indexes for table `kuis_pendahuluan`
--
ALTER TABLE `kuis_pendahuluan`
  ADD PRIMARY KEY (`id_kuisioner`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pekerjaanLain`
--
ALTER TABLE `pekerjaanLain`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pekerjaanSebel`
--
ALTER TABLE `pekerjaanSebel`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penilaian1`
--
ALTER TABLE `penilaian1`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penilaian2`
--
ALTER TABLE `penilaian2`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan1`
--
ALTER TABLE `pertanyaan1`
  ADD PRIMARY KEY (`id_masaStudi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan2`
--
ALTER TABLE `pertanyaan2`
  ADD PRIMARY KEY (`id_aspekPembelajaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan7`
--
ALTER TABLE `pertanyaan7`
  ADD PRIMARY KEY (`id_aspekBelajar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan8`
--
ALTER TABLE `pertanyaan8`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan11`
--
ALTER TABLE `pertanyaan11`
  ADD PRIMARY KEY (`id_penting`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan24`
--
ALTER TABLE `pertanyaan24`
  ADD PRIMARY KEY (`id_kontribusi1`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan25`
--
ALTER TABLE `pertanyaan25`
  ADD PRIMARY KEY (`id_kontribusi2`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan26`
--
ALTER TABLE `pertanyaan26`
  ADD PRIMARY KEY (`id_kontribusi3`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pertanyaan29`
--
ALTER TABLE `pertanyaan29`
  ADD PRIMARY KEY (`id_manfaat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD KEY `id_kuisioner` (`id_kuisioner`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wiraswasta`
--
ALTER TABLE `wiraswasta`
  ADD PRIMARY KEY (`id_wiraswasta`),
  ADD KEY `id_kuisioner` (`id_kuisioner`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berits`
--
ALTER TABLE `berits`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kerja`
--
ALTER TABLE `kerja`
  MODIFY `id_kerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerja_wiraswasta`
--
ALTER TABLE `kerja_wiraswasta`
  MODIFY `id_kerjawiraswasta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuisUtama`
--
ALTER TABLE `kuisUtama`
  MODIFY `id_kuisionerUtama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuis_pendahuluan`
--
ALTER TABLE `kuis_pendahuluan`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pekerjaanLain`
--
ALTER TABLE `pekerjaanLain`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pekerjaanSebel`
--
ALTER TABLE `pekerjaanSebel`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penilaian1`
--
ALTER TABLE `penilaian1`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian2`
--
ALTER TABLE `penilaian2`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan1`
--
ALTER TABLE `pertanyaan1`
  MODIFY `id_masaStudi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan2`
--
ALTER TABLE `pertanyaan2`
  MODIFY `id_aspekPembelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan7`
--
ALTER TABLE `pertanyaan7`
  MODIFY `id_aspekBelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan8`
--
ALTER TABLE `pertanyaan8`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan11`
--
ALTER TABLE `pertanyaan11`
  MODIFY `id_penting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan24`
--
ALTER TABLE `pertanyaan24`
  MODIFY `id_kontribusi1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan25`
--
ALTER TABLE `pertanyaan25`
  MODIFY `id_kontribusi2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan26`
--
ALTER TABLE `pertanyaan26`
  MODIFY `id_kontribusi3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertanyaan29`
--
ALTER TABLE `pertanyaan29`
  MODIFY `id_manfaat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wiraswasta`
--
ALTER TABLE `wiraswasta`
  MODIFY `id_wiraswasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berits`
--
ALTER TABLE `berits`
  ADD CONSTRAINT `berits_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `kerja`
--
ALTER TABLE `kerja`
  ADD CONSTRAINT `kerja_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kerja_ibfk_2` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuis_pendahuluan` (`id_kuisioner`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kerja_wiraswasta`
--
ALTER TABLE `kerja_wiraswasta`
  ADD CONSTRAINT `kerja_wiraswasta_ibfk_2` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuis_pendahuluan` (`id_kuisioner`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kerja_wiraswasta_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kuisUtama`
--
ALTER TABLE `kuisUtama`
  ADD CONSTRAINT `kuisutama_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_10` FOREIGN KEY (`id_manfaat`) REFERENCES `pertanyaan29` (`id_manfaat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_11` FOREIGN KEY (`id_masaStudi`) REFERENCES `pertanyaan1` (`id_masaStudi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_3` FOREIGN KEY (`id_aspekPembelajaran`) REFERENCES `pertanyaan2` (`id_aspekPembelajaran`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_4` FOREIGN KEY (`id_aspekBelajar`) REFERENCES `pertanyaan7` (`id_aspekBelajar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_5` FOREIGN KEY (`id_fasilitas`) REFERENCES `pertanyaan8` (`id_fasilitas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_6` FOREIGN KEY (`id_penting`) REFERENCES `pertanyaan11` (`id_penting`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_7` FOREIGN KEY (`id_kontribusi1`) REFERENCES `pertanyaan24` (`id_kontribusi1`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_8` FOREIGN KEY (`id_kontribusi2`) REFERENCES `pertanyaan25` (`id_kontribusi2`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kuisutama_ibfk_9` FOREIGN KEY (`id_kontribusi3`) REFERENCES `pertanyaan26` (`id_kontribusi3`) ON UPDATE CASCADE;

--
-- Constraints for table `kuis_pendahuluan`
--
ALTER TABLE `kuis_pendahuluan`
  ADD CONSTRAINT `kuis_pendahuluan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD CONSTRAINT `pekerjaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pekerjaanLain`
--
ALTER TABLE `pekerjaanLain`
  ADD CONSTRAINT `pekerjaanLain_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pekerjaanSebel`
--
ALTER TABLE `pekerjaanSebel`
  ADD CONSTRAINT `pekerjaanSebel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian1`
--
ALTER TABLE `penilaian1`
  ADD CONSTRAINT `penilaian1_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian2`
--
ALTER TABLE `penilaian2`
  ADD CONSTRAINT `penilaian2_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan1`
--
ALTER TABLE `pertanyaan1`
  ADD CONSTRAINT `pertanyaan1_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan2`
--
ALTER TABLE `pertanyaan2`
  ADD CONSTRAINT `pertanyaan2_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan7`
--
ALTER TABLE `pertanyaan7`
  ADD CONSTRAINT `pertanyaan7_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan8`
--
ALTER TABLE `pertanyaan8`
  ADD CONSTRAINT `pertanyaan8_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan11`
--
ALTER TABLE `pertanyaan11`
  ADD CONSTRAINT `pertanyaan11_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan24`
--
ALTER TABLE `pertanyaan24`
  ADD CONSTRAINT `pertanyaan24_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan25`
--
ALTER TABLE `pertanyaan25`
  ADD CONSTRAINT `pertanyaan25_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan26`
--
ALTER TABLE `pertanyaan26`
  ADD CONSTRAINT `pertanyaan26_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan29`
--
ALTER TABLE `pertanyaan29`
  ADD CONSTRAINT `pertanyaan29_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sekolah_ibfk_2` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuis_pendahuluan` (`id_kuisioner`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wiraswasta`
--
ALTER TABLE `wiraswasta`
  ADD CONSTRAINT `wiraswasta_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wiraswasta_ibfk_2` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuis_pendahuluan` (`id_kuisioner`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
