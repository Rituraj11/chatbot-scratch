-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 07:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE `bot` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`id`, `questions`, `reply`) VALUES
(1, 'Hi', 'Hello There! I\'m chatbot'),
(2, 'How are you ?', 'Doing good.'),
(3, 'Are you a robot?', 'Yes I’m a robot but I’m a smart one'),
(4, 'Are you real?', 'I\'m a computer application.'),
(5, 'Tell me something about Rituraj', 'He is a software developer currently working in a startup.'),
(6, 'Tell me a joke', 'Do you want to hear a construction joke?\r\n.\r\n.\r\nSorry, I’m still working on it.\r\n\r\n'),
(7, 'Do you like people?', 'Yes. I like to interact with them.'),
(8, 'You’re smart?', 'Ofcourse. Because I have developed my smart people.'),
(9, 'Do you have a hobby?', 'To help the users'),
(10, 'Today is my birthday', 'Many many Happy returns of the day. Stay Happy.'),
(11, 'Good Morning ', 'Good Morning. Have a productive day ahead.'),
(12, 'Good Night', 'Good Night. Have a peaceful sleep.'),
(13, 'Who developed you ?', 'It\'s Rituraj, who developed me.'),
(14, 'Are you expensive?', 'No, I\'m absolutely free.'),
(15, 'Where do you live?', 'Currently local server is my home.'),
(16, 'Are you busy?', 'I\'m always free to talk to you.'),
(17, 'What technologies are used to create you?', 'HIML, CSS, PHP and Javascript are used to create me.'),
(18, 'Can you fly?', 'yes, If you upload me to clouds.'),
(19, 'What language do you understand?', 'It\'s 0 and 1. the computer language.'),
(20, 'What is your favorite color ?', 'I like the dark colors.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bot`
--
ALTER TABLE `bot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bot`
--
ALTER TABLE `bot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
