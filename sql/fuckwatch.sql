-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 02:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuckwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` varchar(12) NOT NULL,
  `title` varchar(50) NOT NULL,
  `uploader` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `file` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL DEFAULT '/content/thumbnails/temporary_placeholder_thumbnail.png',
  `uploadtime` datetime NOT NULL DEFAULT current_timestamp(),
  `visibility` int(1) NOT NULL DEFAULT 0 COMMENT '0 = public, 1 = unlisted & 2 = private',
  `deleted` int(1) NOT NULL DEFAULT 0 COMMENT '0 = not deleted, 1 = deleted, 2 = banned',
  `featured` int(1) NOT NULL DEFAULT 0 COMMENT '0 = not featured & 1 = featured',
  `type` int(1) DEFAULT 0 COMMENT '0 = video',
  `uploader_ip` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pfp` varchar(100) NOT NULL DEFAULT '/content/pfp/temporary_placeholder_pfp.png',
  `username` varchar(20) NOT NULL,
  `displayname` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `followers` int(11) NOT NULL DEFAULT 0,
  `birthday` date DEFAULT NULL,
  `joined` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `first_ip` varchar(30) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0 COMMENT '0 = not admin, 1 = mod & 2 = admin',
  `verified` int(1) NOT NULL DEFAULT 0 COMMENT '0 = not verified & 1 = verified',
  `banned` int(1) NOT NULL DEFAULT 0 COMMENT '0 = not banned & 1 = banned'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
