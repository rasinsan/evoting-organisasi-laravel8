-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelaksanaan` date NOT NULL,
  `info_acara` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_voter` int(11) DEFAULT NULL,
  `id_paslon` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `pelaksanaan`, `info_acara`, `id_voter`, `id_paslon`, `created_at`, `updated_at`) VALUES
(10, 'Pemilihan BEM', '2022-12-10', 'Dilakukan secara offline di gedung bersama', NULL, NULL, NULL, NULL),
(16, 'Pemilihan HIMMI', '2022-06-23', 'test', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `capaslon`
--

CREATE TABLE `capaslon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim_ketua` int(11) NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_ketua` int(11) NOT NULL,
  `semester_ketua` int(11) NOT NULL,
  `prodi_ketua` enum('Sistem Informasi','Keperawatan','Agroindustri','Teknik Pemesinan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_wakil` int(11) NOT NULL,
  `nama_wakil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_wakil` int(11) NOT NULL,
  `semester_wakil` int(11) NOT NULL,
  `prodi_wakil` enum('Sistem Informasi','Keperawatan','Agroindustri','Teknik Pemesinan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_wakil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_wakil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `acara_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voter_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `voter_id`, `created_at`, `updated_at`) VALUES
(230, 12, NULL, NULL),
(231, 22, NULL, NULL),
(232, 24, NULL, NULL),
(233, 26, NULL, NULL),
(234, 27, NULL, NULL),
(235, 28, NULL, NULL),
(236, 29, NULL, NULL),
(237, 30, NULL, NULL),
(238, 31, NULL, NULL),
(239, 32, NULL, NULL),
(240, 33, NULL, NULL),
(241, 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_urut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wakil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_wakil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acara_id` int(11) NOT NULL,
  `voter_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `no_urut`, `nama_ketua`, `nama_wakil`, `foto_ketua`, `foto_wakil`, `acara_id`, `voter_id`, `created_at`, `updated_at`) VALUES
(55, '3', 'Udin', 'Ahmad', '4.png', '12.png', 10, 22, '2022-06-23 19:41:49', '2022-06-23 19:41:49'),
(56, '1', 'Farras Insan', 'Teresia Purba', '2.png', '10.png', 10, 12, '2022-06-23 19:57:20', '2022-06-23 19:57:20'),
(57, '1', 'Farras Insan', 'Teresia Purba', '2.png', '10.png', 10, 26, '2022-06-23 19:59:43', '2022-06-23 19:59:43'),
(58, '2', 'Taufik Hendriansyah', 'Putri Fitriani', '9.png', '5.png', 10, 27, '2022-06-23 20:05:10', '2022-06-23 20:05:10'),
(59, '2', 'Taufik Hendriansyah', 'Putri Fitriani', '9.png', '5.png', 10, 28, '2022-06-23 20:24:29', '2022-06-23 20:24:29'),
(60, '1', 'Farras Insan', 'Teresia Purba', '2.png', '10.png', 10, 30, '2022-06-23 20:34:49', '2022-06-23 20:34:49'),
(61, '1', 'Farras Insan', 'Teresia Purba', '2.png', '10.png', 10, 31, '2022-06-23 20:51:15', '2022-06-23 20:51:15'),
(62, '1', 'Farras Insan', 'Teresia Purba', '2.png', '10.png', 10, 32, '2022-06-23 21:11:26', '2022-06-23 21:11:26'),
(63, '1', 'Farras Insan', 'Teresia Purba', '2.png', '10.png', 10, 33, '2022-06-23 22:55:31', '2022-06-23 22:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_01_072413_create_acara_table', 1),
(6, '2022_05_11_041014_create_voters_table', 1),
(7, '2022_05_22_172627_create_capaslon_table', 2),
(8, '2022_05_23_124233_add_id_acara_to_capaslon', 3),
(9, '2022_05_29_120515_create_table_voters', 4),
(10, '2022_05_29_120645_create_panitia', 4),
(11, '2022_05_29_120949_create_users', 5),
(12, '2022_06_07_105818_create_pemilihans_table', 6),
(13, '2022_06_08_153032_create_filter_table', 7),
(14, '2022_06_12_105620_create_hasils_table', 8),
(15, '2022_06_14_143828_create_verify_voters_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acara_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id`, `username`, `nama`, `password`, `acara_id`, `created_at`, `updated_at`) VALUES
(8, 'deby', 'Deby Febriany Anti', '$2y$10$b9xvx.pE4xvXYRXaVtvlZ./gcO/nAv3kP5ms.8rn9e4X.VaU6bkEC', 10, NULL, NULL),
(9, 'himmi', 'Panitia HIMMi', '$2y$10$vnh9No2soPA.LATUmu6cy.004/9MSQ4wIhHjXp6BFIN8LGkUS5Zqm', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paslon`
--

CREATE TABLE `paslon` (
  `id_paslon` int(11) NOT NULL,
  `no_urut` varchar(255) NOT NULL,
  `acara_id` int(11) NOT NULL,
  `capaslon_id` int(11) NOT NULL,
  `nim_ketua` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `tingkat_ketua` int(11) NOT NULL,
  `semester_ketua` int(11) NOT NULL,
  `prodi_ketua` enum('Sistem Informasi','Keperawatan','Agroindustri','Teknik Pemesinan') NOT NULL,
  `foto_ketua` varchar(255) NOT NULL,
  `file_ketua` varchar(255) NOT NULL,
  `nim_wakil` int(11) NOT NULL,
  `nama_wakil` varchar(255) NOT NULL,
  `tingkat_wakil` int(11) NOT NULL,
  `semester_wakil` int(11) NOT NULL,
  `prodi_wakil` enum('Sistem Informasi','Keperawatan','Agroindustri','Teknik Pemesinan') NOT NULL,
  `foto_wakil` varchar(255) NOT NULL,
  `file_wakil` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paslon`
--

INSERT INTO `paslon` (`id_paslon`, `no_urut`, `acara_id`, `capaslon_id`, `nim_ketua`, `nama_ketua`, `tingkat_ketua`, `semester_ketua`, `prodi_ketua`, `foto_ketua`, `file_ketua`, `nim_wakil`, `nama_wakil`, `tingkat_wakil`, `semester_wakil`, `prodi_wakil`, `foto_wakil`, `file_wakil`, `email`, `visi`, `misi`) VALUES
(31, '1', 10, 19, 10107028, 'Farras Insan', 2, 4, 'Sistem Informasi', '2.png', 'logo_aplikasi.jpeg', 10107070, 'Teresia Purba', 2, 3, 'Agroindustri', '10.png', 'logo_aplikasi.jpeg', 'farrasinsan009@gmail.com', 'Menjadikan Organisasi POLSUB lebih baik', 'Menjadikan POLSUB sebagai politeknik yang baik akan organisasi'),
(32, '2', 10, 20, 10107058, 'Taufik Hendriansyah', 2, 4, 'Sistem Informasi', '9.png', 'pngtree-shopping-on-mobile-png-image_5354478.jpg', 10107048, 'Putri Fitriani', 2, 4, 'Agroindustri', '5.png', 'logo_aplikasi.png', 'purbateresia09@gmail.com', 'Menjadikan Organisasi polsub menjadi organisasi yang dapat menghasilkan mahasiswa yang kompak', 'Menjadikan BEM menjadi lebih baik lagi'),
(33, '3', 10, 21, 10107045, 'Udin', 4, 2, 'Keperawatan', '4.png', 'logo_aplikasi.jpeg', 10107080, 'Ahmad', 1, 3, 'Sistem Informasi', '12.png', 'logo_aplikasi.jpeg', 'farrasinsan009@gmail.com', 'test', 'test'),
(34, '1', 16, 22, 10107040, 'Akmal', 2, 4, 'Agroindustri', 'ras.jpg', 'foto.jpg', 10108070, 'Cahyu', 2, 1, 'Sistem Informasi', 'tere.jpg', 'foto.jpg', 'farras@gmail.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `acara_id` bigint(20) NOT NULL,
  `voter_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemilihan`
--

INSERT INTO `pemilihan` (`id`, `acara_id`, `voter_id`, `created_at`, `updated_at`) VALUES
(217, 10, 12, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(218, 10, 22, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(219, 10, 24, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(220, 10, 26, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(221, 10, 27, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(222, 10, 28, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(223, 10, 29, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(224, 10, 30, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(225, 10, 31, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(226, 10, 32, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(227, 10, 33, '2022-06-23 17:45:47', '2022-06-23 17:45:47'),
(228, 10, 34, '2022-06-23 17:45:47', '2022-06-23 17:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `acara_id` int(11) NOT NULL,
  `voter_id` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `nama_wakil` varchar(255) NOT NULL,
  `foto_ketua` varchar(255) NOT NULL,
  `foto_wakil` varchar(255) NOT NULL,
  `no_urut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `acara_id`, `voter_id`, `nama_ketua`, `nama_wakil`, `foto_ketua`, `foto_wakil`, `no_urut`) VALUES
(1, 10, 22, 'Farras Insan', 'Teresia Purba', '2.png', '10.png', '1'),
(2, 10, 12, 'Taufik Hendriansyah', 'Putri Fitriani', '9.png', '5.png', '2'),
(3, 10, 26, 'Udin', 'Ahmad', '4.png', '12.png', '3'),
(4, 10, 22, 'Udin', 'Ahmad', '4.png', '12.png', '3'),
(5, 10, 12, 'Farras Insan', 'Teresia Purba', '2.png', '10.png', '1'),
(6, 10, 26, 'Farras Insan', 'Teresia Purba', '2.png', '10.png', '1'),
(7, 10, 27, 'Taufik Hendriansyah', 'Putri Fitriani', '9.png', '5.png', '2'),
(8, 10, 28, 'Taufik Hendriansyah', 'Putri Fitriani', '9.png', '5.png', '2'),
(9, 10, 30, 'Farras Insan', 'Teresia Purba', '2.png', '10.png', '1'),
(10, 10, 31, 'Farras Insan', 'Teresia Purba', '2.png', '10.png', '1'),
(11, 10, 32, 'Farras Insan', 'Teresia Purba', '2.png', '10.png', '1'),
(12, 10, 33, 'Farras Insan', 'Teresia Purba', '2.png', '10.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `isAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Farras', 'farras@gmail.com', 0, NULL, '$2y$10$LI2vv15fZcNu7Ym.6iKMEOVguBYyZDtIOvkM0vyt/Q3MmP2vrlaLy', NULL, '2022-05-29 05:40:09', '2022-05-29 05:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `verify_voters`
--

CREATE TABLE `verify_voters` (
  `voter_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_voters`
--

INSERT INTO `verify_voters` (`voter_id`, `token`, `created_at`, `updated_at`) VALUES
(22, '2216b4865bbbab12874fd1c860ad522adc525625e01f3c4daeb5f1cc6c7125a6f9', '2022-06-14 11:39:23', '2022-06-14 11:39:23'),
(23, '2328c47c0fe3bf42cc9eca4f3d0da1c53bf29874b9006b3dee7a9061c90486b843', '2022-06-14 23:27:56', '2022-06-14 23:27:56'),
(24, '24892dc9845f617848e377473ed6b468037f767aa5f93f91c8d7bee75f41d8e2d4', '2022-06-22 18:50:01', '2022-06-22 18:50:01'),
(25, '253f8a05ba79c52e96c791d2853cbf678f7aad6e6a3456c9a463b1346206374920', '2022-06-22 21:33:13', '2022-06-22 21:33:13'),
(26, '261ad90e0b9a33e999da59c453e60ad3d8d2d5440638d5c4240677b7f1a242663f', '2022-06-22 22:56:22', '2022-06-22 22:56:22'),
(27, '27447c5afa24f82b09dc27aeb32c2e2b044a8d62a09d40eaad829be1be436ae0ae', '2022-06-23 17:26:52', '2022-06-23 17:26:52'),
(28, '28c5d404b89f06efca1c0d58edba24538a8e77d8f04fbcae8861eb4a75000b792a', '2022-06-23 17:28:44', '2022-06-23 17:28:44'),
(29, '292b9eb96bf35251b277d975f5bac0aad7fafbd56e7c58908a1815816b7eccede5', '2022-06-23 17:29:44', '2022-06-23 17:29:44'),
(30, '30f958bafa10f93f28d4486c43ed547f84271a963a31dfd4afefb3d2904ddc7b58', '2022-06-23 17:30:51', '2022-06-23 17:30:51'),
(31, '310b7c339f527c30cc4838a8afc304c061642006a4d05a8ac015beb134f01661df', '2022-06-23 17:32:11', '2022-06-23 17:32:11'),
(32, '327fbade73b4d4a06bed38d611c45e0fb079c0d50340c8d702d30ea87c0e9c935c', '2022-06-23 17:32:57', '2022-06-23 17:32:57'),
(33, '33b1fe90633eb0581c990bc7b2f87b5c830eff1b7ab84dee77ccf826d5bccc7a79', '2022-06-23 17:33:57', '2022-06-23 17:33:57'),
(34, '346ec6f8dc8706116cb4dec42fdd2799aebffede735510abffab442994699e5fb5', '2022-06-23 17:34:51', '2022-06-23 17:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` enum('Sistem Informasi','Keperawatan','Agroindustri','Teknik Pemesinan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `nim`, `nama`, `password`, `prodi`, `tahun`, `email`, `email_verified_at`, `email_verified`) VALUES
(12, '10107042', 'bagas', '$2y$10$ZaUXnlrk.cyhF.7SZQs8R.oR4n3PDfJ5TXp.Q5e7Fq5HUxoPQOPHO', 'Sistem Informasi', 2020, 'bagas@gmail.com', NULL, 1),
(22, '10107028', 'Farras Insan', '$2y$10$mpiVzDF94McSGLgdi/f7RuTkhro2/CYYYlynefd2NC.w6IF2.lp22', 'Agroindustri', 2020, 'farrasinsan009@gmail.com', NULL, 1),
(24, '10107030', 'Udin', '$2y$10$8PNcWXn6knnEw9b8SRWVWuXif1AmV4deiNST9lwnXwGx/mPFKIJeC', 'Teknik Pemesinan', 2020, 'farrasinsan08@gmail.com', NULL, 1),
(26, '10109090', 'Topik Herdiansah', '$2y$10$03M0vt9DZgrNs1zqZdjU3.OQ2hn33DVi1AbctkFevrL27IHMOxZRu', 'Agroindustri', 2020, 'farrasinsan@gmail.com', NULL, 1),
(27, '10101010', 'Ani', '$2y$10$e0aTdIdfD03I2OhOpCfnWOnj9.efZ86EafWXIv2ol8S6NTJrVu.qi', 'Keperawatan', 2020, 'farrasinsan1@gmail.com', NULL, 1),
(28, '10101020', 'Fajar', '$2y$10$IsTNfb6xXHEUvdFMxa.6WeWive6rzVZvfpk0dumYZE7s8Gat7t/Q.', 'Agroindustri', 2020, 'farrasinsan2@gmail.com', NULL, 1),
(29, '10101030', 'Adi', '$2y$10$.UnovMyI05ZbMZV8GyXqZOIfURDNc1ikkPo/ZLXS78hfNAMQ8b5yi', 'Sistem Informasi', 2020, 'farrasinsan3@gmail.com', NULL, 1),
(30, '10101040', 'Pengkuh', '$2y$10$Be1aOkA4iDqRFcgYYAFj/OhbBhoKpaHvTHX/iyGkGuWnNFi98JTyq', 'Teknik Pemesinan', 2020, 'farrasinsan4@gmail.com', NULL, 1),
(31, '10101050', 'Tiara', '$2y$10$7Ca5OAbroEkXj8hqP6E3i.QOxxQB5PZaKT.3IIWeL3kCULPuRmp/O', 'Keperawatan', 2020, 'farrasinsan5@gmail.com', NULL, 1),
(32, '10101060', 'Putri', '$2y$10$S/AGxEqaotklbg/SUAgCJuFoOhe3emXgXPz4dJbqQfOO53dGvrbZW', 'Teknik Pemesinan', 2020, 'farrasinsan6@gmail.com', NULL, 1),
(33, '10101070', 'Rissa', '$2y$10$BSW2ZQmdAjS6em93sxsCMOf0pna1cX26JgegCFbQ6p0.DbPa96H2u', 'Keperawatan', 2020, 'farrasinsan7@gmail.com', NULL, 1),
(34, '10101080', 'Teresia', '$2y$10$LGu3pjXI89c3jpr.RjdU3ePna4KpkPFUDB4DwjwwM2m71SxqGTkre', 'Agroindustri', 2020, 'farrasinsan00@gmail.com', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `capaslon`
--
ALTER TABLE `capaslon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `capaslon_nim_ketua_unique` (`nim_ketua`),
  ADD UNIQUE KEY `capaslon_nim_wakil_unique` (`nim_wakil`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acara_id` (`acara_id`);

--
-- Indexes for table `paslon`
--
ALTER TABLE `paslon`
  ADD PRIMARY KEY (`id_paslon`),
  ADD KEY `acara_id` (`acara_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voters_email_unique` (`email`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `capaslon`
--
ALTER TABLE `capaslon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paslon`
--
ALTER TABLE `paslon`
  MODIFY `id_paslon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pemilihan`
--
ALTER TABLE `pemilihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panitia`
--
ALTER TABLE `panitia`
  ADD CONSTRAINT `panitia_ibfk_1` FOREIGN KEY (`acara_id`) REFERENCES `acara` (`id_acara`) ON DELETE CASCADE;

--
-- Constraints for table `paslon`
--
ALTER TABLE `paslon`
  ADD CONSTRAINT `paslon_ibfk_1` FOREIGN KEY (`acara_id`) REFERENCES `acara` (`id_acara`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
