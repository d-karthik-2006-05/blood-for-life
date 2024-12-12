-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 06:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `district` varchar(100) NOT NULL,
  `phone_number` text NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `full_name`, `email`, `father_name`, `mother_name`, `password`, `blood_group`, `age`, `city`, `gender`, `district`, `phone_number`, `state`, `address`) VALUES
(3, 'ramu', 'ramu@gmail.com', 'krishniah', 'sitamma', '1233', 'A+ve', 20, 'tirupati', 'Male', 'Chittoor', '8688765696', 'Andhra Pradesh', 'railway colony,bavani nagar,tirupati'),
(3, 'kiran kumar', 'kiran@gmail.com', 'seshaiah', 'kavitha', '1234', 'A+ve', 23, 'rayachoty', 'Male', 'Y.S.R. Kadapa', '8247289002', 'Andhra Pradesh', 'kothapeta,ramapuram,rayachoty'),
(4, 'jaswanth', 'jaswnth@gmail.com', 'siva', 'kumari', '1234', 'A-ve', 25, 'tirupati', 'Male', 'Y.S.R. Kadapa', '9757763672', 'Andhra Pradesh', 'k.t road,bhavani nagr,tirupati'),
(4, 'bhaskar', 'bhaskar@gmail.com', 'vekatesh', 'meenakshi', '1234', 'A-ve', 23, 'kadapa', 'Male', 'Y.S.R. Kadapa', '9856095656', 'Andhra Pradesh', 'yerra mukkapalli circle,kadapa town'),
(5, 'karthik', 'karthik@gmail.com', 'shankariah', 'ramadevi', '1234', 'B+ve', 20, 'dhamavaram', 'Male', 'Anantapur', '9988465085', 'Andhra Pradesh', 'dharmavaram town'),
(5, 'narendra', 'narendra@gmail.com', 'redappa', 'sri devi', '1234', 'B+ve', 25, 'vizag', 'Male', 'Visakhapatnam', '8999099875', 'Andhra Pradesh', 'near vizag port,vishakapatanm'),
(6, 'divya sree', 'divya@gmail.com', 'srinivasulu', 'lakshmi devi', '1234', 'B-ve', 24, 'nellore', 'Female', 'Nellore', '9097786247', 'Andhra Pradesh', 'naidu peta,nellore town'),
(6, 'manoj kumar', 'manoj@gmail.com', 'siva kumar', 'latha sree', '1234', 'B-ve', 19, 'adoni', 'Male', 'Kurnool', '9767856844', 'Andhra Pradesh', 'attekallu,aspari ,adoni town'),
(1, 'charan teja', 'charan@gmail.com', 'ramiah', 'saritha', '1234', 'O+ve', 23, 'dhamavaram', 'Male', 'Anantapur', '9893684265', 'Andhra Pradesh', 'dharamavaram town'),
(1, 'sirisha', 'sirisha@gmail.com', 'bhaskar reddy', 'pramela', '1234', 'O+ve', 19, 'chandragiri', 'Female', 'Chittoor', '6309746474', 'Andhra Pradesh', 'reddyavari palli,chandragiri town'),
(2, 'vennela', 'vennela@gamil.com', 'shankarappa', 'shamalmma', '1234', 'O-ve', 27, 'east godavari', 'Female', 'East Godavari', '6394747664', 'Andhra Pradesh', 'east godavari town'),
(1, 'madhavi', 'madhavi@gmail.com', 'chalapathi', 'lakshmi devi', '1234', 'O+ve', 21, 'srikakulam town', 'Female', 'Srikakulam', '6281364240', 'Andhra Pradesh', 'srikakulam town'),
(2, 'madhavi rani', 'madhavi_rani@gmail.com', 'dhanraj', 'nandini', '1234', 'O-ve', 21, 'palasa', 'Female', 'Srikakulam', '6281364240', 'Andhra Pradesh', 'palasa,srikakulam town'),
(7, 'latha sree reddy', 'latha@gmail.com', 'jayanth reddy', 'charitha reddy', '1234', 'AB+ve', 22, 'gooty', 'Female', 'Anantapur', '7382232005', 'Andhra Pradesh', 'gooty town,ananthapuram '),
(7, 'vamsi', 'vamsi@gmail.com', 'ravi kumar', 'sailaja', '1234', 'AB+ve', 25, 'gunthakal', 'Male', 'Kurnool', '7564648498', 'Andhra Pradesh', 'gunthakal town,kurnool'),
(8, 'dhilli kumar', 'dhillikumar@gmail.com', 'lakshman', 'sulochana', '1234', 'AB-ve', 19, 'vizag ', 'Male', 'Visakhapatnam', '6382765655', 'Andhra Pradesh', 'vizag town,beach road 4th street bheemli entrance'),
(8, 'indhusree', 'indhusree@gmail.com', 'hareesh', 'sumati', '1234', 'AB-ve', 21, 'west godavari', 'Female', 'West Godavari', '7886556577', 'Andhra Pradesh', 'west godavari town'),
(2, 'jayanth', 'jaya@gmail.com', 'gfkjh', 'dfnjjd', '1234', 'O-ve', 19, 'kgfjgjg', 'Others', 'Anantapur', '7465758954', 'Andhra Pradesh', 'hkjhkfhu,jb jhl');

