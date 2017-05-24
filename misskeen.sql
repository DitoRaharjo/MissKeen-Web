-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 06:16 AM
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
(19, 5, 'ingredient', 'GET', '2017-05-22 19:11:42', '2017-05-22 19:11:42'),
(20, 1, 'recipe', 'GET', '2017-05-23 13:07:54', '2017-05-23 13:07:54'),
(21, 1, 'test', 'GET', '2017-05-23 13:08:10', '2017-05-23 13:08:10'),
(22, 1, 'test', 'GET', '2017-05-23 13:08:37', '2017-05-23 13:08:37'),
(23, 1, 'test', 'GET', '2017-05-23 13:09:01', '2017-05-23 13:09:01'),
(24, 1, 'test', 'GET', '2017-05-23 13:09:20', '2017-05-23 13:09:20'),
(25, 1, 'test', 'GET', '2017-05-23 13:10:31', '2017-05-23 13:10:31'),
(26, 1, 'test', 'POST', '2017-05-23 13:13:39', '2017-05-23 13:13:39'),
(27, 1, 'search', 'POST', '2017-05-23 13:17:28', '2017-05-23 13:17:28'),
(28, 1, 'search', 'POST', '2017-05-23 13:18:04', '2017-05-23 13:18:04'),
(29, 1, 'search', 'POST', '2017-05-23 13:18:43', '2017-05-23 13:18:43'),
(30, 1, 'search', 'POST', '2017-05-23 13:19:50', '2017-05-23 13:19:50'),
(31, 1, 'search', 'POST', '2017-05-23 13:23:24', '2017-05-23 13:23:24'),
(32, 1, 'search', 'POST', '2017-05-23 13:33:01', '2017-05-23 13:33:01'),
(33, 1, 'search', 'POST', '2017-05-23 13:40:33', '2017-05-23 13:40:33'),
(34, 1, 'search', 'POST', '2017-05-23 13:40:34', '2017-05-23 13:40:34'),
(35, 1, 'search', 'POST', '2017-05-23 13:47:50', '2017-05-23 13:47:50'),
(36, 1, 'search', 'POST', '2017-05-23 13:48:44', '2017-05-23 13:48:44'),
(37, 1, 'search', 'POST', '2017-05-23 13:49:03', '2017-05-23 13:49:03'),
(38, 1, 'search', 'POST', '2017-05-23 13:49:14', '2017-05-23 13:49:14'),
(39, 1, 'search', 'POST', '2017-05-23 13:51:47', '2017-05-23 13:51:47'),
(40, 1, 'search', 'POST', '2017-05-23 13:51:55', '2017-05-23 13:51:55'),
(41, 1, 'search', 'POST', '2017-05-23 13:52:14', '2017-05-23 13:52:14'),
(42, 1, 'search', 'POST', '2017-05-23 13:52:30', '2017-05-23 13:52:30'),
(43, 1, 'search', 'POST', '2017-05-23 13:53:18', '2017-05-23 13:53:18'),
(44, 1, 'search', 'POST', '2017-05-23 13:55:32', '2017-05-23 13:55:32'),
(45, 1, 'search', 'POST', '2017-05-23 13:55:48', '2017-05-23 13:55:48'),
(46, 1, 'search', 'POST', '2017-05-23 13:56:05', '2017-05-23 13:56:05'),
(47, 1, 'search', 'POST', '2017-05-23 13:56:47', '2017-05-23 13:56:47'),
(48, 1, 'search', 'POST', '2017-05-23 13:59:57', '2017-05-23 13:59:57'),
(49, 1, 'search', 'POST', '2017-05-23 14:01:09', '2017-05-23 14:01:09'),
(50, 1, 'search', 'POST', '2017-05-23 14:01:36', '2017-05-23 14:01:36'),
(51, 1, 'search', 'POST', '2017-05-23 14:01:44', '2017-05-23 14:01:44'),
(52, 1, 'search', 'POST', '2017-05-23 14:01:46', '2017-05-23 14:01:46'),
(53, 1, 'search', 'POST', '2017-05-23 14:02:20', '2017-05-23 14:02:20'),
(54, 1, 'search', 'POST', '2017-05-23 14:02:34', '2017-05-23 14:02:34'),
(55, 1, 'search', 'POST', '2017-05-23 14:04:02', '2017-05-23 14:04:02'),
(56, 1, 'search', 'POST', '2017-05-23 14:04:18', '2017-05-23 14:04:18'),
(57, 1, 'search', 'POST', '2017-05-23 14:05:43', '2017-05-23 14:05:43'),
(58, 1, 'search', 'POST', '2017-05-23 14:17:33', '2017-05-23 14:17:33'),
(59, 1, 'search', 'POST', '2017-05-23 14:23:16', '2017-05-23 14:23:16'),
(60, 1, 'search', 'POST', '2017-05-23 14:23:19', '2017-05-23 14:23:19'),
(61, 1, 'search', 'POST', '2017-05-23 14:23:25', '2017-05-23 14:23:25'),
(62, 1, 'search', 'POST', '2017-05-23 14:23:31', '2017-05-23 14:23:31'),
(63, 1, 'search', 'POST', '2017-05-23 14:24:21', '2017-05-23 14:24:21'),
(64, 1, 'search', 'POST', '2017-05-23 14:25:25', '2017-05-23 14:25:25'),
(65, 1, 'search', 'POST', '2017-05-23 14:25:26', '2017-05-23 14:25:26'),
(66, 1, 'search', 'POST', '2017-05-23 14:27:44', '2017-05-23 14:27:44'),
(67, 1, 'search', 'POST', '2017-05-23 14:27:45', '2017-05-23 14:27:45'),
(68, 1, 'search', 'POST', '2017-05-23 14:27:46', '2017-05-23 14:27:46'),
(69, 1, 'search', 'POST', '2017-05-23 14:27:46', '2017-05-23 14:27:46'),
(70, 1, 'search', 'POST', '2017-05-23 14:27:47', '2017-05-23 14:27:47'),
(71, 1, 'search', 'POST', '2017-05-23 14:28:08', '2017-05-23 14:28:08'),
(72, 1, 'search', 'POST', '2017-05-23 14:28:10', '2017-05-23 14:28:10'),
(73, 1, 'search', 'POST', '2017-05-23 14:28:11', '2017-05-23 14:28:11'),
(74, 1, 'search', 'POST', '2017-05-23 14:28:11', '2017-05-23 14:28:11'),
(75, 1, 'search', 'POST', '2017-05-23 14:28:17', '2017-05-23 14:28:17'),
(76, 1, 'search', 'POST', '2017-05-23 14:28:23', '2017-05-23 14:28:23'),
(77, 1, 'search', 'POST', '2017-05-23 14:28:34', '2017-05-23 14:28:34'),
(78, 1, 'search', 'POST', '2017-05-23 14:30:11', '2017-05-23 14:30:11'),
(79, 1, 'search', 'POST', '2017-05-23 14:30:16', '2017-05-23 14:30:16'),
(80, 1, 'search', 'POST', '2017-05-23 14:31:20', '2017-05-23 14:31:20'),
(81, 1, 'search', 'POST', '2017-05-23 14:31:34', '2017-05-23 14:31:34'),
(82, 1, 'search', 'POST', '2017-05-23 14:31:41', '2017-05-23 14:31:41'),
(83, 1, 'search', 'POST', '2017-05-23 14:46:58', '2017-05-23 14:46:58'),
(84, 1, 'search', 'POST', '2017-05-23 14:50:30', '2017-05-23 14:50:30'),
(85, 1, 'search', 'POST', '2017-05-23 14:50:41', '2017-05-23 14:50:41'),
(86, 1, 'search', 'POST', '2017-05-23 14:51:01', '2017-05-23 14:51:01'),
(87, 1, 'search', 'POST', '2017-05-23 14:51:10', '2017-05-23 14:51:10'),
(88, 1, 'search', 'POST', '2017-05-23 14:51:14', '2017-05-23 14:51:14'),
(89, 1, 'search', 'POST', '2017-05-23 14:51:15', '2017-05-23 14:51:15'),
(90, 1, 'search', 'POST', '2017-05-23 14:51:18', '2017-05-23 14:51:18'),
(91, 1, 'search', 'POST', '2017-05-23 14:51:19', '2017-05-23 14:51:19'),
(92, 1, 'search', 'POST', '2017-05-23 14:51:40', '2017-05-23 14:51:40'),
(93, 1, 'search', 'POST', '2017-05-23 14:51:53', '2017-05-23 14:51:53'),
(94, 1, 'search', 'POST', '2017-05-23 15:47:50', '2017-05-23 15:47:50'),
(95, 1, 'search', 'POST', '2017-05-23 15:48:11', '2017-05-23 15:48:11'),
(96, 1, 'search', 'POST', '2017-05-23 15:48:17', '2017-05-23 15:48:17'),
(97, 1, 'search', 'POST', '2017-05-23 15:51:24', '2017-05-23 15:51:24'),
(98, 1, 'search', 'POST', '2017-05-23 15:53:14', '2017-05-23 15:53:14'),
(99, 1, 'search', 'POST', '2017-05-23 15:53:34', '2017-05-23 15:53:34'),
(100, 1, 'search', 'POST', '2017-05-23 15:53:35', '2017-05-23 15:53:35'),
(101, 1, 'search', 'POST', '2017-05-23 15:53:54', '2017-05-23 15:53:54'),
(102, 1, 'search', 'POST', '2017-05-23 15:53:55', '2017-05-23 15:53:55'),
(103, 1, 'search', 'POST', '2017-05-23 15:53:55', '2017-05-23 15:53:55'),
(104, 1, 'search', 'POST', '2017-05-23 15:57:32', '2017-05-23 15:57:32'),
(105, 1, 'search', 'POST', '2017-05-23 15:57:40', '2017-05-23 15:57:40'),
(106, 1, 'search', 'POST', '2017-05-23 15:57:41', '2017-05-23 15:57:41'),
(107, 1, 'search', 'POST', '2017-05-23 15:58:35', '2017-05-23 15:58:35'),
(108, 1, 'search', 'POST', '2017-05-23 15:58:36', '2017-05-23 15:58:36'),
(109, 1, 'search', 'POST', '2017-05-23 15:58:39', '2017-05-23 15:58:39'),
(110, 1, 'search', 'POST', '2017-05-23 15:58:40', '2017-05-23 15:58:40'),
(111, 1, 'search', 'POST', '2017-05-23 15:58:40', '2017-05-23 15:58:40'),
(112, 1, 'search', 'POST', '2017-05-23 15:58:41', '2017-05-23 15:58:41'),
(113, 1, 'search', 'POST', '2017-05-23 15:58:42', '2017-05-23 15:58:42'),
(114, 1, 'search', 'POST', '2017-05-23 15:58:49', '2017-05-23 15:58:49'),
(115, 1, 'search', 'POST', '2017-05-23 15:58:59', '2017-05-23 15:58:59'),
(116, 1, 'search', 'POST', '2017-05-23 15:59:00', '2017-05-23 15:59:00'),
(117, 1, 'search', 'POST', '2017-05-23 15:59:03', '2017-05-23 15:59:03'),
(118, 1, 'search', 'POST', '2017-05-23 15:59:04', '2017-05-23 15:59:04'),
(119, 1, 'search', 'POST', '2017-05-23 15:59:05', '2017-05-23 15:59:05'),
(120, 1, 'search', 'POST', '2017-05-23 15:59:24', '2017-05-23 15:59:24'),
(121, 1, 'search', 'POST', '2017-05-23 15:59:26', '2017-05-23 15:59:26'),
(122, 1, 'search', 'POST', '2017-05-23 16:00:14', '2017-05-23 16:00:14'),
(123, 1, 'search', 'POST', '2017-05-23 16:02:36', '2017-05-23 16:02:36'),
(124, 1, 'search', 'POST', '2017-05-23 16:03:05', '2017-05-23 16:03:05'),
(125, 1, 'search', 'POST', '2017-05-23 16:03:57', '2017-05-23 16:03:57'),
(126, 1, 'search', 'POST', '2017-05-23 16:04:01', '2017-05-23 16:04:01'),
(127, 1, 'search', 'POST', '2017-05-23 16:04:11', '2017-05-23 16:04:11'),
(128, 1, 'search', 'POST', '2017-05-23 16:04:14', '2017-05-23 16:04:14'),
(129, 1, 'search', 'POST', '2017-05-23 16:04:23', '2017-05-23 16:04:23'),
(130, 1, 'search', 'POST', '2017-05-23 16:04:29', '2017-05-23 16:04:29'),
(131, 1, 'search', 'POST', '2017-05-23 16:04:30', '2017-05-23 16:04:30'),
(132, 1, 'search', 'POST', '2017-05-23 16:04:42', '2017-05-23 16:04:42'),
(133, 1, 'search', 'POST', '2017-05-23 16:05:22', '2017-05-23 16:05:22'),
(134, 1, 'search', 'POST', '2017-05-23 16:05:31', '2017-05-23 16:05:31'),
(135, 1, 'search', 'POST', '2017-05-23 16:05:35', '2017-05-23 16:05:35'),
(136, 1, 'search', 'POST', '2017-05-23 16:07:54', '2017-05-23 16:07:54'),
(137, 1, 'search', 'POST', '2017-05-23 16:33:42', '2017-05-23 16:33:42'),
(138, 1, 'search', 'POST', '2017-05-23 16:33:48', '2017-05-23 16:33:48'),
(139, 1, 'search', 'POST', '2017-05-23 16:34:14', '2017-05-23 16:34:14'),
(140, 1, 'search', 'POST', '2017-05-23 16:34:22', '2017-05-23 16:34:22'),
(141, 1, 'search', 'POST', '2017-05-23 16:34:53', '2017-05-23 16:34:53'),
(142, 1, 'search', 'POST', '2017-05-23 16:46:41', '2017-05-23 16:46:41'),
(143, 1, 'search', 'POST', '2017-05-23 16:51:28', '2017-05-23 16:51:28'),
(144, 1, 'search', 'POST', '2017-05-23 16:51:30', '2017-05-23 16:51:30'),
(145, 1, 'search', 'POST', '2017-05-23 16:51:38', '2017-05-23 16:51:38'),
(146, 1, 'search', 'POST', '2017-05-23 16:51:44', '2017-05-23 16:51:44'),
(147, 1, 'search', 'POST', '2017-05-23 16:51:58', '2017-05-23 16:51:58'),
(148, 1, 'search', 'POST', '2017-05-23 16:52:14', '2017-05-23 16:52:14'),
(149, 1, 'search', 'POST', '2017-05-23 16:52:33', '2017-05-23 16:52:33'),
(150, 1, 'search', 'POST', '2017-05-23 16:53:05', '2017-05-23 16:53:05'),
(151, 1, 'search', 'POST', '2017-05-23 16:53:30', '2017-05-23 16:53:30'),
(152, 1, 'search', 'POST', '2017-05-23 16:53:45', '2017-05-23 16:53:45'),
(153, 1, 'search', 'POST', '2017-05-23 16:54:02', '2017-05-23 16:54:02'),
(154, 1, 'search', 'POST', '2017-05-23 16:54:12', '2017-05-23 16:54:12'),
(155, 1, 'search', 'POST', '2017-05-23 16:57:07', '2017-05-23 16:57:07'),
(156, 1, 'search', 'POST', '2017-05-23 16:57:11', '2017-05-23 16:57:11'),
(157, 1, 'search', 'POST', '2017-05-23 16:57:16', '2017-05-23 16:57:16'),
(158, 1, 'search', 'POST', '2017-05-23 16:57:22', '2017-05-23 16:57:22'),
(159, 1, 'search', 'POST', '2017-05-23 16:57:35', '2017-05-23 16:57:35'),
(160, 1, 'search', 'POST', '2017-05-23 16:57:49', '2017-05-23 16:57:49'),
(161, 1, 'search', 'POST', '2017-05-23 16:57:52', '2017-05-23 16:57:52'),
(162, 1, 'search', 'POST', '2017-05-23 16:58:22', '2017-05-23 16:58:22'),
(163, 1, 'search', 'POST', '2017-05-23 17:03:09', '2017-05-23 17:03:09'),
(164, 1, 'search', 'POST', '2017-05-23 17:03:11', '2017-05-23 17:03:11'),
(165, 1, 'search', 'POST', '2017-05-23 17:04:15', '2017-05-23 17:04:15'),
(166, 1, 'search', 'POST', '2017-05-23 17:04:17', '2017-05-23 17:04:17'),
(167, 1, 'search', 'POST', '2017-05-23 17:04:22', '2017-05-23 17:04:22'),
(168, 1, 'search', 'POST', '2017-05-23 17:04:23', '2017-05-23 17:04:23'),
(169, 1, 'search', 'POST', '2017-05-23 17:04:40', '2017-05-23 17:04:40'),
(170, 1, 'search', 'POST', '2017-05-23 17:04:41', '2017-05-23 17:04:41'),
(171, 1, 'search', 'POST', '2017-05-23 17:04:44', '2017-05-23 17:04:44'),
(172, 1, 'search', 'POST', '2017-05-23 17:05:22', '2017-05-23 17:05:22'),
(173, 1, 'search', 'POST', '2017-05-23 17:05:22', '2017-05-23 17:05:22'),
(174, 1, 'search', 'POST', '2017-05-23 17:05:23', '2017-05-23 17:05:23'),
(175, 1, 'search', 'POST', '2017-05-23 17:05:23', '2017-05-23 17:05:23'),
(176, 1, 'search', 'POST', '2017-05-23 17:05:29', '2017-05-23 17:05:29'),
(177, 1, 'search', 'POST', '2017-05-23 17:07:03', '2017-05-23 17:07:03'),
(178, 1, 'search', 'POST', '2017-05-23 17:07:03', '2017-05-23 17:07:03'),
(179, 1, 'search', 'POST', '2017-05-23 17:07:11', '2017-05-23 17:07:11'),
(180, 1, 'search', 'POST', '2017-05-23 17:07:16', '2017-05-23 17:07:16'),
(181, 1, 'search', 'POST', '2017-05-23 17:07:23', '2017-05-23 17:07:23'),
(182, 1, 'search', 'POST', '2017-05-23 17:12:39', '2017-05-23 17:12:39'),
(183, 1, 'search', 'POST', '2017-05-23 17:12:51', '2017-05-23 17:12:51'),
(184, 1, 'search', 'POST', '2017-05-23 17:12:53', '2017-05-23 17:12:53'),
(185, 1, 'search', 'POST', '2017-05-23 17:13:05', '2017-05-23 17:13:05'),
(186, 1, 'search', 'POST', '2017-05-23 17:13:22', '2017-05-23 17:13:22'),
(187, 1, 'search', 'POST', '2017-05-23 17:13:24', '2017-05-23 17:13:24'),
(188, 1, 'search', 'POST', '2017-05-23 17:18:52', '2017-05-23 17:18:52'),
(189, 1, 'search', 'POST', '2017-05-23 17:18:53', '2017-05-23 17:18:53'),
(190, 1, 'search', 'POST', '2017-05-23 17:19:09', '2017-05-23 17:19:09'),
(191, 1, 'search', 'POST', '2017-05-23 17:19:09', '2017-05-23 17:19:09'),
(192, 1, 'search', 'POST', '2017-05-23 17:19:10', '2017-05-23 17:19:10'),
(193, 1, 'search', 'POST', '2017-05-23 17:19:18', '2017-05-23 17:19:18'),
(194, 1, 'search', 'POST', '2017-05-23 17:19:19', '2017-05-23 17:19:19'),
(195, 1, 'search', 'POST', '2017-05-23 17:19:22', '2017-05-23 17:19:22'),
(196, 1, 'search', 'POST', '2017-05-23 17:19:26', '2017-05-23 17:19:26'),
(197, 1, 'search', 'POST', '2017-05-23 17:19:26', '2017-05-23 17:19:26'),
(198, 1, 'search', 'POST', '2017-05-23 17:19:27', '2017-05-23 17:19:27'),
(199, 1, 'search', 'POST', '2017-05-23 17:22:15', '2017-05-23 17:22:15'),
(200, 1, 'search', 'POST', '2017-05-23 17:22:42', '2017-05-23 17:22:42'),
(201, 1, 'search', 'POST', '2017-05-23 17:22:45', '2017-05-23 17:22:45'),
(202, 1, 'search', 'POST', '2017-05-23 17:22:47', '2017-05-23 17:22:47'),
(203, 1, 'search', 'POST', '2017-05-23 17:22:52', '2017-05-23 17:22:52'),
(204, 1, 'search', 'POST', '2017-05-23 17:22:58', '2017-05-23 17:22:58'),
(205, 1, 'search', 'POST', '2017-05-23 17:22:59', '2017-05-23 17:22:59'),
(206, 1, 'search', 'POST', '2017-05-23 17:23:35', '2017-05-23 17:23:35'),
(207, 1, 'search', 'POST', '2017-05-23 17:24:09', '2017-05-23 17:24:09'),
(208, 1, 'search', 'POST', '2017-05-23 17:24:17', '2017-05-23 17:24:17'),
(209, 1, 'search', 'POST', '2017-05-23 17:24:32', '2017-05-23 17:24:32'),
(210, 1, 'search', 'POST', '2017-05-23 17:26:21', '2017-05-23 17:26:21'),
(211, 1, 'search', 'POST', '2017-05-23 17:26:21', '2017-05-23 17:26:21'),
(212, 1, 'search', 'POST', '2017-05-23 17:26:25', '2017-05-23 17:26:25'),
(213, 1, 'search', 'POST', '2017-05-23 17:26:31', '2017-05-23 17:26:31'),
(214, 1, 'search', 'POST', '2017-05-23 17:26:46', '2017-05-23 17:26:46'),
(215, 1, 'search', 'POST', '2017-05-23 17:27:14', '2017-05-23 17:27:14'),
(216, 1, 'search', 'POST', '2017-05-23 17:27:18', '2017-05-23 17:27:18'),
(217, 1, 'search', 'POST', '2017-05-23 17:27:21', '2017-05-23 17:27:21'),
(218, 1, 'search', 'POST', '2017-05-23 17:27:21', '2017-05-23 17:27:21'),
(219, 1, 'search', 'POST', '2017-05-23 17:28:03', '2017-05-23 17:28:03'),
(220, 1, 'search', 'POST', '2017-05-23 17:28:07', '2017-05-23 17:28:07'),
(221, 1, 'search', 'POST', '2017-05-23 17:28:25', '2017-05-23 17:28:25'),
(222, 1, 'search', 'POST', '2017-05-23 17:28:27', '2017-05-23 17:28:27'),
(223, 1, 'search', 'POST', '2017-05-23 17:28:37', '2017-05-23 17:28:37'),
(224, 1, 'search', 'POST', '2017-05-23 17:28:51', '2017-05-23 17:28:51'),
(225, 1, 'search', 'POST', '2017-05-23 17:28:52', '2017-05-23 17:28:52'),
(226, 1, 'search', 'POST', '2017-05-23 17:28:54', '2017-05-23 17:28:54'),
(227, 1, 'search', 'POST', '2017-05-23 17:29:01', '2017-05-23 17:29:01'),
(228, 1, 'search', 'POST', '2017-05-23 17:29:02', '2017-05-23 17:29:02'),
(229, 1, 'search', 'POST', '2017-05-23 17:29:03', '2017-05-23 17:29:03'),
(230, 1, 'search', 'POST', '2017-05-23 17:29:04', '2017-05-23 17:29:04'),
(231, 1, 'search', 'POST', '2017-05-23 17:29:05', '2017-05-23 17:29:05'),
(232, 1, 'search', 'POST', '2017-05-23 17:29:06', '2017-05-23 17:29:06'),
(233, 1, 'search', 'POST', '2017-05-23 17:29:06', '2017-05-23 17:29:06'),
(234, 1, 'search', 'POST', '2017-05-23 17:42:08', '2017-05-23 17:42:08'),
(235, 1, 'search', 'POST', '2017-05-23 17:42:08', '2017-05-23 17:42:08'),
(236, 1, 'search', 'POST', '2017-05-23 17:42:35', '2017-05-23 17:42:35'),
(237, 1, 'search', 'POST', '2017-05-23 17:42:36', '2017-05-23 17:42:36'),
(238, 1, 'search', 'POST', '2017-05-23 17:42:37', '2017-05-23 17:42:37'),
(239, 1, 'search', 'POST', '2017-05-23 17:42:39', '2017-05-23 17:42:39'),
(240, 1, 'search', 'POST', '2017-05-23 17:43:20', '2017-05-23 17:43:20'),
(241, 1, 'search', 'POST', '2017-05-23 17:43:20', '2017-05-23 17:43:20'),
(242, 1, 'search', 'POST', '2017-05-23 17:43:21', '2017-05-23 17:43:21'),
(243, 1, 'search', 'POST', '2017-05-23 17:43:22', '2017-05-23 17:43:22'),
(244, 1, 'search', 'POST', '2017-05-23 17:44:57', '2017-05-23 17:44:57'),
(245, 1, 'search', 'POST', '2017-05-23 17:45:27', '2017-05-23 17:45:27'),
(246, 1, 'search', 'POST', '2017-05-23 17:46:06', '2017-05-23 17:46:06'),
(247, 1, 'search', 'POST', '2017-05-23 17:46:14', '2017-05-23 17:46:14'),
(248, 1, 'search', 'POST', '2017-05-23 17:47:05', '2017-05-23 17:47:05'),
(249, 1, 'search', 'POST', '2017-05-23 17:47:11', '2017-05-23 17:47:11'),
(250, 1, 'search', 'POST', '2017-05-23 17:47:32', '2017-05-23 17:47:32'),
(251, 1, 'search', 'POST', '2017-05-23 17:47:34', '2017-05-23 17:47:34'),
(252, 1, 'search', 'POST', '2017-05-23 17:47:37', '2017-05-23 17:47:37'),
(253, 1, 'search', 'POST', '2017-05-23 17:47:37', '2017-05-23 17:47:37'),
(254, 1, 'search', 'POST', '2017-05-23 17:47:38', '2017-05-23 17:47:38'),
(255, 1, 'search', 'POST', '2017-05-23 17:47:52', '2017-05-23 17:47:52'),
(256, 1, 'search', 'POST', '2017-05-23 17:47:53', '2017-05-23 17:47:53'),
(257, 1, 'search', 'POST', '2017-05-23 17:48:29', '2017-05-23 17:48:29'),
(258, 1, 'search', 'POST', '2017-05-23 17:48:31', '2017-05-23 17:48:31'),
(259, 1, 'search', 'POST', '2017-05-23 17:48:33', '2017-05-23 17:48:33'),
(260, 1, 'search', 'POST', '2017-05-23 17:48:40', '2017-05-23 17:48:40'),
(261, 1, 'search', 'POST', '2017-05-23 17:48:41', '2017-05-23 17:48:41'),
(262, 1, 'search', 'POST', '2017-05-23 17:50:33', '2017-05-23 17:50:33'),
(263, 1, 'search', 'POST', '2017-05-23 17:50:39', '2017-05-23 17:50:39'),
(264, 1, 'search', 'POST', '2017-05-23 17:50:47', '2017-05-23 17:50:47'),
(265, 1, 'search', 'POST', '2017-05-23 17:50:53', '2017-05-23 17:50:53'),
(266, 1, 'search', 'POST', '2017-05-23 17:50:59', '2017-05-23 17:50:59'),
(267, 1, 'search', 'POST', '2017-05-23 17:51:12', '2017-05-23 17:51:12'),
(268, 1, 'search', 'POST', '2017-05-23 17:51:21', '2017-05-23 17:51:21'),
(269, 1, 'search', 'POST', '2017-05-23 17:52:20', '2017-05-23 17:52:20'),
(270, 1, 'search', 'POST', '2017-05-23 17:52:21', '2017-05-23 17:52:21'),
(271, 1, 'search', 'POST', '2017-05-23 17:52:22', '2017-05-23 17:52:22'),
(272, 1, 'search', 'POST', '2017-05-23 17:52:32', '2017-05-23 17:52:32'),
(273, 1, 'search', 'POST', '2017-05-23 17:54:22', '2017-05-23 17:54:22'),
(274, 1, 'search', 'POST', '2017-05-23 17:54:23', '2017-05-23 17:54:23'),
(275, 1, 'search', 'POST', '2017-05-23 17:54:30', '2017-05-23 17:54:30'),
(276, 1, 'search', 'POST', '2017-05-23 17:54:33', '2017-05-23 17:54:33'),
(277, 1, 'search', 'POST', '2017-05-23 17:55:11', '2017-05-23 17:55:11'),
(278, 1, 'search', 'POST', '2017-05-23 17:55:34', '2017-05-23 17:55:34'),
(279, 1, 'search', 'POST', '2017-05-23 17:55:35', '2017-05-23 17:55:35'),
(280, 1, 'search', 'POST', '2017-05-23 17:56:16', '2017-05-23 17:56:16'),
(281, 1, 'search', 'POST', '2017-05-23 17:56:43', '2017-05-23 17:56:43'),
(282, 1, 'search', 'POST', '2017-05-23 17:56:44', '2017-05-23 17:56:44'),
(283, 1, 'search', 'POST', '2017-05-23 17:56:51', '2017-05-23 17:56:51'),
(284, 1, 'search', 'POST', '2017-05-23 17:56:56', '2017-05-23 17:56:56'),
(285, 1, 'search', 'POST', '2017-05-23 17:57:03', '2017-05-23 17:57:03'),
(286, 1, 'search', 'POST', '2017-05-23 17:57:36', '2017-05-23 17:57:36'),
(287, 1, 'search', 'POST', '2017-05-23 17:57:48', '2017-05-23 17:57:48'),
(288, 1, 'recipe', 'POST', '2017-05-23 18:01:15', '2017-05-23 18:01:15'),
(289, 1, 'search', 'POST', '2017-05-23 18:01:32', '2017-05-23 18:01:32'),
(290, 1, 'search', 'POST', '2017-05-23 18:02:45', '2017-05-23 18:02:45'),
(291, 1, 'search', 'POST', '2017-05-23 18:02:46', '2017-05-23 18:02:46'),
(292, 1, 'search', 'POST', '2017-05-23 18:03:14', '2017-05-23 18:03:14'),
(293, 1, 'search', 'POST', '2017-05-23 18:04:04', '2017-05-23 18:04:04'),
(294, 1, 'search', 'POST', '2017-05-23 18:04:06', '2017-05-23 18:04:06'),
(295, 1, 'search', 'POST', '2017-05-23 18:04:10', '2017-05-23 18:04:10'),
(296, 1, 'search', 'POST', '2017-05-23 18:05:15', '2017-05-23 18:05:15'),
(297, 1, 'search', 'POST', '2017-05-23 18:05:24', '2017-05-23 18:05:24'),
(298, 1, 'search', 'POST', '2017-05-23 18:05:29', '2017-05-23 18:05:29'),
(299, 1, 'search', 'POST', '2017-05-23 18:06:31', '2017-05-23 18:06:31'),
(300, 1, 'search', 'POST', '2017-05-23 18:06:40', '2017-05-23 18:06:40'),
(301, 1, 'search', 'POST', '2017-05-23 18:06:46', '2017-05-23 18:06:46'),
(302, 1, 'search', 'POST', '2017-05-23 18:07:02', '2017-05-23 18:07:02'),
(303, 1, 'search', 'POST', '2017-05-23 18:07:07', '2017-05-23 18:07:07'),
(304, 1, 'search', 'POST', '2017-05-23 18:07:39', '2017-05-23 18:07:39'),
(305, 1, 'search', 'POST', '2017-05-23 18:07:44', '2017-05-23 18:07:44'),
(306, 1, 'recipe', 'POST', '2017-05-23 18:08:53', '2017-05-23 18:08:53'),
(307, 1, 'search', 'POST', '2017-05-23 18:09:05', '2017-05-23 18:09:05'),
(308, 1, 'search', 'POST', '2017-05-23 18:10:31', '2017-05-23 18:10:31'),
(309, 1, 'search', 'POST', '2017-05-23 18:10:33', '2017-05-23 18:10:33'),
(310, 1, 'search', 'POST', '2017-05-23 18:12:48', '2017-05-23 18:12:48'),
(311, 1, 'search', 'POST', '2017-05-23 18:12:57', '2017-05-23 18:12:57'),
(312, 1, 'search', 'POST', '2017-05-23 18:13:04', '2017-05-23 18:13:04'),
(313, 1, 'search', 'POST', '2017-05-23 18:14:43', '2017-05-23 18:14:43'),
(314, 1, 'search', 'POST', '2017-05-23 18:14:50', '2017-05-23 18:14:50'),
(315, 1, 'search', 'POST', '2017-05-23 18:15:08', '2017-05-23 18:15:08'),
(316, 1, 'search', 'POST', '2017-05-23 18:15:16', '2017-05-23 18:15:16'),
(317, 1, 'search', 'POST', '2017-05-23 18:15:22', '2017-05-23 18:15:22'),
(318, 1, 'search', 'POST', '2017-05-23 18:16:54', '2017-05-23 18:16:54'),
(319, 1, 'search', 'POST', '2017-05-24 04:14:49', '2017-05-24 04:14:49'),
(320, 1, 'search', 'POST', '2017-05-24 04:16:06', '2017-05-24 04:16:06');

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
(1, 1, 6, 0, 3, 0, '2017-05-22 16:52:03', '2017-05-23 18:08:53'),
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
(18, 16, 2, 1, 'units', 'raw', '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, 1, NULL, NULL),
(19, 17, 3, 2, 'siung', 'digoreng', '2017-05-23 18:01:16', '2017-05-23 18:01:16', NULL, 1, NULL, NULL),
(20, 17, 4, 1, 'buah', 'mentah', '2017-05-23 18:01:16', '2017-05-23 18:01:16', NULL, 1, NULL, NULL),
(21, 17, 5, 1, 'buah', 'mentah', '2017-05-23 18:01:16', '2017-05-23 18:01:16', NULL, 1, NULL, NULL),
(22, 18, 3, 2, 'siung', 'digoreng', '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, 1, NULL, NULL),
(23, 18, 4, 1, 'buah', 'mentah', '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, 1, NULL, NULL),
(24, 18, 5, 1, 'buah', 'mentah', '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, 1, NULL, NULL),
(25, 18, 6, 1, 'buah', 'mentah', '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, 1, NULL, NULL);

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
(16, 16, 2, '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, NULL, NULL, NULL),
(17, 17, 3, '2017-05-23 18:01:16', '2017-05-23 18:01:16', NULL, NULL, NULL, NULL),
(18, 17, 4, '2017-05-23 18:01:16', '2017-05-23 18:01:16', NULL, NULL, NULL, NULL),
(19, 17, 5, '2017-05-23 18:01:16', '2017-05-23 18:01:16', NULL, NULL, NULL, NULL),
(20, 18, 3, '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, NULL, NULL, NULL),
(21, 18, 4, '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, NULL, NULL, NULL),
(22, 18, 5, '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, NULL, NULL, NULL),
(23, 18, 6, '2017-05-23 18:08:53', '2017-05-23 18:08:53', NULL, NULL, NULL, NULL);

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
(16, 'Recipe 1', 'This is description', '1. one 2. two 3. three', 5, NULL, NULL, 'picture.jpg', '2017-05-22 03:45:35', '2017-05-22 03:45:35', NULL, 1, NULL, NULL),
(17, 'soto 1', 'soto kuah', '1. masak soto', 1, NULL, NULL, 'soto.jpg', '2017-05-23 18:01:16', '2017-05-24 04:15:20', NULL, 1, NULL, NULL),
(18, 'soto 2', 'soto kuah', '1. masak soto', 1, NULL, NULL, 'soto.jpg', '2017-05-23 18:08:53', '2017-05-24 04:15:22', NULL, 1, NULL, NULL);

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
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ingredient_recipe`
--
ALTER TABLE `ingredient_recipe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
