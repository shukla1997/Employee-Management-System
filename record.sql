-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 02:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `emp_record`
--

CREATE TABLE `emp_record` (
  `id` int(10) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `ssn` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL,
  `homeaddress` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_record`
--

INSERT INTO `emp_record` (`id`, `ename`, `ssn`, `dept`, `salary`, `homeaddress`) VALUES
(1, ' Utkarsha Shukla', '4553252', 'Finance', 10000, '    New Delhi,India'),
(2, 'Anukarsha Shukla', '4553250', 'HR', 10000, '   New Delhi,India'),
(3, 'Sairav Shukla', '4553252', 'Finance', 10000, '  New Delhi,India'),
(4, 'Govind Shukla', '4553252', 'Finance', 10000, '  New Delhi,India'),
(5, 'Krishna Mohan', '4553252', 'Finance', 10000, '  New Delhi,India'),
(6, 'Kansa Gupta', '4553252', 'Finance', 10000, '  New Delhi,India'),
(7, 'Balram Dixit', '4553252', 'Finance', 10000, '  New Delhi,India'),
(8, 'Rohini Iyer', '4553252', 'Finance', 10000, '  New Delhi,India'),
(9, 'Urmila Joshi', '4553252', 'Finance', 10000, '   New Delhi,India'),
(11, 'Utkarsh Shukla', '3446647', 'Finance', 14000, ' Panga,Kirtipur'),
(12, 'Devaki Shrestha', '453575', 'HR', 20000, 'Bhairahwa,Rupandehi'),
(13, 'Aslam Khan', '128388', 'HR', 15000, 'Barathwa, Sarlahi'),
(14, 'Udit Chaudhary', '345853', 'HR', 12000, 'Nepalgunj,Banke'),
(15, 'Radhika Thapa', '45782', 'Finance', 14000, 'Birgunj,Parsa'),
(16, 'Ram Thapa', '4334535', 'HR', 14000, 'Thimi,Bhaktapur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_record`
--
ALTER TABLE `emp_record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
