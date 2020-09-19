-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 11:43 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slakpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `school`, `degree`, `date`, `info`) VALUES
(1, 'St Lawrence College', 'BSc. Computer Science and Intimation Technology', '2014-2018', 'My study is still running in Bachelor\'s Degree with Computer Science & Information Technology (CSIT). I am equipped with full fundamental course for computer science and IT background.');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permission`) VALUES
(1, 'Standard', ''),
(2, 'Administrator', '{\"admin\": 1,\"moderator\":1}');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `home` text NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `gplus` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `name`, `about`, `home`, `address1`, `address2`, `mobile`, `email`, `website`, `facebook`, `twitter`, `gplus`, `linkedin`, `instagram`, `github`, `skype`) VALUES
(1, 'Lakpa Sherpa', 'I am passionate about building excellent software that improves the lives of those around me. Iâ€™ve always sought out opportunities and challenges that are meaningful to me. I specialize in creating software for clients ranging from individuals and small-businesses all the way to large enterprise corporations. All of my work is produced locally from Kathmandu, Nepal. What would you do if you had a software expert available at your fingertips?', 'I\'m <span>Software Engineer</span> living in Kathmandu Nepal. Innovation is my passion.  I make awesome and effective applications, usually with php and python. Let\'s <a class=\"smoothscroll\" href=\"#about\">start scrolling</a> and learn more <a class=\"smoothscroll\" href=\"#about\">about me</a>.', 'Milan Chowk Galli 02', 'Budhanilkantha, Kathmandu, Nepal ', '(+977)9849-446627', 'sherpalakpa18@gmail.com', 'www.slakpa.com.np', 'www.facebook.com/slakpa.com.np', 'www.twitter.com/slakpa_com_np', 'www.plus.google.com/106263177897716721032', 'www.linkedin.com/in/slakpa-com-np', 'www.instagram.com/slakpa.com.np', 'www.github.com/sherpalakpa18', 'join.skype.com/invite/gvgjDDWxRGVd');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(15, 'Lakpa Sherpa', 'sherpalakpa18@gmail.com', 'Helo', 'Hello again. hahahahhaha\r\ni am so tired.', '2020-02-09 10:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `info` text NOT NULL,
  `techno` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `mimage` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `category`, `info`, `techno`, `image`, `mimage`, `link`) VALUES
(1, 'RECOMMENDER SYSTEM', 'Machine Learning', 'This recommendation system is written with server side language and uses data dictionary to itâ€™s input for prediction. So the application user is responsible for feeding data to engine. To remove code redundancy, it is written in OOP which can used by creating itâ€™s object when required. This simplified filtering system can be used on a site with a few thousand items and members. But as the number of items grows it will be time consuming to calculate the recommendations every time someone purchases or browses an item. It assumes that developer has feed input according to user â€“ item format.\r\n\r\nCheck out itâ€™s Repo > https://github.com/sherpalakpa18/basicRE', 'PHP, ML, Recommder System ', 'images/portfolio/re1.jpg', 'images/portfolio/re1.jpg', '#'),
(2, 'PORTFOLIO MANAGEMENT SYSTEM', 'Web', 'Portfolio Management System is personal/agency portfolio management system or template built over PHP. It is built using Object oriented paradigm so itâ€™s core function and classes can be used on another projects too. I built initially to host on my website but it resides on my portfolio.\r\nIt has used design created by ceeve. Special thanks to ceeve.com for making project successful.Click here to check out repository of this project.  ->  Repo  <-', 'HTML, CSS, Bootstrap, Javascript, Jquery, PHP, MySQL, OOP, CMS  ', 'images/portfolio/portfolio1.jpg', 'images/portfolio/portfolio1.jpg', '#'),
(3, 'HOW? BLOG', 'Web', 'I built this blog while I was in Third year. This is web application(Laravel) that enables users to write or view posts on particular errors i.e how to solve error.', 'HTML, CSS, Bootstrap, Javascript, Jquery, PHP, Laravel, MySQL, OOP, CMS  ', 'images/portfolio/how1.jpg', 'images/portfolio/how1.jpg', '#'),
(4, 'LIBRARY MANAGEMENT SYSTEM', 'Web', 'The project facilitates to bookmark books and even publish or download student mark-sheets.', 'HTML, CSS, Bootstrap, Javascript, Jquery, PHP, MySQL, OOP, CMS  ', 'images/portfolio/lms1.jpg', 'images/portfolio/lms1.jpg', '#'),
(5, 'Nepal Stock Scrapper', 'PHP', 'A data API that serves market information and stock prices from Nepal Stock Exchange\'s website as JSON. The data is obtained by scraping web pages. It scrapes the website on every request. Since this is scraped data, it will break with changes to NEPSE\'s website design.', 'PHP, CSS selector, Web scrapper  ', 'images/portfolio/scrapper.png', 'images/portfolio/scrapper.png', '#'),
(6, 'TJUNGS TRACSEC', 'Web', 'The project done was about an online management portal. I was hires as back end coder to develop pages that focus on codify tracking device CMS system flow.', 'HTML, CSS, Bootstrap, Javascript, Jquery, PHP, MySQL, OOP, CMS  ', 'images/portfolio/tjungs1.jpg', 'images/portfolio/tjungs1.jpg', '#'),
(7, 'TRAVEL BLOG', 'Web', 'This is travel personal blog designed for pemba sherpa.', 'HTML, CSS, Bootstrap, Javascript, Jquery, PHP, MySQL, OOP, CMS  ', 'images/portfolio/travel1.jpg', 'images/portfolio/travel1.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`) VALUES
(1, 'HTML', 85),
(2, 'CSS', 65),
(3, 'Javascript', 75),
(5, 'React', 60),
(6, 'PHP', 85),
(7, 'Laravel', 70),
(8, 'MySQL', 70),
(9, 'Redshift', 65),
(10, 'Redis', 60),
(11, 'RabbitMQ', 60),
(12, 'Python', 75),
(13, 'flask', 60);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `qouter` varchar(50) NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `qouter`, `quote`) VALUES
(1, 'Sandesh Jonchhe', 'When it comes to dedication, this guy has dedication like no on else. I had an absolute ball of a time while working with him in the college project. Looking forward to work on many more projects in the future. '),
(2, 'Steve Jobs', 'Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven\'t found it yet, keep looking. Don\'t settle. As with all matters of the heart, you\'ll know when you find it. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `joined`, `group`) VALUES
(10, 'sherpalakpa18', '7679a52f7140af877c3b7455e0acacc6102568177a1b12afbcb053291ec8e916', 'SŠwQNjŒS}h”F\Z?6ªÆ™„ùÈ™^¼Ìëæ>', 'Lakpa Sherpa', '2017-09-13 06:12:15', 2),
(12, 'tester123', '451d403e72175a8d7166d9bfc1d26e0bbcb409cc76f5a201f89f010a3fea7407', 'u°C˜¬ïà*|t½¯ÜF]xšª7—^åþ×â ™ä', 'Testing Person', '2017-10-04 12:08:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `post` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `info` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `company`, `post`, `date`, `info`) VALUES
(1, 'Tjungs Tech. ltd.', 'Web Developer', 'Sep - Nov 2016', 'Worked as PHP developer and developed Tracsec Interface.\r\n<ul class=\"work-list\">\r\n<li>Developed platform for admin to manage tracking devices and provides devices to customers.</li>\r\n<li>Developed platform for Customer to manages tracking devices, check locations in Map and view device reports.</li>\r\n</ul>\r\n<ul class=\"tech\">\r\n<li>HTML</li>\r\n<li>CSS</li>\r\n<li>Bootstrap</li>\r\n<li>Javascript</li>\r\n<li>JQuery</li>\r\n<li>PHP</li>\r\n<li>MySQL</li>\r\n<li>Google Map</li>\r\n</ul>'),
(2, 'GrowByData Services', 'Intern Developer', 'Sep - Dec 2018', 'Worked as Laravel Developer and gave support to Competitor Price Intelligence application(CPI).\r\n<ul class=\"work-list\">\r\n<li>Developed Internal Report Dashboard.</li>\r\n<li>Develop flask API based Mail alert system for CPI completion alert</li>\r\n<li>Enhance CPI settings.</li>\r\n<li>Enhance Search Engine Result Page(SERP) keyword and rating reports. </li>\r\n<li>Magento Export Utility Bug fixes and support.</li>\r\n</ul>\r\n<ul class=\"tech\">\r\n<li>HTML</li>\r\n<li>CSS</li>\r\n<li>Bootstrap</li>\r\n<li>Javascript</li>\r\n<li>JQuery</li>\r\n<li>C3js</li>\r\n<li>PHP</li>\r\n<li>Laravel</li>\r\n<li>MySQL</li>\r\n<li>Redshift</li>\r\n<li>Python</li>\r\n<li>Flask</li>\r\n</ul>'),
(3, 'GrowByData Services', 'Software Engineer', '2018 - Present', 'Working as Associate Software Engineer and provide support to Competitor Price Intelligence application(CPI).\r\n<ul class=\"work-list\">\r\n<li>Enhance CPI reports using in-house report library aka v2reports.</li>\r\n<li>Develop Report Caching system.</li>\r\n<li>Develop Auto Trigger Report Cache system.</li>\r\n<li>Enhance Magento Export Utility and support.</li>\r\n<li>Support on various module of CPI application.</li>\r\n</ul>\r\n<ul class=\"tech\">\r\n<li>HTML</li>\r\n<li>CSS</li>\r\n<li>Bootstrap</li>\r\n<li>Javascript</li>\r\n<li>JQuery</li>\r\n<li>PHP</li>\r\n<li>Laravel</li>\r\n<li>MySQL</li>\r\n<li>Redshift</li>\r\n<li>Python</li>\r\n<li>Flask</li>\r\n<li>Redis</li>\r\n<li>RabbitMQ</li>\r\n</ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
