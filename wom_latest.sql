-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 03:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `char_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `char_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `char_xp` int(100) NOT NULL,
  `char_lv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `race_id` int(11) NOT NULL,
  `class_avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
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
-- Table structure for table `magics`
--

CREATE TABLE `magics` (
  `magic_id` int(11) NOT NULL,
  `magic_name` varchar(50) NOT NULL,
  `magic_type` int(11) NOT NULL,
  `magic_avatar` varchar(200) NOT NULL,
  `magic_power` int(11) NOT NULL,
  `magic_info` varchar(200) NOT NULL,
  `magic_req_lv` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magics`
--

INSERT INTO `magics` (`magic_id`, `magic_name`, `magic_type`, `magic_avatar`, `magic_power`, `magic_info`, `magic_req_lv`, `class_id`) VALUES
(1, 'html', 1, 'img/magics/html.png', 100, 'bla bla ', 1, 2),
(2, 'css', 2, 'img/magic/css.png', 50, 'very sad magic', 2, 2),
(3, 'php', 1, 'img/magic/php.png', 120, 'Very strong spell against demons', 3, 2),
(4, 'laravel', 1, 'img/magic/laravel.png', 150, 'Very strong spell against demons', 3, 2),
(5, 'sword strike', 1, 'img/magic/knight_sword_strike.png', 100, '', 1, 1),
(6, 'shield', 2, 'img/magic/knight_shield.png', 50, '', 2, 1),
(7, 'punch', 1, 'img/magics/knight_punch.png', 120, '', 3, 1),
(8, 'hidden blade', 1, 'img/magics/knight_hidden_blade.png', 150, '', 3, 1),
(9, 'ice ball hit', 1, 'img/magics/frost_ice_ball.png', 100, '', 1, 3),
(10, 'freeze', 1, 'img/magics/frost_freeze.png', 120, '', 3, 3),
(11, 'ice shield', 2, 'img/magics/frost_ice_shield.png', 50, '', 2, 3),
(12, 'freezing vortex', 1, 'img/magics/frost_vortex.png', 150, '', 3, 3),
(13, 'fire ball', 1, 'img/magics/fire_ball.png', 100, '', 1, 4),
(14, 'blast shield', 2, 'img/magics/fire_blast_shield.png', 50, '', 2, 4),
(15, 'purgin fire', 1, 'img/magics/fire_purgin_fire.png', 120, '', 3, 4),
(16, 'fire vortex', 1, 'img/magics/fire_vortex.png', 150, '', 3, 4),
(17, 'chop', 1, 'img/magics/orc_chop.png', 100, '', 1, 5),
(18, 'rune shield', 2, 'img/magic/orc_shield.png', 50, '', 2, 5),
(19, 'stomp', 1, 'img/magics/orc_stomp.png', 120, '', 3, 5),
(20, 'punch', 1, 'img/magics/orc_punch.png', 150, '', 3, 5),
(21, 'Bite', 1, 'img/magics/goblin_bite.png', 100, '', 1, 6),
(22, 'fast jump', 2, 'img/magics/goblin_jump.png', 50, '', 2, 6),
(23, 'Skratching', 1, 'img/magics/goblin_scratching.png', 120, '', 3, 6),
(24, 'acid bomb', 1, 'img/magics/goblin_acid.png', 150, '', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `magic_type`
--

CREATE TABLE `magic_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magic_type`
--

INSERT INTO `magic_type` (`type_id`, `type`) VALUES
(1, 'attack'),
(2, 'defence');

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `race_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`race_id`, `race_name`) VALUES
(1, 'human'),
(2, 'mage'),
(3, 'creature');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_avatar` varchar(200) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
