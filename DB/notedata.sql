-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 12:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `note_data`
--

CREATE TABLE `note_data` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note_data`
--

INSERT INTO `note_data` (`id`, `title`, `details`) VALUES
(10, 'demo', 'i am giving a demo class'),
(15, 'hello', 'hii'),
(16, 'Donate Us', 'donate us 20000\r\n    <?php\r\n                    \r\n    ?>'),
(17, 'Donate Us', 'dnbmn'),
(18, 'dhfdsfhhjf', 'fhdsgfjsfgjd'),
(19, 'dfhjgfhj', 'dghjgfdh'),
(20, 'dbj', 'dhfkdgfjfk'),
(21, 'dhghjdjf', 'dfghjhgskd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note_data`
--
ALTER TABLE `note_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note_data`
--
ALTER TABLE `note_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
