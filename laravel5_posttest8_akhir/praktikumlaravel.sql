-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 02:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikumlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosenn`
--

CREATE TABLE `dosenn` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NIP` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosenn`
--

INSERT INTO `dosenn` (`id`, `Nama`, `NIP`, `Alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'Edy', '12121', 'Jl Pramuka', 22, '2017-04-07 23:26:09', '2017-04-07 23:26:09'),
(2, 'Budi', '1234', 'pramka', 23, '2017-04-10 18:45:58', '2017-04-10 18:45:58'),
(3, 'Budiman', '1234567', 'perjuangan', 24, '2017-04-10 18:46:52', '2017-04-10 18:46:52'),
(4, 'Hario', '123456098140', 'sempaja', 25, '2017-04-10 18:47:18', '2017-04-10 18:47:18'),
(5, 'ummul', '12345678', 'pemuda', 26, '2017-04-10 18:47:54', '2017-04-10 18:47:54'),
(7, 'noaplllllll', '123162312uu3', 'pramuka', 30, '2017-04-10 19:45:45', '2017-04-10 19:45:45'),
(8, 'saputra', '1231123`', 'ramuka', 31, '2017-04-10 19:51:31', '2017-04-10 19:51:31'),
(9, 'kesialan', '123`', 'nopal', 32, '2017-04-10 19:51:55', '2017-04-10 19:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_matakuliah`
--

CREATE TABLE `dosen_matakuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `Dosen_id` int(10) UNSIGNED NOT NULL,
  `Matakuliah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen_matakuliah`
--

INSERT INTO `dosen_matakuliah` (`id`, `Dosen_id`, `Matakuliah_id`, `created_at`, `updated_at`) VALUES
(2, 1, 9, '2017-04-07 23:42:48', '2017-04-07 23:42:48'),
(3, 5, 8, '2017-04-10 18:48:49', '2017-04-10 18:48:49'),
(4, 4, 7, '2017-04-10 18:48:58', '2017-04-10 18:48:58'),
(5, 3, 7, '2017-04-10 18:49:11', '2017-04-10 18:49:11'),
(6, 2, 6, '2017-04-10 18:49:26', '2017-04-10 18:49:26'),
(8, 9, 6, '2017-04-10 20:06:43', '2017-04-10 20:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_matakuliah`
--

CREATE TABLE `jadwal_matakuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `Mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `Ruangan_id` int(10) UNSIGNED NOT NULL,
  `Dosen_Matakuliah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadwal_matakuliah`
--

INSERT INTO `jadwal_matakuliah` (`id`, `Mahasiswa_id`, `Ruangan_id`, `Dosen_Matakuliah_id`, `created_at`, `updated_at`) VALUES
(4, 3, 6, 2, '2017-04-08 01:02:25', '2017-04-08 01:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NIM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `NIM`, `Alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(3, 'Dia', '1414', 'Jl. martadinata 1', 20, '2017-04-07 06:40:35', '2017-04-08 01:05:42'),
(4, 'naufal', '1515015210', 'pramuka', 27, '2017-04-10 19:00:56', '2017-04-10 19:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `Title`, `Keterangan`, `created_at`, `updated_at`) VALUES
(5, 'Jaringan', 'Praktikum', '2017-03-24 04:48:10', '2017-04-07 19:15:25'),
(6, 'Teori', 'Bahasa', '2017-03-24 06:29:07', '2017-03-24 06:29:07'),
(7, 'Framework', 'tugas', '2017-04-05 16:16:55', '2017-04-05 16:16:55'),
(8, 'Visual Basic', 'Pemrograman', '2017-04-07 05:53:48', '2017-04-07 05:53:48'),
(9, 'Mobile', 'Teori', '2017-04-07 19:16:13', '2017-04-07 19:16:13');

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
('2017_03_09_000502_buat_tabel_anggota', 1),
('2017_03_09_043017_dosen', 2),
('2017_03_09_045141_tabel_mahasiswa', 3),
('2017_03_09_114530_tabel_dosen', 4),
('2017_03_09_114912_tabel_mahasiswa', 5),
('2017_03_09_115520_tabel_ruangan', 6),
('2017_03_09_120303_tabel_ruangan1', 7),
('2017_03_09_120452_tabel_matakuliah', 8),
('2017_03_09_120855_tabel_Dosen_Matakuliah', 9),
('2017_03_09_121702_tabel_Jadwal_Matakuliah', 10),
('2017_03_09_123105_tabel_dosen1', 11),
('2017_03_09_125604_table_Dosen_Matakuliah', 12),
('2017_03_09_125923_table_Jadwal_Matakuliah', 13);

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
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'jon_doe', 'doe_jon', NULL, '2017-03-15 16:50:02', '2017-03-15 16:50:02'),
(17, '', '', NULL, '2017-04-07 06:31:31', '2017-04-07 06:31:31'),
(18, '', '', NULL, '2017-04-07 06:31:42', '2017-04-07 06:31:42'),
(19, 'hh', 'ii', NULL, '2017-04-07 06:35:42', '2017-04-07 06:35:42'),
(20, 'Uding', 'aaaa', NULL, '2017-04-07 06:40:35', '2017-04-08 01:05:42'),
(22, 'siapa', 'kamu', NULL, '2017-04-07 23:26:09', '2017-04-07 23:26:26'),
(23, 'nopal', '1111111', NULL, '2017-04-10 18:45:57', '2017-04-10 18:45:57'),
(24, 'budi', '1234567', NULL, '2017-04-10 18:46:51', '2017-04-10 18:46:51'),
(25, 'hario', '123456', NULL, '2017-04-10 18:47:18', '2017-04-10 18:47:18'),
(26, 'ummul', '213456', NULL, '2017-04-10 18:47:53', '2017-04-10 18:47:53'),
(27, 'naufal', 'password', NULL, '2017-04-10 19:00:55', '2017-04-10 19:00:55'),
(30, 'kamu', '1234', NULL, '2017-04-10 19:45:45', '2017-04-10 19:45:45'),
(31, '12345', '2331231', NULL, '2017-04-10 19:51:31', '2017-04-10 19:51:31'),
(32, 'apwodapdo', '1233', NULL, '2017-04-10 19:51:54', '2017-04-10 19:51:54'),
(33, 'ya', '12', NULL, '2017-04-24 06:02:42', '2017-04-24 06:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `Title`, `created_at`, `updated_at`) VALUES
(2, '441', '2017-03-22 22:50:22', '2017-04-08 01:09:30'),
(4, 'Visual', '2017-03-23 19:34:18', '2017-03-23 19:34:18'),
(5, 'tolongaja', '2017-03-23 20:28:07', '2017-03-23 20:28:07'),
(6, 'Contoh', '2017-03-23 20:40:19', '2017-03-23 20:40:19'),
(7, 'Test Bos', '2017-03-24 06:27:27', '2017-03-24 06:27:27'),
(8, 'apasih', '2017-04-07 07:09:10', '2017-04-07 07:09:10');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `dosenn`
--
ALTER TABLE `dosenn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosenn_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_matakuliah_dosen_id_foreign` (`Dosen_id`),
  ADD KEY `dosen_matakuliah_matakuliah_id_foreign` (`Matakuliah_id`);

--
-- Indexes for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_matakuliah_mahasiswa_id_foreign` (`Mahasiswa_id`),
  ADD KEY `jadwal_matakuliah_ruangan_id_foreign` (`Ruangan_id`),
  ADD KEY `jadwal_matakuliah_dosen_matakuliah_id_foreign` (`Dosen_Matakuliah_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `dosenn`
--
ALTER TABLE `dosenn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosenn`
--
ALTER TABLE `dosenn`
  ADD CONSTRAINT `dosenn_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  ADD CONSTRAINT `dosen_matakuliah_dosen_id_foreign` FOREIGN KEY (`Dosen_id`) REFERENCES `dosenn` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dosen_matakuliah_matakuliah_id_foreign` FOREIGN KEY (`Matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  ADD CONSTRAINT `jadwal_matakuliah_dosen_matakuliah_id_foreign` FOREIGN KEY (`Dosen_Matakuliah_id`) REFERENCES `dosen_matakuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_matakuliah_mahasiswa_id_foreign` FOREIGN KEY (`Mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_matakuliah_ruangan_id_foreign` FOREIGN KEY (`Ruangan_id`) REFERENCES `ruangan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
