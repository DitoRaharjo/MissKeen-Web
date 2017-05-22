-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 11:31 PM
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
-- Table structure for table `access_log`
--

CREATE TABLE `access_log` (
  `id` bigint(11) NOT NULL,
  `user_app_id` int(11) NOT NULL DEFAULT '0',
  `path` varchar(254) NOT NULL,
  `method` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_log`
--

INSERT INTO `access_log` (`id`, `user_app_id`, `path`, `method`, `created_at`, `updated_at`) VALUES
(5, 3, 'test', 'GET', '2017-05-22 18:03:39', '2017-05-22 18:03:39'),
(6, 3, 'test', 'GET', '2017-05-22 18:03:40', '2017-05-22 18:03:40'),
(7, 3, 'test', 'GET', '2017-05-22 18:03:41', '2017-05-22 18:03:41'),
(8, 3, 'test', 'GET', '2017-05-22 18:04:25', '2017-05-22 18:04:25'),
(9, 3, 'test', 'GET', '2017-05-22 18:04:26', '2017-05-22 18:04:26'),
(10, 3, 'test', 'POST', '2017-05-22 18:05:13', '2017-05-22 18:05:13'),
(11, 3, 'test', 'POST', '2017-05-22 18:05:14', '2017-05-22 18:05:14'),
(12, 4, 'test', 'GET', '2017-05-22 18:55:58', '2017-05-22 18:55:58'),
(13, 4, 'test', 'GET', '2017-05-22 18:55:59', '2017-05-22 18:55:59'),
(14, 5, 'test', 'GET', '2017-05-22 19:01:40', '2017-05-22 19:01:40'),
(15, 5, 'test', 'GET', '2017-05-22 19:01:41', '2017-05-22 19:01:41'),
(16, 5, 'test', 'GET', '2017-05-22 19:03:13', '2017-05-22 19:03:13'),
(17, 5, 'recipe', 'GET', '2017-05-22 19:11:23', '2017-05-22 19:11:23'),
(18, 5, 'recipe', 'GET', '2017-05-22 19:11:30', '2017-05-22 19:11:30'),
(19, 5, 'ingredient', 'GET', '2017-05-22 19:11:42', '2017-05-22 19:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `api_log`
--

CREATE TABLE `api_log` (
  `id` int(11) NOT NULL,
  `user_app_id` int(11) NOT NULL,
  `test` bigint(20) DEFAULT '0',
  `user` bigint(20) DEFAULT '0',
  `recipe` bigint(20) DEFAULT '0',
  `ingredient` bigint(20) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_log`
--

INSERT INTO `api_log` (`id`, `user_app_id`, `test`, `user`, `recipe`, `ingredient`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 0, '2017-05-22 16:52:03', '2017-05-22 16:52:03'),
(2, 3, 23, 0, 0, 0, '2017-05-22 16:52:20', '2017-05-22 18:05:14'),
(3, 4, 2, 0, 0, 0, '2017-05-22 18:55:14', '2017-05-22 18:55:59'),
(4, 5, 3, 0, 2, 1, '2017-05-22 19:01:11', '2017-05-22 19:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `api_method`
--

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

CREATE TABLE `category` (
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
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Internal', '2017-05-18 13:36:38', '2017-05-19 13:51:46', NULL, NULL, NULL, NULL),
(2, 'Pendidikan', '2017-05-19 13:51:50', '2017-05-19 13:51:50', NULL, NULL, NULL, NULL),
(3, 'Lain-Lain', '2017-05-19 13:52:00', '2017-05-19 13:52:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

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
(2, 1, 2, 1, 'Kg', 'mentah', '2017-05-06 15:58:52', '2017-05-19 16:00:31', NULL, 1, NULL, NULL),
(3, 2, 4, 2, 'siung', 'mentah', '2017-05-06 15:59:01', '2017-05-07 08:40:11', NULL, 1, NULL, NULL),
(4, 2, 3, 10, 'lonjor', 'matang', '2017-05-06 15:59:30', '2017-05-07 08:40:12', NULL, 1, NULL, NULL),
(5, 2, 5, 1, 'ember', 'masih bentuk batu', '2017-05-06 16:50:41', '2017-05-07 08:30:38', NULL, 1, NULL, NULL),
(7, 11, 1, 1, 'siung', 'dibakar', '2017-05-06 17:22:28', '2017-05-07 17:30:51', NULL, 1, NULL, NULL),
(8, 11, 5, 1, 'ember', 'masih bentuk batu', '2017-05-06 17:22:28', '2017-05-07 17:30:53', NULL, 1, NULL, NULL),
(9, 12, 1, 10, 'pack', 'masih di dalam tanah', '2017-05-06 17:22:41', '2017-05-07 17:30:54', NULL, 1, 1, NULL),
(10, 12, 5, 11, 'baskom', 'masih bentuk air laut', '2017-05-06 17:22:41', '2017-05-07 17:30:56', NULL, 1, 1, NULL),
(11, 13, 1, 1, 'siung', 'dibakar', '2017-05-08 05:00:38', '2017-05-08 05:00:38', NULL, 1, NULL, NULL),
(12, 13, 5, 1, 'ember', 'masih bentuk batu', '2017-05-08 05:00:38', '2017-05-08 05:00:38', NULL, 1, NULL, NULL),
(13, 14, 1, 1, 'siung', 'dibakar', '2017-05-08 10:12:39', '2017-05-08 10:12:39', NULL, 1, NULL, NULL),
(14, 14, 5, 1, 'ember', 'masih bentuk batu', '2017-05-08 10:12:39', '2017-05-08 10:12:39', NULL, 1, NULL, NULL),
(15, 15, 1, 1, 'siung', 'dibakar', '2017-05-08 10:12:41', '2017-05-08 10:12:41', NULL, 1, NULL, NULL),
(16, 15, 5, 1, 'ember', 'masih bentuk batu', '2017-05-08 10:12:41', '2017-05-08 10:12:41', NULL, 1, NULL, NULL),
(17, 16, 1, 2, 'unit', 'raw', '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, 1, NULL, NULL),
(18, 16, 2, 1, 'units', 'raw', '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_recipe`
--

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
(8, 12, 5, '2017-05-06 17:22:41', '2017-05-06 17:22:41', NULL, NULL, NULL, NULL),
(9, 13, 1, '2017-05-08 05:00:38', '2017-05-08 05:00:38', NULL, NULL, NULL, NULL),
(10, 13, 5, '2017-05-08 05:00:38', '2017-05-08 05:00:38', NULL, NULL, NULL, NULL),
(11, 14, 1, '2017-05-08 10:12:39', '2017-05-08 10:12:39', NULL, NULL, NULL, NULL),
(12, 14, 5, '2017-05-08 10:12:39', '2017-05-08 10:12:39', NULL, NULL, NULL, NULL),
(13, 15, 1, '2017-05-08 10:12:42', '2017-05-08 10:12:42', NULL, NULL, NULL, NULL),
(14, 15, 5, '2017-05-08 10:12:42', '2017-05-08 10:12:42', NULL, NULL, NULL, NULL),
(15, 16, 1, '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, NULL, NULL, NULL),
(16, 16, 2, '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `description` text,
  `procedure` text NOT NULL,
  `portion` int(11) DEFAULT NULL,
  `like` bigint(20) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL,
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
(1, 'Ayam Goreng', 'Ayam goreng ini enak loo', '1. ayam disiapkan\r\n2. ayam digoreng\r\n3. ayam disajikan', 5, 0, 0, 'ayamgoreng.jpg', '2017-05-05 13:57:07', '2017-05-07 17:21:12', NULL, 1, NULL, NULL),
(2, 'Pete Bakar', 'Pete Bakar mantaaps', '1. siapkan 10 lonjor pete\r\n2. Lempar ke pembakaran sampah\r\n3. tunggu api padam\r\n4. ambil pete\r\n5. hidangkan di piring\r\n6. siap di santap', 1, 0, 0, 'petebakar.jpg', '2017-05-05 14:02:49', '2017-05-07 17:30:23', NULL, 1, NULL, NULL),
(11, 'coba resep 1', 'ini coba post 1', '1. uyee \n 2. hulala', 1, NULL, NULL, 'coba1.jpg', '2017-05-06 17:22:28', '2017-05-07 17:31:04', NULL, 2, NULL, NULL),
(12, 'coba patch resep 2', 'ini coba patch 2', '1. patch uyee asdsd \n 2. patch hulala aaaaaa', 100, NULL, NULL, 'coba1patch.jpg', '2017-05-06 17:22:41', '2017-05-07 17:31:05', NULL, 2, 1, NULL),
(13, 'coba resep 1', 'ini coba post 1', '1. uyee \n 2. hulala', 1, NULL, NULL, 'coba1.jpg', '2017-05-08 05:00:38', '2017-05-08 05:00:38', NULL, 1, NULL, NULL),
(14, 'coba resep 1', 'ini coba post 1', '1. uyee \n 2. hulala', 1, NULL, NULL, 'coba1.jpg', '2017-05-08 10:12:39', '2017-05-08 10:12:39', NULL, 1, NULL, NULL),
(15, 'coba resep 1', 'ini coba post 1', '1. uyee \n 2. hulala', 1, NULL, NULL, 'coba1.jpg', '2017-05-08 10:12:41', '2017-05-08 10:12:41', NULL, 1, NULL, NULL),
(16, 'Recipe 1', 'This is description', '1. one 2. two 3. three', 5, NULL, NULL, 'picture.jpg', '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

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

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Administrator', '2017-05-08 04:35:34', '2017-05-08 04:35:37', NULL, 1, NULL, NULL),
(2, 'Developer', '2017-05-08 04:35:44', '2017-05-08 04:35:45', NULL, 1, NULL, NULL),
(3, 'User', '2017-05-08 04:35:58', '2017-05-15 07:14:57', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telp` varchar(12) DEFAULT NULL,
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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `telp`, `alamat`, `image`, `role_id`, `password`, `lupa_pass`, `status`, `registerdate`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `remember_token`) VALUES
(1, 'Dito Raharjo', 'ditoparker@gmail.com', '085602131300', 'Jl. jalan 123', NULL, 1, '$2y$10$D6F9BYygxov8KWhTJKyzwOU3LyWoQzWcyB1XTrNyx/Xz8NDndmCbO', NULL, '1', '0000-00-00', '2017-05-08 04:34:23', '2017-05-22 19:29:31', NULL, 1, NULL, NULL, 'hM31hI702eS2NhV3dCqSy2sVZW7aQIgUeqBf8YqfTb8XxNdM6XRS0IEYrfeq'),
(8, 'Developer 1', 'developer1@gmail.com', '1234', NULL, NULL, 2, '$2y$10$S0XAO6h4IKYTCVScVTDnHe8SQsTFLk6r3bbGy9YgNubWQogcpni/K', NULL, '1', '2017-05-15', '2017-05-15 11:28:12', '2017-05-22 21:14:49', NULL, NULL, NULL, NULL, '9wORmwKGha7j2me7AP35gNxFRoSBoSQL6fBwOq8jhpjDpTTd6rGxMcPcwFyI'),
(9, 'Developer 2', 'developer2@gmail.com', NULL, NULL, NULL, 2, '$2y$10$Z7un.KN5x24iwii/lnrFLei2MF70XhuDZDzrm3PH6PHj4IYn41o9W', NULL, '1', '2017-05-15', '2017-05-15 16:06:12', '2017-05-22 19:17:34', NULL, NULL, NULL, NULL, 'w3TSq9XZBQJnDTMOd5R7MRFFeG1E2FRyViBrGTFCkHhWhT5chzuCOSsaU26o');

-- --------------------------------------------------------

--
-- Table structure for table `user_app`
--

CREATE TABLE `user_app` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `app_name` varchar(254) NOT NULL,
  `token` varchar(254) DEFAULT NULL,
  `token_secret` varchar(254) DEFAULT NULL,
  `status` enum('1','0') NOT NULL,
  `rate_limit` bigint(20) DEFAULT NULL,
  `oauth` enum('1','0') DEFAULT NULL,
  `app_website` varchar(254) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_app`
--

INSERT INTO `user_app` (`id`, `category_id`, `app_name`, `token`, `token_secret`, `status`, `rate_limit`, `oauth`, `app_website`, `image`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'MissKeen', 'nN2BVe0vO6t42PO3xCqywJNF2jWZ59', '$2y$10$TcqUzKngfSuasZKn1LCjpuZCiKx0aPo8jrsYifZkSqpyBydoKPQb2', '1', NULL, NULL, 'http://ditoraharjo.co/misskeen/', NULL, '2017-05-18 14:51:34', '2017-05-22 16:37:48', NULL, 1, 1, NULL),
(3, 2, 'coba aplikasi 1', '2LILIGdT0T2pQzkTj0H2nJau5rqNhV', '$2y$10$lsR5vOlBbnBrORou02Vko.hzst0gUNRkglbnDOBnjVV1z4T.fYPKO', '1', NULL, NULL, 'asd', '2017-05-22_awkf.jpg', '2017-05-22 16:52:20', '2017-05-22 16:52:20', NULL, 8, NULL, NULL),
(4, 3, 'coba aplikasi 2', 'cEJS0c7jnWevq0eQ3O2C01BWsb3nds', '$2y$10$JCDKuEglGT3UO3O3SSVoruxoo/PLZLh4j8KIMREVgCswDtLlA0/4.', '1', NULL, NULL, 'ads', '2017-05-23_EmOt.jpg', '2017-05-22 18:55:14', '2017-05-22 18:55:14', NULL, 8, NULL, NULL),
(5, 2, 'coba Aplikasi 3', 'lt5I9JkBlhACcjnAtu82ttYKkB6sj5', '$2y$10$22E/Tjp.SFfTmbw0fgGJB.LpdhU0ZRQRNAmmOB2sW0EJSEgfEyIZW', '1', NULL, NULL, 'ase', '2017-05-23_YlKw.jpg', '2017-05-22 19:01:11', '2017-05-22 19:03:09', NULL, 9, 9, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_log`
--
ALTER TABLE `access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_log`
--
ALTER TABLE `api_log`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `access_log`
--
ALTER TABLE `access_log`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `api_log`
--
ALTER TABLE `api_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ingredient_data`
--
ALTER TABLE `ingredient_data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ingredient_recipe`
--
ALTER TABLE `ingredient_recipe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_app`
--
ALTER TABLE `user_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
