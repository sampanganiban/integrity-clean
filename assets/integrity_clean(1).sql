-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2015 at 03:26 am
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `integrity_clean`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_enquiries`
--

CREATE TABLE IF NOT EXISTS `customer_enquiries` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` tinyint(3) unsigned NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` tinyint(3) unsigned NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(160) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `name`) VALUES
(1, 'Integrity Clean | Home', 'Integrity Clean does commerical cleaning in Wellington', 'home'),
(2, 'Integrity Clean | About Us', 'Learn more about Integrity Clean', 'about'),
(3, 'Integrity Clean | Our Services', 'Check out the commercial cleaning services in Wellington, New Zealand', 'services'),
(4, 'Integrity Clean | Get a Quote', 'Book a quote, it''s simple and quick with Integrity Clean for commercial cleaning ', 'quote'),
(5, 'Integrity Clean | Testimonials', 'Check out what our clients have said about our commercial cleaning services ', 'testimonials'),
(6, 'Integrity Clean | Contact Us', 'Contact Integrity Clean for any questions about our cleaning services', 'contact'),
(7, 'Error 404', 'Sorry, we can not find what you are looking for', 'error'),
(8, 'Integrity Clean | Register an Account', 'Register an account with us to be updated on all our latest news about Integrity Clean', 'register'),
(9, 'Integrity Clean | Account', 'Your account with Integrity Clean', 'account'),
(10, 'Integrity Clean | Logout', 'Logged out', 'logout'),
(11, 'Integrity Clean | Login', 'Login your Integrity Clean account', 'login'),
(12, 'Integrity Clean | Place your Quote', 'Get a quote and we will contact you as soon as possible', 'main-quote');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time_quote_placed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `name`, `company_name`, `email`, `time_quote_placed`) VALUES
(10, 'TestOne', 'Test One', 'test1@gmail.com', '2015-11-17 01:17:16'),
(11, 'TestTwo', 'TestTwo', 'test2@gmail.com', '2015-11-17 01:18:56'),
(13, 'Bruce', 'Wayne Inc', 'batman@not.com', '2015-11-18 00:30:40'),
(16, 'Samantha', 'Company Name', 'samantha.isabellechivon@gmail.com', '2015-11-18 01:54:31'),
(17, 'Samantha', 'Company Name Co.', 'samanthaisabelle.panganiban@gmail.com', '2015-11-22 23:10:18'),
(18, 'Test', 'Test Co.', 'test2@gmail.com', '2015-11-23 00:18:42'),
(19, 'Samantha', 'Company Co.', 'samanthaisabelle.panganiban@gmail.com', '2015-11-23 23:39:05'),
(20, 'Summer', 'Summer Co.', 'samanthaisabelle.panganiban@gmail.com', '2015-11-24 23:39:30'),
(21, 'Ben', 'ben co', 'ben@ben.com', '2015-11-25 00:45:45'),
(22, 'hdfg', 'dfgdfg', 'dfgdfg', '2015-11-25 00:48:49'),
(23, 'asdf', 'asdf', 'asdf', '2015-11-25 00:49:40'),
(24, 'asfasfa', 'Com Co', 'samanthaisabelle.panganiban@gmail.com', '2015-11-26 23:12:00'),
(25, 'Test', 'Company Inc', 'samanthaisabelle.panganiban@gmail.com', '2015-11-26 23:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `time_review_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `comment`, `time_review_added`) VALUES
(14, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, dolore voluptate iste labore qui esse illo saepe, dolor minus ullam magnam, numquam aliquam suscipit quia autem. Accusantium aliquam ullam repellendus.', '2015-11-26 02:39:16'),
(15, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, dolore voluptate iste labore qui esse illo saepe, dolor minus ullam magnam, numquam aliquam suscipit quia autem. Accusantium aliquam ullam repellendus.', '2015-11-26 02:39:19'),
(16, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, dolore voluptate iste labore qui esse illo saepe, dolor minus ullam magnam, numquam aliquam suscipit quia autem. Accusantium aliquam ullam repellendus.', '2015-11-26 02:39:21'),
(17, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, dolore voluptate iste labore qui esse illo saepe, dolor minus ullam magnam, numquam aliquam suscipit quia autem. Accusantium aliquam ullam repellendus.', '2015-11-26 02:39:23'),
(18, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipi', '2015-11-26 02:39:28'),
(19, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, dolore voluptate iste labore qui esse illo saepe, dolor minus ullam magnam, numquam aliquam suscipit quia autem. Accusantium aliquam ullam repellendus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, dolore voluptate iste labore qui esse illo saepe, dolor minus ullam magnam, numquam aliquam suscipit quia autem. Accusantium aliquam ullam repellendus.', '2015-11-26 02:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `privilege` enum('admin','user') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `privilege`) VALUES
(10, 'admin', 'admin@admin.com', '$2y$10$3rSYRr3arDaGRGqsFTOo5eaHbLaalK6ASW9WNSHzxt2GXflq.WaUe', 'admin'),
(11, 'user', 'user@user.com', '$2y$10$Ic96SNshYzA9cSqouXbfDOjxcgXWvVP8p.e8nSRkoNeqjX3WHkUJ6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_enquiries`
--
ALTER TABLE `customer_enquiries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_enquiries`
--
ALTER TABLE `customer_enquiries`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
