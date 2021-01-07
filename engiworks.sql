-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 04:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engiworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminId` int(50) NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `ProfilePic` varchar(50) NOT NULL DEFAULT 'default.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminId`, `AdminName`, `Password`, `Email`, `Contact`, `ProfilePic`) VALUES
(1, 'harsh', '123', 'harsh123@tgmail.ciom', '1234567890', 'default.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(500) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CategoryID`, `CategoryName`, `Status`) VALUES
(1, 'Web Development', 0),
(2, 'App Development', 0),
(3, 'Digital Marketing', 0),
(4, 'Web Designing', 0),
(5, 'Graphic Designing', 0),
(6, '3D Rendering', 0),
(7, '3D Animation', 0),
(8, 'Data Entry', 0),
(9, 'demoo', 0),
(10, 'demo111', 0),
(11, 'axyz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `CityID` int(11) NOT NULL,
  `CityName` varchar(500) NOT NULL,
  `StateID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`CityID`, `CityName`, `StateID`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Bharuch', 1),
(3, 'Gandhinagar', 1),
(4, 'Surat', 1),
(5, 'Vadodra', 1),
(6, 'Valsad', 1),
(7, 'Ahmednagar', 2),
(8, 'Bhiwandi', 2),
(9, 'Jalna', 2),
(10, 'Lavasa', 2),
(11, 'Lonavala', 2),
(12, 'Kolhapur', 2),
(13, 'Silchar', 3),
(14, 'Tezpur', 3),
(15, 'Dispur', 3),
(16, 'Guwahati', 3),
(17, 'Jorhat', 3),
(18, 'Nagaon', 3),
(19, 'Jamshedpur', 4),
(20, 'Dhanbad', 4),
(21, 'Hazaribag', 4),
(22, 'Medininagar', 4),
(23, 'Chirkunda', 4),
(24, 'Madhupur', 4),
(25, 'Calangute', 5),
(26, 'Mapusa', 5),
(27, 'Margao', 5),
(28, 'Panaji', 5),
(29, 'Vasco Da Gama', 5),
(30, 'Gulmarg', 6),
(31, 'Jammu', 6),
(32, 'Leh', 6),
(33, 'Pahalgam', 6),
(34, 'Sopore', 6),
(35, 'Srinagar', 6),
(36, 'Kannur', 7),
(37, 'Kochi', 7),
(38, 'Kottayam', 7),
(39, 'Kovalam', 7),
(40, 'Kumarakom', 7),
(41, 'Thalassery', 7),
(42, 'Bhopal', 8),
(43, 'Gwalior', 8),
(44, 'Jabalpur', 8),
(45, 'Khandwa', 8),
(46, 'Sehore', 8),
(47, 'Ujjain', 8),
(48, 'Williamnagar', 9),
(49, 'Tura', 9),
(50, 'Resubelpara', 9),
(51, 'Baghmara', 9),
(52, 'Shillong', 9),
(53, 'Nongpoh', 9),
(54, 'Ajmer', 10),
(55, 'Bundi', 10),
(56, 'Bikaner', 10),
(57, 'Jaipur', 10),
(58, 'Bhiwadi', 10),
(59, 'Banswara', 10),
(60, 'Brooks', 23),
(61, 'Camrose', 23),
(62, 'Fort Saskatchewan', 23),
(63, 'Lacombe', 23),
(64, 'Edmonton', 23),
(65, 'Cold Lake', 23),
(66, 'Burnaby', 24),
(67, 'Colwood', 24),
(68, 'Delta', 24),
(69, 'Grand Forks', 24),
(70, 'Greenwood', 24),
(71, 'Nanaimo', 24),
(72, 'Brandon', 25),
(73, 'Dauphin', 25),
(74, 'Flin Flon', 25),
(75, 'Morden', 25),
(76, 'Selkirk', 25),
(77, 'Thompson', 25),
(78, 'Moncton', 26),
(79, 'Saint John', 26),
(80, 'Fredericton', 26),
(81, 'Dieppe', 26),
(82, 'Riverview', 26),
(83, 'Edmundston', 26),
(84, 'St. John\'s', 27),
(85, 'Mount Pearl', 27),
(86, 'Corner Brook', 27),
(87, 'Fort Smith', 28),
(88, 'Hay River', 28),
(89, 'Inuvik', 28),
(90, 'Tuktoyaktuk', 28),
(91, 'Yellowknife', 28),
(92, 'Baddeck', 29),
(93, 'Digby', 29),
(94, 'Glace Bay', 29),
(95, 'Halifax', 29),
(96, 'Liverpool', 29),
(97, 'Lunenburg', 29),
(98, 'Bancroft', 30),
(99, 'Barrie', 30),
(100, 'Belleville', 30),
(101, 'Guelph', 30),
(102, 'Etobicoke', 30),
(103, 'Chatham', 30),
(104, 'Borden', 31),
(105, 'Cavendish', 31),
(106, 'Charlottetown', 31),
(107, 'Souris', 31),
(108, 'Summerside', 31),
(109, 'Batoche', 32),
(110, 'Cumberland House', 32),
(111, 'Estevan', 32),
(112, 'Flin Flon', 32),
(113, 'Moose Jaw', 32),
(114, 'Prince Albert', 32),
(115, 'Charlottenburg', 33),
(116, 'Spandau ', 33),
(117, 'Tempelhof', 33),
(118, 'Tiergarten', 33),
(119, 'Amberg', 34),
(120, 'Ansbach', 34),
(121, 'Dinkelsbühl', 34),
(122, 'Erlangen', 34),
(123, 'Lindau', 34),
(124, 'Hannover (Hanover)', 35),
(125, 'Braunschweig (Brunswick)', 35),
(126, 'Oldenburg', 35),
(127, 'Osnabrück', 35),
(128, 'Wolfsburg', 35),
(129, 'Frankfurt am Main', 36),
(130, 'Wiesbaden', 36),
(131, 'Kassel', 36),
(132, 'Darmstadt', 36),
(133, 'Offenbach', 36),
(134, 'Potsdam', 37),
(135, 'Cottbus', 37),
(136, 'Frankfurt (Oder)', 37),
(137, 'Oranienburg', 37),
(138, 'Falkensee', 37),
(139, 'Kiel', 39),
(140, 'Lübeck', 39),
(141, 'Flensburg', 39),
(142, 'Neumünster', 39),
(143, 'Elmshorn', 39),
(144, 'Leipzig', 42),
(145, 'Dresden', 42),
(146, 'Chemnitz', 42),
(147, 'Zwickau', 42),
(148, 'Freiberg', 42),
(149, 'Sydney', 43),
(150, 'Armidale', 43),
(151, 'Parkes', 43),
(152, 'Broken Hill', 43),
(153, 'Coffs Harbour', 43),
(154, 'Brisbane', 44),
(155, 'Gold Coast', 44),
(156, 'Sunshine Coast', 44),
(157, 'Dalby', 44),
(158, 'Hervey Bay', 44),
(159, 'Adelaide', 45),
(160, 'Mount Gambier', 45),
(161, 'Mount Barker', 45),
(162, 'Port Augusta', 45),
(163, 'Port Lincoln', 45),
(164, 'Hobart', 46),
(165, 'Devonport', 46),
(166, 'Launceston', 46),
(167, 'Burnie - Somerset', 46),
(168, 'Ulverstone', 46),
(169, 'Melbourne', 47),
(170, 'Geelong', 47),
(171, 'Ballarat', 47),
(172, 'Warrnambool', 47),
(173, 'Sunbury', 47),
(174, 'Perth', 48),
(175, 'Kalgoorlie - Boulder', 48),
(176, 'Broome', 48),
(177, 'Ellenbrook', 48),
(178, 'Port Hedland', 48),
(184, 'hello', 43),
(185, 'Dummas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `ComplaintID` int(11) NOT NULL,
  `Complain` varchar(2000) NOT NULL,
  `SenderID` int(11) NOT NULL,
  `ReceiverID` int(11) NOT NULL,
  `CreatedDt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`ComplaintID`, `Complain`, `SenderID`, `ReceiverID`, `CreatedDt`, `Status`) VALUES
(1, 'ccfddfd', 7, 3, '2020-04-03 15:31:28', 0),
(2, 'vbbgftrteere', 7, 6, '2020-04-03 15:32:34', 0),
(3, 'fgfffgfrerr', 7, 2, '2020-04-03 15:33:30', 0),
(4, 'dfdvcvd', 7, 2, '2020-04-03 15:34:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcountry`
--

CREATE TABLE `tblcountry` (
  `CountryID` int(11) NOT NULL,
  `CountryName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcountry`
--

INSERT INTO `tblcountry` (`CountryID`, `CountryName`) VALUES
(1, 'India'),
(2, 'Australia'),
(3, 'Canada'),
(4, 'Germany'),
(5, 'South Africa'),
(7, 'Dubai');

-- --------------------------------------------------------

--
-- Table structure for table `tblengireg`
--

CREATE TABLE `tblengireg` (
  `engiid` int(50) NOT NULL,
  `profilepic` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bios` varchar(6000) NOT NULL,
  `CityID` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `status` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblengireg`
--

INSERT INTO `tblengireg` (`engiid`, `profilepic`, `name`, `email`, `gender`, `bios`, `CityID`, `birthdate`, `qualification`, `experience`, `status`, `password`, `UserId`) VALUES
(19, '-921002286.jpg', 'jayesh', 'jayesh@gmail.com', 'Male', 'djskdjksdj fdf dfdf', '7', '1995-12-10', 'MBA', '4', 0, '123', 3),
(20, '-1868883987.jpg', 'Ganesh', 'ganesh@gmail.com', 'Male', 'dkfjdkfhds', '123', '0000-00-00', 'MCA', '5', 0, '123', 6),
(21, 'after_the_war.jpg', 'Parul', 'parul@gmail.com', 'Select Gender', 'fksdjskdjks', '174', '0000-00-00', 'USA', '3', 0, '123', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotification`
--

CREATE TABLE `tblnotification` (
  `NotificationID` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `SenderID` int(11) NOT NULL,
  `ReceiverID` int(11) NOT NULL,
  `CreatedDt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotification`
--

INSERT INTO `tblnotification` (`NotificationID`, `Message`, `SenderID`, `ReceiverID`, `CreatedDt`, `Status`) VALUES
(1, 'Review Posted Successfully on vivekvr', 2, 2, '2019-12-22 05:23:43', 1),
(2, 'divyesh leave a review on you', 2, 16, '2019-12-22 05:23:43', 1),
(3, 'Review Posted Successfully on suresh', 2, 2, '2019-12-22 05:24:11', 1),
(4, 'divyesh leave a review on you', 2, 6, '2019-12-22 05:24:11', 1),
(5, 'Review Posted Successfully on suresh', 2, 2, '2019-12-22 09:35:43', 1),
(6, 'divyesh leave a review on you', 2, 6, '2019-12-22 09:35:43', 1),
(7, 'Review Posted Successfully on divyesh', 18, 18, '2019-12-22 16:39:26', 1),
(8, 'abhi leave a review on you', 18, 2, '2019-12-22 16:39:26', 1),
(9, 'Review Posted Successfully on vivek', 11, 11, '2019-12-22 16:40:06', 1),
(10, 'grishma leave a review on you', 11, 3, '2019-12-22 16:40:06', 1),
(11, 'Linux skill request sended successfully', 18, 18, '2019-12-22 16:43:33', 1),
(12, 'abhi send skill request', 18, 1, '2019-12-22 16:43:33', 1),
(13, 'maulik Posted a complaint on jayesh', 20, 1, '2019-12-22 16:47:18', 1),
(14, 'Your complaint on jayesh is posted successfully', 20, 20, '2019-12-22 16:47:18', 0),
(15, 'ganesh Posted a complaint on jayesh', 9, 1, '2019-12-22 16:47:52', 1),
(16, 'Your complaint on jayesh is posted successfully', 9, 9, '2019-12-22 16:47:52', 0),
(17, 'divyesh Posted a complaint on jayesh', 2, 1, '2019-12-22 16:48:22', 1),
(18, 'Your complaint on jayesh is posted successfully', 2, 2, '2019-12-22 16:48:22', 1),
(19, 'Your Bid Posted on Develop a PHP Web', 18, 18, '2019-12-22 16:55:05', 1),
(20, 'abhi Post Bid on Your Project Develop a PHP Web', 18, 3, '2019-12-22 16:55:05', 1),
(21, 'yagnesh Posted a complaint on suresh', 7, 1, '2019-12-22 17:43:53', 1),
(22, 'Your complaint on suresh is posted successfully', 7, 7, '2019-12-22 17:43:53', 0),
(23, 'Review Posted Successfully on vivek', 18, 18, '2019-12-24 12:41:06', 1),
(24, 'abhi leave a review on you', 18, 3, '2019-12-24 12:41:06', 1),
(25, 'Your Bid Posted on create dynamic web', 18, 18, '2019-12-24 13:19:29', 1),
(26, 'abhi Post Bid on Your Project create dynamic web', 18, 20, '2019-12-24 13:19:29', 0),
(27, 'Your Bid Posted on create dynamic web', 18, 18, '2019-12-24 13:37:16', 1),
(28, 'abhi Post Bid on Your Project create dynamic web', 18, 20, '2019-12-24 13:37:16', 0),
(29, 'Your Bid Posted on Create Shopping Web', 18, 18, '2019-12-24 16:46:33', 1),
(30, 'abhi Post Bid on Your Project Create Shopping Web', 18, 3, '2019-12-24 16:46:33', 1),
(31, 'Your profile updated Successfully', 18, 18, '2019-12-25 05:15:45', 1),
(32, 'Your profile updated Successfully', 18, 18, '2019-12-25 05:17:17', 1),
(33, 'Your profile updated Successfully', 18, 18, '2019-12-25 05:24:22', 1),
(34, 'Your profile updated Successfully', 18, 18, '2019-12-25 05:41:34', 1),
(35, 'Your profile updated Successfully', 18, 18, '2019-12-25 05:43:40', 1),
(36, 'Your profile updated Successfully', 18, 18, '2019-12-25 05:47:55', 1),
(37, 'Your profile updated Successfully', 11, 11, '2019-12-25 05:52:45', 1),
(38, 'Your profile updated Successfully', 11, 11, '2019-12-25 05:53:47', 1),
(39, 'Your Bid Posted on dsdkshjh', 11, 11, '2019-12-25 05:59:04', 0),
(40, 'grishma Post Bid on Your Project dsdkshjh', 11, 6, '2019-12-25 05:59:04', 0),
(41, 'Your Bid Posted on dsdkshjh', 11, 11, '2019-12-25 05:59:20', 0),
(42, 'grishma Post Bid on Your Project dsdkshjh', 11, 6, '2019-12-25 05:59:20', 0),
(43, 'Your Bid Posted on create a animation', 18, 18, '2019-12-25 06:03:05', 1),
(44, 'abhi Post Bid on Your Project create a animation', 18, 20, '2019-12-25 06:03:05', 0),
(45, 'Your Bid Posted on create dynamic web', 4, 4, '2019-12-25 06:12:32', 0),
(46, 'paresh Post Bid on Your Project create dynamic web', 4, 20, '2019-12-25 06:12:32', 0),
(47, 'Your Bid Posted on Develop a PHP Web', 4, 4, '2019-12-25 06:16:53', 0),
(48, 'paresh Post Bid on Your Project Develop a PHP Web', 4, 3, '2019-12-25 06:16:53', 1),
(49, 'Your Bid Posted on erejkjkj', 4, 4, '2019-12-25 06:21:44', 0),
(50, 'paresh Post Bid on Your Project erejkjkj', 4, 6, '2019-12-25 06:21:44', 0),
(51, 'Your profile updated Successfully', 5, 5, '2019-12-25 07:14:43', 0),
(52, 'Skill of IOS is added successfully', 5, 5, '2019-12-25 07:14:56', 0),
(53, 'Skill of SMS Marketing is added successfully', 5, 5, '2019-12-25 07:15:01', 0),
(54, 'Skill of Photoshop is added successfully', 5, 5, '2019-12-25 07:15:31', 0),
(55, 'Skill of Interactive is added successfully', 5, 5, '2019-12-25 07:15:37', 0),
(56, 'Skill of Accounting is added successfully', 5, 5, '2019-12-25 07:15:42', 0),
(57, 'Skill of SCSS is added successfully', 9, 9, '2019-12-25 07:16:13', 0),
(58, 'Skill of InDesign is added successfully', 9, 9, '2019-12-25 07:16:17', 0),
(59, 'Skill of Handwriting is added successfully', 9, 9, '2019-12-25 07:16:21', 0),
(60, 'Skill of Virtual Reality is added successfully', 9, 9, '2019-12-25 07:16:26', 0),
(61, 'Your Bid Posted on Clone a website - Web developer needed for an Ecommerce Website', 2, 2, '2019-12-25 09:32:36', 1),
(62, 'divyesh Post Bid on Your Project Clone a website - Web developer needed for an Ecommerce Website', 2, 3, '2019-12-25 09:32:36', 1),
(63, 'Your Bid Posted on Looking for a longterm webdeveloper', 2, 2, '2019-12-25 09:45:37', 1),
(64, 'divyesh Post Bid on Your Project Looking for a longterm webdeveloper', 2, 3, '2019-12-25 09:45:37', 1),
(65, 'Your Bid Posted on Design and develop website front-end', 2, 2, '2019-12-25 09:46:03', 1),
(66, 'divyesh Post Bid on Your Project Design and develop website front-end', 2, 3, '2019-12-25 09:46:03', 1),
(67, 'Your profile picture updated Successfully', 18, 18, '2019-12-25 09:50:22', 1),
(68, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 09:54:45', 1),
(69, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 09:57:54', 1),
(70, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 10:00:24', 1),
(71, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 10:03:27', 1),
(72, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 10:07:32', 1),
(73, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 10:20:13', 1),
(74, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 10:20:40', 1),
(75, 'Your profile picture updated Successfully', 2, 2, '2019-12-25 10:29:35', 1),
(76, 'divyesh send verification request', 2, 1, '2019-12-25 10:32:20', 1),
(77, 'Verification Request sended successfully', 2, 2, '2019-12-25 10:32:20', 1),
(78, 'divyesh send verification request', 2, 1, '2019-12-25 10:35:48', 1),
(79, 'Verification Request sended successfully', 2, 2, '2019-12-25 10:35:48', 1),
(80, 'paresh send verification request', 4, 1, '2019-12-25 11:05:38', 1),
(81, 'Verification Request sended successfully', 4, 4, '2019-12-25 11:05:38', 0),
(82, 'Your verification Request is accepted by admin', 1, 4, '2019-12-25 11:06:02', 0),
(83, 'Your verification Request is rejected by admin', 1, 4, '2019-12-25 11:06:02', 0),
(95, 'Your Bid Posted on Angular Node Java Developers', 18, 18, '2019-12-25 16:31:59', 1),
(96, 'abhi Post Bid on Your Project Angular Node Java Developers', 18, 20, '2019-12-25 16:31:59', 0),
(97, 'Your Bid Posted on System Administrator - MySQL, Magento, PHP, Apache, WHM, Cpanel etc.', 18, 18, '2019-12-25 16:32:30', 1),
(98, 'abhi Post Bid on Your Project System Administrator - MySQL, Magento, PHP, Apache, WHM, Cpanel etc.', 18, 20, '2019-12-25 16:32:30', 0),
(99, 'Your Bid Posted on Looking for freelance Laravel webdeveloper', 18, 18, '2019-12-25 16:32:51', 1),
(100, 'abhi Post Bid on Your Project Looking for freelance Laravel webdeveloper', 18, 6, '2019-12-25 16:32:51', 0),
(101, 'Your Bid Posted on Rapid Prototype maker', 18, 18, '2019-12-25 16:33:08', 1),
(102, 'abhi Post Bid on Your Project Rapid Prototype maker', 18, 6, '2019-12-25 16:33:08', 0),
(103, 'Your Bid Posted on Looking for a longterm webdeveloper', 18, 18, '2019-12-25 16:33:26', 1),
(104, 'abhi Post Bid on Your Project Looking for a longterm webdeveloper', 18, 3, '2019-12-25 16:33:26', 1),
(105, 'Your Bid Posted on SQL Server Expert - ETL', 4, 4, '2019-12-25 16:34:13', 0),
(106, 'paresh Post Bid on Your Project SQL Server Expert - ETL', 4, 3, '2019-12-25 16:34:13', 1),
(107, 'Your Bid Posted on Angular Node Java Developers', 11, 11, '2019-12-25 16:39:11', 0),
(108, 'grishma Post Bid on Your Project Angular Node Java Developers', 11, 20, '2019-12-25 16:39:11', 0),
(109, 'Your Bid Posted on Clone a website - Web developer needed for an Ecommerce Website', 11, 11, '2019-12-25 16:39:50', 0),
(110, 'grishma Post Bid on Your Project Clone a website - Web developer needed for an Ecommerce Website', 11, 3, '2019-12-25 16:39:50', 1),
(111, 'Your Bid Posted on Graphic/Web Designer Needed', 11, 11, '2019-12-25 16:40:07', 0),
(112, 'grishma Post Bid on Your Project Graphic/Web Designer Needed', 11, 3, '2019-12-25 16:40:07', 1),
(113, 'Your Bid Posted on Angular Node Java Developers', 4, 4, '2019-12-25 16:41:12', 0),
(114, 'paresh Post Bid on Your Project Angular Node Java Developers', 4, 20, '2019-12-25 16:41:12', 0),
(115, 'Your Bid Posted on Graphic/Web Designer Needed', 17, 17, '2019-12-25 16:44:29', 0),
(116, 'viv5555 Post Bid on Your Project Graphic/Web Designer Needed', 17, 3, '2019-12-25 16:44:29', 1),
(117, 'Your Bid Posted on Looking for freelance Laravel webdeveloper', 5, 5, '2019-12-25 17:02:29', 0),
(118, 'nilesh Post Bid on Your Project Looking for freelance Laravel webdeveloper', 5, 6, '2019-12-25 17:02:29', 0),
(119, 'Your Bid Posted on Looking for freelance Laravel webdeveloper', 4, 4, '2019-12-25 17:08:38', 0),
(120, 'paresh Post Bid on Your Project Looking for freelance Laravel webdeveloper', 4, 6, '2019-12-25 17:08:38', 0),
(121, 'Your Post Added Sucessfully', 22, 22, '2019-12-25 17:18:26', 1),
(122, 'Your Bid Posted on demo', 23, 23, '2019-12-25 17:21:31', 1),
(123, 'demo1 Post Bid on Your Project demo', 23, 22, '2019-12-25 17:21:31', 1),
(124, 'Certificate of Digital Marketing is added successfully', 23, 23, '2019-12-25 17:25:41', 1),
(125, 'Certificate of Digital Marketing is removed successfully', 23, 23, '2019-12-25 17:29:18', 1),
(126, 'Certificate of Digital Marketing is removed successfully', 23, 23, '2019-12-25 17:29:19', 1),
(127, 'Certificate of MscICT is removed successfully', 23, 23, '2019-12-25 17:29:28', 1),
(128, 'Certificate of MscICT is removed successfully', 23, 23, '2019-12-25 17:29:30', 1),
(129, 'Certificate of Web Designing is removed successfully', 23, 23, '2019-12-25 17:29:55', 1),
(130, 'Certificate of Web Designing is removed successfully', 23, 23, '2019-12-25 17:29:56', 1),
(131, 'Certificate of BCE is removed successfully', 23, 23, '2019-12-25 17:31:48', 1),
(132, 'Skill of Android is added successfully', 23, 23, '2019-12-25 17:32:23', 1),
(133, 'Magento skill request sended successfully', 23, 23, '2019-12-25 17:33:05', 1),
(134, 'demo1 send skill request', 23, 1, '2019-12-25 17:33:05', 1),
(135, 'Your Bid Posted on demo', 23, 23, '2019-12-25 17:36:13', 1),
(136, 'demo1 Post Bid on Your Project demo', 23, 22, '2019-12-25 17:36:13', 1),
(137, 'Successfully removed bid on demo', 23, 23, '2019-12-25 17:36:22', 1),
(138, 'Your Project demo is assigned to demo1', 22, 22, '2019-12-25 17:39:39', 1),
(139, 'Your bid of demo is accepted and demo1 assinged work of this Project', 22, 23, '2019-12-25 17:39:39', 0),
(140, 'Certificate of MscICT is removed successfully', 23, 23, '2019-12-25 17:43:55', 0),
(141, 'Skill of Android is removed successfully', 23, 23, '2019-12-25 17:44:02', 0),
(142, 'Skill of Bootstrap is added successfully', 23, 23, '2019-12-25 17:44:06', 0),
(143, 'Linux added successfully', 1, 1, '2019-12-25 17:46:00', 1),
(144, 'Your skill request of Linux is accepted by admin and added to your skill', 1, 18, '2019-12-25 17:46:00', 1),
(145, 'Your skill request of Linux is rejected by admin', 1, 18, '2019-12-25 17:46:00', 1),
(146, 'Your profile updated Successfully', 22, 22, '2019-12-25 17:48:15', 0),
(147, 'Your Password is changed', 22, 22, '2019-12-25 17:51:17', 0),
(148, 'demo send verification request', 22, 1, '2019-12-25 17:52:26', 1),
(149, 'Verification Request sended successfully', 22, 22, '2019-12-25 17:52:26', 0),
(150, 'Review Posted Successfully on nilesh', 2, 2, '2019-12-25 18:15:59', 1),
(151, 'divyesh leave a review on you', 2, 5, '2019-12-25 18:15:59', 0),
(152, 'Review Posted Successfully on paresh', 6, 6, '2019-12-25 18:19:24', 0),
(153, 'suresh leave a review on you', 6, 4, '2019-12-25 18:19:24', 0),
(154, 'suresh Posted a complaint on nilesh', 6, 1, '2019-12-25 18:20:08', 1),
(155, 'Your complaint on nilesh is posted successfully', 6, 6, '2019-12-25 18:20:08', 0),
(156, 'Skill of JavaScript is added successfully', 16, 16, '2019-12-25 18:24:27', 1),
(157, 'Skill of Android is added successfully', 16, 16, '2019-12-25 18:24:31', 1),
(158, 'Skill of Search Engine Optimization (SEO) is added successfully', 16, 16, '2019-12-25 18:24:38', 1),
(159, 'Skill of Animation is added successfully', 16, 16, '2019-12-25 18:24:44', 1),
(160, 'Skill of Linux is added successfully', 16, 16, '2019-12-25 18:24:50', 1),
(161, 'Skill of Bootstrap is added successfully', 16, 16, '2019-12-25 18:24:56', 1),
(162, 'Skill of C#.Net is added successfully', 16, 16, '2019-12-25 18:25:01', 1),
(163, 'Review Posted Successfully on paresh', 3, 3, '2019-12-26 04:57:54', 1),
(164, 'vivek leave a review on you', 3, 4, '2019-12-26 04:57:54', 0),
(165, 'Review Posted Successfully on jayesh', 3, 3, '2019-12-26 04:59:03', 1),
(166, 'vivek leave a review on you', 3, 21, '2019-12-26 04:59:03', 0),
(167, 'xyz added successfully', 1, 1, '2019-12-26 06:17:54', 1),
(168, 'axyz updated successfully', 1, 1, '2019-12-26 06:18:09', 1),
(169, 'Entity.Tblskills[ skillID=null ] added successfully', 1, 1, '2019-12-26 06:18:43', 1),
(170, 'Review Posted Successfully on divyesh', 24, 24, '2019-12-26 06:23:54', 1),
(171, 'krisha leave a review on you', 24, 2, '2019-12-26 06:23:54', 1),
(172, 'krisha Posted a complaint on divyesh', 24, 1, '2019-12-26 06:24:13', 1),
(173, 'Your complaint on divyesh is posted successfully', 24, 24, '2019-12-26 06:24:13', 1),
(174, 'Your Post Added Sucessfully', 24, 24, '2019-12-26 06:26:21', 1),
(175, 'Your Bid Posted on projectdemo', 2, 2, '2019-12-26 06:30:21', 1),
(176, 'divyesh Post Bid on Your Project projectdemo', 2, 24, '2019-12-26 06:30:21', 1),
(177, 'Your Project projectdemo is assigned to divyesh', 24, 24, '2019-12-26 06:42:35', 1),
(178, 'Your bid of projectdemo is accepted and divyesh assinged work of this Project', 24, 2, '2019-12-26 06:42:35', 1),
(179, 'Successfully removed bid on Looking for a longterm webdeveloper', 2, 2, '2019-12-26 06:43:18', 1),
(180, 'Successfully removed bid on Clone a website - Web developer needed for an Ecommerce Website', 2, 2, '2019-12-26 06:43:22', 1),
(181, 'Certificate of MCA is removed successfully', 2, 2, '2019-12-26 06:43:44', 1),
(182, 'Skill of SCSS is removed successfully', 2, 2, '2019-12-26 06:44:05', 1),
(183, 'ggg skill request sended successfully', 2, 2, '2019-12-26 06:44:19', 1),
(184, 'divyesh send skill request', 2, 1, '2019-12-26 06:44:19', 1),
(185, 'Project detail submitted successfully', 2, 2, '2019-12-28 08:33:52', 1),
(186, 'divyesh Submit a data of projectdemo', 2, 24, '2019-12-28 08:33:52', 1),
(187, 'Your Project Looking for a longterm webdeveloper is assigned to abhi', 3, 3, '2019-12-28 09:29:24', 1),
(188, 'Your bid of Looking for a longterm webdeveloper is accepted and abhi assinged work of this Project', 3, 18, '2019-12-28 09:29:24', 1),
(189, 'Project detail submitted successfully', 18, 18, '2019-12-28 09:30:24', 1),
(190, 'abhi Submit a data of Looking for a longterm webdeveloper', 18, 3, '2019-12-28 09:30:24', 1),
(191, 'Project detail submitted successfully', 2, 2, '2019-12-28 09:52:21', 1),
(192, 'divyesh Submit a data of projectdemo', 2, 24, '2019-12-28 09:52:21', 1),
(193, 'Project detail submitted successfully', 2, 2, '2019-12-28 10:01:35', 1),
(194, 'divyesh Submit a data of projectdemo', 2, 24, '2019-12-28 10:01:35', 0),
(195, 'Your Post Added Sucessfully', 3, 3, '2020-01-04 05:39:21', 1),
(196, 'Your Bid Posted on demo1', 2, 2, '2020-01-04 05:41:06', 1),
(197, 'divyesh Post Bid on Your Project demo1', 2, 3, '2020-01-04 05:41:06', 1),
(198, 'Your Project demo1 is assigned to divyesh', 3, 3, '2020-01-04 05:44:22', 1),
(199, 'Your bid of demo1 is accepted and divyesh assinged work of this Project', 3, 2, '2020-01-04 05:44:22', 1),
(200, 'Project detail submitted successfully', 2, 2, '2020-01-04 05:45:57', 1),
(201, 'divyesh Submit a data of demo1', 2, 3, '2020-01-04 05:45:57', 1),
(202, 'Certificate of MscICT is removed successfully', 2, 2, '2020-01-04 05:47:12', 1),
(203, 'Skill of PHP is removed successfully', 2, 2, '2020-01-04 05:47:25', 1),
(204, 'Your Bid Posted on Looking for freelance Laravel webdeveloper', 2, 2, '2020-01-13 09:56:32', 1),
(205, 'divyesh Post Bid on Your Project Looking for freelance Laravel webdeveloper', 2, 6, '2020-01-13 09:56:32', 0),
(206, 'Successfully removed bid on Looking for freelance Laravel webdeveloper', 2, 2, '2020-01-13 09:56:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectassign`
--

CREATE TABLE `tblprojectassign` (
  `ProjectAssignedID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprojectassign`
--

INSERT INTO `tblprojectassign` (`ProjectAssignedID`, `ProjectID`, `UserID`, `Description`, `Duration`) VALUES
(8, 6, 3, 'fsdsklsdlskdlsd', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectbid`
--

CREATE TABLE `tblprojectbid` (
  `ProjectBidID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `BidAmount` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprojectbid`
--

INSERT INTO `tblprojectbid` (`ProjectBidID`, `ProjectID`, `BidAmount`, `UserID`, `Description`, `Status`) VALUES
(1, 6, 3750, 3, 'xdsdssd', 1),
(2, 6, 3040, 3, 'gfgfddfdd', 1),
(3, 6, 4420, 3, 'vdfdffdff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojects`
--

CREATE TABLE `tblprojects` (
  `ProjectID` int(11) NOT NULL,
  `Title` varchar(2000) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Description` varchar(1500) NOT NULL,
  `StartingDate` varchar(10) NOT NULL,
  `EndingDate` varchar(10) NOT NULL,
  `UserID` int(11) NOT NULL,
  `SubCategoryID` int(11) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '0',
  `Rate` int(11) NOT NULL,
  `NoOfHoursPerDay` int(11) NOT NULL,
  `Document` varchar(2000) NOT NULL,
  `URL` varchar(2000) NOT NULL,
  `CreatedDt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprojects`
--

INSERT INTO `tblprojects` (`ProjectID`, `Title`, `Duration`, `Description`, `StartingDate`, `EndingDate`, `UserID`, `SubCategoryID`, `Status`, `Rate`, `NoOfHoursPerDay`, `Document`, `URL`, `CreatedDt`) VALUES
(1, 'demo', 102, 'fdfdfdfdfdfdfdfdfdfdfdf', '10-02-2020', '12-05-2020', 2, 5, 0, 5000, 8, 'From_Inbox_to_Mailbox__Email_Marketing_for_Real_Estate_Sales.pdf', 'http://demo.com', '2020-04-03 17:43:26'),
(4, 'demo', 102, 'sfsdfshdfjhsdkfhskfbkfsgfvsfsjvsfgf', '10-02-2020', '12-05-2020', 2, 35, 0, 5000, 8, '3_Ways_to_Grow_Your_Business_with_Digital_Networking___Fiverr_Blog.pdf', 'http://demo.com', '2020-04-03 17:45:44'),
(6, 'demo', 2000, 'hsjdhh jhds hkshd ', '10-12-2020', '01-02-2021', 2, 10, 1, 5000, 5, 'From_Inbox_to_Mailbox__Email_Marketing_for_Real_Estate_Sales1.pdf', 'http:dmo.com', '2020-04-03 18:47:19'),
(7, 'dffjdslfsjl', 1000, 'hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad hsdkjfhsfs  kdsksdad lasjdladjad', '10-05-2020', '21-09-2021', 5, 27, 0, 3500, 5, 'Social_Media_Marketing_Tips_to_Win_the_Game_in_2018___The_Do_List.pdf', 'http://demo.com', '2020-04-04 08:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `tblrecruterreg`
--

CREATE TABLE `tblrecruterreg` (
  `RecruterId` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `RecruterPic` varchar(500) NOT NULL DEFAULT 'default.jpg',
  `RecruterEmail` varchar(500) NOT NULL,
  `RecruterContact` bigint(10) NOT NULL,
  `RecruterAdd` varchar(1000) NOT NULL,
  `password` varchar(50) NOT NULL,
  `websiteurl` varchar(256) DEFAULT NULL,
  `CityID` int(11) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrecruterreg`
--

INSERT INTO `tblrecruterreg` (`RecruterId`, `name`, `RecruterPic`, `RecruterEmail`, `RecruterContact`, `RecruterAdd`, `password`, `websiteurl`, `CityID`, `Description`, `CompanyName`, `UserId`) VALUES
(7, 'paresh', '-1621745511.jpg', 'paresh@gmail.com', 8745124545, 'IND', '1234', 'www.demo.com', 12, 'fdlfkdlfkl dfddfdf dffdf xxc', 'abc limited', 2),
(8, 'rahul', '06999_HD.jpg', 'rahul@gmail.com', 9885221040, 'UK', '123', 'dsdsdsd', 10, 'sdsldskdsdfdfd sfs', 'xyz infotech', 4),
(9, 'jay', '-673216524.jpg', 'jay@gmail.com', 8452103020, 'IND', '123', NULL, 16, 'fskdjsdklsdk', 'ert infotech', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE `tblreview` (
  `ReviewID` int(11) NOT NULL,
  `ToUserID` int(11) NOT NULL,
  `FromUserID` int(11) NOT NULL,
  `Review` varchar(500) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '0',
  `CreatedDt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`ReviewID`, `ToUserID`, `FromUserID`, `Review`, `Status`, `CreatedDt`, `Rating`) VALUES
(1, 3, 7, 'dfdfddf', 0, '2020-04-03 15:04:06', 3),
(2, 6, 7, 'ffdfdfdff', 0, '2020-04-03 15:04:46', 4),
(3, 6, 7, 'fdfdfdff', 0, '2020-04-03 15:20:18', 5),
(4, 2, 7, 'fdfdfddfdewewe', 0, '2020-04-03 15:21:48', 5),
(5, 5, 2, 'dndf,fnds,fdns', 0, '2020-04-04 09:55:07', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `StateID` int(11) NOT NULL,
  `StateName` varchar(500) NOT NULL,
  `CountryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`StateID`, `StateName`, `CountryID`) VALUES
(1, 'Gujarat', 1),
(2, 'Maharastra', 1),
(3, 'Assam', 1),
(4, 'Jharkhand', 1),
(5, 'Goa', 1),
(6, 'Jammu and Kashmir', 1),
(7, 'Kerala', 1),
(8, 'Madya Pradesh', 1),
(9, 'Meghalaya', 1),
(10, 'Rajasthan', 1),
(23, 'Alberta', 3),
(24, 'British Columbia', 3),
(25, 'Manitoba', 3),
(26, 'New Brunswick', 3),
(27, 'Newfoundland', 3),
(28, 'Northwest Territories', 3),
(29, 'Nova Scotia', 3),
(30, 'Ontario', 3),
(31, 'Prince Edward Island', 3),
(32, 'Saskatchewan', 3),
(33, 'Berlin', 4),
(34, 'Bayern (Bavaria)', 4),
(35, 'Niedersachsen (Lower Saxony)', 4),
(36, 'Hessen', 4),
(37, 'Brandenburg', 4),
(39, 'Schleswig-Holstein', 4),
(42, 'Sachsen (Saxony)', 4),
(43, 'New South Wales', 2),
(44, 'Queensland', 2),
(45, 'South Australia', 2),
(46, 'Tasmania', 2),
(47, 'Victoria', 2),
(48, 'Western Australia', 2),
(51, 'ka', 8),
(52, 'karnatak', 1),
(53, 'chennai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCatID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `SubCatName` varchar(500) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCatID`, `CategoryID`, `SubCatName`, `Status`) VALUES
(1, 1, 'JAVA', 0),
(2, 1, 'PHP', 0),
(3, 1, 'C#.Net', 0),
(4, 1, 'Python', 0),
(5, 1, 'JavaScript', 0),
(6, 1, 'Codeigniter', 0),
(7, 2, 'Android', 0),
(8, 2, 'IOS', 0),
(9, 2, 'Hybrid', 0),
(10, 4, 'CSS', 0),
(11, 4, 'Bootstrap', 0),
(12, 4, 'SCSS', 0),
(13, 4, 'UI/UX Desing', 0),
(14, 3, 'Social Media Marketing', 0),
(15, 3, 'SMS Marketing', 0),
(16, 3, 'Search Engine Optimization (SEO)', 0),
(17, 3, 'Pay-Per-Click', 0),
(18, 5, 'Digital Typography', 0),
(19, 5, 'Photoshop', 0),
(20, 5, 'InDesign', 0),
(21, 3, 'Illustrator', 0),
(22, 6, 'Product Creation', 0),
(23, 6, 'Animation', 0),
(24, 6, 'Concept Design', 0),
(25, 8, 'Accounting', 0),
(26, 8, 'Manual', 0),
(27, 8, 'Product', 0),
(28, 8, 'Online', 0),
(29, 8, 'Handwriting', 0),
(30, 7, 'Interactive', 0),
(31, 7, 'Virtual Reality', 0),
(32, 7, 'Digital', 0),
(33, 9, 'demo11', 0),
(34, 10, 'deeemoo', 0),
(35, 4, 'Linux', 0),
(36, 7, 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `UserEmail` varchar(1000) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Status` int(4) NOT NULL DEFAULT '0',
  `ProfilePic` varchar(2000) DEFAULT 'default.png',
  `UType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `Username`, `UserEmail`, `Password`, `Status`, `ProfilePic`, `UType`) VALUES
(2, 'paresh', 'paresh@gmail.com', '1234', 0, '-1621745511.jpg', 1),
(3, 'jayesh', 'jayesh@gmail.com', '123', 0, '-921002286.jpg', 2),
(4, 'rahul', 'rahul@gmail.com', '123', 0, '06999_HD.jpg', 1),
(5, 'jay', 'jay@gmail.com', '123', 0, '-673216524.jpg', 1),
(6, 'ganesh', 'ganesh@gmail.com', '123', 0, '-1868883987.jpg', 2),
(7, 'parul', 'parul@gmail.com', '123', 0, 'after_the_war.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`CityID`),
  ADD KEY `tblcity_ibfk_1` (`StateID`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`ComplaintID`),
  ADD KEY `ReceiverID` (`ReceiverID`),
  ADD KEY `SenderID` (`SenderID`);

--
-- Indexes for table `tblcountry`
--
ALTER TABLE `tblcountry`
  ADD PRIMARY KEY (`CountryID`);

--
-- Indexes for table `tblengireg`
--
ALTER TABLE `tblengireg`
  ADD PRIMARY KEY (`engiid`);

--
-- Indexes for table `tblnotification`
--
ALTER TABLE `tblnotification`
  ADD PRIMARY KEY (`NotificationID`),
  ADD KEY `ReceiverID` (`ReceiverID`),
  ADD KEY `SenderID` (`SenderID`);

--
-- Indexes for table `tblprojectassign`
--
ALTER TABLE `tblprojectassign`
  ADD PRIMARY KEY (`ProjectAssignedID`),
  ADD KEY `tblprojectassign_ibfk_1` (`ProjectID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `tblprojectbid`
--
ALTER TABLE `tblprojectbid`
  ADD PRIMARY KEY (`ProjectBidID`),
  ADD KEY `tblprojectbid_ibfk_2` (`ProjectID`),
  ADD KEY `tblprojectbid_ibfk_1` (`UserID`);

--
-- Indexes for table `tblprojects`
--
ALTER TABLE `tblprojects`
  ADD PRIMARY KEY (`ProjectID`),
  ADD KEY `tblprojects_ibfk_1` (`UserID`);

--
-- Indexes for table `tblrecruterreg`
--
ALTER TABLE `tblrecruterreg`
  ADD PRIMARY KEY (`RecruterId`);

--
-- Indexes for table `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `FromUserID` (`FromUserID`),
  ADD KEY `ToUserID` (`ToUserID`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`StateID`),
  ADD KEY `tblstate_ibfk_1` (`CountryID`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCatID`),
  ADD KEY `tblskills_ibfk_1` (`CategoryID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `AdminId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `CityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `ComplaintID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcountry`
--
ALTER TABLE `tblcountry`
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblengireg`
--
ALTER TABLE `tblengireg`
  MODIFY `engiid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblnotification`
--
ALTER TABLE `tblnotification`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `tblprojectassign`
--
ALTER TABLE `tblprojectassign`
  MODIFY `ProjectAssignedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblprojectbid`
--
ALTER TABLE `tblprojectbid`
  MODIFY `ProjectBidID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblprojects`
--
ALTER TABLE `tblprojects`
  MODIFY `ProjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblrecruterreg`
--
ALTER TABLE `tblrecruterreg`
  MODIFY `RecruterId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `StateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD CONSTRAINT `tblcity_ibfk_1` FOREIGN KEY (`StateID`) REFERENCES `tblstate` (`StateID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
