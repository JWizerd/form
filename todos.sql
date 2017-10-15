-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 16, 2017 at 12:10 AM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bad_todo_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `developer` varchar(100) NOT NULL,
  `pm` varchar(100) NOT NULL,
  `designer` varchar(100) DEFAULT NULL,
  `pmteam` varchar(100) NOT NULL,
  `todo` varchar(255) NOT NULL,
  `time` varchar(10) NOT NULL,
  `completion` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `date`, `developer`, `pm`, `designer`, `pmteam`, `todo`, `time`, `completion`, `description`) VALUES
(9, '2017-10-13', 'Jeremiah Wodke', 'Test Project Manager', 'Test Designer', 'Test Team', '[URGENT] Replace Contact Form', ':30', '2:30', 'Reasons for bad todo: \r\n-  forgot FTP credentials,  didn\'t get a response for two days \r\n- not an urgent task as the todo only asked that I add a single page to their website with an already existing contact form');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
