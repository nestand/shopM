-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 13 2021 г., 12:22
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `highshopmin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Mobile phones', 'mobile', 'In this section you will find the most popular mobile phones at great prices!', 'categories/OibezCcNUR9iGJBSWAHYtGc4slQNlnvm6vnh6peK.png', NULL, '2021-07-12 06:37:30'),
(2, 'Portables', 'portable', 'In this section you will find the most popular portables at great prices!', 'categories/WHF6vObBFyxFOiE6ubFC4FxQqgaLAG7h8v6vlGit.png', NULL, '2021-07-12 06:37:52'),
(3, 'Appliances', 'appliance', 'In this section you will find the most popular appliances at great prices!', 'categories/NhsKkM1V5Xj1VTifzHZ0NC3fuOJOOTqxfOBwsl3i.png', NULL, '2021-07-12 06:38:02'),
(4, 'TEST', 'test', 'TEST', 'categories/WoqHOvNnFQcGugUiHGJZwrN6Iyde9D9rHgecnTuC.png', '2021-07-13 05:12:46', '2021-07-13 05:12:46');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2021_06_17_145159_create_products_table', 1),
(7, '2021_06_17_150303_create_categories_table', 1),
(8, '2021_06_24_075436_create_orders_table', 2),
(9, '2021_06_24_080246_create_order_product_table', 3),
(10, '2021_06_24_121244_update_create_orders_table', 4),
(11, '2021_07_02_093759_update_order_product_table', 5),
(12, '2021_07_04_160736_update_orders_table', 6),
(13, '2014_10_12_100000_create_password_resets_table', 7),
(14, '2021_07_07_191800_alter_table_users', 8),
(15, '2021_07_07_201923_alter_table_orders', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `status`, `name`, `phone`, `created_at`, `updated_at`, `user_id`) VALUES
(53, 1, 'Andrey', '50047', '2021-07-13 06:46:45', '2021-07-13 06:47:10', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(11) UNSIGNED NOT NULL,
  `product_id` bigint(11) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(87, 49, 1, 2, '2021-07-12 11:05:54', '2021-07-12 11:06:05'),
(88, 50, 2, 1, '2021-07-12 11:18:53', '2021-07-12 11:18:53'),
(89, 51, 12, 1, '2021-07-13 06:12:52', '2021-07-13 06:12:52'),
(90, 53, 5, 2, '2021-07-13 06:46:45', '2021-07-13 06:46:50');

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
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `description`, `img`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'iPhone X 64GB', 'iphone_x_64', 'Excellent phone with 64 gb memory', 'products/IMUsvfJ1gMziR2CGlupLjR8Y4BYcKJJm6aHA0ky5.jpg', 950, NULL, '2021-07-12 09:59:31'),
(2, 1, 'iPhone X 256GB', 'iphone_x_256', 'Excellent phone with 256 gb memory', 'products/FEpZk0CWd6QhdyrkvQ9M2PdjRgDe1rgeuRUUfjqg.jpg', 1260, NULL, '2021-07-12 09:59:44'),
(3, 1, 'HTC One S', 'htc_one_s', 'Why pay for more? Legendary HTC One S is the best choice', 'products/uRMxCoPztSDwpqbtSoUgrsinM8a0TaKW26ro0Bc4.jpg', 174.86, NULL, '2021-07-12 09:59:56'),
(4, 1, 'iPhone 5SE', 'iphone_5se', 'Great classic iPhone', 'products/SgxxT7I8OOLKOW9MWQkHvwj4cmo2kxP7V08tMJgN.jpg', 241.094, NULL, '2021-07-12 10:00:11'),
(5, 2, 'Earphones Beats Audio', 'beats_audio', 'Great sound for your ears', 'products/IyIqWxKcpEQNLtvTa68BCXV5sbN1HzAdwIjJG2Rx.jpg', 283.094, NULL, '2021-07-12 10:00:26'),
(6, 2, 'Camera GoPro', 'gopro', 'Capture your greatest moments with this camera', 'products/2SY3iYbXY8qcAzscrMQxVI76vBdzYGjQfwxs5xOb.jpg', 168, NULL, '2021-07-12 10:00:41'),
(7, 2, 'Camera Panasonic HC-V770', 'panasonic_hc-v770', 'Serious video shooting requires a serious camera. Panasonic HC-V770 is the best choice for these purposes!', 'products/xo3KytKEsuSnLTMpvcusqHleCrHYJco6fxF9yJn5.jpg', 390.6, NULL, '2021-07-12 10:00:58'),
(8, 3, 'Coffee machine DeLongi', 'delongi', 'A good morning starts with good coffee!', 'products/kh9eZSEJwhJ7weXsfU42UXdbUkdRro449hyKlf2w.jpg', 352.8, NULL, '2021-07-12 10:01:17'),
(9, 3, 'Refrigerator Haier', 'haier', 'A large refrigerator for a large family!', 'products/1S4GFEMc1EziZxtfii1wPXAWTM74R90BCVfaAyVn.jpg', 562, NULL, '2021-07-12 10:01:29'),
(10, 3, 'Blender Moulinex', 'moulinex', 'Ready to cook something? This blender is for the bravest', 'products/5pewo9YCitldRlXDPnYjwKvShA0Wfc5sR16pbKmQ.jpg', 58, NULL, '2021-07-12 10:01:49'),
(11, 3, 'Meat grinder Bosch', 'bosch', 'Do you like homemade cutlets? You should definitely take a look at this meat grinder!', 'products/F2HvxFy8PQukrj5ebMEGYqwwlJmffuJcgfN42QrX.jpg', 128.8, NULL, '2021-07-12 10:02:02'),
(12, 2, 'test', 'test', 'test', 'images/6Pg3MwYDptmPLfMrOlGPIsX73o5u1D7mnypPbT8L.png', 5555, '2021-07-13 06:10:46', '2021-07-13 06:10:46');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'andreyN', 'andrey@laposte.net', NULL, '$2y$10$5fPTC5aeawpAemrAQClMWeN5wUGPHsEspEejY/W5B.gW5VvUQAgUS', NULL, '2021-07-06 10:23:25', '2021-07-06 10:23:25', 1),
(5, 'test', 'test@test.test', NULL, '$2y$10$XlC9/eX.lOqyjmJ3JJyy2exVpZF5MZJj2v0pTkaXuPnc2RzsYYzFW', NULL, '2021-07-07 17:38:03', '2021-07-07 17:38:03', 0),
(6, 'Newtest', 'andreytest@test.ru', NULL, '$2y$10$uAjYFjg9F5b7VCUbA.6lMOnnoBbcu9Hfu8Z35JmwHIWypki3W39L.', NULL, '2021-07-12 10:58:15', '2021-07-12 10:58:15', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
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
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
