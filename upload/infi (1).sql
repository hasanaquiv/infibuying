-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 07:09 AM
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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brands_id` int(11) NOT NULL,
  `brands_name` varchar(55) NOT NULL,
  `brands_link` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brands_name`, `brands_link`) VALUES
(1, 'Iball', 'iball'),
(2, 'Zebronics', ''),
(3, 'Intex', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(55) DEFAULT NULL,
  `categories_icon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_icon`) VALUES
(1, 'speakers', 2),
(2, 'Keyboard Mouse', 3),
(3, 'Laptop', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `notification_title` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `notification_msg` varchar(555) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `notification_title`, `status`, `notification_msg`, `seller_id`) VALUES
(1, 'You have new order!', 0, 'Lorem ipsum dolor sit amet, consectetuer elit.', 2),
(2, 'You have new order!', 1, '', 1),
(3, 'You have new order!', 1, '', 1),
(4, 'You have new order!', 1, '', 1),
(5, 'You have new order!', 1, '', 1),
(6, 'You have new order!', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(16, 1, 1000.00, '2018-06-24 13:36:35', '2018-06-24 13:36:35', '1'),
(17, 1, 1000.00, '2018-06-24 13:37:45', '2018-06-24 13:37:45', '1'),
(18, 1, 2000.00, '2018-06-24 14:13:05', '2018-06-24 14:13:05', '1'),
(19, 1, 900.00, '2018-06-24 14:16:40', '2018-06-24 14:16:40', '1'),
(20, 1, 900.00, '2018-06-24 14:27:40', '2018-06-24 14:27:40', '1'),
(21, 1, 900.00, '2018-06-24 14:29:30', '2018-06-24 14:29:30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `seller_id`) VALUES
(9, 16, 2, 1, 1),
(10, 17, 2, 1, 1),
(11, 18, 2, 2, 1),
(12, 19, 2, 1, 1),
(13, 20, 2, 1, 1),
(14, 21, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(55) DEFAULT NULL,
  `page_link` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_link`) VALUES
(1, 'Home', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_categories` varchar(50) DEFAULT NULL,
  `product_brands` varchar(11) DEFAULT NULL,
  `product_name` varchar(55) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `product_desc` text,
  `product_tag` varchar(10) DEFAULT NULL,
  `product_image` varchar(555) DEFAULT NULL,
  `availability` int(55) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `product_type` varchar(55) DEFAULT NULL,
  `product_status` int(11) DEFAULT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_categories`, `product_brands`, `product_name`, `product_price`, `offer_price`, `product_desc`, `product_tag`, `product_image`, `availability`, `rating`, `product_type`, `product_status`, `seller_id`) VALUES
(2, 'speakers', 'zebronics', 'Iball BT 50', 1000, 900, '', NULL, NULL, NULL, NULL, 'featured_products', 1, 1),
(3, 'speakers', NULL, 'Iball BT 60', 1000, NULL, '', NULL, NULL, NULL, NULL, 'hot_deals', 1, 0),
(4, 'speakers', NULL, 'Iball BT 70', 1000, NULL, '', NULL, NULL, NULL, NULL, 'new_arrivals', 1, 0),
(5, 'speakers', NULL, 'Iball BT 50', 1000, NULL, '', NULL, NULL, NULL, NULL, 'special_offers', 1, 0),
(6, 'headphone', 'Zebronics', 'BH 330', NULL, NULL, '', NULL, '', 0, NULL, NULL, NULL, 0),
(7, 'headephone', 'Zebronics', 'BH 540', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 'headphone', 'Zebronics', 'BH 339', NULL, NULL, '', NULL, '', 0, NULL, NULL, NULL, 0),
(9, 'headephone', 'Zebronics', 'BH 520', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 'headphone', 'Zebronics', 'Zebronics BH 702', NULL, NULL, '', NULL, '', 0, NULL, NULL, NULL, 0),
(11, 'headephone', 'Zebronics', 'Zebronics Raga', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 'speakers', 'iball', '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 'speakers', 'zebronics', 'Zeronics Dot', 500, NULL, 'hhhhhhhhhk', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(14, 'speakers', 'intex', 'Index Beats', 1500, NULL, 'balblalalla', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(15, 'speakers', 'intex', 'Intex Jogger', 1500, NULL, 'hhhhhhhhhhhhhhhhhhhhhhhhh', NULL, 'icon.png', NULL, NULL, NULL, NULL, 0),
(16, 'speakers', 'iball', '', 0, NULL, '', NULL, '', NULL, NULL, NULL, NULL, 0),
(17, 'speakers', 'iball', '', 0, NULL, '', NULL, '', NULL, NULL, NULL, NULL, 0),
(18, 'speakers', 'iball', '', 0, NULL, '', NULL, '', NULL, NULL, NULL, NULL, 0),
(27, 'keyboard mouse', 'zebronics', 'zebronics 2100 Keyboard', 400, NULL, 'ddd', NULL, '', NULL, NULL, NULL, NULL, 0),
(28, 'speakers', 'iball', '', 0, NULL, '', NULL, '', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_name`, `password`) VALUES
(1, 'hasan', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `address` text,
  `area` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`, `mobile`, `address`, `area`, `city`, `pincode`) VALUES
(1, 'Aquiv Hasan', 'hasanaquiv@gmail.com', '123', '1', 123456, 'I-2171/28', 'Sangam Vihar', 'New Delhi', 110080);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brands_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brands_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
