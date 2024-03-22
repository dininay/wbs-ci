-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 02:58 AM
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
  `id` int(20) NOT NULL,
  `sifat_pelapor` varchar(20) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `noIdentitas` varchar(20) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `sifat_pelapor`, `firstName`, `lastName`, `noIdentitas`, `jk`, `alamat`, `email`, `phone`, `jenisPelanggaran`, `firstNameTerlapor`, `lastNameTerlapor`, `divisi`, `departemen`, `waktu`, `lokasi`, `kronologi`, `nominalKerugian`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, '1', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n', NULL, NULL),
(2, '1', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n', NULL, NULL),
(3, '1', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n', NULL, NULL),
(4, '1', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n', NULL, NULL),
(5, '1', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n', NULL, NULL),
(6, '0', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', '1710925549_48d947186a3ea0da14ec.png', '2024-03-20 02:05:49', '2024-03-20 02:05:49'),
(7, '0', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', '1710925596_f76e79a4527474520f2d.png', '2024-03-20 02:06:36', '2024-03-20 02:06:36'),
(8, '0', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n n', '', 'n', 'n', 'n', 'n', 'n', 'n', '1710925612_682f02dde3f6617eff97.png', '2024-03-20 02:06:52', '2024-03-20 02:06:52'),
(9, 'on', 'n n', '', 'n', 'on', 'n       ', 'dininaylulizzah@gmail.com', 'n', 'Fraud', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', 'n', '2024-03-20 19:08:19', '2024-03-20 19:08:19'),
(10, 'on', 'n n', '', 'n', 'on', 'n       ', 'dininaylulizzah@gmail.com', 'n', 'Fraud', 'n n', '', 'n', 'n', 'n', 'n', 'n                      ', 'n', 'n', '2024-03-20 19:09:19', '2024-03-20 19:09:19'),
(11, 'on', 'k k', '', 'k', 'on', 'k            ', 'admin@mail.com', 'k', 'Pelanggaran Hukum', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '1711028192_fece167969959335beef.png', '2024-03-21 06:36:32', '2024-03-21 06:36:32'),
(12, 'on', 'k k', '', 'k', 'on', 'k            ', 'admin@mail.com', 'k', 'Pelanggaran Hukum', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '1711028245_12d902cd7be4cccf189b.png', '2024-03-21 06:37:25', '2024-03-21 06:37:25'),
(13, 'on', 'k k', '', 'k', 'on', 'k            ', 'admin@mail.com', 'k', 'Pelanggaran Hukum', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '1711028260_643a8f93878698ab3165.png', '2024-03-21 06:37:40', '2024-03-21 06:37:40'),
(14, 'on', 'k k', '', 'k', 'on', 'k            ', 'admin@mail.com', 'k', 'Pelanggaran Hukum', 'k k', '', 'k', 'k', 'k', 'k', 'k                      ', 'k', '1711028266_6925c57df29389c5aad5.png', '2024-03-21 06:37:46', '2024-03-21 06:37:46'),
(15, 'on', ' ', '', '', 'on', 'l', 'admin@mail.com', 'l', 'Pelanggaran Kode Etik', 'l l', '', 'l', 'l', 'l', 'l', 'l                      ', 'l', '1711029128_907eadfe71b2ebcbf807.jpg', '2024-03-21 06:52:08', '2024-03-21 06:52:08'),
(16, 'on', ' ', '', '', 'on', 'l', 'admin@mail.com', 'l', 'Pelanggaran Kode Etik', 'l l', '', 'l', 'l', 'l', 'l', 'l                      ', 'l', '1711029148_e6fa1166ac261a83886c.jpg', '2024-03-21 06:52:28', '2024-03-21 06:52:28'),
(17, 'on', ' ', '', '', 'on', 'l', 'admin@mail.com', 'l', 'Pelanggaran Kode Etik', 'l l', '', 'l', 'l', 'l', 'l', 'l                      ', 'l', '1711029160_608935a65c53ed88d4b9.jpg', '2024-03-21 06:52:40', '2024-03-21 06:52:40'),
(18, 'on', ' ', '', '', 'on', 'l', 'admin@mail.com', 'l', 'Pelanggaran Kode Etik', 'l l', '', 'l', 'l', 'l', 'l', 'l                      ', 'l', '1711029172_3c56dd6aa2328225205d.jpg', '2024-03-21 06:52:52', '2024-03-21 06:52:52'),
(19, 'on', 'd d', '', 'd', 'Perempuan', 'd', 'dininaylul27@gmail.com', 'd', 'Fraud', 'd d', '', 'd', 'd', 'd', 'd', 'd                      ', 'd', '1711029719_1c02bae1e091bb762795.png', '2024-03-21 07:01:59', '2024-03-21 07:01:59'),
(20, 'on', ' ', '', '', 'Laki-Laki', 'a', 'aa@gmail.com', 'a', 'Fraud', 'a a', '', 'a', 'a', 'a', 'a', 'a                      ', 'a', '1711030168_824011b43907d9ecc1d4.png', '2024-03-21 07:09:28', '2024-03-21 07:09:28'),
(21, 'on', ' ', '', '', 'Laki-Laki', 'b                      ', 'b@gmail', 'b', 'Pelanggaran Benturan Kepentingan', 'b b', '', 'b', 'b', 'b', 'b', 'b                      ', 'b', '1711030432_48c9f7bf54545852d87a.jpg', '2024-03-21 07:13:52', '2024-03-21 07:13:52');

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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
