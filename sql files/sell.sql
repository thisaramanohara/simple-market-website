-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 08:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(15) NOT NULL,
  `firstName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `catagory` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `negotiable` tinyint(1) NOT NULL,
  `discription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image3` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image4` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image5` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `adUnique` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `firstName`, `lastName`, `mobNumber`, `email`, `title`, `catagory`, `location`, `price`, `negotiable`, `discription`, `date`, `image1`, `image2`, `image3`, `image4`, `image5`, `adUnique`) VALUES
(1, 'thisara', 'manohara', '00000', 'abc@gmail.com', 'Playstion 3', 'cat1.2', 'loc1.3', '30000', 1, 'Jailbroken', '2020-08-08', '1200px-Sony-PlayStation-3-2001A-wController-L.jpg', '', '', '', '', 'E0'),
(9, 'thisara', 'manohara', '00000', 'abc@gmail.com', 'ps4', 'cat1.4', 'loc1.2', '1200', 0, 'eresfdsf', '2020-08-12', 'ps4-500gb-pal-console.jpg', '', '', '', '', 'E8'),
(10, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'iphne 11 pro max', 'cat1.3', 'loc1.3', '1232', 1, 'sdsda', '2020-08-13', 'olixar-bumper-nova.jpg', '', '', '', '', 'E9'),
(16, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'sony newest', 'cat1.2', 'loc1.2', '1231', 0, 'sadasd', '2020-08-13', 'bestsony.jpg', '', '', '', '', 'E15'),
(26, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'BMW i8', 'cat1.1', 'loc1.2', '232', 1, 'dasda', '2020-08-13', '2015-bmw-i8_100439316_l.jpg', '', '', '', '', 'E25'),
(27, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'neww', 'cat1.2', 'loc1.1', '323', 1, 'sfsfsfsf', '2020-08-17', 'th(1).jpg', '', '', '', '', 'E26'),
(28, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'jjj', 'cat1.1', 'loc1.3', '232', 1, 'asdasd', '2020-08-17', 'th.jpg', '', '', '', '', 'E27'),
(29, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'BMW i8', 'cat1.2', 'loc1.2', '24234', 1, 'ersd', '2020-09-04', '1andes.jpg', '1bixbybridge1920x1200.jpg', '1cnybanners.jpg', '1jp-betawp5.jpg', '1smallworld.jpg', 'E28'),
(30, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'benz', 'cat1.1', 'loc1.2', '3234', 1, 'dsf', '2020-09-05', '', '', '', '', '', 'E29'),
(31, 'sandun', 'sudara', '003', 'xyz@gmail.com', 'benz', 'cat1.1', 'loc1.3', '324', 1, 'dsf', '2020-09-05', '', '', '', '', '', 'E30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobNum` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `mobNum`, `email`, `password`) VALUES
(1, 'thisara', 'manohara', '00000', 'abc@gmail.com', ''),
(11, 'sandun', 'sudara', '003', 'xyz@gmail.com', '213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adUnique` (`adUnique`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
