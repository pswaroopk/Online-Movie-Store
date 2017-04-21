-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2017 at 02:54 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Username` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Username`, `Name`) VALUES
('akshay', 'Avatar'),
('swaroop', 'Avatar'),
('swaroop', 'Black Swan'),
('swaroop', 'Coraline'),
('swaroop', 'Eclipse');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `Id` int(2) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Img_url` varchar(50) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Cost` int(10) NOT NULL DEFAULT '0',
  `Description` varchar(2000) NOT NULL DEFAULT 'movie_desc'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Id`, `Name`, `Category`, `Img_url`, `Year`, `Cost`, `Description`) VALUES
(1, 'Avatar', 'english', 'avatar_movie.jpg', '2015', 100, 'movie_desc'),
(2, 'Black Swan', 'english', 'black-swan.jpg', '2015', 312, 'movie_desc'),
(3, 'Coraline', 'english', 'Coraline.jpg', '2015', 200, 'movie_desc'),
(4, 'Eclipse', 'english', 'Eclipse.jpg', '2018', 100, 'movie_desc'),
(5, 'New Moon', 'english', 'New-Moon.jpg', '2015', 213, 'movie_desc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Username`, `Password`, `Email`) VALUES
('', 'akshay', '3517525329b170f7ce87e0e16b6d0778', 'aksh@gmail.com'),
('', 'akshay1', '3517525329b170f7ce87e0e16b6d0778', 'asd@gmail.com'),
('', 'awdsdd', '39826cc6ee17ad9fa8566084a400871e', 'awda@gmail.com'),
('swaroop k', 'swaroop', 'password', 'getswaroopnow@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Username`,`Name`),
  ADD KEY `fk_movie` (`Name`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_movie` FOREIGN KEY (`Name`) REFERENCES `movies` (`Name`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
