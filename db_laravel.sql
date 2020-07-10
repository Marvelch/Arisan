-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2020 pada 20.02
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `group`
--

CREATE TABLE `group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groups_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` int(11) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `total_hadiah` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `rentan_waktu_pengocokan` int(11) NOT NULL,
  `waktu_pengocokan` date NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `group`
--

INSERT INTO `group` (`id`, `groups_name`, `biaya`, `jumlah_peserta`, `total_hadiah`, `status`, `tanggal_mulai`, `rentan_waktu_pengocokan`, `waktu_pengocokan`, `users_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'York', 15000, 5, 75000, 0, '2020-06-09', 12, '2020-06-22', 1, '2020-06-09 00:46:28', '2020-07-06 23:11:46', NULL),
(2, 'Talaud', 15000, 52, 780000, 0, '2020-06-09', 5, '2020-06-15', 1, '2020-06-09 00:52:47', '2020-06-20 10:24:14', NULL),
(3, 'Kipas', 20000, 3, 60000, 0, '2020-06-09', 8, '2020-06-26', 1, '2020-06-09 07:17:59', '2020-07-05 23:17:24', NULL),
(4, 'Wakwak', 15000, 2, 30000, 1, '2020-06-11', 7, '2020-06-17', 2, '2020-06-11 08:29:21', '2020-06-11 08:29:21', NULL),
(5, 'Ello', 15000, 12, 180000, 0, '2020-08-19', 3, '2020-08-25', 1, '2020-06-14 00:25:50', '2020-07-05 23:17:24', NULL),
(6, 'Naya', 45000, 3, 135000, 1, '2020-06-16', 7, '2020-06-22', 1, '2020-06-15 23:44:02', '2020-06-15 23:44:02', NULL),
(7, 'Boya', 10000, 5, 50000, 1, '2020-06-16', 7, '2020-06-22', 1, '2020-06-16 07:15:10', '2020-06-16 07:15:10', NULL),
(8, 'Burung', 15000, 3, 45000, 1, '2020-06-17', 7, '2020-06-23', 1, '2020-06-17 00:22:21', '2020-06-17 00:22:21', NULL),
(9, 'Dotayo', 13000, 3, 39000, 1, '2020-06-17', 5, '2020-06-23', 1, '2020-06-17 00:26:34', '2020-06-17 00:26:34', NULL),
(10, 'Dotayo', 12000, 3, 36000, 1, '2020-06-17', 5, '2020-06-23', 1, '2020-06-17 00:28:23', '2020-06-17 00:28:23', NULL),
(11, 'Ello', 15000, 5, 75000, 1, '2020-06-17', 5, '2020-06-23', 1, '2020-06-17 00:51:24', '2020-06-17 00:51:24', NULL),
(12, 'Talaud', 15000, 10, 150000, 1, '2020-06-17', 7, '2020-06-23', 1, '2020-06-17 00:53:09', '2020-06-17 00:53:09', NULL),
(13, 'Dodo', 4500, 3, 13500, 1, '2020-06-18', 5, '2020-06-24', 4, '2020-06-17 19:43:50', '2020-06-17 19:43:50', NULL),
(14, 'Njai', 15000, 2, 30000, 1, '2020-06-20', 3, '2020-06-26', 5, '2020-06-19 23:03:42', '2020-06-19 23:03:42', NULL),
(15, 'Mencoba', 5000, 3, 15000, 1, '2020-06-20', 4, '2020-06-26', 5, '2020-06-19 23:19:43', '2020-06-19 23:19:43', NULL),
(16, 'Printer', 15000, 5, 75000, 1, '2020-07-02', 4, '2020-07-10', 1, '2020-07-01 23:15:45', '2020-07-07 07:27:03', NULL),
(17, 'Nusa', 10000, 3, 30000, 1, '2020-07-03', 3, '2020-07-09', 21, '2020-07-01 07:47:07', '2020-07-05 07:47:07', NULL),
(18, 'Mencoba 2', 10000, 2, 20000, 1, '2020-07-06', 1, '2020-07-12', 1, '2020-07-06 05:51:34', '2020-07-06 05:51:34', NULL),
(19, 'Wrha', 10000, 2, 20000, 1, '2020-07-06', 1, '2020-07-12', 1, '2020-07-06 06:18:09', '2020-07-06 06:18:09', NULL),
(20, 'Talaud', 15000, 2, 30000, 1, '2020-07-07', 1, '2020-07-13', 1, '2020-07-06 23:12:02', '2020-07-06 23:12:02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_arisan` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `group_id`, `nama`, `email`, `telpon`, `status_arisan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yo', 'N@email.com', '082217797927', 1, NULL, '2020-06-10 09:38:37'),
(2, 1, 'Gu', 'Gu@mail.com', '082217797911', 1, NULL, '2020-07-03 05:58:55'),
(3, 1, 'Fu', 'Fu@email.com', '082217711927', 1, NULL, '2020-07-04 00:18:04'),
(4, 1, 'Dodo', 'D@gmail.com', '082217797111', 1, NULL, '2020-07-04 00:25:53'),
(5, 1, 'Snowman', 'Snow@gmail.com', '082217797654', 0, NULL, '2020-06-10 09:35:37'),
(6, 2, 'WE', 'Saoda@mail.com', '082217797921', 1, NULL, '2020-06-12 17:00:00'),
(8, 3, 'Badru', 'badru@email.com', '082217797911', 0, NULL, NULL),
(9, 3, 'Eko', 'budi@email.com', '082217797321', 0, NULL, NULL),
(10, 3, 'Yuni', 'yuni@mail.com', '083721882818', 0, NULL, NULL),
(11, 4, 'Nana', 'Nana@gmail.com', '082217797901', 0, NULL, NULL),
(12, 4, 'Bisa', 'Lapang@yahoo.com', '082123134152', 0, NULL, NULL),
(13, 5, 'Yo', 'N@email.com', '082217797927', 0, NULL, NULL),
(14, 5, 'Dodo', 'oa@gmail.com', '082217797927', 0, NULL, NULL),
(15, 7, 'Dde', 'den@mail.com', '082217797927', 0, NULL, NULL),
(16, 7, 'Heart', 'heat@mail.com', '0821731927172', 0, NULL, NULL),
(17, 7, 'Mnua', 'manu@gmail.com', '091289182398', 0, NULL, NULL),
(18, 7, 'Nbua', 'Nabo@mail.com', '081928391823', 0, NULL, NULL),
(19, 7, 'Nnan', 'Nja@gmail.com', '082893123141', 0, NULL, NULL),
(20, 10, 'Dodo', 'Dodo@mail.com', '082217797927', 0, NULL, NULL),
(21, 11, 'Yo', 'oa@gmail.com', '082217797927', 0, NULL, NULL),
(22, 12, 'Yo', 'N@email.com', '082217797927', 0, NULL, NULL),
(23, 12, 'Nadia', 'N@email.com', '082217797927', 0, NULL, NULL),
(24, 12, 'N', 'N@email.com', '082217797927', 0, NULL, NULL),
(25, 13, 'Penteri', 'Pen@maiil.com', '082217797911', 0, NULL, NULL),
(26, 13, 'Hugo', 'oi@mail.com', '082217797211', 0, NULL, NULL),
(27, 13, 'Tantang', '839@mail.com', '082217797901', 0, NULL, NULL),
(28, 14, 'Dodo', 'Saoda@mail.com', '082217797922', 0, NULL, NULL),
(29, 14, 'Looki', 'Lo@mail.com', '091212345345', 0, NULL, NULL),
(30, 14, 'Natalia', 'Koa@gmail.com', '081238198298', 0, NULL, NULL),
(31, 16, 'Natalia', 'natal@gmail.com', '082217797931', 0, NULL, NULL),
(32, 16, 'Bontet', 'bontet@yahoo.com', '082217793312', 0, NULL, NULL),
(33, 16, 'Duet', 'duet@yhoa.com', '082217797921', 1, NULL, '2020-07-06 00:56:09'),
(34, 16, 'Nope', 'nope@gnohc.com', '082217797932', 0, NULL, NULL),
(35, 16, 'Seuer', 'suer@gmail.com', '082217797', 0, NULL, NULL),
(36, 17, 'Bambang', 'bam@gmail.com', '0822188123', 0, NULL, NULL),
(37, 17, 'Nusaki', 'Kisa@gmail.com', '082132123', 0, NULL, NULL),
(38, 17, 'Youas', 'Gua@gmail.com', '9891283912', 1, NULL, '2020-07-06 00:56:09'),
(39, 18, 'Dodo', 'Natal@email.com', '082217795541', 0, NULL, NULL),
(40, 18, 'Natalia', 'Natal@email.com', '082217795541', 0, NULL, NULL),
(41, 20, 'Dodo', 'N@email.com', '082217797927', 0, NULL, NULL),
(42, 20, 'Nadia', 'M@mail.com', '312', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(78, '2014_10_12_000000_create_users_table', 1),
(79, '2014_10_12_100000_create_password_resets_table', 1),
(80, '2019_08_19_000000_create_failed_jobs_table', 1),
(81, '2020_05_23_094608_create_group_table', 1),
(82, '2020_05_25_053723_create_members_table', 1),
(83, '2020_05_27_163829_create_test_table', 1),
(84, '2020_06_08_062540_create_winner_table', 1),
(85, '2020_07_06_091341_create_report_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subyek` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id`, `user_id`, `email`, `subyek`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@email.com', 'Kesalah Kode', 'Kesalahna 091', NULL, NULL),
(2, 1, 'admin@email.com', 'Bersama', 'Nusantara', NULL, '2020-07-06 02:33:36'),
(3, 1, 'admin@email.com', 'No', 'Laks', NULL, '2020-07-06 02:37:05'),
(4, 1, 'admin@email.com', 'Yo', 'no', NULL, '2020-07-06 02:38:53'),
(5, 1, 'mr.marvel.christevan@gmail.com', 'Noa', 'Maok', NULL, '2020-07-06 02:40:21'),
(6, 1, 'admin@email.com', 'Kesalah Kode', 'Nma', NULL, '2020-07-06 02:41:08'),
(7, 1, 'mr.marvel.christevan@gmail.com', 'kamsdkasd', 'Nja', NULL, '2020-07-06 02:42:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `status`, `photo`, `facebook`, `twitter`, `instagram`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marvel Ch', 'admin@email.com', '082217797000', 'Sedang Sibuk', '', 'http://bookingbook.my.id/', 'http://bookingbook.my.id/', 'https://www.instagram.com/ellotalkblog/', '2020-06-26 20:00:00', '$2y$10$3.2OcA6HDNnZmluDoiES8OQ2Y01aZ97ktupX5n.ZJ.kendr3SFnWS', NULL, '2020-06-09 00:44:32', '2020-06-17 07:03:46'),
(2, 'Eloo Yaohna', 'elloo@mail.com', '', '', '', NULL, NULL, NULL, NULL, '$2y$10$kCdRlCrCJl5X..QXcWJfM.ajDDy8wXZmS1wL2/OTQKTyokHM7q2RC', NULL, '2020-06-11 08:28:43', '2020-06-11 08:28:43'),
(3, 'Christevan', 'ssc.network.marvel@gmail.com', '082217797018', 'Sibuk Ya !', NULL, 'https://www.facebook.com/marvel.wowiling.5', NULL, 'https://www.instagram.com/ellotalkblog/', NULL, '$2y$10$ilnlkpH10wSIdArIP/42juNeU9kljZ8AjDbNZqIzINmpqoTstafEu', NULL, '2020-06-14 00:32:32', '2020-06-14 01:20:09'),
(4, 'Dodo Kurniawan', 'Dodo@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Bfvnv3T1jSILsxuo8Jo3RO7D3XhSm3cCNg6.krSWj4BVQ08yWjj/u', NULL, '2020-06-17 19:43:25', '2020-06-17 19:43:25'),
(5, 'Alert', 'alert@gmail.com', '082217797011', 'Membuat website bookingbook', NULL, 'http://bookingbook.my.id/', 'http://bookingbook.my.id/', 'https://www.instagram.com/alert/', NULL, '$2y$10$3yAIulbPeZRrp.iBdq4bJ.HAxEmPkYLfqhn9ewekqRf9Fmtl7JB.K', NULL, '2020-06-19 22:57:47', '2020-06-19 23:02:17'),
(6, 'Marvel Ch', '46a76c3491-0bf902@inbox.mailtrap.io', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Tff34/eLiM9U.YM3MxMv6uTXtB38fCO7ZbsA8qF/UvF/zoakr0dKu', NULL, '2020-06-25 08:31:04', '2020-06-25 08:31:04'),
(7, 'Marvel Ch', 'qboxsstore@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$nWljSDbTh2sOIFjID76UC.eIGONeqVycwdUXj8s5urLucyvU7ym6O', NULL, '2020-06-25 08:33:35', '2020-06-25 08:33:35'),
(8, 'Marvel Ch', 'hortyeshare@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$P4IvueWv6SNh.5ww7Wos7uSPJGL9Lcwf5hm2XK8NYXjIm3W4uOKHW', NULL, '2020-06-25 08:35:19', '2020-06-25 08:35:19'),
(9, 'Marvel Ch', 'marvel-0bf902@inbox.mailtrap.io', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$sM6oK/Vupnrikr.qyRKPQ.GlVcLKUPt6caNd0IprIJ66XQwwwDb5m', NULL, '2020-06-25 08:38:14', '2020-06-25 08:38:14'),
(10, 'marvelch', 'marvelch@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7CU0L6jVXqg4CWRCCmdjGeh2.E05hT/AAkTQijvS/JYPIhhOJ4mfG', NULL, '2020-06-25 08:39:08', '2020-06-25 08:39:08'),
(11, 'Marvel Ch', 'admin@qemail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-25 08:42:46', '$2y$10$.RP0PowlCX/35pS1jxzDfe..6zxdGl11lVqIvD0OuDUrOBLK1Wa7m', NULL, '2020-06-25 08:41:27', '2020-06-25 08:42:46'),
(13, 'Christevan', 'marvelch@mahasiswa.unikom.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$XePQFbCWE4.0n2hvtrLRk.30sue/HhnViyLp6fZhvkSyi6SRwwt2.', NULL, '2020-06-25 09:06:03', '2020-06-25 09:06:03'),
(14, 'Christevan', 'wibij54498@uwuefr.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$dc2MnpFHMPapf35DbMsE2u0lXoI3SPWmhlVhq.KWKoJxu8W8mcv2q', NULL, '2020-06-25 09:11:56', '2020-06-25 09:11:56'),
(15, 'Marvel Ch', 'officialkreeclo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$0o3/Tk7RzAQ7F2fsAwEQRe6oheBqXq/E/Fhl.m6hfiWO6/uqe42X.', NULL, '2020-06-25 19:19:59', '2020-06-25 19:19:59'),
(16, 'Hoa', 'alif.270@pressuredell.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6G4nCM.FvUZbr/wCkuzBMuLvwP76N.ZXde8LBOypS4dErKD2BcXLG', NULL, '2020-06-25 19:24:43', '2020-06-25 19:24:43'),
(19, 'Marvel Christevan', 'mr.marvel.christevan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-26 20:00:00', '$2y$10$S9J/QVeOs.vbqLD3C.SQCOEZFduiy4cxT0v1zyF2QqFDvc7Z66I02', NULL, '2020-06-25 19:43:48', '2020-06-25 19:43:48'),
(20, 'Bayu', 'bayuska@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$4d5/WSSZXnjAcJStwYPN8OTKpHrLCcEHFY6/MlNWfjeZcbFznH02m', NULL, '2020-06-30 01:30:13', '2020-06-30 01:30:13'),
(21, 'Ska', 'ska@email.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-02 17:00:00', '$2y$10$lyYHxffL1NveLukHLS2HLOiC3s4MdWPy9ISHPsFduGGhlL6w3Dwla', NULL, '2020-07-05 07:45:34', '2020-07-05 07:45:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `winner`
--

CREATE TABLE `winner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `members_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `winner`
--

INSERT INTO `winner` (`id`, `members_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(2, 3, NULL, NULL),
(3, 4, NULL, NULL),
(4, 3, NULL, NULL),
(5, 4, NULL, NULL),
(6, 32, NULL, NULL),
(7, 35, NULL, NULL),
(8, 33, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_users_id_foreign` (`users_id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_group_id_foreign` (`group_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `winner_members_id_foreign` (`members_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `group`
--
ALTER TABLE `group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `winner`
--
ALTER TABLE `winner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `group_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `winner`
--
ALTER TABLE `winner`
  ADD CONSTRAINT `winner_members_id_foreign` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
