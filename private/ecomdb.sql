-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 12:58 PM
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
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `difficult_level` varchar(255) NOT NULL,
  `question_body` varchar(255) NOT NULL,
  `option_one` varchar(255) NOT NULL,
  `answer_one` int(255) NOT NULL,
  `option_two` varchar(255) NOT NULL,
  `answer_two` int(255) NOT NULL,
  `option_three` varchar(255) DEFAULT NULL,
  `answer_three` int(255) DEFAULT NULL,
  `option_four` varchar(255) DEFAULT NULL,
  `answer_four` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employe_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `employe_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'haseeb', 'haseb@gmail.com', NULL, NULL),
(2, 'ashan', 'ahsan@gmail.com', NULL, NULL),
(3, 'saad', 'saad@gmail.com', NULL, NULL),
(4, 'taha', 'taha@gmail.com', NULL, NULL),
(5, 'haseeb', 'haseb@gmail.com', NULL, NULL),
(6, 'haseeb', 'haseb@gmail.com', NULL, NULL);

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
(7, '2020_03_28_103944_create_quiz_questions_table', 2),
(8, '2020_03_28_150642_create_options_table', 3),
(9, '2020_03_30_185456_create_tabulers_table', 4),
(10, '2020_03_31_190033_create_roles_table', 5),
(11, '2020_03_31_190054_create_user_tests_table', 5),
(12, '2020_03_31_190633_create_role_users_table', 5),
(13, '2020_03_31_191901_create_role_user_tests_table', 6),
(14, '2020_03_31_200305_create_role_employe_table', 7),
(15, '2020_03_31_200328_create_employes_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) DEFAULT NULL,
  `question_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_text`, `points`, `question_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5', 2, 3, '2020-03-28 11:27:06', '2020-03-28 11:27:06', NULL),
(2, '2', 5, 1, '2020-03-28 11:38:34', '2020-03-28 11:38:34', NULL),
(3, '23', 2, 1, '2020-03-28 11:39:17', '2020-03-28 11:39:17', NULL),
(4, '43', 3, 1, '2020-03-28 11:39:45', '2020-03-28 11:39:45', NULL),
(5, '2323', 6, 1, '2020-03-28 11:40:00', '2020-03-28 11:40:00', NULL),
(6, '123', 12, 1, '2020-03-28 11:40:10', '2020-03-28 11:40:10', NULL);

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
(8, 'color styling?', 2, '2020-03-28 07:49:42', '2020-03-28 07:49:42', NULL),
(9, 'akj', 1, '2020-03-28 11:06:31', '2020-03-28 11:06:31', NULL),
(10, 'jgchgg', 1, '2020-03-28 12:14:40', '2020-03-28 12:14:40', NULL);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'supervisor', NULL, NULL),
(2, 'admin', NULL, NULL),
(3, 'admin', NULL, NULL),
(4, 'supervisor', NULL, NULL),
(5, 'supervisor', NULL, NULL),
(6, 'moderator', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_employe`
--

CREATE TABLE `role_employe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_employe`
--

INSERT INTO `role_employe` (`id`, `role_id`, `employe_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 1, 1, NULL, NULL),
(6, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user_tests`
--

CREATE TABLE `role_user_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_test_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user_tests`
--

INSERT INTO `role_user_tests` (`id`, `role_id`, `user_test_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 1, 1, NULL, NULL),
(6, 2, 2, NULL, NULL);

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
-- Table structure for table `tabulers`
--

CREATE TABLE `tabulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `user_tests`
--

CREATE TABLE `user_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_tests`
--

INSERT INTO `user_tests` (`id`, `user_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'haseeb', 'haseeb@gmail.com', NULL, NULL),
(2, 'haseeb', 'haseeb@gmail.com', NULL, NULL),
(3, 'ahsan', 'ahsan@gmail.com', NULL, NULL),
(4, 'taha', 'taha@gmail.com', NULL, NULL),
(5, 'saad', 'saad@gmail.com', NULL, NULL),
(6, 'haseeb', 'haseeb@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_employe`
--
ALTER TABLE `role_employe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user_tests`
--
ALTER TABLE `role_user_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabulers`
--
ALTER TABLE `tabulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_tests`
--
ALTER TABLE `user_tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_employe`
--
ALTER TABLE `role_employe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_user_tests`
--
ALTER TABLE `role_user_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabulers`
--
ALTER TABLE `tabulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_tests`
--
ALTER TABLE `user_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
