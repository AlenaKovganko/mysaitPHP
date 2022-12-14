-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2022 г., 17:14
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `altshu_final_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image_url`, `text`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Как я стала разработчиком', '', 'https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWF', 'Я продолжительное время работала в планово-экономическом отделе и давно интересовалась сферой IT. Мое знакомство с ней началось с С#, python, java. После некоторого обучения данным языкам я поняла, что хочу заниматься и фронтенд и бэкенд разработкой. ', '2022-12-07', NULL, 1),
(2, 'Дизайн в разработке сайтов', NULL, 'https://plus.unsplash.com/premium_photo-1668473365948-8a92c2d1fa78?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8M', '<h3> Моушн дизайн и анимация </h3>\r\nМоушн-дизайн добавляет динамичности объектам. Это анимация, которая приводит в движение элементы дизайна. Благодаря моушн, можно управлять вниманием пользователя и расставлять акценты. Тем не менее, моушн чаще используют в SMM, чем в дизайне сайтов, поскольку этот прием сложен в реализации, а также снижает производительность сайта и скорость его загрузки.\r\n<h3>Формы и абстракции </h3>\r\nФормы и абстракции используются в дизайне сайтов более 10 лет. Но если раньше геометрия применялась в качестве плашек и подложек, как на буклетах строй-фирм, то сейчас формы и фигуры — это самостоятельные элементы дизайна.\r\n\r\nЗа счет развития моушн дизайна, появилась возможность создавать сложные анимированные абстракции: шипастые шары или плавные поверхности из множества частиц, которые волной перетекают по сайту, градиентные фоны, которые переливаются как жидкость.\r\n<h3> Анимация </h3>\r\nС развитием технических возможностей стала популярна анимация и 3D графика, потому что компьютеры стали это вывозить, интернет стал быстрее, производительность стала выше. <br/>\r\nВ веб-дизайне используются 2 вида анимации: интерактивная, эстетическая (эффектная).', '2022-12-12', NULL, 1),
(3, 'Виды мобильных приложений', NULL, 'https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG9', '\r\n\r\n1. MPA (multi-page application): многостраничное приложение, которое отправляет запрос на сервер и полностью обновляет страницу, когда с ней совершается действие; <br/>\r\n2. SPA (single-page application): одностраничное приложение, содержащее HTML-страницу, которая динамически обновляется в зависимости от действий пользователя — без полной перезагрузки;<br/> \r\n3. PWA (progressive web application): приложение, которое пользователь устанавливает и может использовать в режиме офлайн.', '2022-12-14', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `note`) VALUES
(1, 'Alena', 'Kovganko', 'alena_kovganko@mail.ru', NULL),
(9, 'Петя', 'Петров', 'petrov@com', '\r\n                            Отличный сайт'),
(10, 'Петя', 'Петров', 'petrov@com', '\r\n                            Отличный сайт'),
(11, 'Петя', 'Петров', 'petrov@com', '\r\n                            Отличный сайт'),
(12, 'Алена', 'Ковганко', 'alenakovganko829@gmail.com', 'sef'),
(13, 'Алена', 'Ковганко', 'alenakovganko829@gmail.com', 'finaltest\r\n                            '),
(14, 'Алена', 'Ковганко', 'alenakovganko829@gmail.com', 'finaltest\r\n                            '),
(15, 'Алена', 'Ковганко', 'alenakovganko829@gmail.com', 'finaltest\r\n                            '),
(16, 'Алена', 'Ковганко', 'alenakovganko829@gmail.com', 'finaltest\r\n                            '),
(17, 'Алена', 'Ковганко', 'alenakovganko829@gmail.com', 'finaltest\r\n                            '),
(18, 'Алена', 'Ковганко', 'alenakovganko829@gmail.com', 'finaltest\r\n                            ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
