-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2020 at 06:58 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spyul`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `getDistance` (`lat1` VARCHAR(200), `lng1` VARCHAR(200), `lat2` VARCHAR(200), `lng2` VARCHAR(200)) RETURNS VARCHAR(10) CHARSET utf8 begin
declare distance varchar(10);

set distance = (select (6371 * acos( 
                cos( radians(lat2) ) 
              * cos( radians( lat1 ) ) 
              * cos( radians( lng1 ) - radians(lng2) ) 
              + sin( radians(lat2) ) 
              * sin( radians( lat1 ) )
                ) ) as distance); 

if(distance is null)
then
 return '';
else 
return distance;
end if;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Recipes', '1', '2020-09-10 17:30:11', NULL, NULL),
(2, 'Articals', '1', '2020-09-10 17:30:11', NULL, NULL),
(3, 'Music', '1', '2020-09-10 17:30:11', NULL, NULL),
(4, 'Dance', '1', '2020-09-10 17:30:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `type` enum('tendor','request','quotation','order','register') NOT NULL,
  `meta_data` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_receivers`
--

CREATE TABLE `notification_receivers` (
  `id` int(11) UNSIGNED NOT NULL,
  `notification_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `is_public` enum('0','1') NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_media`
--

CREATE TABLE `post_media` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `media_type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `tag` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('1','2','3','4') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `longitude` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_verified` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `first_name`, `last_name`, `date_of_birth`, `profession`, `email`, `phone`, `password`, `profile_image`, `bio`, `remember_token`, `address`, `latitude`, `longitude`, `country`, `state`, `city`, `status`, `is_verified`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Spyul Admin', NULL, NULL, NULL, NULL, 'admin@gmail.com', '', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', 'EEeEuaDrDV.1599483594.jpeg', NULL, 'g7DYAlslczEyI3QftqxnKN7wR4rg8ABHxEsUgkSqBGBYkl4nDIYWA94pSIM4', '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '1', '2020-09-04 04:50:22', '2020-09-07 07:59:29', NULL),
(2, '2', 'Shivam Yadav', NULL, NULL, NULL, NULL, 'shivam.codemegsoft@gmail.com', '7974682508', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, '2020-09-07 08:06:44', NULL),
(3, '2', 'Shivani Jain', NULL, NULL, NULL, NULL, 'shivani.codemegsoft@gmail.com', '1478523690', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(4, '2', 'Akash Tirole', NULL, NULL, NULL, NULL, 'akash.codemegsoft@gmail.com', '1452145896', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(5, '2', 'Vipin Tiwari', NULL, NULL, NULL, NULL, 'vipin.codemegsoft@gmail.com', '7854785236', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(6, '2', 'Ravendra Tiwari', NULL, NULL, NULL, NULL, 'ravendra.codemegsoft@gmail.com', '7854123698', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(7, '2', 'Rakesh Rajpurohit', NULL, NULL, NULL, NULL, 'rakesh.codemegsoft@gmail.com', '8521478963', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(8, '2', 'ismael ansari', NULL, NULL, NULL, NULL, 'ismael.codemegsoft@gmail.com', '1587459625', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(9, '2', 'Ambuj Tripathi', NULL, NULL, NULL, NULL, 'ambuj.codemegsoft@gmail.com', '2365478915', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(10, '2', 'Ganesh Thamande', NULL, NULL, NULL, NULL, 'ganesh.codemegsoft@gmail.com', '1759856987', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(11, '2', 'Chetan Rajput', NULL, NULL, NULL, NULL, 'chetan.codemegsoft@gmail.com', '1852369857', '$2y$10$ZM/pb0wziaVvhvYY2jsNqeuUJZ0HQ2RRUkFLdSXS/8SmDRd4DaII2', NULL, NULL, NULL, '505 Pukhraj Corparator indore near naulakha indore', '0', '0', 'India', 'Madhaya Pradesh', 'Indore', '1', '0', NULL, NULL, NULL),
(12, NULL, 'fsa fsa', 'fsa', 'fsdaf', NULL, 'dsfdsfdsf', 'fas@gmail.com', NULL, '$2y$10$wnrRT5ye7OHWxIWrzCL5OO6NLZsSU395g8W31eo49ZPvAVNp22E3a', NULL, NULL, 'dITcSaUzOoqffj1CRVd6qcQYoXmOjTlM7Nucpuwqu9lCqcwEfKryFOEBtvls', NULL, '0', '0', 'fsdfdsf', NULL, 'f4safsa', '1', '0', '2020-09-10 04:35:47', '2020-09-10 04:35:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `watches`
--

CREATE TABLE `watches` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_receivers`
--
ALTER TABLE `notification_receivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_media`
--
ALTER TABLE `post_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watches`
--
ALTER TABLE `watches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification_receivers`
--
ALTER TABLE `notification_receivers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `watches`
--
ALTER TABLE `watches`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
