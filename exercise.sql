-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exercise`
--

-- --------------------------------------------------------

--
-- Структура на таблица `commentars`
--

CREATE TABLE IF NOT EXISTS `commentars` (
`ID` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `commentars`
--

INSERT INTO `commentars` (`ID`, `text`, `user_id`, `picture_id`) VALUES
(7, 'q da vidim dali raboti\r\n', 4, 5),
(17, 'asd', 1, 9),
(18, 'asd', 1, 9),
(22, 'asd', 4, 6),
(32, 'asd asd asd', 4, 2),
(36, 'stanaaa ', 4, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `ID` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `contacts`
--

INSERT INTO `contacts` (`ID`, `title`, `text`, `user_name`, `user_email`, `date`) VALUES
(0, 'Кога ще ви е готов сайта', 'Има няколко "бъга", които трябва да се оправят надявам се да сте бързи в корекцията им', 'admin', 'ayredin.ayriev@gmail.com', '2015-05-31 17:27:38'),
(0, 'asd', 'asd', 'asd', 'asd@abv.bg', '2015-05-31 17:37:04');

-- --------------------------------------------------------

--
-- Структура на таблица `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
`ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_count` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `pictures`
--

INSERT INTO `pictures` (`ID`, `name`, `text`, `user_id`, `comment_count`, `date`) VALUES
(2, '24905-390876_433605133343889_316520123_n.jpg', 'stana mai', 4, 0, '2015-06-01 20:21:02'),
(4, 'image4.jpg', 'snimka 2213123 asd asd ', 1, 0, '2015-06-01 20:17:57'),
(6, 'image6.jpg', 'snimka 2213123 asd asd ', 2, 2, '2015-06-01 20:17:57'),
(9, 'image9.jpg', 'snimka 2213123 asd asd ', 2, 10, '2015-06-01 20:17:57'),
(10, 'image10.jpg', 'snimka 2213123 asd asd ', 1, 1, '2015-06-01 20:17:57'),
(11, 'image11.jpg', 'snimka 2213123 asd asd ', 1, 1, '2015-06-01 20:17:57'),
(12, 'image12.jpg', 'snimka 2213123 asd asd ', 2, 0, '2015-06-01 20:17:57'),
(22, '46271-10981515_393382194163711_3771629375511309090_n.jpg', 'snimka 2213123 asd asd ', 4, 0, '2015-06-01 20:17:57'),
(23, '55023-1482903_10154974493680711_4885698900973950278_n.jpg', 'snimka 2213123 asd asd ', 4, 0, '2015-06-01 20:17:57');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `uploadet_pic` int(2) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`ID`, `name`, `surname`, `lastname`, `user_name`, `password`, `email_address`, `uploadet_pic`, `user_type`) VALUES
(1, 'Айредин', 'Мехмедов', 'Айриев', 'ayredin_ayriev', 'parola', 'ayredin.ayriev@gmail.com', 7, 0),
(2, 'Петър', 'Петров', 'Петров', 'petyr', '123123', 'petyr@abv.bg', 5, 1),
(3, 'Иван', 'Драган', 'Петкан', 'ivan_dragan', '123123', 'ivan@gmail.com', 0, 1),
(4, 'Айредин', 'Мехмедов', 'Айриев', 'admin', 'qwerty', 'ayredin.ayriev@gmail.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentars`
--
ALTER TABLE `commentars`
 ADD PRIMARY KEY (`ID`), ADD KEY `user_id` (`user_id`), ADD KEY `picture_id` (`picture_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
 ADD PRIMARY KEY (`ID`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentars`
--
ALTER TABLE `commentars`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
