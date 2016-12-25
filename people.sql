-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.14-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win64
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Дамп данных таблицы people.info: 6 rows
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`id`, `FirstName`, `SecondName`, `Email`) VALUES
	(77, 'Yana', 'Redko', 'yanaRedko@mail.ru'),
	(62, 'Roman', 'Kisera', 'kisera@rambler.ru'),
	(73, 'Anatoliy', 'Medinets', 'deadcord@mail.ru'),
	(78, 'Dmitriy', 'Karabaza', 'dima1990@yandex.ru'),
	(76, 'Artem', 'Afanasiev', 'artem@mail.ru'),
	(65, 'Vadim', 'Kravets', 'vadim123@yandex.ru');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
