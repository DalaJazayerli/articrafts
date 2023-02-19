-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 08:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articrafts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_name`, `admin_pass`) VALUES
('admin', 'local');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `qty` int(10) NOT NULL DEFAULT 0,
  `image` varchar(1024) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `barcode`, `name`, `price`, `qty`, `image`, `description`) VALUES
(1, '001', 'Crafting Tape', 30, 3, 'image/image24.jpg', 'Description Crafting Tape'),
(2, '002', 'Paint Set', 500, 4, 'image/image3.jpg', 'Description Paint Set'),
(3, '003', 'Sketch Book', 40, 2, 'image/image4.jpg', 'This is a high quality sketch book'),
(4, '004', 'Drawing Pens', 45, 7, 'image/image36.jpg', 'Drawing pens'),
(5, '005', 'Paint Set', 300, 6, 'image/image7.jpg', 'Hugh quality paint set'),
(6, '006', 'Brushes', 15, 10, 'image/image6.jpg', 'Brushes'),
(7, '007', 'Colored Glue', 30, 14, 'image/image35.jpg', 'colored Glue');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersUid`, `usersEmail`, `usersPwd`) VALUES
(1, 'dala', 'dala.jazairy@gmail.com', '$2y$10$sl3LDxNJNXtB.3FvCqT8MOCaLGxYUyAIzrJunQDJT6oTI6wH45IrW'),
(3, 'test', 'test@gmail.com', '$2y$10$SwPiJfShRcsAyOQyh0zQxOJ.h.Tv.W92BBuyTbm/DTKgg3zzR4U9W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
