-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 09:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `trivia`
--

CREATE TABLE `trivia` (
  `id` int(10) NOT NULL,
  `questions` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trivia`
--

INSERT INTO `trivia` (`id`, `questions`, `answer`) VALUES
(1, 'Favorite color?', 'BLUE and BLACK'),
(2, 'The country I want to visit?', 'SOUTH KOREA'),
(3, 'Favorite food?', 'TINOLA'),
(4, 'My dream course is _________', 'Music Production'),
(5, 'How many songs I have written already?', '9 SONGS'),
(6, 'I want to learn how to play the ___________', 'Piano'),
(7, 'I am afraid of _________', 'Deep Water'),
(8, 'What is my favorite Korean Drama?', 'Dream High'),
(9, 'What is the name of my favorite puppy?', 'Oreo!'),
(10, 'Favorite song?', 'FEARLESS by TAYLOR SWIFT and \nA TWIST IN MY STORY by SECONDHAND SERENADE'),
(11, 'When did I start writing songs?', 'YEAR 2010'),
(12, 'I love to dance!', 'TRUE'),
(13, 'I love frogs!', 'DEFINITELY NO. SORRY!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trivia`
--
ALTER TABLE `trivia`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
