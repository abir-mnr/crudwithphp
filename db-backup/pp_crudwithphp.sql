-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 07:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pp_crudwithphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `comment`) VALUES
(1, 'Product1', 'description Product1', 12, 'comment Product1'),
(2, 'Product2', 'description Product2', 128, 'comment Product2'),
(3, 'Product3', 'description Product3', 121, 'comment Product3'),
(4, 'Product4', 'description Product4', 654, 'comment Product4'),
(5, 'Product5', 'description Product5', 987, 'comment Product5'),
(6, 'aefawef', 'fawefew', 5000, 'fawefae'),
(7, 'Charity Hensley', 'Qui accusamus aut es', 434, 'Vero facilis ullamco'),
(8, 'Alma Levy', 'Vel assumenda amet ', 787, 'Sit ut illo irure p'),
(9, 'Ingrid Jenkins', 'Omnis at autem venia', 680, 'Delectus nemo est '),
(10, 'Amanda Herring', 'Voluptatem corporis', 396, 'Iste sequi omnis ven'),
(11, 'Ronan Brady', 'Sunt ipsa est est ', 359, 'Est deleniti anim qu'),
(12, 'Melanie Bowers ', 'Consectetur enim et  ', 859, 'Voluptate nihil unde ');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
