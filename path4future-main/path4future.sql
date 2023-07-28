-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 05:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `path4future2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `password`) VALUES
(3, 'Shivu', '456'),
(19, 'Sinch', '123'),
(20, 'Supreet', '123'),
(21, 'Zaiba', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aplication`
--

CREATE TABLE `tbl_aplication` (
  `full_name` varchar(20) NOT NULL,
  `your_email` varchar(30) NOT NULL,
  `r_resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `tbl_aplication`
--

INSERT INTO `tbl_aplication` (`full_name`, `your_email`, `r_resume`) VALUES
('sup', 'dygynewabe@mailinator.com', 'IMG-20211228-WA0002.jpg'),
('sanketh', 'lanyxego@mailinator.com', 'MY PHOTO.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pltform`
--

CREATE TABLE `tbl_pltform` (
  `platform_name` varchar(20) NOT NULL,
  `platform_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `tbl_pltform`
--

INSERT INTO `tbl_pltform` (`platform_name`, `platform_password`) VALUES
('path4future', 'secret');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `username`, `email`, `pw`) VALUES
(15, 'Sinchana', 'sinch@gmail.com', '123'),
(16, 'Supreet', 'supreetkurdekar05@gmail.com', '123'),
(17, 'Zaiba', 'zai@gmail.com', '123'),
(18, 'rtyui', 'fghj', 'rtyhjuk'),
(19, 'rtyui', 'fghj', 'rtyhjuk'),
(20, 'Snkuyvutv', 'sefs2@gmail.com', '789'),
(21, 'dynukyfywe', 'kyguwaj@mailinator.com', '258'),
(22, 'NEW', 'supreetkurdekar05@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone_no` int(100) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `year` int(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `student_name`, `gender`, `phone_no`, `college_name`, `year`, `branch`, `skills`, `status`) VALUES
(94, 'Supreet', 'male', 76, 'Irma Whitley', 1990, 'Quibusdam accusamus ', 'javascript,mern', 'accepted'),
(95, 'Sinchana', 'female', 27, 'Henry Reeves', 2011, 'Est nisi quia sed co', 'c++,python,java,php,css,javascript,mern', 'accepted'),
(96, 'Supreet', 'male', 50, 'Kirk Wooten', 2000, 'Eos error molestiae ', 'c++,php,ui/ux,graphic', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
