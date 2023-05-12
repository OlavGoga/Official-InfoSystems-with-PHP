-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2023 г., 08:52
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phphackero`
--

-- --------------------------------------------------------

--
-- Структура таблицы `phphackero`
--

DROP TABLE IF EXISTS `phphackero`;
CREATE TABLE IF NOT EXISTS `phphackero` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Uname` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Phone` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `phphackero`
--

INSERT INTO `phphackero` (`id`, `Uname`, `Email`, `Password`, `Phone`) VALUES
(1, 'OlavGoga', 'Goga@mail.Com', 'ttrr556y6gtdd4d45', '+798777663344'),
(2, 'Olre', 'Oleg@mail.ru', '53453333', '+77019777176'),
(4, 'Vladimir', 'volodya@mail.ru', '8766', '+77019777176');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Uname` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Phone` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `Uname`, `Email`, `Password`, `Phone`) VALUES
(1, 'OlavGoga', 'Goga@mail.gb', '6554444', '+77019777176'),
(3, 'Vladimir', 'volodya@mail.com', '3322dd334d', '+7709876544');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
