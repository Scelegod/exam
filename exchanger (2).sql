-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2024 г., 20:51
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `exchanger`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `applications_id` int(11) NOT NULL,
  `customer_code` int(11) NOT NULL,
  `coin_name` varchar(100) NOT NULL,
  `coin_count` varchar(100) NOT NULL,
  `coin_plochadka` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_count` varchar(100) NOT NULL,
  `bank_kurs` varchar(100) NOT NULL,
  `customers_tel` varchar(100) NOT NULL,
  `customers_email` varchar(100) NOT NULL,
  `customer_fio` varchar(100) NOT NULL,
  `applications_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`applications_id`, `customer_code`, `coin_name`, `coin_count`, `coin_plochadka`, `bank_name`, `bank_count`, `bank_kurs`, `customers_tel`, `customers_email`, `customer_fio`, `applications_status`) VALUES
(1, 7, 'Bitcoin', '0.00296654', 'BTC', 'Тинькофф', '5601.8852708', 'RUB', '+79774648617', 'bpatan2003@gmail.com', 'Саша', 'Оплачено'),
(2, 7, 'Bitcoin', '0.00296654', 'BTC', 'Тинькофф', '5601.8852708', 'RUB', '+79774648617', 'bpatan2003@gmail.com', 'Саша', 'Оплачено'),
(3, 7, 'Bitcoin', '0.00296654', 'BTC', 'Тинькофф', '5601.8852708', 'RUB', '+79774648617', 'bpatan2003@gmail.com', 'Саша', 'Закрыто'),
(4, 7, 'Bitcoin', '0.00296654', 'BTC', 'Тинькофф', '5601.8852708', 'RUB', 'Саша', 'bpatan2003@gmail.com', 'Саша', 'Оплачено'),
(5, 7, 'Bitcoin', '0.00296654', 'BTC', 'Тинькофф', '5601.8852708', 'RUB', 'Саша', 'bpatan2003@gmail.com', 'Куценко Юрий Денисович', 'Оплачено'),
(6, 7, 'Ethereum', '0.03861141', 'ERC20', 'Сбербанк', '85.24033655999999', 'RUB', 'Саша', 'bpatan2003@gmail.com', 'Саша', 'Оплачено'),
(7, 7, 'Bitcoin', '0.0025753', 'BTC', 'Сбербанк', '5601.8852708', 'RUB', 'fasdfasdf', 'asdfasdf', 'asdfasdfasd', 'Оплачено'),
(8, 7, 'Tether', '66.27', 'TRC20', 'Тинькофф', '5102.79', 'RUB', 'fasdfasdf', 'asdfasdf', 'asdfasdfasd', 'Оплачено'),
(9, 7, 'Litecoin', '0.77263327', 'LTC', 'Тинькофф', '5087.01744968', 'RUB', 'fasdfasdf', 'asdfasdf', 'asdfasdfasd', 'Оплачено'),
(10, 7, 'Litecoin', '0.77263327', 'LTC', 'Сбербанк', '5087.01744968', 'RUB', 'fasdfasdf', 'asdfasdf', 'asdfasdfasd', 'Оплачено'),
(11, 7, 'Tether', '66.27', 'TRC20', 'Тинькофф', '5102.79', 'RUB', 'gadfgadfg', 'sdafasd', 'asdgadf', 'Оплачено'),
(12, 7, 'Tether', '66.27', 'TRC20', 'Сбербанк', '5102.79', 'RUB', 'gadfgadfg', 'sdafasd', 'asdgadf', 'Оплачено'),
(13, 7, 'Litecoin', '0.77263327', 'LTC', 'Сбербанк', '5087.01744968', 'RUB', 'gadfgadfg', 'sdafasd', 'asdgadf', 'Оплачено'),
(14, 7, 'Ethereum', '0.03861141', 'ERC20', 'Тинькофф', '5383.04833656', 'RUB', 'fsdfsdf', 'sdfsdf', 'sdfsdfsd', 'Оплачено');

-- --------------------------------------------------------

--
-- Структура таблицы `bank_cus`
--

CREATE TABLE `bank_cus` (
  `bank_id` int(11) NOT NULL,
  `customer_code` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `bank_cus`
--

INSERT INTO `bank_cus` (`bank_id`, `customer_code`, `bank_name`, `bank_value`) VALUES
(1, 7, 'Сбербанк', '85765.58631504'),
(2, 7, 'Тинькофф', '162752.13317984');

-- --------------------------------------------------------

--
-- Структура таблицы `bitcoin`
--

CREATE TABLE `bitcoin` (
  `bitcoin_id` int(11) NOT NULL,
  `customer_code` int(11) NOT NULL,
  `bit_value` varchar(100) NOT NULL,
  `bit_coin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `bitcoin`
--

INSERT INTO `bitcoin` (`bitcoin_id`, `customer_code`, `bit_value`, `bit_coin`) VALUES
(1, 7, '99.9626087', 'Bitcoin'),
(2, 7, '9734.92', 'Tether'),
(3, 7, '98.49805167', 'Ethereum'),
(4, 7, '86.86523441', 'Litecoin');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_lname` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_pass`, `customer_lname`, `customer_email`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com'),
(6, 'bibiskop', 'гоша', 'bibiskop21@gmail.com'),
(7, 'biba', 'Саша', 'bpatan2003@gmail.com'),
(8, '1234567', 'Куценко Юрий Денисович', 'bpatan2003@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applications_id`),
  ADD KEY `customer_code` (`customer_code`);

--
-- Индексы таблицы `bank_cus`
--
ALTER TABLE `bank_cus`
  ADD PRIMARY KEY (`bank_id`),
  ADD KEY `customer_code` (`customer_code`);

--
-- Индексы таблицы `bitcoin`
--
ALTER TABLE `bitcoin`
  ADD PRIMARY KEY (`bitcoin_id`),
  ADD KEY `customer_id` (`customer_code`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `applications_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `bank_cus`
--
ALTER TABLE `bank_cus`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `bitcoin`
--
ALTER TABLE `bitcoin`
  MODIFY `bitcoin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`customer_code`) REFERENCES `customers` (`customer_id`);

--
-- Ограничения внешнего ключа таблицы `bank_cus`
--
ALTER TABLE `bank_cus`
  ADD CONSTRAINT `bank_cus_ibfk_1` FOREIGN KEY (`customer_code`) REFERENCES `customers` (`customer_id`);

--
-- Ограничения внешнего ключа таблицы `bitcoin`
--
ALTER TABLE `bitcoin`
  ADD CONSTRAINT `bitcoin_ibfk_1` FOREIGN KEY (`customer_code`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
