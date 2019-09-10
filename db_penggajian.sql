-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 11:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_gtt` (IN `GTT` INT(3))  NO SQL
SELECT * FROM status WHERE `id_status`=GTT$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_struk_gaji` (IN `id_pegawai_input` INT)  NO SQL
SELECT * FROM tes_laporan WHERE id_pegawai=id_pegawai_input AND month(created_at)=month(now()) AND year(created_at)=year(now())$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gapok`
--

CREATE TABLE `gapok` (
  `id_gapok` int(11) NOT NULL,
  `gapok` int(12) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gapok`
--

INSERT INTO `gapok` (`id_gapok`, `gapok`, `updated_at`, `created_at`) VALUES
(1, 100000, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `honor`
--

CREATE TABLE `honor` (
  `id_honor` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `jenis_honor` varchar(50) NOT NULL,
  `nominal` int(12) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `honor`
--

INSERT INTO `honor` (`id_honor`, `id_pegawai`, `jenis_honor`, `nominal`, `updated_at`, `created_at`) VALUES
(4, 2, 'Kepala Sekolah', 250000, '2018-07-26 05:44:48', '2018-07-24 23:55:12'),
(6, 3, 'Ketua Pelaksana', 200000, '2018-07-26 05:43:43', '2018-07-26 05:43:43'),
(7, 7, 'Sekertaris', 200000, '2018-07-26 05:44:41', '2018-07-26 05:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `jenistunjangan`
--

CREATE TABLE `jenistunjangan` (
  `id_jenis` int(11) NOT NULL,
  `tunjangan` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenistunjangan`
--

INSERT INTO `jenistunjangan` (`id_jenis`, `tunjangan`, `nominal`, `updated_at`, `created_at`) VALUES
(4, 'T. Transportasi', 30000, '2018-07-01 05:33:38', '0000-00-00 00:00:00'),
(7, 'T. Kinerja', 20000, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `kali_kinerja`
--
CREATE TABLE `kali_kinerja` (
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_status` int(2) NOT NULL,
  `id_gapok` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL,
  `id_kesehatan` int(11) NOT NULL,
  `id_fungsional` int(11) NOT NULL,
  `id_pensiun` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `transportasi` int(11) DEFAULT '0',
  `kinerja` int(11) DEFAULT '0',
  `id_gtt` int(11) NOT NULL,
  `id_potongan` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `jabatan`, `id_status`, `id_gapok`, `id_keluarga`, `id_kesehatan`, `id_fungsional`, `id_pensiun`, `id_jabatan`, `transportasi`, `kinerja`, `id_gtt`, `id_potongan`, `updated_at`, `created_at`) VALUES
(1, 'Eni Fitriani, S.S.', '096352733436', 'Kepala Sekolah', 1, 1, 4, 1, 1, 1, 1, 30000, 20000, 1, 1, '2018-07-25 11:57:27', '2018-07-21 09:03:57'),
(2, 'Fitri Sari, S.Pd', '56735781391', 'Waka Kesiswaan', 1, 1, 3, 1, 1, 1, 1, 30000, 20000, 1, 1, '2018-07-22 01:37:24', '2018-07-22 01:37:24'),
(3, 'Fahmi Yusro, ST', '201607 03 1 016', 'Waka Kurikulum + Lab. Komputer', 1, 1, 2, 1, 1, 1, 1, 30000, 20000, 1, 1, '2018-08-01 01:48:18', '2018-07-22 01:38:36'),
(4, 'Daniel Endarto, S.Pd', '005651816727', 'Wali Kelas', 1, 1, 3, 1, 1, 1, 1, 30000, 20000, 1, 1, '2018-07-31 23:48:47', '0000-00-00 00:00:00'),
(5, 'Erliani Pratiwi, S.Pd', '567325487', 'Koor. BK', 2, 1, 5, 3, 2, 2, 1, 30000, 20000, 2, 2, '2018-07-22 01:41:02', '2018-07-22 01:41:02'),
(6, 'Ismi Sujastika, S.Pd', '573484381', 'PJ. Pramuka', 2, 1, 5, 3, 2, 2, 1, 30000, 20000, 2, 2, '2018-08-01 00:02:51', '2018-08-01 00:02:51'),
(7, 'Yunita Fitri Astuti, S.P', '76328689', 'Bendahara', 3, 1, 2, 4, 1, 3, 1, 30000, 20000, 1, 3, '2018-07-22 01:42:37', '2018-07-22 01:42:37'),
(8, 'Dewi Supriyanti, S.E', '757543', 'TU', 4, 1, 5, 2, 2, 2, 2, 30000, 20000, 2, 2, '2018-08-03 23:52:08', '2018-07-22 01:45:53'),
(9, 'Riska Rahmatul Janah, S. Si.', '7674629', 'Direktur Politeknik Negeri Lampung', 1, 1, 6, 5, 4, 5, 3, 30000, 20000, 3, 4, '2018-08-06 09:34:24', '2018-07-22 02:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_gty`
--

CREATE TABLE `pegawai_gty` (
  `id_gty` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `id_status` int(11) NOT NULL,
  `gapok` int(11) NOT NULL,
  `t_keluarga` int(11) NOT NULL,
  `t_kesehatan` int(11) NOT NULL,
  `t_fungsional` int(11) NOT NULL,
  `t_jabatan` int(11) NOT NULL,
  `t_transportasi` int(11) NOT NULL,
  `t_kinerja` int(11) NOT NULL,
  `t_pensiun` int(11) NOT NULL,
  `t_gtt` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_gty`
--

INSERT INTO `pegawai_gty` (`id_gty`, `nip`, `nama`, `jabatan`, `id_status`, `gapok`, `t_keluarga`, `t_kesehatan`, `t_fungsional`, `t_jabatan`, `t_transportasi`, `t_kinerja`, `t_pensiun`, `t_gtt`, `updated_at`, `created_at`) VALUES
(7, '00943217792301', 'Yunita Fitri Astuti, S.P', 'Bendahara', 3, 100000, 10000, 90000, 100000, 100000, 30000, 20000, 90000, 0, '2018-07-16 04:25:57', '2018-07-16 04:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `potongan`
--

CREATE TABLE `potongan` (
  `id_potongan` int(11) NOT NULL,
  `potongan` varchar(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potongan`
--

INSERT INTO `potongan` (`id_potongan`, `potongan`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 'GTY', 210000, '0000-00-00', '0000-00-00'),
(2, 'GTT-PTT', 100000, '2018-08-01', '0000-00-00'),
(3, 'PTY', 290000, '0000-00-00', '0000-00-00'),
(4, 'CUTI', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(10) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`, `updated_at`, `created_at`) VALUES
(1, 'GTY', '0000-00-00', '0000-00-00'),
(2, 'GTT', '0000-00-00', '0000-00-00'),
(3, 'PTY', '0000-00-00', '0000-00-00'),
(4, 'PTT', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_coba`
--
CREATE TABLE `total_coba` (
`total_coba` bigint(31)
);

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan`
--

CREATE TABLE `tunjangan` (
  `id_tunjangan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tanggal_gajian` date NOT NULL,
  `jmlh_transport` int(12) NOT NULL DEFAULT '0',
  `jmlh_kinerja` int(12) NOT NULL DEFAULT '0',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id_tunjangan`, `id_pegawai`, `tanggal_gajian`, `jmlh_transport`, `jmlh_kinerja`, `updated_at`, `created_at`) VALUES
(1, 1, '2018-07-01', 19, 11, '2018-08-03 23:53:22', '2018-07-27 05:24:34'),
(2, 2, '2018-07-01', 18, 11, '2018-08-03 23:53:36', '2018-07-21 06:52:43'),
(3, 3, '2018-07-01', 20, 19, '2018-08-03 23:53:47', '2018-07-22 01:47:02'),
(4, 4, '2018-07-01', 19, 17, '2018-08-03 23:54:02', '2018-07-22 01:47:39'),
(5, 5, '2018-07-01', 19, 16, '2018-08-03 23:54:14', '2018-07-22 01:48:49'),
(6, 6, '2018-07-01', 18, 16, '2018-08-03 23:54:31', '2018-07-27 05:22:36'),
(7, 7, '2018-07-01', 15, 13, '2018-08-03 23:54:42', '2018-07-27 05:22:57'),
(8, 8, '2018-07-01', 19, 7, '2018-08-03 23:54:57', '2018-07-27 05:23:13'),
(9, 9, '2018-07-01', 0, 0, '2018-08-03 23:55:09', '2018-07-27 05:23:27'),
(12, 9, '2018-08-01', 12, 12, '2018-08-03 23:55:38', '2018-08-03 23:46:52'),
(13, 1, '2018-08-01', 12, 11, '2018-08-06 08:06:09', '2018-08-06 08:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_fungsional`
--

CREATE TABLE `tunjangan_fungsional` (
  `id_fungsional` int(11) NOT NULL,
  `jenis_fungsional` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan_fungsional`
--

INSERT INTO `tunjangan_fungsional` (`id_fungsional`, `jenis_fungsional`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 'Tunjangan GTY-PTY', 100000, '2018-08-01 02:04:01', '0000-00-00 00:00:00'),
(2, 'Tunjangan GTT-PTT', 0, '2018-08-01 02:04:10', '0000-00-00 00:00:00'),
(3, 'Tunjangan PTY Kebersihan', 150000, '2018-08-01 02:04:36', '0000-00-00 00:00:00'),
(4, 'CUTI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_gtt`
--

CREATE TABLE `tunjangan_gtt` (
  `id_gtt` int(11) NOT NULL,
  `jenis_gtt` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan_gtt`
--

INSERT INTO `tunjangan_gtt` (`id_gtt`, `jenis_gtt`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 'Tunjangan GTY-PTY', 0, '2018-08-01 02:05:04', '0000-00-00 00:00:00'),
(2, 'Tunjangan GTT-PTT', 100000, '2018-08-01 02:05:15', '0000-00-00 00:00:00'),
(3, 'CUTI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_jabatan`
--

CREATE TABLE `tunjangan_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jenis_jabatan` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan_jabatan`
--

INSERT INTO `tunjangan_jabatan` (`id_jabatan`, `jenis_jabatan`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 'Yes', 100000, '2018-07-30 07:16:15', '0000-00-00 00:00:00'),
(2, 'No', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'CUTI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_keluarga`
--

CREATE TABLE `tunjangan_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `jenis_keluarga` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan_keluarga`
--

INSERT INTO `tunjangan_keluarga` (`id_keluarga`, `jenis_keluarga`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 'Belum Menikah', 0, '2018-06-26 07:21:07', '0000-00-00 00:00:00'),
(2, 'Sudah Menikah', 10000, '2018-07-30 07:09:11', '0000-00-00 00:00:00'),
(3, 'Jumlah Anak 1', 12000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Jumlah Anak 2', 14000, '2018-06-26 06:58:13', '0000-00-00 00:00:00'),
(5, 'Tunjangan GTT-PTT', 0, '2018-08-01 02:02:45', '0000-00-00 00:00:00'),
(6, 'CUTI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_kesehatan`
--

CREATE TABLE `tunjangan_kesehatan` (
  `id_kesehatan` int(11) NOT NULL,
  `jenis_kesehatan` varchar(25) NOT NULL,
  `nominal` int(12) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan_kesehatan`
--

INSERT INTO `tunjangan_kesehatan` (`id_kesehatan`, `jenis_kesehatan`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 'Tunjangan GTY-PTY', 10000, '2018-08-01 02:07:08', '0000-00-00 00:00:00'),
(2, 'Tunjangan GTT-PTT', 0, '2018-08-01 02:03:39', '0000-00-00 00:00:00'),
(3, 'Tunjangan PTY Bendahara', 90000, '2018-08-01 02:11:04', '0000-00-00 00:00:00'),
(4, 'Tunjangan PTY Kebersihan', 73500, '2018-08-01 02:11:14', '0000-00-00 00:00:00'),
(5, 'CUTI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_pensiun`
--

CREATE TABLE `tunjangan_pensiun` (
  `id_pensiun` int(11) NOT NULL,
  `jenis_pensiun` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan_pensiun`
--

INSERT INTO `tunjangan_pensiun` (`id_pensiun`, `jenis_pensiun`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 'Tunjangan GTY-PTY', 10000, '2018-08-01 02:06:12', '0000-00-00 00:00:00'),
(2, 'Tunjangan GTT-PTT', 0, '2018-08-01 02:05:56', '0000-00-00 00:00:00'),
(3, 'Tunjangan PTY Bendahara', 90000, '2018-08-01 02:06:31', '0000-00-00 00:00:00'),
(4, 'Tunjangan PTY Kebersihan', 73500, '2018-08-01 02:06:43', '0000-00-00 00:00:00'),
(5, 'CUTI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Riska', 'riskarahamatul16@gmail.com', '$2y$10$Xu6d5fil6HsTZjDsMdUtnu7vo4iVckNwdm4gxtGxfxx/HgXEdKtJ6', '7AILtYAhrb8vHXuAeyeQdUXo01ig6dJ83xHTKjntrfR88AKt54xp6aNHktx0', '2018-03-26 21:47:31', '2018-04-02 19:40:56', 0),
(3, 'Admin', 'admin@gmail.com', '$2y$10$YYZYRK.OcMtILtss8pT6I.wf3gsEnc3kvAqfMOm1IxiccdjT0Uc9O', '7yU4Fl9MwyRvGLGHxNbFDspkPR8EWuY1hbvSZdQLa0omHWYfcDiXQN1azJLu', '2018-05-18 21:06:00', '2018-07-30 00:33:16', 0),
(5, 'Bendahara', 'bendahara@gmail.com', '$2y$10$fmtH/xnUS5S3MRFkVG6j.uRXE0GIK4.O9Fg7Igk7F57c6VtenSgze', 'iZnb8HZuR0MPLCCVhgEQiUknCb1mMWomx4jaM8x743mFW5I7N4ob3pVRG0gu', '2018-07-30 00:33:41', '2018-07-30 07:58:07', 1),
(6, 'Kepala Sekolah', 'kepsek@gmail.com', '$2y$10$32JEjAmcZQyuBSDG4Ecxguw54aKR.lzk7MFTT3KddnMxKHTNG0GfK', 'mFnERazPo6DFURtRAP4VdkNuRxb4ubI0ZM9vM2x5wM30qQHjdLzeuvLSOSgm', '2018-07-30 03:28:23', '2018-07-30 06:15:36', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pegawai`
--
CREATE TABLE `view_pegawai` (
`tanggal_gajian` date
,`id_tunjangan` int(11)
,`id_pegawai` int(11)
,`nip` varchar(15)
,`nama` varchar(50)
,`jabatan` varchar(50)
,`nama_status` varchar(10)
,`gapok` int(12)
,`keluarga` int(11)
,`fungsional` int(11)
,`tjabatan` int(11)
,`kinerja` int(11)
,`jmlh_kinerja` int(12)
,`transportasi` int(11)
,`jmlh_transport` int(12)
,`kesehatan` int(12)
,`pensiun` int(11)
,`gtt` int(11)
,`total` bigint(30)
,`potongan` int(11)
,`total_bersih` bigint(31)
);

-- --------------------------------------------------------

--
-- Structure for view `kali_kinerja`
--
DROP TABLE IF EXISTS `kali_kinerja`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kali_kinerja`  AS  select (`view_kinerja`.`kinerja` * `view_kinerja`.`jmlh_kinerja`) AS `kali_kinerja` from `view_kinerja` ;

-- --------------------------------------------------------

--
-- Structure for view `total_coba`
--
DROP TABLE IF EXISTS `total_coba`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_coba`  AS  select `view_pegawai`.`total_bersih` AS `total_coba` from `view_pegawai` ;

-- --------------------------------------------------------

--
-- Structure for view `view_pegawai`
--
DROP TABLE IF EXISTS `view_pegawai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pegawai`  AS  select `tunjangan`.`tanggal_gajian` AS `tanggal_gajian`,`tunjangan`.`id_tunjangan` AS `id_tunjangan`,`pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`jabatan` AS `jabatan`,`status`.`nama_status` AS `nama_status`,`gapok`.`gapok` AS `gapok`,`tunjangan_keluarga`.`nominal` AS `keluarga`,`tunjangan_fungsional`.`nominal` AS `fungsional`,`tunjangan_jabatan`.`nominal` AS `tjabatan`,`pegawai`.`kinerja` AS `kinerja`,`tunjangan`.`jmlh_kinerja` AS `jmlh_kinerja`,`pegawai`.`transportasi` AS `transportasi`,`tunjangan`.`jmlh_transport` AS `jmlh_transport`,`tunjangan_kesehatan`.`nominal` AS `kesehatan`,`tunjangan_pensiun`.`nominal` AS `pensiun`,`tunjangan_gtt`.`nominal` AS `gtt`,(((((((((`pegawai`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`pegawai`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `gapok`.`gapok`) + `tunjangan_fungsional`.`nominal`) + `tunjangan_jabatan`.`nominal`) + `tunjangan_pensiun`.`nominal`) + `tunjangan_gtt`.`nominal`) + `tunjangan_keluarga`.`nominal`) + `tunjangan_kesehatan`.`nominal`) AS `total`,`potongan`.`nominal` AS `potongan`,((((((((((`pegawai`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`pegawai`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `gapok`.`gapok`) + `tunjangan_fungsional`.`nominal`) + `tunjangan_jabatan`.`nominal`) + `tunjangan_pensiun`.`nominal`) + `tunjangan_gtt`.`nominal`) + `tunjangan_keluarga`.`nominal`) + `tunjangan_kesehatan`.`nominal`) - `potongan`.`nominal`) AS `total_bersih` from ((((((((((`pegawai` left join `gapok` on((`pegawai`.`id_gapok` = `gapok`.`id_gapok`))) left join `tunjangan_keluarga` on((`pegawai`.`id_keluarga` = `tunjangan_keluarga`.`id_keluarga`))) left join `tunjangan_fungsional` on((`pegawai`.`id_fungsional` = `tunjangan_fungsional`.`id_fungsional`))) left join `status` on((`pegawai`.`id_status` = `status`.`id_status`))) left join `tunjangan` on((`tunjangan`.`id_pegawai` = `pegawai`.`id_pegawai`))) left join `tunjangan_jabatan` on((`pegawai`.`id_jabatan` = `tunjangan_jabatan`.`id_jabatan`))) left join `tunjangan_pensiun` on((`pegawai`.`id_pensiun` = `tunjangan_pensiun`.`id_pensiun`))) left join `tunjangan_kesehatan` on((`pegawai`.`id_kesehatan` = `tunjangan_kesehatan`.`id_kesehatan`))) left join `tunjangan_gtt` on((`pegawai`.`id_gtt` = `tunjangan_gtt`.`id_gtt`))) left join `potongan` on((`pegawai`.`id_potongan` = `potongan`.`id_potongan`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gapok`
--
ALTER TABLE `gapok`
  ADD PRIMARY KEY (`id_gapok`);

--
-- Indexes for table `honor`
--
ALTER TABLE `honor`
  ADD PRIMARY KEY (`id_honor`);

--
-- Indexes for table `jenistunjangan`
--
ALTER TABLE `jenistunjangan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_keluarga` (`id_keluarga`),
  ADD KEY `id_kesehatan` (`id_kesehatan`),
  ADD KEY `id_gapok` (`id_gapok`),
  ADD KEY `id_fungsional` (`id_fungsional`),
  ADD KEY `id_pensiun` (`id_pensiun`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_gtt` (`id_gtt`);

--
-- Indexes for table `pegawai_gty`
--
ALTER TABLE `pegawai_gty`
  ADD PRIMARY KEY (`id_gty`);

--
-- Indexes for table `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`id_potongan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD PRIMARY KEY (`id_tunjangan`);

--
-- Indexes for table `tunjangan_fungsional`
--
ALTER TABLE `tunjangan_fungsional`
  ADD PRIMARY KEY (`id_fungsional`);

--
-- Indexes for table `tunjangan_gtt`
--
ALTER TABLE `tunjangan_gtt`
  ADD PRIMARY KEY (`id_gtt`);

--
-- Indexes for table `tunjangan_jabatan`
--
ALTER TABLE `tunjangan_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tunjangan_keluarga`
--
ALTER TABLE `tunjangan_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `tunjangan_kesehatan`
--
ALTER TABLE `tunjangan_kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`);

--
-- Indexes for table `tunjangan_pensiun`
--
ALTER TABLE `tunjangan_pensiun`
  ADD PRIMARY KEY (`id_pensiun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gapok`
--
ALTER TABLE `gapok`
  MODIFY `id_gapok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `honor`
--
ALTER TABLE `honor`
  MODIFY `id_honor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenistunjangan`
--
ALTER TABLE `jenistunjangan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pegawai_gty`
--
ALTER TABLE `pegawai_gty`
  MODIFY `id_gty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `potongan`
--
ALTER TABLE `potongan`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tunjangan`
--
ALTER TABLE `tunjangan`
  MODIFY `id_tunjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tunjangan_fungsional`
--
ALTER TABLE `tunjangan_fungsional`
  MODIFY `id_fungsional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tunjangan_gtt`
--
ALTER TABLE `tunjangan_gtt`
  MODIFY `id_gtt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tunjangan_jabatan`
--
ALTER TABLE `tunjangan_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tunjangan_keluarga`
--
ALTER TABLE `tunjangan_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tunjangan_kesehatan`
--
ALTER TABLE `tunjangan_kesehatan`
  MODIFY `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tunjangan_pensiun`
--
ALTER TABLE `tunjangan_pensiun`
  MODIFY `id_pensiun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
