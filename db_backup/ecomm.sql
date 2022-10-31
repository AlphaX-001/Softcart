-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 08:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
('1', 'Apparel & Accessorie'),
('10', 'Other Consumer Electronics'),
('11', 'Mobile & Tablets'),
('12', 'Books'),
('13', 'Home improvements'),
('14', 'Other Categories'),
('2', 'Style & Fashion'),
('3', 'Home & Garden'),
('4', 'Sporting Goods'),
('5', 'Health & Wellness'),
('6', 'Medical Health'),
('7', 'Children & Infants'),
('8', 'Pets & Pet Supplies'),
('9', 'Health & Wellness');

-- --------------------------------------------------------

--
-- Table structure for table `productgallery`
--

CREATE TABLE `productgallery` (
  `pid` varchar(70) NOT NULL,
  `picture` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` varchar(70) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `stock` varchar(10) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`, `description`, `stock`, `picture`, `category`) VALUES
('PRODUCT241022-010015-6356703f8d0d1', 'Rolex Watch 3', '50000', 'Once u use it, There is no Coming Back', '156', 'Product-8743.png', 'Apparel & Accessorie'),
('PRODUCT241022-012320-635675a8b3900', 'Samsung Headphone', '52141', '', '412', 'Product-3996.png', 'Mobile & Tablets');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  `uid` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `pass`, `role`, `uid`) VALUES
('Anith Bairagi', 'ani@gmail.com', '123456', 'admin', '01'),
('Ani', 'ani@email.com', '123456', 'guest', 'CUST231022-090246-63558fd6a79ca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productgallery`
--
ALTER TABLE `productgallery`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
