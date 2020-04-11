-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 07:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `seat_row` int(10) NOT NULL,
  `seat_column` int(10) NOT NULL,
  `company` varchar(200) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `m_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `name`, `location`, `seat_row`, `seat_column`, `company`, `operator`, `m_id`) VALUES
(1, 'Desh Travel', 'dhaka', 20, 2, 'abdTravel', 'abd', 1),
(3, 'Mayer Doya', 'kuril', 13, 2, 'abdCompany', 'abdullah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `busesschedule`
--

CREATE TABLE `busesschedule` (
  `id` int(20) NOT NULL,
  `b_id` int(10) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `fare` int(11) NOT NULL,
  `departure` varchar(200) NOT NULL,
  `arrival` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busesschedule`
--

INSERT INTO `busesschedule` (`id`, `b_id`, `b_name`, `route`, `fare`, `departure`, `arrival`) VALUES
(1, 1, 'Desh Travel', 'Kuril-Mohammadpur', 20, 'kuril', 'Mohammadpur'),
(2, 3, 'Mayer Doya', 'd-k', 12, 'd', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(20) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `registered` date NOT NULL,
  `validated` int(10) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `email`, `password`, `registered`, `validated`, `role`) VALUES
(1, 'ab', 'ab@gmail.com', 'ab', '0000-00-00', 1, 'manager'),
(2, 'abc', 'abc@gmail.com', 'ab', '2020-04-15', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `busesschedule`
--
ALTER TABLE `busesschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `busesschedule`
--
ALTER TABLE `busesschedule`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
