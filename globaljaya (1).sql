-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 03:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globaljaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`, `alamat`, `latitude`, `longitude`, `created_at`, `updated_at`, `no_telpon`, `email`) VALUES
(1, 'Global Jaya Utama', 'South Quarter, Tower A, Lantai 18, Unit D-G, Jl RA. Kartini Kav. 8 , Kel. Cilandak Barat, Kec. Cilandak, Kota Adm. Jakarta Selatan, Prov. DKI Jakarta', '-6.292688', '106.785665', '2021-11-19 06:53:17', '2021-12-06 09:19:16', '02131180063', 'globaljayautama.gju@gmail.com');

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
(4, '2021_11_19_123624_create_lokasi_table', 2),
(5, '2021_11_19_130057_add_field_no_telpon_to_lokasi_table', 3),
(6, '2021_11_19_134648_add_field_email_to_lokasi_table', 4),
(7, '2021_11_19_154042_create_produk_table', 5),
(8, '2021_11_30_113416_create_kontak_table', 6),
(9, '2021_12_01_115354_add_roles_field_to_users_table', 7);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Industri Peralatan Kedokteran', 'assets/images/rdwOpumJuD4Hg2v6ms9AtR4v0gSBhHN7KDzf7Rmh.jpg', '2021-11-21 08:37:45', '2021-12-06 09:46:01'),
(3, 'Konstruksi Gedung Kesehatan', 'assets/images/gtQyJVO8NegvBKRjLZzfLhg4XGZjo6UU8AL9iUS2.jpg', '2021-12-01 07:04:31', '2021-12-06 08:55:48'),
(4, 'Konstruksi Gedung Pendidikan', 'assets/images/2jLYWTUi2M1G2HNjkG4u8u0KyXGWNamOoMSbKkrJ.jpg', '2021-12-01 07:05:47', '2021-12-06 09:03:07'),
(5, 'Konstruksi Gedung Penginapan', 'assets/images/OYrWO8KUUest5hQ1kpQeDfSGtgfGbqUC77cBdoby.jpg', '2021-12-01 07:09:27', '2021-12-06 08:58:17'),
(6, 'Konstruksi Gedung Tempat Hiburan Dan Olahraga', 'assets/images/wmSpiHp92ZEMXWueUlZvCkBym674oOsi55lgiYau.jpg', '2021-12-01 07:09:48', '2021-12-06 08:58:53'),
(7, 'Konstruksi Gedung Lainnya', 'assets/images/xGj7mF5DAtC3nKZ9BcianzewHnTjNYnXSVDywceP.jpg', '2021-12-06 08:59:49', '2021-12-06 08:59:49'),
(8, 'Pemasangan Bangunan Prafabrikasi Untuk Gedung', 'assets/images/GIdvLyRp3KHfvj5hLSfGTiEJO2xEe8kKTooHTda3.jpg', '2021-12-06 09:00:38', '2021-12-06 09:00:38'),
(9, 'Instalasi Listrik', 'assets/images/jM5oZZTr7jEpcb8IVnWnh81nnjWoo9EfAghoAZpa.jpg', '2021-12-06 09:01:08', '2021-12-06 09:01:08'),
(10, 'Instalasi Saluran Air (Plambing)', 'assets/images/f3WL6skKktWPvYmRGtVRBKtv5i5rcQAZ0Q4Dtt7I.jpg', '2021-12-06 09:01:48', '2021-12-06 09:01:48'),
(11, 'Instalasi Pemanas Dan Geotermal', 'assets/images/qbsUNxoNOvQJLgDxpnO2rlKzD7tgfhp4knVgIhBh.jpg', '2021-12-06 09:02:25', '2021-12-06 09:02:25'),
(12, 'Perdagangan Besar Kaca', 'assets/images/jAE9QxrSjWwGs25dpBH9rUPnmZn6WaLi5uez0CEa.jpg', '2021-12-06 09:02:52', '2021-12-06 09:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ADMIN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'Wahid Dwi', 'wahid@gmail.com', NULL, '$2y$10$Uyve4xlpd4v/kFvziVx.te5mQkH63VkWbEPPSuHNcU8y/wHIwNiZ2', NULL, '2021-11-17 07:03:04', '2021-11-17 07:03:04', 'ADMIN'),
(2, 'alif', 'alif@gmail.com', NULL, '$2y$10$PFKioFoSeOW1vV2mGLLqIeJmtPLvOt72YjKyWmLLCR8cUTAPAe0vq', NULL, '2021-12-01 06:45:50', '2021-12-01 06:45:50', 'ADMIN'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$eh/e9xFaKnsj1w54hDtdvuMhFJzZXHMEwVke0mwIjcupn6e8sGaIa', NULL, '2021-12-01 06:47:45', '2021-12-01 06:47:45', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
