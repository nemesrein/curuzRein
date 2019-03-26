-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 01:53 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_tbl`
--

CREATE TABLE `info_tbl` (
  `id` int(15) NOT NULL,
  `f_name` varchar(55) NOT NULL,
  `l_name` varchar(55) NOT NULL,
  `about_me` text NOT NULL,
  `username` varchar(55) NOT NULL,
  `passwordd` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_tbl`
--

INSERT INTO `info_tbl` (`id`, `f_name`, `l_name`, `about_me`, `username`, `passwordd`) VALUES
(1, 'reiner', 'asis', 'Hi Im <b>Reiner</b>,<br> A 23 years old Computer Science Graduate...<br>\r\n I\'ve been studying web development/programming for years<br>\r\n and it took a long time to develop my passion in doing it...<br> why i want to pursue this path?<br>\r\n-it helps me think and learn<br>\r\n-i like technology<br>\r\n-and creating a system that will be used by somebody and knowing that it helps them<br>\r\nis just overwhelming\r\n\r\n', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `dates` varchar(25) NOT NULL,
  `viewed` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `email`, `message`, `dates`, `viewed`) VALUES
(3, 'asisreiner@yahoo.com', 'This is nice', '03-10-2019 11:02:00pm', 0),
(4, 'asisreiner@yahoo.com', 'fasfas', '03-12-2019 07:12:46pm', 0),
(5, 'asisreiner@yahoo.com', 'dfas', '03-13-2019 08:33:55pm', 0),
(6, 'asisreiner@yahoo.com', 'dfas', '03-13-2019 08:33:55pm', 0),
(7, 'asisreiner78@gmail.com', 'afasfs', '03-13-2019 08:34:04pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects_tbl`
--

CREATE TABLE `projects_tbl` (
  `project_id` int(15) NOT NULL,
  `title` varchar(85) NOT NULL,
  `image` varchar(55) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_tbl`
--

INSERT INTO `projects_tbl` (`project_id`, `title`, `image`, `description`, `status`) VALUES
(25, 'online reservation system', '805img.png', 'An E-Commerse System project that my team and i created in our third year of college.', 'unfinished'),
(26, 'inventory system', '589img.png', 'A simple project', 'unfinished'),
(28, 'jack en poy', '532img.png', 'A  project that is just for fun', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `project_modules`
--

CREATE TABLE `project_modules` (
  `module_id` int(15) NOT NULL,
  `project_id` int(15) NOT NULL,
  `module_name` varchar(55) NOT NULL,
  `progress` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills_tbl`
--

CREATE TABLE `skills_tbl` (
  `skill_id` int(15) NOT NULL,
  `title` varchar(85) NOT NULL,
  `description` varchar(100) NOT NULL,
  `progress` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_tbl`
--

INSERT INTO `skills_tbl` (`skill_id`, `title`, `description`, `progress`) VALUES
(1, 'php', 'Hypertext Preprocessor (or simply PHP) is a general-purpose programming language originally designed', 80),
(2, 'javascript', 'a programming language for front-ends a lightweight, interpreted, object-oriented language with firs', 73),
(3, 'html', 'the skeleton of a web structure', 85),
(4, 'css', 'a stylesheet that we used to design webpage', 80),
(7, 'codeigniter', 'PHP framework Light weight, MVC Pattern ', 50),
(8, 'Git', 'version control', 30),
(9, 'mysql', 'application software that lets you create a server', 70),
(10, 'jquery', 'A javascript framework', 65),
(11, 'bootstrap', 'html and css framework', 70),
(12, 'SASS', 'a css preprocessor', 45);

-- --------------------------------------------------------

--
-- Table structure for table `topics_tbl`
--

CREATE TABLE `topics_tbl` (
  `id` int(15) NOT NULL,
  `title` varchar(65) NOT NULL,
  `link` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_tbl`
--
ALTER TABLE `info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_modules`
--
ALTER TABLE `project_modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `skills_tbl`
--
ALTER TABLE `skills_tbl`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `topics_tbl`
--
ALTER TABLE `topics_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_tbl`
--
ALTER TABLE `info_tbl`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  MODIFY `project_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `project_modules`
--
ALTER TABLE `project_modules`
  MODIFY `module_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills_tbl`
--
ALTER TABLE `skills_tbl`
  MODIFY `skill_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `topics_tbl`
--
ALTER TABLE `topics_tbl`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
