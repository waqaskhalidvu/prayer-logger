-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2015 at 04:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prayer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `repeat` tinyint(1) NOT NULL,
  `repeat_days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2015_01_28_102949_create_users_table', 1),
('2015_01_28_103910_create_users_table', 2),
('2015_01_28_113736_create_prayerlogs_table', 3),
('2015_01_28_115704_create_users_table', 4),
('2015_01_28_122036_create_users_table', 5),
('2015_01_28_133551_create_mosques_table', 6),
('2015_01_28_135523_create_alarms_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mosques`
--

CREATE TABLE IF NOT EXISTS `mosques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mosque_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prayerlogs`
--

CREATE TABLE IF NOT EXISTS `prayerlogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `offered` tinyint(1) NOT NULL,
  `prayer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prayer_date` date NOT NULL,
  `prayer_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offered_date` date NOT NULL,
  `offered_time` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calculation_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `juristic_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `active`, `code`, `calculation_method`, `juristic_method`, `created_at`, `updated_at`) VALUES
(17, 'shahzaib', 'zulfiqar', 'sosweet.yasir@yahoo.com', '01102371', NULL, '', NULL, NULL, '2015-01-30 11:53:57', '2015-01-30 11:53:57'),
(18, 'shahzaib', 'zulfiqar', 'sosweet.yasir@gmail.com', '01102371', NULL, '', NULL, NULL, '2015-01-30 12:04:21', '2015-01-30 12:04:21'),
(20, 'yasir', 'rasool', 'bc100403103@vu.edu.pk', '$2y$10$GNW99.V4v/No6wUOnlPp6.ZLfwluMUMzPg2hedBP9wL2omDFb0JTm', NULL, 'kWyBig1yRAQbcwklxv9L13jRzCzLJZyqX0DkKTe4nvJbPHlAtZDjzdMOrn9s', NULL, NULL, '2015-02-07 01:48:47', '2015-02-07 01:48:47'),
(21, 'yasir', 'rasool', 'bc100403103@vu.edu.pk', '$2y$10$CU16ObRrJCSt30dVYQpxPOwMgn6o5Pwv3RLolkfCEKFZF5rcfR/Da', 1, '', NULL, NULL, '2015-02-07 01:48:51', '2015-06-17 20:04:07'),
(22, 'waqas', 'khalid', 'waqas.khalid@vu.edu.pk', '$2y$10$Zbp9nwvAuwLyssXjoOEFxuuUutOElKcF5nUClSo4NyUiwnMzx/R7.', 1, '', NULL, NULL, '2015-06-17 19:57:49', '2015-06-17 20:03:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
