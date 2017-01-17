-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost:3306
-- Tid vid skapande: 17 jan 2017 kl 22:04
-- Serverversion: 5.5.49-log
-- PHP-version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `linkify`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `published` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `comments`
--

INSERT INTO `comments` (`commentid`, `post_id`, `uid`, `content`, `published`) VALUES
(10, 0, 6, 'Testing comment', '2017-01-15 15:53:29'),
(11, 0, 6, 'testing 2', '2017-01-16 09:04:06');

-- --------------------------------------------------------

--
-- Tabellstruktur `downvote`
--

CREATE TABLE IF NOT EXISTS `downvote` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `downvote`
--

INSERT INTO `downvote` (`id`, `post_id`, `user_id`) VALUES
(1, 15, 6);

-- --------------------------------------------------------

--
-- Tabellstruktur `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `published` datetime NOT NULL,
  `title` varchar(100) NOT NULL,
  `topic` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `posts`
--

INSERT INTO `posts` (`postid`, `uid`, `content`, `published`, `title`, `topic`) VALUES
(11, 6, 'Awesome content for gaming topic', '2017-01-15 13:55:54', 'Awesome title', 'Gaming'),
(12, 7, 'Simple movie post...', '2017-01-15 14:25:01', 'About movies', 'Movies/Tv-series'),
(13, 8, 'Some historical content.', '2017-01-15 15:16:57', 'History title', 'History'),
(14, 9, 'Some waterish content.', '2017-01-15 15:28:09', 'About water', 'Science'),
(16, 6, 'movie content testing again', '2017-01-17 10:47:14', 'Movie title', 'Gaming'),
(17, 10, 'gaming content8', '2017-01-17 20:19:05', 'gaming title', 'Gaming'),
(18, 10, 'some relevant content', '2017-01-17 20:58:34', 'history', 'Gaming');

-- --------------------------------------------------------

--
-- Tabellstruktur `tokens`
--

CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `one` varchar(128) NOT NULL,
  `two` varchar(256) NOT NULL,
  `expire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `upvote`
--

CREATE TABLE IF NOT EXISTS `upvote` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `upvote`
--

INSERT INTO `upvote` (`id`, `post_id`, `user_id`) VALUES
(63, 12, 6),
(64, 14, 9),
(65, 15, 6),
(66, 15, 6),
(67, 16, 6),
(68, 15, 6),
(69, 16, 6),
(70, 16, 6),
(71, 16, 6);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `avatar`) VALUES
(6, 'ando', 'andre.hjalmarsson1@gmail.com', '$2y$10$ouFWiD5oX2RasqpLnepbHuboCg6AwPJ90M6Oha2H5lFlN5OEGidbq', 'Andre Hjalmarsson', '8TDqZ02WEsNsVbQjFNM2FsthVGz4i5ar.jpg'),
(7, 'simpan', 'simp@nz.se', '$2y$10$hwht2sPo9hPUXsfSpiH64On4m564UgDKQz0H3Dr.v74nO/408tN3a', 'Simon Olsson', 'DCLQB9qYLqmuLvRwYhT2JajDAkwezz1s.jpg'),
(8, 'kent', 'kent@gmail.com', '$2y$10$dnAbrOtsY4T4gUNvnpPeSu80Vi732S/8JW7nJ8NO8sdK7HLCtVbk2', 'kent huss', 'BvUY0ymtGluODMpU9gBlKF8wRZCosDZm.jpg'),
(9, 'linnzor', 'linndam92@hotmail.com', '$2y$10$s01iopt1OaWXWcx9bC46QO0pM9R2J12oGoukkaGnkRUGgwPLvJ3xi', 'Linn Dam', 'P27YDqZ02WEsNsVbQjFNM2FsthVGz4i5.jpg'),
(10, 'Adam', 'adam@hej.se', '$2y$10$Hc6gak1Hlb1npUELENZifeRzvEG8kLPGjRR0g9MsggcLfSonC3GkW', 'Adam Karlsson', '3t0XhH6cVGQ3Dtqq6ACeqT90yjRoG15u.jpg'),
(11, 'Hans', 'hans.hjalmarsson@outokumpu.com', '$2y$10$wWKU.RmJtU17GrBopHt6weVD7ecylD4VZqkwbCqLxtrHS359bxo4a', 'Hans Karlsson', '');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`);

--
-- Index för tabell `downvote`
--
ALTER TABLE `downvote`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Index för tabell `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `upvote`
--
ALTER TABLE `upvote`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT för tabell `downvote`
--
ALTER TABLE `downvote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT för tabell `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `upvote`
--
ALTER TABLE `upvote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
