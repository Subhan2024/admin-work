-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 11:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customise`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `type`, `des`, `status`) VALUES
(5, 'dumbble', 'gym', 'gym karo bhai', 1),
(6, 'sports', 'football', 'football is best', 1),
(7, 'web developer', 'desingner', 'coding lover', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `price` int(245) NOT NULL,
  `image` int(6) NOT NULL,
  `pstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pcategory`, `pdescription`, `price`, `image`, `pstatus`) VALUES
(2, 'bat', '4', 'love cricket', 1500, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(245) NOT NULL,
  `phone` int(20) NOT NULL,
  `mobile` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pass`, `phone`, `mobile`, `address`, `Status`) VALUES
(2, 'subhan', 'khan', 'subhankhan8974@gmail.com', '$2y$10$e4eQiK9jJnYoVWGDxjCAReRjW.a5HssUEiuZEF6bNAyGme7IL1nN.', 0, 0, '', 1),
(3, 'zakir', 'khan', 'zakir@gmail.com', '$2y$10$dQF8bTrBnjmdHLQnp9QtrOmZ1KlUQC.6UgOi/0GFt0Es8EvJo3Fq6', 0, 0, '', 1),
(4, 'rehman', 'khan', 'rehman@gmail.com', '$2y$10$gEazJiX.h7N2FnBTXuhfcu1Q7Hhu8wTA5PhV7Jno4.5U3LGiaDg7S', 0, 0, '', 1),
(5, 'syed', 'zain', 'zain@gmail.com', '$2y$10$YJ44uOXkMMiaLVCX/IL1guHuF5zbU2RHUyg.Ads2CCBOaxyRYqfem', 0, 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
