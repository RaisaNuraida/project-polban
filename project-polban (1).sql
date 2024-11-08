-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2024 at 01:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-polban`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_answer`
--

CREATE TABLE `kuesioner_answer` (
  `kuesioner_id` int NOT NULL,
  `id` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `answers` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(12) NOT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `ordering_count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_field`
--

CREATE TABLE `kuesioner_field` (
  `id` int NOT NULL,
  `id_html` int NOT NULL,
  `kuesioner_id` int NOT NULL,
  `page_id` int NOT NULL,
  `section_id` int NOT NULL,
  `type` varchar(255) NOT NULL,
  `options` varchar(255) DEFAULT NULL,
  `required` int DEFAULT NULL,
  `conditional_logic` text,
  `created_on` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `ordering_count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_kuesioner`
--

CREATE TABLE `kuesioner_kuesioner` (
  `id` int NOT NULL,
  `title` varchar(225) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `entries` int DEFAULT NULL,
  `active_status` int DEFAULT NULL,
  `pages` tinytext,
  `created_on` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `ordering_count` int DEFAULT NULL,
  `conditional_logic` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioner_kuesioner`
--

INSERT INTO `kuesioner_kuesioner` (`id`, `title`, `deskripsi`, `entries`, `active_status`, `pages`, `created_on`, `created_by`, `updated_on`, `updated_by`, `ordering_count`, `conditional_logic`) VALUES
(6, 'asdasf', 'hshdjsahdjhdjhwasduwdguwduhsjadhjs', NULL, NULL, 'sdasd', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'aya percobaan filter', 'percobaan', 0, NULL, 'hjdshjh', NULL, NULL, NULL, NULL, NULL, 'if u\'ve been waiting for falling in love, babe u dont have to wait on me hehehe i lov eu by the way. do u love me back bb? :( pls say yesssssss PLZZZZZZ');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_kuesioner_section`
--

CREATE TABLE `kuesioner_kuesioner_section` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `kuesioner_id` int NOT NULL,
  `page_id` int NOT NULL,
  `section_options` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `fields` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `conditional_logic` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_on` datetime DEFAULT NULL,
  `created_by` int UNSIGNED DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int UNSIGNED DEFAULT NULL,
  `ordering_count` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_page`
--

CREATE TABLE `kuesioner_page` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `kuesioner_id` int NOT NULL,
  `deskripsi` text,
  `sections` text,
  `conditional_logic` text,
  `created_on` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `ordering_count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `group` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `display_name` varchar(225) DEFAULT NULL,
  `academic_nim` int DEFAULT NULL,
  `academic_faculty` varchar(225) DEFAULT NULL,
  `academic_program` varchar(225) DEFAULT NULL,
  `academic_year` varchar(225) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(225) DEFAULT NULL,
  `state_code` varchar(225) DEFAULT NULL,
  `zip_code` varchar(225) DEFAULT NULL,
  `academic_graduate_year` varchar(225) DEFAULT NULL,
  `jenis_kelamin` varchar(225) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group`, `created_at`, `updated_at`, `display_name`, `academic_nim`, `academic_faculty`, `academic_program`, `academic_year`, `street`, `city`, `state_code`, `zip_code`, `academic_graduate_year`, `jenis_kelamin`, `no_telp`, `nik`, `npwp`) VALUES
(34, 'tanaka23', 'tanakaayaa', 'tanaka@gmail.com', 'alumni', '2024-10-14 08:45:47', '2024-10-14 08:45:47', 'Tanaka Aya', 2147483647, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2024', 'wanita', '82214042764', '82192', '10291092'),
(53, 'nikadek', 'cahyati', 'adek@gmail.com', 'alumni', '2024-10-28 13:06:27', '2024-10-07 08:44:04', 'adek nikadek', 62565635, 'bahasa inggris', 'D-3 bahasa inggris', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2024', 'wanita', '', '', ''),
(54, 'raisa', 'nuraida', 'rai@gmail.com', 'alumni', '2024-10-28 13:06:27', '2024-10-07 08:44:04', 'raisa', 7647536, 'teknik elektro', 'D-3 Teknik elektronika', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2028', 'wanita', '', '', ''),
(55, 'tanaka23', 'tanakaayaaaaaaa\r\n', 'tanaka@gmail.com', 'alumni', '2024-10-14 08:45:47', '2024-10-14 08:45:47', 'Tanaka ', 219273092, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2028', 'wanita', '82214042764', '82192', '10291092'),
(56, 'megajelek', 'megamega', 'mega@gmail.com', 'administrator', '2024-11-06 10:02:28', '2024-11-06 10:02:28', 'megarahma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `welcome_message`
--

CREATE TABLE `welcome_message` (
  `id` int NOT NULL,
  `message` varchar(15000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_message`
--

INSERT INTO `welcome_message` (`id`, `message`) VALUES
(1, '<p>hskjhdskjadksahdoiys</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuesioner_answer`
--
ALTER TABLE `kuesioner_answer`
  ADD PRIMARY KEY (`kuesioner_id`,`id`);

--
-- Indexes for table `kuesioner_field`
--
ALTER TABLE `kuesioner_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioner_kuesioner`
--
ALTER TABLE `kuesioner_kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuesioner_kuesioner_section`
--
ALTER TABLE `kuesioner_kuesioner_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kuesioner_section_index` (`created_by`);

--
-- Indexes for table `kuesioner_page`
--
ALTER TABLE `kuesioner_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_message`
--
ALTER TABLE `welcome_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuesioner_field`
--
ALTER TABLE `kuesioner_field`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner_kuesioner`
--
ALTER TABLE `kuesioner_kuesioner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kuesioner_kuesioner_section`
--
ALTER TABLE `kuesioner_kuesioner_section`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner_page`
--
ALTER TABLE `kuesioner_page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `welcome_message`
--
ALTER TABLE `welcome_message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
