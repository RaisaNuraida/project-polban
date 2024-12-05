-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2024 at 01:36 AM
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
  `answers` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(12) NOT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `ordering_count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kuesioner_kuesioner`
--

INSERT INTO `kuesioner_kuesioner` (`id`, `title`, `deskripsi`, `entries`, `active_status`, `pages`, `created_on`, `created_by`, `updated_on`, `updated_by`, `ordering_count`, `conditional_logic`) VALUES
(6, 'asdasf', 'hshdjsahdjhdjhwasduwdguwduhsjadhjs', NULL, NULL, 'sdasd', NULL, NULL, NULL, NULL, NULL, ''),
(7, 'aya percobaan filter', 'percobaan', 0, NULL, 'hjdshjh', NULL, NULL, NULL, NULL, NULL, '2019,teknik sipil');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kuesioner_page`
--

INSERT INTO `kuesioner_page` (`id`, `title`, `kuesioner_id`, `deskripsi`, `sections`, `conditional_logic`, `created_on`, `created_by`, `updated_on`, `updated_by`, `ordering_count`) VALUES
(5, 'jhsjhe', 0, 'wehjkwq', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int NOT NULL,
  `academic_faculty` varchar(255) NOT NULL,
  `academic_program` varchar(255) NOT NULL,
  `academic_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `academic_faculty`, `academic_program`, `academic_group`) VALUES
