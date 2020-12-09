-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2020 г., 17:16
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
(49, 'Крестный отец', 'krestn.jpg', 778, 'Марио Пьюзо', 'TestTest', 'Драма', 0, 0),
(50, 'Я был секретарем сталина', 'stal.jpg', 567, 'Борис Бажанов', 'Test', 'Биография', 34, 7),
(51, 'Крестный отец', 'LwHHtCzbXClGaB00qRvudQ.jpeg', 55, '44556', 'Крестный отец', 'Драма', 0, 0),
(52, 'Крестный отец', 'F6Mh7o1Xnc69pNM9i4GzUob0zzf.jpeg', 666, '555', '555555', 'Драма', 0, 0),
(53, 'Крестный отец', '157476717350hax.jpg', 6556560, '343434', '3433', 'Драма', 0, 0),
(54, 'Крестный отец', 'Bl-iHASDuDU.jpg', 655665, '6565', '6565', 'Драма', 0, 0),
(55, 'Крестный отец', 'krasnaya_panda_panda_pushistyj_lezhat_104027_1280x1024.jpg', 67676, '6767', '576766', 'Драма', 0, 0),
(56, 'Крестный отец', 'listening-red-panda-ray-shiu.jpg', 65665, '7878', '78787', 'Драма', 0, 0),
(57, 'Крестный отец', 'panda_ulybka_belyy_chrnyy_minimalizm_74449_1920x1080.jpg', 6565, '7676', '76776', 'Драма', 0, 0),
(58, 'Крестный отец', 'animal-art-art-red-panda-Alyssa-Zarate-5251965.jpeg', 555, '5454', '4545', 'Драма', 0, 0),
(59, 'Наполеон', 'film.png', 55, 'Тест', 'Тест', 'Биография', 0, 0),
(60, 'Докинз', 'qUfyvwEZyk8.jpg', 55, 'Тест', 'Тест', 'Биография', 0, 0);

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
(45, 'fsdfsd', '1', '123123123', 4, '2015-05-14 12:54:45', '{\"1\":1,\"2\":1,\"3\":2}', 3),
(46, 'САША1', 'g3424242342', '', 4, '2015-05-18 18:34:42', '{\"44\":3,\"43\":3}', 1),
(52, 'egor8765', '79204516092', '1', 6, '2020-12-06 19:55:10', '{\"37\":3,\"36\":3}', 1),
(53, 'egor8765', '79204516092', '3', 6, '2020-12-06 20:23:10', '{\"40\":2,\"37\":1,\"36\":1,\"35\":1,\"44\":2,\"45\":2}', 1),
(54, 'egor8765', '79204516092', '555', 6, '2020-12-07 17:03:33', '{\"44\":2,\"45\":1,\"37\":8}', 1),
(55, 'egor8765', '79204516092', 'teeest', 6, '2020-12-07 21:50:00', '{\"1\":4}', 1),
(56, 'egor8765', '79204516092', 'Еще один', 6, '2020-12-07 22:09:01', '{\"50\":2,\"49\":2}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Александр', 'alex@mail.com', '111111', ''),
(4, 'Виктор Зинченко', 'zinchenko.us@gmail.com', '222222', ''),
(5, 'Сергей', 'serg@mail.com', '111111', ''),
(6, 'egor8765', 'egor8765@mail.ru', '123456', 'admin'),
(7, 'feda993', 'feda9938765@yandex.ru', '1234567', 'user');

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
