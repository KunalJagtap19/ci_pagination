-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 08:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boppo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `id` int(11) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'Choice_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_tbl`
--

INSERT INTO `exam_tbl` (`id`, `exam`, `user_id`) VALUES
(1, 'mpsc1', 1),
(2, 'maths', 2),
(3, 'physics', 3),
(4, 'biology', 4),
(5, 'chemistry', 5),
(6, 'history', 6),
(7, 'economic', 7),
(8, 'marathi', 8),
(9, 'english', 9),
(10, 'zoology', 10),
(11, 'botny', 11),
(12, 'computer science', 12),
(13, 'jquery', 13),
(16, 'PHP', 16),
(20, 'MYsql', 20),
(21, 'Python', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Kunal', 'Jagtap', 'kunaljagtap@gmail.com', '2020-07-06 17:44:07', '2020-07-06 17:44:07'),
(2, 'rohan', 'Jagtap', 'kunaljagtap1@gmail.com', '2020-07-06 17:44:44', '2020-07-07 09:22:24'),
(3, 'abhi', 'Jadhav', 'kunaljagtap19@gmail.com', '2020-07-06 17:45:09', '2020-07-07 11:10:42'),
(4, 'babu', 'rande', 'kunaljagtap11@gmail.com', '2020-07-06 17:44:07', '2020-07-07 10:28:23'),
(5, 'rahul', 'More', 'kunaljagtap10@gmail.com', '2020-07-06 17:44:44', '2020-07-07 11:10:49'),
(6, 'ganesh', 'tope', 'kunaljagtap01@gmail.com', '2020-07-06 17:45:09', '2020-07-07 11:10:59'),
(7, 'ramu', 'Shirke', 'kunaljagtap0@gmail.com', '2020-07-06 17:44:07', '2020-07-07 11:11:09'),
(8, 'ram', 'pol', 'kunaljagtap001@gmail.com', '2020-07-06 17:44:44', '2020-07-07 11:11:15'),
(9, 'shyam', 'rane', 'kunaljagtap109@gmail.com', '2020-07-06 17:45:09', '2020-07-07 11:11:33'),
(10, 'raju', 'zende', 'kunaljagtap101@gmail.com', '2020-07-06 17:44:07', '2020-07-07 11:11:43'),
(11, 'gopal', 'mane', 'kunaljagtap100@gmail.com', '2020-07-06 17:44:44', '2020-07-07 11:11:57'),
(12, 'rama', 'Jagtap', 'kunaljagtap010@gmail.com', '2020-07-06 17:45:09', '2020-07-07 09:29:08'),
(13, 'Supriya', 'das', 'das@gmail.com', '2020-07-07 16:21:22', '2020-07-07 16:21:22'),
(16, 'Shanti', 'bare', 'bare@gmail.com', '2020-07-07 16:35:12', '2020-07-07 16:35:12'),
(20, 'manu', 'gole', 'gole@gmail.com', '2020-07-07 16:37:27', '2020-07-07 16:37:27'),
(21, 'Anita', 'yewle', 'anita@gmail.com', '2020-07-07 16:39:07', '2020-07-07 16:39:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
