-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 06:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svecrw`
--

-- --------------------------------------------------------

--
-- Table structure for table `achlist`
--

CREATE TABLE `achlist` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `acheivement` varchar(30) NOT NULL,
  `public` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achlist`
--

INSERT INTO `achlist` (`id`, `name`, `designation`, `dept`, `acheivement`, `public`) VALUES
(13, 'Jaswanth', '', 'it', 'FDP', 'yes'),
(16, 'dileep', '', 'IT', 'journal', 'yes'),
(17, '123', '12312', 'IT', '123123', 'yes'),
(18, 'asda', 'sadas', 'IT', 'asdsa', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `funding_agency` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`name`, `designation`, `funding_agency`, `title`, `date`) VALUES
('Jaswanth', 'M.Tech', 'Skynet', 'CloudComputing', '12/10/2016');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `dov` varchar(30) NOT NULL,
  `pov` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `name`, `designation`, `address`, `dov`, `pov`) VALUES
(1, 'asdas', 'sadaa', 'asdas', 'sads', 'dsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `date_posted` varchar(30) NOT NULL,
  `time_posted` time NOT NULL,
  `date_edited` varchar(30) NOT NULL,
  `time_edited` time NOT NULL,
  `public` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `details`, `date_posted`, `time_posted`, `date_edited`, `time_edited`, `public`) VALUES
(2, 'Tuna', 'March 26, 2014', '13:48:18', '', '00:00:00', 'no'),
(3, 'Salad', 'March 27, 2014', '04:47:49', '', '00:00:00', 'yes'),
(4, 'Corn', 'March 27, 2014', '04:48:11', '', '00:00:00', 'no'),
(5, 'Pasta', 'March 27, 2014', '04:48:26', '', '00:00:00', 'yes'),
(6, 'Chicken', 'March 27, 2014', '04:49:23', '', '00:00:00', 'yes'),
(7, 'Spaghetti', 'March 27, 2014', '04:49:49', '', '00:00:00', 'no'),
(8, 'te', 'October 24, 2016', '22:53:30', 'October 24, 2016', '22:53:42', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `rc`
--

CREATE TABLE `rc` (
  `name` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `domain` varchar(40) NOT NULL,
  `wtype` varchar(40) NOT NULL,
  `file` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rc`
--

INSERT INTO `rc` (`name`, `dept`, `designation`, `domain`, `wtype`, `file`) VALUES
('jaswanth', 'it', 'Assistant professor', 'domain', 'journal', 'uploads/4977a097.pdf'),
('testing', 'it', 'irw', 'domain', 'journal', 'uploads/forgot.html');

-- --------------------------------------------------------

--
-- Table structure for table `rp`
--

CREATE TABLE `rp` (
  `title` varchar(50) NOT NULL,
  `pinv` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rp`
--

INSERT INTO `rp` (`title`, `pinv`, `status`, `duration`, `budget`) VALUES
('Botnets', 'Example', 'Active', '6 Months', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `rpub`
--

CREATE TABLE `rpub` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `journal_name` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `paperinfo` varchar(30) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpub`
--

INSERT INTO `rpub` (`id`, `name`, `designation`, `dept`, `journal_name`, `title`, `paperinfo`, `year`) VALUES
(1, '', '234234', 'IT', '23423', '', '432423', 423423),
(2, '', 'Assistant professor', 'IT', 'Springer', '', 'ISBN 11011', 2016),
(3, '', 'asd', 'IT', 'sad', '', 'sad', 0),
(4, '', 'Professor', 'IT', 'Springer', '', 'Volume 1', 2015),
(5, '', 'ww', 'IT', 'qw', '', 'qwq', 11),
(6, 'Jaswanth', 'Assistant professor', 'IT', 'Cloud Computing', 'Springer', 'al12', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `organizer` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`name`, `designation`, `title`, `organizer`, `date`) VALUES
('SVEC', 'Professor', 'CloudComputing', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'svec', '1234'),
(3, 'user', 'password'),
(4, 'test', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achlist`
--
ALTER TABLE `achlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rc`
--
ALTER TABLE `rc`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `rp`
--
ALTER TABLE `rp`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `rpub`
--
ALTER TABLE `rpub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achlist`
--
ALTER TABLE `achlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rpub`
--
ALTER TABLE `rpub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
