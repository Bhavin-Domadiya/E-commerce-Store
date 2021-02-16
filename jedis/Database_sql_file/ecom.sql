-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2021 at 10:02 AM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(400) NOT NULL,
  `pass` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Abhay', 'abhay@gmail.com', 'abhay'),
(2, 'Bhavin', 'bhavin@gmail.com', 'bhavin');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `pid` int NOT NULL,
  `uid` int NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pqty` int NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_total_price`
--

CREATE TABLE `cart_total_price` (
  `id` int NOT NULL,
  `uid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `checkout_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `cart_total_price`
--

INSERT INTO `cart_total_price` (`id`, `uid`, `checkout_price`) VALUES
(3, '3', '2400');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `cname` varchar(400) NOT NULL,
  `cicon` varchar(400) NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `cicon`, `created_at`, `updated_at`) VALUES
(1, 'man', '', '', ''),
(2, 'women', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `fname` varchar(400) NOT NULL,
  `lname` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `mno` int NOT NULL,
  `pass` varchar(400) NOT NULL,
  `image` text NOT NULL,
  `address` varchar(400) NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fname`, `lname`, `email`, `mno`, `pass`, `image`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Abhay', 'Pansuriya', 'ansul@gmail.com', 46213454, '123', '', 'Address here    sdsds', '2021-01-06 05:08:33', '2021-01-06 05:08:33'),
(2, 'Bhavin', 'Domadiya', 'abcd@gmail.com', 6554654, 'abcd', '', 'Address here', '2021-01-07 04:59:47', '2021-01-07 04:59:47'),
(3, 'Abhay', 'Pansuriya', 'abhay@gmail.com', 46213454, 'abhay', '', 'Address here', '2021-01-13 04:52:07', '2021-01-13 04:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `cname` varchar(20) NOT NULL,
  `pname` varchar(400) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pimg` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pqty` int NOT NULL,
  `pdesc` varchar(400) NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cname`, `pname`, `pprice`, `pimg`, `pqty`, `pdesc`, `created_at`, `updated_at`) VALUES
(6, 'man', 'Shoes', '57.33', '1610425584733981735.jpg|16104255841669535000.jpg|1610425584567326324.jpg|1610425584337156748.jpg|1610425584584996418.jpg', 8, 'This is the Product That is waiting for you', '2021-01-12 04:26:24', '2021-01-19 04:21:22'),
(7, 'women', 'Sendals', '1200', '1610429576383749036.jpg|16104256371320315452.jpg|1610425637563886048.jpg|1610425637946607656.jpg', 8, 'THis is for women', '2021-01-12 04:27:17', '2021-01-19 04:23:52'),
(9, 'man', 'Slipper', '121', '16109433081088393321.jpeg|161094330869051889.png|1610943308218381052.png', 6, 'This IS the Slipper Chappla that can be use for wear like the foot ware\r\nAnd also can be easily extracted', '2021-01-18 04:15:08', '2021-01-19 04:21:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_total_price`
--
ALTER TABLE `cart_total_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cart_total_price`
--
ALTER TABLE `cart_total_price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
