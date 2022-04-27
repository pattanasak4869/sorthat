-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2022 at 08:36 AM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devpool`
--

-- --------------------------------------------------------

--
-- Table structure for table `pmember`
--

CREATE TABLE `pmember` (
  `id` int(9) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pmember`
--

INSERT INTO `pmember` (`id`, `pname`, `house`) VALUES
(2, 'พัฒนศักดิ์  เกิดอู่ม', 'บ้านฮัฟเฟิลพัฟ'),
(3, 'พัฒนศักดิ์  เกิดอู่ม', 'บ้านกริฟฟินดอร์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pmember`
--
ALTER TABLE `pmember`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pmember`
--
ALTER TABLE `pmember`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
