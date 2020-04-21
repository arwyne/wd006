-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 10:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_covid19_screening_tool_b56`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`) VALUES
(1, 'Have you been to one of the COVID-19 affected countries in the last 14 days?'),
(2, 'Have you veen in close contact with a confirmed case of coronavirus?'),
(3, 'Are you currently experiencing symptoms (cough, shortness of breath, fever)'),
(4, 'Emergency Contact Name and Number'),
(5, 'Body Temperature');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `result` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `resultid` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `resultid`, `age`, `firstname`, `lastname`) VALUES
(1, '5e9e7ba3f8e61e963a55907c', 35, 'Britney', 'Beard'),
(2, '5e9e7ba3357707dac60cf90a', 38, 'Mcpherson', 'Savage'),
(3, '5e9e7ba306ddf37a2d45b444', 31, 'Sweeney', 'Paul'),
(4, '5e9e7ba30d7511ee09cee451', 25, 'Riddle', 'Ballard'),
(5, '5e9e7ba3b4ab4214a28be3a2', 22, 'Olive', 'Knight'),
(6, '5e9e7ba331bbe5dfee45c3fa', 26, 'Dennis', 'Stevens'),
(7, '5e9e7ba3d31475146996a7b5', 33, 'Walsh', 'Browning'),
(8, '5e9e7ba3de003850030aca84', 27, 'Carmen', 'Lott'),
(9, '5e9e7ba3cf34576df37b73c0', 38, 'Guerra', 'Britt'),
(10, '5e9e7ba367c0a7a7e7aa7474', 35, 'Madelyn', 'Woods'),
(11, '5e9e7ba36410dd6c37827241', 22, 'Rosario', 'Haynes'),
(12, '5e9e7ba3740f67bd576c3bee', 38, 'Suzette', 'Morgan'),
(13, '5e9e7ba317bbef82d213add3', 25, 'Wagner', 'Gilmore'),
(14, '5e9e7ba309a74aded81d480f', 27, 'Burns', 'Moody'),
(15, '5e9e7ba33429727fa3dc72a9', 40, 'Marci', 'Mendez'),
(16, '5e9e7ba3d3e8cc1452741604', 37, 'Jessie', 'Jackson'),
(17, '5e9e7ba37d932673422192ee', 31, 'Ola', 'Lancaster'),
(18, '5e9e7ba3748b5c138ebe12a3', 28, 'Karina', 'Small'),
(19, '5e9e7ba3d801cc682ac35304', 27, 'Garza', 'Lawrence'),
(20, '5e9e7ba3dba6a606a1fb18d6', 37, 'Compton', 'Moreno'),
(21, '5e9e7ba36cf4549e9492452b', 20, 'Lou', 'Morton'),
(22, '5e9e7ba37cb2bd6186dfa21f', 36, 'Daniels', 'Vega'),
(23, '5e9e7ba3e05d43414b00ae40', 20, 'Alfreda', 'Baxter'),
(24, '5e9e7ba316bebfecdedcb6eb', 21, 'Carroll', 'Ford'),
(25, '5e9e7ba31008156652f5314d', 34, 'Harriet', 'Lewis'),
(26, '5e9e7ba3106772f284ee8466', 21, 'Winifred', 'Morgan'),
(27, '5e9e7ba37707aeda035c05c4', 30, 'Carr', 'Brewer'),
(28, '5e9e7ba30fcfb9e3c7939104', 23, 'Mariana', 'Chandler'),
(29, '5e9e7ba3bf6ec42d4d08e23c', 20, 'Robbie', 'Green'),
(30, '5e9e7ba38a1f3a028431f200', 40, 'Vanessa', 'Hanson'),
(31, '5e9e7ba3ab9e8867b235086a', 23, 'Carlson', 'Parker'),
(32, '5e9e7ba3cfd221b01fa191eb', 20, 'Joyce', 'Glass'),
(33, '5e9e7ba35d6cd9b2a435a6b2', 40, 'Alissa', 'Morgan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
