-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 10:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instaapp_test_sevima`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_comments`
--

CREATE TABLE `detail_comments` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_comments`
--

INSERT INTO `detail_comments` (`id_post`, `id_user`, `comment`) VALUES
(1, 3, 'up'),
(1, 3, 'up'),
(1, 1, 'hallo'),
(2, 3, 'up');

-- --------------------------------------------------------

--
-- Table structure for table `detail_likes`
--

CREATE TABLE `detail_likes` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_likes`
--

INSERT INTO `detail_likes` (`id_post`, `id_user`) VALUES
(1, 3),
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_friends`
--

CREATE TABLE `list_friends` (
  `id_user_1` int(11) NOT NULL,
  `id_user_2` int(11) NOT NULL,
  `isCloseFirend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `upload_time` datetime DEFAULT NULL,
  `isCloseFriend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `image`, `caption`, `upload_time`, `isCloseFriend`) VALUES
(1, 3, '', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste in illum numquam voluptates magni porro illo deleniti modi sit maxime vel dolorem reiciendis, animi, suscipit officia, veritatis consectetur odio dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore beatae quo ad nesciunt pariatur? Ea vero architecto iste adipisci, magni ipsum in tempore sit voluptatum tenetur similique fugiat explicabo repellendus?', '2021-06-24 10:13:09', 0),
(2, 1, '101429-6wnWGEM8pJvgXsBtRhcx.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste in illum numquam voluptates magni porro illo deleniti modi sit maxime vel dolorem reiciendis, animi, suscipit officia, veritatis consectetur odio dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore beatae quo ad nesciunt pariatur? Ea vero architecto iste adipisci, magni ipsum in tempore sit voluptatum tenetur similique fugiat explicabo repellendus?', '2021-06-24 10:14:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile_picture`, `email`, `password`, `birthday`, `gender`) VALUES
(1, 'Yusuf Fahrizal', 'Yusuf Fahrizal-1.JPG', 'yusuf@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-24', 1),
(3, 'adi budiman', NULL, 'adi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
