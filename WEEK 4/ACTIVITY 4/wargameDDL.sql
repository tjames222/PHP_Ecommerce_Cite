-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2021 at 09:31 PM
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
-- Database: `wargame`
--
CREATE DATABASE IF NOT EXISTS `wargame` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wargame`;

-- --------------------------------------------------------

--
-- Table structure for table `owned_weapons`
--

DROP TABLE IF EXISTS `owned_weapons`;
CREATE TABLE `owned_weapons` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `DESCRIPTION` varchar(45) NOT NULL,
  `POWER` int(11) NOT NULL,
  `IMAGE` varchar(45) NOT NULL,
  `PRICE` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `weapons_cart`
--

DROP TABLE IF EXISTS `weapons_cart`;
CREATE TABLE `weapons_cart` (
  `ID` int(11) NOT NULL,
  `WEAPON_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `weapons_store`
--

DROP TABLE IF EXISTS `weapons_store`;
CREATE TABLE `weapons_store` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `DESCRIPTION` mediumtext NOT NULL,
  `POWER` int(11) NOT NULL,
  `IMAGE` varchar(45) NOT NULL,
  `PRICE` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owned_weapons`
--
ALTER TABLE `owned_weapons`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `weapons_cart`
--
ALTER TABLE `weapons_cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `WEAPONSSTORETOCART` (`WEAPON_ID`);

--
-- Indexes for table `weapons_store`
--
ALTER TABLE `weapons_store`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owned_weapons`
--
ALTER TABLE `owned_weapons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weapons_cart`
--
ALTER TABLE `weapons_cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weapons_store`
--
ALTER TABLE `weapons_store`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `weapons_cart`
--
ALTER TABLE `weapons_cart`
  ADD CONSTRAINT `WEAPONSRELATION` FOREIGN KEY (`WEAPON_ID`) REFERENCES `weapons_store` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
