-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2024 pada 03.45
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_kasir_yogi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `detailid` int(11) NOT NULL,
  `id_penjualan` bigint(20) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `jumlah_produk` varchar(255) DEFAULT NULL,
  `subtotal` decimal(65,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`detailid`, `id_penjualan`, `id`, `nama_produk`, `jumlah_produk`, `subtotal`, `created_at`, `updated_at`) VALUES
(16, 20, 3898, 'ale ale', '3', 6000.00, '2024-02-15 23:46:28', '2024-02-15 23:46:28'),
(17, 20, 8899, 'ggg', '1', 222.00, '2024-02-15 23:50:17', '2024-02-15 23:50:17'),
(18, 20, 454, 'gtr', '3', 105.00, '2024-02-16 00:03:41', '2024-02-16 00:34:28'),
(19, 22, 98865, 'kggjg', '1', 60000.00, '2024-02-16 06:37:53', '2024-02-16 06:37:53'),
(20, 22, 988909, 'tas', '3', 210000.00, '2024-02-16 06:38:54', '2024-02-16 06:38:54'),
(21, 22, 3898, 'ale ale', '6', 2000.00, '2024-02-16 06:41:14', '2024-02-16 06:41:14'),
(22, 23, 454, 'gtr', '2', 70.00, '2024-02-16 20:51:41', '2024-02-16 20:53:28'),
(23, 23, 389878, 'yyoo', '2', 18000.00, '2024-02-16 20:58:12', '2024-02-16 20:58:12'),
(24, 25, 8899, 'ggg', '1', 222.00, '2024-02-17 22:57:21', '2024-02-17 22:57:21'),
(25, 27, 8888, 'ojs', '6', 48000.00, '2024-02-18 00:18:56', '2024-02-18 00:19:33'),
(26, 27, 123, 'akua', '2', 60000.00, '2024-02-18 00:30:59', '2024-02-18 00:30:59'),
(27, 28, 8888, 'ojs', '2', 16000.00, '2024-02-18 01:38:26', '2024-02-18 01:38:26'),
(28, 28, 988910, 'tas', '1', 70000.00, '2024-02-18 02:01:35', '2024-02-18 02:01:35'),
(29, 29, 988910, 'tas', '2', 140000.00, '2024-02-18 18:53:37', '2024-02-18 18:53:37'),
(30, 30, 389878, 'yyoo', '3', 27000.00, '2024-02-18 19:25:50', '2024-02-18 19:25:50'),
(31, 31, 988910, 'tas', '2', 140000.00, '2024-02-18 20:26:26', '2024-02-18 20:26:26'),
(32, 31, 389878, 'yyoo', '1', 9000.00, '2024-02-18 20:28:55', '2024-02-18 20:28:55'),
(33, 31, 8888, 'ojs', '1', 8000.00, '2024-02-18 20:29:28', '2024-02-18 20:29:28'),
(34, 36, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-19 21:14:35', '2024-02-19 21:14:35'),
(35, 37, 988917, 'HP VIVO Y21', '2', 60000.00, '2024-02-19 21:19:09', '2024-02-19 21:19:09'),
(36, 38, 988917, 'HP VIVO Y21', '1', 30000.00, '2024-02-20 00:36:26', '2024-02-20 00:36:26'),
(37, 40, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-20 17:42:41', '2024-02-20 17:42:41'),
(38, 51, 988917, 'HP VIVO Y21', '2', 60000.00, '2024-02-20 19:07:19', '2024-02-20 19:07:19'),
(39, 59, 988917, 'HP VIVO Y21', '1', 30000.00, '2024-02-21 00:01:57', '2024-02-21 00:01:57'),
(40, 60, 988916, 'HP VIVO Y21', '2', 60000.00, '2024-02-22 03:11:01', '2024-02-22 03:11:01'),
(41, 62, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-22 18:38:52', '2024-02-22 18:38:52'),
(42, 64, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-22 20:19:01', '2024-02-22 20:19:01'),
(43, 64, 988920, 'Case HP vivo', '2', 30000.00, '2024-02-22 20:19:20', '2024-02-22 20:19:20'),
(44, 66, 988917, 'HP VIVO Y21', '3', 90000.00, '2024-02-22 20:23:18', '2024-02-22 20:23:18'),
(45, 70, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-25 19:02:24', '2024-02-25 19:02:24'),
(46, 71, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-25 19:12:18', '2024-02-25 19:12:18'),
(47, 78, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-25 22:33:45', '2024-02-25 22:33:45'),
(48, 80, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-25 22:41:17', '2024-02-25 22:41:17'),
(49, 82, 988916, 'HP VIVO Y21', '2', 60000.00, '2024-02-25 23:59:36', '2024-02-25 23:59:36'),
(50, 85, 988916, 'HP VIVO Y21', '2', 60000.00, '2024-02-26 00:17:01', '2024-02-26 00:29:37'),
(51, 86, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-26 00:31:20', '2024-02-26 00:31:20'),
(52, 87, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-26 00:32:05', '2024-02-26 00:32:05'),
(53, 93, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-26 17:51:18', '2024-02-26 17:51:18'),
(54, 94, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-26 18:02:59', '2024-02-26 18:02:59'),
(55, 96, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-26 20:47:52', '2024-02-26 20:47:52'),
(56, 98, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-26 21:43:48', '2024-02-26 21:43:48'),
(57, 100, 988916, 'HP VIVO Y21', '3', 90000.00, '2024-02-27 00:25:52', '2024-02-27 00:26:05'),
(58, 100, 988920, 'Case HP vivo', '1', 15000.00, '2024-02-27 00:26:47', '2024-02-27 00:26:47'),
(59, 101, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-27 00:38:17', '2024-02-27 00:38:17'),
(60, 103, 988916, 'HP VIVO Y21', '2', 60000.00, '2024-02-27 17:49:55', '2024-02-27 17:51:59'),
(61, 104, 988916, 'HP VIVO Y21', '4', 120000.00, '2024-02-27 17:59:00', '2024-02-27 17:59:00'),
(62, 105, 988920, 'Case HP vivo', '2', 30000.00, '2024-02-27 18:00:24', '2024-02-27 18:00:24'),
(63, 106, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-27 18:04:12', '2024-02-27 18:04:12'),
(64, 107, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-27 18:15:21', '2024-02-27 18:15:21'),
(65, 113, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-28 04:40:30', '2024-02-28 04:40:30'),
(69, 117, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 00:10:59', '2024-02-29 00:10:59'),
(70, 121, 988920, 'Case HP vivo', '4', 60000.00, '2024-02-29 05:25:31', '2024-02-29 05:25:31'),
(71, 123, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 19:12:57', '2024-02-29 19:12:57'),
(72, 124, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 19:19:48', '2024-02-29 19:19:48'),
(73, 126, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 19:47:46', '2024-02-29 19:47:46'),
(74, 127, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 19:49:17', '2024-02-29 19:49:17'),
(75, 128, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 21:16:35', '2024-02-29 21:16:35'),
(77, 132, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 23:03:21', '2024-02-29 23:03:21'),
(78, 133, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-02-29 23:05:00', '2024-02-29 23:05:00'),
(79, 140, 988916, 'HP VIVO Y21', '3', 90000.00, '2024-03-01 04:58:04', '2024-03-01 05:01:09'),
(80, 146, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-03-02 08:35:28', '2024-03-02 08:35:28'),
(81, 147, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-03-03 04:18:41', '2024-03-03 04:18:41'),
(82, 148, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-03-03 04:23:26', '2024-03-03 04:23:26'),
(83, 149, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-03-03 04:50:30', '2024-03-03 04:50:30'),
(84, 150, 988916, 'HP VIVO Y21', '1', 30000.00, '2024-03-03 05:03:34', '2024-03-03 05:03:34'),
(86, 153, 988920, 'Case HP vivo', '1', 25000.00, '2024-03-03 18:39:26', '2024-03-03 18:39:26'),
(89, 162, 988922, 'laptop', '1', 5000000.00, '2024-03-04 04:35:27', '2024-03-04 04:35:27'),
(90, 163, 988916, 'HP VIVO Y30 S', '1', 500000.00, '2024-03-04 17:53:40', '2024-03-04 17:53:40'),
(91, 164, 988916, 'HP VIVO Y30 S', '2', 10000000.00, '2024-03-04 18:29:56', '2024-03-04 18:29:56'),
(92, 164, 988920, 'Case HP vivo', '2', 50000.00, '2024-03-04 18:30:52', '2024-03-04 18:30:52');

--
-- Trigger `detail_penjualan`
--
DELIMITER $$
CREATE TRIGGER `ins_stok` AFTER DELETE ON `detail_penjualan` FOR EACH ROW BEGIN
UPDATE produks SET stok = stok + old.jumlah_produk
WHERE id = old.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok_min` AFTER INSERT ON `detail_penjualan` FOR EACH ROW BEGIN
UPDATE produks SET stok = stok - new.jumlah_produk
WHERE id =new.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER UPDATE ON `detail_penjualan` FOR EACH ROW BEGIN
DECLARE perubahan_stok int;
set perubahan_stok = new.jumlah_produk - old.jumlah_produk;

UPDATE produks
SET stok = stok - perubahan_stok
WHERE id = new.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_24_074039_users', 2),
(6, '2024_01_29_062550_produk', 3),
(7, '2024_01_31_020001_pelanggan', 4),
(8, '2024_01_31_023458_penjualan', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id_pelanggan` bigint(20) NOT NULL,
  `nama_pelanggan` varchar(225) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(4, 'dadan', 'Laki-Laki', 'sumedang', '08752854173', '2024-02-07 04:37:47', '2024-02-07 04:37:47'),
(10, 'cep', 'Laki-Laki', 'Desa kebon baru kecamatan jatinunggal kabupaten sumedang provinsi jawa barat', '11', '2024-02-19 20:16:35', '2024-03-03 18:44:33'),
(13, 'miftah', 'Laki-Laki', 'wado', '08526271532', '2024-03-04 00:17:01', '2024-03-04 00:17:01'),
(14, 'igna', 'Laki-Laki', 'wado', '08526271532', '2024-03-04 00:17:54', '2024-03-04 00:17:54'),
(15, 'Syifa Nashwa S', 'Perempuan', 'Sukatali', '087863534954', '2024-03-04 18:27:36', '2024-03-04 18:27:36'),
(16, 'Ayi Zakiah Maryati', 'Perempuan', 'Cilopang Girang', '085846101554', '2024-03-04 18:37:22', '2024-03-04 18:37:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualans`
--

CREATE TABLE `penjualans` (
  `id_penjualan` bigint(20) UNSIGNED NOT NULL,
  `tanggal_penjualan` datetime(2) NOT NULL DEFAULT current_timestamp(2),
  `total_harga` decimal(65,2) DEFAULT NULL,
  `id_pelanggan` bigint(20) DEFAULT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) NOT NULL,
  `bayar` decimal(10,0) NOT NULL,
  `kembalian` decimal(10,0) NOT NULL,
  `nama_kasir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualans`
--

INSERT INTO `penjualans` (`id_penjualan`, `tanggal_penjualan`, `total_harga`, `id_pelanggan`, `nama_pelanggan`, `id_user`, `bayar`, `kembalian`, `nama_kasir`, `created_at`, `updated_at`) VALUES
(22, '2024-02-16 20:21:07.90', 272000.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-16 06:21:07', '2024-02-16 06:41:14'),
(28, '2024-02-18 15:37:41.04', 86000.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-18 01:37:41', '2024-02-18 02:01:35'),
(90, '2024-02-27 07:40:19.36', 0.00, 0, '0', 1, 0, 0, 'w', '2024-02-26 17:40:19', '2024-02-26 17:40:19'),
(92, '2024-02-27 07:40:51.84', 0.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-26 17:40:51', '2024-02-26 17:40:51'),
(93, '2024-02-27 07:43:20.35', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-26 17:43:20', '2024-02-26 17:59:50'),
(94, '2024-02-27 08:02:49.56', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-26 18:02:49', '2024-02-26 18:03:07'),
(95, '2024-02-27 08:50:36.76', 0.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-26 18:50:36', '2024-02-26 18:50:36'),
(96, '2024-02-27 10:46:40.69', 30000.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-26 20:46:40', '2024-02-26 20:47:52'),
(97, '2024-02-27 11:39:45.23', 0.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-26 21:39:45', '2024-02-26 21:39:45'),
(98, '2024-02-27 11:42:30.17', 30000.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-26 21:42:30', '2024-02-26 21:43:48'),
(100, '2024-02-27 14:25:40.62', 105000.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-27 00:25:40', '2024-02-27 00:26:47'),
(101, '2024-02-27 14:38:10.07', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-27 00:38:10', '2024-02-27 00:39:09'),
(102, '2024-02-27 18:44:34.71', 0.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-27 04:44:34', '2024-02-27 04:44:34'),
(103, '2024-02-28 07:49:33.58', 60000.00, NULL, NULL, 18, 100000, 40000, 'yy', '2024-02-27 17:49:33', '2024-02-27 17:53:24'),
(104, '2024-02-28 07:58:43.95', 120000.00, NULL, NULL, 18, 200000, 80000, 'yy', '2024-02-27 17:58:43', '2024-02-27 17:59:20'),
(105, '2024-02-28 08:00:11.66', 30000.00, NULL, NULL, 18, 50000, 20000, 'yy', '2024-02-27 18:00:11', '2024-02-27 18:00:34'),
(106, '2024-02-28 08:04:05.78', 30000.00, NULL, NULL, 18, 0, 0, 'yy', '2024-02-27 18:04:05', '2024-02-27 18:04:12'),
(107, '2024-02-28 08:15:14.21', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-27 18:15:14', '2024-02-27 18:15:27'),
(113, '2024-02-28 18:39:06.53', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-28 04:39:06', '2024-02-28 04:40:48'),
(117, '2024-02-29 12:29:12.55', 30000.00, NULL, NULL, 1, 100000, 70000, 'w', '2024-02-28 22:29:12', '2024-02-29 00:17:15'),
(121, '2024-02-29 19:25:10.09', 60000.00, NULL, NULL, 1, 100000, 40000, 'w', '2024-02-29 05:25:10', '2024-02-29 05:25:38'),
(123, '2024-03-01 09:12:49.48', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-29 19:12:49', '2024-02-29 19:13:09'),
(124, '2024-03-01 09:19:40.16', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-29 19:19:40', '2024-02-29 19:19:54'),
(126, '2024-03-01 09:47:39.58', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-29 19:47:39', '2024-02-29 19:47:51'),
(127, '2024-03-01 09:49:10.08', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-02-29 19:49:10', '2024-02-29 19:49:29'),
(128, '2024-03-01 10:08:01.84', 30000.00, NULL, NULL, 1, 0, 0, 'w', '2024-02-29 20:08:01', '2024-02-29 21:16:35'),
(140, '2024-03-01 18:57:55.79', 90000.00, 4, 'dadan', 1, 100000, 10000, 'w', '2024-03-01 04:57:55', '2024-03-01 05:01:34'),
(146, '2024-03-02 22:35:20.56', 30000.00, NULL, NULL, 1, 50000, 20000, 'w', '2024-03-02 08:35:20', '2024-03-02 08:35:38'),
(147, '2024-03-03 18:18:34.69', 30000.00, NULL, NULL, 1, 0, 0, 'w', '2024-03-03 04:18:34', '2024-03-03 04:18:42'),
(148, '2024-03-03 18:23:19.68', 30000.00, NULL, NULL, 18, 0, 0, 'yy', '2024-03-03 04:23:19', '2024-03-03 04:23:26'),
(149, '2024-03-03 18:50:20.11', 30000.00, NULL, 'dadan', 1, 50000, 20000, 'w', '2024-03-03 04:50:20', '2024-03-03 04:50:52'),
(150, '2024-03-03 19:03:27.79', 30000.00, NULL, 'dadan', 18, 0, 0, 'yy', '2024-03-03 05:03:27', '2024-03-04 00:44:36'),
(162, '2024-03-04 18:33:35.50', 5000000.00, NULL, 'dadan', 18, 10000000, 5000000, 'yy', '2024-03-04 04:33:35', '2024-03-04 04:35:41'),
(163, '2024-03-05 07:53:33.17', 500000.00, NULL, NULL, 1, 1000000, 500000, 'w', '2024-03-04 17:53:33', '2024-03-04 17:53:50'),
(164, '2024-03-05 08:29:23.39', 10050000.00, NULL, 'Syifa Nashwa S', 1, 11000000, 950000, 'w', '2024-03-04 18:29:23', '2024-03-04 18:31:47'),
(165, '2024-03-05 08:33:37.10', 0.00, NULL, NULL, 1, 0, 0, 'w', '2024-03-04 18:33:37', '2024-03-04 18:33:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `satuan`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(988916, 'HP VIVO Y30 S', '1 unit', 5000000.00, 39, '2024-02-19 19:59:06', '2024-03-04 18:28:42'),
(988917, 'HP VIVO Y21', '1 unit', 4500000.00, 37, '2024-02-19 19:59:36', '2024-03-03 18:37:26'),
(988920, 'Case HP vivo', '1 picis', 25000.00, 27, '2024-02-22 20:16:51', '2024-03-03 18:36:43'),
(988922, 'laptop', '1 unit', 6000000.00, 19, '2024-02-29 19:16:14', '2024-03-04 18:29:05'),
(988923, 'Earphone', '1 unit', 45000.00, 50, '2024-03-04 05:37:32', '2024-03-04 05:37:32'),
(988924, 'case hp oppo', '1 picis', 20000.00, 50, '2024-03-04 05:39:55', '2024-03-04 05:39:55'),
(988926, 'Kabel Data Fomme', '1 PCS', 15000.00, 100, '2024-03-04 17:55:19', '2024-03-04 17:55:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Kasir') NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `email`, `password`, `role`, `alamat`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'w', 'Yogi', 'w@gmail.com', '$2y$10$foLwVYyf8pKWcUuIMQesg.FE/ycBBfpEARE7BCfQfcM9LRNMLtwES', 'Admin', 'jatinunggal', 'Laki-Laki', NULL, '2024-03-02 08:32:44'),
(5, 'yogi', 'Yogi', 'kustiawanyogi723@gmail.com', '$2y$12$0yIOL0nLAi5De/42w1K1fuFQuGcZCwotlJrBCWpGMiuUQdvy5tKWK', 'Admin', 'Jatinunggal', 'Laki-Laki', '2024-01-25 04:49:18', '2024-01-25 04:49:18'),
(7, 'nnnnnnn', 'nnn', 'n@gmail.com', '$2y$12$K9o0P3/E7S1aDTaySTCxjuO0V3H.PNQwTsTwxc5ooWgexm/NPZry2', 'Admin', 'Wado', 'Perempuan', '2024-01-28 23:22:29', '2024-01-28 23:22:29'),
(8, 'meyra', 'memey', 'meyrot@gmail.com', '$2y$12$N5NOZafr6mEt6vmYD8SRmu8dLDgm3CiASp3JQioKCcq16wKHqIatO', 'Admin', 'Jatinunggal', 'Perempuan', '2024-01-29 00:18:44', '2024-01-29 00:18:44'),
(9, 'anu', 'anunu', 'anu@gmail.com', '$2y$12$sSicuEcRyL5DKhOHqhQMhuvp2Xw5i1yEVBKvKC9HcEE3rv7bG.2YC', 'Kasir', 'dianu', 'Laki-Laki', '2024-01-29 01:19:37', '2024-01-29 01:19:37'),
(13, 'yogi kustiawan', 'yogi55', 'kustiawanyogi@gmail.com', '$2y$12$a6NgV9TZgMzLqw0ySUbMeeIWhYtP1BoLInNjXqVnbEPl8o1eoZ0d2', 'Kasir', 'wado', 'Laki-Laki', '2024-02-05 21:21:12', '2024-02-18 02:36:40'),
(18, 'yy', 'oo', 'o@gmail.com', '$2y$12$3o0PSmsMQfxGlyx7.Wra1OjyRZ4v2QbqO0S7wf1Rrzr3Ne7O.Apb2', 'Kasir', 'Jatinunggal', 'Laki-Laki', '2024-02-18 03:05:54', '2024-02-18 03:05:54'),
(19, 'dh', 'indah', 'dh@gmail.com', '$2y$12$2UJyWTdHtrZnhe5WEfn8G.h6d.0m/Ul6EOZJTBquuJS/Q.nOQ8XsO', 'Kasir', 'ranjeng', 'Perempuan', '2024-02-18 23:45:05', '2024-02-22 20:14:12'),
(21, 'Riva Rahmawati', 'Riva Rahmawati', 'riva@gmail.com', '$2y$12$AjWuQBHyap6EmFY5g2v7Lu7CIGy/yNa6CFl8xzOHZuLtrKdtz/TDS', 'Admin', 'Sukatali', 'Perempuan', '2024-03-04 18:26:39', '2024-03-04 18:26:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`detailid`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD UNIQUE KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id_pelanggan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id_penjualan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988927;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
