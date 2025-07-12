-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2025 at 02:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wuw`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `kategori`, `nama_barang`, `stok`, `foto`, `deskripsi`, `warna`, `ukuran`, `type`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Baju Wisuda', 'Blue Glassy', '5', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'Indah', 'Maroon', 'XL', 'Satu Set', '100000.00', '2025-06-27 12:00:39', '2025-07-11 12:18:31'),
(2, 'Baju Wisuda', 'Green Glassy', '0', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'aaaaaa', 'Green', 'M', 'Satu Set', '50000.00', '2025-06-28 01:26:07', '2025-07-05 13:38:45'),
(3, 'Baju Wisuda', 'ewtwt', '4', 'barangs/74e30ec6-55c6-47da-b9f2-8e85feed3c2b.jpg', 'segsgsgsegges', 'Abu Tua', 'XL', 'Satu Set', '22222.00', '2025-06-29 22:49:49', '2025-07-11 12:15:35'),
(4, 'Baju Wisuda', 'hhthrttrh', '5', 'barangs/075a1979-59d2-4678-8688-0f9dd2725c19.jpg', 'agsegesgg', 'rgdfger', 'XL', 'Satu Set', '11111.00', '2025-06-29 22:51:12', '2025-07-11 11:53:47'),
(5, 'Baju Wisuda', 'aaaaa', '5', 'barangs/4e5e0dfa-5c79-4814-8c24-3b5a10e307ba.jpg', 'agsgrrgre', 'Hitam dan Silver/Abu Muda', 'XL', 'Satu Set', '44444.00', '2025-06-29 22:52:13', '2025-07-11 12:11:19'),
(6, 'Baju Wisuda', 'aaaaa', '2', 'barangs/4e5e0dfa-5c79-4814-8c24-3b5a10e307ba.jpg', 'adfsegwsg', 'Hitam dan Silver/Abu Muda', 'M', 'Satu Set', '44444.00', '2025-06-29 22:52:57', '2025-07-11 11:52:52'),
(7, 'Baju Wisuda', 'hhthrttrh', '8', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'afsesewg', 'Green', 'L', 'Satu Set', '44332.00', '2025-06-29 22:53:37', '2025-07-11 11:53:35'),
(8, 'Baju Wisuda', 'egwgw', '5', 'barangs/075a1979-59d2-4678-8688-0f9dd2725c19.jpg', 'jujgui', 'Hitam dan Silver/Abu Muda', 'L', 'Satu Set', '2222.00', '2025-06-29 22:57:25', '2025-06-29 22:57:25'),
(9, 'Baju Wisuda', 'Green Glassy', '5', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', ' fhyfkfku', 'Green', 'XL', 'Satu Set', '55555.00', '2025-06-29 23:03:37', '2025-06-29 23:03:37'),
(10, 'Baju Wisuda', 'Blue Glassy', '3', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'aefefeef', 'Biru Tua', 'XL', 'Satu Set', '22222.00', '2025-06-29 23:11:31', '2025-07-01 09:41:09'),
(11, 'Baju Wisuda', 'aewefeff', '2', 'barangs/043eea35-d584-4b44-9396-668fafa32ecd.jpg', 'aefweffwe', 'Pink', 'XL', 'Satu Set', '33333.00', '2025-06-29 23:13:03', '2025-06-30 12:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1751538657),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1751538657;', 1751538657),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1751626095),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1751626095;', 1751626095);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int NOT NULL DEFAULT '1',
  `harga` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `user_id`, `nama_barang`, `foto`, `ukuran`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(20, 7, 'aewefeff', 'barangs/043eea35-d584-4b44-9396-668fafa32ecd.jpg', 'XL', 1, 33333, '2025-06-30 12:05:43', '2025-06-30 12:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `email`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'customer@gmail.com', 'Kritik', 'Haiii aku boleh kasih saran gk?', '2025-06-30 12:01:56', '2025-06-30 12:01:56'),
(2, 'customer', 'customer@gmail.com', 'Kritik', 'Haiii aku boleh kasih saran gk?', '2025-06-30 12:02:08', '2025-06-30 12:02:08'),
(3, 'customer', 'customer@gmail.com', 'Kritik', 'zsfds', '2025-07-06 00:43:19', '2025-07-06 00:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_06_102608_create_barangs_table', 1),
(5, '2025_05_08_094325_create_kontaks_table', 1),
(6, '2025_05_17_232106_add_alamat_telepon_role_foto_to_users_table', 1),
(7, '2025_05_18_033057_add_custom_fields_to_users_table', 1),
(8, '2025_05_18_033058_add_avatar_url_to_users_table', 1),
(9, '2025_05_31_065731_add_orders_table', 1),
(10, '2025_06_02_184229_add_name_to_orders_table', 1),
(11, '2025_06_07_104933_create_payments_table', 1),
(12, '2025_06_08_085855_create_reviews_table', 1),
(13, '2025_06_20_184915_add_snap_result_to_payments_table', 1),
(14, '2025_06_21_102151_create_keranjang_table', 1),
(15, '2025_06_21_105315_add_harga_to_keranjang_table', 1),
(16, '2025_06_27_132305_add_foto_ktp_and_status_verifikasi_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `harga_per_hari` bigint NOT NULL,
  `total_harga` bigint NOT NULL,
  `status` enum('pending','dibayar','diproses','selesai','batal','dikembalikan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `nama_barang`, `foto`, `ukuran`, `qty`, `tanggal_mulai`, `tanggal_selesai`, `harga_per_hari`, `total_harga`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-27', '2025-06-27', 100000, 100000, 'dikembalikan', '2025-06-27 12:04:05', '2025-06-27 12:18:47'),
(2, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-27', '2025-06-27', 100000, 100000, 'selesai', '2025-06-27 14:41:43', '2025-06-27 14:41:59'),
(3, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-30', 100000, 300000, 'selesai', '2025-06-28 00:43:02', '2025-06-28 00:46:58'),
(4, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-07-05', 100000, 800000, 'selesai', '2025-06-28 00:50:57', '2025-06-28 00:53:15'),
(5, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-07-03', 100000, 600000, 'selesai', '2025-06-28 00:57:19', '2025-06-28 00:57:37'),
(6, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-30', 100000, 300000, 'selesai', '2025-06-28 00:59:45', '2025-06-29 23:21:34'),
(7, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-07-01', 100000, 400000, 'selesai', '2025-06-28 01:01:58', '2025-06-28 01:09:52'),
(8, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-29', 100000, 200000, 'selesai', '2025-06-28 01:10:14', '2025-06-28 01:15:31'),
(9, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-29', 100000, 200000, 'batal', '2025-06-28 01:16:09', '2025-06-28 01:21:05'),
(10, 4, 'danial', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-29', 100000, 200000, 'selesai', '2025-06-28 01:26:55', '2025-06-28 01:28:01'),
(11, 4, 'danial', 'Green Glassy', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'M', 1, '2025-06-28', '2025-06-30', 50000, 150000, 'selesai', '2025-06-28 01:26:55', '2025-06-28 01:28:01'),
(12, 4, 'danial', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-29', 100000, 200000, 'pending', '2025-06-28 01:28:47', '2025-06-28 01:28:47'),
(13, 2, 'customer', 'Green Glassy', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'M', 1, '2025-06-28', '2025-06-30', 50000, 150000, 'selesai', '2025-06-28 06:08:16', '2025-06-28 06:09:14'),
(14, 5, 'Kayla', 'Green Glassy', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'M', 1, '2025-06-28', '2025-06-30', 50000, 150000, 'selesai', '2025-06-28 06:16:20', '2025-06-28 06:16:53'),
(15, 5, 'Kayla', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-30', 100000, 300000, 'selesai', '2025-06-28 06:16:20', '2025-06-28 06:16:53'),
(16, 5, 'Kayla', 'Green Glassy', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'M', 1, '2025-06-28', '2025-06-28', 50000, 50000, 'selesai', '2025-06-28 06:18:26', '2025-06-28 06:18:47'),
(17, 5, 'Kayla', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-28', '2025-06-30', 100000, 300000, 'selesai', '2025-06-28 06:27:33', '2025-07-01 09:22:17'),
(18, 6, 'Alveric', 'Green Glassy', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'M', 1, '2025-06-29', '2025-06-29', 50000, 50000, 'pending', '2025-06-29 03:21:12', '2025-06-29 03:21:12'),
(19, 2, 'customer', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-06-30', '2025-06-30', 22222, 22222, 'selesai', '2025-06-29 23:21:23', '2025-06-29 23:21:34'),
(20, 7, 'awdi', 'aaaaa', 'barangs/4e5e0dfa-5c79-4814-8c24-3b5a10e307ba.jpg', 'XL', 1, '2025-06-30', '2025-06-30', 44444, 44444, 'selesai', '2025-06-30 11:51:44', '2025-06-30 11:53:29'),
(21, 7, 'awdi', 'aewefeff', 'barangs/043eea35-d584-4b44-9396-668fafa32ecd.jpg', 'XL', 2, '2025-06-30', '2025-06-30', 33333, 66666, 'selesai', '2025-06-30 11:54:54', '2025-06-30 11:55:32'),
(22, 5, 'Kayla', 'aaaaa', 'barangs/4e5e0dfa-5c79-4814-8c24-3b5a10e307ba.jpg', 'XL', 1, '2025-07-01', '2025-07-04', 44444, 177776, 'selesai', '2025-07-01 09:22:07', '2025-07-01 09:22:16'),
(23, 5, 'Kayla', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-07-01', '2025-07-03', 22222, 66666, 'selesai', '2025-07-01 09:41:19', '2025-07-01 09:48:22'),
(25, 5, 'Kayla', 'Green Glassy', 'barangs/4cdd18b2-856a-4c39-bd7f-3ab448345e61.jpg', 'M', 1, '2025-07-05', '2025-07-05', 50000, 50000, 'selesai', '2025-07-05 13:38:54', '2025-07-05 13:40:40'),
(26, 2, 'customer', 'aaaaa', 'barangs/4e5e0dfa-5c79-4814-8c24-3b5a10e307ba.jpg', 'M', 1, '2025-07-06', '2025-07-07', 44444, 88888, 'diproses', '2025-07-06 00:42:40', '2025-07-06 00:42:53'),
(27, 3, 'penyewa', 'aaaaa', 'barangs/4e5e0dfa-5c79-4814-8c24-3b5a10e307ba.jpg', 'M', 1, '2025-07-11', '2025-07-11', 44444, 44444, 'selesai', '2025-07-11 11:54:09', '2025-07-11 12:03:37'),
(28, 3, 'penyewa', 'hhthrttrh', 'barangs/075a1979-59d2-4678-8688-0f9dd2725c19.jpg', 'XL', 1, '2025-07-11', '2025-07-11', 11111, 11111, 'selesai', '2025-07-11 11:54:09', '2025-07-11 12:03:37'),
(29, 3, 'penyewa', 'Blue Glassy', 'barangs/60876636-f6c4-4bec-a095-68f41cbef6e8.jpg', 'XL', 1, '2025-07-11', '2025-07-12', 100000, 200000, 'selesai', '2025-07-11 12:16:00', '2025-07-11 12:16:33'),
(30, 3, 'penyewa', 'ewtwt', 'barangs/74e30ec6-55c6-47da-b9f2-8e85feed3c2b.jpg', 'XL', 1, '2025-07-11', '2025-07-12', 22222, 44444, 'selesai', '2025-07-11 12:16:00', '2025-07-11 12:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `qty` int NOT NULL,
  `metode` enum('cod','qris') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengiriman` enum('antar','jemput') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `total` decimal(12,2) NOT NULL,
  `status` enum('pending','dibayar','diproses','selesai','batal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'selesai',
  `snap_result` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `order_id`, `nama_barang`, `ukuran`, `tanggal_mulai`, `tanggal_selesai`, `qty`, `metode`, `pengiriman`, `alamat`, `total`, `status`, `snap_result`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Blue Glassy', 'XL', '2025-06-27', '2025-06-27', 1, 'cod', 'jemput', NULL, '101500.00', 'dibayar', NULL, '2025-06-27 12:04:14', '2025-06-27 12:10:27'),
(2, 2, 2, 'Blue Glassy', 'XL', '2025-06-27', '2025-06-27', 1, 'cod', 'jemput', NULL, '101500.00', 'diproses', NULL, '2025-06-27 14:41:59', '2025-06-27 14:41:59'),
(3, 2, 3, 'Blue Glassy', 'XL', '2025-06-28', '2025-06-30', 1, 'qris', 'antar', NULL, '301500.00', 'dibayar', NULL, '2025-06-28 00:46:58', '2025-06-28 00:46:58'),
(4, 2, 4, 'Blue Glassy', 'XL', '2025-06-28', '2025-07-05', 1, 'qris', 'antar', NULL, '801500.00', 'dibayar', NULL, '2025-06-28 00:53:15', '2025-06-28 00:53:15'),
(5, 2, 5, 'Blue Glassy', 'XL', '2025-06-28', '2025-07-03', 1, 'qris', 'antar', 'Perumahan Greenland,Batam Center,Kepulauan Riau', '601500.00', 'dibayar', NULL, '2025-06-28 00:57:37', '2025-06-28 00:57:37'),
(6, 2, 6, 'Blue Glassy', 'XL', '2025-06-28', '2025-06-30', 1, 'cod', 'antar', 'Batam', '301500.00', 'diproses', NULL, '2025-06-28 01:00:56', '2025-06-28 01:00:56'),
(7, 2, 7, 'Blue Glassy', 'XL', '2025-06-28', '2025-07-01', 1, 'qris', 'antar', 'Perumahan Greenland,Batam Center,Kepulauan Riau', '401500.00', 'dibayar', NULL, '2025-06-28 01:09:52', '2025-06-28 01:09:52'),
(8, 2, 8, 'Blue Glassy', 'XL', '2025-06-28', '2025-06-29', 1, 'qris', 'antar', 'Perumahan Greenland,Batam Center,Kepulauan Riau', '201500.00', 'dibayar', NULL, '2025-06-28 01:15:31', '2025-06-28 01:15:31'),
(9, 4, 10, 'Blue Glassy', 'XL', '2025-06-28', '2025-06-29', 1, 'qris', 'antar', 'Punggur,Batam,Kepulauan Riau', '201500.00', 'dibayar', NULL, '2025-06-28 01:28:01', '2025-06-28 01:28:01'),
(10, 4, 11, 'Green Glassy', 'M', '2025-06-28', '2025-06-30', 1, 'qris', 'antar', 'Punggur,Batam,Kepulauan Riau', '151500.00', 'dibayar', NULL, '2025-06-28 01:28:01', '2025-06-28 01:28:01'),
(11, 2, 13, 'Green Glassy', 'M', '2025-06-28', '2025-06-30', 1, 'qris', 'antar', 'Perumahan Greenland,Batam Center,Kepulauan Riau', '151500.00', 'dibayar', NULL, '2025-06-28 06:09:14', '2025-06-28 06:09:14'),
(12, 5, 14, 'Green Glassy', 'M', '2025-06-28', '2025-06-30', 1, 'qris', 'antar', 'Bengkong Indah Blok I No 9', '151500.00', 'dibayar', NULL, '2025-06-28 06:16:53', '2025-06-28 06:16:53'),
(13, 5, 15, 'Blue Glassy', 'XL', '2025-06-28', '2025-06-30', 1, 'qris', 'antar', 'Bengkong Indah Blok I No 9', '301500.00', 'dibayar', NULL, '2025-06-28 06:16:53', '2025-06-28 06:16:53'),
(14, 5, 16, 'Green Glassy', 'M', '2025-06-28', '2025-06-28', 1, 'cod', 'antar', 'Batam', '51500.00', 'diproses', NULL, '2025-06-28 06:18:46', '2025-06-28 06:18:46'),
(15, 5, 17, 'Blue Glassy', 'XL', '2025-06-28', '2025-06-30', 1, 'cod', 'jemput', NULL, '301500.00', 'diproses', NULL, '2025-06-28 06:27:54', '2025-06-28 06:27:54'),
(16, 2, 19, 'Blue Glassy', 'XL', '2025-06-30', '2025-06-30', 1, 'cod', 'jemput', NULL, '23722.00', 'diproses', NULL, '2025-06-29 23:21:34', '2025-06-29 23:21:34'),
(17, 7, 20, 'aaaaa', 'XL', '2025-06-30', '2025-06-30', 1, 'cod', 'jemput', NULL, '45944.00', 'dibayar', NULL, '2025-06-30 11:53:28', '2025-07-04 10:42:22'),
(18, 7, 21, 'aewefeff', 'XL', '2025-06-30', '2025-06-30', 2, 'cod', 'jemput', NULL, '68166.00', 'diproses', NULL, '2025-06-30 11:55:32', '2025-06-30 11:55:32'),
(19, 5, 22, 'aaaaa', 'XL', '2025-07-01', '2025-07-04', 1, 'qris', 'antar', 'Bengkong Indah Blok I No 9', '179276.00', 'dibayar', NULL, '2025-07-01 09:22:16', '2025-07-01 09:22:16'),
(20, 5, 23, 'Blue Glassy', 'XL', '2025-07-01', '2025-07-03', 1, 'qris', 'antar', 'Bengkong Indah Blok I No 9', '68166.00', 'dibayar', NULL, '2025-07-01 09:48:22', '2025-07-01 09:48:22'),
(22, 5, 25, 'Green Glassy', 'M', '2025-07-05', '2025-07-05', 1, 'cod', 'jemput', NULL, '51500.00', 'diproses', NULL, '2025-07-05 13:40:39', '2025-07-05 13:40:39'),
(23, 2, 26, 'aaaaa', 'M', '2025-07-06', '2025-07-07', 1, 'cod', 'jemput', NULL, '90388.00', 'diproses', NULL, '2025-07-06 00:42:53', '2025-07-06 00:42:53'),
(24, 3, 27, 'aaaaa', 'M', '2025-07-11', '2025-07-11', 1, 'qris', 'antar', 'aa', '64444.00', 'dibayar', NULL, '2025-07-11 12:03:37', '2025-07-11 12:03:37'),
(25, 3, 28, 'hhthrttrh', 'XL', '2025-07-11', '2025-07-11', 1, 'qris', 'antar', 'aa', '31111.00', 'dibayar', NULL, '2025-07-11 12:03:37', '2025-07-11 12:03:37'),
(26, 3, 29, 'Blue Glassy', 'XL', '2025-07-11', '2025-07-12', 1, 'qris', 'antar', 'batam', '200000.00', 'dibayar', NULL, '2025-07-11 12:16:33', '2025-07-11 12:16:33'),
(27, 3, 30, 'ewtwt', 'XL', '2025-07-11', '2025-07-12', 1, 'qris', 'antar', 'batam', '44444.00', 'dibayar', NULL, '2025-07-11 12:16:33', '2025-07-11 12:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `payment_id` bigint UNSIGNED NOT NULL,
  `ulasan` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `order_id`, `payment_id`, `ulasan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'bagus', 'ulasan_foto/KuImlymvy7cP7LHm0s41D6oykGqSEoIMAVBpCb1M.png', '2025-06-27 12:19:52', '2025-06-27 12:19:52'),
(2, 7, 21, 18, 'bagus', 'ulasan_foto/3RQu5mAEY5lxl8X4FQ0XT6WnwEE2GHd7QwMAY1x3.png', '2025-06-30 12:03:07', '2025-06-30 12:03:07'),
(3, 7, 20, 17, 'bagus', 'ulasan_foto/XEhsyGCKQcu9VXXyhl3XyNP2eLtZ0BqjSPQ8dL3b.png', '2025-06-30 12:04:18', '2025-06-30 12:04:18'),
(4, 7, 20, 17, 'bagus', 'ulasan_foto/8imo07lsOBY1YwqtKMARxKei40WvDgDkL4ToH74R.png', '2025-06-30 12:04:37', '2025-06-30 12:04:37'),
(5, 2, 1, 1, 'bgys', NULL, '2025-07-06 00:29:40', '2025-07-06 00:29:40'),
(6, 2, 1, 1, 'srfr', 'ulasan_foto/mBDleyDf1gpzIpCjffYUpx7YiTD3Qol48uXk9Xw2.png', '2025-07-06 00:35:40', '2025-07-06 00:35:40'),
(7, 2, 1, 1, 'srfr', 'ulasan_foto/xY2oNFKXTIqWJZfugGuD4e5iRwnRplRQBrrjbu3r.png', '2025-07-06 00:35:41', '2025-07-06 00:35:41'),
(8, 2, 1, 1, 'srfr', 'ulasan_foto/0gN6tLtNiIXhVQPaQ2A1fYsz2AI7SMM8hVMllGgH.png', '2025-07-06 00:35:43', '2025-07-06 00:35:43'),
(9, 2, 13, 11, 'haiii', 'ulasan_foto/uNxRWm2Gm0oDjK7yNcWXJITQaSjDKsKqADphUTVn.png', '2025-07-06 00:36:20', '2025-07-06 00:36:20'),
(10, 2, 2, 2, 'ahvfhkaevf', 'ulasan_foto/GPcvnv7OhZLXAKTx76Y4YpCNFPy4QrrxFSse1Blp.jpg', '2025-07-06 00:43:43', '2025-07-06 00:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cymqRTUgXqqZLpATb9Z0KcBhaCnE6bLmo42mmEP3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGpJeFJpMlJzNGVYZWFVbURKQUMzV0xWdTJDbnhhZzhjbUgxZnF5TCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1752236321),
('QjqRhgSZhdmq0oCRhL2u6L09DgxW7XoMGzbuT79S', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia1Vuamk5M0hSOW1MVG02RVFPSFVWVU1jZFFHNFN1NlVCNnFrWTk3MyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO319', 1752021863),
('wqKdPEkgPRdJJq5jv769ugB2tXibuti969yQJcOx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVFQ4VTE1NHlMOHdpOFJCRm1MYnJnRHZBZlBtNlRzY0dSY3c1dkpGdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO319', 1752207720);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_verifikasi` enum('menunggu','terverifikasi') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'menunggu',
  `custom_fields` json DEFAULT NULL,
  `avatar_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `telepon`, `role`, `foto`, `foto_ktp`, `status_verifikasi`, `custom_fields`, `avatar_url`) VALUES
(1, 'WearYouWant', 'wuw@gmail.com', NULL, '$2y$12$2BM/Kx.U/fTw/j0il2or/eKMEIzVdNOBMMZUy5FzW4h6sdTU93Jta', NULL, '2025-06-27 11:58:47', '2025-07-03 08:46:45', NULL, NULL, 'admin', NULL, NULL, 'menunggu', NULL, 'avatars/01JZ7QF0XWNTVHYJM8W353CV36.png'),
(2, 'customer', 'customer@gmail.com', NULL, '$2y$12$u8z8klECgddMU.8Av7nDueTt9AExWf/sKT36lfG8dPlskfd1ohWD.', NULL, '2025-06-27 12:01:20', '2025-06-28 00:50:00', 'Perumahan Greenland,Batam Center,Kepulauan Riau', '081244556987', 'customer', 'profile/KDLEXK8DOAb0f30xHY2irDfLV1gWAe6469bLECro.png', 'ktp/ULWXnNHlMqol7oH4KoH62BV9GmmlTbS5rOwhC5HL.png', 'terverifikasi', NULL, NULL),
(3, 'penyewa', 'penyewa@gmail.com', NULL, '$2y$12$8yV1Je/pTaL3BSYmv.XfJe4jS8WE.YkV2FpcdcBFyf1cS80Lrzh22', NULL, '2025-06-27 14:36:12', '2025-06-27 14:36:12', NULL, NULL, 'customer', NULL, NULL, 'menunggu', NULL, NULL),
(4, 'danial', 'danial@gmail.com', NULL, '$2y$12$pYHlonsCBCpkqKBhgHGusO4i0ZFAr3LcRvJj3WfLYUA5rkWHSoyjm', NULL, '2025-06-28 01:22:07', '2025-06-28 01:23:32', 'Punggur,Batam,Kepulauan Riau', '081257984561', 'customer', 'profile/Rqcw4ObjIjHCKmUy8qfhCuUxoLrSoOIS5YqoBzpX.jpg', 'ktp/196n3PhNubo2HJClppH2vtwW3Ti4JuYt8nVNirW1.png', 'terverifikasi', NULL, NULL),
(5, 'Kayla', 'Kayla@gmail.com', NULL, '$2y$12$97HWBsywXynsEwot35ikrugNXI5/C82RZoGWo1JvIBewDTKJ5RqB.', NULL, '2025-06-28 06:10:47', '2025-06-28 06:14:56', 'Bengkong Indah Blok I No 9', '081233664455', 'customer', 'profile/N4vvZDJuEF0HYeBsedeJOme5aIKjA50q3gaMILU3.png', 'ktp/IDpZ1rQVDcaQRL0aG6ap1AO7jtZvJZXAI4x9EPnO.png', 'terverifikasi', NULL, NULL),
(6, 'Alveric', 'Alveric@gmail.com', NULL, '$2y$12$YsVK8UAsXlhNGlQZvZc5aecN/2o.ciefbzO.vMlgyEf0oXTvlEVjC', NULL, '2025-06-29 03:20:47', '2025-06-29 03:22:26', 'Batam', '081233664455', 'customer', NULL, NULL, 'menunggu', NULL, NULL),
(7, 'awdi', 'awdino@gmail.com', NULL, '$2y$12$qqv3vPi2j2ekGRTedVIKVOqJ7qUXbhZlAqo8Ty6nvu4CyuWSvvP.O', NULL, '2025-06-30 11:44:15', '2025-06-30 11:44:15', NULL, NULL, 'customer', NULL, NULL, 'menunggu', NULL, NULL),
(8, 'AYla', 'Ayla@gmail.com', NULL, '$2y$12$miJwDnbeWKZIjsaymJe3ZuJmCpDKofZcYdswUR..Q2Yezmyw91ABC', NULL, '2025-06-30 11:45:54', '2025-06-30 11:45:54', NULL, NULL, 'customer', NULL, NULL, 'menunggu', NULL, NULL),
(9, 'aa', 'aa@gmail.com', NULL, '$2y$12$QVCjyIP5wbbiL8UT35guNOtDQHMXzF9PUC.Yz3T4f5SeJTLjRCri6', NULL, '2025-07-06 00:24:54', '2025-07-06 00:24:54', NULL, NULL, 'customer', NULL, NULL, 'menunggu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjangs_user_id_foreign` (`user_id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_order_id_foreign` (`order_id`),
  ADD KEY `reviews_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjangs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
