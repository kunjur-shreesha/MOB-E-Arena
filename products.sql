-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 10, 2022 at 08:27 PM
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
-- Database: `webdamn_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `category_name`, `product_name`, `image`, `price`, `brand`, `material`, `size`, `qty`, `created_date`, `updated_date`) VALUES
(1, 1, 'iOS', 'Apple iPhone 13 Pro Max', 'iphone13promax.jpg', 129900, 'Apple', '12MP', 6, '0', '2019-10-03 00:00:00', '2021-12-24 09:25:54'),
(2, 1, 'iOS', 'Apple iPhone 13', 'iphone13.jpg', 79900, 'Apple', '16MP', 4, '1', '2019-10-03 00:00:00', '2021-12-24 03:22:24'),
(3, 1, 'iOS', 'Apple iPhone 12 Pro Max', 'apple12promax.jpg', 109999, 'Apple', '12MP', 6, '1', '2019-10-03 00:00:00', '2021-12-24 03:22:38'),
(4, 1, 'iOS', 'Apple iPad Pro 12.9 2021', 'apple-ipad-pro-12.9-2021.jpg', 99900, 'Apple', '16MP', 4, '1', '2016-10-03 00:00:00', '2021-12-24 03:23:00'),
(5, 1, 'iOS', 'Apple iPhone XR', 'iphonexr.jpg', 33999, 'Apple', '8MP', 2, '1', '2019-10-03 00:00:00', '2021-12-24 03:23:52'),
(6, 1, 'iOS', 'Apple iPad Pro 11 2021', 'ipad11pro.jpg', 79999, 'Apple', '8MP', 4, '1', '2019-10-03 00:00:00', '2021-12-24 03:24:10'),
(7, 2, 'Android', 'Samsung Galaxy S21 Ultra', 's21_ultra.jpg', 105900, 'Samsung', '108MP', 8, '1', '2019-10-03 00:00:00', '2021-12-24 03:24:26'),
(8, 2, 'Android', 'Samsung Galaxy Z Fold 3', 'zfold.jpg', 149999, 'Samsung', '64MP', 4, '1', '2019-10-03 00:00:00', '2021-12-24 03:24:47'),
(9, 2, 'Android', 'OnePlus 9 Pro', 'oneplus9pro.jpg', 59999, 'OnePlus', '64MP', 12, '1', '2016-10-03 00:00:00', '2021-12-24 03:25:16'),
(10, 2, 'Android', 'OnePlus 7 Pro', 'oneplus7pro.jpg', 41990, 'OnePlus', '48MP', 4, '1', '2019-10-03 00:00:00', '2021-12-24 03:25:30'),
(11, 2, 'Android', 'Xiaomi Mi 11X', 'mi11x.jpg', 25299, 'Xiaomi', '108MP', 2, '1', '2019-10-09 00:00:00', '2021-12-24 03:25:42'),
(12, 2, 'Android', 'Xiaomi Redmi Note 11T 5G', '11t_5g.jpg', 15999, 'Xiaomi', '32MP', 8, '1', '2019-10-09 00:23:56', '2021-12-24 03:25:57'),
(13, 2, 'Android', 'Realme GT Master Edition 5G', 'gt_master.jpg', 25180, 'Realme', '32MP', 12, '1', '2019-10-09 00:00:00', '2021-12-24 03:26:22'),
(14, 2, 'Android', 'OPPO Reno6 5G', 'reno_6.jpg', 29990, 'Oppo', '64MP', 4, '1', '2019-10-09 00:00:00', '2021-12-24 03:26:47'),
(15, 2, 'Android', 'OPPO Reno 10x Zoom Edition 256GB', 'reno_10x.jpg', 38400, 'Oppo', '108MP', 12, '1', '2019-10-11 00:00:00', '2021-12-24 03:27:10'),
(16, 2, 'Android', 'Vivo V21 5G', 'v21_5g.jpg', 26940, 'Vivo', '64MP', 4, '1', '2019-10-12 00:00:00', '2021-12-24 03:27:25'),
(17, 2, 'Android', 'POCO X2', 'pocox2.jpg', 18156, 'Poco', '64MP', 6, '1', '2019-10-12 00:00:00', '2021-12-24 03:27:38'),
(18, 2, 'Android', 'POCO F3 GT', 'f3_gt.jpg', 28999, 'Poco', '108MP', 12, '1', '2021-12-23 04:29:28', '2021-12-24 03:27:52'),
(19, 2, 'Android', 'Motorola Edge 20', 'edge-20.jpg', 29999, 'Motorola', '12MP', 3, '1', '2021-12-23 04:29:28', '2021-12-24 03:28:12'),
(20, 2, 'Android', 'Moto Edge S30 5G', 'edge-30-5g.jpg', 23790, 'Motorola', '24MP', 2, '1', '2021-12-23 04:29:28', '2021-12-24 03:28:27'),
(21, 3, 'KaiOS', 'Reliance JioPhone Next', 'jio.jpg', 6790, 'Reliance', '2MP', 1, '1', '2021-12-23 21:17:46', '2021-12-28 05:26:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
