-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2020 г., 21:20
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `weapons`
--
CREATE DATABASE IF NOT EXISTS `weapons` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `weapons`;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `phone`, `email`) VALUES
(8, 'ewq', 'qwer', 345, 'sdfa'),
(9, 'ewq', 'qwer', 345, 'sdfa'),
(10, 'gfnhf', 'b cb', 45675, 'fhgfh');

-- --------------------------------------------------------

--
-- Структура таблицы `weapons`
--

CREATE TABLE `weapons` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `width`, `height`, `weight`, `description`, `image`, `price`, `category`) VALUES
(6, 'Катана', 4, 110, 800, 'Японский меч 16 век.', 'katans.jpg', 30000, 'sword'),
(7, 'Лабрис', 50, 80, 1200, 'Топор викинга 9 век.', 'axe.jpg', 20000, 'axe'),
(8, 'Шашка', 3, 70, 400, 'Казачья шашка 19 век.', 'sabre.jpg', 15000, 'sabre'),
(9, 'Калабаха', 50, 100, 100500, 'Оружие массового поражения ближнего радиуса действия.', 'кувалда.jpg', 2147483647, 'hammer'),
(10, 'Каролинг', 6, 65, 700, 'Меч викинга 9 век.', 'rEBBs92xTnQ.jpg', 30000, 'sword'),
(11, 'Копье', 4, 50, 400, 'Наконечник копья.', 'rmBHe5hOmvU.jpg', 8000, 'spear');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
