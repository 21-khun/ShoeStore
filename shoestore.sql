-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 12:11 PM
-- Server version: 8.0.22
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `id` int NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`id`, `userName`, `email`, `phoneNumber`, `message`) VALUES
(1, 'admin', 'joker1998dec@gmail.com', 09788763123, 'hfkgkjkj'),
(2, 'admin', 'joker1998dec@gmail.com', 09788763123, 'ssadsd'),
(3, 'admin', 'joker1998dec@gmail.com', 09788763123, 'asdasdasdsd'),
(4, 'dsdfdfs', 'lwinmoe@gmail.com', 09428375004, 'sdfdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `shoe_id` int NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int NOT NULL,
  `size` int NOT NULL,
  `userName` varchar(100) NOT NULL,
  `phoneNumber` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `visa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `shoe_id`, `brand`, `price`, `quantity`, `size`, `userName`, `phoneNumber`, `email`, `address`, `visa`) VALUES
(1, 25, 'All Star', '$54', 1, 40, 'admin', 09788763123, 'joker1998dec@gmail.com', 'Yangon', '1231231231'),
(2, 26, 'All Star', '$74', 1, 40, 'admin', 09788763123, 'kyawlwinmoe.taungyi.myanmar@gmail.com', 'meikhtila', 'ksdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int NOT NULL,
  `image` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `image`, `brand`, `price`) VALUES
(1, 'shoes/nike4.jpg', 'Nike', '$50'),
(2, 'shoes/nike5.jpg', 'Nike', '$80'),
(3, 'shoes/nike6.jpg', 'Nike', '$160'),
(4, 'shoes/nike7.jpg', 'Nike', '$100'),
(5, 'shoes/nike8.jpg', 'Nike', '$59'),
(6, 'shoes/nike10.jpg', 'Nike$', '$80'),
(7, 'shoes/nike11.jpg', 'Nike', '$160'),
(8, 'shoes/nike12.jpg', 'Nike', '$100'),
(9, 'shoes/puma9.jpg', 'Puma', '$100'),
(10, 'shoes/puma10.jpg', 'Puma', '$92'),
(11, 'shoes/puma11.jpg', 'Puma', '$140'),
(12, 'shoes/puma4.jpg', 'Puma', '$90'),
(13, 'shoes/puma5.jpg', 'Puma', '$50'),
(14, 'shoes/puma6.jpg', 'Puma', '$80'),
(15, 'shoes/puma7.jpg', 'Puma', '$200'),
(16, 'shoes/puma8.jpg', 'Puma', '$170'),
(17, 'shoes/adidas1.jpg', 'Adidas', '$72'),
(18, 'shoes/adidas2.jpg', 'Adidas', '$90'),
(19, 'shoes/adidas3.jpg', 'Adidas', '$100'),
(20, 'shoes/adidas4.jpg', 'Adidas', '$80'),
(21, 'shoes/adidas6.jpg', 'Adidas', '$100'),
(22, 'shoes/adidas5.jpg', 'Adidas', '$140'),
(23, 'shoes/adidas7.jpg', 'Adidas', '$64'),
(24, 'shoes/adidas8.jpg', 'Adidas', '$79'),
(25, 'shoes/allstar1.jpg', 'All Star', '$54'),
(26, 'shoes/allstar2.jpg', 'All Star', '$74'),
(27, 'shoes/allstar3.jpg', 'All Star', '$80'),
(28, 'shoes/allstar4.jpg', 'All Star', '$64'),
(29, 'shoes/lotto1.jpg', 'Lotto', '$75'),
(30, 'shoes/lotto5.jpg', 'Lotto', '$63'),
(31, 'shoes/lotto3.jpg', 'Lotto', '$200'),
(32, 'shoes/lotto4.jpg', 'Lotto', '$65');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
