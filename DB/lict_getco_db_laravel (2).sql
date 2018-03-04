-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 08:11 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lict_getco_db_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `category_name`) VALUES
(3, 'Computer'),
(4, 'Laptop'),
(1, 'Mobile'),
(2, 'Television'),
(5, 'Toys');

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
(1, '2014_10_12_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_details` varchar(500) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_stock_in` int(11) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_image`, `product_details`, `product_category`, `product_stock_in`, `product_status`, `created_at`, `updated_at`) VALUES
(3, 'Samsung Galaxy s8', '650000.00', '1520147284.jpeg', 'Samsung Galaxy s8 details', 1, 2, 1, '2018-02-27 12:00:02', '2018-02-27 12:00:02'),
(5, 'Test product', '20000.00', '1520143336.jpeg', 'Test', 3, 2, 1, '2018-03-04 12:02:16', '2018-03-04 12:02:16'),
(6, 'iMac 3', '1250000.00', '1520143447.jpeg', 'Tecst iMac 3 details', 1, 2, 0, '2018-03-04 12:04:07', '2018-03-04 12:04:07'),
(7, 'iMac 4', '1250000.00', '1520143463.jpeg', 'Tecst iMac 4 details', 1, 2, 0, '2018-03-04 12:04:23', '2018-03-04 12:04:23'),
(8, 'iMac 5', '1250000.00', '1520143474.jpeg', 'Tecst iMac 4 details', 1, 2, 1, '2018-03-04 12:04:34', '2018-03-04 12:04:34'),
(9, 'iMac 6', '1250000.00', '1520143483.jpeg', 'Tecst iMac 4 details', 1, 2, 1, '2018-03-04 12:04:43', '2018-03-04 12:04:43'),
(10, 'iMac 7', '1250000.00', '1520143489.jpeg', 'Tecst iMac 4 details', 1, 2, 1, '2018-03-04 12:04:49', '2018-03-04 12:04:49'),
(11, 'iMac 8', '1250000.00', '1520143493.jpeg', 'Tecst iMac 4 details', 1, 2, 1, '2018-03-04 12:04:53', '2018-03-04 12:04:53'),
(12, 'iMac 9', '1250000.00', '1520143499.jpeg', 'Tecst iMac 4 details', 1, 2, 1, '2018-03-04 12:04:59', '2018-03-04 12:04:59'),
(13, 'iMac 10', '1250000.00', '1520143504.jpeg', 'Tecst iMac 4 details', 1, 2, 1, '2018-03-04 12:05:04', '2018-03-04 12:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bulbul Ahmed', 'bulbulamd@yahoo.com', '$2y$10$8Cte9sAG3/XsGZ9KMAjgxeI/zyV/ckSdYhVBSMGejz6coLMbD4z4.', 'stgFWZ1XQpeq0dn7uUshXlGreMacltaSGGbxMOTNfkUk0PkYRFgi650ypPKT', '2018-02-17 23:44:55', '2018-02-17 23:44:55'),
(2, 'Test test', 'test@testmail.com', '$2y$10$M4R6l8ilkNuBPgRj9Dbqzub0ZOvkfe6CcL609qOu5PUZJhNtxWjAC', 'lZl900oMRt2Ck4aHlhhWUicuT8Sx5bwyIyXe2x9Ft4KNwkDuwlhT5ZfXC8pG', '2018-02-18 00:32:38', '2018-02-18 00:32:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`),
  ADD UNIQUE KEY `category_name` (`category_name`);

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
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
