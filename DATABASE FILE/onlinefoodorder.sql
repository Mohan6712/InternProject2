-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 07:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefoodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(14, 'Mohan Shrestha', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(17, 'Pizza', 'Food_Category_82.jpg', 'Yes', 'Yes'),
(18, 'Momo', 'Food_Category_724.jpg', 'No', 'No'),
(19, 'Wrap', 'Food_Category_359.jpg', 'Yes', 'Yes'),
(20, 'Pasta', 'Food_Category_884.jpg', 'Yes', 'Yes'),
(21, 'Burger', 'Food_Category_701.jpg', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedbacks`
--

CREATE TABLE `tbl_feedbacks` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedbacks`
--

INSERT INTO `tbl_feedbacks` (`id`, `email`, `message`) VALUES
(1, 'mohanshrestha6712@gmail.com', 'The food seems to be oily this time. Hope next time this wont happen. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(4, 'Ham Burger', 'Burger with Ham, Pineapple and lots of Cheese.', '250.00', 'Food-Name-6340.jpg', 5, 'Yes', 'Yes'),
(5, 'Smoky BBQ Pizza', 'Best Firewood Pizza in Town.', '350.00', 'Food-Name-8298.jpg', 4, 'No', 'Yes'),
(9, 'Chicken Wrap', 'Crispy flour tortilla loaded with juicy chicken, bacon, lettuce, avocado and cheese drizzled with a delicious spicy Ranch dressing.', '200.00', 'Food-Name-3461.jpg', 9, 'Yes', 'Yes'),
(10, 'Cheeseburger', 'A cheeseburger is a hamburger topped with cheese. Traditionally, the slice of cheese is placed on top of the meat patty.', '240.00', 'Food-Name-433.jpeg', 5, 'Yes', 'Yes'),
(11, 'Grilled Cheese Sandwich', 'Assembled by creating a cheese filling, often cheddar or American between two slices of bread and is then heated until the bread browns and cheese melts.', '180.00', 'Food-Name-6819.jpg', 11, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(6, 'Chicken Wrap', '200.00', 1, '200.00', '2021-07-20 06:10:37', 'Cancelled', 'Susant Khadka', '9810045345', 'susant68@gmail.com', 'Putalisadak Chowk'),
(7, 'Cheeseburger', '240.00', 2, '480.00', '2021-07-20 06:40:21', 'On Delivery', 'Sumit Rai', '9810394186', 'sumit67@gmail.com', 'Boudhha'),
(8, 'Smoky BBQ Pizza', '350.00', 1, '350.00', '2021-07-20 06:40:57', 'Ordered', 'Sita Shrestha', '9810589775', 'Sita89@gmail.com', 'Newroad,Kathmandu'),
(9, 'Chicken Wrap', '200.00', 4, '800.00', '2021-07-20 07:06:06', 'Cancelled', 'Sabin Bhandari', '9856498875', 'sabin56@gmail.com', 'Boudhha Pipalbot'),
(10, 'Grilled Cheese Sandwich', '180.00', 4, '720.00', '2021-07-20 07:11:06', 'Delivered', 'Som Thing', '9810328785', 'Som54@gmail.com', 'Mitrapark,Kathmandu'),
(11, 'Ham Burger', '250.00', 5, '1250.00', '2022-05-20 06:12:03', 'Ordered', 'Sujan Tamang', '9845856998', 'sujan23@gmail.com', 'Putalisadak,Kathmandu'),
(12, 'Ham Burger', '250.00', 3, '750.00', '2022-06-08 07:50:24', 'On Delivery', 'Kabita Tamang', '9864725158', 'kabita45@gmail.com', 'Boudha,Kathmandu'),
(13, 'Ham Burger', '250.00', 5, '1250.00', '2022-06-12 05:23:46', 'Delivered', 'Mohan Shrestha', '9810394185', 'mohan467@gmail.com', 'Besigaun,Jorpati'),
(14, 'Ham Burger', '250.00', 1, '250.00', '2022-08-21 06:55:29', 'Delivered', 'Aayush Suryabansi', '9810394145', 'aayush456@gmail.com', 'Gokarna,Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Mohan67', 'mohan6@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'Aayush75', 'aayush456@gmail.com', '6be36e8c3903896517ec85c69adf018d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedbacks`
--
ALTER TABLE `tbl_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_feedbacks`
--
ALTER TABLE `tbl_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
