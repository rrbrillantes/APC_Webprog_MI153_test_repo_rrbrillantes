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
(15, 'Byun Baekhyun', 'ByunBaek', 'Bbhyun@gmail.com', 'Seoul, South Korea', 'Male', '09154625416', 'Yeoja Chinggu! Saranghaeee~~'),
(18, 'Anne Rondena', 'Anne', 'Anner@gmail.com', 'Taguig City', 'female', '09154625416', 'I left a comment here.'),
(19, 'Rachel Anne', 'Anne', 'rrbrillantes@gmail.com', 'Blk 20 Lot 6 Phase 2 AFP Housing, Brgy. Pinag', 'Female', '09154625416', 'Way to go!');

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
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
