-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2019 at 08:55 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_crud_level`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created`, `modified`) VALUES
(1, 'Fashion', 0, '2019-02-13 11:30:33', '2019-02-13 06:00:33'),
(2, 'Electronics', 1, '2019-02-13 11:30:33', '2019-02-13 06:00:33'),
(3, 'Motors', 0, '2019-02-13 11:30:33', '2019-02-13 06:00:33'),
(4, 'Motors1', 2, '2019-02-13 11:30:33', '2019-02-13 06:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image`, `created`, `modified`) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, '', '2019-02-01 01:12:26', '2019-05-31 11:42:26'),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, '', '2019-02-01 01:12:26', '2019-05-31 11:42:26'),
(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, '', '2019-02-01 01:12:26', '2019-05-31 11:42:26'),
(6, 'Bench Shirt', 'The best shirt!', 29, 1, '', '2019-02-01 01:12:26', '2019-05-30 20:42:21'),
(7, 'Lenovo Laptop', 'My business partner.', 399, 2, '', '2019-02-01 01:13:45', '2019-05-30 20:43:39'),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, '', '2019-02-01 01:14:13', '2019-05-30 20:44:08'),
(9, 'Spalding Watch', 'My sports watch.', 199, 1, '', '2019-02-01 01:18:36', '2019-05-30 20:48:31'),
(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, '', '2019-02-06 17:10:01', '2019-02-05 12:39:51'),
(11, 'Huawei Y300', 'For testing purposes.', 100, 2, '', '2019-02-06 17:11:04', '2019-02-05 12:40:54'),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, '', '2019-02-06 17:12:21', '2019-02-05 12:42:11'),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, '', '2019-02-06 17:12:59', '2019-02-05 12:42:49'),
(25, 'Abercrombie Allen Anew ', 'Awesome new shirt!', 999, 1, '', '2019-02-22 18:42:13', '2019-02-21 14:12:13'),
(26, 'Another product', 'Awesome product!', 555, 2, '', '2019-02-22 19:07:34', '2019-02-21 14:37:34'),
(27, 'Bag', 'Awesome bag for you!', 999, 1, '', '2019-02-04 21:11:36', '2019-02-03 16:41:36'),
(28, 'Wallet', 'You can absolutely use this one!', 799, 1, '', '2019-02-04 21:12:03', '2019-02-03 16:42:03'),
(30, 'Wal-mart Shirt', '', 555, 2, '', '2019-02-13 00:52:29', '2019-02-11 20:22:29'),
(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, '', '2019-02-13 00:52:54', '2019-02-11 20:22:54'),
(33, 'Janak kanani', 'tessdfsdaf', 500, 2, '', '2019-02-13 22:18:11', '2019-02-13 16:48:11'),
(34, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, '', '2019-02-13 23:06:38', '2019-02-13 17:36:38'),
(35, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, '', '2019-02-13 23:06:42', '2019-02-13 17:36:42'),
(40, 'Janak kanani', 'df', 500, 1, '', '2019-02-13 23:07:04', '2019-02-13 17:37:04'),
(41, 'Janak kanani', 'dsfsdf', 500, 1, '', '2019-02-13 23:07:07', '2019-02-13 17:37:07'),
(42, 'Janak kanani', 'dsfsdf', 500, 1, '', '2019-02-13 23:08:03', '2019-02-13 17:38:03'),
(43, 'Janak kanani', 'dsfsdf', 500, 1, '', '2019-02-13 23:08:05', '2019-02-13 17:38:05'),
(44, 'Abercrombie Allen Anew Shirt111', 'Awesome new shirt!', 999, 1, '', '2019-02-13 23:08:34', '2019-02-13 17:38:34'),
(45, 'Abercrombiesdfshirt11111111', 'Awesome new shirt!', 999, 1, '', '2019-02-13 23:09:00', '2019-02-13 17:39:00'),
(46, 'Abercrombiesdfshirt11111111', 'Awesome new shirt!', 999, 1, '', '2019-02-13 23:09:00', '2019-02-13 17:39:00'),
(47, 'Janak kanani1234', '', 500, 1, '', '2019-02-13 23:09:23', '2019-02-13 17:39:23'),
(48, 'Janak kanani1233', '', 500, 1, '', '2019-02-13 23:09:52', '2019-02-13 17:39:52'),
(49, 'Janak kanani1233', '', 500, 1, '', '2019-02-13 23:09:54', '2019-02-13 17:39:54'),
(50, 'Janak kanani', 'sdf', 500, 2, 'e0ca75a3087fb6141749a4ae386ae313f1042164-compressed-khcl.jpg', '2019-02-14 00:15:16', '2019-02-13 18:45:16'),
(51, 'Janak kanani', 'vcbc', 500, 1, '8255ac06b8712bce62a835cb4922eaf01672fc2d-general-surgery.png', '2019-02-14 00:20:56', '2019-02-13 18:50:56'),
(52, 'Janak kanani', 'vcbc', 500, 1, '8255ac06b8712bce62a835cb4922eaf01672fc2d-general-surgery.png', '2019-02-14 00:21:16', '2019-02-13 18:51:16'),
(53, 'Janak kanani', 'cbc', 500, 1, '8255ac06b8712bce62a835cb4922eaf01672fc2d-general-surgery.png', '2019-02-14 00:21:42', '2019-02-13 18:51:42'),
(54, 'Janak kanani', 'cbc', 500, 1, '8255ac06b8712bce62a835cb4922eaf01672fc2d-general-surgery.png', '2019-02-14 00:31:47', '2019-02-13 19:01:47'),
(55, 'Janak kanani', '', 500, 3, '', '2019-02-14 07:08:26', '2019-02-14 01:38:26'),
(56, 'Janak kanani', '', 500, 3, '', '2019-02-14 07:15:25', '2019-02-14 01:45:25'),
(57, 'janak123', 'test', 6789, 2, '712b6fe96fdb8eb867cde1576bd0d3452e279ffe-health_check-hover.png', '2019-02-14 07:38:25', '2019-02-14 02:08:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
