-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2020 at 12:29 AM
-- Server version: 10.3.22-MariaDB-1ubuntu1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robo`
--
CREATE DATABASE IF NOT EXISTS `robo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `robo`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL DEFAULT 0,
  `users_name` text NOT NULL,
  `users_email` text NOT NULL,
  `users_image` text NOT NULL,
  `users_password` text NOT NULL,
  `users_address` text NOT NULL,
  `users_mobile` text NOT NULL,
  `users_status` int(11) NOT NULL,
  `users_type` enum('0','1','2','3') NOT NULL,
  `users_created` datetime NOT NULL,
  `users_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `users_name`, `users_email`, `users_image`, `users_password`, `users_address`, `users_mobile`, `users_status`, `users_type`, `users_created`, `users_modified`) VALUES
(1, 'Kumar', 'kabhishek18@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'Test', '8789424497', 0, '0', '2020-09-06 23:15:21', '2020-09-06 17:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_author` text NOT NULL,
  `blurb_1` text NOT NULL,
  `blurb_2` text NOT NULL,
  `excerpt` text NOT NULL,
  `blog_image` text DEFAULT NULL,
  `blog_description` text NOT NULL,
  `created` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_author`, `blurb_1`, `blurb_2`, `excerpt`, `blog_image`, `blog_description`, `created`, `modified`, `blog_status`) VALUES
(1, 'What is the correct age of kids for learning coding in the 21st century?', 'Test32', 'Test2', 'asd', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>\r\n', '67.jpg', '<p>&nbsp;</p>\r\n\r\n<p><strong>Magna est consectetur interdum modest dictum. Curabitur est faucibus, malesuada esttincidunt etos et mauris, nunc a libero govum est cuprum suspendisse. Bibendum nulla lacus metus, egestas eu sagittis vel, eleifend pretium tellus. Etiam quis orci gravera etos augue. Vestibulum hendrerit sem risus, ut tincidunt tellus at vehicula. Mauris pharetra nibh non quam condimentum, faucibus tristique.</strong></p>\r\n\r\n<p><br />\r\n<strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong></p>\r\n\r\n<h4><strong>Gravida maecenas node</strong></h4>\r\n\r\n<p><br />\r\n<strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong></p>\r\n\r\n<p><strong>Magna est consectetur interdum modest dictum. Curabitur est faucibus, malesuada esttincidunt etos et mauris, nunc a libero govum est cuprum suspendisse. Bibendum nulla lacus metus, egestas eu sagittis vel, eleifend pretium tellus. Etiam quis orci gravera etos augue. Vestibulum hendrerit sem risus, ut tincidunt tellus at vehicula. Mauris pharetra nibh non quam condimentum, faucibus tristique.</strong></p>\r\n\r\n<p><br />\r\n<strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong></p>\r\n\r\n<h5><strong>Gravida maecenas node</strong></h5>\r\n\r\n<p><br />\r\n<strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong></p>\r\n\r\n<p><strong>Magna est consectetur interdum modest dictum. Curabitur est faucibus, malesuada esttincidunt etos et mauris, nunc a libero govum est cuprum suspendisse. Bibendum nulla lacus metus, egestas eu sagittis vel, eleifend pretium tellus. Etiam quis orci gravera etos augue. Vestibulum hendrerit sem risus, ut tincidunt tellus at vehicula. Mauris pharetra nibh non quam condimentum, faucibus tristique.</strong></p>\r\n\r\n<p><br />\r\n<strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong></p>\r\n\r\n<h6><strong>Gravida maecenas node</strong></h6>\r\n\r\n<p><br />\r\n<strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong></p>\r\n\r\n<p><strong>Magna est consectetur interdum modest dictum. Curabitur est faucibus, malesuada esttincidunt etos et mauris, nunc a libero govum est cuprum suspendisse. Bibendum nulla lacus metus, egestas eu sagittis vel, eleifend pretium tellus. Etiam quis orci gravera etos augue. Vestibulum hendrerit sem risus, ut tincidunt tellus at vehicula. Mauris pharetra nibh non quam condimentum, faucibus tristique.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-07-28,04:49:15pm', '2020-09-07 17:59:16', '0'),
(2, 'PAHAL - The Beginning', 'Krithika', 'Test', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'blog3.jpg', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Putting together pretty pastels and precise embroidery, Vaidaan gave rise to it&#39;s primitive collection - Pahal that brought together elements of art, sophistication and panache.&nbsp;&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">(<a href=\"https://vaidaan.com/product/373\">Quadcircles Earrings</a>&nbsp;- Click to Shop)</span></span></span></p>\r\n\r\n<p><img alt=\"\" src=\"https://vaidaan.com/resource/upload/product/Gladiator_Earrings2.jpg\" style=\"height:300px; width:300px\" />&nbsp;&nbsp;<img alt=\"\" src=\"https://vaidaan.com/resource/upload/product/Windmill_Earrings2.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p><em>( Left -&nbsp;<a href=\"https://vaidaan.com/product/370\">Gladiator Earrings</a>, Right -&nbsp;<a href=\"https://vaidaan.com/product/376\">Windmill Earrings</a>&nbsp;- Click to Shop )</em></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">It reflects careful deliberation, intricate weaves and a lot of charm through its beautiful zari work that outlines the closely knit threads and mesh work. It is these little elements that turn these trinkets into everlasting baubles.&nbsp;</span></span></span></p>\r\n\r\n<p><img alt=\"\" src=\"https://vaidaan.com/resource/upload/product/Quadcircles_Ring3(1000X).jpg\" style=\"height:300px; width:300px\" />&nbsp;&nbsp;<img alt=\"\" src=\"https://vaidaan.com/resource/upload/product/Quadcircles_Earrings1.JPG\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p><em>( Left -&nbsp;<a href=\"https://vaidaan.com/product/75\">Quadcircles Ring</a>, Right -&nbsp;<a href=\"https://vaidaan.com/product/372\">Quadcircles Earrings</a>&nbsp;- Click to Shop )</em></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Put them together with Evening gowns or adorn them with a crisp blouse and Chiffon saris, use them at your beck and call to dress up or dress down as perfectly as your occasion might be.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><img alt=\"\" src=\"https://vaidaan.com/resource/upload/product/Trinity_Earrings2.JPG\" style=\"height:300px; width:300px\" />&nbsp;&nbsp;<img alt=\"\" src=\"https://vaidaan.com/resource/upload/product/FlimFlam_Earrings2.JPG\" style=\"height:300px; width:300px\" /></span></span></span></p>\r\n\r\n<p><em>( Left -&nbsp;<a href=\"https://vaidaan.com/product/375\">Trinity Earrings</a>, Right -&nbsp;<a href=\"https://vaidaan.com/product/369\">FlimFlam Earrings</a>&nbsp;- Click to Shop )</em></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Play along with the abstract geometric designs that merge well with the dual and triple toned jewels and bring out a rather subtle yet emphatic side of yourself to the world.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">It is a finespun collection that doesn&rsquo;t steal but adds to the focus of your entire look and completes it for you in the perfect amount of sparkle and sass.</span></span></span></p>\r\n\r\n<hr />\r\n<p><span style=\"color:#7f8c8d\"><em><img alt=\"heart\" src=\"https://cdn.ckeditor.com/4.14.0/full/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />&nbsp;XoXo - Team Vaidaan&nbsp;</em></span></p>\r\n', '2020-07-28,04:48:09pm', '2020-09-04 18:07:30', '0'),
(3, 'TEst', 'TEst', 'Test', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '662.jpg', '<p>asdhbhasdbhabshdbhabhdbh</p>\r\n', '2020-09-07', '2020-09-07 15:48:00', '0'),
(4, 'Test', 'asd', 'Test', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '4.jpg', '<p>asdd</p>\r\n', '2020-09-07', '2020-09-07 15:48:48', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

DROP TABLE IF EXISTS `cat`;
CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_slug` text NOT NULL,
  `cat_status` enum('0','1') NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `cat_parent_id`, `cat_name`, `cat_slug`, `cat_status`, `created`, `modified`) VALUES
