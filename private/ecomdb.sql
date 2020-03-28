-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 04:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'php', '2020-03-26 09:31:31', '2020-03-26 09:31:31'),
(2, 'css', '2020-03-26 09:31:45', '2020-03-26 09:31:45'),
(3, 'bootstrap', '2020-03-26 09:34:33', '2020-03-26 09:34:33'),
(4, 'maths', '2020-03-27 11:51:58', '2020-03-27 11:51:58'),
(5, 'html', '2020-03-28 07:05:40', '2020-03-28 07:05:40');

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
(3, '2020_03_03_161511_create_products_table', 1),
(4, '2020_03_03_162409_create_categories_table', 1),
(5, '2020_03_16_103653_create_rates_table', 1),
(6, '2020_03_18_145529_create_students_table', 1),
(7, '2020_03_28_103944_create_quiz_questions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `size`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'shirt', 'good shirt', 123, 'small', 1, 'Capture.PNG', '2020-03-26 05:11:57', '2020-03-26 05:11:57'),
(2, 'fafafdafsafsdfsf', 'adfaf', 234, 'medium', 1, NULL, '2020-03-26 05:12:47', '2020-03-26 05:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `question_text`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jafladf', 3, '2020-03-28 07:03:08', '2020-03-28 07:03:08', NULL),
(2, 'jafladf', 3, '2020-03-28 07:03:57', '2020-03-28 07:03:57', NULL),
(3, 'heading tags?', 5, '2020-03-28 07:06:06', '2020-03-28 07:06:06', NULL),
(4, 'heading tags?', 3, '2020-03-28 07:06:40', '2020-03-28 07:06:40', NULL),
(5, 'heading tags?', 5, '2020-03-28 07:06:54', '2020-03-28 07:06:54', NULL),
(6, 'abc', 1, '2020-03-28 07:13:08', '2020-03-28 07:13:08', NULL),
(7, 'is a programming language?', 1, '2020-03-28 07:28:05', '2020-03-28 07:28:05', NULL),
(8, 'color styling?', 2, '2020-03-28 07:49:42', '2020-03-28 07:49:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `rating_number`, `created_at`, `updated_at`) VALUES
(1, 3, '2020-03-26 05:16:18', '2020-03-26 05:16:18'),
(2, 5, '2020-03-26 05:16:29', '2020-03-26 05:16:29'),
(3, 5, '2020-03-26 05:16:50', '2020-03-26 05:16:50'),
(4, 4, '2020-03-26 05:17:13', '2020-03-26 05:17:13'),
(5, 4, '2020-03-27 11:50:52', '2020-03-27 11:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `Email`, `Password`, `Country`, `City`, `Address`, `Date_of_birth`, `Contact_no`, `created_at`, `updated_at`) VALUES
(1, 'taha@gmail.com', 'taha@gmail.com', '12345678', 'Afghanistan', 'lahore', 'hjadskbad', '0121-02-21', NULL, '2020-03-18 10:57:50', '2020-03-18 10:57:50'),
(2, 'haseeb@gmail.com', 'haseeb@gmail.com', '12345678', 'Afghanistan', 'nrwl', 'bilal gunj lahore', '0121-02-21', NULL, '2020-03-18 10:58:24', '2020-03-18 10:58:24'),
(3, 'taha@gmail.com', 'aks@gmail.com', '12345678', 'Pakistan', 'jhang', 'kjfdkjsaf', '0043-03-04', NULL, '2020-03-18 12:21:31', '2020-03-18 12:21:31'),
(4, 'haseeb', 'haseeb@gmail.com', '12345', 'Afghanistan', 'pakistan', 'kjafj', '0232-03-02', NULL, '2020-03-18 12:54:47', '2020-03-18 12:54:47'),
(5, 'abc', 'abc@gmail.com', '12345678', 'Afghanistan', 'ljsadlkna', 'oisahdlkand', '0043-03-04', NULL, '2020-03-18 13:05:58', '2020-03-18 13:05:58'),
(6, 'aq', 'aq@gmail.com', '1122', 'Afghanistan', 'lkadnkfad', 'aldnfla', '0032-03-21', NULL, '2020-03-18 13:11:30', '2020-03-18 13:11:30'),
(7, 'q', 'q@gmail.com', '12345', 'Austria', 'vxcv', 'erwre', '0002-02-02', NULL, '2020-03-26 04:50:30', '2020-03-26 04:50:30'),
(8, 'q', 'q@gmail.com', '12345', 'Austria', 'vxcv', 'erwre', '0002-02-02', NULL, '2020-03-26 04:51:22', '2020-03-26 04:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'taha', 'taha@gmail.com', NULL, '$2y$10$fi4.Ts9fqDrvFZKbYo1jM.WVwtbdph7vS2DYurwU.yO5KQL2/cWYW', NULL, '2020-03-26 05:10:05', '2020-03-26 05:10:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
