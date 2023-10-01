-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 07:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `des` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `Cstatus` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `type`, `des`, `status`, `Cstatus`) VALUES
(1, 'Sportss', 'Hockeys', 'Our National Gamess', 1, 1),
(2, 'clothes', 'GulAhmed', 'Amazing Stuff', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(40) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `pcategory` int(40) NOT NULL,
  `pdescription` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `pstatus` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pcategory`, `pdescription`, `price`, `image`, `pstatus`) VALUES
(2, 'Hockey', 1, 'Our National Game', '50$', 'hockey 2.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pass`, `phone`, `mobile`, `address`, `Status`) VALUES
(1, 'Zain', 'Sarfraz', 'zainsarfraz82@gmail.com', '$2y$10$hJHNinunGQqUaV/3EfkBWeJB5p.ZYvkAj', '+92 3172667345', '03002146514', 'Karachi', 1),
(2, 'Sohaib', 'Shah', 'Sohaib@gmail.com', '$2y$10$r2Awqwcz8W2oIOXloKuLYubuXht.LDcGn', '+92 3172667555', '03002146565', 'Karachi', 1),
(3, 'Mahrukh', 'Bilal', 'mahrukhbilal2001@gmail.com', '$2y$10$XYyGP4WvVV0l68/NqGTFm.K2Xboe6yUV0', '+92 3172667666', '03002146577', 'Karachi', 1),
(5, 'Mahnoor', 'Sarfraz', 'mahnoor@gmail.com', '$2y$10$nTlJVgEh7cnY2KuiLgh33ubg6Z6g7q4yM', '+92 3172667777', '03002146599', 'Karachi', 1),
(6, 'Tayyaba', 'Zain', 'tayyabashakeel23@gmail.com', '$2y$10$CQYlPKEiZzZVdrBGSqDlX.DgVBSM6APVB', '+92 3172667888', '03002146598', 'Lahore', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `foriegnkey` (`pcategory`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `foriegnkey` FOREIGN KEY (`pcategory`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
