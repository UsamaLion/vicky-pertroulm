-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 08:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vickypetroleum`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `Title`, `Description`, `Type`, `m_date`, `user`) VALUES
(88, 'New Package Purchased!', 'A New Package has been purchased by: sb-gq47mq5772643@personal.example.com Successfully!', 'PLAN_PURCHASED', '2021-04-04 15:36:51', 'sb-gq47mq5772643@personal.example.com'),
(89, 'New Package Purchased!', 'A New Package has been purchased by Account: sb-gq47mq5772643@personal.example.com Successfully!', 'PLAN_PURCHASED', '2021-04-04 15:45:05', 'demo@gmail.com'),
(90, 'Profile EDITED', 'Profile Data Edited! Username: demo@gmail.com', 'PROFILE_EDITED', '2021-04-04 18:48:28', 'demo@gmail.com'),
(91, 'Profile EDITED', 'Profile Data Edited! Username: demo@gmail.com', 'PROFILE_EDITED', '2021-04-04 18:49:07', 'demo@gmail.com'),
(92, 'Profile EDITED', 'Profile Data Edited! Username: demo@gmail.com', 'PROFILE_EDITED', '2021-04-04 19:04:35', 'demo@gmail.com'),
(93, 'New Package Purchased!', 'A New Package has been purchased by Account: sb-gq47mq5772643@personal.example.com Successfully!', 'PLAN_PURCHASED', '2021-04-04 21:22:19', 'testuser@gmail.com'),
(94, 'New Package Purchased!', 'A New Package has been purchased by Account: sb-gq47mq5772643@personal.example.com Successfully!', 'PLAN_PURCHASED', '2021-04-04 22:24:44', 'testuser@gmail.com'),
(95, 'New Package Purchased!', 'A New Package has been purchased by Account: sb-gq47mq5772643@personal.example.com Successfully!', 'PLAN_PURCHASED', '2021-04-04 22:26:24', 'testuser@gmail.com'),
(96, 'New Package Purchased!', 'A New Package has been purchased by Account: sb-gq47mq5772643@personal.example.com Successfully!', 'PLAN_PURCHASED', '2021-04-04 22:31:59', 'testuser@gmail.com'),
(97, 'New Package Purchased!', 'A New Package has been purchased by Account: primesoftpk100@gmail.com Successfully!', 'PLAN_PURCHASED', '2021-04-04 22:52:38', 'testuser@gmail.com'),
(98, 'New Package Purchased!', 'A New Package has been purchased by Account: sb-gq47mq5772643@personal.example.com Successfully!', 'PLAN_PURCHASED', '2021-04-06 20:31:05', 'testuser@gmail.com'),
(99, 'New Package Purchased!', 'A New Package has been purchased by Account: primesoftpk100@gmail.com Successfully!', 'PLAN_PURCHASED', '2021-04-12 13:58:33', 'testuser@gmail.com'),
(100, 'Profile EDITED', 'Profile Data Edited! Username: gtara@gmail.com', 'PROFILE_EDITED', '2021-07-01 15:38:58', 'gtara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `profile_pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `m_date`, `status`, `type`, `profile_pic`) VALUES
(1, 'momin', 'alimomin5@live.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-11-17 18:49:35', 'ACTIVE', 'admin', ''),
(7, 'admbrots', 'brots@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-04-11 07:54:07', 'ACTIVE', 'admin', 'img/assets/users/images/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `type` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `title`, `description`, `type`, `user`, `m_date`) VALUES
(42, 'User Logged In', 'A User logged in to the system! User ID: demo@gmail.com', 'LOGIN_SUCCESS', 'demo@gmail.com', '2021-03-30 20:12:24'),
(43, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: demo@gmail.com', 'LOGIN_FAILED', 'demo@gmail.com', '2021-04-03 05:21:22'),
(44, 'User Logged In', 'A User logged in to the system! User ID: demo@gmail.com', 'LOGIN_SUCCESS', 'demo@gmail.com', '2021-04-03 05:21:27'),
(45, 'User Logged In', 'A User logged in to the system! User ID: demo@gmail.com', 'LOGIN_SUCCESS', 'demo@gmail.com', '2021-04-03 21:18:17'),
(46, 'User Logged In', 'A User logged in to the system! User ID: demo@gmail.com', 'LOGIN_SUCCESS', 'demo@gmail.com', '2021-04-04 18:27:40'),
(47, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-04 19:53:16'),
(48, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-04 21:18:50'),
(49, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-04 21:18:57'),
(50, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-04 21:20:09'),
(51, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-04 21:20:45'),
(52, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-04 22:51:36'),
(53, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-05 07:05:04'),
(54, 'User Logged In', 'A User logged in to the system! User ID: test@test2.com', 'LOGIN_SUCCESS', 'test@test2.com', '2021-04-05 07:08:23'),
(55, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-06 15:40:18'),
(56, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-06 15:43:42'),
(57, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-06 20:30:00'),
(58, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-08 09:51:46'),
(59, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: momin', 'LOGIN_FAILED', 'momin', '2021-04-11 07:52:39'),
(60, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: momin', 'LOGIN_FAILED', 'momin', '2021-04-11 07:53:27'),
(61, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: momin', 'LOGIN_FAILED', 'momin', '2021-04-11 07:53:35'),
(62, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-11 08:00:08'),
(63, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: testuser@gmail.com', 'LOGIN_FAILED', 'testuser@gmail.com', '2021-04-12 13:30:22'),
(64, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-12 13:30:35'),
(65, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-12 13:44:53'),
(66, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-12 14:14:13'),
(67, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: testuser@gmail.com', 'LOGIN_FAILED', 'testuser@gmail.com', '2021-04-12 15:34:57'),
(68, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-12 15:35:08'),
(69, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-12 15:43:31'),
(70, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-14 16:25:50'),
(71, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-15 14:55:02'),
(72, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: testuser@gmail.com', 'LOGIN_FAILED', 'testuser@gmail.com', '2021-04-19 11:12:04'),
(73, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: testuser@gmail.com', 'LOGIN_FAILED', 'testuser@gmail.com', '2021-04-19 11:12:17'),
(74, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-19 11:48:35'),
(75, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: test@user', 'LOGIN_FAILED', 'test@user', '2021-04-19 12:09:11'),
(76, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: testuser@gmail.com', 'LOGIN_FAILED', 'testuser@gmail.com', '2021-04-19 12:09:33'),
(77, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-19 12:09:48'),
(78, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-19 12:10:58'),
(79, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-19 12:28:50'),
(80, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-04-19 15:59:01'),
(81, 'User Logged In', 'A User logged in to the system! User ID: testuser@gmail.com', 'LOGIN_SUCCESS', 'testuser@gmail.com', '2021-06-08 15:22:51'),
(82, 'User Logged In', 'A User logged in to the system! User ID: demo1@gmail.com', 'LOGIN_SUCCESS', 'demo1@gmail.com', '2021-06-12 07:40:16'),
(83, 'User Logged In', 'A User logged in to the system! User ID: demo1@gmail.com', 'LOGIN_SUCCESS', 'demo1@gmail.com', '2021-06-15 06:35:45'),
(84, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: testuser2@gmail.com', 'LOGIN_FAILED', 'testuser2@gmail.com', '2021-07-01 15:34:55'),
(85, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: testuser2@gmail.com', 'LOGIN_FAILED', 'testuser2@gmail.com', '2021-07-01 15:37:24'),
(86, 'User Logged In', 'A User logged in to the system! User ID: gtara@gmail.com', 'LOGIN_SUCCESS', 'gtara@gmail.com', '2021-07-01 15:38:37'),
(87, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: test@gmail.com', 'LOGIN_FAILED', 'test@gmail.com', '2022-03-31 09:43:53'),
(88, 'User Logged In', 'A User logged in to the system! User ID: sa@gmail.com', 'LOGIN_SUCCESS', 'sa@gmail.com', '2022-03-31 09:44:30'),
(89, 'User Logged In', 'A User logged in to the system! User ID: sa@gmail.com', 'LOGIN_SUCCESS', 'sa@gmail.com', '2022-03-31 09:51:53'),
(90, 'User Logged In', 'A User logged in to the system! User ID: sa@gmail.com', 'LOGIN_SUCCESS', 'sa@gmail.com', '2022-03-31 10:30:20'),
(91, 'User Logged In', 'A User logged in to the system! User ID: sa@gmail.com', 'LOGIN_SUCCESS', 'sa@gmail.com', '2022-03-31 10:32:27'),
(92, 'Failed Attempt', 'A Failed Login Attempt Made By User ID: sa@gmail.com', 'LOGIN_FAILED', 'sa@gmail.com', '2022-04-04 06:05:19'),
(93, 'User Logged In', 'A User logged in to the system! User ID: sa@gmail.com', 'LOGIN_SUCCESS', 'sa@gmail.com', '2022-04-04 06:05:27'),
(94, 'User Logged In', 'A User logged in to the system! User ID: sa@gmail.com', 'LOGIN_SUCCESS', 'sa@gmail.com', '2022-04-04 18:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payer_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payer_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `update_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'pack 1', '', 15.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `artist_id` varchar(255) NOT NULL,
  `song_id` varchar(255) NOT NULL,
  `liketype` int(10) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `artist_id`, `song_id`, `liketype`, `m_date`) VALUES
(1, '4', '1', 1, '2021-02-28 20:55:38'),
(2, '4', '1', 2, '2021-03-31 20:55:51'),
(3, '8', '2', 1, '2021-04-04 19:54:34'),
(4, '8', '2', 2, '2021-04-04 19:54:39'),
(5, '8', '2', 1, '2021-04-04 19:54:48'),
(6, '8', '2', 2, '2021-03-04 19:54:54'),
(7, '8', '2', 1, '2021-01-04 19:54:59'),
(8, '8', '2', 2, '2021-01-04 19:55:03'),
(9, '8', '2', 1, '2021-04-04 19:55:07'),
(10, '8', '2', 2, '2021-01-04 19:55:10'),
(11, '8', '2', 1, '2021-04-04 19:55:15'),
(12, '8', '2', 3, '2021-02-04 19:55:19'),
(13, '8', '2', 1, '2021-04-04 19:55:22'),
(14, '8', '2', 2, '2021-04-04 19:55:25'),
(15, '8', '2', 1, '2021-01-04 19:55:28'),
(16, '8', '2', 2, '2021-02-04 19:55:32'),
(17, '4', '1', 1, '2021-04-04 19:55:51'),
(18, '4', '1', 2, '2021-04-04 19:55:55'),
(19, '4', '1', 1, '2021-02-04 19:56:02'),
(20, '4', '1', 2, '2021-04-04 19:56:05'),
(21, '4', '1', 1, '2021-04-04 19:56:09'),
(22, '8', '2', 1, '2021-04-04 21:41:59'),
(23, '8', '2', 2, '2021-04-04 21:42:07'),
(24, '8', '2', 1, '2021-04-04 21:42:13'),
(25, '8', '2', 2, '2021-04-04 21:42:18'),
(26, '8', '2', 2, '2021-04-04 21:42:20'),
(27, '8', '2', 1, '2021-04-04 21:42:24'),
(28, '8', '2', 1, '2021-04-04 21:42:26'),
(29, '8', '2', 2, '2021-04-04 21:42:30'),
(30, '8', '2', 1, '2021-04-04 21:42:35'),
(31, '8', '2', 1, '2021-04-04 21:42:37'),
(32, '8', '2', 1, '2021-04-04 21:42:49'),
(33, '8', '2', 1, '2021-04-04 21:42:49'),
(34, '8', '2', 1, '2021-04-04 21:42:49'),
(35, '8', '2', 1, '2021-04-04 21:42:50'),
(36, '8', '2', 1, '2021-04-04 21:42:50'),
(37, '8', '2', 1, '2021-04-04 21:42:50'),
(38, '8', '2', 1, '2021-04-04 21:42:50'),
(39, '8', '2', 1, '2021-04-04 21:42:50'),
(40, '8', '2', 1, '2021-04-04 21:42:50'),
(41, '8', '2', 1, '2021-04-04 21:42:50'),
(42, '8', '2', 1, '2021-04-04 21:42:50'),
(43, '8', '2', 1, '2021-04-04 21:42:56'),
(44, '8', '2', 1, '2021-04-04 21:43:14'),
(45, '8', '2', 1, '2021-04-04 21:43:14'),
(46, '8', '2', 1, '2021-04-04 21:43:14'),
(47, '8', '2', 1, '2021-04-04 21:43:14'),
(48, '8', '2', 1, '2021-04-04 21:43:14'),
(49, '8', '2', 1, '2021-04-04 21:43:14'),
(50, '8', '2', 1, '2021-04-04 21:43:14'),
(51, '8', '2', 1, '2021-04-04 21:43:14'),
(52, '8', '2', 1, '2021-04-04 21:43:14'),
(53, '8', '2', 1, '2021-04-04 21:43:14'),
(54, '8', '2', 1, '2021-04-04 21:43:14'),
(55, '8', '2', 1, '2021-04-04 21:43:14'),
(56, '8', '2', 1, '2021-04-04 21:43:14'),
(57, '8', '2', 1, '2021-04-04 21:43:14'),
(58, '8', '2', 1, '2021-04-04 21:43:14'),
(59, '8', '2', 1, '2021-04-04 21:43:14'),
(60, '8', '2', 1, '2021-04-04 21:43:14'),
(61, '8', '2', 1, '2021-04-04 21:43:14'),
(62, '8', '2', 1, '2021-04-04 21:43:14'),
(63, '8', '2', 1, '2021-04-04 21:43:14'),
(64, '8', '2', 1, '2021-04-04 21:43:14'),
(65, '8', '2', 1, '2021-04-04 21:43:14'),
(66, '8', '2', 1, '2021-04-04 21:43:14'),
(67, '8', '2', 1, '2021-04-04 21:43:14'),
(68, '8', '2', 1, '2021-04-04 21:43:14'),
(69, '8', '2', 1, '2021-04-04 21:43:14'),
(70, '8', '2', 1, '2021-04-04 21:43:14'),
(71, '8', '2', 1, '2021-04-04 21:43:14'),
(72, '8', '2', 1, '2021-04-04 21:43:14'),
(73, '8', '2', 1, '2021-04-04 21:43:14'),
(74, '8', '2', 1, '2021-04-04 21:43:14'),
(75, '8', '2', 1, '2021-04-04 21:43:14'),
(76, '8', '2', 1, '2021-04-04 21:43:14'),
(77, '8', '2', 1, '2021-04-04 21:43:14'),
(78, '8', '2', 1, '2021-04-04 21:43:14'),
(79, '8', '2', 1, '2021-04-04 21:43:14'),
(80, '8', '2', 1, '2021-04-04 21:43:14'),
(81, '8', '2', 1, '2021-04-04 21:43:14'),
(82, '8', '2', 1, '2021-04-04 21:43:14'),
(83, '8', '2', 1, '2021-04-04 21:43:14'),
(84, '8', '2', 2, '2021-04-04 21:43:59'),
(85, '8', '2', 2, '2021-04-04 21:43:59'),
(86, '8', '2', 2, '2021-04-04 21:43:59'),
(87, '8', '2', 2, '2021-04-04 21:43:59'),
(88, '8', '2', 2, '2021-04-04 21:43:59'),
(89, '8', '2', 2, '2021-04-04 21:43:59'),
(90, '8', '2', 2, '2021-04-04 21:43:59'),
(91, '8', '2', 2, '2021-04-04 21:43:59'),
(92, '8', '2', 2, '2021-04-04 21:43:59'),
(93, '8', '2', 2, '2021-04-04 21:43:59'),
(94, '8', '2', 2, '2021-04-04 21:43:59'),
(95, '8', '2', 2, '2021-04-04 21:43:59'),
(96, '8', '2', 2, '2021-04-04 21:43:59'),
(97, '8', '2', 2, '2021-04-04 21:43:59'),
(98, '8', '2', 2, '2021-04-04 21:43:59'),
(99, '8', '2', 2, '2021-04-04 21:43:59'),
(100, '8', '2', 2, '2021-04-04 21:43:59'),
(101, '8', '2', 2, '2021-04-04 21:43:59'),
(102, '8', '2', 2, '2021-04-04 21:43:59'),
(103, '8', '2', 2, '2021-04-04 21:43:59'),
(104, '8', '2', 2, '2021-04-04 21:43:59'),
(105, '8', '2', 2, '2021-04-04 21:43:59'),
(106, '8', '2', 2, '2021-04-04 21:43:59'),
(107, '8', '2', 2, '2021-04-04 21:43:59'),
(108, '8', '2', 2, '2021-04-04 21:43:59'),
(109, '8', '2', 2, '2021-04-04 21:43:59'),
(110, '8', '2', 2, '2021-04-04 21:43:59'),
(111, '8', '2', 2, '2021-04-04 21:43:59'),
(112, '8', '2', 2, '2021-04-04 21:43:59'),
(113, '8', '2', 2, '2021-04-04 21:43:59'),
(114, '8', '2', 2, '2021-04-04 21:43:59'),
(115, '8', '2', 2, '2021-04-04 21:43:59'),
(116, '8', '2', 2, '2021-04-04 21:43:59'),
(117, '8', '2', 2, '2021-04-04 21:43:59'),
(118, '8', '2', 2, '2021-04-04 21:43:59'),
(119, '8', '2', 2, '2021-04-04 21:43:59'),
(120, '8', '2', 2, '2021-04-04 21:43:59'),
(121, '8', '2', 2, '2021-04-04 21:43:59'),
(122, '8', '2', 2, '2021-04-04 21:43:59'),
(123, '8', '2', 2, '2021-04-04 21:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `cus_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pkg_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` varchar(50) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `u_id`, `cus_id`, `username`, `pkg_name`, `email`, `total`, `m_date`, `status`) VALUES
(30, 'cs_test_a1UZA7D83VGpE2gLoMP6kYJXwAPOCwYIkoidtycBEiFs9jl6dStpKJzW5o', 'cus_JHGxxA5WAeBcre', 'testuser@gmail.com', 'Premium', 'testuser@gmail.com', '499', '2021-04-10 15:09:09', 'paid'),
(31, 'cs_test_a1vN23FjHSAkqWYuIJOEPs1mBGgbKjuEStsJ6dqd6sdjsdQOPDACs4WR9d', 'cus_JI0Ooy5Cxd0DOb', 'testuser@gmail.com', 'Premium', 'testuser@gmail.com', '499', '2021-04-12 14:04:29', 'paid'),
(32, 'cs_test_a1WbFOS6pvGEG4IgEhxUbjUaT1IPabUcLaUZFarfCqrgrrWmkL2UuFeIrj', 'cus_JI0TpfjwfpLJne', 'testuser@gmail.com', 'Premium', 'testuser@gmail.com', '499', '2021-04-12 14:09:33', 'paid'),
(33, 'cs_test_a1dMDXx4nCl3MBAzXd7KO8sGWAuHKcHE8BQjt3aQqvlpRgDyWW9bVRtlUB', 'cus_JI22UUPImIIU2X', 'testuser@gmail.com', 'Premium', 'admin@gmail.com', '499', '2021-04-12 15:46:35', 'paid'),
(34, 'cs_test_a1sLDfu27EJ6IiGmF1rJmIaYMiBXHcbuP4xKjUvM8C2Sw3e7xnHJzLvmfR', 'cus_JI26GMnmNhPzxE', 'testuser@gmail.com', 'Premium', 'testuser2@gmail.com', '499', '2021-04-12 15:51:03', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `artist_id` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `artist_id`, `title`, `genre`) VALUES
(1, '4', 'Lovely', 'Rock'),
(2, '8', 'Sugar and brownies', 'POP');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_subscriptions`
--

CREATE TABLE `stripe_subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` enum('stripe') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'stripe',
  `stripe_subscription_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_customer_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_plan_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `plan_amount` float(10,2) NOT NULL,
  `plan_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plan_interval` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `plan_interval_count` tinyint(2) NOT NULL,
  `payer_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `plan_period_start` datetime NOT NULL,
  `plan_period_end` datetime NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stripe_subscriptions`
--

INSERT INTO `stripe_subscriptions` (`id`, `user_id`, `username`, `payment_method`, `stripe_subscription_id`, `stripe_customer_id`, `stripe_plan_id`, `plan_amount`, `plan_amount_currency`, `plan_interval`, `plan_interval_count`, `payer_email`, `created`, `plan_period_start`, `plan_period_end`, `status`) VALUES
(1, 10, 'demo1@gmail.com', 'stripe', 'sub_JekzbaVSLi1iBZ', 'cus_JekzGJOziSyZFX', 'plan_JekzolqZMoxW1j', 4.99, 'eur', 'month', 1, 'demo1@gmail.com', '2021-06-12 07:41:23', '2021-06-12 07:41:23', '2021-07-12 07:41:23', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fb_url` varchar(1000) NOT NULL,
  `yt_url` varchar(1000) NOT NULL,
  `insta_url` varchar(1000) NOT NULL,
  `spotify_url` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `aboutme` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `email`, `password`, `fb_url`, `yt_url`, `insta_url`, `spotify_url`, `city`, `country`, `address`, `postalcode`, `aboutme`, `type`, `status`, `image`, `m_date`) VALUES
(1, 'Super Admin', '', 'sa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '0', 'ACTIVE', '', '2021-04-11 07:55:31'),
(4, 'demo test', 'user', 'demo@gmail.com', '202cb962ac59075b964b07152d234b70', 'www.facebook.com/demouser1', 'www.youtube.com/demouser1', 'www.instagram.com/demouser1', 'www.spotify.com/demouser1', 'CA', 'USA', '1 Main st, san Jose, CA 96580', '96580', 'i am an artist', '1', 'ACTIVE', '', '2021-04-11 07:55:33'),
(8, 'test', 'user', 'testuser@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '0', 'ACTIVE', '', '2021-04-14 16:30:46'),
(9, 'Test', 'test', 'test@test2.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '0', 'ACTIVE', '', '2021-04-11 07:55:41'),
(10, 'demo', 'user', 'demo1@gmail.com', '202cb962ac59075b964b07152d234b70', 'www.facebook.com', 'www.youtube.com', 'www.youtube.com', 'www.youtube.com', '', '', '', '', '', '1', 'ACTIVE', '', '2021-06-12 07:41:25'),
(11, 'Robe', 'Tara', 'gtara@gmail.com', '202cb962ac59075b964b07152d234b70', 'ee', 'ee', 'ee', 'ee', '', '', '', '', '', 'User', 'ACTIVE', '', '2021-07-01 15:38:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stripe_subscriptions`
--
ALTER TABLE `stripe_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stripe_subscriptions`
--
ALTER TABLE `stripe_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
