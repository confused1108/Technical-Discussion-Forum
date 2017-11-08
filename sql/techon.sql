-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 04:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techon`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_mail` varchar(50) NOT NULL,
  `feedback_descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_mail`, `feedback_descr`) VALUES
(13, 'ahuja@hitesh.com', 'amazing site.......'),
(14, 'hite@ahuja.com', 'loved it...'),
(15, 'hit@esh.com', 'keep it up !! great work ...'),
(16, 'hitesh.ahuja@gamil.com', 'i loved this site...'),
(17, 'deepak@gmail.com', 'amazing');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(8) NOT NULL,
  `posts_topic` int(8) NOT NULL,
  `posts_content` text NOT NULL,
  `posts_date` datetime NOT NULL,
  `posts_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `posts_topic`, `posts_content`, `posts_date`, `posts_by`) VALUES
(69, 33, '.Rob Percival | Web Developer And Teacher| Udemy', '2017-03-05 00:00:00', 20),
(70, 33, 'i would recommend you this particular codecamp\r\n\r\nLearn to code and help nonprofits', '2017-03-05 00:00:00', 20),
(71, 34, 'http://www.khanacademy.org/cs', '2017-03-05 00:00:00', 20),
(72, 34, 'You can start with C', '2017-03-05 00:00:00', 20),
(73, 34, 'or java', '2017-03-05 00:00:00', 20),
(74, 34, 'start to learn any basic language such as c++', '2017-03-05 00:00:00', 21),
(75, 34, 'or python', '2017-03-05 00:00:00', 21),
(76, 34, 'thanxx bro', '2017-03-06 00:00:00', 20),
(77, 35, 'can anyone know about it', '2017-03-06 00:00:00', 21),
(78, 34, 'ur welcome', '2017-03-06 00:00:00', 24),
(79, 34, 'again', '2017-03-06 00:00:00', 20),
(80, 38, 'fgjklg', '2017-03-06 00:00:00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `subscribe_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`subscribe_id`, `subscribe_mail`) VALUES
(1, 'hits.ahuja@gmail.com'),
(2, 'deepak@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_descr` text NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` varchar(20) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_descr`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(33, 'Which is the best full-stack web developer course on the internet?', 'i want to know about it...', '2017-03-05 00:00:00', 'web', 20),
(34, 'how to start with computer programming ??', 'can anyone provide me the resources', '2017-03-05 00:00:00', 'computer', 20),
(35, 'How to hack computer ??', 'and from where i can learn it....', '2017-03-05 00:00:00', 'computer', 21),
(36, 'what is virtual reality ??', 'and how it is different from augmented reality ??', '2017-03-06 00:00:00', 'others', 21),
(37, 'what is html?', 'i want to know.', '2017-03-06 00:00:00', 'web', 24),
(38, 'qwer', 'asdfghj', '2017-03-06 00:00:00', 'computer', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `udate` datetime NOT NULL,
  `user_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `gender`, `email`, `password`, `contact`, `udate`, `user_level`) VALUES
(20, 'Hitesh Ahuja', 'Hits812', 'male', 'hiteshahuja1998@gmail.com', '689ad24e1178748bf3e15580c0b4a3d90a754323', '7441183308', '2017-02-28 20:00:57', 0),
(21, 'Deepak Kumrawat', 'Deepu', 'male', 'deepakkumrawat8@gmail.com', 'f353ac42d9480a9eb9f1a90c4209d9b09f653e29', '7898378532', '2017-03-01 00:18:36', 0),
(23, 'Ayush', 'Ayush', 'male', 'Ayush@bathary.com', '147e00aff1986f0ec1d522050fca5c3e13e408f6', '7412589632', '0000-00-00 00:00:00', 0),
(24, 'deep', 'deep', 'male', 'deepak@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '7898378532', '0000-00-00 00:00:00', 0),
(25, 'Hitesha', 'Hitesha', 'male', 'a@b.com', '7d8f4b4b4613dc7e15333e6449692ad4af502d1d', '7777777777', '2017-03-06 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`),
  ADD KEY `posts_by` (`posts_by`),
  ADD KEY `posts_ibfk_4` (`posts_topic`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_by`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
