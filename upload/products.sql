-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 08:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infi`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_categories` varchar(50) DEFAULT NULL,
  `product_brands` int(11) DEFAULT NULL,
  `product_name` varchar(55) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `product_desc` text NOT NULL,
  `product_tag` varchar(10) DEFAULT NULL,
  `product_image` varchar(555) DEFAULT NULL,
  `availability` int(55) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `product_type` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_categories`, `product_brands`, `product_name`, `product_price`, `offer_price`, `product_desc`, `product_tag`, `product_image`, `availability`, `rating`, `product_type`) VALUES
(1, 'speakersb', NULL, 'Iball BT 40', 1000, 900, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Sale', 'iballbt40.jpg', 3, NULL, 'new_products'),
(2, 'speakers', NULL, 'Iball BT 50', 1000, 900, '', NULL, NULL, NULL, NULL, 'featured_products'),
(3, 'speakers', NULL, 'Iball BT 60', 1000, NULL, '', NULL, NULL, NULL, NULL, 'hot_deals'),
(4, 'speakers', NULL, 'Iball BT 70', 1000, NULL, '', NULL, NULL, NULL, NULL, 'new_arrivals'),
(5, 'speakers', NULL, 'Iball BT 50', 1000, NULL, '', NULL, NULL, NULL, NULL, 'special_offers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
