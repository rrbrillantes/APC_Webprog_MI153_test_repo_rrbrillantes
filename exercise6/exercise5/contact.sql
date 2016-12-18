--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `name` varchar(45) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `home` varchar(45) DEFAULT NULL,
  `gender` varchar(25) NOT NULL,
  `number` varchar(45) NOT NULL,
  `comment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `nickname`, `email`, `home`, `gender`, `number`, `comment`) VALUES
(4, 'Rachel Anne Brillantes', 'heheheehe', 'Momoxielle@gmail.com', 'Blk 20 Lot 6 Phase 2 EP Housing, Brgy. Pinags', 'male', '09154625416', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
