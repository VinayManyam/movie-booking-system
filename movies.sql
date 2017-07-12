-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 10:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinnema`
--

CREATE TABLE `cinnema` (
  `cid` int(5) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ccity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinnema`
--

INSERT INTO `cinnema` (`cid`, `cname`, `ccity`) VALUES
(1, '', 'select city'),
(2, 'PVRCinemas', 'Hyderabad'),
(3, 'Vimal Theater', 'Hyderabad'),
(4, 'Vijetha Movie Hall', 'Hyderabad'),
(5, 'PVR Cinemas Inorbit Mall', 'Hyderabad'),
(6, 'Carnival', 'Hyderabad'),
(7, 'Pushpanjali Theatre', 'bangalore'),
(8, 'HMT Cinema', 'bangalore'),
(9, 'Rex Theatre', 'bangalore'),
(10, 'PVR', 'bangalore'),
(11, 'Poornima Theatre', 'bangalore'),
(12, 'PVR Cinemas', 'bangalore'),
(13, 'Eros Cinema', 'Mumbai'),
(14, 'Regal Cinema', 'Mumbai'),
(15, 'Sterling Cineplex', 'Mumbai'),
(16, 'Capitol Cinema', 'Mumbai'),
(17, 'New Excelsior Mukta Cinema', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

CREATE TABLE `con` (
  `id` int(5) NOT NULL,
  `cid` int(5) NOT NULL,
  `pid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con`
--

INSERT INTO `con` (`id`, `cid`, `pid`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 1),
(15, 14, 1),
(26, 15, 1),
(27, 16, 1),
(28, 17, 1),
(67, 2, 2),
(68, 3, 3),
(69, 4, 4),
(70, 5, 5),
(71, 6, 6),
(72, 2, 3),
(73, 2, 4),
(74, 2, 5),
(75, 2, 6),
(76, 2, 7),
(77, 2, 8),
(78, 2, 10),
(80, 7, 2),
(81, 7, 3),
(82, 7, 4),
(83, 7, 5),
(84, 7, 6),
(85, 7, 7),
(86, 7, 8),
(87, 7, 10),
(88, 13, 2),
(89, 13, 3),
(90, 13, 4),
(91, 13, 5),
(92, 13, 6),
(93, 13, 7),
(94, 13, 8),
(95, 13, 10),
(96, 8, 8),
(97, 9, 10),
(98, 10, 10),
(99, 11, 2),
(100, 12, 2),
(101, 14, 4),
(102, 15, 5),
(104, 16, 6),
(105, 17, 7);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(5) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mrate` varchar(10) NOT NULL,
  `mdisc` varchar(200) NOT NULL,
  `mpic` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `genres` varchar(200) NOT NULL,
  `release` varchar(20) NOT NULL,
  `director` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `mname`, `mrate`, `mdisc`, `mpic`, `time`, `genres`, `release`, `director`) VALUES
(1, 'select movie', '9.2', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', '1.jpg', '', '', '0000-00-00', ''),
(2, 'The Shawshank Redemption', '9.2/10', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency', '1.jpg', '2h 22min', ' Crime, Drama', '14 October 1994', ' Frank Darabont '),
(3, 'Pulp Fiction', '9.1/10', 'The lives of two mob hit men, a boxer, a gangster&#039;s wife, and a pair of diner bandits intertwine in four tales of violence and redemption. ', '7.jpg', ' 2h 34min', 'Crime, Drama', ' 14 October 1994', 'Quentin Tarantino'),
(4, 'The Lord of the Rings: The Re', '8.9/10', 'Gandalf and Aragorn lead the World of Men against Sauron&#039;s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring. ', '8.jpg', '3h 21min', ' Adventure, Drama, Fantasy', ' 17 December 2003', ' Peter Jackson '),
(5, '12 Angry Men', '8.9/10', 'A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence. ', '5.jpg', ' 1h 36min ', 'Crime, Drama', 'April 1957 ', 'Sidney Lumet '),
(6, 'The Dark Knight', '8.6/10', 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, the Dark Knight must accept one of the greatest psychological and physical tests', '3.jpg', ' 2h 32min ', ' Action, Crime, Drama', ' 18 July 2008', ' Christopher Nolan '),
(7, 'Baby Driver', '9.1/10', 'After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.', '4.jpg', '1h 52min', ' Action, Crime, Music', '28 June 2017', ' Edgar Wright '),
(8, 'Upside Down', '8.8/10', 'An ordinary guy, Adam, defies the world and the laws of science to get back his childhood love, Eden, who lives in a different world.', '6.jpg', '1h 54min', ' Drama, Fantasy, Romance', ' 1 May 2013', ' Juan Solanas '),
(10, 'The Godfather', '9.2/10', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', '2.jpg', ' 2h 55min', ' Crime, Drama', '24 March 1972', ' Francis Ford Coppola ');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `tid` int(5) NOT NULL,
  `time` varchar(20) NOT NULL,
  `cid` int(5) NOT NULL,
  `mid` int(5) NOT NULL,
  `sid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`tid`, `time`, `cid`, `mid`, `sid`) VALUES
(1, 'select time', 0, 0, 0),
(2, '9:00M-11:00AM', 0, 0, 0),
(3, '11:00AM-1:00PM', 0, 0, 0),
(4, '2:00PM-4:00PM', 0, 0, 0),
(5, '4:00PM-6:00PM', 0, 0, 0),
(6, '6:00PM-8:00PM', 0, 0, 0),
(7, '9:00PM-11:00PM', 0, 0, 0),
(49, '', 2, 2, 5),
(50, '', 3, 3, 1),
(51, '', 4, 4, 1),
(52, '', 5, 5, 1),
(53, '', 6, 6, 1),
(54, '', 2, 3, 1),
(55, '', 2, 4, 1),
(56, '', 2, 5, 1),
(57, '', 2, 6, 1),
(58, '', 2, 7, 1),
(59, '', 2, 8, 1),
(60, '', 2, 10, 1),
(61, '', 7, 2, 1),
(62, '', 7, 3, 1),
(63, '', 7, 4, 1),
(64, '', 7, 5, 1),
(65, '', 7, 6, 1),
(66, '', 7, 7, 1),
(67, '', 7, 8, 1),
(68, '', 7, 10, 1),
(69, '', 13, 2, 1),
(70, '', 13, 3, 1),
(71, '', 13, 4, 1),
(72, '', 13, 5, 1),
(73, '', 13, 6, 1),
(74, '', 13, 7, 1),
(75, '', 13, 8, 1),
(76, '', 13, 10, 1),
(77, '', 2, 2, 2),
(78, '', 2, 2, 1),
(79, '', 2, 2, 4),
(80, '', 2, 3, 3),
(81, '', 2, 3, 4),
(82, '', 2, 3, 5),
(83, '', 2, 5, 2),
(84, '', 2, 5, 3),
(85, '', 2, 4, 3),
(86, '', 2, 4, 6),
(87, '', 2, 6, 3),
(88, '', 2, 6, 5),
(89, '', 7, 2, 2),
(90, '', 7, 2, 3),
(91, '', 7, 2, 4),
(92, '', 7, 3, 2),
(93, '', 7, 3, 4),
(94, '', 7, 4, 4),
(95, '', 7, 4, 6),
(96, '', 7, 5, 3),
(97, '', 7, 5, 5),
(98, '', 7, 6, 2),
(99, '', 7, 6, 4),
(100, '', 7, 7, 3),
(101, '', 7, 7, 4),
(102, '', 7, 8, 2),
(103, '', 7, 8, 5),
(104, '', 7, 10, 3),
(105, '', 7, 10, 4),
(106, '', 13, 2, 2),
(107, '', 13, 2, 4),
(108, '', 13, 2, 5),
(109, '', 13, 2, 3),
(110, '', 13, 3, 5),
(111, '', 13, 4, 4),
(112, '', 13, 4, 5),
(113, '', 13, 4, 6),
(114, '', 13, 5, 2),
(115, '', 13, 5, 5),
(116, '', 13, 5, 6),
(117, '', 13, 6, 3),
(118, '', 13, 6, 4),
(119, '', 13, 6, 6),
(120, '', 13, 7, 4),
(121, '', 13, 7, 5),
(122, '', 13, 7, 6),
(123, '', 13, 8, 2),
(124, '', 13, 8, 3),
(125, '', 13, 8, 5),
(126, '', 13, 10, 2),
(127, '', 13, 10, 4),
(128, '', 2, 7, 2),
(129, '', 2, 7, 4),
(130, '', 2, 7, 6),
(131, '', 2, 8, 3),
(132, '', 2, 8, 4),
(133, '', 2, 8, 5),
(134, '', 2, 10, 3),
(135, '', 2, 10, 4),
(136, '', 2, 10, 6),
(137, '', 3, 3, 3),
(138, '', 3, 3, 6),
(139, '', 4, 4, 6),
(140, '', 5, 5, 2),
(141, '', 5, 5, 3),
(142, '', 6, 6, 2),
(143, '', 6, 6, 3),
(144, '', 4, 4, 5),
(145, '', 8, 8, 2),
(146, '', 8, 8, 3),
(147, '', 9, 10, 3),
(148, '', 9, 10, 6),
(149, '', 10, 10, 2),
(150, '', 10, 10, 3),
(151, '', 11, 2, 2),
(152, '', 11, 2, 5),
(153, '', 12, 2, 3),
(154, '', 12, 2, 4),
(155, '', 8, 8, 1),
(156, '', 9, 10, 1),
(157, '', 10, 10, 1),
(158, '', 11, 2, 1),
(159, '', 12, 2, 1),
(160, '', 14, 4, 2),
(161, '', 14, 4, 1),
(162, '', 14, 4, 3),
(164, '', 15, 5, 1),
(165, '', 15, 5, 2),
(170, '', 16, 6, 2),
(171, '', 16, 6, 5),
(172, '', 17, 7, 2),
(173, '', 17, 7, 3),
(174, '', 17, 7, 1),
(175, '', 16, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinnema`
--
ALTER TABLE `cinnema`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `con`
--
ALTER TABLE `con`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinnema`
--
ALTER TABLE `cinnema`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `con`
--
ALTER TABLE `con`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