(1, 0, 'Lil Champs', 'Age (6 to 8 years)', '0', '2020-08-05 07:33:59', '2020-08-05 06:04:23'),
(2, 0, 'Junior Scientist', 'Age (9 to 12 years)', '0', '2020-08-27 07:34:05', '2020-08-13 06:04:21'),
(3, 0, 'Young Engineers', 'Age (13 to 16 years)', '0', '2020-08-26 07:34:08', '2020-08-12 06:04:17'),
(4, 0, 'Engineers', 'Age (17 +years)', '0', '2020-08-27 07:34:10', '2020-08-19 06:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_name` text NOT NULL,
  `coupon_type` enum('0','1') NOT NULL DEFAULT '0',
  `coupon_value` text NOT NULL,
  `coupon_expire` date NOT NULL,
  `cart_minimum` int(11) DEFAULT NULL,
  `cart_maximum` int(11) DEFAULT NULL,
  `coupon_description` text NOT NULL,
  `coupon_status` enum('0','1') NOT NULL DEFAULT '0',
  `coupon_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_name`, `coupon_type`, `coupon_value`, `coupon_expire`, `cart_minimum`, `cart_maximum`, `coupon_description`, `coupon_status`, `coupon_delete`) VALUES
(1, 'sum100', '0', '100', '2020-09-18', 600, NULL, 'asda', '0', '0'),
(2, 'summer50', '0', '900', '2020-06-04', NULL, NULL, 'This b', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `blurb` text NOT NULL,
  `category` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created` date NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `subtitle`, `blurb`, `category`, `status`, `created`, `modified`) VALUES
(1, 'pagenotfoundbg.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery1', '0', '2020-09-08', '2020-09-07 20:01:39'),
(2, '3.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery1', '0', '2020-09-08', '2020-09-07 19:59:47'),
(3, '2.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery2', '0', '2020-09-08', '2020-09-07 20:05:19'),
(4, '4.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery3', '0', '2020-09-08', '2020-09-07 20:02:25'),
(5, '4.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery2', '0', '2020-09-08', '2020-09-07 20:01:39'),
(6, '7.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery3', '0', '2020-09-08', '2020-09-07 19:59:47'),
(7, 'pagenotfoundbg.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery2', '0', '2020-09-08', '2020-09-07 20:03:23'),
(8, '4.jpg', 'TYe1253123', 'test', 'aasdas', 'gallery3', '0', '2020-09-08', '2020-09-07 20:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_id` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `payment_id` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `amount` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `product_id`, `payment_id`, `amount`) VALUES
(1, '1', '1', 'pay_FZoxS8ivuGi5KV', '1'),
(2, '1', '1', 'pay_FaHz7p2iKiZDnN', '1'),
(3, '1', '2', 'pay_FaI5DRa4NBRrpd', '499'),
(4, '1', '5', 'pay_FcBiAFLIz0g69k', '399');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_slug` text DEFAULT NULL,
  `product_highlight` text NOT NULL,
  `product_novice` text NOT NULL,
  `product_developer` text NOT NULL,
  `product_champion` text NOT NULL,
  `novice_price` int(11) NOT NULL,
  `developer_price` int(11) NOT NULL,
  `champion_price` int(11) NOT NULL,
  `product_image` text DEFAULT NULL,
  `product_description` text NOT NULL,
  `product_status` enum('0','1') NOT NULL DEFAULT '0',
  `created` date NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `product_name`, `product_slug`, `product_highlight`, `product_novice`, `product_developer`, `product_champion`, `novice_price`, `developer_price`, `champion_price`, `product_image`, `product_description`, `product_status`, `created`, `modified`) VALUES
(1, 1, 'Test 1', 'Test Slug', '<ul>\r\n	<li>60 minute sessions</li>\r\n	<li>Enhance your creative skills</li>\r\n	<li>Increase your logical skills</li>\r\n	<li>No prior coding experience required</li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:24px\">8 sessions &ndash; Rs. 550 /Session</span></li>\r\n</ul>\r\n\r\n<p>Course Curriculum-</p>\r\n\r\n<p>Loops, Sequencing and conditionals</p>\r\n\r\n<ul>\r\n	<li>How will your child implement?</li>\r\n</ul>\r\n\r\n<p>Create some functional programs, animations and stories</p>\r\n\r\n<ul>\r\n	<li>Benefits</li>\r\n</ul>\r\n\r\n<p>Motivate the kids to think creatively and reason systematically</p>\r\n', '<ul>\r\n	<li>60 minute sessions</li>\r\n	<li>Enhance your creative skills</li>\r\n	<li>Increase your logical skills</li>\r\n	<li>No prior coding experience required</li>\r\n</ul>\r\n', '<p>aasdas</p>\r\n', 1, 1, 1, 'teacher1.jpg', '<p>asdasd</p>\r\n', '0', '0000-00-00', '2020-09-06 19:57:51'),
(2, 1, 'Test 2', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(3, 1, 'Test 3', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(4, 1, 'Test 4', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(5, 2, 'Test 1', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(6, 2, 'Test 2', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(7, 2, 'Test 3', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(8, 2, 'Test 4', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(9, 3, 'Test 1', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(10, 3, 'Test 2', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(11, 3, 'Test 3', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(12, 3, 'Test 4', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(13, 4, 'Test 1', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(14, 4, 'Test 2', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(15, 4, 'Test 3', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35'),
(16, 4, 'Test 4', 'Test Slug', '<ul>\r\n												<li>60 minute sessions</li>\r\n												<li>Enhance your creative skills</li>\r\n												<li>Increase your logical skills</li>\r\n												<li>No prior coding experience required</li>	\r\n											</ul>', 'DEmoemoamomodmoamsodmo', 'asdoasmdom', 'aasdas', 299, 399, 499, 'teacher1.jpg', 'asdasd', '0', '0000-00-00', '2020-09-06 19:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review_name` text NOT NULL,
  `review_email` text NOT NULL,
  `review_phone` text NOT NULL,
  `review_description` text NOT NULL,
  `review_blog_id` text NOT NULL,
  `review_status` enum('0','1') NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review_name`, `review_email`, `review_phone`, `review_description`, `review_blog_id`, `review_status`, `created`, `modified`) VALUES
(1, 'test', 'test@mail.com', '789456123', 'Test', '1', '0', '2020-09-08 00:10:04', '2020-09-07 18:46:38'),
(2, 'test', 'test@mail.com', '789456123', 'Test', '1', '0', '2020-09-08 00:10:04', '2020-09-07 18:46:31'),
(3, 'test', 'test@mail.com', '789456123', 'Test', '1', '0', '2020-09-08 00:10:04', '2020-09-07 18:34:10'),
(4, 'test', 'test@mail.com', '789456123', 'Test', '1', '0', '2020-09-08 00:10:04', '2020-09-07 18:46:35'),
(5, 'test', 'test@mail.com', '789456123', 'Test', '2', '0', '2020-09-08 00:10:04', '2020-09-07 18:46:38'),
(6, 'test', 'test@mail.com', '789456123', 'Test', '2', '0', '2020-09-08 00:10:04', '2020-09-07 18:46:31'),
(7, 'test', 'test@mail.com', '789456123', 'Test', '3', '0', '2020-09-08 00:10:04', '2020-09-07 18:34:10'),
(8, 'test', 'test@mail.com', '789456123', 'Test', '4', '0', '2020-09-08 00:10:04', '2020-09-07 18:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

DROP TABLE IF EXISTS `userorder`;
CREATE TABLE `userorder` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_userid` varchar(255) NOT NULL,
  `order_amount` text NOT NULL,
  `order_cart` text NOT NULL,
  `order_detail` text NOT NULL,
  `billing_address` text NOT NULL,
  `order_trans` int(11) NOT NULL,
  `order_created` text NOT NULL,
  `order_modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` enum('0','1','2','3') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `order_id`, `order_userid`, `order_amount`, `order_cart`, `order_detail`, `billing_address`, `order_trans`, `order_created`, `order_modified`, `order_status`) VALUES
