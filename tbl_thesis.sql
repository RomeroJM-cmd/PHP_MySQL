-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 07:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itec106`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thesis`
--

CREATE TABLE `tbl_thesis` (
  `thesis_id` int(11) NOT NULL,
  `thesis_title` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `copyright_year` varchar(50) NOT NULL,
  `thesis_adviser` varchar(50) NOT NULL,
  `technical_critic` varchar(50) NOT NULL,
  `abstract` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_thesis`
--

INSERT INTO `tbl_thesis` (`thesis_id`, `thesis_title`, `category`, `author`, `program`, `copyright_year`, `thesis_adviser`, `technical_critic`, `abstract`) VALUES
(1000, 'Development of Life', 'Multimedia Systems', 'Bill Gates', 'BS Computer Science', '2022', 'AJ Almarez', 'JR Buhain', 'What is life');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_thesis`
--
ALTER TABLE `tbl_thesis`
  ADD PRIMARY KEY (`thesis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_thesis`
--
ALTER TABLE `tbl_thesis`
  MODIFY `thesis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
