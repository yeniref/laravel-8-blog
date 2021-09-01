-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 01 Eyl 2021, 04:05:04
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Genel', 'genel', '<p>Genel Kategorisi falan ilan</p>', 'uploads/kategoriler/genel-20210823162420.png', '2021-08-23 13:24:20', '2021-08-23 13:24:20'),
(2, 'Servis', 'servis', '<p>Servis Kategorisi falan filan ....</p>', 'uploads/kategoriler/servis-20210829174856.jpg', '2021-08-24 04:08:17', '2021-08-29 14:48:56');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `extras`
--

DROP TABLE IF EXISTS `extras`;
CREATE TABLE IF NOT EXISTS `extras` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `other_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `extras`
--

INSERT INTO `extras` (`id`, `other_id`, `area`, `value`, `created_at`, `updated_at`) VALUES
(1, '1', 'post_category', '1', '2021-08-23 13:25:02', '2021-08-23 13:25:02'),
(2, '1', 'post_tag', 'etiket 1', '2021-08-23 13:25:02', '2021-08-26 07:53:03'),
(3, '1', 'post_tag', 'etiket 2', '2021-08-23 13:25:02', '2021-08-26 07:53:03'),
(4, '2', 'post_category', '2', '2021-08-24 04:11:14', '2021-08-24 04:11:14'),
(5, '2', 'post_tag', 'logo etiket', '2021-08-24 04:11:14', '2021-08-31 09:47:21'),
(6, '2', 'post_tag', 'logo marka', '2021-08-24 04:11:14', '2021-08-31 09:47:21'),
(24, '1', 'sabit_yazi', 'on', '2021-08-25 08:29:11', '2021-08-25 08:29:11'),
(8, '3', 'post_tag', 'aaaaaaaa', '2021-08-24 05:54:07', '2021-08-26 07:52:38'),
(9, '3', 'post_tag', 'aaaaaaaaaaa', '2021-08-24 05:54:07', '2021-08-26 07:52:38'),
(25, '3', 'post_category', '1', '2021-08-25 09:57:35', '2021-08-25 09:57:35'),
(26, '3', 'sabit_yazi', 'on', '2021-08-26 07:52:38', '2021-08-26 07:52:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `link`, `order`, `created_at`, `updated_at`) VALUES
(1, 0, 'Anasayfa', 'http://localhost/', '0', '2021-08-23 12:23:56', '2021-08-23 12:45:10'),
(3, 0, 'Yeni Menü', '/', '1', '2021-08-23 13:10:32', '2021-08-23 13:10:32'),
(4, 3, 'Dijital Ajans', 'http://localhost/detay/dijital-ajans', '0', '2021-08-23 13:41:34', '2021-08-23 13:41:34'),
(5, 0, 'Servis', 'http://localhost/kategori/servis', '2', '2021-08-23 14:28:50', '2021-08-24 13:20:38'),
(6, 5, 'Logo', '#', '0', '2021-08-23 14:30:21', '2021-08-23 20:16:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(37, '2019_08_19_000000_create_failed_jobs_table', 1),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2021_08_14_181959_create_sessions_table', 1),
(40, '2021_08_15_112749_posts', 1),
(41, '2021_08_18_165956_category', 1),
(42, '2021_08_18_235143_extras', 1),
(43, '2021_08_23_082952_create_menus_table', 1),
(44, '2021_08_23_152050_menu', 2),
(45, '2021_08_23_152313_menus', 3),
(46, '2021_08_29_204813_create_settings_table', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dijital Ajans', 'dijital-ajans', '<p>Dijital dünyanın tüm yenilikçi çözümlerini işinizi büyütmek için kullanıyoruz. Bigbang Dijital, performans odaklı ve alanında uzman ekibiyle, hizmet verdiği müşterilerinin dijital dünyada rakipleriyle fark yaratmasını ve bu doğrultuda daha fazla potansiyel müşteriye ulaşmasını amaçlayan yeni nesil bir dijital ajanstır. Tamamen kişiye ve markaya özel gerçekleştirdiği sektör analizi ile yaratıcı çözümler üreten Bigbang Dijital, müşterilerinin ihtiyaçlarını saptayarak bu doğrultuda çalışmalarıyla fark yaratmaktadır.</p>', 'uploads/yazilar/dijital-ajans-20210823162502.png', '2021-08-23 13:25:02', '2021-08-23 13:25:02'),
(2, 'Logo ve Markalaşma', 'logo-ve-markalasma', '<p><img alt=\"\" src=\"http://localhost/uploads/yazilar/indir_1630414011.jpg\" style=\"float:left; height:225px; width:225px\" /><strong>Pellentesque sed pellentesque felis</strong>. Nam tristique ipsum eget magna scelerisque interdum. Fusce at lorem eget lacus congue tristique.</p>', 'uploads/yazilar/logo-ve-markalasma-20210824071114.png', '2021-08-24 04:11:14', '2021-08-31 09:47:21'),
(3, 'Website', 'website', '<p>Website yapma falan filan</p>\r\n\r\n<p>Morbi ullamcorper ipsum ipsum, ut dictum mi hendrerit sit amet. Aliquam tincidunt rhoncus ligula, vel porta ante pulvinar eget suspendisse. Pay-Per-Click Donec eget ex quam. Aenean id convallis mi, vitae tincidunt leo. Ut bibendum, nunc</p>', 'uploads/yazilar/website-20210824085407.png', '2021-08-24 05:54:07', '2021-08-24 14:26:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WRbKXkBLd6ejKyoEwEh63jFNfWQ4RD2JDDsa04Yh', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHhIWWJFNklJc3lPem1qQVpyU0tYdGU1U20wcWVDdXNZSTNxbWt5USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431472),
('ABn61injpZAS8SsL3kMTezQNriAdGCIk9gglFrwK', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVNiNFJQWEM5ZzluaEpQeEN1SGR4ODB0UXZsc3dtSXhHbjY1TkxRNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431546),
('SZPW0daUT34Ju7ISAL3qIwJU3ZAqiG0TBwnWK0rq', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEt6TTVjMFRpV05vTUE3TVNWRTZpblNRamQ5akt3V3lBMk1YNHg3MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431577),
('f1RzU1m3KW2Mp9UjVSv7dYlBH5QvIPaEh4rc3Nns', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkpwTlJPVG1nSmtmTHdvbk9odnpYQTB4WVpicW1GeEJzTnBkNlo1aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431600),
('MG2faPhfLH1cSFIGBYWc2ymznIFboF82DlQvnYhQ', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3o5Z2U1Q2oza1pQZTRVSGhyN0lBOW1ZSVgwMHcyOUFYYVJIU2JYUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431615),
('mRXQHHFLnHFWntezW26eI6cE3lA0E7CQRHNMsiLv', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiek0yeWZYeHJXZ2dYSFU5emFDbUplamprQ25FZWQxV2xCa01xcVpJSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431791),
('aRjmZqlkmVAUfU0LmNdjhArDP0zeAlQ0UJ863zZu', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXNobHJGUkF3VnAzdUJZM1dhanFyOHlISlFadGhWUGtvSmc3cG03OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431894),
('rjIPgdkw0Kb4orWInRn5eq8rYqML8QttnmigdQoL', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQk50R1F0OXJWa3hDcVBPS2dCREhpYThFM21hd1Y3VEtMejNMMnlqYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431906),
('hpfAlFs29TiHfVIlcQjvOWN7Yr03h6zceQ0qAZQY', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1hxeU16emQydmVkQ0lVazFsZFpoTzRwbjdrWXM3clVwQnhTUmgweiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431941),
('HKDgSQ9yH95ly194V0Ciew6bBu5vYJiRDCCogMdO', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3dJVWlGYUxoQ0o0c0NlTUt5ZVdRbG9FZjNsaUxyQ2ZwQjhaUG51aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431996),
('0cUdMjGxdkZS8uNIAOFUZ0CtOEvmBKJuaJZB5ZX6', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFdyWVZNeEpvUWh1RjVSSFhMWDlvZ1NWa2tsNU9wbm40eHVKcEREcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630432021),
('Sifoc2xWgGdMU2VsP72B59sgiaM9PCcTYY69REhe', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkIwUDRzdUpycTZlb1pzRXN3NlNMMW1VNXRabkpxWVRmanFNcDZFaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630432029),
('tVHcrSJEjITZwArZBIvep6GFfCPfq1rDItXAXpIz', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2w5dWxUT3lNUUd2azFjRFBIcFIwZUZDenRmT05BWWdZQkhBc2E0WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630432033),
('KP8BZpHJmZ1rAyHNnfcIdAaCGO3zC4QlR6EpchZF', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHlaVmNQTWZscmxSRkhVcjBaVTRZeVNYNzdURzJlQjhEYU9hR251SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630432040),
('7LKSODwhRRCcWb8rLXHk9mCVPtNmDCP3J1JFeWpl', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid3F2TnMyeE9aTnAwdUVXeEZLUXdsOUY5aHdhN29iWFdxQXV5MWFDRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630432051),
('GAsc3OoS7kd7LNjKwMoz5Yhd1uxzp4GYpJZExbsw', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiemVmVHlkMURNaGJXdE9QUklNckw2Sk80OWlBeDhYdFFpQUVSa1VhSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630432186),
('Mvop6UVA7xQp3jGS4IHgsCZ375CIZz6PygX1sMcz', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnJKdW84MjVsR3NmZHA2c3BHZDBaTEJxb3UzRUNEaDlHdWtnSGp1RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630429983),
('3spDv1kHaCoCK6oTJSjRVDT0NgykHRHFvWaz1PQ6', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTlKbmlkd2kxSXVxYXdzSkFFUGtmWUdCZ1VJdFZPdUlMdWpBcUNaUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630432186),
('0NkaoEdKLsQzFBQ9HJtDhp3QHvJwkdjb9aIz3Ua1', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnIxRU1ZWlR5NjF2aTRnekgzVjZpRG5EMjVQeDNkTjJoeU9OZk9ibiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430014),
('3h278Vo1gKo45tkKJcXp5gLglZbHwQTBvJeTyFi5', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3g4MEtZTWtRNzBRaVF6NHJXMUpBaGlacmdkemZKVUlkUlBUSzVxVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430167),
('UyqRHYlCC3vqwGeK35ZEjHk5UCA7LGkLx1yKbUYz', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDA1VTZVeThBVzNlN1BKbEpBZ3lOMklpOGc0cWgzWXNWVnA5WjVBayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430175),
('RhzZNt4eVkZXh1zlW3zw89otXtllkruWDqhN7iJ3', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEJteE56OUEzOVhJMEE3YTdTTjZDSDVndDZTR3kyajBMaUVlMWRNVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430183),
('xJhxHbRdHMgVDz4PZ17xoJzLMy36OOlpTR31VCsR', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjZFcnlGN09wR3M4d2daRmRhYkdoQmJ6eTJxWTB2WmZ5Z09qbHFYUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430322),
('ZShVgzlqmVPBdkWkRgwQRnK4UCT5Q9FmcXIVNGYr', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVp5TlVJeGlQYTdqN3I3S0dGQlZha1NTcWQ2Q09nOVplNlJ6bDVreiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430345),
('983cpo2Gx3vsPSOZAtbTucZGD0OwVth4cbW9UZZ6', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieThRRzZtTUVha3RXamt5SUJHc0hEcms2WUN6Z1h5TW01cnI1U0xTaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430528),
('XudAtGZQYGPFenbVmVJwbgOIjnQSgHihQB1jcZKp', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid09xYTVCNHdOZDhXcDhSc2ljSkN3ZFZTVDF2cmRvV3JGcGlCU1VPRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430540),
('zRW1enWCJNCv2J3hBdGU1CrOzXXhKzqdysu6K1qo', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlprVzVQc1g2RHhzem13QWZERjlJeTlBU2luYURweG1ISnhrbVFhQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430597),
('BVluFRexQpD498huano4VpLcAEk0sd8ccGR97XPx', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXdNRUxtd1paSFlkSVRQQkR2MTdMeWswZnF5WmFpTUdjZmFWUVVvQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430685),
('DWsXWgbEelvLRduhmqvS25hStoOYgBNXldnV6gsg', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1ZFVkVHSm52RThQczY5Mmo4SmJ0YnJFS2YxMXlsc3BtdmZrUktkTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430694),
('I3PYXQWoQck9QJrAafIxyKh2zkui1GBKHyuGi5jY', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajJsR0VBNG1NVVlZWTV2Q0hsdnptdzZyRmhrQnpNYU1rN3duQ2FTQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430804),
('znnTnPS9KWvvCprRhTQzZxLoY2zCVaw3z6EpUm2A', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXNNWm1OOUtSQ3NveDZJVU5Tamd2aExlZFQxQTNwNDluZWVxWlhTdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430867),
('HtRtSqhhAouh2bGJzWEB8Gw0AR8scwTqv41iCwyp', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkF5eWVOWktVd1RVbW5vbWxUTTNSN3JUSWo4V0RscEN2clptTlN3ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430948),
('K0ifsofwgViZ1WMTL31th4xxbWOaV4GziwBWHhAm', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGtDTDMyenFMRmk3ZFJab05OSXAwdUpyeEtXeVZNWkNGajk4NkdFayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430965),
('foGLWs2TS7jesPPQnfkyZKXk2WWjS5OA6qPP9954', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVpnSThTNklHMzZqeUVCYW5BUm5oS2FmRzNEcHJ6TGo5WG9YZ3BpdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430999),
('HoZWsYUo27TunOoxYRDZRS5PXHFfZEaq4bwbHdzA', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjRsNHRqZ0JJaWxUV3JSNVVzWVl1Mnp4NHJCenZ0dWc4bFgycndzMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431032),
('AbVAkx5HtxVnX4pVkatsljVQcBf1XhvB2HXMSde7', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVpIbVhORE04Tnp6MGJpNVFjMFJSTTlRMWQwdGljNnhOVlhIYXJmNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431076),
('sZb1t6rfE5oFOvcwtzANEHNjBX08AcRCcKIewh0Y', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOE9XNnF2MGtwc1JXUTA2cnFKamdJaEhqZDhJNjJhNDNVTTF6aTY4VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431105),
('Go5WgakfvO05UoPnvpe8l0ivpn3tDUk8NJhwPpUu', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHZlaU5JdTFGeURkbzNnNElPYXJOZENkQjNFd0NiUEdWMkRUR0tWbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431126),
('LbLY2IQaEhsi421wvqMHe1uMpChTuAtkvtmZK8Zz', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmdCNzZRUWZpZWczczZQVDQ5ZkFSdDNXTWJwNVowclladGh0ZzNLaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431133),
('DlG3dJpiBYcWOkuCwneTNUxX758ImcARYQ5lzacj', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1ZnNGQ1QmJSa0NHMVlPYW1qMExIQWhkYmY5WUM3azZ5STBqQ0hYcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431154),
('mbURv9pRO0jSlsuFNusrNJf1GrqUGeayvhm9xLWt', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGwxd0pjZWZ2SEJIaEdNTkV6VDMxTzEyRmprdHpIcXNHU3dtTVNBVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431161),
('XDRaKjmQDrvmKMsuLpkT2nc6LXC8EEXGR2D5fJPr', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickw0MFRzS2pWUkFheUMzUlU1TFgyNURsRnBVRlhuVmRLNkZsb3ZXSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431180),
('8vjVctivmw90mae8FTfWnseeZtUUz5IshbDwwU2I', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTldXcWU3dFMxYlRoNXI4SXYzeU92SU5OcHJhUzVMUTJqaG8yeHRhTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431384),
('PQti5gw5vI3OKwy2kK4vBjiWhcF46MH0d6XLxbwM', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXIyM1l3ZW5paE1TeVM3aXhCYmt3UFB3bTc2bE5UZzA2SllEQzdyWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431396),
('zELh6j9GQbfR9vSpXw86JQWyCT4gA7MwtL3F1wRp', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2R2UGZKZ09xMjNVRXdYY2ZjdjVYa1k1UTRmT0Z5VlZoM1pYbzJOVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431428),
('Jvh0eIgETq8HbTNnH3Jj5kBxTrh2xCXRATwmw0lC', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUsybWJRRzl3RndFN0VSQkFidzBOR01qVU9aZTRKcEZrUWN1aDVZRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431445),
('fZX9tf1eqekNOi7gjh83uSRklVVk6k4IBpqmed97', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzVTMXdodGhPNERZNWdWeEdubExacUU5YnJwcGFDSzFkWGlMVEtCMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630431459),
('urjtAe3k6VymY1oprAw43H6FTDjUfo0wrvzWa992', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHVmb3BlSlFQUmkzUmdlZUIwbGZrUGhxOGprVUM3MVpwRjZTOEVNZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430044),
('h227vpTS7s2jPzn4BDUfDNXUbuqBxhbFWSQKYCVe', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGVUQVVDTjRQWkI5MFBHRnRCMjlnTTFxSHByYWNOSWp4V3QwUnZySSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9kYWx0b255YXppbGltLmRlbW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630430093);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `area`, `value`, `created_at`, `updated_at`) VALUES
(3, 'site_url', 'http://localhost', '2021-08-30 16:43:51', '2021-08-30 16:44:35'),
(4, 'site_adi', 'Dalt10 Yazılım', '2021-08-30 16:45:04', '2021-08-30 16:45:04'),
(5, 'site_aciklama', 'Site Açıklaması falan filan', '2021-08-31 05:58:37', '2021-08-31 05:58:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Murat Al', 'yeni-ref@outlook.com', '1', NULL, '$2y$10$ix7Um7R2qTnzc.B6vLqLb.X199XzRo4PVjwVWwoeVNr71q8LpoZtq', NULL, NULL, NULL, NULL, NULL, '2021-08-23 12:10:38', '2021-08-23 12:10:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
