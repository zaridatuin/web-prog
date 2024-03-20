-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 05:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalwebpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `email`, `total_price`) VALUES
(1, 'zaritalavera@yahoo.com', '450.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `productname`, `description`, `price`, `category`, `availability`) VALUES
(1, 'Brisket', 'Smoked Brisket 200g', '400', 'Smoked Meat', 1),
(2, 'Pork Tacos', 'Pork Tacos 2pcs', '200', 'Tacos', 1),
(3, 'Chicken Sandwich', 'Chicken Sandwich 250g', '250', 'Sandwiches', 1),
(4, 'Beef Taco', 'Beef Taco 2 pcs', '250', 'Tacos', 1),
(5, 'Fish Taco', 'Fish Taco 2pcs', '300', 'Tacos', 1),
(6, 'Birria Taco', 'Birria Taco 2pcs', '300', 'Tacos', 1),
(7, 'Pulled Pork Sandwich', 'Pulled Pork Sandwich with Chips', '350', 'Sandwiches', 1),
(8, 'Smoked Chicken', 'Smoked Chicken 200g', '250', 'Smoked Meat', 1),
(10, 'BBQ Ribs', 'BBQ Ribs 300g', '350', 'Smoked Meat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(245) NOT NULL,
  `number` varchar(245) NOT NULL,
  `join_date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `username`, `password`, `email`, `address`, `number`, `join_date`) VALUES
(1, 'admin', 'zaridatuin', 'zaritalavera@yahoo.com', 'Marikina', '09951602318', '2024-03-20 16:35:54.000000'),
(22, '', '', '', 'marikina', '09999123123', NULL),
(24, 'zaridatuin', 'password1', 'zaridatuin@yahoo.com', 'Marikina', '0999123123', '2024-03-20 16:35:54.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