-- --------------------------------------------------------

--
-- Table structure for table `eligible`
--

CREATE TABLE `eligible` (
  `Name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `Tattos` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `time` varchar(100) NOT NULL,
  `surgeries` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eligible`
--

INSERT INTO `eligible` (`Name`, `age`, `weight`, `Tattos`, `gender`, `time`, `surgeries`, `email`) VALUES
('bhaskar', '18+', '45+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'bhaskar@gmail.com'),
('charan teja', '18+', '50+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'charan@gmail.com'),
('dhilli kumar', '18+', '45+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'dhillikumar@gmail.com'),
('divya sree', '18+', '45+ kgs', 'No', 'Female', 'Not donated ever', 'No', 'divya@gmail.com'),
('indhusree', '18+', '50+ kgs', 'No', 'Female', 'Not donated ever', 'No', 'indhusree@gmail.com'),
('jaswanth', '18+', '50+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'jaswanth@gmail.com'),
('jayanth', '18+', '60+ kgs', 'No', 'Female', 'Not donated ever', 'No', 'jaya@gmail.com'),
('Karthik ', '18+', '70+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'karthik@gmail.com'),
('kiran kumr', '18+', '45+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'kiran@gmail.com'),
('latha sree', '18+', '45+ kgs', 'No', 'Female', 'Not donated ever', 'No', 'latha@gmail.com'),
('madhavi', '18+', '50+ kgs', 'No', 'Female', 'Not donated ever', 'No', 'madhavi@gmail.com'),
('manoj kumar', '18+', '45+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'manoj@gmail.com'),
('narendra', '18+', '45+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'narendra@gmail.com'),
('ramu', '18+', '45+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'ramu@gmail.com'),
('sirisha', '18+', '45+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'sirisha@gmail.com'),
('vamsi', '18+', '50+ kgs', 'No', 'Male', 'Not donated ever', 'No', 'vamsi@gmail.com'),
(' vennela', '18+', '45+ kgs', 'No', 'Female', 'Not donated ever', 'No', 'vennela@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedb`
--

CREATE TABLE `feedb` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `suggestions` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedb`
--

INSERT INTO `feedb` (`name`, `email`, `rate`, `suggestions`) VALUES
('anusha', 'anusah@gamil.com', 'good', 'okay,nice try'),
('chiru', 'chiru', 'good', 'super excellent '),
('chiru', 'chiru@gmail.com', 'good', 'nice'),
('raj', 'raj@gmail.com', 'good', 'very exellent'),
('dhilli', 'dhilli@gmail.com', 'average', 'need to improve');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `name` varchar(200) NOT NULL,
  `age` varchar(3) NOT NULL,
  `phone` text NOT NULL,
  `btype` varchar(10) NOT NULL,
  `unit` int(11) NOT NULL,
  `hospital` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `User` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`User`, `Email`, `Pass`) VALUES
('chari', 'anu@gmail.com', '1234'),
('Anu', 'anusha@gmail.com', '2809'),
('cherry', 'cherry@gmail.com', '1234'),
('Chiru', 'chiran4207@gmail.com', '2222'),
('jayanth', 'jayanth@gmail.com', '1234'),
('mn123', 'mn123@gmail.com', 'mn12'),
('reddy', 'redd@gmail.com', '1234'),
('reddy', 'reddy@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eligible`
--
ALTER TABLE `eligible`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
