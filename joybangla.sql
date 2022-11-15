-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 07:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joybangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `sno` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sno`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ourcourses`
--

CREATE TABLE `ourcourses` (
  `id` int(11) NOT NULL,
  `course_title` varchar(55) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `image` varchar(55) NOT NULL,
  `course_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourcourses`
--

INSERT INTO `ourcourses` (`id`, `course_title`, `course_desc`, `image`, `course_fee`) VALUES
(53, 'PHP', 'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.', 'image/1668235510.png', 12),
(54, 'JavaScript', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for webpage behavior, often incorporating thir', 'image/1668237884.jpeg', 25),
(55, 'Laravel', 'Laravel is a free and open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony. ', 'image/1668238863.png', 21),
(56, 'Python', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, includi', 'image/1668238953.jpeg', 24),
(57, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', 'image/1668239002.png', 30),
(58, 'DevOps', 'DevOps is a set of practices that combines software development and IT operations. It aims to shorten the systems development life cycle and provide continuous delivery with high software quality. DevOps is complementary with Agile software development; s', 'image/1668239058.png', 10),
(61, 'Java', 'Java is  a programming Language', 'image/1668313028.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_courses`
--

CREATE TABLE `purchase_courses` (
  `sno_purchase` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_courses`
--

INSERT INTO `purchase_courses` (`sno_purchase`, `user_id`, `course_name`, `course_desc`, `image`) VALUES
(26, 16, 'React', 'React is a free and open-source front-end JavaScript library for building user interfaces based on UI components. It is maintained by Meta and a community of individual developers and companies.', 'image/1668234914.jpeg'),
(27, 16, 'PHP', 'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.', 'image/1668235510.png'),
(28, 16, 'JavaScript', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for webpage behavior, often incorporating thir', 'image/1668237884.jpeg'),
(29, 16, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', 'image/1668239002.png'),
(30, 16, 'Python', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, includi', 'image/1668238953.jpeg'),
(31, 16, 'DevOps', 'DevOps is a set of practices that combines software development and IT operations. It aims to shorten the systems development life cycle and provide continuous delivery with high software quality. DevOps is complementary with Agile software development; s', 'image/1668239058.png'),
(32, 16, 'Artificial intelligence', 'Artificial intelligence is intelligence - perceiving, synthesizing and infering information - demonstrated by machines, as opposed to intelligence displayed by animals and humans.', 'image/1668242971.jpeg'),
(33, 17, 'DevOps', 'DevOps is a set of practices that combines software development and IT operations. It aims to shorten the systems development life cycle and provide continuous delivery with high software quality. DevOps is complementary with Agile software development; s', 'image/1668239058.png'),
(34, 16, 'Laravel', 'Laravel is a free and open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony. ', 'image/1668238863.png'),
(35, 18, 'DevOps', 'DevOps is a set of practices that combines software development and IT operations. It aims to shorten the systems development life cycle and provide continuous delivery with high software quality. DevOps is complementary with Agile software development; s', 'image/1668239058.png'),
(36, 18, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', 'image/1668239002.png'),
(37, 18, 'JavaScript', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for webpage behavior, often incorporating thir', 'image/1668237884.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `user_image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `full_name`, `user_name`, `user_email`, `phone_number`, `pass`, `gender`, `user_image`) VALUES
(16, 'Ashiqur Rahman Karzon ', 'ashik_275', 'ashik@gmail.com', 1641053972, '12345678', 'Male', 'user_image/1668233942.jpg'),
(17, 'fahim ', 'imran', 'fahim@gmail.com', 1630283615, '12345', 'Female', NULL),
(18, 'Nusrat Jahan ', 'nusrat', 'nusrat@gmail.com', 138947738, '1234', 'Female', 'user_image/1668318581.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `ourcourses`
--
ALTER TABLE `ourcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_courses`
--
ALTER TABLE `purchase_courses`
  ADD PRIMARY KEY (`sno_purchase`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourcourses`
--
ALTER TABLE `ourcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `purchase_courses`
--
ALTER TABLE `purchase_courses`
  MODIFY `sno_purchase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
