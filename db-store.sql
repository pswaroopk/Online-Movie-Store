-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2017 at 08:14 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `movie_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Username` varchar(20) NOT NULL,
  `Moviename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Id` int(2) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Img_url` varchar(50) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Cost` int(10) NOT NULL DEFAULT '0',
  `Description` varchar(2000) NOT NULL DEFAULT 'movie_desc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Id`, `Name`, `Category`, `Img_url`, `Year`, `Cost`, `Description`) VALUES
(1, 'Avatar', 'english', 'avatar_movie.jpg', '2015', 100, 'movie_desc'),
(2, 'Black Swan', 'english', 'black-swan.jpg', '2015', 312, 'movie_desc'),
(3, 'Coraline', 'english', 'Coraline.jpg', '2015', 200, 'movie_desc'),
(4, 'Eclipse', 'english', 'Eclipse.jpg', '2018', 100, 'movie_desc'),
(5, 'New Moon', 'english', 'New-Moon.jpg', '2015', 213, 'movie_desc'),
(6, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(7, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(8, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(9, 'Black Swan', 'telugu', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(10, 'Black Swan', 'hindi', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(11, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(12, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(13, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(14, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(15, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(16, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(17, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(18, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(19, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(20, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(21, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(22, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(23, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(24, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(25, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(26, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(27, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(28, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(29, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(30, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(31, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(32, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(33, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(34, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(35, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(36, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(37, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(38, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(39, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(40, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(41, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(42, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc'),
(43, 'Black Swan', 'english', 'black-swan.jpg', '2005', 300, 'movie_desc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Username`, `Password`, `Email`) VALUES
('', 'akshay', '3517525329b170f7ce87e0e16b6d0778', 'aksh@gmail.com'),
('', 'akshay1', '3517525329b170f7ce87e0e16b6d0778', 'asd@gmail.com'),
('', 'awdsdd', '39826cc6ee17ad9fa8566084a400871e', 'awda@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
