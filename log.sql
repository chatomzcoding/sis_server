-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2022 at 04:46 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produk_sis_server`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `userid`, `waktu`, `created_at`, `updated_at`) VALUES
(1, '101', '2022-06-16 11:46:45', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(2, '1', '2022-07-29 08:54:48', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(3, '1', '2022-08-16 08:38:42', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(4, '1', '2022-08-16 11:16:47', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(5, '1', '2022-08-16 12:21:35', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(6, '1', '2022-08-16 12:26:54', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(7, '40', '2022-08-16 12:45:12', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(8, '4', '2022-08-22 14:23:57', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(9, '40', '2022-08-22 14:44:56', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(10, '40', '2022-08-22 14:49:11', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(11, '1', '2022-09-11 21:03:10', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(12, '1', '2022-09-11 21:26:13', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(13, '1', '2022-09-12 10:06:12', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(14, '98', '2022-09-12 10:09:26', '2022-09-12 04:44:12', '2022-09-12 04:44:12'),
(15, '1', '2022-09-12 11:25:33', '2022-09-12 04:44:12', '2022-09-12 04:44:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
