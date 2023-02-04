-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 04, 2023 at 04:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recognition_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `concert` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `age`, `gender`, `phone`, `email`, `concert`) VALUES
(1, 'Soma Sai Dhanush', 22, 'Male', '+919620950233', 'somasaidhanush48@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(2, 'Soma Sai Dhanush', 22, 'Male', '+919620950233', 'somasaidhanush48@gmail.com', 'Road to Ultra, Mumbai - ₹5,000.0'),
(3, 'Soma Sai Dhanush', 22, 'Male', '+919620950233', 'somasaidhanush48@gmail.com', 'Road to Ultra, Mumbai - ₹5,000.0'),
(4, 'Soma Sai Dhanush', 22, 'Male', '+919620950233', 'somasaidhanush48@gmail.com', 'Road to Ultra, Mumbai - ₹5,000.0'),
(5, 'Soma Sai Dhanush', 22, 'Male', '+919620950233', 'somasaidhanush48@gmail.com', 'Road to Ultra, Mumbai - ₹5,000.0'),
(6, 'Medha Pandit', 22, 'Female', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(7, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(8, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(9, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(10, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(11, 'Sai Dhanush', 18, 'Male', '9620650233', 'somasaidhanush48@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(12, 'Sai Dhanush', 18, 'Male', '9620650233', 'somasaidhanush48@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(13, 'Sai Dhanush', 18, 'Male', '9620650233', 'somasaidhanush48@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(14, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(15, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(16, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(17, 'Sai Dhanush', 18, 'Male', '9620650233', 'somasaidhanush48@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(18, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(19, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(20, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(21, 'Sai', 18, 'Male', '9620950233', 'sid161201@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(22, 'Sai Dhanush', 18, 'Male', '9620650233', 'somasaidhanush48@gmail.com', 'NH7, Bangalore - ₹5,000.0'),
(23, 'Sai Dhanush', 18, 'Male', '9620650233', 'somasaidhanush48@gmail.com', 'NH7, Bangalore - ₹5,000.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
