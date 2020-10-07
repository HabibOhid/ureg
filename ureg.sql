-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2020 at 02:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ureg`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'Management'),
(3, 'Marketing'),
(4, 'Banking'),
(5, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `regs`
--

CREATE TABLE `regs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `previous_company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regs`
--

INSERT INTO `regs` (`id`, `category_id`, `previous_company`, `job_title`, `about`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1, 2, 'FL Studio', 'Manager', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Canada', 'Sickick', 'sickick@gmail.com', '2020-09-28 06:38:49'),
(5, 1, 'Pepsico', 'Designer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Harjumaa', 'Sayeed', 'sayeed@gmail.com', '2020-09-28 11:53:31'),
(6, 4, 'OR', 'Accounted', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'tallinn estonia', 'Krsna', 'Krsna@gmail.com', '2020-10-03 11:47:06'),
(7, 5, 'Nothing', 'Student', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Tartu', 'Habib', 'Habib@gmail.com', '2020-10-03 11:49:56'),
(8, 5, 'Skydrive', 'ART', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Kesturg', 'Raftaar', 'raftaar@gmail.com', '2020-10-05 11:46:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regs`
--
ALTER TABLE `regs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regs`
--
ALTER TABLE `regs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
