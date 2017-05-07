-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 11:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misskeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_method`
--

DROP TABLE IF EXISTS `api_method`;
CREATE TABLE `api_method` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL DEFAULT '0',
  `url` varchar(254) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL DEFAULT '0',
  `total_call` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `app_api`
--

DROP TABLE IF EXISTS `app_api`;
CREATE TABLE `app_api` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `total_call` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE `ingredients` (
  `id` bigint(20) NOT NULL,
  `name` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Bawang Putih', '2017-05-06 11:30:41', '2017-05-06 11:30:41', NULL, NULL, NULL, NULL),
(2, 'Daging Ayam', '2017-05-06 11:30:51', '2017-05-06 11:30:51', NULL, NULL, NULL, NULL),
(3, 'Pete', '2017-05-06 11:30:59', '2017-05-06 11:30:59', NULL, NULL, NULL, NULL),
(4, 'Bawang Merah', '2017-05-06 11:31:09', '2017-05-06 11:31:09', NULL, NULL, NULL, NULL),
(5, 'Garam', '2017-05-06 11:31:37', '2017-05-06 11:31:37', NULL, NULL, NULL, NULL),
(6, 'Merica', '2017-05-06 11:33:48', '2017-05-06 11:33:48', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_data`
--

DROP TABLE IF EXISTS `ingredient_data`;
CREATE TABLE `ingredient_data` (
  `id` bigint(20) NOT NULL,
  `recipe_id` bigint(20) NOT NULL DEFAULT '0',
  `ingredient_id` bigint(20) NOT NULL DEFAULT '0',
  `amount` bigint(20) DEFAULT '0',
  `unit` varchar(254) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient_data`
--

INSERT INTO `ingredient_data` (`id`, `recipe_id`, `ingredient_id`, `amount`, `unit`, `description`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 1, 10, 'pack', 'dibakar', '2017-05-06 15:56:49', '2017-05-07 08:30:38', NULL, 1, NULL, NULL),
(2, 1, 1, 1, 'buah', 'mentah', '2017-05-06 15:58:52', '2017-05-07 08:40:10', NULL, 1, NULL, NULL),
(3, 2, 4, 2, 'siung', 'mentah', '2017-05-06 15:59:01', '2017-05-07 08:40:11', NULL, 1, NULL, NULL),
(4, 2, 3, 10, 'lonjor', 'matang', '2017-05-06 15:59:30', '2017-05-07 08:40:12', NULL, 1, NULL, NULL),
(5, 2, 5, 1, 'ember', 'masih bentuk batu', '2017-05-06 16:50:41', '2017-05-07 08:30:38', NULL, 1, NULL, NULL),
(7, 11, 1, 1, 'siung', 'dibakar', '2017-05-06 17:22:28', '2017-05-07 09:28:11', '2017-05-07 16:28:11', 1, NULL, 1),
(8, 11, 5, 1, 'ember', 'masih bentuk batu', '2017-05-06 17:22:28', '2017-05-07 09:28:11', '2017-05-07 16:28:11', 1, NULL, 1),
(9, 12, 1, 10, 'pack', 'masih di dalam tanah', '2017-05-06 17:22:41', '2017-05-07 09:00:52', '2017-05-07 16:00:52', 1, 1, 1),
(10, 12, 5, 11, 'baskom', 'masih bentuk air laut', '2017-05-06 17:22:41', '2017-05-07 09:00:52', '2017-05-07 16:00:52', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_recipe`
--

DROP TABLE IF EXISTS `ingredient_recipe`;
CREATE TABLE `ingredient_recipe` (
  `id` bigint(20) NOT NULL,
  `recipe_id` bigint(20) NOT NULL DEFAULT '0',
  `ingredient_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient_recipe`
--

INSERT INTO `ingredient_recipe` (`id`, `recipe_id`, `ingredient_id`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 1, '2017-05-06 11:34:05', '2017-05-06 11:40:40', NULL, NULL, NULL, NULL),
(2, 1, 2, '2017-05-06 11:41:08', '2017-05-06 11:41:43', NULL, NULL, NULL, NULL),
(3, 2, 4, '2017-05-06 11:42:02', '2017-05-06 11:42:16', NULL, NULL, NULL, NULL),
(4, 2, 3, '2017-05-06 11:42:20', '2017-05-06 11:42:42', NULL, NULL, NULL, NULL),
(5, 11, 1, '2017-05-06 17:22:28', '2017-05-06 17:22:28', NULL, NULL, NULL, NULL),
(6, 11, 5, '2017-05-06 17:22:28', '2017-05-06 17:22:28', NULL, NULL, NULL, NULL),
(7, 12, 1, '2017-05-06 17:22:41', '2017-05-06 17:22:41', NULL, NULL, NULL, NULL),
(8, 12, 5, '2017-05-06 17:22:41', '2017-05-06 17:22:41', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE `recipes` (
  `id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `description` text,
  `procedure` text NOT NULL,
  `portion` int(11) DEFAULT NULL,
  `like` bigint(20) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `image` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `procedure`, `portion`, `like`, `rating`, `image`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Ayam Goreng', 'Ayam goreng ini enak loo', '1. ayam disiapkan\r\n2. ayam digoreng\r\n3. ayam disajikan', 5, 0, 0, 'ayamgoreng.jpg', '2017-05-05 13:57:07', '2017-05-07 08:22:25', NULL, NULL, NULL, NULL),
(2, 'Pete Bakar', 'Pete Bakar mantaaps', '1. siapkan 10 lonjor pete\r\n2. Lempar ke pembakaran sampah\r\n3. tunggu api padam\r\n4. ambil pete\r\n5. hidangkan di piring\r\n6. siap di santap', 1, 0, 0, 'petebakar.jpg', '2017-05-05 14:02:49', '2017-05-05 14:02:57', NULL, NULL, NULL, NULL),
(11, 'coba resep 1', 'ini coba post 1', '1. uyee \n 2. hulala', 1, NULL, NULL, 'coba1.jpg', '2017-05-06 17:22:28', '2017-05-07 09:28:11', '2017-05-07 16:28:11', 1, NULL, 1),
(12, 'coba patch resep 2', 'ini coba patch 2', '1. patch uyee asdsd \n 2. patch hulala aaaaaa', 100, NULL, NULL, 'coba1patch.jpg', '2017-05-06 17:22:41', '2017-05-07 09:00:52', '2017-05-07 16:00:52', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'sdm', '2017-05-06 11:36:31', '2017-05-06 11:38:07', NULL, NULL, NULL, NULL),
(2, 'sdt', '2017-05-06 11:36:38', '2017-05-06 11:38:10', NULL, NULL, NULL, NULL),
(3, 'Buah', '2017-05-06 11:36:44', '2017-05-06 11:36:44', NULL, NULL, NULL, NULL),
(4, 'gr', '2017-05-06 11:36:51', '2017-05-06 11:38:13', NULL, NULL, NULL, NULL),
(5, 'ml', '2017-05-06 11:37:05', '2017-05-06 11:38:17', NULL, NULL, NULL, NULL),
(6, 'Butir', '2017-05-06 11:37:21', '2017-05-06 11:37:21', NULL, NULL, NULL, NULL),
(7, 'Sejumput', '2017-05-06 11:37:30', '2017-05-06 11:37:30', NULL, NULL, NULL, NULL),
(8, 'cc', '2017-05-06 11:38:44', '2017-05-06 11:38:44', NULL, NULL, NULL, NULL),
(9, 'Biji', '2017-05-06 11:38:58', '2017-05-06 11:38:58', NULL, NULL, NULL, NULL),
(10, 'Secukupnya', '2017-05-06 11:39:03', '2017-05-06 11:39:03', NULL, NULL, NULL, NULL),
(11, 'Batang', '2017-05-06 11:39:45', '2017-05-06 11:39:45', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text,
  `image` varchar(250) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lupa_pass` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `registerdate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `remember_token` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_app`
--

DROP TABLE IF EXISTS `user_app`;
CREATE TABLE `user_app` (
  `id` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `category_id` int(11) NOT NULL,
  `app_name` varchar(254) NOT NULL DEFAULT '0',
  `token` varchar(254) NOT NULL,
  `token_secret` varchar(254) NOT NULL,
  `rate_limit` bigint(20) NOT NULL,
  `oauth` enum('1','0') NOT NULL,
  `app_website` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_method`
--
ALTER TABLE `api_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_api`
--
ALTER TABLE `app_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_data`
--
ALTER TABLE `ingredient_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_recipe`
--
ALTER TABLE `ingredient_recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_app`
--
ALTER TABLE `user_app`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_method`
--
ALTER TABLE `api_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_api`
--
ALTER TABLE `app_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ingredient_data`
--
ALTER TABLE `ingredient_data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ingredient_recipe`
--
ALTER TABLE `ingredient_recipe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_app`
--
ALTER TABLE `user_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
