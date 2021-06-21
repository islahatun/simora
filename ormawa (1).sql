-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 04:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ormawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `id` int(11) NOT NULL,
  `pengajuan` varchar(10) NOT NULL,
  `ormawa` varchar(30) NOT NULL,
  `periode` year(4) NOT NULL,
  `pengiriman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DPM` char(1) DEFAULT NULL,
  `bem` char(1) NOT NULL,
  `kaprodi` char(1) NOT NULL,
  `kabag` char(1) NOT NULL,
  `warek` char(1) NOT NULL,
  `revisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`id`, `pengajuan`, `ormawa`, `periode`, `pengiriman`, `DPM`, `bem`, `kaprodi`, `kabag`, `warek`, `revisi`) VALUES
(1, 'RAK', 'Computer Community', 2021, '2021-05-05 03:47:54', NULL, 'y', 'y', 'y', 'y', ''),
(2, 'RAK', 'BEM', 2021, '2021-06-21 06:16:39', NULL, 'y', 'y', 'y', 'y', '');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_ormawa`
--

CREATE TABLE `anggota_ormawa` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `author` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `acc` enum('Acc','Revisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `author`, `isi`, `foto`, `acc`) VALUES
(2, 'Pengumpulan Proposal', 'Kemahasiswaan', '<p>Ketentuan pengajuan kegiatan</p>\r\n\r\n<ol>\r\n	<li>Harus sesuai dengan rak</li>\r\n	<li>maksimal pengajuan 1 minggu sebelum kegiatan&nbsp;</li>\r\n	<li>pengajuan lpj maksimal 1 minggu setelah kegiatan</li>\r\n</ol>', '', 'Acc');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Kemahasiswaan'),
(2, 'Warek'),
(3, 'DPM'),
(4, 'UKM'),
(5, 'HMJ'),
(6, 'Ka Prodi'),
(7, 'BEM');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `sandi` varchar(258) NOT NULL,
  `level_id` int(11) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `visi`, `misi`, `email`, `logo`, `sandi`, `level_id`, `aktif`) VALUES
