-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2020 at 03:48 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elfarian-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `slug`, `content`, `author`, `deleted_at`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'Perpanjangan WFH untuk ASN', 'perpanjangan-wfh-untuk-asn', '<p><strong>JAKARTA</strong> – Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PANRB) Tjahjo Kumolo telah menerbitkan Surat Edaran No. 57/2020 tertanggal 28 Mei 2020. SE tersebut mengatur perpanjangan pelaksanaan kerja dari rumah/<i>work from home</i> (WFH) bagi Aparatur Sipil Negara (ASN) hingga 4 Juni 2020. Kebijakan ini akan dievaluasi lebih lanjut sesuai kebutuhan.</p><p>Pejabat Pembina Kepegawaian (PPK) pada instansi pemerintah diminta untuk memastikan agar penyesuaian sistem kerja ini tidak mengganggu kelancaran penyelenggaraan pemerintah dan pelayanan kepada masyarakat.</p><p>Pada SE tersebut dijelaskan bahwa perpanjangan masa WFH bagi ASN ini memperhatikan arahan Presiden Joko Widodo untuk menyusun tatanan normal baru (<i>the new normal</i>) yang mendukung produktivitas kerja. Adanya tatanan kehidupan baru ini, pemerintah akan tetap memprioritaskan kesehatan dan keselamatan masyarakat.</p><p>Selain itu, Kementerian PANRB tetap berpedoman pada Keputusan Presiden No. 11/2020 tentang Penetapan Kedaruratan Kesehatan Masyarakat <i>Corona Virus Disease </i>2019 (Covid-19), dan Keputusan Presiden No. 12/2020 tentang Penetapan Bencana Nonalam Penyebaran Covid-19 sebagai bencana nasional.</p><p>SE Menteri PANRB No. 19/2020 tentang Penyesuaian Sistem Kerja Aparatur Sipil Negara dalam Upaya Pencegahan Penyebaran Covid-19 di Lingkungan Instansi Pemerintah telah beberapa kali diubah terakhir dengan SE Menteri PANRB No. 54/2020, masih tetap berlaku dan merupakan satu kesatuan dengan SE Menteri PANRB No. 57/2020 ini. <i><strong>(rr/HUMAS MENPANRB)</strong></i></p>', 'Elfarian Dela Virdausa', NULL, '2020-07-27 20:51:38', '2020-07-27 21:20:03', 1),
(3, 'Juventus Juara Serie A, Maurizio Sarri Pecahkan Rekor Unik', 'juventus-juara-serie-a-maurizio-sarri-pecahkan-rekor-unik', '<p><strong>Turin</strong> -</p><p><a href=\"https://www.detik.com/tag/maurizio-sarri\"><strong>Maurizio Sarri</strong></a> memecahkan rekor unik saat membawa <a href=\"https://www.detik.com/tag/juventus\"><strong>Juventus</strong></a> meraih Scudetto musim ini. Dia kini menjadi pelatih tertua yang berhasil menjuarai <a href=\"https://www.detik.com/tag/liga-italia\"><strong>Liga Italia</strong></a>.</p><p>Juventus menyegel gelar juara <a href=\"https://www.detik.com/tag/serie-a\"><strong>Serie A</strong></a> 2019/2020 di pekan ke-36 saat menghadapi Sampdoria di Allianz Stadium, Senin (27/7/2020) dini hari WIB. <i>Bianconeri</i> menang 2-0 via gol yang dicetak <a href=\"https://www.detik.com/tag/cristiano-ronaldo\"><strong>Cristiano Ronaldo</strong></a> dan Federico Bernardeschi.</p><p>Kemenangan itu membuat Juventus kini telah mengoleksi 83 poin dan unggul tujuh angka dari Inter Milan di posisi kedua. Dengan dua laga tersisa, <i>Nerazzurri</i> sudah tidak mungkin lagi bisa mengejar Si Nyonya Tua.</p><p>Pencapaian kali ini menjadi gelar Liga Italia ke-36 buat Juventus sepanjang sejarah klub, sekaligus titel liga kesembilan yang mereka raih secara beruntun sejak musim 2011/2012. Sementara itu bagi Sarri, Scudetto ini adalah yang pertama kali diperoleh sepanjang karier kepelatihannya.</p><p>Melansir <i>La Gazzetta dello Sport</i>, pencapaian Juventus musim ini membuat Sarri mencatatkan namanya di buku rekor Serie A. Eks manajer Chelsea itu kini dinobatkan sebagai pelatih paling tua yang pernah membawa timnya meraih juara di Liga Italia.</p><p>Sarri mengunci gelar Scudetto bersama Juventus pada usia 61 tahun 5 bulan dan 19 hari. Dia mengalahkan rekor sebelumnya milik Nils Liedholm kala membawa AS Roma juara Serie A musim 1982/1983 di umur 60 tahun 8 bulan 21 hari.</p>', 'Elfarian Dela Virdausa', NULL, '2020-07-28 02:21:13', '2020-07-28 02:21:13', 3),
(4, 'Kasus Virus Corona Indonesia per 28 Juli 2020 Naik Jadi 102.051 Orang', 'kasus-virus-corona-indonesia-per-28-juli-2020-naik-jadi-102051-orang', '<p><strong>PIKIRAN RAKYAT</strong> - Update terbaru jumlah <a href=\"https://www.pikiran-rakyat.com/tag/kasus\">kasus</a> <a href=\"https://www.pikiran-rakyat.com/tag/virus\">virus</a> corona (Covid-19) di <a href=\"https://www.pikiran-rakyat.com/tag/Indonesia\">Indonesia</a> kembali diunggah pada sore hari ini.</p><p>Dikutip <strong>Pikiran-Rakyat.com</strong> dari situs Covid19.go.id, jumlah <a href=\"https://www.pikiran-rakyat.com/tag/kasus\">kasus</a> per Selasa 28 Juli 2020 pukul 15.30 mencapai orang.</p><p>Angka ini didapat karena penambahan pasien <a href=\"https://www.pikiran-rakyat.com/tag/positif\">positif</a> harian dalam 24 jam mencapai 1.748 orang.</p><p>Sementara itu, untuk pasien <a href=\"https://www.pikiran-rakyat.com/tag/sembuh\">sembuh</a> mengalami pertambahan sebanyak 2.366 orang.</p><p>Akumulasi pasien yang <a href=\"https://www.pikiran-rakyat.com/tag/sembuh\">sembuh</a> dari Covid-19 hari ini mencapai 60.539 orang atau sekitar 59 persen.</p><p>Adapun pasien <a href=\"https://www.pikiran-rakyat.com/tag/meninggal\">meninggal</a> dunia mengalami kenaikan menjadi 63 orang, dibandingkan hari sebelumnya.</p>', 'Elfarian Dela Virdausa', NULL, '2020-07-28 02:26:13', '2020-07-28 02:26:13', 2),
(5, 'Sergio Ramos Minta Naik Gaji, Mau Lebih Banyak dari Bale', 'sergio-ramos-minta-naik-gaji-mau-lebih-banyak-dari-bale', '<p><strong>Madrid</strong> - <a href=\"https://www.detik.com/tag/sergio-ramos\"><strong>Sergio Ramos</strong></a> akan habis kontraknya di Real Madrid tahun 2021 mendatang. Sang kapten mau-mau saja perpanjang kontrak asal gajinya dinaikkan.</p><p>Sergio Ramos adalah ikonnya <a href=\"https://www.detik.com/tag/real-madrid\"><strong>Real Madrid. </strong></a>Sejak diboyong dari Sevilla di tahun 2005, perannya mengawal lini pertahanan tak tergantikan.</p><p>Sempat diplot sebagai bek kanan, tapi akhirnya Sergio Ramos menjelma jadi bek tengah yang kukuh. Ban kapten pun melingkar di lengannya.</p><p>Dirinya sudah mengemas 650 penampilan bersama Real Madrid. Hebatnya lagi, Ramos begitu subur dengan torehan 97 gol!</p><p>Kontraknya di <a href=\"https://www.detik.com/tag/real-madrid\"><strong>Real Madrid</strong></a> akan habis pada musim panas tahun 2021 mendatang. Dirinya hingga kini belum melakukan perpanjangan kontrak.</p><p>Meski sudah berusia 34 tahun, Ramos dinilai masih menjadi pemain kunci Los Blancos. Urusan trofi, dirinya sudah mempersembahkan lima trofi Laliga dan empat trofi Liga Champions.</p><p>Dilansir <i>The Sun</i>, <a href=\"https://www.detik.com/tag/sergio-ramos\"><strong>Sergio Ramos</strong></a> mau-mau saja menambah kontraknya di Real Madrid. Tapi, ada syaratnya.</p><p>Sergio Ramos minta kenaikan gaji. Selama ini, gajinya sebesar 210 paun atau setara Rp 3,9 miliar per pekan.</p><p>Nah, Ramos disinyalir sudah dilirik oleh salah satu klub China. Klub tersebut berani memberi Ramos gaji sebesar 385 ribu paun atau setara Rp 7,2 miliar per pekan!</p><p>Gaji Sergio Ramos di Real Madrid sendiri masih kalah dibandingkan <a href=\"https://www.detik.com/tag/gareth-bale\"><strong>Gareth Bale.</strong></a> Gaji Bale sepekan sebesar 300 ribu paun atau setara Rp 5 miliar.</p><p>Dikabarkan, Sergio Ramos meminta kenaikan gaji hingga sebesar 315 ribu paun atau setara nyaris Rp 6 miliar per pekan. Sanggupkah, Real Madrid?</p>', 'Manuel samedo', NULL, '2020-07-30 05:50:35', '2020-07-30 05:50:35', 3);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_galleries`
--

CREATE TABLE `artikel_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `artikels_id` int NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel_galleries`
--

INSERT INTO `artikel_galleries` (`id`, `artikels_id`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'assets/product/VF6Pu1st4CKxS0G6sP8baArsxugKkOYESZ7YA5LE.jpeg', NULL, '2020-07-27 21:42:52', '2020-07-27 21:42:52'),
(2, 2, 'assets/product/U21KlI0mHnEnwzCeDBmN9KgeqTlEbA8OeTIjOakD.jpeg', NULL, '2020-07-28 00:26:14', '2020-07-28 00:34:01'),
(3, 3, 'assets/product/QulY9eqPhC0uzE86f14UNj7pZHJYRApu6C3NY70J.jpeg', NULL, '2020-07-28 02:26:31', '2020-07-28 02:26:31'),
(4, 4, 'assets/product/FKoQZKlp2JKH2DCry2EP7Zi2od1MyK2rx6nhCQ71.jpeg', NULL, '2020-07-28 02:26:45', '2020-07-28 02:26:45'),
(5, 5, 'assets/product/UFSNAFC44OioX5rFX2GtnrYxmvCLfvpHqK3623b0.jpeg', NULL, '2020-07-30 05:51:50', '2020-07-30 05:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Hiburan', NULL, '2020-07-28 01:52:52', '2020-07-28 01:56:24'),
(2, 'Berita', NULL, '2020-07-28 01:56:58', '2020-07-28 01:56:58'),
(3, 'Olahraga', NULL, '2020-07-28 02:38:55', '2020-07-28 02:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `artikels_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `artikels_id`, `name`, `email`, `comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'agil', 'agil@gmail.com', 'semoga kita dijauhkan dari korona', NULL, '2020-07-29 04:55:00', '2020-07-29 21:57:01'),
(2, 4, 'farhan', 'farhan@gmail.com', 'gaje', NULL, '2020-07-29 22:44:18', '2020-07-29 22:44:18'),
(3, 2, 'kari', 'karim@gmail.com', 'ya ampun wfh diperpanjang bagaimana nasib anakku...', NULL, '2020-07-29 22:45:56', '2020-07-29 22:45:56'),
(4, 3, 'ronaldo', 'ronaldo@gmail.com', 'forza juve!!!!', NULL, '2020-07-29 23:06:18', '2020-07-29 23:06:18'),
(5, 5, 'bale', 'bale@gmail.com', 'matre lu mos... lu gatau gol salto!!!', NULL, '2020-07-30 05:52:43', '2020-07-30 05:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_28_005911_create_artikels_table', 1),
(5, '2020_07_28_012620_create_artikel_galleries_table', 1),
(6, '2020_07_28_080259_create_categories_table', 2),
(7, '2020_07_28_080923_add_category_id_to_artikels_table', 3),
(8, '2020_07_30_040009_create_comments_table', 4);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ELFARIAN DELA VIRDAUSA', 'elfarianvirdausa93@gmail.com', NULL, '$2y$10$wXvDl0e9b9jAYv1IAUvnAewz6SBiTFbkWDrFDMe9ZhtxkRuAh9woq', NULL, '2020-07-27 19:18:09', '2020-07-27 19:18:09'),
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$9RWJwwgaorKYWd8m783uh.sWLlYfEahyib2rcLNN30/4/FwnYObpm', NULL, '2020-07-30 20:43:52', '2020-07-30 20:43:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel_galleries`
--
ALTER TABLE `artikel_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artikel_galleries`
--
ALTER TABLE `artikel_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
