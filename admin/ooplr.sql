-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2017 at 06:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ooplr`
--

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
(1, 'lakpa', 'password', 'salt', 'lakpa', '2017-09-11 00:00:00', 1),
(10, 'sherpalakpa18', '7679a52f7140af877c3b7455e0acacc6102568177a1b12afbcb053291ec8e916', 'SŠwQNjŒS}h”F\Z?6ªÆ™„ùÈ™^¼Ìëæ>', 'Lakpa Sherpa', '2017-09-13 06:12:15', 2),
(11, 'love2test', '6f707b3bdd80798e464b124ba2b020b2a66d9f2694a5890c3b71c7e0d70c7234', 'ÇA@{K›‚lÖGåÓ©›O¸ã®e{bä³m\rw', 'Testing Team', '2017-09-13 06:13:19', 1),
(12, 'sherpalakpa', 'd780e26777a75ee4434c084b67937fe2b9a3515b76b31df4199c48f7873d8f25', 'Qw(Ÿ‚üQEŽ3(®9¸ÏÁ·ÐÐ¾€GÜv', 'Sherpa Lakpa', '2017-09-13 06:17:22', 1),
(13, 'sherpaasdf', 'f9d73e72dda9ad8b2331dbd3dbc74f07f93aaf8a0f531bb591fe5717e68ab6d9', 'èÏ(þ²ƒvâW´éØîVø°Ba°ËÃâ6\'o*^', 'asdfasdf', '2017-09-13 06:20:13', 1),
(14, 'asdfasdf', '8e1f5433d718260344052164e286473bccff36a271f1a4d2d818e6fb17a1f72a', '\"kÚWè“rÌúøññKTNpè¸òÿ¬‘§CCé_º', 'asdfasdf', '2017-09-13 06:21:18', 1),
(15, 'asdfasdf11', '53fed6cf08c51823344d4cc28fdec7c6128d5ca0479aab5bb6424de2a8301df0', 'ä+3þ™wãWî}wIÁÀt–H”:}¨f‘¿½¨µÒÊ', 'asdfasdf', '2017-09-13 06:22:35', 1),
(16, 'asdfasdfA', 'f92935e3499a112b81b7f8f7a35e7acede07b47b0f25ba1f0b74d25ad2514542', 'QÎÜðèï©¡^yhPBcÙíÝ©Îæ\0:(077Ô€', 'asdfasdf', '2017-09-13 09:04:51', 1),
(17, 'iiopipo', '2313bdea9b450e5da1eb358a47b62d3366fafc2c86862edf8a380b703da76953', 'HŸä)ÿC x½ÀÜÜõ»äS5ƒ@S×©Š4”ªäS', 'asdfasdf', '2017-09-13 09:46:06', 1),
(18, 'asvavo', '4aa0f29571b9d0bdf9c2872fbc7340a9ae7f679188d003f3c1aaf270cc00615a', 'Œòa<ü¬ŽÜ‡Ó Ò@ûb¼`PÐyi¡M‘~z´', 'asdfasdfkjdhknca', '2017-09-13 09:48:14', 1),
(19, 'ncunscln', 'e3fece1d202f349db6882f09e3cb627f3781aef544575d0c1acf81f2e4259887', '\r`ƒ½[l&À=Ø=ï™fÒ¸ G%¯eá‹›Ža!±˜÷', 'asdfansdcvasodc', '2017-09-13 09:48:50', 1),
(20, 'ncunscln1', 'f026dcfbc2c9e3b15e6741a560cf2aeee7eba36ba8aaf9533a4eaebe85b6e27b', 'NÇ¶«ïç|Þ4	x®êü\Zaý;Õì=oªA×Á', 'asdfansdcvasodc', '2017-09-13 09:49:17', 1),
(21, 'ncunscln11', 'b10030cfc0eef8e9523a2fffb8b20b14a91bc8e05e95dc2e163c30b123b08b08', 'Œ²ùq\nŒÑh¥ÎØ›³ÆÝVÈƒèÊóÏ,UZl', 'asdfansdcvasodc', '2017-09-13 09:49:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_session`
--

INSERT INTO `users_session` (`id`, `user_id`, `hash`) VALUES
(5, 10, '179a045ae178897fa132aff9c5bf2b35600ae28a490a5a0db3388f2a71079415');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