(1, 'Kemahasiswaan', '', '', '', 'default.jpg', '$2y$10$7NZa4dr.RHw8.Fv5LT8MSuBUyBh3BW4YloqKDp5/k1cp4m8lMdt4G', 1, 1),
(3, 'Computer Community', '', '', '', 'default.jpg', '$2y$10$5d8FoZxZtUzYF2D3Kfsj6Ohklq9T6Nn8hkIUgNcnKutsAasBV05Ly', 4, 1),
(8, 'Humanika', '', '', '', 'default.jpg', '$2y$10$Hl4n7AE.lNFpKyJYnqoWY.SK6pqB.XHXAK1ZtxRO8ow2WXKlzegrW', 5, 1),
(9, 'Himasi', '', '', '', 'default.jpg', '$2y$10$VY0VW7XVqaz0O1iaceV5POgAswobAh4vbQmyp5SUxXY50qFuOE7BW', 5, 1),
(10, 'Esa', '', '', '', 'default.jpg', '$2y$10$/3Baojf724Fe5Tr/hM4fS.zUjtX.JtlWCr2GmTrFqJPrXIeM0nMOG', 5, 1),
(11, 'Gempa', '', '', '', 'default.jpg', '$2y$10$tMrbtpfJC9p.XHep1QOgNOKTVc8HWf3E.cIOt/gsb.V3SvwPKxmPG', 4, 1),
(12, 'KOMPAS', '', '', '', 'default.jpg', '$2y$10$nRdoSVXJIM9MerYJVu03/OdsMoZYtbY16o.buJqEgtzoy9/0FYZam', 4, 1),
(15, 'DPM', '', '', '', 'default.jpg', '$2y$10$lJvbJHUqB0vWnocOyWek7e0MhsL5rYC6R.XgRjhKhRaQufpyV8Bc2', 3, 1),
(16, 'BEM', '', '', '', 'default.jpg', '$2y$10$0d/CFNsJq15ddFnq9CVYX.kOB.xnW1YU3n/RzgE..IZc3upg5tEHC', 7, 1),
(17, 'Kaprodi Teknik Informatika', '', '', '', 'default.jpg', '$2y$10$Lb0bfFbwdHespF311pmfB.0yn3lbEqd6CdU0f1lCAl28di6dS26Ga', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_anggaran`
--

CREATE TABLE `p_anggaran` (
  `id_rak` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `pengajuan` enum('Proposal','LPJ','','') NOT NULL,
  `barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `quality` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_anggaran`
--

INSERT INTO `p_anggaran` (`id_rak`, `id_pengguna`, `bagian`, `pengajuan`, `barang`, `harga`, `quality`) VALUES
(2, 3, '', 'Proposal', 'Batrai Mic', 5000, 2),
(2, 3, '', 'Proposal', 'spanguk', 70000, 1),
(2, 3, 'pubdekdoklat', 'Proposal', 'balon', 2000, 10),
(2, 3, 'humas', 'Proposal', 'bensin', 10000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `p_jadwal`
--

CREATE TABLE `p_jadwal` (
  `id_rak` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `pengajuan` enum('Proposal','LPJ','','') NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_jadwal`
--

INSERT INTO `p_jadwal` (`id_rak`, `id_pengguna`, `pengajuan`, `tanggal`, `mulai`, `selesai`, `kegiatan`, `keterangan`) VALUES
(1, 3, 'Proposal', '2021-06-04', '00:59:00', '01:02:00', 'Pembukaan', 'Mc'),
(1, 3, 'Proposal', '2021-06-04', '01:02:00', '04:00:00', 'sambutan kepala sekolah', 'kepala sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `p_panitia`
--

CREATE TABLE `p_panitia` (
  `id_rak` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `pengajuan` enum('Proposal','LPJ') NOT NULL,
  `nama_panitia` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_panitia`
--

INSERT INTO `p_panitia` (`id_rak`, `id_pengguna`, `pengajuan`, `nama_panitia`, `jabatan`) VALUES
(1, 3, 'Proposal', 'iis', 'sekretaris kegiatan'),
(1, 3, 'Proposal', 'sifa', 'bendahara'),
(1, 3, 'Proposal', 'elia', 'humas'),
(1, 0, 'Proposal', 'rina', 'mc'),
(1, 0, 'Proposal', 'herul', 'Humas'),
(1, 0, 'Proposal', 'Nurul', 'humas'),
(1, 3, 'Proposal', 'nurul', 'humas');

-- --------------------------------------------------------

--
-- Table structure for table `p_proposal`
--

CREATE TABLE `p_proposal` (
  `id` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `pengajuan` enum('Proposal','LPJ') NOT NULL,
  `tema_kegiatan` varchar(255) NOT NULL,
  `latar_belakang` text NOT NULL,
  `tujuan_pelaksanaan` text NOT NULL,
  `sasaran_peserta` text NOT NULL,
  `jam_pelaksanaan` time NOT NULL,
  `pelaksanaan_selesai` time DEFAULT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_proposal`
--

INSERT INTO `p_proposal` (`id`, `id_rak`, `pengajuan`, `tema_kegiatan`, `latar_belakang`, `tujuan_pelaksanaan`, `sasaran_peserta`, `jam_pelaksanaan`, `pelaksanaan_selesai`, `tempat`) VALUES
(1, 1, 'Proposal', 'Menjalin Silatrahmi', '<p>apa aja boleh</p>', 'tujuannya adalah', 'sasarannya adalah', '22:08:00', '22:10:00', 'kampus 1'),
(7, 3, 'Proposal', 'a', '<p>a</p>', 'a', 'a', '21:35:00', '21:35:00', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `p_rak`
--

CREATE TABLE `p_rak` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `periode` year(4) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `sasaran` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_rak`
--

INSERT INTO `p_rak` (`id`, `id_pengguna`, `periode`, `jenis_kegiatan`, `tujuan`, `sasaran`, `waktu`, `anggaran`) VALUES
(1, 3, 2021, 'Workshop', 'meningkatkan skill dibidang IT', 'SMK/SMA/MAHASISWA', '2021-05-08', 3000000),
(2, 3, 2021, 'Seminar', 'Meningkatkan pengetahuan tentang it', 'Umum', '2021-05-20', 3000000),
(3, 3, 2021, 'IT Explore', 'Memperkenalkan UKM CC', 'Anggota cc', '2021-05-29', 500000),
(4, 3, 2021, 'Kongres CC', 'Pergantian Kepengurusan UKM CC', 'Anggota cc', '2021-05-31', 1000000),
(5, 3, 2021, 'Lomba Desain', 'meningkatkan skill dibidang IT', 'SMK/SMA', '2021-05-31', 6000000),
(6, 3, 2021, 'Seminar', 'Meningkatkan pengetahuan tentang it', 'SMK/SMA/MAHASISWA', '2021-05-27', 500000),
(7, 3, 2021, 'IT Explore', 'Meningkatkan pengetahuan tentang it', 'SMK/SMA/MAHASISWA', '2021-05-13', 500000),
(9, 8, 2021, 'Workshop', 'meningkatkan skill dibidang IT', 'SMK/SMA/MAHASISWA', '2021-06-29', 3000000),
(10, 16, 2021, 'SEMINAR', 'SEMINAR', 'UMUM', '2021-06-30', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `level_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 1, 8),
(4, 1, 9),
(5, 2, 1),
(6, 2, 8),
(7, 3, 2),
(11, 3, 3),
(12, 3, 8),
(13, 3, 10),
(14, 4, 2),
(15, 4, 5),
(16, 4, 6),
(17, 4, 7),
(18, 4, 10),
(19, 5, 2),
(20, 5, 3),
(21, 5, 5),
(22, 5, 6),
(23, 5, 7),
(24, 5, 10),
(25, 6, 1),
(26, 6, 8),
(27, 7, 2),
(28, 7, 3),
(29, 7, 5),
(30, 7, 6),
(31, 7, 7),
(32, 7, 10),
(33, 4, 3),
(34, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `url`, `icon`) VALUES
(1, 'Dashboard', 'kemahasiswaan', ''),
(2, 'Dashboard', 'ormawa', ''),
(3, 'Data Organisasi', 'ormawa/data_ormawa', ''),
(4, 'Data Pengguna', 'kemahasiswaan/pengguna', ''),
(5, 'Pengajuan RAK', 'pengajuan', ''),
(6, 'Pengajuan Proposal', 'pengajuan/proposal', ''),
(7, 'Pengajuan LPJ', 'pengajuan/lpj', ''),
(8, 'Acc Pengajuan ', 'acc/acc_pengajuan', ''),
(9, 'Pengumuman', 'kemahasiswaan/pengumuman', ''),
(10, 'Artikel', 'ormawa/artikel', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_ormawa`
--
ALTER TABLE `anggota_ormawa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_proposal`
--
ALTER TABLE `p_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_rak`
--
ALTER TABLE `p_rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota_ormawa`
--
ALTER TABLE `anggota_ormawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_proposal`
--
ALTER TABLE `p_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `p_rak`
--
ALTER TABLE `p_rak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
