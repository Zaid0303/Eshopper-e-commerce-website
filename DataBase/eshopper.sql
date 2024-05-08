-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 02:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `eshopper_users`
--

CREATE TABLE `eshopper_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_number` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eshopper_users`
--

INSERT INTO `eshopper_users` (`user_id`, `user_name`, `user_number`, `user_email`, `user_password`) VALUES
(1, 'Muhammad Zaid', '0340222233344', 'zaid123@gmail.com', '$2y$10$lvtqUZA2ixGCFMshtaqa..rrSJrC2DbRSB7QX6Te9cMWcoVUx2opS'),
(2, 'Murtaza', '03210000333', 'murtaza123@gmail.com', '$2y$10$bNRErq7.sgxyd7JOOolgWuijGfkch8pUgItWOpw7ZJ7wtI1C7/d3K'),
(3, 'Mahnoor', '03452166677', 'mahnoor@gmail.com', '$2y$10$IszIPokA4e3HLgWc1l9Xw.JYzX/IsJ/yyFkm51E1K50C1q1t36kVe'),
(4, 'Aliya', '0345667788', 'aliya@gmail.com', '$2y$10$Cxssz7K2EK.bsLlhw2/UnuHGCDKIghBYGv5Jbdx.dxr95Ho/izZNW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eshopper_users`
--
ALTER TABLE `eshopper_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eshopper_users`
--
ALTER TABLE `eshopper_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
