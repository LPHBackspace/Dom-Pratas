-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
                           `item_id` int(11) NOT NULL,
                           `item_category` varchar(200) NOT NULL,
                           `item_name` varchar(255) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_category`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
                                                                                                              (1, 'Masculino', 'Corrente e pulseira masculina 3x1', 110.00, 'assents/products/produto1.jpeg', '2020-03-28 11:08:57'), -- NOW()
                                                                                                              (2, 'Feminino', 'Semaninhas (7 pares de brincos femininos)', 60.00, 'assents/products/produto2.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (3, 'Feminino', 'Corrente feminina laminada (40cm)', 50.00, 'assents/products/produto3.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (4, 'Masculino', 'Pulseira masculina (3x1)', 40.00, 'assents/products/produto4.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (5, 'Feminino', 'Gargantilha chocker corações', 30.00, 'assents/products/produto5.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (6, 'Feminino', 'Pulseira feminina pingente tartarugas', 25.00, 'assents/products/produto6.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (7, 'Feminino', 'Pulseira feminina pingente corações', 25.00, 'assents/products/produto7.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (8, 'Feminino', 'Pulseira feminina pingente argolas', 25.00, 'assents/products/produto8.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (9, 'Feminino', 'Pulseira feminina pingente coração', 25.00, 'assents/products/produto9.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (10,'Feminino', 'Pulseira feminina pingente áqueo', 25.00, 'assents/products/produto10.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (11, 'Feminino', 'Pulseira feminina pingente olho grego', 25.00, 'assents/products/produto11.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (12, 'Feminino', 'Pulseira feminina pingente Barbie', 25.00, 'assents/products/produto12.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (13, 'Feminino', 'Pulseira feminina pingente yin-yang', 25.00, 'assents/products/produto13.jpeg', '2020-03-28 11:08:57'),
                                                                                                              (14, 'Masculino', 'Corrente masculina 3x1 (60cm)', 80.00, 'assents/products/produto14.jpeg', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `user_id` int(11) NOT NULL,
                        `first_name` varchar(100) NOT NULL,
                        `last_name` varchar(100) NOT NULL,
                        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
                                                                               (1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
                                                                               (2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
                            `cart_id` int(11) NOT NULL,
                            `user_id` int(11) NOT NULL,
                            `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;