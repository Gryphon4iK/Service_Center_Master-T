-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2024 г., 02:45
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Master-T-DB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Clients`
--

CREATE TABLE `Clients` (
  `ID_Клиента` int NOT NULL,
  `ФИО клиента` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Телефон` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Вид услуги` varchar(150) NOT NULL,
  `Название оборудования` varchar(255) NOT NULL,
  `Модель` varchar(255) NOT NULL,
  `Сообщение` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Clients`
--

INSERT INTO `Clients` (`ID_Клиента`, `ФИО клиента`, `Email`, `Телефон`, `Вид услуги`, `Название оборудования`, `Модель`, `Сообщение`) VALUES
(6, 'иванов иван иванович', 'Vasya12345@mail.com', '89276233435', 'Ремонт ноутбуков', 'intel i12', 's2568r-mgu', 'сломалсся ноутбук! почините пожалуйста!!!'),
(9, 'Павлов Павел Иванович', 'Pavel@mail.ru', '89996346146', 'Ремонт сервисного оборудования', 'Sity-link', 'U654Zr-25T', 'После падения перстал работать. Пытались самостоятельно починить, но сделали только хуже'),
(10, 'Финчук Мария Фёдоровна', 'MariaKrasivaya@yandex.ru', '89064651235', 'Ремонт другой техники', 'Стиральная машинка Heller', 'Quz1352', 'Перстала выжимать, после стирки сразу начинает глючить и пиликать, воду не сливает. Поэтому выключаем с розетки и вытаскиваем бельё');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` int NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `login`, `email`, `password`) VALUES
(2, 'Юрий', 'Yuriy@yandex.ru', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(3, 'Владислав', 'Vlad@mail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Василий', 'Vasya12345@mail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'admin', 'admin@mail.ru', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Структура таблицы `Оборудование`
--

CREATE TABLE `Оборудование` (
  `ID_Оборудование` int NOT NULL,
  `Наименование` varchar(255) NOT NULL,
  `Серийный номер` int NOT NULL,
  `Изготовитель` varchar(255) NOT NULL,
  `Модель` varchar(255) NOT NULL,
  `Описание` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `Предприятие`
--

CREATE TABLE `Предприятие` (
  `ID_Предприятия` int NOT NULL,
  `Адрес` varchar(255) NOT NULL,
  `Контактный телефон` int NOT NULL,
  `Электронный адрес` varchar(255) NOT NULL,
  `Примечание` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Предприятие`
--

INSERT INTO `Предприятие` (`ID_Предприятия`, `Адрес`, `Контактный телефон`, `Электронный адрес`, `Примечание`) VALUES
(1, 'ул. Пушкина, д. Колотушкино', 899945566, 'МАСТЕР-Т@mail.com', 'Центр по ремонту оборудования. Центр по ремонту оборудования. Центр по ремонту оборудования. Центр по ремонту оборудования. Центр по ремонту оборудования.'),
(2, 'ул. Абхазная, д.135/14, стр.1', 76413344, 'Мастер-Т-Sup@gmail.com', 'Техническая поддержка');

-- --------------------------------------------------------

--
-- Структура таблицы `Должность`
--

