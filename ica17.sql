-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 03, 2021 at 01:23 AM
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
-- Database: `ica17`
--

-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE `checking` (
  `ID` int(11) NOT NULL,
  `BALANCE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checking`
--

INSERT INTO `checking` (`ID`, `BALANCE`) VALUES
(1, 900);

-- --------------------------------------------------------

--
-- Table structure for table `saving`
--

CREATE TABLE `saving` (
  `ID` int(11) NOT NULL,
  `BALANCE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saving`
--

INSERT INTO `saving` (`ID`, `BALANCE`) VALUES
(1, 2100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FIRST_NAME`, `LAST_NAME`) VALUES
(1, 'ABBY', 'COPPER'),
(2, 'ALLIE', 'DEXTER'),
(3, 'ANGEL', 'DIESEL'),
(4, 'ANNIE', 'DUKE'),
(5, 'ATHENA', 'OTIS'),
(6, 'BABS', 'PEANUT'),
(7, 'BAILEY', 'PRINCE'),
(8, 'BELLA', 'REX'),
(9, 'BELLE', 'RILEY'),
(10, 'BONNIE', 'ROCCO'),
(11, 'BRANDY', 'ROCKY'),
(12, 'CALI', 'ROMEO'),
(13, 'CALLIE', 'ROSCO'),
(14, 'CASEY', 'RUDY'),
(15, 'CHARLIE', 'RUFUS'),
(16, 'CHLOE', 'RUSTY'),
(17, 'CLEO', 'SAM'),
(18, 'COCO', 'SAMMY'),
(19, 'COCOA', 'SAMSON'),
(20, 'COOKIE', 'SCOOTER'),
(21, 'DAISY', 'SCOUT'),
(22, 'DAKOTA', 'SHADOW'),
(23, 'DIXIE', 'SIMBA'),
(24, 'ELLA', 'SPARKY'),
(25, 'ELLIE', 'SPIKE'),
(26, 'EMMA', 'TANK'),
(27, 'GIGI', 'TEDDY'),
(28, 'GINGER', 'THOR'),
(29, 'GRACE', 'TOBY'),
(30, 'GRACIE', 'TUCKER'),
(31, 'HANNAH', 'TYSON'),
(32, 'HARLEY', 'VADER'),
(33, 'HAZEL', 'WINSTON'),
(34, 'HEIDI', 'YODA'),
(35, 'HOLLY', 'ZEUS'),
(36, 'HONEY', 'ZIGGY'),
(37, 'IZZY', 'ELVIS'),
(38, 'JASMINE', 'FINN'),
(39, 'JOSIE', 'FRANKIE'),
(40, 'KATIE', 'GEORGE'),
(41, 'KONA', 'GIZMO'),
(42, 'LACEY', 'GUNNER'),
(43, 'LADY', 'GUS'),
(44, 'LAYLA', 'HANK'),
(45, 'LEXI', 'HARLEY'),
(46, 'LILLY', 'HUNTER'),
(47, 'LILY', 'JACK'),
(48, 'LOLA', 'JACKSON'),
(49, 'LUCKY', 'JAKE'),
(50, 'LUCY', 'JASPER'),
(51, 'LULU', 'JAX'),
(52, 'LUNA', 'JOEY'),
(53, 'MACY', 'KOBE'),
(54, 'MADDIE', 'LEO'),
(55, 'MADISON', 'LOKI'),
(56, 'MAGGIE', 'LOUIE'),
(57, 'MARLEY', 'LUCKY'),
(58, 'MAYA', 'LUKE'),
(59, 'MIA', 'MAC'),
(60, 'MILLIE', 'MARLEY'),
(61, 'MIMI', 'MAX'),
(62, 'MINNIE', 'MICKEY'),
(63, 'MISSY', 'MILO'),
(64, 'MISTY', 'MOOSE'),
(65, 'MOCHA', 'MURPHY'),
(66, 'MOLLY', 'OLIVER'),
(67, 'NALA', 'OLLIE'),
(68, 'NIKKI', 'OREO'),
(69, 'OLIVE', 'OSCAR'),
(70, 'PEANUT', 'ACE'),
(71, 'PEBBLES', 'APOLLO'),
(72, 'PENNY', 'BAILEY'),
(73, 'PEPPER', 'BANDIT'),
(74, 'PHOEBE', 'BAXTER'),
(75, 'PIPER', 'BEAR'),
(76, 'PRINCIE', 'BEAU'),
(77, 'RILEY', 'BENJI'),
(78, 'ROSIE', 'BENNY'),
(79, 'ROXIE', 'BENTLEY'),
(80, 'ROXY', 'BLUE'),
(81, 'RUBY', 'BO'),
(82, 'SADIE', 'BOOMER'),
(83, 'SALLY', 'BRADY'),
(84, 'SANDY', 'BRODY'),
(85, 'SASHA', 'BRUNO'),
(86, 'SASSY', 'BRUTUS'),
(87, 'SCOUT', 'BUBBA'),
(88, 'SHADOW', 'BUDDY'),
(89, 'SHELBY', 'BUSTER'),
(90, 'SIERRA', 'CASH'),
(91, 'SOPHIE', 'CHAMP'),
(92, 'STELLA', 'CHANCE'),
(93, 'SUGAR', 'CHARLIE'),
(94, 'SYDNEY', 'CHASE'),
(95, 'TRIXIE', 'CHESTER'),
(96, 'WILLOW', 'CHICO'),
(97, 'WINNIE', 'COCO'),
(98, 'ZOE', 'CODY'),
(99, 'ZOEY', 'COOPER'),
(100, 'LEXIE', 'HENRY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checking`
--
ALTER TABLE `checking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `saving`
--
ALTER TABLE `saving`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checking`
--
ALTER TABLE `checking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saving`
--
ALTER TABLE `saving`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
