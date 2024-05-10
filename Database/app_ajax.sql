-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2024 at 05:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_table`
--

CREATE TABLE `chat_table` (
  `id` int NOT NULL,
  `author_id` int DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat_table`
--

INSERT INTO `chat_table` (`id`, `author_id`, `message`, `created_date`, `updated_date`, `is_active`) VALUES
(1, 10, 'hiii', '2024-04-10 16:17:45', '2024-04-10 16:17:45', 1),
(2, 10, 'hiiii?', '2024-04-10 16:17:47', '2024-04-10 16:17:47', 1),
(3, 10, 'yoo', '2024-04-10 16:18:05', '2024-04-10 16:18:05', 1),
(4, 10, 'buudy', '2024-04-10 16:21:48', '2024-04-10 16:21:48', 1),
(5, 10, 'nigga', '2024-04-10 16:21:55', '2024-04-10 16:21:55', 1),
(6, 10, 'Yo nigga', '2024-04-10 16:25:41', '2024-04-10 16:25:41', 1),
(7, 10, 'hi', '2024-04-10 16:47:36', '2024-04-10 16:47:36', 1),
(8, 10, 'how u doin\' ?', '2024-04-10 16:49:08', '2024-04-10 16:49:08', 1),
(9, 10, 'hyyyy', '2024-04-11 09:51:06', '2024-04-11 09:51:06', 1),
(10, 10, 'hay yo', '2024-04-11 10:06:14', '2024-04-11 10:06:14', 1),
(11, 10, 'hello', '2024-04-11 13:06:05', '2024-04-11 13:06:05', 1),
(12, 10, 'hiii', '2024-04-11 13:16:00', '2024-04-11 13:16:00', 1),
(13, 10, 'whats up buddy?', '2024-04-11 13:17:02', '2024-04-11 13:17:02', 1),
(14, 10, 'hy buudy, are u good?', '2024-04-11 13:22:59', '2024-04-11 13:22:59', 1),
(15, 10, 'hello', '2024-04-11 13:29:16', '2024-04-11 13:29:16', 1),
(16, 10, 'whats up buddy?', '2024-04-11 13:58:18', '2024-04-11 13:58:18', 1),
(17, 11, 'hii', '2024-04-11 14:40:13', '2024-04-11 14:40:13', 1),
(18, 10, 'hyyyy buddy ????', '2024-04-11 15:14:11', '2024-04-11 15:14:11', 1),
(19, 1, 'fnnsnkjsnfnbs', '2024-04-11 15:29:16', '2024-04-11 15:29:16', 1),
(20, 1, 'whats up nigga?', '2024-04-11 15:56:23', '2024-04-11 15:56:23', 1),
(21, 10, 'hayy yoo..', '2024-04-11 15:58:46', '2024-04-11 15:58:46', 1),
(22, 1, 'yo buddy, apka father saab aai hai.', '2024-04-15 13:02:08', '2024-04-15 13:02:08', 1),
(23, 1, 'hello', '2024-04-15 16:11:40', '2024-04-15 16:11:40', 1),
(24, 1, 'hiii', '2024-04-15 16:13:51', '2024-04-15 16:13:51', 1),
(25, 1, 'hi', '2024-04-15 16:16:36', '2024-04-15 16:16:36', 1),
(26, 1, 'hii', '2024-04-15 16:16:50', '2024-04-15 16:16:50', 1),
(27, 1, 'huu', '2024-04-15 16:16:55', '2024-04-15 16:16:55', 1),
(28, 1, 'hyyyyyyyy', '2024-04-15 16:17:24', '2024-04-15 16:17:24', 1),
(29, 1, 'yo buddy???????????????????????', '2024-04-15 16:24:38', '2024-04-15 16:24:38', 1),
(30, 10, 'uii', '2024-04-15 16:26:13', '2024-04-15 16:26:13', 1),
(31, 10, 'huu', '2024-04-15 16:26:21', '2024-04-15 16:26:21', 1),
(32, 10, 'hello', '2024-04-15 16:35:05', '2024-04-15 16:35:05', 1),
(33, 10, 'yoo buddy', '2024-04-15 16:35:25', '2024-04-15 16:35:25', 1),
(34, 10, 'hello', '2024-04-15 16:36:31', '2024-04-15 16:36:31', 1),
(35, 10, 'hello', '2024-04-15 16:37:06', '2024-04-15 16:37:06', 1),
(36, 10, 'hrllo', '2024-04-15 16:38:47', '2024-04-15 16:38:47', 1),
(37, 10, 'yioooooooo?', '2024-04-15 16:38:58', '2024-04-15 16:38:58', 1),
(38, 10, 'buddy', '2024-04-15 16:39:16', '2024-04-15 16:39:16', 1),
(39, 10, 'hello', '2024-04-15 16:39:31', '2024-04-15 16:39:31', 1),
(40, 10, 'yello', '2024-04-15 16:39:46', '2024-04-15 16:39:46', 1),
(41, 10, 'fdxcl', '2024-04-15 16:41:43', '2024-04-15 16:41:43', 1),
(42, 10, 'hllo', '2024-04-15 16:42:23', '2024-04-15 16:42:23', 1),
(43, 3, 'hi, my name  is harry.', '2024-04-15 21:48:16', '2024-04-15 21:48:16', 1),
(44, 4, 'yo buddys', '2024-04-15 21:59:06', '2024-04-15 21:59:06', 1),
(45, 7, 'hy guys', '2024-04-15 22:10:59', '2024-04-15 22:10:59', 1),
(46, 2, 'hiooo', '2024-04-15 23:06:39', '2024-04-15 23:06:39', 1),
(47, 4, 'hello', '2024-04-16 13:06:59', '2024-04-16 13:06:59', 1),
(48, 4, 'ok', '2024-04-16 13:08:38', '2024-04-16 13:08:38', 1),
(49, 1, 'f**ku', '2024-04-18 15:52:08', '2024-04-18 15:52:08', 1),
(50, 1, 'hi', '2024-04-21 12:25:37', '2024-04-21 12:25:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `phone`, `status`, `image`, `email`, `password`, `created_date`, `updated_date`, `is_active`) VALUES
(1, 'harry', 'singh', '8378464865', 'empty', '1713682567.jpg', 'harry885@gmai.com', '222', '2024-04-08 14:51:18', '2024-04-08 14:51:18', 1),
(2, 'harry', 'singh', '8378464865', 'empty', '1713435823.jpg', 'harry89@gmai.com', '555', '2024-04-08 14:51:19', '2024-04-08 14:51:19', 1),
(3, 'harry', 'singh', '8378464865', 'status are just show off\'s.', '1713197949.jpg', 'harry9965@gmai.com', '225', '2024-04-08 14:51:21', '2024-04-08 14:51:21', 1),
(4, 'garry', 'singh', '8378464865', 'empty', '1713199016.jpg', 'garry555@gmai.com', '123', '2024-04-08 14:53:19', '2024-04-08 14:53:19', 1),
(5, 'sunny', 'kumar', '8527419638', 'empty', NULL, 'sunny852@gmail.com', '8465', '2024-04-08 14:55:38', '2024-04-08 14:55:38', 1),
(6, 'sunny', 'kumar', '8527419638', 'empty', NULL, 'sunny9952@gmail.com', '123569', '2024-04-08 14:59:19', '2024-04-08 14:59:19', 1),
(7, 'gurnam', 'kaur', '8527419638', 'Do not Look at me', '1713201122.jpg', 'grunam963@gmail.com', '000', '2024-04-09 15:53:26', '2024-04-09 15:53:26', 1),
(8, 'guri', 'singh', '7894561235', 'single', NULL, 'gur525@gmail.com', '12358', '2024-04-09 15:55:20', '2024-04-09 15:55:20', 1),
(9, 'lov', 'singh', '8527419638', 'single', NULL, 'lov896@gmail.com', '789456', '2024-04-09 15:59:05', '2024-04-09 15:59:05', 1),
(10, 'ravi', 'kumar', '8378464865', 'don\'t look....', '1713179531.jpg', 'ravi3333@gmail.com', '1111', '2024-04-09 16:08:20', '2024-04-09 16:08:20', 1),
(11, 'raviraj', 'singh', '8378464865', 'don\'t Kinding with me.', '1712739403.jpg', 'ravi225@gmail.com', '9999', '2024-04-10 14:26:43', '2024-04-10 14:26:43', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_table`
--
ALTER TABLE `chat_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_table`
--
ALTER TABLE `chat_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
