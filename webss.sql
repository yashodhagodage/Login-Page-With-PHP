-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 07:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webss`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `uid` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`uid`, `image`) VALUES
(1, 'images/f26379077ef6439d7601a452afa5994d64a55db3d3c27edbeebad4f068a0c0f7.png'),
(2, 'images/7b3077f42ed94a849a35ece563e4218d7587443281002445211.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nic` varchar(13) NOT NULL,
  `line1` varchar(100) NOT NULL,
  `line2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `phone`, `email`, `nic`, `line1`, `line2`, `city`, `country`, `postal`, `password`, `type`, `status`) VALUES
(1, 'Salitha', 'Kaweendra', '0711883899', 'salithak1@gmail.com', '951160539V', '03', 'Moonamalegama', 'Maho', 'SriLanka', '60600', '7f31c778d8785a05d2de7f3e22c9468a', 'customer', 'active'),
(2, 'Yashodha', 'Hansimali', '0701234567', 'yashodhagodage@gmail.com', '951837656V', 'Balasooriya', 'Doratiyawa', 'Kurunegala', 'SriLanka', '60000', '827ccb0eea8a706c4c34a16891f84e7b', 'customer', 'active'),
(8, 'Admin', 'Admin', '0118762679', 'admin@admin.com', '951123456V', '1st lane', 'malkaduwaawa', 'Kurunegala', 'Sri Lanka', '60000', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'active'),
(9, 'Test1', 'test', '12345679', 'test12@test.com', '111111111', 'test', 'test', 'test', 'test', '11223', '827ccb0eea8a706c4c34a16891f84e7b', 'customer', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
