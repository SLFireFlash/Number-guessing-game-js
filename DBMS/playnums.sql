-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 01:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playnums`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `Name` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` text NOT NULL,
  `PWord` text NOT NULL,
  `ProfileImage` text NOT NULL,
  `CoinAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Name`, `UserName`, `Email`, `PWord`, `ProfileImage`, `CoinAmount`) VALUES
(10, 'a', 'a', 'tempflash69@gmail.com', 'a', '', 0),
(11, 'ab', 'ab', 'tempflash69@gmail.com', '123', '', 0),
(14, 'abc', 'abc', 'tempflash69@gmail.com', '123', '', 500),
(15, 'abcd', 'abcd', 'tempflash69@gmail.com', '1234', '', 0),
(16, 'hiru', 'hiru', 'tempflash69@gmail.com', '123', '', 1800),
(17, 'test', 'test', 'tempflash69@gmail.com', '12345678', '', 500),
(18, 'abcz', 'abcz', 'tempflash69@gmail.com', '12345678', '', 500),
(19, 'z', 'z', '', 'z', '', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
