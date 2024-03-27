-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 05:19 PM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `sifat_pelapor`, `firstName`, `lastName`, `noIdentitas`, `jk`, `alamat`, `email`, `phone`, `jenisPelanggaran`, `firstNameTerlapor`, `lastNameTerlapor`, `divisi`, `departemen`, `waktu`, `lokasi`, `kronologi`, `nominalKerugian`, `dokumen`, `status`, `created_at`, `updated_at`) VALUES
('2403-wbs- 21-012', 'Anonymous', ' ', NULL, NULL, 'Perempuan', 'k                      ', 'k@gamil.com', '45', 'Pelanggaran Benturan Kepentingan', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', '45', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 02:30:02', '2024-03-24 02:30:02'),
('2403-wbs- 21-013', 'Anonymous', ' ', NULL, NULL, 'Perempuan', 'l                      ', 'l@gmail.com', 'l', 'Pelanggaran Kode Etik', 'l l', '', 'l', 'l', 'l', 'l', 'l                      ', 'l', '1.pdf', '', '2024-03-24 06:57:50', '2024-03-24 06:57:50'),
('2403-wbs- 21-014', 'Anonymous', ' ', NULL, NULL, 'Laki-Laki', 'b                      ', 'b@gmail', 'b', 'Pelanggaran Hukum', 'b b', '', 'b', 'b', 'b', 'b', 'b                      ', 'b', '2.pdf', '', '2024-03-24 07:07:53', '2024-03-24 07:07:53'),
('2403-wbs- 21-017', 'Anonymous', ' ', NULL, NULL, 'Laki-Laki', 'l                      ', 'l@gmail.com', 'l', 'Fraud', 'l l', '', 'l', 'l', 'l', 'l', 'l                      ', 'l', '1_20211220_111549_0000.png', '', '2024-03-24 07:26:56', '2024-03-24 07:26:56'),
('2403-wbs- 22-010', 'Terbuka', 'j j', NULL, 'j', 'Laki-Laki', ' j                     ', 'j@gmail.com', '098', 'Pelanggaran Kode Etik', 'j j', '', 'j', 'j', 'j', 'j', 'j                      ', '098', '1_20211220_111549_0000.png', '', NULL, NULL),
('2403-wbs- 22-011', 'Terbuka', 'n n', NULL, 'n', 'Laki-Laki', 'n                      ', 'n@gmail.com', '678', 'Pelanggaran Kode Etik', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', '678', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', NULL, NULL),
('2403-wbs- 22-012', 'Terbuka', 'n n', NULL, 'n', 'Laki-Laki', ' n                     ', 'n@gmail.com', 'n', 'Fraud', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', '1_20211220_111549_0000.png', '', '2024-03-24 06:53:20', '2024-03-24 06:53:20'),
('2403-wbs- 22-013', 'Terbuka', 'h h', NULL, 'h', 'Perempuan', 'h                      ', 'h@gmail.com', 'h', 'Pelanggaran Benturan Kepentingan', 'h h', '', 'h', 'h', 'h', 'h', 'h                      ', 'h', '2_20211220_111549_0001.png', '', '2024-03-24 07:03:34', '2024-03-24 07:03:34'),
('2403-wbs- 22-014', 'Terbuka', 'd d', NULL, 'd', 'Perempuan', 'd                      ', 'dininaylul27@gmail.com', 'd', 'Fraud', 'd d', '', 'd', 'd', 'd', 'd', 'd                      ', 'd', '1_20211220_111549_0000.png', '', '2024-03-24 07:13:06', '2024-03-24 07:13:06'),
('2403-wbs- 22-015', 'Terbuka', 'n n', NULL, 'n', 'Perempuan', 'n                      ', 'n@gmail.com', 'n', 'Pelanggaran Hukum', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:24:25', '2024-03-24 07:24:25'),
('2403-wbs- 22-016', 'Terbuka', 'n n', NULL, 'n', 'Perempuan', 'n                      ', 'n@gmail.com', 'n', 'Pelanggaran Hukum', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:24:46', '2024-03-24 07:24:46'),
('2403-wbs- 22-017', 'Terbuka', 'k k', NULL, 'k', 'Perempuan', 'k                      ', 'k@gamil.com', 'k', 'Fraud', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:29:57', '2024-03-24 07:29:57'),
('2403-wbs- 22-018', 'Terbuka', 'k k', NULL, 'k', 'Perempuan', 'k                      ', 'k@gamil.com', 'k', 'Fraud', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:30:08', '2024-03-24 07:30:08'),
('2403-wbs- 22-019', 'Terbuka', 'k k', NULL, 'k', 'Perempuan', 'k                      ', 'k@gamil.com', 'k', 'Fraud', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:34:30', '2024-03-24 07:34:30'),
('2403-wbs- 22-020', 'Terbuka', 'k k', NULL, 'k', 'Perempuan', 'k                      ', 'k@gamil.com', 'k', 'Fraud', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:34:39', '2024-03-24 07:34:39'),
('2403-wbs- 22-021', 'Terbuka', 'k k', NULL, 'k', 'Perempuan', 'k                      ', 'k@gamil.com', 'k', 'Fraud', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:35:01', '2024-03-24 07:35:01'),
('2403-wbs- 22-022', 'Terbuka', 'm m', NULL, 'm', 'Perempuan', 'm                      ', 'm@gmail.com', 'm', 'Pelanggaran Hukum', 'm m', '', 'm', 'm', 'm', 'm', '                      m', 'm', '1_20211220_111549_0000.png', '', '2024-03-24 07:39:29', '2024-03-24 07:39:29'),
('2403-wbs- 22-023', 'Terbuka', 'D d', NULL, 'd', 'Perempuan', 'd                      ', 'd@gmail.com', 'd', 'Fraud', 'd d', '', 'd', 'd', 'd', 'd', 'd                      ', 'd', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 07:58:07', '2024-03-24 07:58:07'),
('2403-wbs-21-024', 'Anonymous', ' ', NULL, NULL, 'Laki-Laki', ' n                     ', 'n@gmail.com', 'n', 'Pelanggaran Hukum', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 08:12:49', '2024-03-24 08:12:49'),
('2403-wbs-21-025', 'Anonymous', ' ', NULL, NULL, 'Laki-Laki', 'h                      ', 'h@gmail.com', 'h', 'Pelanggaran Hukum', 'h h', '', 'h', 'h', 'h', 'h', 'h                      ', 'h', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 08:37:50', '2024-03-24 08:37:50'),
('2403-wbs-21-028', 'Anonymous', ' ', NULL, NULL, 'Perempuan', 'n                      ', 'n@gmail.com', 'n', 'Fraud', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', '2.pdf', '', '2024-03-24 08:47:11', '2024-03-24 08:47:11'),
('2403-wbs-21-029', 'Anonymous', ' ', NULL, '', 'Perempuan', 'n                      ', 'n@gmail.com', 'n', 'Pelanggaran Hukum', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', '1_20211220_111549_0000.png', '', '2024-03-24 18:29:06', '2024-03-24 18:29:06'),
('2403-wbs-21-030', 'Anonymous', ' ', NULL, NULL, 'Laki-Laki', 'd                      ', 'd@gmail.com', 'd', 'Fraud', 'd d', '', 'd', 'd', 'd', 'd', 'dd                      ', 'd', '2_20211220_111549_0001.png', '', '2024-03-24 18:33:13', '2024-03-24 18:33:13'),
('2403-wbs-22-026', 'Terbuka', 'j j', NULL, 'j', 'Perempuan', 'j                      ', 'j@gmail.com', 'j', 'Pelanggaran Kode Etik', 'j j', '', 'j', 'j', 'j', 'j', 'j                      ', 'j', '01c499d54d9aa1c655caa9053848fcd0.jpg', '', '2024-03-24 08:41:34', '2024-03-24 08:41:34'),
('2403-wbs-22-027', 'Terbuka', 'f f', NULL, 'f', 'Perempuan', 'f                      ', 'f@mail.com', 'f', 'Fraud', 'f f', '', 'f', 'f', 'f', 'f', 'f                      ', 'f', '1_20211220_111549_0000.png', '', '2024-03-24 08:44:45', '2024-03-24 08:44:45'),
('2403-wbs-22-028', 'Terbuka', 'k k', NULL, 'k', 'Perempuan', 'k                      ', 'k@gamil.com', 'k', 'Pelanggaran Hukum', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '2_20211220_111549_0001.png', '', '2024-03-24 08:48:35', '2024-03-24 08:48:35'),
('2403-wbs-22-029', 'Terbuka', 'd d', NULL, 'd', 'Perempuan', 'd                      ', 'd@gmail.com', 'd', 'Fraud', 'd d', '', 'd', 'd', 'd', 'd', 'd                      ', 'd', '1_20211220_111549_0000.png', '', '2024-03-24 18:30:36', '2024-03-24 18:30:36'),
('2403-wbs-22-030', 'Terbuka', 'd d', NULL, 'd', 'Laki-Laki', 'd                      ', 'd@gmail.com', 'd', 'Fraud', 'd d', '', 'd', 'd', 'd', 'd', 'd                      ', 'd', '1711330688_05626da646914720af40.png', '', '2024-03-24 18:38:08', '2024-03-24 18:38:08'),
('2403-wbs-22-031', 'Terbuka', 'dini naylul', NULL, '1234', 'Perempuan', 'Malang                      ', 'dininaylulizzah@gmail.com', '0822', 'Pelanggaran Benturan Kepentingan', 'Dini Naylul', '', 'Development', 'IT', '25 Maret 2024', 'Ruang IT', 'lorem ipsum                      ', 'Rp. 100.000', '1711352366_7fdaf2d49cba1db8bee9.png', 'Sedang Ditinjau', '2024-03-25 00:39:26', '2024-03-25 00:39:26'),
('2403-wbs-22-032', 'Terbuka', 'dini naylul', NULL, '1234', 'Perempuan', 'Malang                      ', 'dininaylulizzah@gmail.com', '0822', 'Pelanggaran Benturan Kepentingan', 'Dini Naylul', '', 'Development', 'IT', '25 Maret 2024', 'Ruang IT', 'lorem ipsum                      ', 'Rp. 100.000', '1711352488_2f3c05f209933d887082.png', 'Dalam proses penyelidikan', '2024-03-25 00:41:28', '2024-03-25 00:57:30');

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
