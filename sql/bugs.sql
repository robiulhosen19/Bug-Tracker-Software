-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 04:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `bugs`
--

CREATE TABLE `bugs` (
  `bugID` int(11) NOT NULL,
  `bugCreator` varchar(255) NOT NULL,
  `err_type` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `asign_to` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `msg` varchar(255) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `projects_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bugs`
--

INSERT INTO `bugs` (`bugID`, `bugCreator`, `err_type`, `project_name`, `asign_to`, `start_date`, `due_date`, `msg`, `users_id`, `projects_id`) VALUES
(1, 'dg', 'dgs', 'dgs', 'sgd', '2023-09-21', '2023-09-13', 'sdg', 35, 3),
(2, 'sgd', 'sgd', 'sdf', 'sgs', '2023-09-21', '2023-09-13', 'dfd', 35, 3),
(3, '  Robiul', ' Logical Bugs ', ' bug system  ', ' nabil', '2023-09-15', '2023-09-27', 'This is simple issu. i', 35, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`bugID`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `projects_id` (`projects_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugs`
--
ALTER TABLE `bugs`
  MODIFY `bugID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bugs`
--
ALTER TABLE `bugs`
  ADD CONSTRAINT `bugs_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bugs_ibfk_2` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`pro_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