CREATE TABLE `Должность` (
  `ID_Должности` int NOT NULL,
  `Должность` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Должность`
--

INSERT INTO `Должность` (`ID_Должности`, `Должность`) VALUES
(1, 'Технический специалист по компьютерной системе'),
(2, 'Технический специалист смартфонов'),
(3, 'Технический специалист по бытовой технике'),
(4, 'Старший специалист'),
(5, 'Старший специалист администрирования');

-- --------------------------------------------------------

--
-- Структура таблицы `Заказ_Комплектующие`
--

CREATE TABLE `Заказ_Комплектующие` (
  `ID_Товара` int NOT NULL,
  `ID_Исполнения` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `Заказы`
--

CREATE TABLE `Заказы` (
  `ID_Заказа` int NOT NULL,
  `ID_Оборудования` int NOT NULL,
  `ID_Клиента` int NOT NULL,
  `НомерМастера` int NOT NULL,
  `Статус заказа` int NOT NULL,
  `Дата заказа` datetime NOT NULL,
  `ID_Исполнения` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `Исполнение`
--

CREATE TABLE `Исполнение` (
  `ID_Исполнения` int NOT NULL,
  `Вид ремонта` varchar(255) NOT NULL,
  `Стоимость работы` int NOT NULL,
  `Стоимость комплектующих` int NOT NULL,
  `Скидка` int NOT NULL,
  `Итоговая стоимость` int NOT NULL,
  `Дата исполнения` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `Склад комплектующих`
--

CREATE TABLE `Склад комплектующих` (
  `ID_Товара` int NOT NULL,
  `Наименование товара` varchar(255) NOT NULL,
  `Стоимость за единицу` int NOT NULL,
  `Количество на складе` int NOT NULL,
  `Стоимость всех материалов` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Склад комплектующих`
--

INSERT INTO `Склад комплектующих` (`ID_Товара`, `Наименование товара`, `Стоимость за единицу`, `Количество на складе`, `Стоимость всех материалов`) VALUES
(1, 'Программный чип SM-112', 1100, 25, 28),
(2, 'Модуль lsr235z (для бытовой техники', 500, 67, 34),
(3, 'Материнская плата SFM120', 2350, 150, 353),
(4, 'Плата Rf700', 200, 1000, 200),
(5, 'Колодка QR-660W', 350, 650, 228);

-- --------------------------------------------------------

--
-- Структура таблицы `Сотрудники`
--

CREATE TABLE `Сотрудники` (
  `ID_Сотрудника` int NOT NULL,
  `ID_Предприятия` int NOT NULL,
  `ФИО` varchar(255) NOT NULL,
  `Контактный_телефон` int NOT NULL,
  `Домашний_адрес` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Должность` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Сотрудники`
--

INSERT INTO `Сотрудники` (`ID_Сотрудника`, `ID_Предприятия`, `ФИО`, `Контактный_телефон`, `Домашний_адрес`, `Должность`) VALUES
(1, 1, 'Доронов Данил Алексеевич', 89416324, 'г.Ершов, ул.Стальная, д.12б, кв.23', 1),
(2, 1, 'Майсов Юрий Степанович', 54521534, 'г.Ершов, ул.Большая Нагорная, д.20', 2),
(3, 1, 'Зубарев Алексей Александрович', 95461243, 'г.Ершов, ул.Новая, д.130, стр.2, кв.340', 4),
(4, 2, 'Пенькова Мария Вячеславовна', 99955455, 'г.Старый град, ул.Полярная, д.60, кв.42', 5),
(5, 2, 'Набокова Виктория Валерьевна', 96545124, 'г.Старый град, ул.Полярная, д.62, кв.13', 3),
(6, 1, 'Морозов Евгений Юрьевич', 94451312, 'г.Ершов, ул.Серая, д.1б, стр.3, кв.64', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Статус заказа`
--

CREATE TABLE `Статус заказа` (
  `ID_Статуса` int NOT NULL,
  `Наименование` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`ID_Клиента`),
  ADD KEY `ID_Клиента` (`ID_Клиента`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Оборудование`
--
ALTER TABLE `Оборудование`
  ADD PRIMARY KEY (`ID_Оборудование`),
  ADD KEY `ID_Оборудование` (`ID_Оборудование`);

--
-- Индексы таблицы `Предприятие`
--
ALTER TABLE `Предприятие`
  ADD PRIMARY KEY (`ID_Предприятия`),
  ADD KEY `ID_Предприятия` (`ID_Предприятия`);

--
-- Индексы таблицы `Должность`
--
ALTER TABLE `Должность`
  ADD PRIMARY KEY (`ID_Должности`),
  ADD KEY `ID_Должности` (`ID_Должности`);

--
-- Индексы таблицы `Заказ_Комплектующие`
--
ALTER TABLE `Заказ_Комплектующие`
  ADD PRIMARY KEY (`ID_Товара`,`ID_Исполнения`),
  ADD KEY `ID_Исполнения` (`ID_Исполнения`);

--
-- Индексы таблицы `Заказы`
--
ALTER TABLE `Заказы`
  ADD PRIMARY KEY (`ID_Заказа`),
  ADD KEY `ID_Оборудования` (`ID_Оборудования`),
  ADD KEY `ID_Клиента` (`ID_Клиента`),
  ADD KEY `НомерМастера` (`НомерМастера`),
  ADD KEY `Статус заказа` (`Статус заказа`),
  ADD KEY `ID_Исполнения` (`ID_Исполнения`);

--
-- Индексы таблицы `Исполнение`
--
ALTER TABLE `Исполнение`
  ADD PRIMARY KEY (`ID_Исполнения`),
  ADD KEY `ID_Исполнения` (`ID_Исполнения`);

--
-- Индексы таблицы `Склад комплектующих`
--
ALTER TABLE `Склад комплектующих`
  ADD PRIMARY KEY (`ID_Товара`),
  ADD KEY `ID_Товара` (`ID_Товара`);

--
-- Индексы таблицы `Сотрудники`
--
ALTER TABLE `Сотрудники`
  ADD PRIMARY KEY (`ID_Сотрудника`),
  ADD KEY `ID_Сотрудника` (`ID_Сотрудника`),
  ADD KEY `Должность` (`Должность`),
  ADD KEY `ID_Предприятия` (`ID_Предприятия`);

--
-- Индексы таблицы `Статус заказа`
--
ALTER TABLE `Статус заказа`
  ADD PRIMARY KEY (`ID_Статуса`),
  ADD KEY `ID_Статуса` (`ID_Статуса`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Clients`
--
ALTER TABLE `Clients`
  MODIFY `ID_Клиента` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `Оборудование`
--
ALTER TABLE `Оборудование`
  MODIFY `ID_Оборудование` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Предприятие`
--
ALTER TABLE `Предприятие`
  MODIFY `ID_Предприятия` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Должность`
--
ALTER TABLE `Должность`
  MODIFY `ID_Должности` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Заказ_Комплектующие`
--
ALTER TABLE `Заказ_Комплектующие`
  MODIFY `ID_Товара` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Заказы`
--
ALTER TABLE `Заказы`
  MODIFY `ID_Заказа` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Исполнение`
--
ALTER TABLE `Исполнение`
  MODIFY `ID_Исполнения` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Склад комплектующих`
--
ALTER TABLE `Склад комплектующих`
  MODIFY `ID_Товара` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Сотрудники`
--
ALTER TABLE `Сотрудники`
  MODIFY `ID_Сотрудника` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Статус заказа`
--
ALTER TABLE `Статус заказа`
  MODIFY `ID_Статуса` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Заказ_Комплектующие`
--
ALTER TABLE `Заказ_Комплектующие`
  ADD CONSTRAINT `заказ_комплектующие_ibfk_1` FOREIGN KEY (`ID_Исполнения`) REFERENCES `Исполнение` (`ID_Исполнения`),
  ADD CONSTRAINT `заказ_комплектующие_ibfk_2` FOREIGN KEY (`ID_Товара`) REFERENCES `Склад комплектующих` (`ID_Товара`);

--
-- Ограничения внешнего ключа таблицы `Заказы`
--
ALTER TABLE `Заказы`
  ADD CONSTRAINT `заказы_ibfk_1` FOREIGN KEY (`ID_Оборудования`) REFERENCES `Оборудование` (`ID_Оборудование`),
  ADD CONSTRAINT `заказы_ibfk_2` FOREIGN KEY (`ID_Клиента`) REFERENCES `Clients` (`ID_Клиента`),
  ADD CONSTRAINT `заказы_ibfk_3` FOREIGN KEY (`НомерМастера`) REFERENCES `Сотрудники` (`ID_Сотрудника`),
  ADD CONSTRAINT `заказы_ibfk_4` FOREIGN KEY (`Статус заказа`) REFERENCES `Статус заказа` (`ID_Статуса`),
  ADD CONSTRAINT `заказы_ibfk_5` FOREIGN KEY (`ID_Исполнения`) REFERENCES `Исполнение` (`ID_Исполнения`);

--
-- Ограничения внешнего ключа таблицы `Сотрудники`
--
ALTER TABLE `Сотрудники`
  ADD CONSTRAINT `сотрудники_ibfk_1` FOREIGN KEY (`Должность`) REFERENCES `Должность` (`ID_Должности`),
  ADD CONSTRAINT `сотрудники_ibfk_2` FOREIGN KEY (`ID_Предприятия`) REFERENCES `Предприятие` (`ID_Предприятия`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
