-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 08:59 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoenix_tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `student` varchar(2000) NOT NULL,
  `event` varchar(2000) NOT NULL,
  `staff` varchar(2000) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about`, `student`, `event`, `staff`, `update_date`) VALUES
(1, '           <h3 class=\"text-uppercase mt-15\">Welcome To <span class=\"text-theme-color-2\">  Phoenix Tutorials </span></h3>\n              <p class=\"lead\">Welcome to Phoenix Tutorial it has been a rewarding, worth while and successful journey since 2015,<strong>PHOENIX TUTORIALS</strong> in Elphinstone Road B.M.Marg, Mumbai - 13 has beenan admirably purposeful,determined and has had unwavering focus on eduction.</p>\n              <p class=\"mb-15\">Our efforts are advancing from PrimaryLevel,Secondary and to Higher Secondary Level. As an institude we believe we are responsible not just for enabling our students to get through their exams, but for building the foundations and strengthning the basics that will enable them to shine at later stages in their career and get successful,</p>\n              <p class=\"mb-10\">Over these years, our devotion and allegiance has been respected and well appreciated by our students.</p>\n<p class=\"mb-10\">Our Philosophy and efforts have always been directed towareds creating conducive environment which would assist our students to maximize their potential by generating love for the respective subjects.</p>	\n<h5 class=\"text-uppercase mt-15\">Core <span class=\"text-theme-color-2\">  Strength  </span></h5>\n<p class=\"mb-10\"> Our faculty comprises of experienced teachers having a thorough knowledge and command of their respective subject, and is ableto answer allqueries as required. This is our pride and unstoppable commitment for excellence.</p><br>\n<p>Phoenix Titorials therefore offers you a complete package giving a student friendly atmosphere with an affordable fees structure as well.</p>\n										\n									  	\n									         ', '', '', '', '2018-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `s_id`, `name`, `class`, `status`, `created_at`) VALUES
(33, 1, 'rohaan', 'Primary', 'P', '2018/03/08'),
(34, 30, 'rohaan', 'Higher Secondary', 'H', '2018/03/08'),
(35, 32, 'Teth', 'computer-hardware', 'A', '2018/03/08'),
(38, 1, '', 'Secondary', 'A', '12-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `phone`, `message`, `status`, `created_at`) VALUES
(1, 'Fayez Baig', 'fayezbaig16@gmail.com', 'Adminssion', '8451915838', 'asdsada', '', '2009-03-18 00:00:00'),
(2, 'asdfghj', 'abc@gmail.com', 'math', '1234567890', 'dsfgvbnm', '', '2010-03-18 00:00:00'),
(3, 'Babsbs', 'fa@gmail.com', 'Bxbdbff', '1234567890', 'BxbdbffbBxbdbffbBxbdbffbnfnfn', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_duration`, `course_date`) VALUES
(1, 'Primary', '6 Months', '23 Feb');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `event_description` varchar(2000) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `event_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_title`, `event_date`, `event_description`, `event_location`, `event_image`, `event_update`) VALUES
(1, 'Test', '13 March, 2018', ' Test', 'Parel', '15211205770.jpeg', '2018-03-15'),
(2, 'CAREER GUIDANCE', '03 April, 2018', ' After completing SSC what to do ???\r\nMeet Prof Salunke A Senior IAS Officer, Ahmed Khan A Motivational Speaker and Jasmine Fernandise which is a Career Counsellor', 'PHOENIX TUTORIALS', '15224037190.jpeg', '2018-03-30'),
(4, 'Farewell', '11 April, 2018', ' ', 'classes', '15226670470.jpg', '2018-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `discription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `discription`, `created`, `modified`, `status`) VALUES
(6, 'demo', '2017-03-06', 'this is demo testing of calender', '2017-03-04 13:23:33', '2017-03-04 13:23:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `f_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`f_id`, `s_id`, `s_email`, `amount`, `type`, `status`, `created_at`) VALUES
(1, 32, '', '10000', 'Cash', 'Paid', '2018-03-05 07:55:49'),
(2, 1, '', '10000', 'Cash', 'Paid', '2018-03-05 07:59:07'),
(3, 1, '', '1000', 'Cash', 'Complete', '2018-03-05 08:30:27'),
(4, 30, '', '1200', 'Cash', 'Complete', '2018-04-02 17:21:50'),
(5, 47, '', '520', 'Cash', 'Paid', '2018-04-03 10:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image_title` varchar(100) NOT NULL,
  `image_description` varchar(50) NOT NULL,
  `image_file` varchar(255) NOT NULL,
  `created` varchar(20) NOT NULL,
  `updated` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `category`, `image_title`, `image_description`, `image_file`, `created`, `updated`) VALUES
(1, 'computer', 'Computer hardware', '  demo testing', '14866267050.jpeg', '1486626705', '1486634508'),
(14, 'Diploma', 'DIPLOMA', ' ', '15223975070.jpeg', '1522397507', '1522397507'),
(15, 'Diploma', 'DIPLOMA', ' ', '15223975071.jpeg', '1522397507', '1522397507'),
(16, 'Diploma', 'DIPLOMA', ' ', '15223975072.jpeg', '1522397507', '1522397507'),
(17, 'Diploma', 'DIPLOMA', ' ', '15223975073.jpeg', '1522397507', '1522397507'),
(18, 'Higher-Secondary', 'Classes Pics', ' ', '15223976670.jpeg', '1522397667', '1522397667'),
(19, 'Higher-Secondary', 'Classes Pics', ' ', '15223976671.jpeg', '1522397667', '1522397667'),
(20, 'Higher-Secondary', 'Classes Pics', ' ', '15223976672.jpeg', '1522397667', '1522397667'),
(21, 'Secondary', 'SECONDARY', ' ', '15223985900.jpeg', '1522398590', '1522398590'),
(22, 'Secondary', 'SECONDARY', ' ', '15223985901.jpeg', '1522398590', '1522398590'),
(23, 'Secondary', 'SECONDARY', ' ', '15223985902.jpeg', '1522398590', '1522398590'),
(24, 'Secondary', 'SECONDARY', ' ', '15223985903.jpeg', '1522398590', '1522398590');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `inq_name` varchar(255) NOT NULL,
  `inq_email` varchar(255) NOT NULL,
  `inq_phone` varchar(255) NOT NULL,
  `inq_course` varchar(255) NOT NULL,
  `inq_date` varchar(255) NOT NULL,
  `inq_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `inq_name`, `inq_email`, `inq_phone`, `inq_course`, `inq_date`, `inq_message`) VALUES
(7, 'shaikh rohaan', 'fayezbaig16@gmail.com', '8451915838', 'Diploma', '03/15/2018', 'sada'),
(8, 'jugad', 'jugad@gmail.com', '1234567890', 'Diploma', '03/12/2018', 'hello'),
(9, 'Shaikh Avesh Ibrahim', 'aveshshaikh2000@gmail.com', '8956254652', 'Diploma', '03/12/2018', 'can we meet at 4 pm'),
(10, 'Aahil sayyed', 'aahils23@gmail.com', '4563217456', 'Diploma', '04/07/2018', 'can we meet');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `image_file` varchar(20) NOT NULL,
  `pdf_file` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `upload_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `category`, `topic`, `image_file`, `pdf_file`, `description`, `upload_date`) VALUES
(1, 'Secondary', 'demo', '14915542880.jpeg', '14915542880.pdf', ' demo testing', '2017-04-07 01:38:08'),
(2, 'Secondary', 'sdfgfds', '15167295530.png', '15167295530.pdf', ' rgfdsasdfghn', '2018-01-23 23:15:53'),
(3, 'Diploma', 'JUGAD', '15207910410.jpeg', '15207910410.pdf', ' ', '2018-03-11 23:27:21'),
(4, 'Higher Secondary', 'JUGAD', '15207918860.jpeg', '15207918860.pdf', 'TEST\r\n', '2018-03-11 23:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `pop_title` varchar(100) NOT NULL,
  `pop_image` varchar(50) NOT NULL,
  `created` varchar(20) NOT NULL,
  `updated` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `pop_title`, `pop_image`, `created`, `updated`) VALUES
(3, 'test', '15157696590.jpeg', '2018-01-12 20:37:39', '2018-01-12 20:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_image` varchar(50) NOT NULL,
  `post_description` varchar(2500) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `update_date` varchar(20) NOT NULL,
  `like_num` bigint(10) NOT NULL,
  `dislike_num` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_image`, `post_description`, `post_tag`, `post_date`, `update_date`, `like_num`, `dislike_num`) VALUES
(1, 'first blog update', '14915537000.i', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.   ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', '14 February, 2017', '2017-04-07 01:28:20', 17, 4),
(2, 'post demo', '14865423850.i', ' adasdsfsdfdf', '', '08 February, 2017', '2017-02-08 13:56:25', 27, 5),
(3, 'Different types of stroke', '14865466190.i', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. ', '', '07 February, 2017', '2017-02-08 15:06:59', 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_rating`
--

CREATE TABLE `post_rating` (
  `rating_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_rating`
--

INSERT INTO `post_rating` (`rating_id`, `post_id`, `rating_number`, `total_points`, `created`, `modified`, `status`) VALUES
(11, 1, 10, 38, '2018-03-06 19:06:27', '2018-04-02 13:02:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `p_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_online`
--

CREATE TABLE `register_online` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `p_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` text NOT NULL,
  `update_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_online`
--

INSERT INTO `register_online` (`reg_id`, `name`, `email`, `phone`, `course`, `image`, `status`, `p_no`, `address`, `gender`, `dob`, `update_date`) VALUES
(1, 'rohaan', 'shaikhrohaan7@gmail.com', '4567891230', 'Higher Secondary', '15227333280.i', 'Active', 0, '', '', '', ''),
(3, 'test', 'test@online.com', '1234569875', 'Secondary', 'default.png', '', 0, '', '', '', '2017-04-03 01:44:36'),
(4, 'ajay', 'ajay@demo.com', '7894561235', 'Diploma', 'default.png', '', 0, '', '', '', '2017-04-03 02:28:27'),
(6, 'Email', 'test@email.com', '1234567895', 'Primary', 'default.png', '', 0, '', '', '', '2017-04-03 05:34:36'),
(19, 'test', 'ajdemo@gmail.com', '78555662586', 'Diploma', 'default.png', '', 0, '', '', '', '2017-04-04 02:15:25'),
(20, 'ajay', 'test@den.co', '45678952556', 'Secondary', 'default.png', '', 0, '', '', '', '2017-04-04 02:23:20'),
(21, 'terdr', 'as@gmil.com', '6532187311', 'computer-hardware', 'default.png', '', 0, '', '', '', '2017-04-04 02:27:12'),
(22, 'fdsfsdf', 'sfsdf@dsf.cld', '8465321213', 'Networking', 'default.png', '', 0, '', '', '', '2017-04-04 02:55:21'),
(23, 'sdfb', 'cbxnc@vbd.com', '8465132114', 'Security', 'default.png', '', 0, '', '', '', '2017-04-04 02:59:10'),
(24, 'ajay', 'ajaygaykay93@gmail.com', '9209998554', 'Security', 'default.png', '', 0, '', '', '', '2017-04-04 03:01:33'),
(25, 'ajay', 'ajaygaykar93@gmail.com', '8974653120', 'Networking', 'default.png', '', 0, '', '', '', '2017-04-04 03:04:29'),
(27, 'ajay', 'test@email.com', '4569871235', 'computer-hardware', 'default.png', '', 0, '', '', '', '2017-04-04 03:15:01'),
(30, 'mahesh', 'mahesh@gmail.com', '77845544512', 'Higher Secondary', 'default.png', 'Active', 0, '', '', '', '2017-04-20 00:45:38'),
(31, 'Ajay', 'aja@hotmail.com', '1234567889', 'Networking', 'default.png', 'Disable', 0, '', '', '', '2017-12-18 12:33:55'),
(32, 'Teth', 'ah@hotmail.com', '26363773889', 'computer-hardware', 'default.png', 'Active', 0, '', '', '', '2017-12-18 12:36:37'),
(33, 'Test', 'test@test.com', '1234567890', 'Primary', 'default.png', '', 0, '', '', '', '2018-03-06 21:07:39'),
(34, 'Test', 'ssassas', 'dasd', '', 'default.png', '', 0, '', '', '', '2018-03-09 13:31:15'),
(35, 'Demo', 'demo@demo.com', '7894561230', 'Higher Secondary', 'default.png', '', 0, '', '', '', '2018-03-09 14:47:05'),
(38, 'abcd', 'fayezbaig16@gmail.com', '8451915838', 'Secondary', 'default.png', 'Active', 0, '', '', '', '2018-03-09 15:33:24'),
(41, 'abcd', 'fayezbaig16@gmail.com', '8451915838', 'Higher Secondary', 'default.png', '', 0, '', '', '', '2018-03-09 15:37:54'),
(42, 'JUGAD', 'jugad@gmail.com', '1234567890', '', 'default.png', 'Active', 0, '', '', '', '2018-03-11 23:28:37'),
(43, 'jugad', 'jugad@gmail.com', '12345678000', '', 'default.png', '', 0, '', '', '', '2018-03-11 23:29:07'),
(44, 'fayez', 'fayezbaig16@gmail.com', '8451915838', 'Higher Secondary', 'default.png', '', 0, '', '', '', '2018-04-02 12:49:41'),
(45, '', '', '', 'Higher Secondary', 'default.png', '', 0, '', '', '', '2018-04-02 12:49:44'),
(47, 'Avesh Shaikh', 'aveshshaikh21@gamil.com', '8569784521', 'Secondary', 'default.png', 'Active', 0, '', '', '', '2018-04-02 15:53:06'),
(48, 'dhywdfqwehj', 'f@gmail.com', '1234567890', 'Secondary', '', 'Processing', 0, '', '', '', '2018-04-02 16:03:21'),
(51, 'sadasd', 'sadfjsa@fhdsf.dsf', '78645125468', 'Diploma', 'default.png', 'Pending', 2147483647, 'Male', 'uefsjdcxv m', '', '2018-04-02 20:32:58'),
(52, 'Regi', 'register@gmail.vo', '78946512442', 'Higher Secondary', 'default.png', 'Pending', 2147483647, 'Male', 'jdasdsad sadfsx', '', '2018-04-02 20:37:10'),
(53, 'wtyry', 'dfhds@dfgds', '89745612511', 'Diploma', 'default.png', 'Pending', 2147483647, 'fseufjbskdf ', 'Male', '', '2018-04-02 20:38:48'),
(54, 'test me', 'test@me.ss', '84512686524', 'Diploma', 'default.png', 'Pending', 2147483647, 'fhdsfbMLKZM', 'Male', '05/23/1992', '2018-04-02 20:49:45'),
(56, 'rohaan', 'shdjh@gmail.com', '4567891230', 'Secondary', 'default.png', 'Pending', 1234567890, 'we,fwefwerffwf2ef', 'Male', '04/25/2018', '2018-04-03 10:34:31'),
(57, 'shaikh rohaan', 'shaikhrohaan7@gmail.com', '8286825594', 'Secondary', 'default.png', 'Processing', 2147483647, 'fortis mumbai', 'Male', '10/03/1999', '2018-04-03 10:45:43'),
(58, 'shaikh yusuf', 'mohammedyusuf@gmail.com', '9876543210', 'Higher Secondary', 'default.png', 'Active', 2147483647, 'fortis kalyan', 'Male', '10/13/1999', '2018-04-03 10:46:56'),
(59, 'mohammedullah mehbubullah', 'm3gmd@gmail.com', '9320302350', 'Diploma', 'default.png', 'Pending', 2147483647, 'two tanks', 'Male', '12/09/1999', '2018-04-03 10:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `student_photo` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `update_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`id`, `name`, `department`, `feedback`, `student_photo`, `status`, `update_date`) VALUES
(7, 'shaikh yusuf', 'INFO TECh', 'Skilled Professors', '15204941330.png', 'Enable', '2018-03-08 12:58:53'),
(9, 'Waqqar ahmed', 'Diploma', ' Quality Education', '15226710250.jpeg', 'Enable', '2018-04-02 17:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation`, `facebook`, `twitter`, `instagram`, `whatsapp`, `image`, `created_at`) VALUES
(1, 'Umesh Mishra', 'Professor', '#', '#', '#', '#', '15224102930.jpeg', '2018-04-02 18:33:09'),
(2, 'Nikal Sonia', 'Professor', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '1213213', '5.jpg', '2018-04-02 18:34:32'),
(3, 'Yogesh Mishra', 'Professor', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.instagram.com', '1234567890', '15226744530.jpeg', '2018-04-02 18:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `toper`
--

CREATE TABLE `toper` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `rank` varchar(11) NOT NULL,
  `descripatin` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toper`
--

INSERT INTO `toper` (`id`, `name`, `class`, `year`, `rank`, `descripatin`, `image`, `created`) VALUES
(2, 'RAHIL QUERESHI', '11th', '2017', '1 st', ' Quality teaching', '15226660690.jpg', '2018-04-02 16:17:49'),
(3, 'Waqqar ahmed ', 'Diploma', '2018', '2 nd', ' ', '15226714270.jpeg', '2018-04-02 17:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `like_num` bigint(10) NOT NULL,
  `dislike_num` bigint(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_batches`
--

CREATE TABLE `upcoming_batches` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `day_time` varchar(20) NOT NULL,
  `days` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `update_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming_batches`
--

INSERT INTO `upcoming_batches` (`id`, `category`, `batch`, `start_date`, `end_date`, `duration`, `day_time`, `days`, `location`, `update_date`) VALUES
(2, 'Higher Secondary', 'Batch 2', '28 February, 2017', '31 May, 2017', '3 Months', '5:00 PM To 7:00 PM', 'M-W-T', 'Tardev Mumbai', '2018-04-02 19:11:53'),
(3, 'Secondary', 'Batch 1', '20 March, 2018', '30 June, 2018', '4 Months', '11:30 AM To 2:00 PM', '', '', '2018-04-02 19:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'Admin', 'Admin@123$', 'admin@phoenix.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_stud`
--

CREATE TABLE `user_stud` (
  `student_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_stud`
--

INSERT INTO `user_stud` (`student_id`, `username`, `email`, `password`, `type`, `status`, `created`) VALUES
(1, 'Ajay', 'Ajay@student.com', 'ajay@123', 'student', 1, '2018-01-19 01:17:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_rating`
--
ALTER TABLE `post_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register_online`
--
ALTER TABLE `register_online`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toper`
--
ALTER TABLE `toper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_batches`
--
ALTER TABLE `upcoming_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_stud`
--
ALTER TABLE `user_stud`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post_rating`
--
ALTER TABLE `post_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register_online`
--
ALTER TABLE `register_online`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `toper`
--
ALTER TABLE `toper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upcoming_batches`
--
ALTER TABLE `upcoming_batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_stud`
--
ALTER TABLE `user_stud`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
