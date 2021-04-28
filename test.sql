-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 06:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('', 'mishu@gmail.com', '1'),
('', 'anjummishu8@gmail.com', 'xyz'),
('', 'anju@gmail.com', '123'),
('', 'con@gmail.com', '12345'),
('', 'ara@gmail.com', '1234567'),
('', 'a@gmail.com', '123'),
('', 'test@gmail.com', '123'),
('', 'x@gmail.com', '123'),
('', 'e@gmail.com', '1'),
('MISHU,ANJUM ARA', 'anjummishu@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `date`, `amount`) VALUES
('MISHU', '2021-01-01', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `v`
--

CREATE TABLE `v` (
  `name` varchar(200) NOT NULL,
  `id` int(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v`
--

INSERT INTO `v` (`name`, `id`, `phone`, `email`) VALUES
('Aklima', 1, 1746789345, 'aklima@gmail.com'),
('Rahim', 2, 1746679378, 'rahim@gmail.com'),
('Karim', 3, 1746789566, 'karim@gmail.com'),
('Mila', 4, 1744479378, 'mila@gmail.com'),
('Shila', 5, 1714657937, 'shila@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
