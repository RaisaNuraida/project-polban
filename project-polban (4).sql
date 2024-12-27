-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2024 at 07:46 AM
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
-- Table structure for table `koordinator_surveyor`
--

CREATE TABLE `koordinator_surveyor` (
  `id` int NOT NULL,
  `display_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `academic_faculty` varchar(255) DEFAULT NULL,
  `tahun` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koordinator_surveyor`
--

INSERT INTO `koordinator_surveyor` (`id`, `display_name`, `email`, `academic_faculty`, `tahun`) VALUES
(1, 'itingg', 'itingpacarradit@gmail.com', 'Teknik Sipil', 2024),
(2, 'tanakaaya', 'aya@gmail.com', 'Teknik Sipil', 2024),
(3, 'Megaa', 'megarahma@gmail.com', 'Teknik Refrigasi dan Tata Udara', 2023),
(4, 'Nikadek', 'nikadek@gmail.com', 'Teknik Refrigasi dan Tata Udara', 2023),
(5, 'Raisa', 'nuraida@gmail.com', 'Teknik Komputer dan Informatika', 2022),
(6, 'Radit', 'raditya@gmail.com', 'Teknik Kimia', 2022),
(7, 'Fathur', 'rahman@gmail.com', 'Teknik Kimia', 2022),
(8, 'dian', 'syifa@gmail.com', 'Teknik Komputer dan Informatika', 2022);

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
(60, 'TRACER STUDY POLITEKNIK NEGERI BANDUNG TAHUN 2026 untuk lulusan 2024', 'Kuesioner ini ditujukan untuk semua mahasiswa yang lulus di tahun 2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"Option \":\"academic_faculty\",\"is not \":\"is\",\"value \":\"Teknik Sipil\"}\n'),
(61, 'TRACER STUDY POLITEKNIK NEGERI BANDUNG TAHUN 2009 untuk lulusan 2011', 'Kuesioner ini ditujukan untuk semua mahasiswa yang lulus di tahun 2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"Option \":\"academic_nim\",\"is not \":null,\"value \":\"\"}'),
(62, 'TRACER STUDY POLITEKNIK NEGERI BANDUNG TAHUN 2009 untuk lulusan 2011', 'Kuesioner ini ditujukan untuk semua mahasiswa yang lulus di tahun 2010909', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"Option \":\"academic_faculty\",\"is not \":null,\"value \":\"Teknik Sipil\"}'),
(63, 'TRACER STUDY POLITEKNIK NEGERI BANDUNG TAHUN 2009 untuk lulusan 2011', 'Kuesioner ini ditujukan untuk semua mahasiswa yang lulus di tahun 2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"Option \":\"jenis_kelamin\",\"is not \":null,\"value \":\"\"}'),
(64, 'sdjhsajdhsad', 'mshdjsahjdd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"Option \":\"jenis_kelamin\",\"is not \":\"is\",\"value \":\"pria\"}');

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

--
-- Dumping data for table `kuesioner_kuesioner_section`
--

INSERT INTO `kuesioner_kuesioner_section` (`id`, `title`, `deskripsi`, `kuesioner_id`, `page_id`, `section_options`, `fields`, `conditional_logic`, `created_on`, `created_by`, `updated_on`, `updated_by`, `ordering_count`) VALUES
(1, 'sopiah', '', 1, 1, NULL, NULL, NULL, '2024-12-24 09:17:26', NULL, '2024-12-24 09:17:26', NULL, NULL),
(2, 'polban', '', 1, 1, NULL, NULL, NULL, '2024-12-24 09:36:53', NULL, '2024-12-24 09:36:53', NULL, NULL),
(3, 'sopiah', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:24:49', NULL, '2024-12-27 07:24:49', NULL, NULL),
(4, 'polban', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:24:49', NULL, '2024-12-27 07:24:49', NULL, NULL),
(5, 'wwwwwwwwwwwwwwwwwww', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:24:49', NULL, '2024-12-27 07:24:49', NULL, NULL),
(6, 'sopiah', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:28:42', NULL, '2024-12-27 07:28:42', NULL, NULL),
(7, 'polban', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:28:42', NULL, '2024-12-27 07:28:42', NULL, NULL),
(8, 'sopiah', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:28:42', NULL, '2024-12-27 07:28:42', NULL, NULL),
(9, 'polban', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:28:42', NULL, '2024-12-27 07:28:42', NULL, NULL),
(10, 'wwwwwwwwwwwwwwwwwww', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:28:42', NULL, '2024-12-27 07:28:42', NULL, NULL),
(11, 'sopiah', '', 1, 1, NULL, NULL, NULL, '2024-12-27 07:28:42', NULL, '2024-12-27 07:28:42', NULL, NULL);

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

--
-- Dumping data for table `kuesioner_page`
--

INSERT INTO `kuesioner_page` (`id`, `title`, `kuesioner_id`, `deskripsi`, `sections`, `conditional_logic`, `created_on`, `created_by`, `updated_on`, `updated_by`, `ordering_count`) VALUES
(15, 'TRACER STUDY POLITEKNIK NEGERI BANDUNG TAHUN 2026 untuk lulusan 2024', 0, 'Kuesioner ini ditujukan untuk semua mahasiswa yang lulus di tahun 2024', NULL, '{\"Option \":\"academic_faculty\",\"is not \":null,\"value \":\"Teknik Kimia\"}', NULL, NULL, NULL, NULL, NULL),
(16, 'TRACER STUDY POLITEKNIK NEGERI BANDUNG TAHUN 2026 untuk lulusan 2024', 0, 'Kuesioner ini ditujukan untuk semua mahasiswa yang lulus di tahun 2024', NULL, '{\"Option \":\"academic_faculty\",\"is not \":null,\"value \":\"Teknik Mesin\"}', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int NOT NULL,
  `academic_faculty` varchar(255) NOT NULL,
  `academic_program` varchar(255) NOT NULL,
  `academic_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `academic_faculty`, `academic_program`, `academic_group`) VALUES
(49, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', ''),
(50, 'Teknik Sipil', 'D-3 Teknik Konstruksi Gedung', ''),
(51, 'Teknik Sipil', 'D-4 Teknik Perancangan Jalan dan Jembatan', ''),
(52, 'Teknik Sipil', 'D-4 Teknik Perawatan dan Perbaikan Gedung', ''),
(53, 'Teknik Sipil', 'S-2 Rekayasa Infrastruktur', ''),
(54, 'Teknik Mesin', 'D-3 Teknik Mesin', ''),
(55, 'Teknik Mesin', 'D-3 Teknik Aeronautika', ''),
(56, 'Teknik Mesin', 'D-4 Teknik perancangan dan Konstruksi Mesin', ''),
(57, 'Teknik Mesin', 'D-4 Proses Manufaktur', ''),
(58, 'Teknik Refrigasi dan Tata Udara', 'D-3 Teknik Pendingin dan Tata Udara', ''),
(59, 'Teknik Refrigasi dan Tata Udara', 'D-4 Teknik Pendingin dan Tata Udara', ''),
(60, 'Teknik Konversi Energi', 'D-3 Teknik Konversi Energi', ''),
(61, 'Teknik Konversi Energi', 'D-4 Teknologi Pembangkit Tenaga Listrik', ''),
(62, 'Teknik Konversi Energi', 'D-4 Teknik Konversi Energi', ''),
(63, 'Teknik Elektro', 'D-3 Teknik Elektronika', ''),
(64, 'Teknik Elektro', 'D-3 Teknik Listrik', ''),
(65, 'Teknik Elektro', 'D-3 Teknik Telekomunikasi', ''),
(66, 'Teknik Elektro', 'D-4 Teknik Elektronika', ''),
(67, 'Teknik Elektro', 'D-4 Teknik Telekomunikasi', ''),
(68, 'Teknik Elektro', 'D-4 Teknik Otomasi Industri', ''),
(69, 'Teknik Kimia', 'D-3 Teknik Kimia', ''),
(70, 'Teknik Kimia', 'D-3 Analisis Kimia', ''),
(71, 'Teknik Kimia', 'D-4 Teknik Kimia Produksi Bersih', ''),
(72, 'Teknik Komputer dan Informatika', 'D-3 Teknik Informatika', ''),
(73, 'Teknik Komputer dan Informatika', 'D-4 Teknik Informatika', ''),
(75, 'Akuntansi', 'D-3 Keuangan dan Perbankan', ''),
(76, 'Akuntansi', 'D-4 Akuntansi Manajemen Pemerintahan', ''),
(77, 'Akuntansi', 'D-4 Akuntansi', ''),
(78, 'Akuntansi', 'D-4 Keuangan Syariah', ''),
(79, 'Akuntansi', 'S-2 Keuangan dan Perbankan Syariah', ''),
(89, 'Bahasa Inggris', 'D-3 Bahasa Inggris', ''),
(90, 'matem', 'mtk', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `slogan`) VALUES
(1, 'Tracer ', 'Assuring Your Future');

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
(34, 'tanaka23', 'tanakaayaa', 'tanaka@gmail.comdhh', 'alumni', '2024-10-14 08:45:47', '2024-12-19 07:26:46', 'Tanaka Aya', 2147483647, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', '2020', 'gg bidara', 'subang', 'jawa barat', NULL, '2015', 'wanita', '82214042764', '82192', '10291092'),
(54, 'raisa', 'nuraida', 'rai@gmail.com', 'alumni', '2024-10-28 13:06:27', '2024-11-13 03:04:18', 'raisa', 7647536, 'Teknik Elektro', 'D-3 Teknik elektronika', '2012', 'gg bidara', 'subang', 'jawa barat', NULL, '2016', 'wanita', '', '', ''),
(55, 'tanaka23', 'tanakaayaaaaaaa\r\n', 'tanaka@gmail.com', 'alumni', '2024-10-14 08:45:47', '2024-10-14 08:45:47', 'Tanaka ', 219273092, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2028', 'wanita', '82214042764', '82192', '10291092'),
(56, 'megajelek', 'megamegaa', 'mega@gmail.com', 'administrator', '2024-11-06 10:02:28', '2024-11-13 01:54:06', 'megarahma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'rai', 'asasas', 'rai@gmail.com', 'administrator', '2024-11-06 10:02:28', '2024-11-13 01:54:06', 'megarahma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'nchristensen', '^M_m2FSlv^', 'karen10@kirk.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '1', 0, '2013', '00776 Shaffer Mountains Suite 771', 'East Paul', '2024-12-08 01:41:17', '2022-08-05 08:44:14', 'Marie Miller', NULL, 'UT', '1761638', 'teknik', '71755', '2024'),
(59, 'jessica85', '(qqFEIbg5Q', 'briannorman@wright.net', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '2', 0, '2012', '444 Andre Drive Apt. 319', 'Sarafort', '2022-12-26 15:40:17', '2020-10-05 01:57:16', 'Erica Hill', NULL, 'AK', '5770399', 'bisnis', '62432', '2020'),
(60, 'carrieramirez', '$7R+vuyI95', 'jeffrey64@bailey.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '3', 0, '2013', '7082 Nicholas Square', 'New Jeremy', '2021-01-19 05:49:58', '2020-10-28 11:04:41', 'Luis Holmes', NULL, 'KY', '9259347', 'bisnis', '48741', '2023'),
(61, 'jonesrebecca', '#Me&XW0s8x', 'stephenstyler@carter-george.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '4', 0, '2020', '259 Joshua Isle', 'Khantown', '2022-02-05 12:10:17', '2023-04-15 13:17:18', 'Justin Valdez', NULL, 'WY', '3295444', 'bisnis', '79207', '2017'),
(62, 'kevinorr', '@Z2rO&@eA!', 'hammondmary@yahoo.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '5', 0, '2020', '593 Miller Causeway Apt. 315', 'Bushberg', '2022-05-06 17:17:20', '2023-08-04 17:56:59', 'Tammie Townsend', NULL, 'IA', '9401787', 'bisnis', '77263', '2016'),
(63, 'jenniferbooth', '*v7RIg8nQX', 'robynball@jackson.org', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '6', 0, '2016', '505 Traci Lake Apt. 323', 'North Lindamouth', '2021-07-15 18:26:53', '2024-02-22 05:59:40', 'Pamela Adams', NULL, 'MO', '1677874', 'bisnis', '42952', '2020'),
(64, 'robertwilliams', 'g(Az0DsoJ3', 'toddnelson@hotmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '7', 0, '2024', '7745 Hill Drive Apt. 774', 'West Christina', '2021-05-27 12:56:01', '2020-04-17 21:06:19', 'Bobby Shepard', NULL, 'DE', '7131873', 'bisnis', '79169', '2016'),
(65, 'dkane', 'iE%9CeRfYF', 'kramercourtney@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '8', 0, '2019', '4227 Mccullough Mountains Suite 996', 'North Nathan', '2023-12-15 14:49:11', '2023-08-18 01:43:37', 'William Williamson', NULL, 'MI', '8974915', 'teknik', '74625', '2017'),
(66, 'justinwilliams', 'r*ns8SIt3!', 'johnsonkatrina@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '9', 0, '2017', '9006 Samantha Tunnel Suite 959', 'South Norma', '2021-08-07 10:06:18', '2020-03-15 15:47:19', 'Brandy Hall', NULL, 'ID', '1849579', 'bisnis', '34022', '2019'),
(67, 'zswanson', '^a4JG#Wo_Y', 'michaelmiller@ramirez.biz', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '10', 0, '2020', '090 Kent Villages Apt. 804', 'Smithmouth', '2022-04-29 16:20:18', '2021-10-19 20:12:16', 'Patrick Wright', NULL, 'NH', '6887649', 'teknik', '52555', '2018'),
(68, 'stacy33', 'd(+Nx5F#Qe', 'caitlinmoreno@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '11', 0, '2017', '8656 Corey Throughway Apt. 881', 'Clementston', '2023-03-27 17:46:31', '2021-05-01 09:44:39', 'Thomas Green', NULL, 'NV', '2501388', 'akuntansi', '88637', '2020'),
(69, 'brittanyhenderson', 'Yofk@)kn)4', 'kmanning@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '12', 0, '2017', '870 Toni Shores Apt. 517', 'South Davidside', '2024-02-28 07:30:11', '2020-10-20 07:55:42', 'Megan Boyer', NULL, 'OR', '6099174', 'bisnis', '98175', '2021'),
(70, 'maryking', '0)H0HN1gE4', 'thomasalexander@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '13', 0, '2010', '8501 Cooper Streets', 'Lake Shannon', '2022-08-26 16:07:55', '2021-05-19 02:59:03', 'Jeremy Johnson', NULL, 'OR', '9295758', 'bisnis', '14490', '2018'),
(71, 'wesley06', 'w)Df19Vy+h', 'frankalyssa@reynolds.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '14', 0, '2023', '72048 Keith Plaza Apt. 302', 'Briannaberg', '2022-05-29 05:20:07', '2023-03-10 00:03:01', 'Kristen Sullivan', NULL, 'IN', '4111680', 'sipil', '61793', '2017'),
(72, 'john67', '%n*urcBa8^', 'ichandler@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '15', 0, '2024', '6772 Tyler Springs Suite 234', 'Pamelamouth', '2022-08-30 11:13:23', '2023-03-25 01:08:02', 'Michael Braun', NULL, 'OK', '9504959', 'akuntansi', '55068', '2021'),
(73, 'nortonkimberly', '&I&&L6PpHF', 'alexis74@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '16', 0, '2011', '39091 Christina Mountain Suite 763', 'Andersonport', '2022-01-23 02:35:59', '2023-12-14 06:39:19', 'Adam Lara', NULL, 'SC', '9353234', 'sipil', '88401', '2021'),
(74, 'feliciaarellano', '*zlnvKDuP1', 'rogersdenise@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '17', 0, '2018', '109 Johnson Track Apt. 159', 'Nelsonport', '2024-09-11 13:36:02', '2024-12-04 13:31:06', 'Tiffany Jones', NULL, 'VT', '9796382', 'akuntansi', '69951', '2016'),
(75, 'jenningsholly', 'yU&0EJXiCy', 'jamesoneill@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '18', 0, '2023', '02249 Roman Skyway', 'East Johnathan', '2021-03-30 22:06:47', '2023-01-09 05:08:49', 'Ashley Campbell', NULL, 'RI', '9424873', 'bisnis', '51492', '2016'),
(76, 'hebertjames', '0PZ9VweB_O', 'brenda14@rowe-scott.net', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '19', 0, '2023', '37555 Vincent Vista Apt. 236', 'Elizabethburgh', '2023-11-06 04:59:08', '2024-04-30 22:25:05', 'Morgan David', NULL, 'MA', '4566824', 'bisnis', '35443', '2019'),
(77, 'craigsantos', 'KcRQY@t6&8', 'williamsdavid@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '20', 0, '2018', '552 Hurley Plaza', 'East Steve', '2023-10-20 22:30:41', '2020-10-19 22:13:00', 'Courtney Lopez', NULL, 'WA', '1345872', 'bisnis', '10943', '2023'),
(78, 'alan85', '%*e7Kg1Pl!', 'arhodes@hotmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '21', 0, '2012', '260 Neal Flat Apt. 129', 'Johnchester', '2020-04-20 09:57:59', '2024-04-14 21:31:57', 'David Hale', NULL, 'AK', '3216375', 'bisnis', '96795', '2023'),
(79, 'beardteresa', '(v7MvsT7q0', 'moorekara@dudley.org', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '22', 0, '2017', '45858 Renee Gardens', 'East Juliemouth', '2023-06-02 06:50:46', '2023-04-02 21:19:25', 'Thomas Miller', NULL, 'FL', '3102132', 'sipil', '25199', '2024'),
(80, 'hjohnson', 'jq35KR7cf)', 'sarahburns@hotmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '23', 0, '2015', '875 Michael Summit', 'Jeremyfort', '2023-02-05 20:01:57', '2020-05-15 21:45:02', 'Joseph Spencer', NULL, 'MS', '8503087', 'bisnis', '27056', '2020'),
(81, 'fbrown', 'l8_^H2SjS!', 'velezkristin@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '24', 0, '2015', '54391 Matthew Pass', 'East Daniel', '2021-09-22 18:01:26', '2020-11-08 07:26:12', 'Lisa Washington', NULL, 'MI', '7945296', 'akuntansi', '57406', '2018'),
(82, 'wendygreen', '(l5t_RmF_*', 'jeffrey14@price.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '25', 0, '2023', '95936 James Dam Apt. 501', 'Cookstad', '2023-10-01 08:22:37', '2021-01-06 15:08:32', 'Kelly Summers', NULL, 'VA', '8348611', 'bisnis', '58345', '2015'),
(83, 'shannoncarrillo', 'N861SrJi*Y', 'fergusonpeter@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '26', 0, '2020', '80520 Parker Pines Apt. 619', 'Danielfort', '2021-01-19 02:55:20', '2024-11-30 22:33:36', 'Mark Robinson', NULL, 'MD', '9217936', 'teknik', '86588', '2022'),
(84, 'jessica99', 'Yh_7G7!hS*', 'tony56@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '27', 0, '2015', '6405 Smith Square', 'Jacksonshire', '2020-08-11 15:28:28', '2021-11-28 04:22:57', 'Ryan Long', NULL, 'WV', '6191278', 'sipil', '86920', '2024'),
(85, 'julie85', '*o3V9$df!9', 'uruiz@flores.net', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '28', 0, '2021', '607 Robinson Dale Suite 319', 'Randyburgh', '2023-01-02 20:15:05', '2020-04-09 09:49:12', 'James Parker', NULL, 'TN', '7382086', 'akuntansi', '31216', '2016'),
(86, 'anthony78', '*@jl0UiDUR', 'brandon69@allen.biz', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '29', 0, '2012', '6174 Potter Island Suite 410', 'Morenoton', '2020-09-30 07:39:47', '2021-07-06 14:21:44', 'Tyler Perry', NULL, 'ID', '4300534', 'bisnis', '20810', '2016'),
(87, 'msullivan', '0J0(g5Dp&Q', 'danielenglish@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '30', 0, '2019', '717 Ashley Ways Suite 714', 'Juliemouth', '2020-03-13 16:51:01', '2022-11-08 11:09:44', 'Stephen Parker', NULL, 'GA', '6896193', 'teknik', '30395', '2016'),
(88, 'medinabenjamin', '!t2l8KEvq7', 'awilliams@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '31', 0, '2021', '6908 Kevin Ridges Suite 607', 'New Brooke', '2023-02-10 08:23:13', '2021-05-23 13:47:19', 'Mr. Charles Walker', NULL, 'AR', '5444997', 'bisnis', '75130', '2015'),
(89, 'cordovajessica', ')3)LRbGjN6', 'clopez@kirby.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '32', 0, '2020', '5101 Christina Landing Apt. 387', 'Ortegaport', '2020-05-11 14:41:29', '2023-07-09 18:01:42', 'Linda Rodriguez', NULL, 'RI', '6049134', 'bisnis', '43245', '2022'),
(90, 'rogerslisa', ')4BducsK_x', 'shanesalazar@jones-shields.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '33', 0, '2013', '7272 Sabrina Rapids', 'Port Lisashire', '2021-08-20 12:49:59', '2023-12-29 08:32:37', 'Billy Foster', NULL, 'KS', '6816032', 'bisnis', '98117', '2019'),
(91, 'jose94', 'M7Udw1r_)e', 'odickson@ross.info', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '34', 0, '2013', '411 Clayton Harbors Apt. 895', 'Lake Mikemouth', '2022-03-27 13:03:14', '2024-11-11 16:59:12', 'Robert Moody', NULL, 'WV', '5920562', 'akuntansi', '90191', '2023'),
(92, 'james31', '(33*HyjE4Q', 'lisa44@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '35', 0, '2012', '358 Michelle Place', 'Richardberg', '2021-04-13 15:47:39', '2021-09-08 19:26:20', 'Dylan Gomez', NULL, 'AL', '6558084', 'bisnis', '52901', '2018'),
(93, 'ronald81', '&9W3gZqdbM', 'daniel62@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '36', 0, '2013', '630 Thompson Inlet Apt. 910', 'West Kimberly', '2023-02-11 12:41:24', '2022-12-29 07:30:38', 'Charles Evans', NULL, 'ND', '8760324', 'bisnis', '01761', '2016'),
(94, 'adam29', '!ww8g&EqT5', 'morristara@walker.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '37', 0, '2020', '97071 Jenkins Cape Suite 997', 'North Michelleville', '2022-01-04 11:06:51', '2023-01-28 14:14:53', 'Michelle Snow', NULL, 'CT', '7317922', 'sipil', '43139', '2024'),
(95, 'jyoung', '^5RyP+bZ9(', 'brett47@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '38', 0, '2017', '5777 Timothy Avenue Suite 737', 'North Catherineberg', '2020-07-04 09:51:42', '2021-05-10 04:37:27', 'Rhonda Keller', NULL, 'MI', '8865664', 'bisnis', '21783', '2017'),
(96, 'udaugherty', '#50OItT^tT', 'xlopez@thompson-martinez.net', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '39', 0, '2017', '151 Gary Viaduct Apt. 558', 'Lake Jenniferton', '2023-07-12 13:20:34', '2024-05-01 19:37:27', 'James Sutton', NULL, 'MA', '9795172', 'bisnis', '50406', '2024'),
(97, 'sergiorobertson', '@$Wf3rox7W', 'shafferwilliam@ramos-johnson.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '40', 0, '2020', '77673 Bailey Row Apt. 136', 'Alexmouth', '2020-09-28 06:20:40', '2021-11-25 03:56:40', 'Chase Alexander', NULL, 'PA', '1154364', 'bisnis', '18085', '2023'),
(98, 'cwise', 'A0q3Z9eZ(A', 'ejones@hotmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '41', 0, '2021', '9966 Rachel Fort Suite 798', 'Lake Lindafort', '2022-06-18 21:01:10', '2022-09-03 21:33:31', 'Karen Brewer', NULL, 'ID', '6323151', 'akuntansi', '24502', '2017'),
(99, 'johnsonjohn', 'H@7Y^1PlO5', 'bhoffman@simmons-todd.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '42', 0, '2010', '90887 Lori Springs', 'Stevenburgh', '2021-11-19 11:34:40', '2024-12-23 05:43:35', 'Christopher Parsons', NULL, 'NC', '9851608', 'bisnis', '79046', '2020'),
(100, 'owilliams', '*43LN(Uztx', 'ahenry@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '43', 0, '2022', '6944 Moss Cove', 'Meghanbury', '2023-01-07 13:14:48', '2020-09-04 22:58:15', 'Ashley Brown', NULL, 'IA', '3398073', 'bisnis', '68672', '2024'),
(101, 'mark21', 'gpV^78PemE', 'tina89@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '44', 0, '2016', '9478 Duane Park Suite 787', 'Roweland', '2022-08-25 20:38:08', '2020-08-19 03:02:30', 'Joe Miller', NULL, 'NC', '2546084', 'sipil', '55337', '2020'),
(102, 'fjones', '#L4DWobAV4', 'swilcox@vaughn.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '45', 0, '2020', '23388 York River', 'East Cindyport', '2023-04-14 04:32:13', '2024-08-14 21:41:50', 'Christopher Jennings', NULL, 'VA', '3446110', 'bisnis', '96662', '2020'),
(103, 'robert15', '3Kb5!KMxT%', 'tricia71@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '46', 0, '2017', '560 Matthew Spurs Suite 708', 'East Erichaven', '2022-06-02 18:28:17', '2022-11-12 21:40:12', 'James Park', NULL, 'OK', '4314536', 'teknik', '93018', '2023'),
(104, 'shawna97', '!vHe!rvGr1', 'mercedesward@smith.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '47', 0, '2020', '9109 Cannon Springs Apt. 491', 'East Kimberlymouth', '2020-03-22 23:17:09', '2023-07-21 07:18:40', 'Sheri West', NULL, 'SC', '1325210', 'sipil', '48476', '2020'),
(105, 'keith86', '!B!ciTSdh1', 'harrisrebecca@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '48', 0, '2018', '168 Mckee Greens Apt. 698', 'West Sarahport', '2023-06-06 19:01:05', '2024-08-27 00:19:22', 'Scott Stout', NULL, 'DE', '1006293', 'sipil', '56810', '2017'),
(106, 'chandlerjulie', '@3gWj6#b4I', 'bstevens@lee-phillips.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '49', 0, '2022', '0023 Rachel Fork', 'West Oscar', '2022-02-13 14:08:03', '2022-05-27 04:16:26', 'Larry Lee', NULL, 'NV', '1729020', 'sipil', '14217', '2022'),
(107, 'pgonzales', '8CZ8llu$@+', 'vhumphrey@williams.biz', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '50', 0, '2014', '170 Ford Rapid Apt. 684', 'Taraburgh', '2024-10-10 00:47:55', '2020-12-20 07:48:11', 'Andrew Adams', NULL, 'CO', '1581271', 'teknik', '61716', '2020'),
(108, 'randalljones', '#$2E7ZEgFd', 'simmonsjohn@hotmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '51', 0, '2013', '37904 Rojas Well', 'Benjamintown', '2021-03-14 14:17:25', '2022-07-19 07:35:01', 'Mrs. Elizabeth Banks', NULL, 'AR', '7562022', 'teknik', '84677', '2024'),
(109, 'paul20', '!19PtuFjNZ', 'lovedaniel@hotmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '52', 0, '2024', '227 Louis Way Suite 069', 'Jeffreyview', '2022-08-23 20:56:01', '2020-06-10 02:51:23', 'Eric Mayo', NULL, 'AZ', '8017722', 'sipil', '66900', '2018'),
(110, 'oberger', 'Xk&SeI*y_3', 'melissadavis@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '53', 0, '2011', '9696 Evan Course Suite 047', 'Port Ian', '2024-05-07 09:57:35', '2020-12-31 15:16:02', 'Adam Shannon', NULL, 'IL', '3676586', 'bisnis', '88913', '2024'),
(111, 'barbaracampbell', 'LQTWtNlZ(2', 'whodge@rios.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '54', 0, '2010', '0322 Melissa Light', 'Port Katrinachester', '2024-03-15 13:50:06', '2024-07-08 20:55:27', 'Michael Hensley', NULL, 'NY', '4413567', 'akuntansi', '33045', '2024'),
(112, 'ogreen', '@X+iWum8S5', 'tiffany95@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '55', 0, '2024', '8502 Dawson Squares', 'North Sherryfurt', '2024-07-18 00:03:57', '2020-06-14 12:20:40', 'Allen Acosta', NULL, 'WA', '5961015', 'bisnis', '05779', '2020'),
(113, 'fromero', '*NLjyQ0C2m', 'melissa49@hotmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '56', 0, '2021', '6283 Reed Meadow Apt. 547', 'Hallland', '2022-01-23 01:05:12', '2020-01-31 18:47:49', 'Joseph Pitts', NULL, 'FL', '9328412', 'sipil', '31297', '2019'),
(114, 'ortizkenneth', 'O1AEJ3)k)g', 'dawn50@bradshaw.biz', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '57', 0, '2016', '08192 Bradley Springs Apt. 082', 'Danielland', '2020-06-24 06:29:41', '2022-12-03 03:42:41', 'Gabriella Turner', NULL, 'ID', '4165633', 'teknik', '05526', '2017'),
(115, 'vzuniga', '0YgCuOim((', 'mikehale@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '58', 0, '2011', '7150 Daniel Ranch Suite 024', 'Walshburgh', '2020-11-26 13:15:44', '2020-04-29 21:02:33', 'Gregory Wilson', NULL, 'DE', '1009599', 'bisnis', '03255', '2015'),
(116, 'heidi05', '*C_xu@XfX5', 'amywarren@moreno.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '59', 0, '2012', '92503 Romero Stream', 'Morrisonfurt', '2020-10-21 00:40:52', '2021-01-18 13:30:27', 'Samantha Hahn', NULL, 'FL', '3700852', 'akuntansi', '57634', '2024'),
(117, 'avaldez', 'R+3*L+pbbr', 'bairdjeffery@evans-miller.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '60', 0, '2016', '61871 Alexandra Viaduct Suite 507', 'Christinachester', '2023-04-27 15:40:42', '2022-09-07 04:16:03', 'Russell Strong', NULL, 'MS', '2098761', 'sipil', '12480', '2016'),
(118, 'robert91', '*C2^XC1tEb', 'adam89@montes.biz', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '61', 0, '2021', '94895 Bryant Fields Suite 007', 'East Aaronburgh', '2020-09-01 01:55:03', '2023-03-30 00:52:49', 'Ariel Cruz', NULL, 'MO', '5624096', 'akuntansi', '49166', '2023'),
(119, 'sellis', '_9o_LXJzrj', 'nicolasmadden@stone-farley.org', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '62', 0, '2017', '2689 Patel Forge', 'Christopherside', '2023-02-03 13:34:52', '2020-02-25 03:11:50', 'Earl Evans', NULL, 'CT', '8642635', 'teknik', '26668', '2024'),
(120, 'zimmermanemily', 'MB$5qSggc4', 'tracyroberts@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '63', 0, '2021', '4288 Jason Green Apt. 895', 'New Maria', '2021-04-21 04:04:14', '2023-06-19 06:04:47', 'Karen Patterson', NULL, 'KY', '6352162', 'teknik', '53525', '2021'),
(121, 'pamelaanderson', 'FK(5Lp#@E@', 'morrismary@perkins.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '64', 0, '2016', '508 Howard Village Apt. 185', 'Williamshaven', '2022-08-01 04:42:24', '2022-01-05 22:16:32', 'Dakota Steele', NULL, 'TX', '9239389', 'teknik', '23401', '2018'),
(122, 'greynolds', 'zsmC0WtOE@', 'timothy55@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '65', 0, '2019', '20477 Tony Cliffs', 'Margaretborough', '2023-03-20 08:39:49', '2020-07-05 16:29:26', 'Megan Solis', NULL, 'DE', '7473897', 'sipil', '25813', '2021'),
(123, 'michaelwilson', 'WOu+v5Ll9p', 'huynhjames@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '66', 0, '2024', '84277 Cook Throughway Apt. 233', 'Pereztown', '2023-02-13 22:55:51', '2024-04-03 09:32:35', 'Taylor Ruiz', NULL, 'NJ', '3252210', 'akuntansi', '54717', '2018'),
(124, 'jacqueline96', 'pm8C6Nj&^2', 'hstephens@warren.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '67', 0, '2015', '3091 Johnson Creek Apt. 876', 'Nguyentown', '2023-05-01 12:07:53', '2024-09-14 04:04:34', 'Hayden Miller', NULL, 'HI', '8446452', 'teknik', '73106', '2021'),
(125, 'higginsjason', 'W@e5Sl0oqH', 'derrick24@haley.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '68', 0, '2021', '4790 Paul Tunnel', 'Port Susan', '2023-06-21 14:01:31', '2024-10-26 13:52:03', 'Robin Brown', NULL, 'RI', '7705140', 'teknik', '09511', '2018'),
(126, 'colemanbrandon', '6fmrI%Lb#4', 'kristopher28@lynch-roth.org', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '69', 0, '2018', '7616 Barber Mountain Apt. 032', 'East Kristen', '2022-03-17 20:45:16', '2024-03-03 17:26:30', 'Natasha Williams', NULL, 'MI', '8737442', 'bisnis', '01394', '2021'),
(127, 'alvarezsteve', 'ESL4LkTcC^', 'wreed@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '70', 0, '2024', '14949 Nicole Mountain Apt. 893', 'New Andrewfurt', '2022-10-01 17:44:22', '2021-12-03 13:44:20', 'Derrick Ruiz', NULL, 'WA', '6992762', 'bisnis', '29836', '2024'),
(128, 'twilliams', 'Fk27uNENA)', 'rodriguezedward@hotmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '71', 0, '2012', '92864 Porter Estates', 'West Glennville', '2022-04-03 00:24:32', '2021-04-26 12:01:33', 'Corey Howard', NULL, 'MA', '5497708', 'bisnis', '67541', '2015'),
(129, 'hicksautumn', 'njxY9Z^1C^', 'annphillips@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '72', 0, '2024', '47379 Gilmore River', 'East Joseph', '2024-01-08 20:00:51', '2022-11-07 22:26:09', 'Stephanie Cardenas', NULL, 'CA', '9202766', 'bisnis', '76054', '2018'),
(130, 'keithdavis', 'i+(2UlX5DM', 'dustin62@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '73', 0, '2019', '9853 Kevin Street Apt. 258', 'Christinamouth', '2024-03-19 16:04:45', '2024-07-21 17:04:20', 'Kelly Campbell', NULL, 'LA', '4764486', 'sipil', '94980', '2022'),
(131, 'vdennis', '!eK5URJJR$', 'santiagocorey@knapp-hicks.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '74', 0, '2010', '099 Jody Square', 'Aprilborough', '2021-04-21 22:54:04', '2022-01-18 02:47:16', 'Barbara Moore', NULL, 'NY', '7958201', 'bisnis', '79281', '2016'),
(132, 'guzmanjessica', '*c&LuN)F!0', 'ramosjake@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '75', 0, '2016', '82653 Teresa Plains Apt. 860', 'Lake Amyberg', '2020-01-24 16:34:54', '2022-06-22 12:39:34', 'Jasmine Adkins', NULL, 'MS', '3764708', 'sipil', '50353', '2020'),
(133, 'eric78', '$0xIgbazsZ', 'amyware@doyle-rodriguez.org', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '76', 0, '2021', '646 Garcia Station', 'Port Dana', '2024-09-13 22:14:47', '2020-08-10 19:20:26', 'Andre Gonzales', NULL, 'NJ', '8027671', 'bisnis', '08420', '2019'),
(134, 'torrescassandra', '(ypJr0ieg9', 'rburke@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '77', 0, '2018', '48443 Jordan Plain Suite 845', 'Millerbury', '2024-08-20 00:36:59', '2021-03-12 17:18:58', 'Bryan Pena', NULL, 'SC', '1210514', 'akuntansi', '72238', '2018'),
(135, 'nstevens', 'SX(!6B#urV', 'crystalrichards@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '78', 0, '2019', '87636 Timothy Trace', 'North Brittanyshire', '2020-04-16 13:12:27', '2020-01-19 01:42:59', 'Alexander Soto', NULL, 'NJ', '5594991', 'sipil', '08881', '2024'),
(136, 'jasonmorris', 'A*K4VVuuJv', 'diane82@brewer.biz', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '79', 0, '2024', '666 Dennis Cape Suite 082', 'North Brett', '2021-04-11 20:42:14', '2023-05-26 01:19:11', 'Kevin Callahan', NULL, 'WA', '9833857', 'akuntansi', '97257', '2023'),
(137, 'handerson', '5c(3FVngck', 'brittanymills@yahoo.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '80', 0, '2023', '87391 Joyce Inlet', 'Fosterchester', '2021-02-09 10:58:34', '2023-11-28 09:40:27', 'Sheila Brown', NULL, 'NM', '9407989', 'sipil', '85537', '2017'),
(138, 'ujacobson', '%k*4L!Nu0X', 'valerie83@yahoo.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '81', 0, '2016', '266 Jennifer Stream Suite 792', 'South Lauren', '2023-07-11 10:47:40', '2020-02-11 20:30:10', 'Alyssa Powell', NULL, 'NE', '6141278', 'bisnis', '59385', '2019'),
(139, 'jennajones', '(23T32Wi6(', 'suzanne01@robinson-jones.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '82', 0, '2013', '7377 Jones Trace', 'New Brittany', '2020-07-21 08:23:04', '2020-07-27 04:16:55', 'Kimberly Cox', NULL, 'OR', '4025256', 'teknik', '06295', '2016'),
(140, 'wholt', '+3Y$Z!t5nN', 'traceycamacho@hotmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '83', 0, '2021', '06432 Laura Road Suite 563', 'New Allenhaven', '2023-09-29 05:07:37', '2023-08-05 06:37:17', 'Tricia Soto', NULL, 'FL', '5778627', 'bisnis', '89809', '2022'),
(141, 'jamescooper', 'a61(Gbhg_A', 'russell41@hotmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '84', 0, '2011', '906 Richardson Courts Suite 709', 'Clarkburgh', '2020-12-30 19:19:56', '2020-10-28 00:31:04', 'Ms. Laura Holloway', NULL, 'CA', '7201142', 'teknik', '01109', '2016'),
(142, 'anorman', 'vOW+C%!6+2', 'nherrera@kennedy.net', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '85', 0, '2020', '0817 Hernandez Extensions', 'Aguilarburgh', '2022-08-15 14:37:12', '2024-10-20 21:19:07', 'Darin Dominguez', NULL, 'WA', '5175498', 'akuntansi', '08574', '2016'),
(143, 'marc13', '*+VZ1F%k_4', 'valeriedickerson@yahoo.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '86', 0, '2019', '327 Anthony Ranch Apt. 352', 'Johnsonmouth', '2024-11-14 22:45:24', '2021-03-13 07:33:43', 'Candace Black', NULL, 'IN', '1238185', 'bisnis', '43763', '2016'),
(144, 'elee', '4$7rQRj(jX', 'alexisbrown@preston.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '87', 0, '2013', '4911 Rodney Avenue', 'Porterhaven', '2021-09-22 00:50:29', '2024-01-13 23:58:09', 'Alexis Yu', NULL, 'KY', '7596392', 'teknik', '72791', '2021'),
(145, 'jonesapril', 'h%m3nCSu(d', 'gonzalezjessica@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '88', 0, '2018', '034 Marquez Tunnel Suite 161', 'Glenmouth', '2020-04-16 12:41:45', '2023-09-24 05:26:05', 'Stephanie Fisher', NULL, 'AR', '1155713', 'teknik', '28036', '2022'),
(146, 'eric47', '&9C0LtpUWW', 'stephanierichardson@hotmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '89', 0, '2014', '0045 Chase Rapid Suite 078', 'North Samuelport', '2020-12-12 08:59:08', '2024-10-28 03:27:14', 'Crystal Wilson', NULL, 'OR', '9804265', 'sipil', '49395', '2024'),
(147, 'nicholas02', 'A)2POr2R0n', 'corybennett@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '90', 0, '2021', '24035 Catherine Hollow', 'Dianastad', '2024-09-16 20:11:53', '2020-03-07 08:36:30', 'Kevin Church', NULL, 'MT', '2988672', 'bisnis', '89601', '2016'),
(148, 'rebeccamiller', 'vEB6$SwYw%', 'david70@peterson.info', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '91', 0, '2015', '5304 White Keys Suite 544', 'Juanborough', '2023-12-28 07:22:09', '2021-03-24 06:12:45', 'Jackie Cohen', NULL, 'IA', '5036812', 'teknik', '49370', '2015'),
(149, 'uberry', '*a7Rl*V&76', 'smorton@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '92', 0, '2024', '87391 Miller Branch Suite 736', 'South Reneeland', '2020-05-31 17:29:18', '2023-08-04 18:03:48', 'Russell Pham', NULL, 'OH', '8041335', 'bisnis', '77944', '2023'),
(150, 'melissalopez', 'icRQAV#Q*1', 'qcherry@hansen-smith.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '93', 0, '2022', '20845 Gilbert Land Apt. 044', 'Lake Shannon', '2023-11-04 12:42:08', '2021-11-03 11:48:36', 'Julie French', NULL, 'IA', '9176101', 'teknik', '46370', '2020'),
(151, 'jroberts', 'n+87Sf5eAy', 'aaron84@sparks-chan.biz', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '94', 0, '2021', '02999 Daniel Crescent Apt. 261', 'Rodriguezfort', '2022-05-19 09:39:53', '2021-05-05 10:34:49', 'Margaret Rogers', NULL, 'ND', '5408639', 'bisnis', '44827', '2022'),
(152, 'wyattmcgee', '^9QdoJPf@U', 'timothy89@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '95', 0, '2023', '54097 Jasmine Crescent Apt. 996', 'West Pennyview', '2024-11-30 00:55:44', '2020-12-04 10:17:25', 'Erin Smith', NULL, 'NE', '1875215', 'akuntansi', '43139', '2016'),
(153, 'hillleslie', '#0URWismhC', 'phill@vance-wilson.info', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '96', 0, '2014', '268 Valencia Field Suite 004', 'Lake Kaylaborough', '2021-02-09 01:53:58', '2020-11-11 00:13:37', 'Joshua White', NULL, 'TN', '6041336', 'sipil', '05937', '2020'),
(154, 'opowell', 'u#7Y3ya_y+', 'jonesdaniel@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '97', 0, '2021', '7145 Rebekah Stream Apt. 680', 'Port David', '2022-01-05 15:03:47', '2023-12-01 05:49:24', 'Robert Webster', NULL, 'WA', '6573083', 'sipil', '51851', '2019'),
(155, 'melissareyes', '5sOBqBs5@Y', 'ariel96@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '98', 0, '2014', '939 Padilla Pike Apt. 874', 'South David', '2023-08-08 13:48:40', '2021-07-29 18:30:39', 'Joshua Wilcox', NULL, 'LA', '2615217', 'akuntansi', '32982', '2023'),
(156, 'colleen72', '!3YGBTxx+u', 'pricelinda@reed.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '99', 0, '2024', '35266 Maria Common Apt. 348', 'Angelaview', '2024-09-30 17:18:47', '2024-08-10 21:32:50', 'Lori Gomez', NULL, 'CT', '6598015', 'bisnis', '86888', '2020'),
(157, 'youngsonya', 'M@A37M2aNM', 'avilaangela@williams.info', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '100', 0, '2021', '23140 Williams Brook', 'South Nicoleview', '2023-03-24 00:03:25', '2023-11-20 16:44:16', 'Jessica Jackson', NULL, 'NM', '6077009', 'akuntansi', '54944', '2021'),
(158, 'csolis', '+)Vb_Zime8', 'stanleyjoseph@white.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '101', 0, '2020', '1535 Williams Port', 'Esparzatown', '2024-12-17 14:59:43', '2021-05-15 06:44:52', 'Kelly Crawford', NULL, 'AK', '1745893', 'bisnis', '66004', '2019'),
(159, 'qduran', '+0VNIivh@!', 'debra61@jensen.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '102', 0, '2010', '32823 Galloway Pass Suite 744', 'Mooreton', '2024-09-15 03:15:10', '2024-05-30 00:18:22', 'Mark Parsons', NULL, 'AL', '9065803', 'akuntansi', '09163', '2023'),
(160, 'raymond79', 'F$fr3Tjqy!', 'jessicawalsh@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '103', 0, '2021', '71080 Barry Haven Apt. 541', 'Tammystad', '2023-01-25 19:47:18', '2021-01-23 23:21:32', 'Aaron Simpson', NULL, 'SC', '4333731', 'sipil', '15091', '2019'),
(161, 'nicholasmendez', '@UB0HqHR!d', 'garciarandy@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '104', 0, '2014', '811 Wagner Mission Apt. 500', 'Coryhaven', '2020-03-14 17:15:53', '2022-03-18 01:10:40', 'Jacqueline Mcdowell', NULL, 'OR', '2841881', 'akuntansi', '07972', '2015'),
(162, 'rodriguezdestiny', 'LdP7Laaa)p', 'trevor42@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '105', 0, '2020', '2577 Smith Manor Suite 627', 'Craigside', '2020-12-21 19:45:59', '2024-01-24 06:42:25', 'Sheila Morales', NULL, 'AZ', '7885676', 'teknik', '98612', '2021'),
(163, 'kirbybetty', 'K2FyGzta+E', 'xbrown@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '106', 0, '2010', '912 Rios Walks', 'North Hollyshire', '2024-12-03 16:03:12', '2023-12-26 18:23:19', 'Karen Shea', NULL, 'IN', '8190291', 'teknik', '33456', '2017'),
(164, 'timothy73', '!%jC*V1on9', 'brookemills@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '107', 0, '2022', '0382 Sheena Wall', 'New Danielburgh', '2021-01-08 07:49:15', '2022-05-17 03:11:17', 'Douglas Collins', NULL, 'NJ', '6774858', 'sipil', '50970', '2023'),
(165, 'troy29', 'sbIT2yNns!', 'sjackson@mcdowell.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '108', 0, '2023', '627 Alexandria Mill', 'Williamfurt', '2024-06-03 07:28:12', '2020-03-07 12:33:36', 'James Cochran', NULL, 'NV', '4976159', 'teknik', '45711', '2022'),
(166, 'cjohnson', '!4lZ*D6as9', 'clarkamy@hotmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '109', 0, '2016', '591 Gonzalez Pass Apt. 018', 'Pricefort', '2022-12-05 03:34:02', '2022-07-19 08:38:42', 'Alejandra Johnson', NULL, 'OH', '5031551', 'sipil', '45509', '2019'),
(167, 'wilsonjoseph', '!rjC7Vpm&n', 'valenzuelatracy@yahoo.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '110', 0, '2012', '338 Nicole Shores', 'Lake Tiffanychester', '2021-05-30 00:33:01', '2021-06-03 03:42:43', 'Sean Patterson', NULL, 'HI', '7851926', 'akuntansi', '52278', '2023'),
(168, 'mcastillo', '8l94Nn+F)$', 'martinezjennifer@hernandez-peterson.info', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '111', 0, '2012', '93102 Brian Stravenue Suite 481', 'West Mitchellmouth', '2020-03-06 23:26:05', '2022-10-06 14:39:37', 'Christina Raymond', NULL, 'VT', '2309993', 'teknik', '90157', '2018'),
(169, 'marymccann', '0&V9lFPz%0', 'wendy67@miller-tucker.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '112', 0, '2010', '2853 Katherine Crossing Apt. 433', 'Port Joshuachester', '2022-02-03 13:44:19', '2021-04-16 03:19:36', 'Ryan Hall', NULL, 'CA', '4908339', 'sipil', '74376', '2022'),
(170, 'ebrooks', 'M5I6#WgD#y', 'muellerkathleen@smith.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '113', 0, '2018', '339 Harris Islands Suite 669', 'Lake Karen', '2024-08-20 02:53:50', '2020-12-05 18:19:55', 'Amanda Davila', NULL, 'FL', '6468850', 'sipil', '64932', '2016'),
(171, 'dlopez', '^6S+Pa+N$+', 'stonehector@ross-simmons.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '114', 0, '2022', '68772 David Keys', 'Lake Kelseyborough', '2021-09-25 07:20:04', '2022-09-08 13:20:14', 'Thomas Hogan', NULL, 'VA', '2354272', 'bisnis', '24031', '2017'),
(172, 'ljohnson', '_NE3PbuHf8', 'christina48@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '115', 0, '2013', '7911 Bolton Cliffs', 'Lake Karenbury', '2022-12-22 03:18:36', '2024-04-21 08:46:23', 'Alicia Newman', NULL, 'MT', '8651458', 'bisnis', '67324', '2024'),
(173, 'bentonjasmine', 'o8RNxWF2#z', 'thompsongeorge@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '116', 0, '2017', '7636 David Alley Apt. 429', 'New Danielland', '2024-06-13 23:45:32', '2023-09-13 02:36:57', 'Richard Harris', NULL, 'DE', '8618666', 'sipil', '19467', '2024'),
(174, 'roblesrose', '*gJEZ+cj3E', 'joneschristina@hotmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '117', 0, '2024', '439 Mcdaniel Stream Apt. 494', 'West Jorge', '2023-11-29 21:07:34', '2024-05-08 10:57:50', 'Kathryn Rhodes', NULL, 'MT', '5607510', 'akuntansi', '38685', '2019'),
(175, 'john73', 'rH$5XTrfeE', 'wrightedwin@johnson-hicks.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '118', 0, '2011', '87771 Daniel Pines Apt. 669', 'Port Krystalport', '2020-05-05 01:14:56', '2022-10-25 02:23:56', 'William Williams', NULL, 'OR', '1308547', 'sipil', '37067', '2018'),
(176, 'kristenlopez', ')AV^^%9w5H', 'leebrandy@kirk.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '119', 0, '2010', '30741 Rachel Junction Suite 352', 'Kevinview', '2023-01-17 19:52:34', '2023-02-21 18:54:48', 'Pamela Rodriguez', NULL, 'AK', '4770689', 'akuntansi', '99620', '2015'),
(177, 'walkerrobert', '*U0EyU5jmh', 'lanceramirez@lawrence-norris.info', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '120', 0, '2010', '50504 Lisa Cliff', 'Weaverton', '2024-12-07 15:25:33', '2022-02-12 19:40:08', 'Heather Strickland', NULL, 'MS', '7044585', 'akuntansi', '35232', '2022'),
(178, 'mpayne', 'wq&_e0YwO5', 'mnelson@gmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '121', 0, '2017', '3077 Briggs Shores', 'Dylantown', '2023-06-29 19:44:01', '2020-12-14 01:50:55', 'Joy Rivas', NULL, 'RI', '9723001', 'akuntansi', '37316', '2015'),
(179, 'warerebecca', 'l0XEwHjz_e', 'brittany69@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '122', 0, '2021', '91962 Curtis Cove', 'Millershire', '2021-06-22 22:41:18', '2022-07-24 01:50:17', 'Dawn Schroeder', NULL, 'IN', '2033486', 'sipil', '99418', '2019'),
(180, 'wendy20', 'iAbR2wFk%h', 'edunn@francis.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '123', 0, '2020', '74343 Johnson Manors Apt. 088', 'Cantrellbury', '2024-09-24 03:54:02', '2022-11-19 16:50:59', 'Thomas Garcia', NULL, 'DE', '8598406', 'bisnis', '81796', '2020'),
(181, 'jenniferpeterson', 'i0+Yv&Ff+#', 'sullivanwendy@yahoo.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '124', 0, '2015', '746 Morgan Spurs Suite 797', 'Christopherfurt', '2023-06-01 21:38:05', '2022-07-03 13:33:04', 'Melissa Alexander', NULL, 'AR', '5774860', 'bisnis', '91996', '2015'),
(182, 'valerienovak', 'g)X+3CgyyD', 'danielleoconnell@williams.info', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '125', 0, '2024', '94788 Caldwell Hollow Suite 697', 'North Tabithaport', '2020-09-01 19:04:28', '2022-02-02 15:11:32', 'Derek Small', NULL, 'DC', '7046072', 'teknik', '06158', '2016'),
(183, 'andrewcarson', ')AN4N5bdt7', 'rebekah24@wilson.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '126', 0, '2016', '7744 Barber Cliffs', 'Harrisstad', '2021-08-21 20:54:46', '2024-02-01 20:35:13', 'Ryan Ward', NULL, 'IA', '4537117', 'bisnis', '67249', '2021'),
(184, 'deanlee', 'T_2@xRxpHK', 'jmills@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '127', 0, '2021', '72510 Taylor Estates Suite 454', 'Jenniferberg', '2024-05-12 21:13:23', '2020-11-25 07:01:19', 'Angela Mendoza', NULL, 'SC', '5587594', 'bisnis', '01293', '2022'),
(185, 'hwatson', '58#nLqLh(t', 'haynesdavid@dickerson-gray.info', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '128', 0, '2012', '77025 Russell Street', 'Brianfurt', '2024-09-04 12:29:26', '2021-06-15 22:23:36', 'Lisa Taylor', NULL, 'KY', '3995633', 'bisnis', '49789', '2022'),
(186, 'chayes', 'MUE62MxSw!', 'aperez@becker.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '129', 0, '2023', '67663 Fuller Shores', 'North Laurafort', '2020-07-27 15:54:10', '2022-01-04 11:05:01', 'Edward Vincent', NULL, 'RI', '3908693', 'bisnis', '86712', '2020'),
(187, 'langsarah', 'x1Z9BWZu)7', 'janebecker@watts.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '130', 0, '2017', '70851 Parker Harbor', 'Smithview', '2022-05-01 02:27:59', '2020-12-20 11:40:03', 'Lisa Lambert', NULL, 'PA', '6255589', 'akuntansi', '34443', '2015'),
(188, 'ddrake', '_0G%#Toyba', 'beckchristopher@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '131', 0, '2012', '600 Boyd Cove Apt. 955', 'New Steventown', '2020-11-10 12:39:20', '2023-05-31 13:25:59', 'Monica Douglas', NULL, 'AZ', '9429791', 'teknik', '58652', '2020'),
(189, 'johnsontravis', 'laO!g!NM@0', 'hooderic@yahoo.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '132', 0, '2023', '31721 Hamilton Neck Apt. 945', 'Robertside', '2024-08-17 05:29:44', '2020-01-23 22:24:11', 'Renee Smith', NULL, 'OR', '3965584', 'teknik', '74846', '2020'),
(190, 'andradejoy', '^rQWJgdgN8', 'joel73@best-ayers.net', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '133', 0, '2022', '254 Joseph Flat Suite 768', 'Woodfort', '2022-03-31 05:00:55', '2022-12-17 06:05:02', 'Jesse Wheeler', NULL, 'UT', '5190080', 'akuntansi', '56272', '2015'),
(191, 'harperpatricia', '&ZiF8JsM*e', 'phillipssamantha@davila.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '134', 0, '2021', '4362 Russell Wells Apt. 739', 'West Charlesmouth', '2020-07-14 18:33:33', '2022-08-22 06:37:33', 'Jessica Johnston', NULL, 'DE', '5374913', 'bisnis', '77923', '2018'),
(192, 'kurt93', ')@1gO*VeJ$', 'nconner@williams.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '135', 0, '2017', '00027 Deborah Rapid Suite 038', 'Port Danielborough', '2021-10-09 18:16:38', '2020-08-03 14:06:25', 'David Brown', NULL, 'HI', '5640138', 'akuntansi', '66842', '2015'),
(193, 'jroach', '+8W^M4Y2Vz', 'amandarobertson@herrera-holland.biz', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '136', 0, '2022', '831 Young Station Apt. 755', 'Williamsport', '2020-09-08 17:11:37', '2022-05-24 06:15:15', 'Joshua Livingston', NULL, 'FL', '6113495', 'sipil', '93287', '2018'),
(194, 'spencer62', '!HZXqg*64M', 'julie05@nguyen.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '137', 0, '2019', '3239 Potts Corners Apt. 350', 'Powellstad', '2021-08-31 10:12:39', '2021-10-30 09:17:29', 'Robert Lee', NULL, 'MO', '7076010', 'teknik', '36030', '2016'),
(195, 'jmarshall', '$9)yBGm_39', 'johnstonchad@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '138', 0, '2015', '572 Ryan Trafficway Suite 661', 'Lindabury', '2022-06-21 13:21:16', '2022-04-11 14:39:27', 'Edward Rodriguez', NULL, 'MS', '1382185', 'akuntansi', '35473', '2021'),
(196, 'hayescourtney', '2(iLe40_*@', 'kevin39@price.info', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '139', 0, '2023', '276 Jennifer Crest Suite 302', 'Youngbury', '2021-02-22 12:03:38', '2022-08-20 15:37:45', 'Steven Phillips', NULL, 'AZ', '2983076', 'akuntansi', '25688', '2023'),
(197, 'acostarachel', '$26)eyPi@M', 'andreahunter@west-barnett.info', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '140', 0, '2014', '01406 Holmes Divide Suite 310', 'Allisonfurt', '2021-11-26 10:49:26', '2022-10-20 03:45:29', 'Maria Carr', NULL, 'MA', '2515392', 'teknik', '81469', '2018'),
(198, 'james44', '%0%_3KyrZc', 'rroberson@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '141', 0, '2023', '4782 Williams Skyway', 'Reedville', '2024-02-05 15:29:56', '2023-12-19 04:48:59', 'Sonya Ortiz', NULL, 'KS', '5497352', 'teknik', '25015', '2024'),
(199, 'cherylmyers', 'wBoZcE5x^1', 'archersharon@hotmail.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '142', 0, '2022', '1166 King Crossing Suite 788', 'Marquezland', '2022-05-09 21:54:41', '2023-06-23 13:47:15', 'Carol Rivera', NULL, 'MD', '2043288', 'akuntansi', '60545', '2021'),
(200, 'brooke07', '+5ISo455IO', 'julie86@gonzalez.org', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '143', 0, '2018', '11603 Smith Rue Suite 692', 'Smithchester', '2020-08-28 14:42:53', '2024-03-07 15:33:38', 'Sonya Johnson', NULL, 'NE', '5333799', 'akuntansi', '17183', '2023'),
(201, 'kara97', '1UF9EUwJ$_', 'paynejon@gmail.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '144', 0, '2022', '19622 Gonzales Locks', 'North Steve', '2020-08-05 01:56:28', '2021-12-13 21:08:59', 'Jennifer Mcclure', NULL, 'MA', '7676704', 'sipil', '97822', '2022'),
(202, 'sara20', 'N(P7QWawtl', 'erinholland@yahoo.com', 'admin', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '145', 0, '2016', '284 Wesley Crossroad Apt. 814', 'Mitchellfort', '2020-11-28 22:17:42', '2021-07-11 09:07:39', 'Brian Carr', NULL, 'ID', '9385016', 'sipil', '79930', '2023'),
(203, 'jason35', 'W9^7MSq2UD', 'christine42@munoz.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '146', 0, '2018', '1475 Brooke Neck Suite 737', 'Danaville', '2021-07-19 02:37:13', '2020-11-27 06:57:16', 'Scott Santos', NULL, 'RI', '7216330', 'bisnis', '87461', '2020'),
(204, 'michaeldavis', '_Pi3j_GhIR', 'dbrown@nguyen.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '147', 0, '2016', '13738 Berry Unions Suite 046', 'South Chad', '2022-11-16 03:28:51', '2022-08-30 18:28:38', 'Kristen Rodriguez', NULL, 'CT', '4758113', 'bisnis', '19457', '2015'),
(205, 'robert70', 'c)oo8PUs#i', 'bestkaren@howard.net', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '148', 0, '2021', '513 Jones Burg', 'Andrewborough', '2023-10-22 21:46:51', '2021-05-30 19:56:57', 'Mr. Steven Sanchez', NULL, 'VT', '2506836', 'sipil', '01018', '2016'),
(206, 'penaadam', 'e!5Yb5PGHk', 'leslie73@gmail.com', 'user', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '149', 0, '2015', '305 Drake Dale Apt. 399', 'Sarafort', '2022-01-18 08:44:58', '2021-03-27 11:30:20', 'David Anderson', NULL, 'ME', '3894877', 'teknik', '38353', '2022'),
(207, 'jordanjulie', '9eQCmMq8#R', 'mjames@park.com', 'editor', '2024-12-24 07:27:00', '2024-12-24 07:27:00', '150', 0, '2019', '6204 Alicia Wells', 'West Erik', '2023-12-29 17:27:00', '2020-02-22 11:40:00', 'Daniel Ross DDS', NULL, 'IL', '1202111', 'akuntansi', '25802', '2017'),
(208, 'a', 'a', 'a', 'a', '2024-12-27 13:24:37', '2024-12-27 13:24:37', 'ayaa', 0, 'a', 'a', 'a', 'a', 'a', 'a', NULL, 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_message`
--

CREATE TABLE `welcome_message` (
  `id` int NOT NULL,
  `tahun` int DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang` text NOT NULL,
  `kontak` text NOT NULL,
  `tipe_data` enum('utama','surveyor','koordinator') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_message`
--

INSERT INTO `welcome_message` (`id`, `tahun`, `message`, `tentang`, `kontak`, `tipe_data`, `program_studi`, `nama`, `email`, `jurusan`, `created_on`, `updated_on`) VALUES
(51, 2020, 'Message for 2020', 'Tentang tahun 2020', 'kontak2020@example.com', 'utama', 'Teknik Informatika', 'John Doe', 'john.doe@example.com', 'Teknik Komputer', '2024-12-27 10:21:59', '2024-12-27 10:21:59'),
(52, 2021, 'Message for 2021', 'Tentang tahun 2021', 'kontak2021@example.com', 'surveyor', 'Manajemen', 'Jane Smith', 'jane.smith@example.com', 'Akuntansi', '2024-12-27 10:21:59', '2024-12-27 10:21:59'),
(53, 2022, 'Message for 2022', 'Tentang tahun 2022', 'kontak2022@example.com', 'koordinator', 'Sistem Informasi', 'Mark Brown', 'mark.brown@example.com', 'Ekonomi', '2024-12-27 10:21:59', '2024-12-27 10:21:59'),
(54, 2023, 'Message for 2023', 'Tentang tahun 2023', 'kontak2023@example.com', 'utama', 'Teknik Sipil', 'Sarah Lee', 'sarah.lee@example.com', 'Sipil', '2024-12-27 10:21:59', '2024-12-27 10:21:59'),
(55, 2024, 'Message for 2024', 'Tentang tahun 2024', 'kontak2024@example.com', 'surveyor', 'Ilmu Komunikasi', 'Tom White', 'tom.white@example.com', 'Komunikasi', '2024-12-27 10:21:59', '2024-12-27 10:21:59'),
(57, 2011, 'Message for 2011', 'Tentang tahun 2011', 'kontak2011@example.com', 'surveyor', 'Manajemen Pemasaran', 'Bob White', 'bob.white@example.com', 'Pemasaran', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(58, 2012, 'Message for 2012', 'Tentang tahun 2012', 'kontak2012@example.com', 'koordinator', 'Ilmu Komputer', 'Carol Black', 'carol.black@example.com', 'Komputer', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(59, 2013, 'Message for 2013', 'Tentang tahun 2013', 'kontak2013@example.com', 'utama', 'Desain Komunikasi Visual', 'David Blue', 'david.blue@example.com', 'Desain', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(60, 2014, 'Message for 2014', 'Tentang tahun 2014', 'kontak2014@example.com', 'surveyor', 'Hukum', 'Eve Brown', 'eve.brown@example.com', 'Hukum', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(61, 2015, 'Message for 2015', 'Tentang tahun 2015', 'kontak2015@example.com', 'koordinator', 'Sistem Informasi', 'Frank Yellow', 'frank.yellow@example.com', 'Sistem Informasi', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(62, 2016, 'Message for 2016', 'Tentang tahun 2016', 'kontak2016@example.com', 'utama', 'Teknik Kimia', 'Grace Red', 'grace.red@example.com', 'Kimia', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(63, 2017, 'Message for 2017', 'Tentang tahun 2017', 'kontak2017@example.com', 'surveyor', 'Teknik Mesin', 'Harry Purple', 'harry.purple@example.com', 'Mesin', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(64, 2018, 'Message for 2018', 'Tentang tahun 2018', 'kontak2018@example.com', 'koordinator', 'Akuntansi', 'Ivy White', 'ivy.white@example.com', 'Akuntansi', '2024-12-27 10:23:31', '2024-12-27 10:23:31'),
(65, 2019, 'Message for 2019', 'Tentang tahun 2019', 'kontak2019@example.com', 'utama', 'Teknik Industri', 'Jack Grey', 'jack.grey@example.com', 'Industri', '2024-12-27 10:23:31', '2024-12-27 10:23:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koordinator_surveyor`
--
ALTER TABLE `koordinator_surveyor`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
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
-- AUTO_INCREMENT for table `koordinator_surveyor`
--
ALTER TABLE `koordinator_surveyor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kuesioner_field`
--
ALTER TABLE `kuesioner_field`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuesioner_kuesioner`
--
ALTER TABLE `kuesioner_kuesioner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `kuesioner_kuesioner_section`
--
ALTER TABLE `kuesioner_kuesioner_section`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kuesioner_page`
--
ALTER TABLE `kuesioner_page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `welcome_message`
--
ALTER TABLE `welcome_message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
