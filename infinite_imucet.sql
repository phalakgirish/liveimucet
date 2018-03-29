-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 12:38 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinite_imucet`
--

-- --------------------------------------------------------

--
-- Table structure for table `imuoption`
--

CREATE TABLE `imuoption` (
  `option_id` int(11) NOT NULL,
  `option_queid` int(11) NOT NULL,
  `option_option` text NOT NULL,
  `option_right` enum('right','wrong') NOT NULL,
  `option_status` enum('Active','Inactive') NOT NULL,
  `option_createdby` int(11) NOT NULL,
  `option_createddate` datetime NOT NULL,
  `option_updatedby` int(11) NOT NULL,
  `option_updateddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `option_img` varchar(100) NOT NULL,
  `option_img2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imuoption`
--

INSERT INTO `imuoption` (`option_id`, `option_queid`, `option_option`, `option_right`, `option_status`, `option_createdby`, `option_createddate`, `option_updatedby`, `option_updateddate`, `option_img`, `option_img2`) VALUES
(1, 1, '<p>8</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 04:58:35', '', ''),
(2, 1, '<p>7</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 04:58:42', '', ''),
(3, 1, '<p>6</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 04:58:49', '', ''),
(4, 1, '<p>5</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 14:54:31', '', ''),
(5, 1, '<p>4</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 04:59:00', '', ''),
(6, 2, '<p>{2,3,5}</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:12:14', '', ''),
(7, 2, '<p>{3,5,9}</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:12:40', '', ''),
(8, 2, '<p>{1,2,5,9}</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:12:57', '', ''),
(9, 2, '<p>{1,2,3}</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:13:09', '', ''),
(10, 2, '<p>None of These</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:13:32', '', ''),
(11, 3, '<p>A&sub;B</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:19:15', '', ''),
(12, 3, '<p>B&sub;A</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:19:36', '', ''),
(13, 3, '<p>A=B</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:21:05', '', ''),
(14, 3, '<p>A&sube;B</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:24:57', '', ''),
(15, 3, '<p>B&sube;A</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:25:13', '', ''),
(16, 3, '<p>A=B</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:25:30', '', ''),
(17, 3, '<p>A&ne;B</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:25:43', '', ''),
(18, 3, '<p>None of these</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:26:01', '', ''),
(19, 5, '<p>A</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:35:23', '', ''),
(20, 5, '<p>B</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:35:52', '', ''),
(21, 5, '<p>A<sup>c</sup></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:36:08', '', ''),
(22, 5, '<p>B<sup>c</sup></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:36:48', '', ''),
(23, 5, '<p>None Of These</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 05:37:02', '', ''),
(24, 6, '<p>Draw</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 09:01:24', '', ''),
(25, 6, '<p>Read</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 09:01:48', '', ''),
(26, 6, '<p>Play</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:27:23', '', ''),
(27, 6, '<p>Back</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:27:35', '', ''),
(28, 6, '<p>Want</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:27:44', '', ''),
(29, 7, '<p>False</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 09:05:25', '', ''),
(30, 7, '<p>Follow</p', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 09:05:46', '', ''),
(31, 0, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:29:34', '', ''),
(32, 7, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:30:01', '', ''),
(33, 7, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:30:22', '', ''),
(34, 7, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:31:12', '', ''),
(35, 7, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:31:38', '', ''),
(36, 8, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:35:40', '', ''),
(37, 8, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:35:54', '', ''),
(38, 8, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:36:07', '', ''),
(39, 8, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:36:18', '', ''),
(40, 8, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:36:39', '', ''),
(41, 9, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:41:37', '', ''),
(42, 9, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:41:50', '', ''),
(43, 9, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:42:06', '', ''),
(44, 9, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:42:17', '', ''),
(45, 9, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:42:28', '', ''),
(46, 10, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:44:38', '', ''),
(47, 10, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:44:59', '', ''),
(48, 10, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:45:21', '', ''),
(49, 10, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:45:42', '', ''),
(50, 12, '<p><span lang=\"DE\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-fon', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:49:37', '', ''),
(51, 12, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:49:49', '', ''),
(52, 12, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:50:05', '', ''),
(53, 12, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:50:19', '', ''),
(54, 12, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 08:50:34', '', ''),
(58, 13, '<p><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Clever</span></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:39:31', '', ''),
(59, 13, '<p><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Enthusiastic</span></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:40:06', '', ''),
(60, 13, '<p><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Curious</span></p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:40:26', '', ''),
(61, 13, '<p><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Devoted</span></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:40:38', '', ''),
(62, 14, '<p><span style=\"margin: 0px; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; font-size: 12pt;\">Clear</span><u></u></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 14:26:25', '', ''),
(63, 14, '<p><span style=\"margin: 0px; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; font-size: 12pt;\">Calm</span><u></u></p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 14:26:25', '', ''),
(64, 14, '<p><span style=\"margin: 0px; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; font-size: 12pt;\">Enjoyable</span><u></u></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 14:26:25', '', ''),
(65, 14, '<p style=\"margin: 0px 0px 10.66px 5px;\"><span style=\"margin: 0px; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; font-size: 12pt;\">Dull</span></p>\n<p>&nbsp;</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:48:04', '', ''),
(66, 15, '<p><span style=\"margin: 0px; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; font-size: 12pt;\">Boast</span><u></u></p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 14:27:05', '', ''),
(67, 15, '<p>Remember</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:51:38', '', ''),
(68, 15, '<p>Manipulate</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:52:01', '', ''),
(69, 15, '<p>Harmonise</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:52:21', '', ''),
(70, 16, '<p>Face</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:56:38', '', ''),
(71, 16, '<p>Worship</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:56:57', '', ''),
(72, 16, '<p>Flatter</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:57:12', '', ''),
(73, 16, '<p>Challenge</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:57:28', '', ''),
(74, 18, '<p>Pageantries</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:59:18', '', ''),
(75, 18, '<p>Privileges</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 12:59:52', '', ''),
(76, 18, '<p>Facilities</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 13:00:40', '', ''),
(77, 18, '<p>Courtesies</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 13:01:07', '', ''),
(78, 19, '<p>&pi;<sup>2</sup>/4ms<sup>-2</sup>&nbsp;and direction along the radius towards the centre</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 15:43:43', '', ''),
(79, 19, '<p>&pi;<sup>2</sup> ms<sup>-2</sup> and direction along the radius away from the centre</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 15:44:33', '', ''),
(80, 19, '<p>&pi;<sup>2</sup> ms<sup>-2</sup> and direction along the radius towards the centre</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 15:44:52', '', ''),
(81, 19, '<p>&pi;<sup>2</sup> ms<sup>-2</sup> and direction along the tangent to the circle</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 15:45:09', '', ''),
(82, 19, '<p>&pi;<sup>2</sup> ms<sup>-2</sup> and direction along the radius away the centre</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-06 15:45:25', '', ''),
(83, 20, '<p>rrrr</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-20 10:07:55', 'upload/main6-3.png', ''),
(84, 20, '<p>www</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-20 10:09:15', 'upload/main6-31.png', ''),
(85, 20, '<p>qwer</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-20 10:40:27', 'upload/main6-32.png', ''),
(86, 20, '<p>yes</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-20 10:41:01', 'upload/main6-33.png', ''),
(87, 22, '<p>opt1</p>', '', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-21 10:14:43', '', ''),
(88, 22, '<p>opt2</p>', '', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-21 10:14:43', '', ''),
(89, 23, '<p>op1</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:31:22', 'upload/Areyoumeasuring.jpg', ''),
(90, 23, '<p>op2</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:31:22', 'upload/Areyoumeasuring.jpg', ''),
(91, 23, '<p>op3</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:31:22', 'upload/Areyoumeasuring.jpg', ''),
(92, 23, '<p>op4</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:31:22', 'upload/Areyoumeasuring.jpg', ''),
(93, 24, '<p>op1</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:35:00', 'upload/Areyoumeasuring1.jpg', ''),
(94, 24, '<p>op2</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:35:00', 'upload/Areyoumeasuring1.jpg', ''),
(95, 24, '<p>op3</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:35:00', 'upload/Areyoumeasuring1.jpg', ''),
(96, 24, '<p>op4</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:35:00', 'upload/Areyoumeasuring1.jpg', ''),
(97, 25, '<p>1</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:36:25', 'upload/bullet4.png', 'upload/floatimg.png'),
(98, 25, '<p>2</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:36:25', 'upload/bullet4.png', 'upload/floatimg.png'),
(99, 25, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:36:25', 'upload/bullet4.png', 'upload/floatimg.png'),
(100, 25, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:36:25', 'upload/bullet4.png', 'upload/floatimg.png'),
(101, 26, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:38:21', 'u', ''),
(102, 26, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:38:21', 'p', ''),
(103, 26, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:38:21', 'l', ''),
(104, 26, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:38:21', 'o', ''),
(105, 27, '<p>1</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:39:25', 'upload/main6-35.png', ''),
(106, 27, '<p>2</p>', 'wrong', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:39:25', 'upload/main6-35.png', ''),
(107, 27, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:39:25', 'upload/main6-35.png', ''),
(108, 27, '', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:39:25', 'upload/main6-35.png', ''),
(109, 28, '<p>1</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:44:41', '', ''),
(110, 28, '<p>2</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:44:41', '', ''),
(111, 28, '<p>3</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:44:41', '', ''),
(112, 28, '<p>4</p>', 'right', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-22 05:44:41', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(10) NOT NULL,
  `package_amount` varchar(5) NOT NULL,
  `package_description` varchar(100) NOT NULL,
  `package_validity` varchar(3) NOT NULL,
  `package_status` enum('Active','Inactive') NOT NULL,
  `package_createdby` int(11) NOT NULL,
  `package_createddate` datetime NOT NULL,
  `package_updatedby` int(11) NOT NULL,
  `package_updateddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_amount`, `package_description`, `package_validity`, `package_status`, `package_createdby`, `package_createddate`, `package_updatedby`, `package_updateddate`) VALUES
(1, 'BASIC', '2500', 'MOCK TEST + SUPPORT', '', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-27 07:47:20'),
(2, 'STANDARD', '3500', 'STUDY + MOCK TEST + SUPPORT INETRVIEW TIPS', '', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-27 07:47:20'),
(3, 'PREMIUM', '5000', 'MOCK TEST + SUPPORT + INTERVIEW TIPS + PSYCHOMETRIC TEST', '', 'Active', 0, '0000-00-00 00:00:00', 0, '2018-03-27 08:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_stuid` int(11) NOT NULL,
  `pay_packageid` int(11) NOT NULL,
  `pay_orderid` int(11) NOT NULL,
  `pay_sessionid` varchar(100) NOT NULL,
  `pay_orderstatus` varchar(15) NOT NULL,
  `pay_amount` varchar(5) NOT NULL,
  `pay_billname` varchar(20) NOT NULL,
  `pay_billadd` varchar(100) NOT NULL,
  `pay_billcity` varchar(50) NOT NULL,
  `pay_billstate` varchar(30) NOT NULL,
  `pay_billzip` varchar(6) NOT NULL,
  `pay_billcountry` varchar(15) NOT NULL,
  `pay_billtel` varchar(11) NOT NULL,
  `pay_billemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `que_id` int(11) NOT NULL,
  `que_topic` int(11) NOT NULL,
  `que_question` text NOT NULL,
  `que_marks` int(11) NOT NULL,
  `que_video` varchar(100) NOT NULL,
  `que_file` varchar(100) NOT NULL,
  `que_solution` text NOT NULL,
  `que_status` enum('Active','Inactive') NOT NULL,
  `image_file_solution` varchar(100) NOT NULL,
  `option_option1` text NOT NULL,
  `option_img1` varchar(100) NOT NULL,
  `option_option2` text NOT NULL,
  `option_img2` varchar(100) NOT NULL,
  `option_option3` text NOT NULL,
  `option_img3` varchar(100) NOT NULL,
  `option_option4` text NOT NULL,
  `option_img4` varchar(100) NOT NULL,
  `option_right` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `que_topic`, `que_question`, `que_marks`, `que_video`, `que_file`, `que_solution`, `que_status`, `image_file_solution`, `option_option1`, `option_img1`, `option_option2`, `option_img2`, `option_option3`, `option_img3`, `option_option4`, `option_img4`, `option_right`) VALUES
(32, 5, '<p>english ques</p>', 12, '', '', '<p>english solution</p>', 'Active', '', '<p>one</p>', 'upload/bullet6.png', '<p>two</p>', 'upload/main6-36.png', '<p>three</p>', 'upload/main13logo1.png', '<p>four</p>', 'upload/separated_images-00ld.png', 0),
(33, 5, '<p>wqwwq</p>', 1, 'wqw', '', '<p>qw</p>', 'Active', '', '<p>wwq</p>', '', '<p>ewqewq</p>', '', '<p>ewqe</p>', '', '<p>ewqewq</p>', '', 0),
(34, 5, '<p>eweqewqewqe</p>', 23, 'https://www.youtube.com/watch?v=psQKo3TCPhk', 'upload/beginners-guide-to-trnsactional-emails1.png', '<p>dwdasdsad</p>', 'Active', 'upload/bullet7.png', '<p>ONE</p>', '', '<p>two</p>', '', '<p>three</p>', '', '<p>four</p>', '', 0),
(35, 1, '<p>dsdasds</p>', 0, '', '', '<p>dsada</p>', 'Active', '', '<p>ds</p>', '', '<p>dsada</p>', '', '<p>dsada</p>', '', '<p>dsad</p>', '', 2),
(36, 5, '<p>ewdsadas</p>', 0, 'https://www.youtube.com/watch?v=psQKo3TCPhk', 'upload/new.docx', '<p>dasdas</p>', 'Active', 'upload/bullet7.png', '<p>dsa</p>', '', '<p>dsad</p>', '', '<p>dsada</p>', '', '<p>dsada</p>', '', 4),
(37, 7, '<p>dasdsad</p>', 0, 'https://www.youtube.com/watch?v=psQKo3TCPhk', 'upload/new.docx', '<p>dsad</p>', 'Active', 'upload/bullet7.png', '', 'upload/bullet7.png', '', 'upload/main6-36.png', '', 'upload/main13logo1.png', '', 'upload/separated_images-00ld.png', 4),
(38, 7, '<p>wqqe</p>', 0, 'https://www.youtube.com/watch?v=psQKo3TCPhk', 'upload/new.docx', '<p>ewqeq</p>', 'Active', 'upload/main13logo1.png', '<p>dasd</p>', '', '<p>dsadasd</p>', '', '<p>dsadsad</p>', '', '<p>dsadsa</p>', '', 3),
(39, 5, '<p>fadssafasd gfdfdsfdsfds</p>', 0, 'https://www.youtube.com/watch?v=4BmG8xUo8vI&feature=youtu.be', 'upload/new.docx', '<p>rgregdfgf ggrgrgregreg</p>', 'Active', 'upload/separated_images-00ld.png', '<p>rewrerew</p>', '', '<p>gfdgbgbgfbf</p>', '', '<p>adasdsarewr</p>', '', '<p>fddgfgfdgf</p>', '', 1),
(40, 5, '<p>fdsafdsafd fsdfdfsda</p>', 0, 'https://www.youtube.com/watch?v=4BmG8xUo8vI&feature=youtu.be', '', '', 'Active', 'upload/separated_images-00ld.png', '<p>ewrewrewqr</p>', '', '<p>vfdvfdvfdvfdvfd</p>', '', '<p>qwerewfewfdfvdsv</p>', '', '<p>vvdfvddsfsdafd</p>', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `register_name` varchar(20) NOT NULL,
  `register_mobile` varchar(11) NOT NULL,
  `register_email` varchar(30) NOT NULL,
  `register_pass` varchar(40) NOT NULL,
  `register_add` varchar(100) NOT NULL,
  `register_city` varchar(50) NOT NULL,
  `register_state` varchar(30) NOT NULL,
  `register_country` varchar(30) NOT NULL,
  `register_type` enum('Student','Employee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `register_name`, `register_mobile`, `register_email`, `register_pass`, `register_add`, `register_city`, `register_state`, `register_country`, `register_type`) VALUES
(2, 'pratik', '2147483647', 'pratik@gmail.com', '6d5dfcacee3103a30a5ff5fc328d11bea3d44b7b', 'sdfdsfds dsfyidsuyfiudsyfds dysfiudsyfiudsyf dsfiudsyf iudsf', 'Kalyan', 'Maharashtra', 'India', 'Student'),
(8, 'Girish', '8879679180', 'phalak.girish@gmail.com', 'f366987cca93b368cf7b2909554baa6b45c514e5', 'Imperial Heights', 'navi mumbai', 'Maharashtra', 'India', 'Student'),
(9, 'AN', '8879631231', 'anrizvi@rediffmail.com', '5f88ccf8dce5124556802cc408033be7d259d54f', '', '', '', 'anrizvi@rediffmail.com', 'Student'),
(10, 'mona', '9730150343', 'mona@gmail.com', '4e62adba4abf0adeb5b5a67c8d9fadb992b9bede', 'erewre rewrewrewr rewrewr', 'ewrew', 'rewrewr', 'India', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `stream_id` int(11) NOT NULL,
  `stream_name` varchar(15) NOT NULL,
  `stream_icon` varchar(15) NOT NULL,
  `stream_desc` varchar(100) NOT NULL,
  `stream_status` enum('Active','Inactive') NOT NULL,
  `stream_createddate` datetime NOT NULL,
  `stream_createdby` int(11) NOT NULL,
  `stream_updateddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stream_updatedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`stream_id`, `stream_name`, `stream_icon`, `stream_desc`, `stream_status`, `stream_createddate`, `stream_createdby`, `stream_updateddate`, `stream_updatedby`) VALUES
(1, 'Graduate', 'Graduate', 'Course for Graduate student', 'Active', '0000-00-00 00:00:00', 0, '2018-02-23 09:54:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `stu_email` varchar(20) NOT NULL,
  `stu_mobile` varchar(12) NOT NULL,
  `stu_add` varchar(40) NOT NULL,
  `stu_city` varchar(20) NOT NULL,
  `stu_pincode` varchar(6) NOT NULL,
  `stu_country` varchar(10) NOT NULL,
  `stu_username` varchar(10) NOT NULL,
  `stu_password` varchar(40) NOT NULL,
  `stu_authcode` varchar(20) NOT NULL,
  `stu_package_id` int(11) NOT NULL,
  `stu_type` enum('Free','Paid') NOT NULL,
  `stu_education` varchar(50) NOT NULL,
  `stu_status` enum('Active','Inactive') NOT NULL,
  `stu_createddate` datetime NOT NULL,
  `stu_updateddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stu_updatedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_mobile`, `stu_add`, `stu_city`, `stu_pincode`, `stu_country`, `stu_username`, `stu_password`, `stu_authcode`, `stu_package_id`, `stu_type`, `stu_education`, `stu_status`, `stu_createddate`, `stu_updateddate`, `stu_updatedby`) VALUES
(1, 'abc', '', '', '', '', '', '', '', '', '', 0, 'Free', '', 'Active', '0000-00-00 00:00:00', '2018-02-05 22:50:53', 0),
(3, 'abc', 'abc@gmail.com', '9857474737', 'rewr rt 3t43 fefergregre gregregerg', 'Mulund', '', 'India', '', '', '', 0, 'Free', '', 'Active', '0000-00-00 00:00:00', '2018-02-05 23:28:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_stream` int(11) NOT NULL,
  `subject_name` varchar(10) NOT NULL,
  `subject_des` varchar(200) NOT NULL,
  `subject_icon` varchar(15) NOT NULL,
  `subject_status` enum('Active','Inactive') NOT NULL,
  `subject_createddate` datetime NOT NULL,
  `subject_createdby` int(11) NOT NULL,
  `subject_updateddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject_updatedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_stream`, `subject_name`, `subject_des`, `subject_icon`, `subject_status`, `subject_createddate`, `subject_createdby`, `subject_updateddate`, `subject_updatedby`) VALUES
(1, 1, 'Mathematic', 'Mathematics is the study of such topics as quantity, structure, space, and change. Through the use of abstraction and logic, mathematics d', 'Mathematics', 'Active', '2018-03-05 13:14:19', 1, '2018-03-06 08:16:28', 1),
(2, 1, 'Chemistry', 'Chemistry is the study of matter, its properties, how and why substances combine or separate to form other substances, and how substances interact with energy. Many people think of chemists as being w', 'Chemistry', 'Active', '2018-03-06 08:07:21', 1, '2018-03-06 08:07:21', 0),
(3, 1, 'English', 'Study of English Language', 'English', 'Active', '2018-03-06 08:09:01', 1, '2018-03-06 08:09:01', 0),
(4, 1, 'Physics', 'Classical mechanics is the foundation on which modern physics is based. It focuses on the motion of particles in a 3-dimensional system and has its basis in the three laws of motion defined by Isaac N', 'Physics', 'Active', '2018-03-06 08:09:59', 1, '2018-03-06 08:09:59', 0),
(5, 1, 'Aptitude', 'Set of cognitive tests includes – abstract/conceptual reasoning, verbal reasoning and numerical reasoning.', 'Aptitude', 'Active', '2018-03-06 08:11:38', 1, '2018-03-06 08:11:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_type` enum('study','moc') NOT NULL,
  `test_name` varchar(20) DEFAULT NULL,
  `test_streamid` int(11) DEFAULT NULL,
  `test_subjectid` int(11) DEFAULT NULL,
  `test_topic` int(11) DEFAULT NULL,
  `test_time` varchar(10) DEFAULT NULL,
  `test_paid` enum('Free','Paid') NOT NULL,
  `test_status` enum('Active','Deactive') NOT NULL,
  `test_createdby` int(11) DEFAULT NULL,
  `test_createddt` datetime DEFAULT NULL,
  `test_updateby` int(11) DEFAULT NULL,
  `test_updateddt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_type`, `test_name`, `test_streamid`, `test_subjectid`, `test_topic`, `test_time`, `test_paid`, `test_status`, `test_createdby`, `test_createddt`, `test_updateby`, `test_updateddt`) VALUES
(3, 'study', 'English Test - 1', 1, 3, 3, '30', 'Free', 'Active', NULL, NULL, NULL, '2018-03-06 13:27:59'),
(7, 'study', 'English Test', 1, 3, 5, '10', 'Free', 'Active', NULL, NULL, NULL, '2018-03-06 14:37:44'),
(10, 'study', 'Physics_Test_1', 1, 4, 6, '30', 'Free', 'Active', NULL, NULL, NULL, '2018-03-06 15:49:56'),
(11, 'study', 'English Test2', 1, 3, 5, '2', 'Free', 'Active', NULL, NULL, NULL, '2018-03-22 09:55:14'),
(12, 'moc', 'test one', NULL, NULL, NULL, '123', 'Free', 'Active', NULL, NULL, NULL, '2018-03-23 06:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `testque`
--

CREATE TABLE `testque` (
  `testque_id` int(11) NOT NULL,
  `testque_testid` int(11) DEFAULT NULL,
  `testque_queid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testque`
--

INSERT INTO `testque` (`testque_id`, `testque_testid`, `testque_queid`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 2, 3),
(5, 2, 4),
(6, 2, 5),
(7, 3, 13),
(8, 3, 14),
(9, 3, 15),
(10, 3, 16),
(11, 3, 17),
(12, 3, 18),
(13, 4, 13),
(14, 4, 14),
(15, 4, 15),
(16, 4, 16),
(17, 4, 17),
(18, 4, 18),
(19, 4, 13),
(20, 4, 14),
(21, 4, 15),
(22, 4, 16),
(23, 4, 18),
(24, 4, 13),
(25, 4, 14),
(26, 4, 15),
(27, 4, 16),
(28, 4, 18),
(29, 7, 13),
(30, 7, 14),
(31, 7, 15),
(32, 7, 16),
(33, 7, 18),
(34, 8, 1),
(35, 8, 2),
(36, 8, 3),
(37, 8, 4),
(38, 8, 5),
(39, 8, 1),
(40, 8, 2),
(41, 8, 3),
(42, 8, 5),
(43, 8, 19),
(44, 11, 35),
(45, 11, 36),
(46, 11, 37),
(47, 11, 38),
(48, 12, 35),
(49, 12, 36),
(50, 12, 37),
(51, 12, 38);

-- --------------------------------------------------------

--
-- Table structure for table `test_appear`
--

CREATE TABLE `test_appear` (
  `appear_id` int(11) NOT NULL,
  `appear_stuid` int(11) DEFAULT NULL,
  `appear_sessionid` varchar(100) NOT NULL,
  `appear_queid` int(11) DEFAULT NULL,
  `appear_ans` enum('Right','Wrong') DEFAULT NULL,
  `appear_option` int(11) NOT NULL,
  `appear_testid` int(11) NOT NULL,
  `appear_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_appear`
--

INSERT INTO `test_appear` (`appear_id`, `appear_stuid`, `appear_sessionid`, `appear_queid`, `appear_ans`, `appear_option`, `appear_testid`, `appear_date`) VALUES
(134, 2, 'qvir5furvajandqkrm4sesf366', 35, 'Right', 2, 11, NULL),
(135, 2, 'dr62hjca7fhsldie25pmjlc537', 35, 'Right', 2, 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `topic_stream` int(11) NOT NULL,
  `topic_subject` int(11) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `topic_status` enum('Active','Inactive') NOT NULL,
  `topic_createddate` datetime NOT NULL,
  `topic_createdby` int(11) NOT NULL,
  `topic_updateddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topic_updatedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_stream`, `topic_subject`, `topic_name`, `topic_status`, `topic_createddate`, `topic_createdby`, `topic_updateddate`, `topic_updatedby`) VALUES
(1, 0, 1, 'SET OF THEORY AND RELATION', 'Active', '2018-03-05 13:14:35', 1, '2018-03-05 12:14:35', 0),
(5, 0, 3, 'SYNONYMS', 'Active', '2018-03-06 12:36:22', 1, '2018-03-06 12:36:22', 0),
(6, 0, 4, 'MOTION IN TWO DIMENSION', 'Active', '2018-03-06 15:38:35', 1, '2018-03-06 15:38:35', 0),
(7, 0, 1, 'sdessss', 'Active', '0000-00-00 00:00:00', 0, '2018-03-09 08:26:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_typeid` int(11) NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL,
  `user_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_country`, `user_pass`, `user_typeid`, `user_status`, `user_time`) VALUES
(1, 'admin', 'admin@gmail.com', '9876574653', 'India', '37d9bb9c3db4131ebbc6f953884b390fc10169ca', 1, 'Active', '2018-02-05 21:56:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imuoption`
--
ALTER TABLE `imuoption`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `testque`
--
ALTER TABLE `testque`
  ADD PRIMARY KEY (`testque_id`);

--
-- Indexes for table `test_appear`
--
ALTER TABLE `test_appear`
  ADD PRIMARY KEY (`appear_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imuoption`
--
ALTER TABLE `imuoption`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `testque`
--
ALTER TABLE `testque`
  MODIFY `testque_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `test_appear`
--
ALTER TABLE `test_appear`
  MODIFY `appear_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
