-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 12:32 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Web Development'),
(2, 'Mobile Development'),
(3, 'Software Development'),
(4, 'Game Development'),
(5, 'UI/UX Development'),
(6, 'AI Development'),
(7, 'Embed Products');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`) VALUES
(1, '', '', 'MSG TEST', '2018-11-27 12:20:02'),
(2, '', '', 'CHECK 2', '2018-11-27 12:20:27'),
(3, '', '', '<br />\r\n<b>Notice</b>:  Undefined variable: sql in <b>C:xampphtdocsSHUBHAMselfit\new_chat.php</b> on line <b>81</b><br />\r\ndrhrh', '2018-11-27 12:27:45'),
(4, '', '', 'rgrgerg', '2018-11-27 12:29:25'),
(5, '', '', 'check successfully\r\n', '2018-11-27 12:31:25'),
(6, '', '', 'noooodvvsooo', '2018-11-28 05:17:35'),
(7, '', '', 'sDfgvaerge', '2018-11-29 10:51:26'),
(8, '', '', 'sdvsvsd', '2018-11-29 10:51:51'),
(9, '', '', 'check send details', '2018-11-29 11:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `img` text NOT NULL,
  `contact` int(13) NOT NULL,
  `ip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `lname`, `email`, `password`, `country`, `state`, `img`, `contact`, `ip`) VALUES
(1, 'aaaaaa', 'eeeeeeeee', 'abc@gmail.com', '123', 'India', 'Mumbai', ' client_photos/Penguins.jpg', 74185633, 0),
(2, 'rahul', 'gggg', 'xyz@gmail.com', '123', 'India', 'Mumbai', ' client_photos/Chrysanthemum.jpg', 74185633, 0);

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `developer_id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `categories` text NOT NULL,
  `skills` varchar(200) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `contact` int(13) NOT NULL,
  `img` text NOT NULL,
  `bio` varchar(400) NOT NULL,
  `ip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`developer_id`, `fname`, `lname`, `email`, `password`, `categories`, `skills`, `country`, `state`, `contact`, `img`, `bio`, `ip`) VALUES
(1, 'rahul', 'gggg', 'abc@gmail.com', 'asdf', 'Software Development', 'dbrfvbrbfb', 'India', 'New Delhi', 74185633, 'developer/developer_photos/2.png', ' vb v vc c ', 0),
(2, 'wfef', 'sdvv', 'xyz@gmail.com', '1234', 'Game Development', 'php fbbsb', 'India', 'New Delhi', 12345678, 'developer_photos/Hydrangeas.jpg', 'ru6uj', 0),
(3, 'drgg', 'dfbdb', 'abc@gmail.com', 'f123', 'UI/UX Development', 'php fbbsb', 'India', 'New Delhi', 741852963, 'developer_photos/Tulips.jpg', 'fgnrfn', 0),
(4, 'fgmn', 'fgymym', 'abc@gmail.com', '123', 'Game Development', 'php fbbsb', 'India', 'New Delhi', 74185296, 'developer_photos/phpFB48.tmp', 'xc x ', 0),
(5, 'rahul', 'gggg', 'xyz@gmail.com', '123', 'UI/UX Development', 'jhmgcvjvjhjcg', 'India', 'Mumbai', 0, 'developer_photos/Lighthouse.jpg', 'dfbrh', 0),
(6, 'new', 'new', 'abc@gmail.com', '123', 'Game Development', 'php fbbsb', 'India', 'New Delhi', 4574378, 'developer_photos/Lighthouse.jpg', 'dfbfrbh', 0),
(7, 'new1', 'new1', 'abc@gmail.com', '123', 'Embed Products', 'dbrfvbrbfb', 'India', 'Mumbai', 45786, 'developer_photos/Jellyfish.jpg', 'fgnxdf', 0),
(8, 'new', 'new', 'abc@gmail.com', '123', 'Game Development', 'jhmgcvjvjhjcg', 'India', 'Chennai', 2147483647, 'developer_photos/Hydrangeas.jpg', ',cgj,,cggh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `job_category` text NOT NULL,
  `project_type` text NOT NULL,
  `apis` text NOT NULL,
  `project_stage` text NOT NULL,
  `description` varchar(5000) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `hire_developer` text NOT NULL,
  `budget` int(100) NOT NULL,
  `ip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_category`, `project_type`, `apis`, `project_stage`, `description`, `skills`, `hire_developer`, `budget`, `ip`) VALUES
(1, 'Web Development', 'One Time Project', 'Payment Processor', 'I just have a concept', 'jkdfgsafgjkdsxfgvbksdvgkcvkjkjs', 'python', 'Beginner', 10000, 0),
(2, 'Mobile Development', 'One Time Project', 'Other APIs', 'I just have a concept', 'rerghrehh', 'dherherhje', 'Intermediate', 100000, 0),
(3, 'Web Development', 'One Time Project', 'Cloud Storage', 'I have specifications', 'sdvSDvsd', 'dherherhje', 'Beginner', 1000000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`developer_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `developer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
