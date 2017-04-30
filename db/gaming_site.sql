-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2016 at 06:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_block`
--

CREATE TABLE `add_block` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_block`
--

INSERT INTO `add_block` (`name`, `email`, `password`, `mob`) VALUES
('Shubham', 'admin@gma', 'admin', '555'),
('Shubham', 'shubhamsondhi@gmail.com', '123', '555');

-- --------------------------------------------------------

--
-- Table structure for table `pc_game`
--

CREATE TABLE `pc_game` (
  `g_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `score` int(100) NOT NULL,
  `time_limit` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_game`
--

INSERT INTO `pc_game` (`g_id`, `name`, `address`, `score`, `time_limit`, `image`) VALUES
(13, 'Game', 'game/3d-stunt-pilot-san-francisco.swf', 10, '1', 'game_image/3d-stunt-pilot-san-francisco-large.jpg'),
(14, 'game 2', 'game/dots-ii.swf', 32, '23', 'game_image/dots-ii-large.jpg'),
(15, 'game3', 'game/ninja-training-worlds.swf', 232, '23', 'game_image/ninja-training-worlds-large.jpg'),
(16, 'game4', 'game/pixel-quest.swf', 3, '23', 'game_image/pixel-quest-large.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_id`
--

CREATE TABLE `user_id` (
  `u_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_id`
--

INSERT INTO `user_id` (`u_id`, `first_name`, `last_name`, `password`, `email_id`, `mobile_no`, `city`) VALUES
(1, 'deepika', 'kumar', '123', 'deep@gmail.com', '1234567', 'asr'),
(2, 'sh', 'sh', 'sh', 'sh', 'sh', 'sh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_block`
--
ALTER TABLE `add_block`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pc_game`
--
ALTER TABLE `pc_game`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `user_id`
--
ALTER TABLE `user_id`
  ADD PRIMARY KEY (`u_id`,`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pc_game`
--
ALTER TABLE `pc_game`
  MODIFY `g_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_id`
--
ALTER TABLE `user_id`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
