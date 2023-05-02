-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2022 at 02:23 PM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zohrebir_arda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `eans`
--

CREATE TABLE `eans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `art` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `VPE` int(11) NOT NULL,
  `code_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_VPE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eans`
--

INSERT INTO `eans` (`id`, `art`, `title`, `category_id`, `VPE`, `code_product`, `code_VPE`, `created_at`, `updated_at`) VALUES
(1, '1218', 'Premium Safran-Fäden (Sargol)-1,0g', 3, 12, '4270000201318', '4270000201325', '2021-12-13 03:51:31', '2021-12-13 04:09:09'),
(2, '1232', 'Premium Safran-Fäden (Sargol)-0,5g', 3, 12, '4270000201332', '4270000201349', '2021-12-13 04:04:40', '2021-12-13 04:07:19'),
(3, '7810', 'Premium Safran-fein gemahlen-(100% Sargol)-0,5g', 3, 12, '4270000678103', '4270000678110', '2021-12-13 04:05:53', '2021-12-13 04:08:35'),
(4, '1287', 'Safran-fein gemahlen (Konj)-1,0 g', 3, 12, '4270000201387', '4270000678158', '2021-12-13 04:06:58', '2021-12-13 04:06:58'),
(5, '4126', 'Knusper  Tomaten- 12g -Aus 200g- frischen', 5, 12, '4270001074126', '4260666320065', '2021-12-13 04:10:51', '2021-12-13 04:46:52'),
(6, '4133', 'Knusper Zucchini -12g- Aus 180g- frischen', 5, 12, '4270001074133', '4260666320072', '2021-12-13 04:12:14', '2021-12-13 04:47:14'),
(7, '4140', 'Knusper Okra -12g- Aus 220g -frischen', 5, 12, '4270001074140', '4260666320089', '2021-12-13 04:13:04', '2021-12-13 04:47:34'),
(9, '1195', 'Knusper Pilze -15g -Aus 250g- frischen', 5, 12, '4260666320195', '4260666320096', '2021-12-13 04:15:13', '2021-12-13 04:49:38'),
(10, '2401', 'Knusper -Apfel 20g -Aus 200g- frischen', 6, 12, '4260666320294', '4260666320348', '2021-12-13 04:16:20', '2021-12-13 04:16:20'),
(11, '2403', 'Knusper -Kiwi 20g- Aus 200g -frischen', 6, 12, '4260666320317', '4260666320362', '2021-12-13 04:17:25', '2021-12-13 04:17:25'),
(12, '2404', 'Knusper -Blutorange 20g- Aus 200g -frischen', 6, 12, '4260666320324', '4260666320379', '2021-12-13 04:18:22', '2021-12-13 04:18:22'),
(13, '2405', 'Knusper -Pfirsich 20g- Aus 200g -frischen', 6, 12, '4260666320331', '4260666320386', '2021-12-13 04:19:07', '2021-12-13 04:19:07'),
(14, '1256', 'Damaszener -Rosenknospen -20g', 4, 10, '4270000201356', '4270000678127', '2021-12-13 04:20:01', '2021-12-13 04:20:01'),
(15, '1263', 'Damaszener- Rosenblätter- 10g', 4, 10, '4270000201363', '4270000678134', '2021-12-13 04:20:47', '2021-12-13 04:20:47');

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
-- Table structure for table `gallery_products`
--

CREATE TABLE `gallery_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `main` int(11) NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_products`
--

INSERT INTO `gallery_products` (`id`, `product_id`, `main`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'product/image/1621404028-freeze-apple.jpg', '2021-12-06 05:45:59', '2021-12-06 05:51:17'),
(2, 1, 0, 'product/image/1621404028-freeze-apple-back-pack.jpg', '2021-12-06 05:45:59', '2021-12-06 05:45:59'),
(3, 1, 1, 'product/image/1621404028-freeze-apple-pack.jpg', '2021-12-06 05:46:00', '2021-12-06 05:51:18'),
(4, 2, 0, 'product/image/1621404241-freeze-kiwi.jpg', '2021-12-06 05:50:54', '2021-12-06 07:43:01'),
(5, 2, 0, 'product/image/1621404241-freeze-kiwi-back-pack.jpg', '2021-12-06 05:50:54', '2021-12-06 05:50:54'),
(6, 2, 1, 'product/image/1621404241-freeze-kiwi-pack.jpg', '2021-12-06 05:50:54', '2021-12-06 07:43:01'),
(7, 3, 0, 'product/image/1621404298-freeze-orange.jpg', '2021-12-06 05:54:51', '2021-12-06 07:43:10'),
(8, 3, 0, 'product/image/1621404298-freeze-orange-back-pack.jpg', '2021-12-06 05:54:51', '2021-12-06 05:54:51'),
(9, 3, 1, 'product/image/1621404298-freeze-orange-pack.jpg', '2021-12-06 05:54:52', '2021-12-06 07:43:10'),
(10, 4, 0, 'product/image/1621404358-freeze-peach.jpg', '2021-12-06 05:57:51', '2021-12-06 07:43:17'),
(11, 4, 0, 'product/image/1621404358-freeze-peach-back-pack.jpg', '2021-12-06 05:57:51', '2021-12-06 05:57:51'),
(12, 4, 1, 'product/image/1621404358-freeze-peach-pack.jpg', '2021-12-06 05:57:51', '2021-12-06 07:43:17'),
(13, 5, 0, 'product/image/1621404440-freeze-mushroom.jpg', '2021-12-06 06:01:12', '2021-12-12 03:46:14'),
(14, 5, 0, 'product/image/1621404440-freeze-mushroom-back-pack.jpg', '2021-12-06 06:01:12', '2021-12-06 06:01:12'),
(15, 5, 1, 'product/image/1621404440-freeze-mushroom-pack.jpg', '2021-12-06 06:01:12', '2021-12-12 03:46:16'),
(16, 6, 0, 'product/image/1621404510-freeze-okra.jpg', '2021-12-06 06:04:13', '2021-12-06 06:04:13'),
(17, 6, 0, 'product/image/1621404510-freeze-okra-back-pack.jpg', '2021-12-06 06:04:13', '2021-12-06 06:04:13'),
(18, 6, 1, 'product/image/1621404510-freeze-okra-pack.jpg', '2021-12-06 06:04:13', '2021-12-12 03:46:31'),
(19, 7, 0, 'product/image/1621404574-freeze-tomato.jpg', '2021-12-06 07:04:20', '2021-12-12 03:47:06'),
(20, 7, 0, 'product/image/1621404574-freeze-tomato-back-pack.jpg', '2021-12-06 07:04:21', '2021-12-06 07:04:21'),
(21, 7, 1, 'product/image/1621404574-freeze-tomato-pack.jpg', '2021-12-06 07:04:21', '2021-12-12 03:47:06'),
(22, 8, 0, 'product/image/1621404644-freeze-zucchini.jpg', '2021-12-06 07:08:46', '2021-12-12 03:47:14'),
(23, 8, 0, 'product/image/1621404644-freeze-zucchini-back-pack.jpg', '2021-12-06 07:08:46', '2021-12-06 07:08:46'),
(24, 8, 1, 'product/image/1621404644-freeze-zucchini-pack.jpg', '2021-12-06 07:08:47', '2021-12-12 03:47:14'),
(25, 9, 0, 'product/image/1621499863-dried-rose.jpg', '2021-12-06 17:34:20', '2021-12-12 04:47:40'),
(26, 9, 0, 'product/image/1621499863-dried-rose-back.jpg', '2021-12-06 17:34:20', '2021-12-06 17:34:20'),
(27, 9, 1, 'product/image/Damaszener Rosenknospen.jpg', '2021-12-06 17:34:21', '2021-12-12 04:47:40'),
(28, 9, 0, 'product/image/Damaszener-Rosenblätter.jpg', '2021-12-06 17:34:21', '2021-12-06 17:34:21'),
(29, 9, 0, 'product/image/rose-patels.jpg', '2021-12-06 17:34:21', '2021-12-06 17:34:21'),
(30, 10, 0, 'product/image/saffron-back.jpg', '2021-12-06 17:36:10', '2021-12-12 04:46:54'),
(31, 10, 1, 'product/image/saffron-pack.jpg', '2021-12-06 17:36:10', '2021-12-12 04:46:54'),
(32, 10, 0, 'product/image/saffron-pack-2.jpg', '2021-12-06 17:36:10', '2021-12-06 17:36:10'),
(33, 10, 0, 'product/image/saffron-pack-powder.jpg', '2021-12-06 17:36:10', '2021-12-06 17:36:10'),
(34, 10, 0, 'product/image/saffron-white-pack.jpg', '2021-12-06 17:36:10', '2021-12-06 17:36:10'),
(35, 11, 0, 'product/image/1621489419-pack-strawberry.jpg', '2021-12-07 08:31:52', '2021-12-12 05:00:50'),
(36, 11, 0, 'product/image/1621489419-strawberry-back-pack.jpg', '2021-12-07 08:31:52', '2021-12-07 08:31:52'),
(37, 11, 1, 'product/image/1621489423-strawberry-pack.jpg', '2021-12-07 08:31:52', '2021-12-12 05:00:50'),
(38, 12, 0, 'product/image/1621499678-apricot-pack.jpg', '2021-12-07 08:33:07', '2021-12-12 05:00:57'),
(39, 12, 1, 'product/image/1621499678-apricot-pack-1.jpg', '2021-12-07 08:33:08', '2021-12-12 05:00:57'),
(40, 12, 0, 'product/image/1621499679-apricot-pack-back-1.jpg', '2021-12-07 08:33:08', '2021-12-07 08:33:08'),
(41, 13, 0, 'product/image/1621499895-kiwi-pack.jpg', '2021-12-07 08:34:28', '2021-12-12 05:01:04'),
(42, 13, 1, 'product/image/1621499895-kiwi-pack-1.jpg', '2021-12-07 08:34:28', '2021-12-12 05:01:04'),
(43, 13, 0, 'product/image/1621499895-kiwi-pack-back-1.jpg', '2021-12-07 08:34:28', '2021-12-07 08:34:28'),
(44, 14, 0, 'product/image/1621499945-orange-pack.jpg', '2021-12-07 08:35:31', '2021-12-12 05:01:20'),
(45, 14, 1, 'product/image/1621499945-orange-pack-1.jpg', '2021-12-07 08:35:31', '2021-12-12 05:01:20'),
(46, 14, 0, 'product/image/1621499945-orange-pack-back-1.jpg', '2021-12-07 08:35:31', '2021-12-07 08:35:31'),
(47, 15, 0, 'product/image/1621499997-pear-pack.jpg', '2021-12-07 08:36:45', '2021-12-12 05:01:28'),
(48, 15, 1, 'product/image/1621499997-pear-pack-1.jpg', '2021-12-07 08:36:45', '2021-12-12 05:01:28'),
(49, 15, 0, 'product/image/1621499997-pear-pack-back-1.jpg', '2021-12-07 08:36:45', '2021-12-07 08:36:45'),
(50, 16, 0, 'product/image/1621500031-persimmon-pack.jpg', '2021-12-07 08:38:02', '2021-12-12 05:01:34'),
(51, 16, 1, 'product/image/1621500031-persimmon-pack-1.jpg', '2021-12-07 08:38:02', '2021-12-12 05:01:34'),
(52, 16, 0, 'product/image/1621500031-persimmon-pack-back-1.jpg', '2021-12-07 08:38:02', '2021-12-07 08:38:02');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_12_05_194835_create_product_categories_table', 1),
(6, '2021_12_05_204415_create_products_table', 2),
(7, '2021_12_06_080658_create_gallery_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `category_id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Apfel', 'apfel', 6, 'product/image/1621404028-freeze-apple-pack.jpg', '<p>Die Gefriergetrockneten &Auml;pfel haben immer noch ihre nat&uuml;rliche Farbe. Das gro&szlig;e Plus ist, dass N&auml;hrwerte, Mineralien, Vitamine und Geschmack ohne weitere Zus&auml;tze erhalten bleiben. Diese sind durch den aufwendigen Trocknungsprozess sogar in besonders konzentrierter Form enthalten.</p>\r\n<p>Ein knusprig-luftiger, lecker leichter. Snack aus schonend gefriergetrockneten, frischen &Auml;pfel.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\">✓In Ber&uuml;hrung mit Wasser oder Milch, quellen sie</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; schnell auf und schmecken beinahe wie frische Fr&uuml;chte.</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; Zudem bringen Sie dadurch den fruchtigen Geschmack,</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; die N&auml;hrwerte und Vitamine in Ihrem Getr&auml;nk.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; Smoothie und Shake<br />✓Besonders gut im M&uuml;sli, Joghurt oder Quark.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideal geeignet zur Herstellung von Geb&auml;ck.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r Cocktails.</p>\r\n<p style=\"padding-left: 30px;\">✓Auch gut kombinierbar mit Schokolade.</p>\r\n<p style=\"padding-left: 30px;\">✓Oder einfach ein Snack f&uuml;r Zwischendurch.</p>', '2021-12-06 05:45:59', '2021-12-06 05:51:18'),
(2, 'kiwi', 'kiwi', 6, 'product/image/1621404241-freeze-kiwi-pack.jpg', '<p>Die Gefriergetrockneten Kiwis haben immer noch ihre nat&uuml;rliche Farbe. Das gro&szlig;e Plus ist, dass N&auml;hrwerte, Mineralien, Vitamine und Geschmack ohne weitere Zus&auml;tze erhalten bleiben. Diese sind durch den aufwendigen Trocknungsprozess sogar in besonders konzentrierter Form enthalten.</p>\r\n<p>Ein knusprig-luftiger, lecker leichter. Snack aus schonend gefriergetrockneten, frischen Kiwis.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\">✓In Ber&uuml;hrung mit Wasser oder Milch, quellen sie</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; schnell auf und schmecken beinahe wie frische Fr&uuml;chte.</p>\r\n<p style=\"padding-left: 30px;\">&nbsp; &nbsp; &nbsp;Zudem bringen Sie dadurch den fruchtigen Geschmack,</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; die N&auml;hrwerte und Vitamine in Ihrem Getr&auml;nk.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; Smoothie und Shake<br />✓Besonders gut im M&uuml;sli, Joghurt oder Quark.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideal geeignet zur Herstellung von Geb&auml;ck.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r Cocktails.</p>\r\n<p style=\"padding-left: 30px;\">✓Auch gut kombinierbar mit Schokolade.</p>\r\n<p style=\"padding-left: 30px;\">✓Oder einfach ein Snack f&uuml;r Zwischendurch.</p>', '2021-12-06 05:50:54', '2021-12-06 07:43:02'),
(3, 'blutorange', 'blutorange', 6, 'product/image/1621404298-freeze-orange-pack.jpg', '<p>Die Gefriergetrockneten Blutorangen haben immer noch ihre nat&uuml;rliche Farbe. Das gro&szlig;e Plus ist, dass N&auml;hrwerte, Mineralien, Vitamine und Geschmack ohne weitere Zus&auml;tze erhalten bleiben. Diese sind durch den aufwendigen Trocknungsprozess sogar in besonders konzentrierter Form enthalten.</p>\r\n<p>Ein knusprig-luftiger, lecker leichter. Snack aus schonend gefriergetrockneten, frischen Pfirsiche.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\">✓In Ber&uuml;hrung mit Wasser oder Milch, quellen sie</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; schnell auf und schmecken beinahe wie frische Fr&uuml;chte.</p>\r\n<p style=\"padding-left: 30px;\">&nbsp; &nbsp; &nbsp;Zudem bringen Sie dadurch den fruchtigen Geschmack,</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; die N&auml;hrwerte und Vitamine in Ihrem Getr&auml;nk.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; Smoothie und Shake<br />✓Besonders gut im M&uuml;sli, Joghurt oder Quark.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideal geeignet zur Herstellung von Geb&auml;ck.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r Cocktails.</p>\r\n<p style=\"padding-left: 30px;\">✓Auch gut kombinierbar mit Schokolade.</p>\r\n<p style=\"padding-left: 30px;\">✓Oder einfach ein Snack f&uuml;r Zwischendurch.</p>', '2021-12-06 05:54:51', '2021-12-06 07:43:10'),
(4, 'Pfirsiche', 'pfirsiche', 6, 'product/image/1621404358-freeze-peach-pack.jpg', '<p>Die Gefriergetrockneten Pfirsiche haben immer noch ihre nat&uuml;rliche Farbe. Das gro&szlig;e Plus ist, dass N&auml;hrwerte, Mineralien, Vitamine und Geschmack ohne weitere Zus&auml;tze erhalten bleiben. Diese sind durch den aufwendigen Trocknungsprozess sogar in besonders konzentrierter Form enthalten.</p>\r\n<p>Ein knusprig-luftiger, lecker leichter. Snack aus schonend gefriergetrockneten,frischen Pfirsiche.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\">✓In Ber&uuml;hrung mit Wasser oder Milch, quellen sie</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; schnell auf und schmecken beinahe wie frische Fr&uuml;chte.</p>\r\n<p style=\"padding-left: 30px;\">&nbsp; &nbsp; &nbsp;Zudem bringen Sie dadurch den fruchtigen Geschmack,</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; die N&auml;hrwerte und Vitamine in Ihrem Getr&auml;nk.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;&nbsp;&nbsp;&nbsp; Smoothie und Shake<br />✓Besonders gut im M&uuml;sli, Joghurt oder Quark.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideal geeignet zur Herstellung von Geb&auml;ck.</p>\r\n<p style=\"padding-left: 30px;\">✓Ideale Zutat f&uuml;r Cocktails.</p>\r\n<p style=\"padding-left: 30px;\">✓Auch gut kombinierbar mit Schokolade.</p>\r\n<p style=\"padding-left: 30px;\">✓Oder einfach ein Snack f&uuml;r Zwischendurch.</p>', '2021-12-06 05:57:51', '2021-12-06 07:43:18'),
(5, 'Pilze', 'pilze', 5, 'product/image/1621404440-freeze-mushroom-pack.jpg', '<p>Ein knusprig-luftiger, lecker leichter. Snack aus schonend getrockneten,frischen Pilzen.</p>\r\n<p>Essen Sie Ihr Gem&uuml;se &ndash; mit Genuss! Herrlich</p>\r\n<p>gew&uuml;rzt mit Meersalz und Knoblauch machen die</p>\r\n<p>Pilze zu einer Knabberfreude erster Wahl.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\"><strong>✓</strong> Glutenfrei und fettfrei</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r Suppe, Salat, Pasta, Pizza, Aperitif</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche Smoothie</p>\r\n<p style=\"padding-left: 30px;\">✓ Mit viel Kalzium, Kalium und Eiwei&szlig;</p>\r\n<p style=\"padding-left: 30px;\">✓ Reich an Vitamin D und Ballaststoffen</p>', '2021-12-06 06:01:12', '2021-12-12 03:46:16'),
(6, 'Okra', 'okra', 5, 'product/image/1621404510-freeze-okra-pack.jpg', '<p>Ein knusprig-luftiger, lecker leichter. Snack aus schonend getrockneten, frischen Okra.</p>\r\n<p>Essen Sie Ihr Gem&uuml;se &ndash; mit Genuss! Herrlich</p>\r\n<p>gew&uuml;rzt mit Meersalz machen die Okra zu einer</p>\r\n<p>Knabberfreude erster Wahl.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\"><strong>✓</strong> Glutenfrei und fettfrei</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r Suppe, Salat, Pasta, Pizza, Aperitif</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche&nbsp;Smoothie</p>\r\n<p style=\"padding-left: 30px;\">✓ Mit viel Kalzium, Kalium und Protein</p>\r\n<p style=\"padding-left: 30px;\">✓ Von Natur aus reich an Vitamin B9</p>', '2021-12-06 06:03:49', '2021-12-12 03:46:31'),
(7, 'Tomate', 'tomate', 5, 'product/image/1621404574-freeze-tomato-pack.jpg', '<p>Ein knusprig-luftiger, lecker leichter, Snack aus schonend getrockneten, frischen Tomaten.</p>\r\n<p>Essen Sie Ihr Gem&uuml;se &ndash; mit Genuss! Herrlich</p>\r\n<p>gew&uuml;rzt mit Meersalz, Knoblauch und schwarzem Pfeffer</p>\r\n<p>machen die Tomaten zu einer Knabberfreude erster Wahl.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\"><strong>✓</strong> Glutenfrei und fettfrei</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r Suppe, Salat, Pasta, Pizza, Aperitif</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche&nbsp;Smoothie</p>\r\n<p style=\"padding-left: 30px;\">✓ Mit viel Kalzium und Kalium</p>\r\n<p style=\"padding-left: 30px;\">✓ Enth&auml;lt Antioxidantien &amp; Lycopin</p>', '2021-12-06 07:04:20', '2021-12-12 03:47:06'),
(8, 'Zucchini', 'zucchini', 5, 'product/image/1621404644-freeze-zucchini-pack.jpg', '<p>Ein knusprig-luftiger, lecker leichter, Snack aus schonend getrockneten, frischen Zucchini.</p>\r\n<p>Essen Sie Ihr Gem&uuml;se &ndash; mit Genuss! Herrlich</p>\r\n<p>gew&uuml;rzt mit Meersalz, Knoblauch, rotem und</p>\r\n<p>schwarzem Pfeffer machen die Zucchini zu einer</p>\r\n<p>Knabberfreude erster Wahl.</p>\r\n<p><strong>Snacken ohne schlechtes Gewissen!</strong></p>\r\n<p style=\"padding-left: 30px;\"><strong>✓</strong> Glutenfrei und fettfrei</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r Suppe, Salat, Pasta, Pizza, Aperitif</p>\r\n<p style=\"padding-left: 30px;\">✓ Ideale Zutat f&uuml;r eine gesunde und n&auml;hrstoffreiche&nbsp;Smoothie</p>\r\n<p style=\"padding-left: 30px;\">✓ Mit viel Kalzium und Kalium</p>\r\n<p style=\"padding-left: 30px;\">✓ Reich an Antioxidantien</p>', '2021-12-06 07:08:46', '2021-12-12 03:47:14'),
(9, 'Getrocknete Rosen', 'getrocknete-rosen', 4, 'product/image/Damaszener Rosenknospen.jpg', '<p>Die Rose gibt uns die Kraft zu lieben, um der Liebe willen - und von ganzem Herzen Liebe zu schenken. In der Phytotherapie, Hom&ouml;opathie und Aromaheilkunde st&auml;rkt die Rose unter anderem Herz und Nerven, beugt Kopfschmerzen vor, pflegt die Haut und unterst&uuml;tzt die erotische wie die platonische Liebesf&auml;higkeit. Der Verein zur F&ouml;rderung der naturgem&auml;&szlig;en Heilweise, nach Theophrastus Bombastus von Hohenheim, gen. Paracelsus e.V. mit dem Sitz in M&uuml;nchen, hat die Damaszener Rose zur Heilpflanze des Jahres 2013 gek&uuml;rt.</p>\r\n<p><strong>Verwendungsm&ouml;glichkeiten:</strong></p>\r\n<ul>\r\n<li>Teezubereitung</li>\r\n<li>Dekoration von Speisen und Desserts</li>\r\n<li>Dekoration von Wein / Sekt / Prosecco</li>\r\n<li>Edle Pflegeb&auml;der, Waschungen und Aufg&uuml;sse</li>\r\n<li>Tischdekoration</li>\r\n</ul>', '2021-12-06 17:34:19', '2021-12-12 04:47:40'),
(10, 'Premium Safran', 'premium-safran', 3, 'product/image/saffron-pack.jpg', '<p>Safran ist das teuerste Gew&uuml;rz der Welt: er ist regelrecht mit &lsquo;Gold aufzuwiegen&rsquo;. Sein Duftbouquet, seine intensive goldgelbe F&auml;rbung der Speisen und die ihm nachgesagte seelische und k&ouml;rperliche Wirkung ist ohnegleichen.<br /><br /><strong>Warum ist Safran so wertvoll?</strong><br /><br />Die Pflanze &auml;hnelt unserem Fr&uuml;hjahrsbl&uuml;her Krokus, jedoch bl&uuml;ht der ihm verwandte Safran nur im Herbst f&uuml;r circa 2 Wochen. In den Anbaugebieten entsteht dann ein wundersch&ouml;nes violettes Bl&uuml;tenmeer.<br /><br />F&uuml;r unseren Premium-Safran &lsquo;Sargol&rsquo; werden nur die drei von einem Griffel gehaltenen, die Bl&uuml;te &uuml;berragenden F&auml;den sorgf&auml;ltig abgelesen. Sie sind die geschmacksintensivsten Teile der Pflanze und sollten nicht durch andere Pflanzenteile verunreinigt werden. F&uuml;r ein Gramm Safran braucht es etwa 250 bis 360 F&auml;den!<br /><br />Der Safran ist unfruchtbar und wird &uuml;ber Brutzwiebeln vermehrt. Alles, vom Anbau und Auslese &uuml;ber ganzj&auml;hrige Unkrautentfernung bis zur Ernte mit Weiterverarbeitung, ist reine, zeitintensive Handarbeit.</p>\r\n<p><strong>Safran in der guten K&uuml;che &ndash; die richtige Vorbereitung f&uuml;r die volle Entfaltung des Geschmacks und der goldgelben F&auml;rbung</strong><br /><br />Safran entfaltet seinen Geschmack und F&auml;rbekraft am besten, wenn Sie ihn ein paar Minuten in einem Sch&auml;lchen oder kleinem M&ouml;rser im Ofen anw&auml;rmen und anschliessend pulverisieren, bevor Sie ihn in den letzten Minuten beim Kochen beigeben. Eine gute Verteilung des Aromas erreichen Sie, wenn Sie den Safran erst in einer Fl&uuml;ssigkeit (Wasser, Br&uuml;he, Rahm, geschmolzene Butter, Weisswein..) aufl&ouml;sen.</p>\r\n<p><strong>Safran kann mehr als &lsquo;nur&rsquo; w&uuml;rzen</strong><br /><br />Dem Safran werden schon sehr lange Heilkr&auml;fte nachgesagt. Der grosse griechische Arzt Hippokrates (460 bis 377 vor Christus) r&uuml;hmte Safran als Frauenheilmittel. Aus mittelalterlichen Rezepturen war er nicht wegzudenken und im 17. Jahrhundert galt er nebst Rose und Lilie als wichtigstes Mittel zur Heilung von fast allem. Er galt als Mittel der Wahl f&uuml;r Hebammen, um die Wehent&auml;tigkeit anzuregen und galt gleichzeitig als schmerzlindernd f&uuml;r die Frauen unter der Geburt. Aber vorsicht! W&auml;hrend der Schwangerschaft kann er zur verfr&uuml;hten Wehent&auml;tigkeit f&uuml;hren.<br /><br />Mit seinen weiteren Eigenschaften wie krampfstillend, entz&uuml;ndungshemmender Wundbalsam in Cr&egrave;mes, Rheumalindernd, lindernd bei Koliken und Menstruationsbeschwerden, verdauungsf&ouml;rdernd und zu guter Letzt stoffwechself&ouml;rdernd mit aufbauender Wirksamkeit f&uuml;r die Leber, wurde Safran schon fast als Allheilmittel in der historischen Medizin eingesetzt. Auch in der ayurvedischen Heilkunst und in der traditionellen chinesischen Medizin spielt Safran eine wichtige Rolle.<br /><br />Die euphorisierende, stimmungsaufhellende Wirkung des Safrans wurde in allen Kulturen gelobt.<br /><br />Seine Eigenschaften als leberst&auml;rkendes Mittel wurde von der modernen Medizin best&auml;tigt. Die antidepressiven Effekte zeigen sich in neuen Studien ebenfalls deutlich und auch seine Heilwirkung gegen Krebs wird untersucht, eine Antitumoraktivit&auml;t an Tieren wurde nachgewiesen. Weitere Pluspunkte des Safrans in der heutigen Heilkunst: antibakteriell, auswurff&ouml;rdernd, antiviral, menstruationsregulierend.<br /><br />Eine ganz besondere Wirkung wussten schon die alten R&ouml;mer und nutzten sie auch intensiv: Safran gilt als Aphrodisiakum.<br /><br />Diese Sammlung an historischem Wissen &uuml;ber den Gebrauch des Safrans als Arznei sind keine Heilversprechungen. Wenn Sie Safran als Arzneimittel nutzen m&ouml;chten, sprechen Sie sich bitte mit Ihrem Arzt ab.<br /><br />Bitte halten Sie sich immer an die Dosierungen. Sowohl f&uuml;r das W&uuml;rzen von Speisen und Getr&auml;nken &ndash; wo meist schon eine Messerpitze oder gar einzelne F&auml;den ausreichen &ndash; , als auch als Heilmittel: konsumieren Sie bitte nie &uuml;ber 1,5 Gramm am Tag.</p>', '2021-12-06 17:36:10', '2021-12-12 04:46:54'),
(11, 'Erdbeeren', 'erdbeeren', 2, 'product/image/1621489423-strawberry-pack.jpg', '<ul class=\"nutrition-dried\">\r\n<li>Energy :&nbsp;360</li>\r\n<li>Fibre :&nbsp;4g</li>\r\n<li>Carbohydrate :&nbsp;28%</li>\r\n<li>Vitamin C :&nbsp;32%</li>\r\n<li>Calcium :&nbsp;8%</li>\r\n</ul>', '2021-12-07 08:31:52', '2021-12-12 05:00:50'),
(12, 'Aprikose', 'aprikose', 2, 'product/image/1621499678-apricot-pack-1.jpg', '<ul class=\"nutrition-dried\">\r\n<li>Energy :&nbsp;241</li>\r\n<li>Iron :&nbsp;34%</li>\r\n<li>Dietary Fibre :&nbsp;30%</li>\r\n<li>Vitamin A :&nbsp;20%</li>\r\n<li>Calcium :&nbsp;6%</li>\r\n</ul>', '2021-12-07 08:33:07', '2021-12-12 05:00:57'),
(13, 'kiwi', 'kiwi', 2, 'product/image/1621499895-kiwi-pack-1.jpg', '<ul class=\"nutrition-dried\">\r\n<li>Energy :&nbsp;370</li>\r\n<li>Iron :&nbsp;15%</li>\r\n<li>Carbohydrate :&nbsp;33%</li>\r\n<li>Dietary Fibre :&nbsp;31%</li>\r\n<li>Calcium :&nbsp;60%</li>\r\n</ul>', '2021-12-07 08:34:27', '2021-12-12 05:01:04'),
(14, 'Orange', 'orange', 2, 'product/image/1621499945-orange-pack-1.jpg', '<ul class=\"nutrition-dried\">\r\n<li>Energy :&nbsp;326.7</li>\r\n<li>Sodium :&nbsp;81mg</li>\r\n<li>Carbohydrate :&nbsp;26%</li>\r\n<li>Vitamin C :&nbsp;23.3%</li>\r\n<li>Dietary Fibre :&nbsp;19%</li>\r\n</ul>', '2021-12-07 08:35:31', '2021-12-12 05:01:20'),
(15, 'Birne', 'birne', 2, 'product/image/1621499997-pear-pack-1.jpg', '<ul class=\"nutrition-dried\">\r\n<li>Energy :&nbsp;275.4</li>\r\n<li>Sodium :&nbsp;6.6mg</li>\r\n<li>Carbohydrate :&nbsp;24%</li>\r\n<li>Protein :&nbsp;2g</li>\r\n<li>Dietary Fibre :&nbsp;31%</li>\r\n</ul>', '2021-12-07 08:36:45', '2021-12-12 05:01:28'),
(16, 'Kakipflaume', 'kakipflaume', 2, 'product/image/1621500031-persimmon-pack-1.jpg', '<ul class=\"nutrition-dried\">\r\n<li>Energy :&nbsp;275</li>\r\n<li>Iron :&nbsp;5%</li>\r\n<li>Carbohydrate :&nbsp;75g</li>\r\n<li>Calcium :&nbsp;5%</li>\r\n<li>Dietary Fibre :&nbsp;60%</li>\r\n</ul>', '2021-12-07 08:38:02', '2021-12-12 05:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Gefriergetrocknet', 'gefriergetrocknet', NULL, '2021-12-06 03:00:27', '2021-12-06 03:00:27'),
(2, 'Getrocknete Früchte', 'getrocknete-früchte', NULL, '2021-12-06 03:01:38', '2021-12-06 03:01:38'),
(3, 'Safran', 'safran', NULL, '2021-12-06 03:02:07', '2021-12-06 03:02:07'),
(4, 'Rosen & Kräuter', 'rosen-krauter', NULL, '2021-12-06 03:02:55', '2021-12-06 03:02:55'),
(5, 'Gemüse', 'gemuse', 2, '2021-12-06 04:23:47', '2021-12-06 04:24:01'),
(6, 'Früchte', 'fruchte', 2, '2021-12-06 04:25:06', '2021-12-06 04:25:06');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eans`
--
ALTER TABLE `eans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eans_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_products`
--
ALTER TABLE `gallery_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_parent_id_foreign` (`parent_id`);

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
-- AUTO_INCREMENT for table `eans`
--
ALTER TABLE `eans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_products`
--
ALTER TABLE `gallery_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eans`
--
ALTER TABLE `eans`
  ADD CONSTRAINT `eans_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gallery_products`
--
ALTER TABLE `gallery_products`
  ADD CONSTRAINT `gallery_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
