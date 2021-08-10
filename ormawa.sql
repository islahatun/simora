-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 10:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
  `id_rak` int(11) NOT NULL,
  `pengajuan` varchar(10) NOT NULL,
  `id_ormawa` int(11) NOT NULL,
  `periode` year(4) NOT NULL,
  `acc` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`id`, `id_rak`, `pengajuan`, `id_ormawa`, `periode`, `acc`, `status`, `komentar`) VALUES
(1, 0, 'RAK', 3, 2021, '1', 'Acc Kemahasiswaan', 'Ok'),
(2, 0, 'RAK', 16, 2021, '', '', ''),
(3, 1, 'proposal', 3, 2021, '2', 'Revisi Biro Akademik', 'Anggaran Kurang Lengkap'),
(4, 1, 'lpj', 3, 2021, '6', 'Acc Kaprodi Teknik Informatika', 'Ok'),
(7, 321, 'RAK', 3, 2021, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_ormawa`
--

CREATE TABLE `anggota_ormawa` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `periode` year(4) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_ormawa`
--

INSERT INTO `anggota_ormawa` (`id`, `id_pengguna`, `nama_anggota`, `npm`, `jurusan`, `jabatan`, `periode`, `status`) VALUES
(1, 8, 'Is;ahatun Nufusi', '1102171151', 'Teknik Informatika', 'Sekretaris', 2020, 'Aktif'),
(2, 8, 'Mahsifa', '1102171152', 'Teknik Informatika', 'Bendahara', 2020, 'Aktif'),
(3, 8, 'Yahya Maulana Fahrudin', '1102171151', 'Teknik Informatika', 'Ketua', 0000, 'Aktif'),
(4, 8, 'Ummi Athiyah', '1102171153', 'Teknik Informatika', 'Anggota', 0000, 'Aktif'),
(5, 8, 'Siska', '1102171161', 'Teknik Informatika', 'Anggota', 2020, 'Aktif'),
(6, 3, 'Aldo Dianata', '1102171166', 'Teknik Informatika', 'Anggota', 2021, 'Alumni'),
(7, 3, 'Islahatun Nufusi', '1102171151', 'Teknik Informatika', 'Anggota', 2020, 'Aktif'),
(8, 17, 'Yul Hendra', '00432421', 'Teknik Informatika', 'Ka Prodi', 2021, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `author` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` varchar(15) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `author`, `isi`, `foto`, `status`, `komentar`) VALUES
(2, 'Pengumuman Pengajuan Kegiatan', 'Kemahasiswaan', '<ol>\r\n	<li>harus seuai dengan RAK</li>\r\n	<li>Pengajuan tidak boleh lebih dari 7 hari sebelum kegiatan</li>\r\n</ol>', '', '', ''),
(6, 'Seminar Kependidikan', 'ESA', '<p>Acara Seminar Ini Dilaksanakan pada tanggal 14 Agustus 2021 Dalam Rangka Memperingati Hari Pramuka Indonesia yang diselenggaraan di Universitas Banten Jaya</p>', 'foto_11.jpg', 'Acc', 'Ok'),
(7, 'Pelatihan BPPTIK', 'Computer Community', '<p>Pelatihan Komputerisasi Computer Community yang bekerjasama dengan Lembaga Kominfo BPPTIK&nbsp; pelatihan ini diadakan pada tanggal 12 Januari 2021 selama 1 bulan dengan 3 Minggu pelatihan dan 1 hari assesment dengan 3 skema diantaranya desain grafis, web, jaringan, office . acara ini di lakukan secara online</p>', '052c71e2dfefe038d832ec2d7acbf856.jpg', 'Acc', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'Kemahasiswaan'),
(2, 'Biro Akademik'),
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
(3, 'Computer Community', 'Meningkatkan ilmu organisasi dan teknologi', 'membuat pembelajaran tiap minggu', 'ccunbaja@gmail.com', 'Logo_CC1.png', '$2y$10$5d8FoZxZtUzYF2D3Kfsj6Ohklq9T6Nn8hkIUgNcnKutsAasBV05Ly', 4, 1),
(8, 'Humanika', '', '', '', 'default.jpg', '$2y$10$Hl4n7AE.lNFpKyJYnqoWY.SK6pqB.XHXAK1ZtxRO8ow2WXKlzegrW', 5, 1),
(9, 'Himasi', '', '', '', 'default.jpg', '$2y$10$VY0VW7XVqaz0O1iaceV5POgAswobAh4vbQmyp5SUxXY50qFuOE7BW', 5, 0),
(10, 'ESA', '', '', '', 'default.jpg', '$2y$10$/3Baojf724Fe5Tr/hM4fS.zUjtX.JtlWCr2GmTrFqJPrXIeM0nMOG', 5, 1),
(11, 'Gempa', '', '', '', 'default.jpg', '$2y$10$tMrbtpfJC9p.XHep1QOgNOKTVc8HWf3E.cIOt/gsb.V3SvwPKxmPG', 4, 1),
(15, 'DPM', '', '', '', 'default.jpg', '$2y$10$lJvbJHUqB0vWnocOyWek7e0MhsL5rYC6R.XgRjhKhRaQufpyV8Bc2', 3, 1),
(16, 'BEM', '', '', '', 'default.jpg', '$2y$10$0d/CFNsJq15ddFnq9CVYX.kOB.xnW1YU3n/RzgE..IZc3upg5tEHC', 7, 1),
(17, 'Kaprodi Teknik Informatika', '', '', '', 'default.jpg', '$2y$10$Lb0bfFbwdHespF311pmfB.0yn3lbEqd6CdU0f1lCAl28di6dS26Ga', 6, 1),
(18, 'Biro Akademik', 'Meningaktakan Mutu akademik dan mahasiswa', 'melakukan hal yang terbaik', 'biroakademik@gmail.com', 'Logo-unbaja.png', '$2y$10$ucKFzFBKSpnTiXCCY9vFj.z0/W/JEonTSfewBVmdrO77Pw3ZKW4rW', 2, 1),
(19, 'HMCB', '', '', '', 'default.jpg', '$2y$10$DugrPQAOBi0gbVRuZuiaeeDBMSe12YDqbXm0Cwjl0FPPW8WyiN4Nm', 4, 1),
(20, 'Kompas', '', '', '', 'default.jpg', '$2y$10$RezFd1eIDRfIGrWwnMOsyOpGbzrdsZf5SawyNiCfB/yJkQtLms6Ra', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_anggaran`
--

CREATE TABLE `p_anggaran` (
  `id_anggaran` int(11) NOT NULL,
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

INSERT INTO `p_anggaran` (`id_anggaran`, `id_rak`, `id_pengguna`, `bagian`, `pengajuan`, `barang`, `harga`, `quality`) VALUES
(1, 2, 3, '', 'Proposal', 'Batrai Mic', 5000, 2),
(2, 2, 3, '', 'Proposal', 'spanguk', 70000, 1),
(3, 2, 3, 'pubdekdoklat', 'Proposal', 'balon', 2000, 10),
(4, 2, 3, 'humas', 'Proposal', 'bensin', 10000, 5),
(5, 1, 3, 'humas', 'LPJ', 'bensin', 10000, 2),
(6, 3, 3, 'Konsumsi', 'LPJ', 'Air Mineral', 20000, 2),
(12, 1, 3, 'Konsumsi', 'Proposal', 'Air Mineral', 20000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_jadwal`
--

CREATE TABLE `p_jadwal` (
  `id_jadwal` int(11) NOT NULL,
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

INSERT INTO `p_jadwal` (`id_jadwal`, `id_rak`, `id_pengguna`, `pengajuan`, `tanggal`, `mulai`, `selesai`, `kegiatan`, `keterangan`) VALUES
(1, 1, 3, 'Proposal', '2021-06-04', '00:59:00', '01:02:00', 'Pembukaan', 'Mc'),
(2, 1, 3, 'Proposal', '2021-06-04', '01:02:00', '04:00:00', 'sambutan kepala sekolah', 'kepala sekolah'),
(3, 1, 3, 'LPJ', '2021-07-07', '21:05:00', '21:05:00', 'pembukaan', 'mc');

-- --------------------------------------------------------

--
-- Table structure for table `p_lampiran`
--

CREATE TABLE `p_lampiran` (
  `id_lampiran` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `pengajuan` varchar(15) NOT NULL,
  `lampiran1` varchar(50) NOT NULL,
  `lampiran2` varchar(50) NOT NULL,
  `lampiran3` varchar(50) NOT NULL,
  `lampiran4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_lampiran`
--

INSERT INTO `p_lampiran` (`id_lampiran`, `id_rak`, `id_pengguna`, `pengajuan`, `lampiran1`, `lampiran2`, `lampiran3`, `lampiran4`) VALUES
(0, 1, 3, 'lpj', '01__Prinsip_dasar_desain_(1)3.pdf', '03_Menerapkan_Design_Brief_(4).pdf', '03__DESIGN_BRIEF2.pdf', '05__Menciptakan_karya_desain_(2).pdf');

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
  `pengajuan` varchar(10) NOT NULL,
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
(3, 9, 'proposal', 'Robotik', '<p>dizaman yang sudah canggih ini banyak sekai hal yang mulai digantikan dengan robot</p>', 'tujuan dari kegiatan ini adalah menciptakan robot', 'sasaran kegiatan ini adalah anak smk umum', '17:02:00', '17:07:00', 'kampus 2'),
(5, 1, 'lpj', 'memajukan teknologi', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla', 'tujuan diadakannya acara ini adalah untuk memberikan pengetauan tentang it', 'sasaran peserta kegiatan ini adalah smk dan umum', '08:00:00', '09:00:00', 'kampus 1');

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
(10, 16, 2021, 'SEMINAR', 'SEMINAR', 'UMUM', '2021-06-30', 5000000),
(11, 3, 2022, 'hhhh', 'hhhhh', 'hhhhh', '2021-07-13', 6000000);

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
(3, 1, 3),
(4, 1, 8),
(5, 1, 9),
(6, 2, 1),
(7, 2, 3),
(8, 2, 8),
(9, 2, 14),
(10, 3, 2),
(11, 3, 3),
(12, 3, 8),
(13, 4, 2),
(14, 4, 3),
(15, 4, 5),
(16, 4, 6),
(17, 4, 10),
(18, 5, 2),
(19, 5, 3),
(20, 5, 5),
(21, 5, 6),
(22, 5, 10),
(23, 6, 1),
(24, 6, 3),
(25, 6, 8),
(26, 7, 2),
(27, 7, 3),
(28, 7, 5),
(29, 7, 6),
(30, 7, 8),
(31, 7, 10);

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
(6, 'Pengajuan Kegiatan', 'pengajuan/proposal', ''),
(7, 'Dashboard', 'Biro_Akademik', ''),
(8, 'Acc Pengajuan ', 'acc/acc_pengajuan', ''),
(9, 'Pengumuman', 'kemahasiswaan/pengumuman', ''),
(10, 'Artikel', 'ormawa/artikel', ''),
(14, 'Persetujuan Artikel', 'acc/artikel', '');

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
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_anggaran`
--
ALTER TABLE `p_anggaran`
  ADD PRIMARY KEY (`id_anggaran`);

--
-- Indexes for table `p_jadwal`
--
ALTER TABLE `p_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `anggota_ormawa`
--
ALTER TABLE `anggota_ormawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `p_anggaran`
--
ALTER TABLE `p_anggaran`
  MODIFY `id_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `p_jadwal`
--
ALTER TABLE `p_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p_proposal`
--
ALTER TABLE `p_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `p_rak`
--
ALTER TABLE `p_rak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
