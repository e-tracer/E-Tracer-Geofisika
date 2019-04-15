-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 09:11 AM
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
-- Table structure for table `kerja`
--

CREATE TABLE `kerja` (
  `id_kuisioner` int(11) NOT NULL,
  `id_kerja` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `sesuai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kerja_wiraswasta`
--

CREATE TABLE `kerja_wiraswasta` (
  `id_kuisioner` int(11) NOT NULL,
  `id_kerjawiraswasta` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `asal_modal` varchar(30) NOT NULL,
  `omset` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `kerjaan_pos` varchar(100) NOT NULL,
  `kerjaan_neg` varchar(100) NOT NULL,
  `gambaran_ideal` varchar(100) NOT NULL,
  `id_user` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nama_kantor` varchar(30) NOT NULL,
  `bidang_usaha` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jenis_pekerjaan` varchar(30) NOT NULL,
  `web_kantor` varchar(30) NOT NULL,
  `telp_kantor` varchar(18) NOT NULL,
  `alamat_kantor` varchar(50) NOT NULL,
  `sejak` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_data` int(11) NOT NULL,
  `id_bekerja` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_kuisioner` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `pernah_kerja` varchar(30) NOT NULL,
  `berapa_lama` varchar(30) NOT NULL,
  `alasan_tdkkerja` varchar(30) NOT NULL
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
  `kerja_sebelum` varchar(30) NOT NULL,
  `brp_lama` varchar(10) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `asal_modal` varchar(30) NOT NULL,
  `omset` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_bekerja` (`id_bekerja`),
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
-- AUTO_INCREMENT for table `kerja`
--
ALTER TABLE `kerja`
  MODIFY `id_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kerja_wiraswasta`
--
ALTER TABLE `kerja_wiraswasta`
  MODIFY `id_kerjawiraswasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kuis_pendahuluan`
--
ALTER TABLE `kuis_pendahuluan`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penilaian1`
--
ALTER TABLE `penilaian1`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penilaian2`
--
ALTER TABLE `penilaian2`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wiraswasta`
--
ALTER TABLE `wiraswasta`
  MODIFY `id_wiraswasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pertanyaan_ibfk_2` FOREIGN KEY (`id_bekerja`) REFERENCES `kerja` (`id_kerja`) ON DELETE CASCADE ON UPDATE CASCADE;

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
