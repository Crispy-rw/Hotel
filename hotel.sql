-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2018 at 09:27 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rwanda', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `province_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `province_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nyarugenge', NULL, NULL),
(2, 2, 'Rulindo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `user_id`, `name`, `description`, `country_id`, `province_id`, `district_id`, `sector_id`, `email`, `website`, `phone`, `star`, `cover_image`, `background_image`, `active`, `created_at`, `updated_at`) VALUES
(1, 0, 'Crispy N. Christian', 'The click', '1', '1', '1', '1', 'nshimyumukizachristian@gmail.com', 'dfwedfwe', '0798231', 1, 'Noknid.jpg', NULL, 0, '2018-10-17 08:05:37', '2018-10-17 08:05:37'),
(4, 6, 'Miile Colline', 'wndjwqndjwnqdwnqdnwdubwqudsq', '1', '1', '1', '1', 'kiss@gmail.com', 'www.kiss.com', '0787789', 2, 'change_1539878159.jpg', NULL, 0, '2018-10-18 13:55:59', '2018-10-18 13:55:59'),
(5, 11, 'kjsdhskhweklnkl', 'jhgyufgujy', '1', '1', '1', '2', 'test@test.com', 'www.test.com', 'kjsdhskhweklnkl', 2, 'gunloop_1539890787.jpg', NULL, 0, '2018-10-18 17:26:27', '2018-10-18 17:26:27'),
(6, 6, 'web', 'klmasdcksdsn', '1', '1', '1', '2', 'imanolivier01@gmail.com', 'www.kiss.com', '0787789', 2, 'gunloop_1539945050.jpg', NULL, 0, '2018-10-19 08:30:50', '2018-10-19 08:30:50'),
(7, 12, 'Classic', 'sdklmfsklmfklwefkldwe', '1', '1', '1', '1', 'admin@gmail.com', 'www.test.com', '0787789', 2, 'frontend_1539962203.jpg', NULL, 0, '2018-10-19 13:16:43', '2018-10-19 13:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2018_10_15_120450_create_provinces_table', 1),
(18, '2018_10_15_120514_create_districts_table', 1),
(19, '2018_10_15_120525_create_sectors_table', 1),
(20, '2018_10_15_132717_create_roomtypes_table', 1),
(21, '2018_10_15_154520_add_type_to_users_table', 1),
(22, '2018_10_16_163958_create_hotels_table', 2),
(23, '2018_10_16_164649_create_countries_table', 2),
(24, '2018_10_17_073955_add_active_to_hotels', 3),
(25, '2018_10_17_135150_add_user_id_to_hotels', 4),
(26, '2018_10_19_110931_create_rooms_table', 5),
(27, '2018_10_19_121954_add_price_to_rooms', 6),
(28, '2018_10_19_163055_add_user_id_to_rooms', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kigali', NULL, NULL),
(2, 'North', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `roomtype_id`, `user_id`, `name`, `description`, `status`, `cover_image`, `price`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 12, 'Crispy N. Christian', 'asl,ndasljndassanddknd', 0, 'change_1539958014.jpg', 654568, '2018-10-19 12:06:54', '2018-10-19 12:06:54'),
(2, 4, 2, 12, 'fils 20`', 'sldkfodfweodoqwfohqwf', 0, 'html_1539960053.jpg_large', 2000, '2018-10-19 12:40:53', '2018-10-19 12:40:53'),
(3, 7, 3, 12, 'Double Bed 230', 'asmdlksnadnsadns cl wjc nwjndjwnasn xcasm,ncjnjkcnw', 0, 'ahuii_1539971454.jpg', 2831, '2018-10-19 15:50:56', '2018-10-19 15:50:56'),
(4, 7, 3, 12, 'south', 'rgergergergaerg', 0, 'profile_1539972543.png', 45646234, '2018-10-19 16:09:03', '2018-10-19 16:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Twiin', '2018-10-15 14:32:19', '2018-10-15 14:32:19'),
(2, 'Double', '2018-10-15 14:32:30', '2018-10-15 14:32:30'),
(3, 'KIng', '2018-10-16 08:26:42', '2018-10-16 08:26:42'),
(4, 'Simple', '2018-10-16 08:27:11', '2018-10-16 08:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `district_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nyamirambo', NULL, NULL),
(2, 2, 'Mukoto', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', '2018-10-25 17:26:14', 3, '$2y$10$aht1nL42FwZNMKGhDStth.E/ERZbE6u6wxP/8rOs.p5cEG3Yi9Fgi', 'XO2xTqTT2VpbHK1CrGiUyZYGa9YCtxRReiWLAIE3R7S0Sypp5fNnX7YvsBJs', '2018-10-15 14:31:49', '2018-10-15 17:21:11'),
(4, 'crispy', 'crispy', 'crispy@gmail.com', '2018-10-16 10:21:22', 2, '$2y$10$JtRSwxCtkJQHU5foMsWcF.5AEPVUrQfvcnjW7XhlHFvk.Q8Rugk52', 'pXSldvbk2s5GBPZDkTdPHU079N1p8UhKFgjEN3ZpfkVaAfDuloFAGLPhLfje', '2018-10-15 18:19:04', '2018-10-16 08:21:22'),
(5, 'fils', 'olivier', 'fils@gmail.com', '2018-10-15 20:30:55', 1, '$2y$10$m0srJbn8878HunRUQfDzseKvNm9JtCqmM6m4a.FwiPBm6umrz2C1G', 'OLaIwHP9ROv4XJSrhwLbPRi5Kcxit9XErQvkNNmaqQqMC7cPICZhLq2nbnnA', '2018-10-15 18:20:26', '2018-10-15 18:20:26'),
(6, 'peter', 'click', 'jp@theclick.rw', '2018-10-19 15:08:06', 2, '$2y$10$LC/bK81aZ7YCZcnuqRlxJuaNKNLQ8WCm10GWCozSPXDJQXb82wyAu', 'rmwG9gMkP2zRERbeTz9qlME7L6X0bnyBG20tLDCdNyRgOS8uwaQM3AazyG1l', '2018-10-15 18:31:27', '2018-10-15 19:43:43'),
(7, 'Hans', 'click', 'hasn@gmail.com', '2018-10-15 20:34:06', 1, '$2y$10$fsfI00zfuTYFs3YHIhdqJ.NUZUW990K7MJy.KL6KpkP5w.d5GROni', 'K1wqKq53OzEaawW2VlMexPR5zVRXzZEVp6jCTERYFFql2GJYpSu7r1QlrpYz', '2018-10-15 18:33:16', '2018-10-15 18:33:16'),
(8, 'Derick', 'Shema', 'Derick@gmail.com', '2018-10-17 19:58:23', 2, '$2y$10$5kAZ8YLqiSsO2Q8kDofM8OJuQpuUxNxR6CvgT3VTJrE3m8csCfwiS', NULL, '2018-10-17 17:56:05', '2018-10-17 17:58:23'),
(9, 'test', 'test@gmail.com', 'test@gmail.com2', '2018-10-18 19:14:33', 1, '$2y$10$ggrz75EztbgqV4bhbzHFm.hbJuJfNr8YqHrWwUuNmsdTNqSYR19yy', 'HahkVH4EJrusxdp2MdblECs9lEpoLn6wIZ11ZHHVpBwVO8ucS3fneRU1YBSh', '2018-10-18 17:11:57', '2018-10-18 17:11:57'),
(10, 'fils', 'borice', 'borice@gmail.com', '2018-10-18 19:17:29', 1, '$2y$10$5/a2sxw5lDKWPHFp7p8VJeMVOUDKxlKQht3yU100X0XH2EWNTgW36', 'f19Et9UKjExI2IFlHkq387V4Smci6aJG6jSoIrVkzGTAHHdE4AfElbR7Yhsx', '2018-10-18 17:15:16', '2018-10-18 17:15:16'),
(11, 'admin', 'test', 'middle@gmail.com', '2018-10-18 19:21:20', 2, '$2y$10$2YScFHKP4V3UEibLrPU17eFqBUxRLeJ0t25QV0PW.zrWWwl/y7U1C', 'GTHQ77lCotH0CoZbMYVXQZDhBuBA0xxS34PQpE7LV0Ow45KCXzEFbUxsZcF9', '2018-10-18 17:20:33', '2018-10-18 17:21:20'),
(12, 'fabien', 'jules', 'fabien@gmail.com', '2018-10-25 17:52:54', 2, '$2y$10$aht1nL42FwZNMKGhDStth.E/ERZbE6u6wxP/8rOs.p5cEG3Yi9Fgi', 'CcTK8UPAXzSTl7R828FgnZtX8wHyJVaBDEUOygrJc5qShn5EfwnYFHgdAekr', '2018-10-19 13:08:48', '2018-10-19 13:13:38'),
(13, 'last', 'test', 'last@gmail.com', '2018-10-19 18:36:31', 1, '$2y$10$YT0pIi7RDogxqSc9tH70VeJgd5S4geTvzbBPIW9uEBfZHCWDsmnz2', 'GJHnRkHYm3dZENMp4Ly6H4M4Qw3tpWqELjdjgReOLj3EzTUxw2758I39YGld', '2018-10-19 16:32:29', '2018-10-19 16:32:29'),
(14, 'Zizou', 'bertin', 'dj@gmail.com', '2018-10-20 09:38:43', 1, '$2y$10$VY6/umOz1E4gS7QCIAMG2uYlmBtSxXlOT.Cd4//93B3vfrIw9GUc.', 'I9KgoHJF8rpiooRDgnKX8gxC7B4qS4pl4LnVnkleDk0jFcqCqLYV8BtLZznB', '2018-10-20 07:37:29', '2018-10-20 07:37:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
