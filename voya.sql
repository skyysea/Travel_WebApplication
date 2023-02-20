-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 10:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voya`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `page_id`, `comment`, `username`, `date`) VALUES
(0, 1, 'test plaese', 'thanthub', '2022-11-27 19:09:28'),
(0, 1, 'jojojojo kkkk', 'thanthub', '2022-11-27 19:11:19'),
(0, 3, 'that nice', 'thanthub', '2022-11-27 20:40:03'),
(0, 4, 'test', 'thanthub', '2022-11-27 21:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `username` varchar(40) NOT NULL,
  `page_id` int(11) NOT NULL,
  `img_id` varchar(40) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`username`, `page_id`, `img_id`, `name`, `link`) VALUES
('Pleasee', 1, 'images/G01.jpg', 'Breeze Café & Bar', 'RT01.php'),
('hotel', 1, 'images/G01.jpg', 'Breeze Café & Bar', 'RT01.php'),
('hotel', 2, 'images/G02.jpg', 'Mae-la Kitchen', 'RT02.php'),
('thanthub', 2, 'images/G02.jpg', 'Mae-la Kitchen', 'RT02.php'),
('thanthub', 4, 'images/L01.jpg', 'IMPACT Exhibition', 'LC01.php'),
('thanthub', 5, 'images/L02.jpg', 'IMPACT Lakeside', 'LC02.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('thanthub', 'ohm@gmail.com', '2d969e2cee8cfa07ce7ca0bb13c7a36d'),
('Boonprom', 'prom@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab'),
('Pleasee', 'please@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('hotel', 'hotel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
