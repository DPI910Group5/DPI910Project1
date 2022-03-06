-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 08:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpi910`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `password`) VALUES
('a', 'a', 'a', '523af537946b79c4'),
('eric', 'sedore', 'esedore@myseneca.ca', '29988429c481f219'),
('Zain', 'Abi', 'zabi@test.com', '1422883ea81f610d'),
('js', 'js', 'js', '32981a13284db7a0'),
('test', 'test', 'test@test', '098f6bcd4621d373'),
('name', 'name', 'name', 'b068931cc450442b'),
('apple', 'apple', 'app@le', '1f3870be274f6c49'),
('banana', 'banana', 'banana', '72b302bf297a228a'),
('matt', 'smith', 'msmith@doctor.com', 'doctor'),
('Ross', 'Sedore', 'rsedore@email.com', 'ross'),
('Tom', 'Cat', 'tomc@cat.com', 'cat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
