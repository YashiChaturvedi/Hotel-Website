-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 08:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `fname` varchar(255) NOT NULL,
  `num` int(12) NOT NULL,
  `pass` int(20) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `stay` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `datetime`, `fname`, `num`, `pass`, `rooms`, `stay`, `email`) VALUES
(1, '2020-08-09 09:32:53', 'Yashi Chaturvedi', 2147483647, 1234567890, '', 2, 'chaturvediyashi00@gmail.com'),
(2, '2020-08-09 09:32:53', 'Ritik Bhandari', 1234567890, 1234567890, '', 1, 'chaturvediyashi00@gmail.com'),
(3, '2020-08-09 09:32:53', 'Ritik Bhandari', 1234567890, 1234567890, '', 1, 'chaturvediyashi00@gmail.com'),
(4, '2020-08-09 09:32:53', 'Udit', 2147483647, 741258963, 'Regular', 2, 'yerfiey@kbgriug.com'),
(5, '2020-08-09 09:32:53', 'Yashi Chaturvedi', 2147483647, 1234567890, 'Semi Deluxe', 5, 'chaturvediyashi00@gmail.com'),
(6, '2020-08-09 09:32:53', 'Yashi Chaturvedi', 2147483647, 1234567890, 'Semi Deluxe', 5, 'chaturvediyashi00@gmail.com'),
(7, '2020-08-09 15:43:15', 'Yashi Chaturvedi', 2147483647, 1234569870, 'Luxury', 2, 'chaturvediyashi00@gmail.com'),
(8, '2020-09-17 15:02:11', 'Yashi Chaturvedi', 2147483647, 2147483647, 'Luxury', 3, 'chaturvediyashi00@gmail.com'),
(9, '2020-10-04 15:40:07', 'Yashi Chaturvedi', 2147483647, 123456789, 'Luxury', 7, 'chaturvediyashi00@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

CREATE TABLE `userpass` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`id`, `user`, `pass`, `email`) VALUES
(1, 'Yashi', '123456', 'bookwormyashi@gmail.com'),
(2, 'Pratik', '123456', 'thepappu@pappu.com'),
(3, 'Ritik', '789456', 'ritik@yahoo.com'),
(4, 'Udit', '456123', 'udit@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpass`
--
ALTER TABLE `userpass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userpass`
--
ALTER TABLE `userpass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
