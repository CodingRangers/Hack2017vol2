-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 апр 2017 в 22:05
-- Версия на сървъра: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wom`
--

-- --------------------------------------------------------

--
-- Структура на таблица `characters`
--

CREATE TABLE `characters` (
  `char_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `char_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `char_xp` int(100) NOT NULL,
  `char_lv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `characters`
--

INSERT INTO `characters` (`char_id`, `user_id`, `char_name`, `class_id`, `char_xp`, `char_lv`) VALUES
(1, 1, 'X-men', 2, 65, 0),
(2, 2, 'Hypo', 1, 100, 1),
(3, 3, 'bodyhype', 2, 100, 1),
(4, 4, 'bombgirl', 3, 100, 1),
(5, 5, 'ribenmaistor', 6, 100, 1),
(6, 6, 'pistoletfc', 5, 100, 1),
(7, 7, 'ivboom', 4, 100, 1),
(8, 8, 'qq2eee', 2, 100, 1),
(9, 9, 'ggfff', 5, 100, 1),
(10, 10, 'tihomashi', 2, 100, 1),
(11, 11, 'goblin', 6, 100, 1),
(12, 12, 'emo', 6, 100, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `race_id` int(11) NOT NULL,
  `class_avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `race_id`, `class_avatar`) VALUES
(1, 'knight', 1, 'img/class-knight.jpg'),
(2, 'programmer', 1, 'img/class-programmer.jpg'),
(3, 'frost', 2, 'img/class-frost.jpg'),
(4, 'fire', 2, 'img/class-fire.jpg'),
(5, 'orc', 3, 'img/class-orc.jpg'),
(6, 'goblin', 3, 'img/class-goblin.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_dmg` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `items_bought`
--

CREATE TABLE `items_bought` (
  `bought_id` int(11) NOT NULL,
  `item_dmg` int(11) NOT NULL,
  `item_avatar` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `magics`
--

CREATE TABLE `magics` (
  `magic_id` int(11) NOT NULL,
  `magic_name` varchar(50) NOT NULL,
  `magic_type` int(11) NOT NULL,
  `magic_avatar` varchar(200) NOT NULL,
  `magic_power` int(11) NOT NULL,
  `magic_info` varchar(200) NOT NULL,
  `magic_req_lv` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `mana_req` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `magics`
--

INSERT INTO `magics` (`magic_id`, `magic_name`, `magic_type`, `magic_avatar`, `magic_power`, `magic_info`, `magic_req_lv`, `class_id`, `mana_req`) VALUES
(1, 'html', 1, 'img/magics/html.png', 10, 'bla bla ', 1, 2, 2),
(2, 'css', 2, 'img/magics/css.png', 5, 'very sad magic', 2, 2, 1),
(3, 'php', 1, 'img/magics/php.png', 12, 'Very strong spell against demons', 3, 2, 3),
(4, 'laravel', 1, 'img/magics/laravel.png', 15, 'Very strong spell against demons', 3, 2, 4),
(5, 'sword strike', 1, 'img/magics/knight_sword_strike.png', 10, '', 1, 1, 2),
(6, 'shield', 2, 'img/magics/knight_shield.png', 5, '', 1, 1, 1),
(7, 'punch', 1, 'img/magics/knight_punch.png', 12, '', 1, 1, 3),
(8, 'hidden blade', 1, 'img/magics/knight_hidden_blade.png', 15, '', 1, 1, 4),
(9, 'ice ball hit', 1, 'img/magics/frost_ice_ball.png', 10, '', 1, 3, 2),
(10, 'freeze', 1, 'img/magics/frost_freeze.png', 12, '', 3, 3, 3),
(11, 'ice shield', 2, 'img/magics/frost_ice_shield.png', 5, '', 2, 3, 1),
(12, 'freezing vortex', 1, 'img/magics/frost_vortex.png', 15, '', 3, 3, 4),
(13, 'fire ball', 1, 'img/magics/fire_ball.png', 10, '', 1, 4, 2),
(14, 'blast shield', 2, 'img/magics/fire_blast_shield.png', 5, '', 2, 4, 1),
(15, 'purgin fire', 1, 'img/magics/fire_purgin_fire.png', 12, '', 3, 4, 3),
(16, 'fire vortex', 1, 'img/magics/fire_vortex.png', 15, '', 3, 4, 4),
(17, 'chop', 1, 'img/magics/orc_chop.png', 10, '', 1, 5, 2),
(18, 'rune shield', 2, 'img/magic/orc_shield.png', 5, '', 2, 5, 1),
(19, 'stomp', 1, 'img/magics/orc_stomp.png', 12, '', 3, 5, 3),
(20, 'punch', 1, 'img/magics/orc_punch.png', 15, '', 3, 5, 4),
(21, 'Bite', 1, 'img/magics/goblin_bite.png', 10, '', 1, 6, 2),
(22, 'fast jump', 2, 'img/magics/goblin_jump.png', 5, '', 2, 6, 1),
(23, 'Skratching', 1, 'img/magics/goblin_scratching.png', 12, '', 3, 6, 3),
(24, 'acid bomb', 1, 'img/magics/goblin_acid.png', 15, '', 3, 6, 4);

-- --------------------------------------------------------

--
-- Структура на таблица `magic_type`
--

CREATE TABLE `magic_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `magic_type`
--

INSERT INTO `magic_type` (`type_id`, `type`) VALUES
(1, 'attack'),
(2, 'defence');

-- --------------------------------------------------------

--
-- Структура на таблица `race`
--

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `race_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `race`
--

INSERT INTO `race` (`race_id`, `race_name`) VALUES
(1, 'human'),
(2, 'mage'),
(3, 'creature');

-- --------------------------------------------------------

--
-- Структура на таблица `standings`
--

CREATE TABLE `standings` (
  `games_won` int(11) NOT NULL,
  `games_lost` int(11) NOT NULL,
  `char_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `standings`
--

INSERT INTO `standings` (`games_won`, `games_lost`, `char_id`) VALUES
(0, 0, 1),
(1, 1, 2),
(0, 1, 3),
(1, 0, 4),
(2, 0, 5),
(2, 1, 6),
(1, 2, 7),
(3, 2, 8),
(2, 3, 9),
(4, 2, 10),
(0, 0, 11),
(0, 0, 12);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_avatar` varchar(200) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `user_avatar`, `user_name`, `user_pass`, `date_deleted`) VALUES
(1, '', 'ivan', '123', NULL),
(2, '', 'svetli', 'svetli123', NULL),
(3, '', 'pavel', '123456', NULL),
(4, '', 'kristin', 'kriska13', NULL),
(5, '', 'pesho', '123', NULL),
(6, '', 'hristo', 'qwert', NULL),
(7, '', 'ivelin', '789', NULL),
(8, '', 'qwe', 'tre', NULL),
(9, '', 'ggff', 'gggfff', NULL),
(10, '', 'tiho', '123', NULL),
(11, '', 'goblin32', '32goblin', NULL),
(12, '', 'emo', 'emo', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`char_id`),
  ADD KEY `char_race` (`class_id`),
  ADD KEY `char_race_2` (`class_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `race_id` (`race_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `items_bought`
--
ALTER TABLE `items_bought`
  ADD PRIMARY KEY (`bought_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `magics`
--
ALTER TABLE `magics`
  ADD PRIMARY KEY (`magic_id`),
  ADD KEY `magic_type` (`magic_type`),
  ADD KEY `magic_race` (`class_id`);

--
-- Indexes for table `magic_type`
--
ALTER TABLE `magic_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`race_id`);

--
-- Indexes for table `standings`
--
ALTER TABLE `standings`
  ADD KEY `class_id` (`char_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items_bought`
--
ALTER TABLE `items_bought`
  MODIFY `bought_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `magics`
--
ALTER TABLE `magics`
  MODIFY `magic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `magic_type`
--
ALTER TABLE `magic_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `standings`
--
ALTER TABLE `standings`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
