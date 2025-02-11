-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2025 at 12:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `verify_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students_form`
--

CREATE TABLE `students_form` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `mid_ini` varchar(2) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `birth_year` date NOT NULL,
  `status` enum('Ongoing','Drop','Done') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_form`
--

INSERT INTO `students_form` (`student_id`, `first_name`, `mid_ini`, `last_name`, `course`, `department`, `birth_year`, `status`) VALUES
(143000, 'Josh Andrei', ' M', 'Magcalas', 'BSIT', 'CCE', '2004-06-04', 'Drop'),
(143001, 'Gesef Mari', 'M', 'Depra', 'MMA', 'CCE', '2005-03-16', 'Ongoing'),
(143002, 'Eli', '', 'Soronio', 'BSIT', 'CCE', '2029-09-10', 'Drop'),
(143003, 'Alexa Mae', '', 'Bacaro', 'MMA', 'CCE', '2025-02-08', 'Ongoing'),
(143004, 'Sheanny Jean', '', 'Bracamonte', 'PSYH', 'CASE', '2025-02-15', 'Drop'),
(143005, 'Earl', 'F', 'Fructoso', 'BAYOT', 'INADLAW', '2025-02-09', 'Ongoing'),
(143006, 'Gilgre Gene', '', 'Skibidi', 'BSIT', 'PLS NO OTEN', '2025-03-02', 'Ongoing'),
(143007, 'Brendan', '', 'Oscar', 'BSIT', 'fff', '2025-02-10', 'Ongoing'),
(143008, 'Brendan', '', 'Magcalas', 'BSIT', 'secret', '2025-02-17', 'Ongoing'),
(143009, 'Josh Andrei ', 's', 'Magcalas', 'BSIT', 'secret', '2025-02-04', 'Ongoing'),
(143010, 'Benjamon', '', 'Private', 'CRIM', 'oten', '2025-02-19', 'Ongoing'),
(143011, 'msdkam', 'A.', 'asdsad', 'BSIT', 'oten', '2025-02-25', 'Ongoing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `students_form`
--
ALTER TABLE `students_form`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students_form`
--
ALTER TABLE `students_form`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
