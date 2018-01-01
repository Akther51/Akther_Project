-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 02:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3926732_business`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_01_030908_create_save_blog_infos_table', 2),
(4, '2017_11_01_051731_create_save_category_infos_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `save_blog_infos`
--

CREATE TABLE `save_blog_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save_blog_infos`
--

INSERT INTO `save_blog_infos` (`id`, `blog_date`, `blog_title`, `blog_description`, `blog_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, '2017-12-21', 'fasd', 'dahsdfaha', 'Akther.jpg', 1, '2017-11-24 08:16:31', '2017-11-24 08:16:31'),
(2, '2017-02-01', 'dshfjsk', 'sfghgfjskf', 'Akther.jpg', 1, '2017-11-24 08:19:44', '2017-11-24 08:19:44'),
(3, '2017-02-01', 'dshfjsk', 'sfghgfjskf', 'Akther.jpg', 1, '2017-11-24 08:25:06', '2017-11-24 08:25:06'),
(4, '2017-02-01', 'dshfjsk', 'sfghgfjskf', 'Akther.jpg', 1, '2017-11-24 08:37:33', '2017-11-24 08:37:33'),
(5, NULL, 'asdassgfs', 'asfsdjffdhg', 'Akther.jpg', 1, '2017-11-24 08:40:02', '2017-11-24 08:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `save_category_infos`
--

CREATE TABLE `save_category_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save_category_infos`
--

INSERT INTO `save_category_infos` (`id`, `category_date`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(13, '2017-11-01', 'new catagoru', 'this is date cATEGORY', 0, '2017-11-22 05:41:57', '2017-11-22 05:47:14'),
(14, '2017-02-01', 'dasjfuqehg', 'dfnuergqyyeffjdhbf', 0, '2017-11-22 05:44:07', '2017-11-24 07:07:14'),
(15, '2017-02-02', 'cvfdgbhghh', 'gfgahudfuaega', 1, '2017-11-22 05:46:02', '2017-11-24 07:09:18'),
(16, '2017-02-01', 'dasjfuqehg', 'dfnuergqyyeffjdhbf', 1, '2017-11-22 05:46:42', '2017-11-24 07:09:15'),
(17, '2017-12-23', 'dfgghg', 'dfshsfhdgjyt', 1, '2017-11-22 23:27:04', '2017-11-22 23:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Akther hossain', 'akther@gmail.com', '$2y$10$XXQ8W84pK5yFapLqtegHIuGj7WBaSufkiu6Fygc5WsM/DVL9TwIaO', 'dFveWoY19oA6EWPCEJAaDCrj4gm9DdnS40FoSMwPEdPXDZZMoGQDejm6Pnqx', '2017-10-30 04:36:59', '2017-10-30 04:36:59'),
(2, 'ripon', 'ripon@gmail.com', '$2y$10$L.cTeyVcpjLr.BbiaoayG.VaVF01dz23/.Gnu8toO0EvP8Dofu2nK', 'kIuG2Rq5Qc0Y91JgJ3kfEB33JXwRBi5axzKRRqgGAfWtcDkZJWr36VWV22p6', '2017-10-30 13:02:38', '2017-10-30 13:02:38'),
(3, 'kamal', 'kamla@gmail.com', '$2y$10$5WsH5NXpChPz4bR8hyJMQep0wgk5VmcCZ.Q0iYDpEzRcb2uoy7mKS', 'PwnVBo13UbvuB3g78ufnZVhl0ppSRVoIk6iXBfLvHjHYBSLe350pK7Xmn1Yd', '2017-10-30 13:27:15', '2017-10-30 13:27:15'),
(4, 'yasin', 'yasin@gmail.com', '$2y$10$BSRCeERHWklJyl2Klq5c.uK2fMNJM1WuET5.yKGwWATT46Erzp59i', 'htLyrW5Wy2VyznbKcrP6iP3zAQyqsIHdisWoaqnX5XOTbIZt177HkOQdMRsr', '2017-10-31 00:39:17', '2017-10-31 00:39:17'),
(5, 'faruk', 'faruk@gmail.com', '$2y$10$I16bb2G.WlkOs0DChrZvJ..Ymi2bsbmX3SBhz.sepjXK9FX.pLdIi', 'XA9N7Z0l1eosYodrZFYb5uSzK6kffVYMhj6GBrE554b3JbI7u9tBP2NpX4I8', '2017-10-31 00:46:26', '2017-10-31 00:46:26'),
(6, 'rashed', 'rashed@gmail.com', '$2y$10$c626..C/CVb513.UnOaXleNVgLrWuPaFiu0WpujR7XCdF4ac6yUMm', 'nPKFikcsfDi8zhOVT7ZWsM0mOgsTF1scaTLmkwXY4uunPcMLhOmloU3cyRjU', '2017-10-31 01:13:19', '2017-10-31 01:13:19');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `save_blog_infos`
--
ALTER TABLE `save_blog_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_category_infos`
--
ALTER TABLE `save_category_infos`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `save_blog_infos`
--
ALTER TABLE `save_blog_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `save_category_infos`
--
ALTER TABLE `save_category_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
