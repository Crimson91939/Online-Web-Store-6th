-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 10:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ln`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `cost` double NOT NULL,
  `stock` double NOT NULL,
  `synopsis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `author`, `genre`, `price`, `cost`, `stock`, `synopsis`, `pic`, `created_at`, `updated_at`) VALUES
(4, 'Dragon Prince Yuan', 'Heavenly Silkworm Potato', 'Xuanhuan', 2000, 1000, 94, 'The heavens and earth are furnaces, every living things are charcoal, and the Yin and Yang are fuel. The battle for destiny, fate, and luck between the Serpent and Sacred Saint Dragon arises. When all is said and done, will the Serpent emerge victorious or will the Sacred Saint Dragon rise up above all sentient beings?\r\n\r\nThe world revolves around the Yin and Yang, a single breath can move mountains and seas, and turn the heavens upside down. Those who wield strength has the right to possess the Yin and Yang of the Universe.\r\n\r\nZhou Yuan holds a pen while the dragon dances. Chaos surrounds the world, lightning blankets the sky. In this world, will the serpent swallow the dragon, or will the dragon rise?\r\n\r\n—\r\n\r\nDestiny stolen at birth, the prince of the once mighty Great Zhou Empire, Zhou Yuan, has been plagued by a fatal poison till fate draws him to mysterious domain where he meets a beautiful girl in green, a bizarre dog-like creature and an unfathomable old man in black.\r\n\r\nJoin Zhou Yuan as he thrust into the whirlpool of destiny while he seeks the pinnacle of cultivation.', '1627651099-Dragon Prince Yuan.jpg', '2021-07-30 05:38:23', '2021-08-02 22:54:10'),
(22, 'Armand Williamson', 'Ut labore quia nostr', 'Dolorem similique do', 498, 54, 69, 'Minim dolor fugiat n', '1627963867-Armand Williamson.jpg', '2021-08-02 22:26:07', '2021-08-02 22:26:07'),
(23, 'Renee Pierce', 'Placeat nostrum dol', 'Vitae culpa laborum', 209, 33, 35, 'Qui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt ist', '1627963909-Renee Pierce.jpg', '2021-08-02 22:26:49', '2021-08-02 22:51:19'),
(24, 'Kevin Potts', 'Velit debitis repud', 'Recusandae Fugiat a', 2000, 1000, 4, 'Qui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt istQui ex nesciunt ist', '1627963944-Kevin Potts.jpg', '2021-08-02 22:27:24', '2021-08-02 22:27:24'),
(25, 'Amena Mcguire', 'Nam sed proident id', 'Dignissimos velit it', 939, 200, 23, 'Ut ab et quibusdam e', '1627963967-Amena Mcguire.jpg', '2021-08-02 22:27:47', '2021-08-02 22:45:25'),
(26, 'Angela Rich', 'Ut nihil sunt et in', 'Quos illum cillum d', 4280, 5600, 40, 'Ut ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iv', '1627964065-Angela Rich.jpg', '2021-08-02 22:28:43', '2021-08-02 22:29:25'),
(27, 'Kuame Morgan', 'Sint duis aut neces', 'Placeat velit itaq', 780, 410, 88, 'Eos cupidatat sint Ut ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco ivv', '1627964088-Kuame Morgan.jpg', '2021-08-02 22:29:48', '2021-08-02 22:29:48'),
(28, 'Gareth Winters', 'Nisi ullam voluptas', 'Delectus labore vol', 2000, 3000, 40, 'Reprehenderit repud', '1627964110-Gareth Winters.jpg', '2021-08-02 22:30:10', '2021-08-02 22:30:10'),
(29, 'Amy Price', 'Non cumque deserunt', 'Et corporis nisi dol', 165, 66, 40, 'Officia aut ducimus', '1627964122-Amy Price.jpg', '2021-08-02 22:30:22', '2021-08-02 22:30:22'),
(30, 'Ariana Cote', 'Laboriosam aut sint', 'Enim aut amet qui i', 5000, 4400, 25, 'Nostrum explicabo I Ut ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco iUt ex quis ullamco ivv', '1627964145-Ariana Cote.jpg', '2021-08-02 22:30:45', '2021-08-02 22:30:45');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_07_28_183626_laratrust_setup_tables', 1),
(18, '2021_07_29_070807_create_items_table', 2),
(21, '2021_07_31_084813_create_payments_table', 3);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyerid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `profit` double NOT NULL,
  `made` double NOT NULL,
  `costo` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `buyerid`, `itemid`, `profit`, `made`, `costo`, `created_at`, `updated_at`) VALUES
(13, 2, 25, 739, 939, 200, NULL, NULL),
(14, 2, 23, 176, 209, 33, NULL, NULL),
(15, 2, 4, 1000, 2000, 1000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-07-29 04:49:15', '2021-07-29 04:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-07-29 04:49:15', '2021-07-29 04:49:15'),
(2, 'user', 'User', 'User', '2021-07-29 04:49:16', '2021-07-29 04:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$tYDxfpE3mOdSoPak3hS0qOyyl1Ybsp8uCqHPBxzoC7Hxw2pPar81.', '7d8no5ooklTzRuyZGiLA2n8vMSITcmZtGACXhudsz5N50iTldXVh43MOkDT5', '2021-07-29 04:51:28', '2021-07-29 04:51:28'),
(2, 'raman', 'ramanshrestha98@gmail.com', NULL, '$2y$10$TjhzW2I/PSUrICw7qjcAwelH.Rw.pnzsvAorb0TREvNprNP3/LYq.', 'q4BO4Gqs5eNwAAWSXJIi0ao6b4Llnxl69YLA8MgCrNrnTLFjv1i4iEBOOI8g', '2021-07-29 04:52:05', '2021-07-29 04:52:05'),
(3, 'anuj paudel', 'anuj@gmail.com', NULL, '$2y$10$4F73EQf9HXPPYWSRDV87VuAXZA2UaN0q74WYSayiFEC6frY9w2.Ia', NULL, '2021-08-02 08:08:39', '2021-08-02 08:08:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_name_unique` (`name`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
