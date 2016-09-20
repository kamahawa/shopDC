-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 11:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_pratice`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cates_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Quần Jean', 'Quần Jean', 2, 0, 'Quần jean online', 'Quần jean đẹp online', '2016-08-19 00:46:43', '2016-08-19 09:57:48'),
(2, 'Áo thun', 'Áo thun', 3, 0, 'Áo thun Lacoste', 'Áo thun Lacoste chính hãng', '2016-08-19 00:52:59', '2016-08-19 09:58:08'),
(4, 'Quần Jean Da Bò Đẹp', 'quan-jean-da-bo-dep', 6, 1, '', 'Quần Jean Da Bò Đẹp', '2016-08-19 01:44:50', '2016-08-24 19:40:39'),
(6, 'Áo thun nữ', 'ao-thun-nu', 2, 2, 'Áo thun nữ', 'Áo thun nữ', '2016-08-19 03:10:38', '2016-08-19 03:10:38'),
(7, 'Quần jean nữ', 'Quần jean nữ', 0, 1, 'Quần jean nữ', 'Quần jean nữ', '2016-09-01 04:33:18', '2016-09-01 04:33:18'),
(8, 'Quần jean nam', 'Quần jean nam', 0, 1, 'Quần jean nam', 'Quần jean nam', '2016-09-01 04:33:18', '2016-09-01 04:33:18'),
(9, 'Áo thun nam', 'Áo thun nam', 0, 2, 'Áo thun nam', 'Áo thun nam', '2016-09-01 04:34:02', '2016-09-01 04:34:02'),
(10, 'Áo thun ôm', 'Áo thun ôm', 0, 2, 'Áo thun ôm', 'Áo thun ôm', '2016-09-01 04:34:02', '2016-09-01 04:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_19_041717_create_cates_table', 1),
('2016_08_19_042607_create_products_table', 1),
('2016_08_19_043258_create_product_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  KEY `products_user_id_foreign` (`user_id`),
  KEY `products_cate_id_foreign` (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(6, 'Áo thun nữ Vietnam', 'ao-thun-nu-vietnam', 1000000, '<p>&Aacute;o thun nữ Vietnam</p>\r\n', '<p>&Aacute;o thun nữ Vietnam</p>\r\n', '07025-10.jpg', 'Áo thun nữ Vietnam', 'Áo thun nữ Vietnam', 2, 6, '2016-08-24 20:32:38', '2016-08-31 23:29:14'),
(15, 'quần jean ck 1', 'quan-jean-ck-1', 3000000, '<p>quần jean ck 1</p>\r\n', '<p>quần jean ck 1</p>\r\n', '07018-1.jpg', 'quần jean ck 1', 'quần jean ck 1', 1, 4, '2016-08-24 21:52:46', '2016-08-28 20:18:32'),
(16, 'Quần jean nam', 'quan-jean-nam', 2000000, '<p>Quần jean nam</p>\r\n', '<p>Quần jean nam</p>\r\n', '07020-3.jpg', 'Quần jean nam', 'Quần jean nam', 2, 1, '2016-09-05 21:21:55', '2016-09-05 21:21:55'),
(17, 'Quần jean da bò nam ', 'quan-jean-da-bo-nam-', 2000000, '<p>Quần jean da b&ograve; nam&nbsp;</p>\r\n', '<p>Quần jean da b&ograve; nam&nbsp;</p>\r\n', '07019-9.jpg', 'Quần jean da bò nam ', 'Quần jean da bò nam ', 2, 4, '2016-09-05 21:24:10', '2016-09-05 21:24:10'),
(18, 'Quần jean da bò nữ', 'quan-jean-da-bo-nu', 3000000, '<p>Quần jean da b&ograve; nữ</p>\r\n', '<p>Quần jean da b&ograve; nữ</p>\r\n', '07025-8.jpg', 'Quần jean da bò nữ', 'Quần jean da bò nữ', 2, 4, '2016-09-05 21:24:53', '2016-09-05 21:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(30, 'hinh-anh-dep-hoa-hong-tim-day-lang-man-10.jpg', 15, '2016-08-24 21:52:46', '2016-08-24 21:52:46'),
(32, '07019-10.jpg', 15, '2016-08-28 20:31:57', '2016-08-28 20:31:57'),
(33, '07019-11.jpg', 16, '2016-09-05 21:21:55', '2016-09-05 21:21:55'),
(34, '07019-11.jpg', 16, '2016-09-05 21:21:55', '2016-09-05 21:21:55'),
(35, '07019-10.jpg', 16, '2016-09-05 21:21:55', '2016-09-05 21:21:55'),
(36, '07020-6.jpg', 16, '2016-09-05 21:21:55', '2016-09-05 21:21:55'),
(37, '07026-8.jpg', 16, '2016-09-05 21:21:55', '2016-09-05 21:21:55'),
(38, '07025-5.jpg', 16, '2016-09-05 21:21:55', '2016-09-05 21:21:55'),
(39, '07019-11.jpg', 17, '2016-09-05 21:24:10', '2016-09-05 21:24:10'),
(40, '07020-9.jpg', 17, '2016-09-05 21:24:10', '2016-09-05 21:24:10'),
(41, '07023-3.jpg', 17, '2016-09-05 21:24:10', '2016-09-05 21:24:10'),
(42, '07023-4.jpg', 17, '2016-09-05 21:24:10', '2016-09-05 21:24:10'),
(43, '07023-5.jpg', 17, '2016-09-05 21:24:10', '2016-09-05 21:24:10'),
(44, '07028-7.jpg', 18, '2016-09-05 21:24:53', '2016-09-05 21:24:53'),
(45, '07028-2.jpg', 18, '2016-09-05 21:24:54', '2016-09-05 21:24:54'),
(46, '07028-8.jpg', 18, '2016-09-05 21:24:54', '2016-09-05 21:24:54'),
(47, '07028-10.jpg', 18, '2016-09-05 21:24:54', '2016-09-05 21:24:54'),
(48, '07028-4.jpg', 18, '2016-09-05 21:24:54', '2016-09-05 21:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mod', '$2y$10$yWi94muGjB0LjE4jIOF9GuggD5O3TizFW/ABHHGTNONE5q/UrrH3S', 'test@gmail.com', 2, 'TAyMUQq0mUMWz2OGXtt7Z9KYWiBkiqYerpli9ZoIll2Wwk7M2hBw4ZOOvpM4', '2016-08-25 02:25:06', '2016-08-31 02:17:38'),
(2, 'admin', '$2y$10$qrklVRnnK4O3bITehWk04.QH.mvPoIqrB1.uhHPR9/nVpAdtIN2fO', 'admin@gmail.com', 1, 'X7iluhqmI2UP5oEa5a4zFuLQkojnplMAmA0mpBffKxtTNTNO1rmMzDuCulAi', '2016-08-28 21:44:56', '2016-08-31 02:17:57'),
(3, 'member', '$2y$10$qrklVRnnK4O3bITehWk04.QH.mvPoIqrB1.uhHPR9/nVpAdtIN2fO', 'member@gmail.com', 3, 'oIle2pHC9XxbYcPmlJdvvS7T9irbIDKCObpWrFFAPhKpVo7wr7EheK4lQgLX', '2016-08-28 21:45:37', '2016-08-31 08:26:22'),
(5, 'mod1', '$2y$10$sGBl3/AhNcGRiuwQm3t3X.brzBIdewFuGS3YMseMVYGmWzZtZwoeS', 'hihi1@gmail.com', 2, '7Ndc3HbD6bcfLnqFxJrX0KRP5hpyCb35vtFX0Zhd', '2016-08-31 01:34:12', '2016-08-31 01:58:31');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