(45, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `slogan`) VALUES
(1, 'Tracer Study', 'Assuring Your Future');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group`, `created_at`, `updated_at`, `display_name`, `academic_nim`, `academic_faculty`, `academic_program`, `academic_year`, `street`, `city`, `state_code`, `zip_code`, `academic_graduate_year`, `jenis_kelamin`, `no_telp`, `nik`, `npwp`) VALUES
(34, 'tanaka23', 'tanakaayaa', 'tanaka@gmail.com', 'alumni', '2024-10-14 08:45:47', '2024-10-14 08:45:47', 'Tanaka Aya', 2147483647, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2024', 'wanita', '82214042764', '82192', '10291092'),
(54, 'raisa', 'nuraida', 'rai@gmail.com', 'alumni', '2024-10-28 13:06:27', '2024-11-13 03:04:18', 'raisa', 7647536, 'teknik elektro', 'D-3 Teknik elektronika', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2028', 'wanita', '', '', ''),
(55, 'tanaka23', 'tanakaayaaaaaaa\r\n', 'tanaka@gmail.com', 'alumni', '2024-10-14 08:45:47', '2024-10-14 08:45:47', 'Tanaka ', 219273092, 'Teknik Sipil', 'D-3 Teknik Konstruksi Sipil', '2019', 'gg bidara', 'subang', 'jawa barat', NULL, '2028', 'wanita', '82214042764', '82192', '10291092'),
(56, 'megajelek', 'megamegaa', 'mega@gmail.com', 'administrator', '2024-11-06 10:02:28', '2024-11-13 01:54:06', 'megarahma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'rai', 'asasas', 'rai@gmail.com', 'administrator', '2024-11-06 10:02:28', '2024-11-13 01:54:06', 'megarahma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `welcome_message`
--

CREATE TABLE `welcome_message` (
  `id` int NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tentang` text NOT NULL,
  `kontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `welcome_message`
--

INSERT INTO `welcome_message` (`id`, `message`, `tentang`, `kontak`) VALUES
(1, '<p>Studi Penelusuran Alumni (<a href=\"https://penelusuranalumni.polban.ac.id/tentang\"><em>Tracer Study</em></a>) dilakukan untuk mengetahui masa transisi dari dunia kampus menuju dunia kerja dan untuk mendapatkan masukan bagi perbaikan sistem pendidikan POLBAN. Hasil dari survey ini akan menjadi data yang sangat berharga bagi POLBAN yang akan diperlukan bagi berbagai kebutuhan pengembangan dan kemajuan kampus POLBAN. Oleh karena itu, kami mohon kesediaan para alumni POLBAN yang kami banggakan untuk bekerjasama dalam mengisi kuesioner&nbsp;<em>Tracer Study</em>&nbsp;ini.</p>\r\n\r\n<p><br />\r\n<em><strong>Kuesioner Tracer Study yang digunakan di POLBAN terdiri dari 5 halaman utama dengan 1 halaman tambahan berupa kuesioner yang berasal dari program studi masing-masing (khusus program studi tertentu).</strong></em></p>\r\n\r\n<p><br />\r\nData tiap halaman akan tersimpan jika telah menekan tombol<strong>&nbsp;&quot;LANJUTKAN&quot;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Untuk menghindari ditolaknya masuk ke database pengisian pertanyaan email (email atasan dan email perusahaan bagi yang bekerja): harus dengan penulisan email yang benar yaitu&nbsp;<u><strong>mengandung &#39;@&#39; dan tidak boleh mengandung spasi</strong></u>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khusus untuk angkatan yang lulus di tahun 2023&nbsp;harap untuk memeriksa email Anda (seperti tertulis di&nbsp;buku wisuda) yang berasal dari tracer studi POLBAN --&gt;&nbsp;<u><strong>tracer.study@polban.ac.id</strong></u>&nbsp;untuk mengetahui account Anda, jika email ganti/lupa atau tidak menuliskan email di buku wisuda atau bermasalah dengan account silahkan meminta account (username dan password) ke tracer.study@polban.ac.id. Dan segera untuk melakukan pengubahan password.</p>\r\n\r\n<p>Untuk menghindari tidak dapat melanjutkan pengisian, mohon untuk melengkapi data di menu&nbsp;<strong>Profil -&gt; Edit Profil</strong></p>\r\n', '<p><em>Tracer Study&nbsp;</em>atau yang sering disebut sebagai survey alumni atau survey &ldquo;<em>follow up</em>&rdquo; adalah studi mengenai lulusan lembaga penyelenggara pendidikan tinggi. Studi ini mampu menyediakan berbagai informasi yang bermanfaat bagi kepentingan evaluasi hasil pendidikan tinggi dan selanjutnya dapat digunakan untuk penyempurnaan dan penjaminan kualitas lembaga pendidikan tinggi yang bersangkutan.&nbsp;<em>Tracer Study&nbsp;</em>&nbsp;juga bermanfaat dalam menyediakan informasi penting mengenai hubungan antara pendidikan tinggi dan dunia kerja professional, menilai relevansi pendidikan tinggi, informasi bagi pemangku kepentingan (<em>stakeholders</em>), dan kelengkapan persyaratan bagi akreditasi pendidikan tinggi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Perguruan tinggi perlu melaksanakan&nbsp;<em>Tracer Study&nbsp;</em>&nbsp;karena membutuhkan umpan balik dari alumni dalam usahanya untuk perbaikan sistem dan pengelolaan pendidikan. Perguruan tinggi di awal tahun ajaran menentukan arah kebijakan pendidikan tinggi dari masukkan berupa kondisi, pengalaman, dan motivasi mahasiswa baru yang masuk ke perguruan tinggi tersebut. Masukkan mengenai kondisi, pengalaman dan motivasi ini menentukan pula perguruan tinggi dalam menerapkan sistem dan pengelolaan pendidikan dalam hal pola/proses pengajaran dan pembelajaran, penelitian, praktikum, workshop, laboratorium, studio ataupun riset. Penerapan sistem pengajaran dan pembelajaran inipun akan dipengaruhi pula oleh kebijakan pendidikan yang ditetapkan oleh perguruan tinggi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hasil dari masukkan berupa kondisi, pengalaman dan motivasi mahasiswa, sistem dan kebijakan pendidikan di perguruan tinggi, dan proses pengajaran dan pembelajaran di perguruan tinggi akan membantu dalam membentuk karakter/kompetensi dari lulusan perguruan tinggi itu sendiri. Lulusan/alumni dari perguruan tinggi umumnya akan memiliki pengetahuan, kemampuan, motivasi dan kompetensi yang dibutuhkan untuk memasuki dunia kerja</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hasil dari pendidikan tinggi adalah pengetahuan, kemampuan dan kompetensi alumni perguruan tinggi yang dibutuhkan untuk memasuki dunia kerja. Hasil-hasil ini beserta kondisi saat alumni menjalani pekerjaan di awal karir mereka merupakan hal-hal yang dibutuhkan bagi perguruan tinggi untuk perbaikan sistem dan pengelolaan pendidikan. Kebutuhan untuk mengetahui rekam jejak alumni serta hubungan pendidikan tinggi dengan pekerjaan inilah yang menjadi konsep dasar dalam penelitian&nbsp;<em>Tracer Study</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada tahun 2016 Politeknik Negeri Bandung telah melakukan&nbsp;<em>Tracer Study&nbsp;</em>untuk mahasiswa yang lulus pada tahun 2014. Tracer study ini dilakukan secara online. Penyebaran informasi kepada alumni tentang alamat tautan untuk pengisian data dilakukan melalui email dan sms. Selanjutnya, alumni membuka alamat tautan tersebut, mengisi data yang diminta dan mengirimkan kuesioner yang telah diisi. Kuesioner berisi pertanyaan tentang data pribadi, penelusuran pekerjaan pertama dan saat ini, serta pertanyaan-pertanyaan seputar proses belajar mengajar semasa kuliah di Polban.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Tujuan&nbsp;<em>Tracer Study</em></h2>\r\n\r\n<p><em>Tracer Study</em>&nbsp;bertujuan untuk mengetahui hasil pendidikan dalam bentuk transisi dari dunia pendidikan tinggi ke dunia usaha dan industri, keluaran pendidikan berupa penilaian diri terhadap penguasaan dan pemerolehan kompetensi, proses pendidikan berupa evaluasi proses pembelajaran dan kontribusi pendidikan tinggi terhadap pemerolehan kompetensi serta input pendidikan berupa penggalian lebih lanjut terhadap informasi lulusan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Tracer Study</em>&nbsp;bagi POLBAN itu sendiri memiliki beberapa tujuan penting dalam pelaksanaannya. Tujuan itu antara lain:</p>\r\n\r\n<p>1. mengetahui keberadaan alumni Polban setelah tamat kuliah.<br />\r\n2. membangun data base alumni.<br />\r\n3. mengidentifikasi profil kompetensi alumni.<br />\r\n4. mengetahui relevansi pelaksanaan kurikulum dengan kebutuhan pasar kerja.<br />\r\n5. memenuhi kriteria akreditasi BAN-PT.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Manfaat&nbsp;<em>Tracer Study</em></h2>\r\n\r\n<p>Manfaat&nbsp;<em>Tracer Study</em>&nbsp;tidak terbatas pada perguruan tinggi saja, tetapi lebih jauh lagi dapat memberikan informasi penting mengenai hubungan antara dunia pendidikan tinggi dengan dunia usaha dan industri.&nbsp;<em>Tracer Study</em>&nbsp;dapat menyajikan informasi mendalam dan rinci mengenai kecocokan kerja baik horisontal (antar berbagai bidang ilmu) maupun vertikal (antar berbagai level/strata pendidikan). Dengan demikian,&nbsp;<em>Tracer Study</em>&nbsp;dapat ikut membantu mengatasi permasalahan kesenjangan kesempatan kerja dan upaya perbaikannya. Bagi perguruan tinggi, informasi mengenai kompetensi yang relevan bagi dunia usaha dan industri dapat membantu upaya perbaikan kurikulum dan sistem pembelajaran. Di sisi lain, dunia usaha dan industri dapat melihat ke dalam perguruan tinggi melalui&nbsp;<em>Tracer Study</em>, dan dengan demikian dapat menyiapkan diri dengan menyediakan pelatihan-pelatihan yang lebih relevan bagi sarjana pencari kerja baru.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Tracer Study&nbsp;</em>dilakukan untuk mendapatkan manfaat sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li>Sebagai database alumni yang terdata berdasarkan Program Studi (Prodi) dan angkatan (tahun masuk);</li>\r\n	<li>Sebagai masukan/informasi penting bagi pengembangan perguruan tinggi;</li>\r\n	<li>Sebagai alat evaluasi untuk melihat relevansi antara perguruan tinggi dengan dunia usaha dan industri;</li>\r\n	<li>Sebagai masukan bagi perbaikan kinerja dosen dan staf administrasi;</li>\r\n	<li>Sebagai masukan bagi perbaikan kurikulum;</li>\r\n	<li>Sebagai bahan evaluasi untuk mengikuti akreditasi internasional;</li>\r\n	<li>Sebagai bahan untuk membangun jaringan/<em>network</em>&nbsp;alumni.</li>\r\n</ul>\r\n', '<p><strong>Wakil Direktur Bidang Kemahasiswaan</strong></p>\r\n\r\n<p>Dr. Tomy Andrianto. S.S.T., M-M.Par.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Team&nbsp;<em>Tracer Study&nbsp;</em>&nbsp;POLBAN</strong></p>\r\n\r\n<p>Rony Pasonang Sihombing, S.T., M.Eng.</p>\r\n\r\n<p>Hanny Madiawati, S.S.T, M.T.</p>\r\n\r\n<p>Yeti Nugraheni, S.T., M.T.</p>\r\n\r\n<p>Asri Maspupah, S.S.T., M.T.</p>\r\n\r\n<p>Susilawati, S.T., M.Eng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gedung Direktorat Lantai Dasar</p>\r\n\r\n<p>Jl. Gegerkalong Hilir, Ciwaruga, Parongpong, Kabupaten Bandung Barat, Jawa Barat&nbsp;40012</p>\r\n\r\n<p>Telp: 022-2013789</p>\r\n\r\n<p>Fax: 022-2013889</p>\r\n\r\n<p>Email: tracer.study@polban.ac.id</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Surveyor Tahun 2024</strong></p>\r\n\r\n<p>Pada Tahun 2024 Tracer Study dilakukan kepada Alumni POLBAN yang lulus pada Tahun 2023.</p>\r\n\r\n<p>Adapun nama-nama&nbsp;<strong>surveyor</strong>&nbsp;yang diangkat untuk membantu meningkatkan jumlah data yang masuk adalah sebagai berikut:</p>\r\n');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `welcome_message`
--
ALTER TABLE `welcome_message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
