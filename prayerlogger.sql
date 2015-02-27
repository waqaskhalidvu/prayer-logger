-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2015 at 05:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prayerlogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `alarms`
--

CREATE TABLE IF NOT EXISTS `alarms` (
`id` int(10) unsigned NOT NULL,
  `prayer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `repeat` tinyint(1) NOT NULL,
  `repeat_days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('2015_01_28_113736_create_prayerlogs_table', 1),
('2015_01_28_122036_create_users_table', 1),
('2015_01_28_133551_create_mosques_table', 1),
('2015_01_28_135523_create_alarms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mosques`
--

CREATE TABLE IF NOT EXISTS `mosques` (
`id` int(10) unsigned NOT NULL,
  `mosque_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mosques`
--

INSERT INTO `mosques` (`id`, `mosque_name`, `country`, `state`, `city`, `street`, `created_at`, `updated_at`) VALUES
(1, 'bag-e-jinnah', 'Pakistan', 'Punjab', 'lahore', 'lawrence road', '2015-02-25 12:02:36', '2015-02-25 12:02:36'),
(2, 'Musjid Kamal e Mustafa', 'Pakistan', 'Punjab', 'lahore', 'Mozang road', '2015-02-26 07:08:03', '2015-02-26 07:08:03'),
(3, 'Musjid Darel Islam', 'Pakistan', 'Punjab', 'lahore', 'lawerence road lahore', '2015-02-26 07:09:04', '2015-02-26 07:09:04'),
(4, 'Musjid Bahar e Madina', 'Pakistan', 'Punjab', 'lahore ', 'model town', '2015-02-26 07:09:53', '2015-02-26 07:09:53'),
(5, 'Musjid Aqsa', 'Pakistan', 'Punjab', 'lahore', 'saffan wala chownk', '2015-02-26 07:11:19', '2015-02-26 07:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `prayerlogs`
--

CREATE TABLE IF NOT EXISTS `prayerlogs` (
`id` int(10) unsigned NOT NULL,
  `logged` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offered` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prayer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prayer_date` date NOT NULL,
  `prayer_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offered_date` date NOT NULL,
  `offered_time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `mosque_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prayerlogs`
--

INSERT INTO `prayerlogs` (`id`, `logged`, `offered`, `prayer_name`, `prayer_date`, `prayer_type`, `offered_date`, `offered_time`, `created_at`, `updated_at`, `user_id`, `mosque_id`) VALUES
(1, 'logged', 'Offer', 'Fajr', '2015-02-24', 'Regular', '0000-00-00', '17:00:30', '2015-02-23 06:28:17', '2015-02-27 07:02:37', 1, 1),
(18, 'logged', 'Offer', 'Zuhar', '2015-02-24', 'Regular', '0000-00-00', '14:50:30', '2015-02-25 11:44:31', '2015-02-26 04:51:50', 1, 0),
(19, 'logged', 'Unoffer', 'Asr', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-27 07:47:23', 1, 0),
(20, 'unlogged', '', 'Mughrab', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-25 11:44:31', 1, 0),
(21, 'unlogged', '', 'Ishaa', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-25 11:44:31', 1, 0),
(22, 'unlogged', '', 'Fajr', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-25 11:44:31', 1, 0),
(23, 'unlogged', '', 'Zuhar', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-25 11:44:31', 1, 0),
(24, 'logged', 'Unoffer', 'Asr', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-27 07:47:58', 1, 0),
(25, 'unlogged', '', 'Mughrab', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-25 11:44:31', 1, 0),
(26, 'unlogged', '', 'Ishaa', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-25 11:44:31', '2015-02-25 11:44:31', 1, 0),
(27, 'unlogged', '', 'Fajr', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-26 00:39:24', '2015-02-26 00:39:24', 1, 0),
(28, 'logged', 'Offer', 'Fajr', '2015-02-15', 'Qaza', '0000-00-00', '17:05:45', '2015-02-26 04:55:10', '2015-02-26 07:07:06', 2, 0),
(30, 'logged', 'Unoffer', 'Zuhar', '2015-02-15', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:07:17', 2, 0),
(31, 'logged', 'Offer', 'Asr', '2015-02-15', 'Regular', '0000-00-00', '17:05:15', '2015-02-26 04:56:18', '2015-02-26 07:08:03', 2, 2),
(32, 'logged', 'Offer', 'Mughrab', '2015-02-15', 'Qaza', '0000-00-00', '17:05:00', '2015-02-26 04:56:18', '2015-02-26 07:09:04', 2, 3),
(33, 'logged', 'Offer', 'Ishaa', '2015-02-15', 'Regular', '0000-00-00', '17:05:00', '2015-02-26 04:56:18', '2015-02-26 07:09:53', 2, 4),
(34, 'logged', 'Unoffer', 'Fajr', '2015-02-16', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:10:00', 2, 0),
(35, 'logged', 'Unoffer', 'Zuhar', '2015-02-16', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:10:06', 2, 0),
(36, 'logged', 'Offer', 'Asr', '2015-02-16', 'Qasar', '0000-00-00', '17:10:00', '2015-02-26 04:56:18', '2015-02-26 07:10:25', 2, 0),
(37, 'logged', 'Offer', 'Mughrab', '2015-02-16', 'Qasar', '0000-00-00', '17:10:30', '2015-02-26 04:56:18', '2015-02-26 07:11:19', 2, 5),
(38, 'logged', 'Unoffer', 'Ishaa', '2015-02-16', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:11:26', 2, 0),
(39, 'logged', 'Unoffer', 'Fajr', '2015-02-17', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:12:03', 2, 0),
(40, 'logged', 'Unoffer', 'Zuhar', '2015-02-17', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:12:12', 2, 0),
(41, 'logged', 'Unoffer', 'Asr', '2015-02-17', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:12:23', 2, 0),
(42, 'logged', 'Offer', 'Mughrab', '2015-02-17', 'Qaza', '0000-00-00', '17:10:30', '2015-02-26 04:56:18', '2015-02-26 07:12:44', 2, 0),
(43, 'logged', 'Offer', 'Ishaa', '2015-02-17', 'Qaza', '0000-00-00', '17:10:45', '2015-02-26 04:56:18', '2015-02-26 07:12:59', 2, 0),
(44, 'logged', 'Unoffer', 'Fajr', '2015-02-18', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:13:12', 2, 0),
(45, 'logged', 'Unoffer', 'Zuhar', '2015-02-18', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:13:39', 2, 0),
(46, 'logged', 'Offer', 'Asr', '2015-02-18', 'Qasar', '0000-00-00', '17:10:45', '2015-02-26 04:56:18', '2015-02-26 07:13:56', 2, 0),
(47, 'logged', 'Unoffer', 'Mughrab', '2015-02-18', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:14:07', 2, 0),
(48, 'logged', 'Unoffer', 'Ishaa', '2015-02-18', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:14:14', 2, 0),
(49, 'unlogged', '', 'Fajr', '2015-02-19', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(50, 'unlogged', '', 'Zuhar', '2015-02-19', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(51, 'unlogged', '', 'Asr', '2015-02-19', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(52, 'unlogged', '', 'Mughrab', '2015-02-19', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(53, 'unlogged', '', 'Ishaa', '2015-02-19', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(54, 'unlogged', '', 'Fajr', '2015-02-20', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(55, 'unlogged', '', 'Zuhar', '2015-02-20', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(56, 'unlogged', '', 'Asr', '2015-02-20', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(57, 'unlogged', '', 'Mughrab', '2015-02-20', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(58, 'unlogged', '', 'Ishaa', '2015-02-20', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(59, 'unlogged', '', 'Fajr', '2015-02-21', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(60, 'unlogged', '', 'Zuhar', '2015-02-21', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(61, 'unlogged', '', 'Asr', '2015-02-21', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(62, 'unlogged', '', 'Mughrab', '2015-02-21', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(63, 'unlogged', '', 'Ishaa', '2015-02-21', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(64, 'unlogged', '', 'Fajr', '2015-02-22', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(65, 'unlogged', '', 'Zuhar', '2015-02-22', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(66, 'unlogged', '', 'Asr', '2015-02-22', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(67, 'unlogged', '', 'Mughrab', '2015-02-22', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(68, 'unlogged', '', 'Ishaa', '2015-02-22', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(69, 'unlogged', '', 'Fajr', '2015-02-23', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(70, 'unlogged', '', 'Zuhar', '2015-02-23', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(71, 'unlogged', '', 'Asr', '2015-02-23', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(72, 'unlogged', '', 'Mughrab', '2015-02-23', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(73, 'unlogged', '', 'Ishaa', '2015-02-23', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(74, 'unlogged', '', 'Fajr', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(75, 'unlogged', '', 'Zuhar', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(76, 'unlogged', '', 'Asr', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(77, 'unlogged', '', 'Mughrab', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(78, 'unlogged', '', 'Ishaa', '2015-02-24', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(79, 'logged', 'Unoffer', 'Fajr', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 07:11:46', 2, 0),
(80, 'unlogged', '', 'Zuhar', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(81, 'unlogged', '', 'Asr', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(82, 'unlogged', '', 'Mughrab', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(83, 'unlogged', '', 'Ishaa', '2015-02-25', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(84, 'unlogged', '', 'Fajr', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(85, 'unlogged', '', 'Zuhar', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-26 04:56:18', '2015-02-26 04:56:18', 2, 0),
(86, 'unlogged', '', 'Asr', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-26 07:06:40', '2015-02-26 07:06:40', 2, 0),
(87, 'unlogged', '', 'Zuhar', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-26 08:29:56', '2015-02-26 08:29:56', 1, 0),
(88, 'unlogged', '', 'Asr', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-26 08:29:56', '2015-02-26 08:29:56', 1, 0),
(89, 'unlogged', '', 'Mughrab', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-26 08:29:56', '2015-02-26 08:29:56', 1, 0),
(90, 'unlogged', '', 'Ishaa', '2015-02-26', '', '0000-00-00', '00:00:00', '2015-02-27 00:46:02', '2015-02-27 00:46:02', 1, 0),
(91, 'unlogged', '', 'Fajr', '2015-02-27', '', '0000-00-00', '00:00:00', '2015-02-27 00:46:02', '2015-02-27 00:46:02', 1, 0),
(92, 'unlogged', '', 'Zuhar', '2015-02-27', '', '0000-00-00', '00:00:00', '2015-02-27 03:58:08', '2015-02-27 03:58:08', 1, 0),
(93, 'unlogged', '', 'Asr', '2015-02-27', '', '0000-00-00', '00:00:00', '2015-02-27 07:38:41', '2015-02-27 07:38:41', 1, 0),
(94, 'unlogged', '', 'Mughrab', '2015-02-27', '', '0000-00-00', '00:00:00', '2015-02-27 09:57:35', '2015-02-27 09:57:35', 1, 0),
(95, 'unlogged', '', 'Ishaa', '2015-02-27', '', '0000-00-00', '00:00:00', '2015-02-27 09:57:35', '2015-02-27 09:57:35', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calculation_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `juristic_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `active`, `code`, `calculation_method`, `juristic_method`, `created_at`, `updated_at`) VALUES
(1, 'yasir', 'rasool', 'bc100403103@vu.edu.pk', '$2y$10$lwugDB/.K.Gn.GnP1MU91uCscFZxVYlNZHCsM2jttlSQYYjI0By8q', 1, '', '', '', '2015-02-25 01:47:54', '2015-02-25 01:48:02'),
(2, 'shahzaib', 'zulfiqar', 'bc090402371@vu.edu.pk', '$2y$10$23aDbQb6G1UBrcyWT3.fMeg5uaQErQWy8jSkFBWAIYJWsSwXYfiSe', 1, '', '', '', '2015-02-26 04:53:24', '2015-02-26 04:54:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alarms`
--
ALTER TABLE `alarms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mosques`
--
ALTER TABLE `mosques`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayerlogs`
--
ALTER TABLE `prayerlogs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alarms`
--
ALTER TABLE `alarms`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mosques`
--
ALTER TABLE `mosques`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prayerlogs`
--
ALTER TABLE `prayerlogs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
