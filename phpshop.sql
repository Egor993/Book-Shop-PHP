-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2020 г., 18:49
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `book_id`, `name`, `comment`, `image`) VALUES
(43, 63, 'test123', 'Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка', 'unnamed.jpg'),
(44, 64, 'test123', 'Проверка', 'Bl-iHASDuDU.jpg'),
(45, 64, 'test123', 'Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Пппп', 'Bl-iHASDuDU.jpg'),
(46, 64, 'test123', 'Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Пппп Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка Проверка  Проверка  Проверка Проверка Проверка1', 'Bl-iHASDuDU.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `name`, `sort_order`, `status`) VALUES
(13, 'Ноутбуки', 1, 1),
(14, 'Планшеты', 2, 1),
(15, 'Мониторы', 3, 1),
(16, 'Игровые компьютеры', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `author` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `rating_amount` float NOT NULL,
  `rating_count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `author`, `description`, `genre`, `rating_amount`, `rating_count`) VALUES
(63, 'Крестный отец', 'krestn.jpg', 767, 'Тест', 'Крестный отец', 'Драма', 6.5, 2),
(64, 'Я был секретарем сталина', 'stal.jpg', 444, 'Тест', 'Тест', 'Биография', 4, 1),
(65, 'Тест244', '0a7c5a2f7afdfbab0ada434ee276ee7a.jpeg', 545, 'Тест244', 'Тест244', 'Биография', 8, 2),
(66, 'Крестный отец', '157476717350hax.jpg', 565, 'William S. Vincent', 'Тест', 'Биография', 8, 2),
(67, 'Крестный отец', '9975982_p1070347.jpg', 565, 'William S. Vincent', 'Тест', 'Биография', 0, 0),
(68, 'Крестный отец', 'krasnaya_panda_panda_pushistyj_lezhat_104027_1280x1024.jpg', 4655, 'Тест', 'Тест', 'Биография', 0, 0),
(69, 'Наполеон', 'film.png', 343, 'Тест', 'Тест', 'Биография', 0, 0),
(70, 'Белый кит', 'listening-red-panda-ray-shiu.jpg', 545, 'Тест', 'Тест', 'Биография', 0, 0),
(71, 'Война и мир', 'Screenshot_2018-01-02-23-08-03.png', 23, 'Тест', 'Тест', 'Биография', 0, 0),
(72, 'Волкодав', 'panda_ulybka_belyy_chrnyy_minimalizm_74449_1920x1080.jpg', 344, 'Тест', 'Тест', 'Биография', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(65, 'egor8765', '79204516092', 'teeest', 9, '2020-12-12 14:20:37', '{\"63\":5}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(12) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `image`) VALUES
(11, 'egor8765', 'egor8765@mail.ru', '123456', 'admin', 'unnamed1.jpg'),
(14, 'test123', 'egor8765@mail.ru4', '123456d', 'admin', 'Bl-iHASDuDU.jpg'),
(15, 'feda993', 'feda9938765@yandex.ru', '123456', 'admin', 'unnamed.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
