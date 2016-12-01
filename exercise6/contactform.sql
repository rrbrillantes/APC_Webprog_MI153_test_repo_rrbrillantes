--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `user_id` int(10) NOT NULL,
  `name` varchar(45) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `home` varchar(45) DEFAULT NULL,
  `gender` varchar(25) NOT NULL,
  `number` varchar(45) NOT NULL,
  `comment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`user_id`, `name`, `nickname`, `email`, `home`, `gender`, `number`, `comment`) VALUES
(6, 'Byun Baekhyun', '', 'bbh@gmail.com', 'hehe', 'female', '09154625416', 'i love youuu'),
(13, 'Byun Baekhyun', 'ByunBaek', 'Baeksshi@gmail.com', 'Seoul, South Korea', 'Male', '09154625416', 'Yeoja Chinggu! Saranghaeee~~ Let''s get marrie'),
(15, 'Byun Baekhyun', 'ByunBaek', 'Baeksshi@gmail.com', 'Seoul, South Korea', 'Male', '09154625416', 'Yeoja Chinggu! Saranghaeee~~');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `nickname` (`nickname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
