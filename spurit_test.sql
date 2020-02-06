-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 06 2020 г., 17:19
-- Версия сервера: 5.6.38-log
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `spurit.test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `text` text,
  `autor_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `task_id`, `text`, `autor_id`, `date_created`) VALUES
(1, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(2, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(3, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(4, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(5, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(6, 1, 'Текст коментария к задаче', 1, '2020-02-04 09:00:00'),
(7, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(8, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(9, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(10, 1, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(11, 3, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(12, 3, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(13, 3, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(14, 3, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(15, 3, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(16, 3, 'Текст коментария к задаче', 1, '0000-00-00 00:00:00'),
(18, 3, 'Текст коментария к задаче', 1, '2020-02-05 08:17:11'),
(19, 3, 'Текст коментария к задаче', 1, '2020-02-06 12:53:55'),
(20, 3, 'Текст коментария к задаче', 1, '2020-02-06 12:54:30'),
(21, 3, 'Текст коментария к задаче', 1, '2020-02-06 12:56:30'),
(29, 3, '1234214', 1, '2020-02-06 17:07:51'),
(30, 3, '244243', 1, '2020-02-06 17:08:01');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `title_status` varchar(255) NOT NULL,
  `activity` tinyint(1) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `title_status`, `activity`, `date_created`) VALUES
(1, 'TODO', 1, '2020-02-05 10:05:35'),
(2, 'DOING', 1, '2020-02-05 10:05:35'),
(3, 'DONE', 1, '2020-02-05 10:06:09');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `status_id` int(11) DEFAULT NULL,
  `autor_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `status_id`, `autor_id`, `date_created`) VALUES
(1, 'Добавить', '1234567892', 2, 1, '2020-02-06 15:22:28'),
(2, 'Реализовать Новое', 'Забыть старое2', 3, 1, '2020-02-06 15:22:23'),
(3, 'Сделать', '123456789', 3, 1, '2020-02-05 15:44:25'),
(10, 'Добавить новое', 'Текст описания задачи', 1, 1, '2020-02-04 00:00:00'),
(36, 'Добавить новое', 'Текст описания задачи', 2, 1, '2020-02-06 12:54:30'),
(37, 'Добавить новое', 'Текст описания задачи332', 2, 1, '2020-02-06 15:22:19'),
(38, 'Самая новая задача', 'Текст описания задачи', 1, 1, '0000-00-00 00:00:00'),
(39, 'Добавить новое фичу', 'Текст описания задачи', 2, 1, '2020-02-06 13:40:35'),
(42, 'Settings', '235', 1, 1, '2020-02-06 17:09:03');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `nickname`, `date_created`) VALUES
(1, 'Админ', 'Админович', 'admin', '2020-02-05 19:18:06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor_id` (`autor_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `autor_id` (`autor_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Ограничения внешнего ключа таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
