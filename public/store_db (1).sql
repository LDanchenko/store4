-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 07 2017 г., 20:05
-- Версия сервера: 5.7.16-log
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Товары для мужчин', 'Товары для мужчин1', NULL, '2017-10-04 14:35:21'),
(2, 'Товары для женщин', 'Товары для женщин', NULL, NULL),
(3, 'Товары для детей', 'Товары для детей', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`, `created_at`, `updated_at`, `description`, `categories`, `image`) VALUES
(2, 'Kaycee Emard', 378, '2017-10-02 05:17:15', '2017-10-02 05:17:15', ';joj\';', 1, 'uploads/2.jpg'),
(3, 'Germaine Ledner', 261, '2017-10-02 05:17:15', '2017-10-02 05:17:15', '', 2, ''),
(4, 'Mr. Carmelo Olson IV', 453, '2017-10-02 05:17:15', '2017-10-02 05:17:15', '', 1, ''),
(5, 'Chaim Larkin', 831, '2017-10-02 05:17:15', '2017-10-02 05:17:15', '', 2, ''),
(6, 'dwd', 888, '2017-10-03 12:32:20', '2017-10-03 12:32:20', '', 0, ''),
(7, 'eee', 888, '2017-10-03 13:23:58', '2017-10-03 13:23:58', '', 0, ''),
(8, 'ld', 888, '2017-10-03 13:25:47', '2017-10-03 13:25:47', '', 0, ''),
(9, 'wfw', 55, '2017-10-03 13:28:39', '2017-10-03 13:28:39', '', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_02_080901_create_goods_table', 2),
(4, '2017_10_02_081348_FakeGoods', 3),
(5, '2017_10_02_123948_goods_fix', 4),
(6, '2017_10_03_163101_create_categories_table', 4),
(7, '2017_10_03_163452_create_orders_table', 4),
(8, '2017_10_03_180346_goods_fix_2', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `good_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `email`, `username`, `good_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 'rrr', 'ffe', '3', 2, '2017-10-07 12:46:19', '2017-10-07 12:46:19'),
(2, 'rrr', 'ffe', '3', 2, '2017-10-07 12:47:37', '2017-10-07 12:47:37'),
(3, 'rrr', 'ffe', '4', 1, '2017-10-07 12:47:37', '2017-10-07 12:47:37'),
(4, 'rrr', 'ffe', '3', 2, '2017-10-07 12:50:31', '2017-10-07 12:50:31'),
(5, 'rrr', 'ffe', '4', 1, '2017-10-07 12:50:32', '2017-10-07 12:50:32'),
(6, 'dsfwsf', 'dd', '4', 1, '2017-10-07 12:51:04', '2017-10-07 12:51:04'),
(7, 'dsfwsf', 'dd', '3', 2, '2017-10-07 12:51:05', '2017-10-07 12:51:05'),
(8, 'sfs', 'fdfd', '2', 1, '2017-10-07 12:52:07', '2017-10-07 12:52:07'),
(9, 'dec', '3d3`c', '3', 1, '2017-10-07 12:58:09', '2017-10-07 12:58:09'),
(10, 'kn', 'k', '3', 2, '2017-10-07 13:05:21', '2017-10-07 13:05:21'),
(11, 'lln', 'n', '3', 1, '2017-10-07 13:07:14', '2017-10-07 13:07:14'),
(12, '2l-u-b-o-v@ukr.net', 'жь', '2', 1, '2017-10-07 13:09:53', '2017-10-07 13:09:53'),
(13, '2l-u-b-o-v@ukr.net', ';m', '2', 1, '2017-10-07 13:11:15', '2017-10-07 13:11:15'),
(14, '2l-u-b-o-v@ukr.net', 'kkkk', '2', 1, '2017-10-07 13:11:31', '2017-10-07 13:11:31'),
(15, '2l-u-b-o-v@ukr.net', 'rrr', '2', 1, '2017-10-07 13:13:51', '2017-10-07 13:13:51'),
(16, '2l-u-b-o-v@ukr.net', 'eeee', '2', 1, '2017-10-07 13:16:30', '2017-10-07 13:16:30'),
(17, '2l-u-b-o-v@ukr.net', 'как', '5', 1, '2017-10-07 13:17:57', '2017-10-07 13:17:57'),
(18, '2l-u-b-o-v@ukr.net', ';m', '2', 1, '2017-10-07 13:29:19', '2017-10-07 13:29:19'),
(19, '2l-u-b-o-v@ukr.net', ';n;', '3', 1, '2017-10-07 13:30:05', '2017-10-07 13:30:05'),
(20, '2l-u-b-o-v@ukr.net', 'll', '3', 1, '2017-10-07 13:31:33', '2017-10-07 13:31:33'),
(21, '2l-u-b-o-v@ukr.net', ';n;', '2', 1, '2017-10-07 13:32:07', '2017-10-07 13:32:07');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lubov', '2l-u-b-o-v@ukr.net', '$2y$10$39YaDYKK9.saiOJm6mDJHul.OqDkMIlgG3nznU8yrRqSTkwuTZZci', 'sfH8pOHQbmXrjHAz1UXbVw1jvqU2NfEuBkKoX8nxNxleW96x5XNBILpM6ek0', '2017-10-02 04:58:48', '2017-10-07 13:43:37'),
(2, 'luba', 'lubov@mirhosting.com', '$2y$10$fJBO.8MGBR1NezPqmBVeWOS4tvam30nF0SElJtXr37OEXvfdydgkK', 'gKr86kJCpzglTAo4uNT7dVD2fbly6pLMzjKz1aYf7lThNRBcCCUQuJbxVSkc', '2017-10-03 13:02:09', '2017-10-03 13:02:09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
