-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 03:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtah`
--

-- --------------------------------------------------------

--
-- Table structure for table `acategories`
--

CREATE TABLE `acategories` (
  `id` int(11) NOT NULL,
  `qid` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acategories`
--

INSERT INTO `acategories` (`id`, `qid`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'a1q1', 0, '2022-07-08 12:41:12', '2022-07-08 13:11:47', NULL),
(2, 3, 'q1a2', 1, '2022-07-08 12:49:03', '2022-07-08 13:11:51', NULL),
(3, 4, 'aaa', 0, '2022-07-08 12:54:05', '2022-07-08 12:54:05', NULL),
(4, 2, 'pn-nirmalya', 1, '2022-07-08 13:15:20', '2022-07-08 13:15:28', NULL),
(5, 1, 'QCat1UpdatedAT1', 0, '2022-07-08 19:50:21', '2022-07-08 19:50:21', NULL),
(6, 1, 'QCat1UpdatedAT2', 0, '2022-07-08 19:50:28', '2022-07-08 19:50:28', NULL),
(7, 1, 'QCat1UpdatedAT3', 0, '2022-07-08 19:50:34', '2022-07-08 19:50:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qcategories`
--

CREATE TABLE `qcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qcategories`
--

INSERT INTO `qcategories` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'QCat1Updated', 1, '2022-07-08 10:05:11', '2022-07-08 10:13:49', NULL),
(2, 'QCat2xxxzz', 0, '2022-07-08 10:05:11', '2022-07-08 10:15:30', NULL),
(3, 'QCat3', 0, '2022-07-08 04:43:54', '2022-07-08 04:43:54', NULL),
(4, 'Qcat4', 0, '2022-07-08 04:44:09', '2022-07-08 04:44:09', NULL),
(5, 'Qcat5Updated', 0, '2022-07-08 05:37:09', '2022-07-08 05:56:33', NULL),
(6, 'QCat6Updated', 1, '2022-07-08 07:32:58', '2022-07-08 10:14:35', NULL),
(7, 'QCat7Updated', 1, '2022-07-08 07:33:05', '2022-07-08 10:14:12', NULL),
(8, 'QCat8Updated', 1, '2022-07-08 07:33:09', '2022-07-08 10:15:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scategories`
--

CREATE TABLE `scategories` (
  `id` int(11) NOT NULL,
  `qid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scategories`
--

INSERT INTO `scategories` (`id`, `qid`, `aid`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 4, 'Nirmalya Mondalu', 1, '2022-07-08 13:30:31', '2022-07-08 13:50:04', NULL),
(2, 2, 2, 'taskszilla.in', 0, '2022-07-08 13:31:39', '2022-07-08 13:31:39', NULL),
(3, 4, 3, 'Mondalxx', 1, '2022-07-08 13:39:34', '2022-07-08 19:39:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acategories`
--
ALTER TABLE `acategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qcategories`
--
ALTER TABLE `qcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scategories`
--
ALTER TABLE `scategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acategories`
--
ALTER TABLE `acategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qcategories`
--
ALTER TABLE `qcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `scategories`
--
ALTER TABLE `scategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
