-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 24 2015 г., 20:57
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `whatsapp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message_queue`
--

CREATE TABLE IF NOT EXISTS `message_queue` (
`id` int(11) NOT NULL,
  `message_type` varchar(255) NOT NULL,
  `vcard_message` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `is_sent` tinyint(1) NOT NULL DEFAULT '0',
  `is_received_by_server` tinyint(1) NOT NULL DEFAULT '0',
  `is_received_by_receipient` tinyint(1) NOT NULL DEFAULT '0',
  `is_read_by_receipient` tinyint(1) NOT NULL DEFAULT '0',
  `order1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `message_queue`
--

INSERT INTO `message_queue` (`id`, `message_type`, `vcard_message`, `phone_number`, `is_sent`, `is_received_by_server`, `is_received_by_receipient`, `is_read_by_receipient`, `order1`) VALUES
(1, 'vcard', '1', '380999760371', 1, 1, 1, 1, NULL),
(2, 'vcard', '1', '380999716379', 1, 1, 0, 0, NULL),
(3, 'vcard', '1', '380669301263', 1, 1, 0, 0, NULL),
(4, 'vcard', '1', '380984180345', 1, 1, 0, 0, NULL),
(5, 'vcard', '1', '380995192015', 1, 1, 0, 0, NULL),
(6, 'vcard', '1', '380993018397', 1, 1, 0, 0, NULL),
(7, 'vcard', '1', '380638194502', 1, 1, 0, 0, NULL),
(8, 'vcard', '1', '380672059165', 1, 1, 0, 0, NULL),
(9, 'vcard', '1', '380674180378', 1, 1, 0, 0, NULL),
(10, 'vcard', '1', '380995298664', 1, 1, 1, 1, NULL),
(11, 'vcard', '1', '380995298664', 1, 1, 0, 0, NULL),
(12, 'vcard', '1', '380999760371', 1, 1, 1, 1, NULL),
(13, 'vcard', '1', '380999760371', 1, 1, 1, 1, NULL),
(14, 'vcard', '1', '380999760371', 1, 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `recipient`
--

CREATE TABLE IF NOT EXISTS `recipient` (
`id` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `recipient`
--

INSERT INTO `recipient` (`id`, `phone_number`, `pack`, `date_added`) VALUES
(1, '380999760371', '1', '2015-02-15'),
(2, '380999760371', '1', '2015-02-16'),
(3, '380669301263', '1', '0000-00-00'),
(4, '380984180345', '1', '2015-02-03'),
(5, '380995192015', '1', '2015-02-04'),
(6, '380993018397', '1', '2015-02-04'),
(7, '380638194502', '1', '2015-02-19'),
(8, '380672059165', '1', '2015-02-22'),
(9, '380674180378', '1', '2015-02-02'),
(10, '380995298664', '1', '2015-02-05');

-- --------------------------------------------------------

--
-- Структура таблицы `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`id` int(11) NOT NULL,
  `vcard_message` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_sent` tinyint(1) NOT NULL DEFAULT '0',
  `is_received_by_server` tinyint(1) NOT NULL DEFAULT '0',
  `is_received_by_receipient` tinyint(1) NOT NULL DEFAULT '0',
  `is_read_by_receipient` tinyint(1) NOT NULL DEFAULT '0',
  `order1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `result`
--

INSERT INTO `result` (`id`, `vcard_message`, `is_active`, `is_sent`, `is_received_by_server`, `is_received_by_receipient`, `is_read_by_receipient`, `order1`) VALUES
(1, '1', 1, 14, 14, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sender`
--

CREATE TABLE IF NOT EXISTS `sender` (
`id` int(11) NOT NULL,
  `identity` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `count_of_messages` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `is_whatsapp_installed` tinyint(1) NOT NULL DEFAULT '1',
  `is_viber_installed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `sender`
--

INSERT INTO `sender` (`id`, `identity`, `phone_number`, `pack`, `password`, `date_added`, `count_of_messages`, `is_active`, `is_logged_in`, `is_banned`, `is_whatsapp_installed`, `is_viber_installed`) VALUES
(1, '%9b%fd%e5%25o%d3%c2ft%ff2i%a3%b1%0e%d5%99%5cwr', '380672635260', '', 'wScTWiuEx/OVT5mdjPqUkkXKcNk=', '2015-02-15', '14', 1, 0, 0, 1, 0),
(2, '%2a%3d%d1%19%b6e%2as%3e%e5%a8%e8w%b4t%cb%40%3d%d6%d9', '380503228267', '', 'ocCbHF06A2EypEnJ50Rcl7tzW6Q=', '2015-02-15', '5', 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `vcard_message`
--

CREATE TABLE IF NOT EXISTS `vcard_message` (
`id` int(11) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `additional_name` varchar(255) NOT NULL,
  `name_prefix` varchar(255) NOT NULL,
  `name_suffix` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `work_po_box` varchar(255) NOT NULL,
  `work_extended_address` varchar(255) NOT NULL,
  `work_address` varchar(255) NOT NULL,
  `work_city` varchar(255) NOT NULL,
  `work_state` varchar(255) NOT NULL,
  `work_postal_code` varchar(255) NOT NULL,
  `work_country` varchar(255) NOT NULL,
  `home_po_box` varchar(255) NOT NULL,
  `home_extended_address` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `home_city` varchar(255) NOT NULL,
  `home_state` varchar(255) NOT NULL,
  `home_postal_code` varchar(255) NOT NULL,
  `home_country` varchar(255) NOT NULL,
  `office_tel` varchar(255) NOT NULL,
  `cell_tel` varchar(255) NOT NULL,
  `fax_tell` varchar(255) NOT NULL,
  `pager_tell` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `sort_string` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `vcard_message`
--

INSERT INTO `vcard_message` (`id`, `display_name`, `first_name`, `last_name`, `additional_name`, `name_prefix`, `name_suffix`, `nickname`, `title`, `role`, `department`, `company`, `work_po_box`, `work_extended_address`, `work_address`, `work_city`, `work_state`, `work_postal_code`, `work_country`, `home_po_box`, `home_extended_address`, `home_address`, `home_city`, `home_state`, `home_postal_code`, `home_country`, `office_tel`, `cell_tel`, `fax_tell`, `pager_tell`, `email1`, `email2`, `url`, `photo`, `birthday`, `timezone`, `sort_string`, `note`) VALUES
(1, 'Earny – деньги на мобильный', '', '', '', '', '', '', '', '', '', 'Earny', '', '', '', '', 'Russia', '', 'Russia', '', '', '', '', '', '', '', '', '', '', '', 'support@earny.me', '', 'http://earny.ru', '', '0000-00-00', '3', '', 'Забудь о пополнении мобильного счета!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_queue`
--
ALTER TABLE `message_queue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vcard_message`
--
ALTER TABLE `vcard_message`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_queue`
--
ALTER TABLE `message_queue`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vcard_message`
--
ALTER TABLE `vcard_message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
