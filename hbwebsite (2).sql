-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 08:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(2, '', ''),
(24, 'sonikum977@gmail.com', '86i7turd'),
(25, 'amitk09517@gmail.com', '64534'),
(26, 'amitk09517@gmail.com', '323454657'),
(27, 'amitk09517@gmail.com', '111'),
(28, 'amitk09517@gmail.com', '111'),
(29, 'amitk09517@gmail.com', '111'),
(30, 'amittech635@gmail.com', 'aaa'),
(31, 'amitk09517@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `massage`) VALUES
(1, 'shiva kumar', 'amitk09517@gmail.com', 'hiiiiiiaaaa', ''),
(2, 'shiva kumar', 'amitk09517@gmail.com', 'hiiiiiiaaaa', 'aaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `s`
--

CREATE TABLE `s` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s`
--

INSERT INTO `s` (`id`, `name`, `email`, `phone`, `picture`, `address`, `password`, `repassword`) VALUES
(1, 'amit kumar', 'amitk09517@gmail.com', '9161128047', '', 'madhwapur', '1234', '1234'),
(2, 'amit kumar', 'amitk09517@gmail.com', '9161128047', '', 'mdddd', 'abc', 'abc'),
(3, 'amit kumar', 'amitk09517@gmail.com', '9161128047', '', 'mdddd', 'abc', 'abc'),
(4, 'amit kumar', 'amitk09517@gmail.com', '9161128047', '', 'mdddd', 'abc', 'abc'),
(5, 'shiva kumar', 'amitk09517@gmail.com', '987654', '', 'uiytred', 'uytrds', 'iuytred'),
(7, 'shiva kumar', 'amitk09517@gmail.com', '9876543', '', 'iyutre', 'uiytr', 'itre'),
(8, 'shiva kumar', 'amitk09517@gmail.com', '0987654', '', 'iuytr', 'aaa', 'aaa'),
(9, 'shiva kumar', 'amitk09@gmail.com', '91611', '', 'br', 'zzz', 'zzz'),
(10, 'amit kumar', 'k1@gmail.com', '234567', '', 'asdfgh', 'kkk', 'kkk'),
(11, 'amit kumar', 'amitk09@gmail.com', '9999999876', '', 'trs', 'ooo', 'ooo'),
(12, 'shiva kumar', 'ak09@gmail.com', '9987654', '', 'hryssssssssss', 'nnn', 'nnn'),
(13, 'amit kumar', 'amitk09517@gmail.com', '8765', '', 'ikujtr', 'aaa', 'aaa'),
(14, 'sneha', 'sneha@gmain.com', '9897867565', '', 'kanpur nagar', '12345', '12345'),
(15, 'shiva kumar', 'santosh2@gmail.com', '12345', '', 'erdtf', 'ccc', 'ccc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s`
--
ALTER TABLE `s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `s`
--
ALTER TABLE `s`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
