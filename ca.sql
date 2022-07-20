-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 05:48 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
(1, 'sam', 'ruswell', 'ghghgf@sdsd.com', 'about wall clock', 'Did you fine any new items?');

-- --------------------------------------------------------

--
-- Table structure for table `contactpro`
--

CREATE TABLE `contactpro` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactpro`
--

INSERT INTO `contactpro` (`id`, `uname`, `subject`, `message`) VALUES
(1, 'vegan', 'some of items', 'cabinet was broken that i had brought from u..!');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`fname`, `lname`, `address`, `email`, `phone`, `country`, `username`, `password`, `method`, `code`) VALUES
('fred', 'morgen', '22 Colombo st.', 'fg@ddfd.com', '0774120669', 'AD', 'vegan', '243e61e9410a9f577d2d662c67025ee9', 'Direct', 'ffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `fprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `pic`, `product`, `price`, `quantity`, `fprice`) VALUES
(1, 'images/cabinet.jpg', 'Cabinet', 18000, 1, 13500),
(2, 'images/chair.jpg', 'Chair', 3000, 1, 2250),
(3, 'images/Herbal bed.jpg', 'Herbal Bed', 40000, 1, 30000),
(4, 'images/Mask.jpg', 'Mask', 3000, 1, 2250),
(5, 'images/octagon table.jpg', 'Octagon Table', 5000, 1, 3750),
(6, 'images/Secret boxes.jpg', 'Secret Boxes', 10000, 2, 15000),
(7, 'images/seth thomas clock.jpg', 'Seth Thomas Clock', 3000, 1, 2250),
(8, 'images/brass clock.jpg', 'Brass Clock', 5000, 1, 3750),
(9, 'images/brass pot.jpg', 'Brass Pot', 3000, 1, 2250),
(10, 'images/brass spear.jpg', 'Brass Spear', 8000, 1, 6000),
(11, 'images/brass table.jpg', 'Brass Table', 10000, 1, 7500),
(12, 'images/chimney lamp.jpg', 'Chimney Lamp', 5000, 1, 3750),
(13, 'images/cutter.jpg', 'Cutter', 2000, 1, 1500),
(14, 'images/hanging lamp.jpg', 'Hanging Lamp', 1000, 1, 750),
(15, 'images/iron.jpg', 'Iron', 3000, 1, 2250),
(16, 'images/ceremic ball.jpg', 'Ceremic Ball', 3000, 1, 2250),
(17, 'images/Ceremic Plate.jpg', 'Ceremic Plate', 2000, 1, 1500),
(18, 'images/gem pendent.jpg', 'Gem Pendent', 100000, 1, 75000),
(19, 'images/hair clip.jpg', 'Hair Clip', 40000, 1, 30000),
(20, 'images/jewelry box.jpg', 'Jewelry Box', 30000, 1, 22500),
(21, 'images/Necklace and saree clip.jpg', 'Necklace and Saree Clip', 140000, 1, 105000);

-- --------------------------------------------------------

--
-- Table structure for table `userpro`
--

CREATE TABLE `userpro` (
  `user_name` varchar(255) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userpro`
--

INSERT INTO `userpro` (`user_name`, `pro_id`) VALUES
('vegan', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactpro`
--
ALTER TABLE `contactpro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactpro`
--
ALTER TABLE `contactpro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
