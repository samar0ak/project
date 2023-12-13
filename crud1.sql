-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 06:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud1`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud1`
--

CREATE TABLE `crud1` (
  `id` int(1) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `education` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud1`
--

INSERT INTO `crud1` (`id`, `fname`, `lname`, `email`, `contact`, `education`) VALUES
(276, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(277, 'John', '123', 'Lloyds', 'sam', 'samar'),
(281, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(283, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(284, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(285, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(286, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(287, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(288, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(289, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(290, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(291, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(292, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(293, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(294, 'John', '123', 'Lloyds Office', 'sam', 'samar'),
(296, 'John', '123', 'Lloyds Office', 'sam', 'samar');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--


--

CREATE TABLE `register` (
  `name` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `cpassword`) VALUES
('Khan', 'ggg@gmail.com', '32', '321'),
('Khan', 'ggg@gmail.com', '89', '90'),
('Khan', 'ggg@gmail.com', '89', '90'),
('abdullah khan', 'khansamarabdullah@gmail.com', '4321', '4321'),
('Khan', 'k@gmail.com', '123', '123'),
('Khan', 't@gmail.com', '321', '321'),
('Khan', 'arishbakhan114@gmail.com', '321', '321'),
('maxwell', 'max@gmail.com', '1122', '1122'),
('abdullah khan', 'ab@gmail.com', '1212', '1212'),
('david', 'david@gmail.com', '1212', '1212'),
('sam', 'dd@gmail.com', '3232', '3232'),
('saquib', 'arishba7@gmail.com', '3231', '3231'),
('saquib', 'saqiub@gmail.com', '143', '143'),
('saquib', 'devid@gmail.com', '222', '222');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--
-------------

--
--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud1`
--
ALTER TABLE `crud1`
  ADD PRIMARY KEY (`id`);

--


--
-- AUTO_INCREMENT for table `crud1`
--
ALTER TABLE `crud1`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `posts`
--
