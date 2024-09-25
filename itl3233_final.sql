-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 02, 2024 at 01:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itl3233_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `logtime1` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `status`, `logtime1`) VALUES
(1, 'ccpadmin', 'Successfully LoggedIn', '0000-00-00 00:00:00'),
(2, 'ccpadmin', 'Successfully LoggedIn', '0000-00-00 00:00:00'),
(3, 'ccpadmin', 'Successfully LoggedIn', '2024-05-02 07:53:05'),
(4, 'Teddy Ubal', 'Successfully LoggedIn', '2024-05-02 07:55:24'),
(5, 'ccpadmin', 'Successfully LoggedIn', '2024-05-02 09:09:58'),
(6, 'Teddy Ubal', 'Successfully LoggedIn', '2024-05-02 09:10:20'),
(7, 'Teddy Ubal', 'Successfully LoggedIn', '2024-05-02 09:11:13'),
(8, 'Teddy Ubal', 'Successfully LoggedIn', '2024-05-02 09:13:10'),
(9, 'Teddy Ubal', 'Successfully LoggedIn', '2024-05-02 09:14:11'),
(10, 'ccpadmin', 'Successfully LoggedIn', '2024-05-02 09:16:39'),
(11, 'ccpadmin', 'Successfully LoggedIn', '2024-05-02 09:37:58'),
(12, 'ccpadmin', 'Successfully LoggedIn', '2024-05-02 11:08:44'),
(13, 'user', 'Unsuccessful entry', '2024-05-02 11:22:55'),
(14, 'user', 'Unsuccessful entry', '2024-05-02 11:23:35'),
(15, 'ccpadmin', 'Successfully LoggedIn', '2024-05-02 11:24:12'),
(16, 'user', 'Unsuccessful entry(Account Deactivated)', '2024-05-02 11:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unum` int(9) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `logtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unum`, `uname`, `upass`, `type`, `status`, `logtime`) VALUES
(1, 111111111, 'ccpadmin', 'ccpadmin2024', 'admin', '1', '2024-05-02 11:24:12'),
(2, 202110395, 'Teddy Ubaldo', 'UB*!202110395', 'user', '1', '2024-05-02 11:39:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
