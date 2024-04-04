-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 03:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wbsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` varchar(20) NOT NULL,
  `sifat_pelapor` varchar(20) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `noIdentitas` varchar(20) DEFAULT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `jenisPelanggaran` varchar(500) NOT NULL,
  `firstNameTerlapor` varchar(100) NOT NULL,
  `lastNameTerlapor` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `kronologi` text NOT NULL,
  `nominalKerugian` varchar(20) NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `sifat_pelapor`, `firstName`, `lastName`, `noIdentitas`, `jk`, `alamat`, `email`, `phone`, `jenisPelanggaran`, `firstNameTerlapor`, `lastNameTerlapor`, `divisi`, `departemen`, `waktu`, `lokasi`, `kronologi`, `nominalKerugian`, `dokumen`, `status`, `catatan`, `created_at`, `updated_at`) VALUES
('2404-WBS-11-002', 'Anonymous', ' ', NULL, NULL, 'Laki-Laki', 'm                      ', 'm@gmail.com', 'm', 'Pelanggaran Benturan Kepentingan', 'm m', '', 'm', 'm', 'm', 'm', 'm                      ', 'm', '1712193467_176ea49c816cb7670d0e.pdf, 1712193467_d49c7a10bb5513febaca.pdf', 'Sedang Ditinjau', '', '2024-04-03 18:17:47', '2024-04-03 18:17:47'),
('2404-WBS-11-003', 'Anonymous', ' ', NULL, '', 'Laki-Laki', 'm                      ', 'm@gmail.com', 'm', 'Pelanggaran Benturan Kepentingan', 'm m', '', 'm', 'm', 'm', 'm', 'm                      ', 'm', '1712193489_7daef6b9c2e1f895f2b8.pdf, 1712193489_e8444d1d6dd3b32993c3.pdf', 'Sedang Ditinjau', '', '2024-04-03 18:18:09', '2024-04-03 18:18:09'),
('2404-WBS-11-004', 'Anonymous', ' ', NULL, '', 'Laki-Laki', 'm                      ', 'm@gmail.com', 'm', 'Pelanggaran Benturan Kepentingan', 'm m', '', 'm', 'm', 'm', 'm', 'm                      ', 'm', '1712193529_7633b23ddaebdc5c7226.pdf, 1712193529_1ce553acebeb7d71e069.pdf', 'Sedang ditinjau', '', '2024-04-03 18:18:49', '2024-04-03 18:27:48'),
('2404-wbs-21-002', 'Anonymous', ' ', NULL, NULL, 'Perempuan', ' b                     ', 'b@gmail', 'b', 'Pelanggaran Kode Etik', 'b b', '', 'b', 'b', 'b', 'b', 'b                      ', 'b', '1712032296_f6ce8fb0e6d69e8930a9.pdf, 1712032296_93f8f65282f5f05cc339.pdf', 'Sedang Ditinjau', NULL, '2024-04-01 21:31:36', '2024-04-01 21:31:36'),
('2404-wbs-22-001', 'Terbuka', 'n n', NULL, 'n', 'Perempuan', 'n                      ', 'n@gmail.com', 'n', 'Pelanggaran Kode Etik', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', '1711941444_80b106f04af0095249bc.pdf', 'Sedang Ditinjau', NULL, '2024-03-31 20:17:24', '2024-03-31 20:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Admin WBS Gacoan', 'admin@gacoan.co.id', '$2y$10$eNlhTBnp36/0WTLG33DBXet7M5Yvf/SFgiffwnFXXc1lcZur/bUIG', '2024-03-21 01:55:36', '2024-03-21 01:55:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