(1, 'robo5f5517428679b0.99666112', '1', '1', '1', '{\"name\":\"asd\",\"email\":\"asdjnj@asd.asd\",\"address\":\"sjdna\",\"address2\":\"njnjnjnjn\",\"country\":\"njnjnjn\",\"state\":\"jnjnj\",\"zip\":\"njnjn\"}', '', 0, '06/09/2020', '2020-09-06 17:07:41', ''),
(2, 'pay_FaHz7p2iKiZDnN', '1', '1', '1', '{\"name\":\"Test\",\"email\":\"Test@gmasdil.das\",\"address\":\"sda\",\"address2\":\"asd\",\"country\":\"das\",\"state\":\"das\",\"zip\":\"ad\"}', '', 0, '08/09/2020', '2020-09-07 21:31:23', ''),
(3, 'pay_FaI5DRa4NBRrpd', '1', '499', '2', '{\"name\":\"Tast\",\"email\":\"asd@sad.asd\",\"address\":\"asd\",\"address2\":\"ads\",\"country\":\"asd\",\"state\":\"ds\",\"zip\":\"asd\"}', '', 0, '08/09/2020', '2020-09-07 21:37:09', ''),
(4, 'pay_FcBiAFLIz0g69k', '1', '399', '5', '{\"name\":\"asds\",\"email\":\"ads@sda.asd\",\"address\":\"moasdmom\",\"address2\":\"momo\",\"country\":\"qweqwe\",\"state\":\"moasdasd\",\"zip\":\"wq\"}', '', 0, '12/09/2020', '2020-09-12 16:41:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_email_verify` enum('0','1') NOT NULL DEFAULT '1',
  `users_image` text NOT NULL,
  `users_password` text NOT NULL,
  `users_token` text DEFAULT NULL,
  `users_type` int(11) NOT NULL,
  `users_account` enum('0','1') NOT NULL,
  `users_status` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_email_verify`, `users_image`, `users_password`, `users_token`, `users_type`, `users_account`, `users_status`, `date_created`, `date_modified`) VALUES
(1, 'Abhishek', 'kabhishek1@gmail.com', '0', '', 'e10adc3949ba59abbe56e057f20f883e', 'e1ef5301-1296-82d9-20fe-f746efdfb046', 1, '0', 0, '2020-08-06', '2020-09-12 17:36:28'),
(3, 'Goku', 'kabhishek18@gmail.com', '1', '', 'e10adc3949ba59abbe56e057f20f883e', '20deb6d8-c777-f95b-314e-7c0152d57d5c', 0, '0', 0, '0000-00-00', '2020-09-12 18:11:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
