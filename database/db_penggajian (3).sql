-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 07:01 AM
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
  `tanggal_honor` date NOT NULL,
  `jenis_honor` varchar(50) NOT NULL,
  `nominal` int(12) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `honor`
--

INSERT INTO `honor` (`id_honor`, `id_pegawai`, `tanggal_honor`, `jenis_honor`, `nominal`, `updated_at`, `created_at`) VALUES
(1, 23, '2018-08-14', 'Programmer', 500000, '2018-08-14 04:49:43', '2018-08-14 04:49:43');

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
(4, 'T. Transportasi', 30000, '2018-08-08 04:14:46', '0000-00-00 00:00:00'),
(7, 'T. Kinerja', 20000, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
('2014_10_12_100000_create_password_resets_table', 1),
('2018_08_10_024643_entrust_setup_tables', 1);

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
  `keterangan` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `jabatan`, `id_status`, `id_gapok`, `id_keluarga`, `id_kesehatan`, `id_fungsional`, `id_pensiun`, `id_jabatan`, `transportasi`, `kinerja`, `id_gtt`, `id_potongan`, `keterangan`, `updated_at`, `created_at`) VALUES
(23, 'Riska Rahmatul Janah, S.Si.', '45425435', 'Wali Kelas', 1, 1, 1, 1, 1, 1, 1, 30000, 20000, 1, 1, 'Aktif', '2018-08-13 12:59:19', '2018-08-10 23:21:55'),
(24, 'Yohana Ayu', '7857835', 'Bendahara', 3, 1, 2, 3, 1, 3, 1, 30000, 20000, 1, 3, 'Aktif', '2018-08-10 23:23:02', '2018-08-10 23:23:02'),
(25, 'Tri Okta', '5783267', 'Direktur', 2, 1, 5, 2, 2, 2, 1, 30000, 20000, 2, 2, 'Aktif', '2018-08-10 23:23:52', '2018-08-10 23:23:52'),
(28, 'Vanny', '74531', 'Wali Kelas', 1, 1, 1, 1, 1, 1, 1, 30000, 20000, 1, 1, 'Aktif', '2018-08-14 04:33:03', '2018-08-14 04:07:46');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'GTY', 150000, '2018-08-13', '0000-00-00'),
(2, 'GTT-PTT', 100000, '2018-08-07', '0000-00-00'),
(3, 'PTY', 200000, '2018-08-13', '0000-00-00'),
(5, 'Kebersihan', 210000, '2018-08-13', '0000-00-00'),
(6, 'Satpam', 200000, '0000-00-00', '0000-00-00'),
(7, 'Cuti', 0, '0000-00-00', '0000-00-00'),
(8, 'Tidak Aktif', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'Bendahara', 'Bendahara', '2018-08-09 21:02:35', '2018-08-09 21:02:35'),
(7, 'kepsek', 'Kepala Sekolah', 'Kepala Sekolah', '2018-08-09 21:02:35', '2018-08-09 21:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 6),
(4, 7);

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
  `keterangan` enum('Aktif','Tidak Aktif','Cuti','') NOT NULL DEFAULT 'Aktif',
  `potongan` int(20) NOT NULL,
  `tanggal_gajian` date NOT NULL,
  `jmlh_transport` int(12) NOT NULL DEFAULT '0',
  `jmlh_kinerja` int(12) NOT NULL DEFAULT '0',
  `gapok` int(11) NOT NULL,
  `keluarga` int(11) NOT NULL,
  `fungsional` int(11) NOT NULL,
  `tjabatan` int(11) NOT NULL,
  `kinerja` int(11) NOT NULL,
  `transportasi` int(11) NOT NULL,
  `kesehatan` int(11) NOT NULL,
  `pensiun` int(11) NOT NULL,
  `gtt` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id_tunjangan`, `id_pegawai`, `keterangan`, `potongan`, `tanggal_gajian`, `jmlh_transport`, `jmlh_kinerja`, `gapok`, `keluarga`, `fungsional`, `tjabatan`, `kinerja`, `transportasi`, `kesehatan`, `pensiun`, `gtt`, `updated_at`, `created_at`) VALUES
(47, 23, 'Aktif', 150000, '2018-08-14', 28, 16, 100000, 0, 100000, 100000, 20000, 30000, 10000, 10000, 0, '2018-08-14 04:33:39', '2018-08-14 04:33:39'),
(48, 24, 'Aktif', 200000, '2018-08-14', 26, 24, 100000, 10000, 100000, 100000, 20000, 30000, 90000, 90000, 0, '2018-08-14 04:33:58', '2018-08-14 04:33:58'),
(49, 25, 'Aktif', 100000, '2018-08-14', 26, 25, 100000, 0, 0, 100000, 20000, 30000, 0, 0, 100000, '2018-08-14 04:34:23', '2018-08-14 04:34:23'),
(51, 28, 'Cuti', 0, '2018-08-14', 0, 0, 100000, 0, 0, 0, 0, 0, 0, 0, 0, '2018-08-14 04:48:38', '2018-08-14 04:46:46');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Bu Nita', 'nita@fitrahinsani.sch.id', '$2y$10$xxy38oPCdvAhsYNgsU1Ge.Y0JAdaR0SsD/QFt5xdjjYOvrxQAr0sW', '5Uy4stTyTZDunYADrN0vfQpEFKeINAyQNBIOGidC568MuL5gMjayaCGLkDdp', '2018-08-09 21:02:36', '2018-08-13 19:29:41'),
(3, 'Bu Eni', 'eni@fitrahinsani.sch.id', 'a2ed32cae296647110b3dbbf60c3f445', NULL, NULL, NULL),
(4, 'bu eni fitriani', 'kepsek@fitrahinsani.sch.id', '$2y$10$e/OQYeXTDJhS5RcMU5fwT.th16asVOAnznUh4gZpVkIu9tcUvHWKS', 'ybEDq6OB3sMS7yi4zr6IMNSWxwsG8DgHe3Zi1qAWSoZu7PXY0WGsO1E93Tou', '2018-08-09 21:15:46', '2018-08-13 19:52:45');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_aktif`
--
CREATE TABLE `view_aktif` (
`tanggal_gajian` date
,`id_tunjangan` int(11)
,`id_pegawai` int(11)
,`nip` varchar(15)
,`nama` varchar(50)
,`jabatan` varchar(50)
,`nama_status` varchar(10)
,`gapok` int(11)
,`keluarga` int(11)
,`fungsional` int(11)
,`tjabatan` int(11)
,`kinerja` int(11)
,`transportasi` int(11)
,`gtt` int(11)
,`kesehatan` int(11)
,`pensiun` int(11)
,`potonganlain` int(20)
,`keterangan` enum('Aktif','Tidak Aktif','Cuti','')
,`jmlh_kinerja` int(12)
,`jmlh_transport` int(12)
,`total` bigint(28)
,`jumlahpotongan` bigint(22)
,`total_bersih` bigint(31)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_cuti`
--
CREATE TABLE `view_cuti` (
`tanggal_gajian` date
,`id_tunjangan` int(11)
,`id_pegawai` int(11)
,`nip` varchar(15)
,`nama` varchar(50)
,`jabatan` varchar(50)
,`nama_status` varchar(10)
,`gapok` int(11)
,`keluarga` int(11)
,`fungsional` int(11)
,`tjabatan` int(11)
,`kinerja` int(11)
,`transportasi` int(11)
,`gtt` int(11)
,`kesehatan` int(11)
,`pensiun` int(11)
,`potonganlain` int(20)
,`keterangan` enum('Aktif','Tidak Aktif','Cuti','')
,`jmlh_kinerja` int(12)
,`jmlh_transport` int(12)
,`total` bigint(28)
,`jumlahpotongan` bigint(22)
,`total_bersih` bigint(31)
);

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
-- Stand-in structure for view `view_tidakaktif`
--
CREATE TABLE `view_tidakaktif` (
`tanggal_gajian` date
,`id_tunjangan` int(11)
,`id_pegawai` int(11)
,`nip` varchar(15)
,`nama` varchar(50)
,`jabatan` varchar(50)
,`nama_status` varchar(10)
,`gapok` int(11)
,`keluarga` int(11)
,`fungsional` int(11)
,`tjabatan` int(11)
,`kinerja` int(11)
,`transportasi` int(11)
,`gtt` int(11)
,`kesehatan` int(11)
,`pensiun` int(11)
,`potonganlain` int(20)
,`keterangan` enum('Aktif','Tidak Aktif','Cuti','')
,`jmlh_kinerja` int(12)
,`jmlh_transport` int(12)
,`total` bigint(28)
,`jumlahpotongan` bigint(22)
,`total_bersih` bigint(31)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_total`
--
CREATE TABLE `view_total` (
`tanggal_gajian` date
,`id_tunjangan` int(11)
,`id_pegawai` int(11)
,`nip` varchar(15)
,`nama` varchar(50)
,`jabatan` varchar(50)
,`nama_status` varchar(10)
,`gapok` int(11)
,`keluarga` int(11)
,`fungsional` int(11)
,`tjabatan` int(11)
,`kinerja` int(11)
,`transportasi` int(11)
,`gtt` int(11)
,`kesehatan` int(11)
,`pensiun` int(11)
,`potonganlain` int(20)
,`keterangan` enum('Aktif','Tidak Aktif','Cuti','')
,`jmlh_kinerja` int(12)
,`jmlh_transport` int(12)
,`total` bigint(28)
,`jumlahpotongan` bigint(22)
,`total_bersih` bigint(31)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_tunjangan`
--
CREATE TABLE `view_tunjangan` (
`id_pegawai` int(11)
,`nip` varchar(15)
,`nama` varchar(50)
,`keterangan` enum('Aktif','Tidak Aktif')
,`jabatan` varchar(50)
,`nama_status` varchar(10)
,`gapok` int(12)
,`keluarga` int(11)
,`fungsional` int(11)
,`tjabatan` int(11)
,`kinerja` int(11)
,`transportasi` int(11)
,`kesehatan` int(12)
,`pensiun` int(11)
,`gtt` int(11)
,`potongan` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `total_coba`
--
DROP TABLE IF EXISTS `total_coba`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_coba`  AS  select `view_pegawai`.`total_bersih` AS `total_coba` from `view_pegawai` ;

-- --------------------------------------------------------

--
-- Structure for view `view_aktif`
--
DROP TABLE IF EXISTS `view_aktif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_aktif`  AS  select `tunjangan`.`tanggal_gajian` AS `tanggal_gajian`,`tunjangan`.`id_tunjangan` AS `id_tunjangan`,`pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`jabatan` AS `jabatan`,`status`.`nama_status` AS `nama_status`,`tunjangan`.`gapok` AS `gapok`,`tunjangan`.`keluarga` AS `keluarga`,`tunjangan`.`fungsional` AS `fungsional`,`tunjangan`.`tjabatan` AS `tjabatan`,`tunjangan`.`kinerja` AS `kinerja`,`tunjangan`.`transportasi` AS `transportasi`,`tunjangan`.`gtt` AS `gtt`,`tunjangan`.`kesehatan` AS `kesehatan`,`tunjangan`.`pensiun` AS `pensiun`,`tunjangan`.`potongan` AS `potonganlain`,`tunjangan`.`keterangan` AS `keterangan`,`tunjangan`.`jmlh_kinerja` AS `jmlh_kinerja`,`tunjangan`.`jmlh_transport` AS `jmlh_transport`,(((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`keluarga`) + `tunjangan`.`gtt`) AS `total`,((`tunjangan`.`potongan` + `tunjangan`.`kesehatan`) + `tunjangan`.`pensiun`) AS `jumlahpotongan`,((((((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`gtt`) + `tunjangan`.`keluarga`) - `tunjangan`.`potongan`) - `tunjangan`.`kesehatan`) - `tunjangan`.`pensiun`) AS `total_bersih` from (((`pegawai` left join `status` on((`pegawai`.`id_status` = `status`.`id_status`))) left join `potongan` on((`pegawai`.`id_potongan` = `potongan`.`id_potongan`))) left join `tunjangan` on((`tunjangan`.`id_pegawai` = `pegawai`.`id_pegawai`))) where (`tunjangan`.`keterangan` = 'Aktif') ;

-- --------------------------------------------------------

--
-- Structure for view `view_cuti`
--
DROP TABLE IF EXISTS `view_cuti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_cuti`  AS  select `tunjangan`.`tanggal_gajian` AS `tanggal_gajian`,`tunjangan`.`id_tunjangan` AS `id_tunjangan`,`pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`jabatan` AS `jabatan`,`status`.`nama_status` AS `nama_status`,`tunjangan`.`gapok` AS `gapok`,`tunjangan`.`keluarga` AS `keluarga`,`tunjangan`.`fungsional` AS `fungsional`,`tunjangan`.`tjabatan` AS `tjabatan`,`tunjangan`.`kinerja` AS `kinerja`,`tunjangan`.`transportasi` AS `transportasi`,`tunjangan`.`gtt` AS `gtt`,`tunjangan`.`kesehatan` AS `kesehatan`,`tunjangan`.`pensiun` AS `pensiun`,`tunjangan`.`potongan` AS `potonganlain`,`tunjangan`.`keterangan` AS `keterangan`,`tunjangan`.`jmlh_kinerja` AS `jmlh_kinerja`,`tunjangan`.`jmlh_transport` AS `jmlh_transport`,(((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`keluarga`) + `tunjangan`.`gtt`) AS `total`,((`tunjangan`.`potongan` + `tunjangan`.`kesehatan`) + `tunjangan`.`pensiun`) AS `jumlahpotongan`,((((((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`gtt`) + `tunjangan`.`keluarga`) - `tunjangan`.`potongan`) - `tunjangan`.`kesehatan`) - `tunjangan`.`pensiun`) AS `total_bersih` from (((`pegawai` left join `status` on((`pegawai`.`id_status` = `status`.`id_status`))) left join `potongan` on((`pegawai`.`id_potongan` = `potongan`.`id_potongan`))) left join `tunjangan` on((`tunjangan`.`id_pegawai` = `pegawai`.`id_pegawai`))) where (`tunjangan`.`keterangan` = 'Cuti') ;

-- --------------------------------------------------------

--
-- Structure for view `view_pegawai`
--
DROP TABLE IF EXISTS `view_pegawai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pegawai`  AS  select `tunjangan`.`tanggal_gajian` AS `tanggal_gajian`,`tunjangan`.`id_tunjangan` AS `id_tunjangan`,`pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`jabatan` AS `jabatan`,`status`.`nama_status` AS `nama_status`,`gapok`.`gapok` AS `gapok`,`tunjangan_keluarga`.`nominal` AS `keluarga`,`tunjangan_fungsional`.`nominal` AS `fungsional`,`tunjangan_jabatan`.`nominal` AS `tjabatan`,`pegawai`.`kinerja` AS `kinerja`,`tunjangan`.`jmlh_kinerja` AS `jmlh_kinerja`,`pegawai`.`transportasi` AS `transportasi`,`tunjangan`.`jmlh_transport` AS `jmlh_transport`,`tunjangan_kesehatan`.`nominal` AS `kesehatan`,`tunjangan_pensiun`.`nominal` AS `pensiun`,`tunjangan_gtt`.`nominal` AS `gtt`,(((((((((`pegawai`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`pegawai`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `gapok`.`gapok`) + `tunjangan_fungsional`.`nominal`) + `tunjangan_jabatan`.`nominal`) + `tunjangan_pensiun`.`nominal`) + `tunjangan_gtt`.`nominal`) + `tunjangan_keluarga`.`nominal`) + `tunjangan_kesehatan`.`nominal`) AS `total`,`potongan`.`nominal` AS `potongan`,((((((((((`pegawai`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`pegawai`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `gapok`.`gapok`) + `tunjangan_fungsional`.`nominal`) + `tunjangan_jabatan`.`nominal`) + `tunjangan_pensiun`.`nominal`) + `tunjangan_gtt`.`nominal`) + `tunjangan_keluarga`.`nominal`) + `tunjangan_kesehatan`.`nominal`) - `potongan`.`nominal`) AS `total_bersih` from ((((((((((`pegawai` left join `gapok` on((`pegawai`.`id_gapok` = `gapok`.`id_gapok`))) left join `tunjangan_keluarga` on((`pegawai`.`id_keluarga` = `tunjangan_keluarga`.`id_keluarga`))) left join `tunjangan_fungsional` on((`pegawai`.`id_fungsional` = `tunjangan_fungsional`.`id_fungsional`))) left join `status` on((`pegawai`.`id_status` = `status`.`id_status`))) left join `tunjangan` on((`tunjangan`.`id_pegawai` = `pegawai`.`id_pegawai`))) left join `tunjangan_jabatan` on((`pegawai`.`id_jabatan` = `tunjangan_jabatan`.`id_jabatan`))) left join `tunjangan_pensiun` on((`pegawai`.`id_pensiun` = `tunjangan_pensiun`.`id_pensiun`))) left join `tunjangan_kesehatan` on((`pegawai`.`id_kesehatan` = `tunjangan_kesehatan`.`id_kesehatan`))) left join `tunjangan_gtt` on((`pegawai`.`id_gtt` = `tunjangan_gtt`.`id_gtt`))) left join `potongan` on((`pegawai`.`id_potongan` = `potongan`.`id_potongan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_tidakaktif`
--
DROP TABLE IF EXISTS `view_tidakaktif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_tidakaktif`  AS  select `tunjangan`.`tanggal_gajian` AS `tanggal_gajian`,`tunjangan`.`id_tunjangan` AS `id_tunjangan`,`pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`jabatan` AS `jabatan`,`status`.`nama_status` AS `nama_status`,`tunjangan`.`gapok` AS `gapok`,`tunjangan`.`keluarga` AS `keluarga`,`tunjangan`.`fungsional` AS `fungsional`,`tunjangan`.`tjabatan` AS `tjabatan`,`tunjangan`.`kinerja` AS `kinerja`,`tunjangan`.`transportasi` AS `transportasi`,`tunjangan`.`gtt` AS `gtt`,`tunjangan`.`kesehatan` AS `kesehatan`,`tunjangan`.`pensiun` AS `pensiun`,`tunjangan`.`potongan` AS `potonganlain`,`tunjangan`.`keterangan` AS `keterangan`,`tunjangan`.`jmlh_kinerja` AS `jmlh_kinerja`,`tunjangan`.`jmlh_transport` AS `jmlh_transport`,(((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`keluarga`) + `tunjangan`.`gtt`) AS `total`,((`tunjangan`.`potongan` + `tunjangan`.`kesehatan`) + `tunjangan`.`pensiun`) AS `jumlahpotongan`,((((((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`gtt`) + `tunjangan`.`keluarga`) - `tunjangan`.`potongan`) - `tunjangan`.`kesehatan`) - `tunjangan`.`pensiun`) AS `total_bersih` from (((`pegawai` left join `status` on((`pegawai`.`id_status` = `status`.`id_status`))) left join `potongan` on((`pegawai`.`id_potongan` = `potongan`.`id_potongan`))) left join `tunjangan` on((`tunjangan`.`id_pegawai` = `pegawai`.`id_pegawai`))) where (`tunjangan`.`keterangan` = 'Tidak Aktif') ;

-- --------------------------------------------------------

--
-- Structure for view `view_total`
--
DROP TABLE IF EXISTS `view_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_total`  AS  select `tunjangan`.`tanggal_gajian` AS `tanggal_gajian`,`tunjangan`.`id_tunjangan` AS `id_tunjangan`,`pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`jabatan` AS `jabatan`,`status`.`nama_status` AS `nama_status`,`tunjangan`.`gapok` AS `gapok`,`tunjangan`.`keluarga` AS `keluarga`,`tunjangan`.`fungsional` AS `fungsional`,`tunjangan`.`tjabatan` AS `tjabatan`,`tunjangan`.`kinerja` AS `kinerja`,`tunjangan`.`transportasi` AS `transportasi`,`tunjangan`.`gtt` AS `gtt`,`tunjangan`.`kesehatan` AS `kesehatan`,`tunjangan`.`pensiun` AS `pensiun`,`tunjangan`.`potongan` AS `potonganlain`,`tunjangan`.`keterangan` AS `keterangan`,`tunjangan`.`jmlh_kinerja` AS `jmlh_kinerja`,`tunjangan`.`jmlh_transport` AS `jmlh_transport`,(((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`keluarga`) + `tunjangan`.`gtt`) AS `total`,((`tunjangan`.`potongan` + `tunjangan`.`kesehatan`) + `tunjangan`.`pensiun`) AS `jumlahpotongan`,((((((((((`tunjangan`.`kinerja` * `tunjangan`.`jmlh_kinerja`) + (`tunjangan`.`transportasi` * `tunjangan`.`jmlh_transport`)) + `tunjangan`.`gapok`) + `tunjangan`.`fungsional`) + `tunjangan`.`tjabatan`) + `tunjangan`.`gtt`) + `tunjangan`.`keluarga`) - `tunjangan`.`potongan`) - `tunjangan`.`kesehatan`) - `tunjangan`.`pensiun`) AS `total_bersih` from (((`pegawai` left join `status` on((`pegawai`.`id_status` = `status`.`id_status`))) left join `potongan` on((`pegawai`.`id_potongan` = `potongan`.`id_potongan`))) left join `tunjangan` on((`tunjangan`.`id_pegawai` = `pegawai`.`id_pegawai`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_tunjangan`
--
DROP TABLE IF EXISTS `view_tunjangan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_tunjangan`  AS  select `pegawai`.`id_pegawai` AS `id_pegawai`,`pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`keterangan` AS `keterangan`,`pegawai`.`jabatan` AS `jabatan`,`status`.`nama_status` AS `nama_status`,`gapok`.`gapok` AS `gapok`,`tunjangan_keluarga`.`nominal` AS `keluarga`,`tunjangan_fungsional`.`nominal` AS `fungsional`,`tunjangan_jabatan`.`nominal` AS `tjabatan`,`pegawai`.`kinerja` AS `kinerja`,`pegawai`.`transportasi` AS `transportasi`,`tunjangan_kesehatan`.`nominal` AS `kesehatan`,`tunjangan_pensiun`.`nominal` AS `pensiun`,`tunjangan_gtt`.`nominal` AS `gtt`,`potongan`.`nominal` AS `potongan` from (((((((((`pegawai` left join `gapok` on((`pegawai`.`id_gapok` = `gapok`.`id_gapok`))) left join `tunjangan_keluarga` on((`pegawai`.`id_keluarga` = `tunjangan_keluarga`.`id_keluarga`))) left join `tunjangan_fungsional` on((`pegawai`.`id_fungsional` = `tunjangan_fungsional`.`id_fungsional`))) left join `status` on((`pegawai`.`id_status` = `status`.`id_status`))) left join `tunjangan_jabatan` on((`pegawai`.`id_jabatan` = `tunjangan_jabatan`.`id_jabatan`))) left join `tunjangan_pensiun` on((`pegawai`.`id_pensiun` = `tunjangan_pensiun`.`id_pensiun`))) left join `tunjangan_kesehatan` on((`pegawai`.`id_kesehatan` = `tunjangan_kesehatan`.`id_kesehatan`))) left join `tunjangan_gtt` on((`pegawai`.`id_gtt` = `tunjangan_gtt`.`id_gtt`))) left join `potongan` on((`pegawai`.`id_potongan` = `potongan`.`id_potongan`))) ;

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`id_potongan`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
  MODIFY `id_honor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jenistunjangan`
--
ALTER TABLE `jenistunjangan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pegawai_gty`
--
ALTER TABLE `pegawai_gty`
  MODIFY `id_gty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `potongan`
--
ALTER TABLE `potongan`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tunjangan`
--
ALTER TABLE `tunjangan`
  MODIFY `id_tunjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
