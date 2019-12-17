-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2019 at 02:13 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainster_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_user_name_surname` varchar(64) DEFAULT NULL,
  `company_name` varchar(64) DEFAULT NULL,
  `company_email` varchar(64) DEFAULT NULL,
  `company_phone` varchar(32) DEFAULT NULL,
  `student_type` varchar(64) CHARACTER SET utf8mb4 DEFAULT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `company_user_name_surname`, `company_name`, `company_email`, `company_phone`, `student_type`, `reg_time`) VALUES
(164, 'Stojance Manev', 'atu', 'goran@mail.com', '222994', 'Студенти од програмирање', '2019-09-16 00:11:21'),
(165, 'Boban Manev', 'bob', 'stojance@mail.com', '555444', 'Студенти од data science', '2019-09-16 00:11:21'),
(166, 'Murat Cinar', 'BTA Macedonia', 'bta@bta.com', '022564333', 'Студенти од маркетинг', '2019-09-16 00:11:21'),
(167, 'dalibor mitev', 'grozd', 'goran@mail.com', '777777', 'Студенти од маркетинг', '2019-09-16 00:12:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
