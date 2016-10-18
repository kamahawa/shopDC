-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2016 at 07:04 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_dc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mỹ Phẩm', 'my-pham', 0, 0, 'Mỹ phẩm online', 'Mỹ phẩm online', 1, '2016-10-17 18:54:13', '2016-10-17 18:54:13'),
(2, 'Quần áo', 'quan-ao', 0, 0, 'Quần áo online', 'Quần áo online', 1, '2016-10-17 18:54:49', '2016-10-18 01:57:14'),
(3, 'Kem', 'kem', 1, 1, 'Kem trắng da, kem trị mụn, kem trị nám, kem dưỡng da', 'Kem trắng da, Kem trị mụn, kem trị nám, kem dưỡng da', 1, '2016-10-17 18:58:26', '2016-10-17 18:58:26'),
(5, 'Đồ bay', 'do-bay', 1, 2, 'Đồ bay', 'Đồ bay', 1, '2016-10-17 19:02:28', '2016-10-17 19:02:28'),
(6, 'Đầm', 'dam', 1, 2, 'Đầm online', 'Đầm online', 1, '2016-10-17 19:03:03', '2016-10-17 19:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
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

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `status`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(2, 'Kem trắng da BB', 'kem-trang-da-bb', 3000000, 'Kem trắng da BB', 'Kem trắng da BB\r\nLàm trắng da trong 7 tuần', 'kem-duong-trang-diem-body-cream-bb1(1).png', 'Kem trắng da BB , kem trắng da , kem trắng da online', 'Kem trắng da BB , kem trắng da , kem trắng da online', 1, 2, 3, '2016-10-17 19:51:45', '2016-10-17 19:51:45'),
(3, 'Đồ bay da beo', 'do-bay-da-beo', 220000, '<p><em><strong><span style="color:#FF0000">Đồ bay da beo</span></strong></em></p>\r\n', '<p>Đồ bay da beo</p>\r\n', 'dobay.jpg', 'Đồ bay da beo', 'Đồ bay da beo', 1, 2, 5, '2016-10-17 19:55:46', '2016-10-17 20:06:17'),
(8, 'Đầm', 'dam', 2000000, '<p>Đầm</p>\r\n', '<p>Đầm</p>\r\n', '9242b501769f8f2c433d40b523e0e006.jpg', 'Đầm', 'Đầm', 1, 2, 5, '2016-10-17 20:52:49', '2016-10-17 20:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'kem.jpg', 1, 2, '2016-10-17 19:51:45', '2016-10-17 19:51:45'),
(2, 'kem1.jpg', 1, 2, '2016-10-17 19:51:45', '2016-10-17 19:51:45'),
(3, 'dobay1.jpg', 1, 3, '2016-10-17 19:55:46', '2016-10-17 19:55:46'),
(4, 'dobay2.jpg', 1, 3, '2016-10-17 19:55:46', '2016-10-17 19:55:46'),
(10, '9242b501769f8f2c433d40b523e0e0060.jpg', 1, 8, '2016-10-17 20:52:49', '2016-10-17 20:52:49'),
(11, '9242b501769f8f2c433d40b523e0e0062.jpg', 1, 8, '2016-10-17 20:52:49', '2016-10-17 20:52:49'),
(15, '9242b501769f8f2c433d40b523e0e0061616161610101818041040am0.jpg', 1, 8, '2016-10-17 21:12:40', '2016-10-17 21:12:40'),
(16, '9242b501769f8f2c433d40b523e0e0061616161610101818041006am0.jpg', 1, 8, '2016-10-17 21:13:06', '2016-10-17 21:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mod', '$2y$10$yWi94muGjB0LjE4jIOF9GuggD5O3TizFW/ABHHGTNONE5q/UrrH3S', 'test@gmail.com', 2, 1, 'TAyMUQq0mUMWz2OGXtt7Z9KYWiBkiqYerpli9ZoIll2Wwk7M2hBw4ZOOvpM4', '2016-08-24 19:25:06', '2016-08-30 19:17:38'),
(2, 'admin', '$2y$10$qrklVRnnK4O3bITehWk04.QH.mvPoIqrB1.uhHPR9/nVpAdtIN2fO', 'admin@gmail.com', 1, 1, 'X7iluhqmI2UP5oEa5a4zFuLQkojnplMAmA0mpBffKxtTNTNO1rmMzDuCulAi', '2016-08-28 14:44:56', '2016-08-30 19:17:57'),
(3, 'member', '$2y$10$qrklVRnnK4O3bITehWk04.QH.mvPoIqrB1.uhHPR9/nVpAdtIN2fO', 'member@gmail.com', 3, 1, 'oIle2pHC9XxbYcPmlJdvvS7T9irbIDKCObpWrFFAPhKpVo7wr7EheK4lQgLX', '2016-08-28 14:45:37', '2016-08-31 01:26:22'),
(6, 'mod 1', '$2y$10$FRyukgW/JFV45eqS6tudLu1GPZZ29cfg0YrhAaHEWADe15yXWcYXO', 'mod1@gmail.com', 2, 0, 'jdgMtRI35CZwwqPbhHhDOqNyHmIlzNeZxKQZIkNN', '2016-10-17 21:38:59', '2016-10-17 21:44:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
