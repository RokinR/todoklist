-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2024 г., 21:46
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `todolist`
--

CREATE TABLE `todolist` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Название` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Запись` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `todolist`
--

INSERT INTO `todolist` (`id`, `created_at`, `updated_at`, `Название`, `Запись`) VALUES
(1, '2024-03-31 15:30:41', '2024-03-31 15:30:41', '444', '444'),
(2, '2024-03-31 15:30:50', '2024-03-31 15:30:50', '444', '444'),
(3, '2024-03-31 15:30:53', '2024-03-31 15:30:53', '4445', '444'),
(4, '2024-03-31 15:32:17', '2024-03-31 15:32:17', '4445', '444'),
(5, '2024-03-31 15:32:54', '2024-03-31 15:32:54', '123', '123'),
(6, '2024-03-31 15:33:08', '2024-03-31 15:33:08', 'Stack Overflow', 'Stack Overflow'),
(7, '2024-03-31 15:33:58', '2024-03-31 15:33:58', 'Stack Overflow', 'Stack Overflow'),
(8, '2024-03-31 15:34:22', '2024-03-31 15:34:22', 'Stack Overflow', 'Stack Overflow');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
