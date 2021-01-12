-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2021 at 03:22 AM
-- Server version: 5.7.24
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(2) NOT NULL,
  `ITEM_NO` int(3) NOT NULL,
  `PROD_DESC` varchar(50) NOT NULL,
  `PRICE` decimal(10,0) NOT NULL,
  `QUANTITY` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `ITEM_NO`, `PROD_DESC`, `PRICE`, `QUANTITY`) VALUES
(1, 2, 'Red Pencils', '1', 100),
(2, 23, 'Blue Pens', '2', 520),
(3, 481, 'Green Pencils', '1', 152),
(4, 471, 'Pink Erasers', '3', 145),
(5, 474, 'Scented Markers', '10', 170),
(6, 4, 'Colored Pencils', '5', 147),
(7, 1, 'Paper', '15', 800),
(8, 172, 'Notebooks', '2', 203),
(9, 7, 'Index Cards', '1', 745),
(10, 9, 'Post its', '4', 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
