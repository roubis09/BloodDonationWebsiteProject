-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 12:48 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `IDI` int(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `locality` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `landmark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`IDI`, `email`, `country`, `state`, `city`, `address`, `locality`, `pincode`, `landmark`) VALUES
(1, 'email', 'country', 'state', 'city', 'address', 'locality', 0, 'landmark'),
(2, 'rounik.biswas@yahoo.com', 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(3, 'abcd@xyz.com', 'USA', 'kol', 'sdf', 'aaaa', 'cccc', 12345, 'ddddd'),
(4, 'zxcv@abc.com', 'uk', 'ascv', 'erty', 'asd', 'aaaa', 1267, 'fffff'),
(5, 'email', 'country', 'state', 'city', 'address', 'locality', 0, 'landmark'),
(6, 'rounik.biswas@yahoo.com', 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(7, 'anil.sarkar@gmail.com', 'United Kingdom', 'Britain', 'Some', 'good, jsfjashfsj, fasdhfsjfsafkfakfejjrwr.', 'ddddd, near vvvvv nice, hhhhhhhhee,ddd.', 789456, 'near klakqweruyiewety .'),
(8, 'zxcv@abc.com', 'India', 'india', 'kolkata', 'aa', 'good', 12345, 'fffff');

-- --------------------------------------------------------

--
-- Table structure for table `addressneed`
--

CREATE TABLE `addressneed` (
  `IDI` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `locality` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `landmark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addressneed`
--

INSERT INTO `addressneed` (`IDI`, `email`, `country`, `state`, `city`, `address`, `locality`, `pincode`, `landmark`) VALUES
(1, 'bvcd@xyz.com', 'India', 'india', 'kolkata', 'llll', 'lllll', 0, 'llllll'),
(2, 'asdf@gmail.com', 'uk', 'col', 'vvv', 'qqq', 'ssss', 78945, 'ghjk'),
(3, 'rounik.biswas@yahoo.com', 'India', 'india', 'kolkata', 'www', 'www', 111, 'ffff');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `gender` text,
  `age` int(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `email1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `gender`, `age`, `mobile`, `email`, `blood`, `email1`) VALUES
(2, 'rounik', 'male', 12, '09775447292', 'rounik.biswas@yahoo.com', 'A+', ''),
(22, 'abcd', 'female', 45, '1234567891', 'abcd@xyz.com', 'O+', ''),
(23, 'asdf', 'female', 26, '9876543210', 'zxcv@abc.com', 'AB-', 'zxcv@abc.com'),
(24, 'kkkk', 'male', 45, '1879666663888', 'bc@gmail.com', 'A+', 'bc@gmail.com'),
(25, 'kkkk', 'male', 45, '1879666663888', 'bc@gmail.com', 'A+', 'bc@gmail.com'),
(26, 'rounik', 'male', 12, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(27, 'rrrr', 'male', 22, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(28, 'rrrr', 'male', 12, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(29, 'kkkk', 'male', 23, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(30, 'kkkk', 'male', 23, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(31, 'kkkk', 'male', 23, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(32, 'kkkk', 'male', 23, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(33, 'kkkk', 'male', 23, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(34, 'rrrr', 'male', 23, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(35, 'rrrr', 'male', 66, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(36, 'rrrr', 'male', 15, '9932227946', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(37, 'rrrr', 'male', 15, '9932227946', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(38, 'rrrr', 'male', 15, '9932227946', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(39, 'rrrr', 'male', 15, '9932227946', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(40, 'rrrr', 'male', 66, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(41, 'rrrr', 'male', 45, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(42, 'rrrr', 'male', 45, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(43, 'rrrr', 'male', 56, '23568944444', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(44, 'rrrr', 'male', 89, '9932227946', 'rounik.biswas@yahoo.com', 'B-', 'rounik.biswas@yahoo.com'),
(45, 'rrrr', 'male', 89, '9932227946', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(46, 'rrrr', 'male', 13, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(47, 'rounik', 'male', 33, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(48, 'rrrr', 'male', 123, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(49, 'rrrr', 'male', 123, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(50, 'Anil Kumar Sarkar', 'male', 48, '+919775426895', 'anil.sarkar@gmail.com', 'A+', 'anil.sarkar@gmail.com'),
(51, 'asdf ghjk', 'female', 56, '7894561230', 'zxcv@gmail.com', 'O+', 'zxcv@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `need`
--

CREATE TABLE `need` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `email1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `need`
--

INSERT INTO `need` (`id`, `name`, `gender`, `age`, `mobile`, `email`, `blood`, `email1`) VALUES
(1, 'Rounik Biswas', 'male', 11, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(2, 'Rounik Biswas', 'male', 34, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(3, 'biswas', 'male', 65, '7894561230', 'asdf@gmail.com', 'O-', 'asdf@gmail.com'),
(4, 'Rounik Biswas', 'male', 12, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(5, 'Rounik Biswas', 'male', 12, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(6, 'Rounik Biswas', 'male', 123, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com'),
(7, 'Rounik Biswas', 'male', 123, '09775447292', 'rounik.biswas@yahoo.com', 'A+', 'rounik.biswas@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `ID1` int(30) NOT NULL,
  `id` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `IDI` int(10) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `locality` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `landmark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`ID1`, `id`, `name`, `gender`, `age`, `mobile`, `blood`, `email1`, `IDI`, `country`, `state`, `city`, `address`, `locality`, `pincode`, `landmark`) VALUES
(1, '2', 'rounik', 'male', 12, '09775447292', 'A+', '', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(2, '2', 'rounik', 'male', 12, '09775447292', 'A+', '', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(3, '22', 'abcd', 'female', 45, '1234567891', 'O+', '', 3, 'USA', 'kol', 'sdf', 'aaaa', 'cccc', 12345, 'ddddd'),
(4, '23', 'asdf', 'female', 26, '9876543210', 'AB-', 'zxcv@abc.com', 4, 'uk', 'ascv', 'erty', 'asd', 'aaaa', 1267, 'fffff'),
(5, '23', 'asdf', 'female', 26, '9876543210', 'AB-', 'zxcv@abc.com', 8, 'India', 'india', 'kolkata', 'aa', 'good', 12345, 'fffff'),
(6, '26', 'rounik', 'male', 12, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(7, '26', 'rounik', 'male', 12, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(8, '27', 'rrrr', 'male', 22, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(9, '27', 'rrrr', 'male', 22, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(10, '28', 'rrrr', 'male', 12, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(11, '28', 'rrrr', 'male', 12, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(12, '29', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(13, '29', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(14, '30', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(15, '30', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(16, '31', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(17, '31', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(18, '32', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(19, '32', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(20, '33', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(21, '33', 'kkkk', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(22, '34', 'rrrr', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(23, '34', 'rrrr', 'male', 23, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(24, '35', 'rrrr', 'male', 66, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(25, '35', 'rrrr', 'male', 66, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(26, '36', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(27, '36', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(28, '37', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(29, '37', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(30, '38', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(31, '38', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(32, '39', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(33, '39', 'rrrr', 'male', 15, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(34, '40', 'rrrr', 'male', 66, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(35, '40', 'rrrr', 'male', 66, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(36, '41', 'rrrr', 'male', 45, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(37, '41', 'rrrr', 'male', 45, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(38, '42', 'rrrr', 'male', 45, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(39, '42', 'rrrr', 'male', 45, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(40, '43', 'rrrr', 'male', 56, '23568944444', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(41, '43', 'rrrr', 'male', 56, '23568944444', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(42, '44', 'rrrr', 'male', 89, '9932227946', 'B-', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(43, '44', 'rrrr', 'male', 89, '9932227946', 'B-', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(44, '45', 'rrrr', 'male', 89, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(45, '45', 'rrrr', 'male', 89, '9932227946', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(46, '46', 'rrrr', 'male', 13, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(47, '46', 'rrrr', 'male', 13, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(48, '47', 'rounik', 'male', 33, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(49, '47', 'rounik', 'male', 33, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(50, '48', 'rrrr', 'male', 123, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(51, '48', 'rrrr', 'male', 123, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(52, '49', 'rrrr', 'male', 123, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 2, 'India', 'india', 'kolkata', 'dd', 'ddd', 111, 'ffff'),
(53, '49', 'rrrr', 'male', 123, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 6, 'India', 'india', 'kolkata', 'aaa', 'aaaa', 1234, 'asd'),
(54, '50', 'Anil Kumar Sarkar', 'male', 48, '+919775426895', 'A+', 'anil.sarkar@gmail.com', 7, 'United Kingdom', 'Britain', 'Some', 'good, jsfjashfsj, fasdhfsjfsafkfakfejjrwr.', 'ddddd, near vvvvv nice, hhhhhhhhee,ddd.', 789456, 'near klakqweruyiewety .');

-- --------------------------------------------------------

--
-- Table structure for table `totalneed`
--

CREATE TABLE `totalneed` (
  `ID1` int(30) NOT NULL,
  `id` text NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `IDI` int(10) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `locality` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `landmark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalneed`
--

INSERT INTO `totalneed` (`ID1`, `id`, `name`, `gender`, `age`, `mobile`, `blood`, `email1`, `IDI`, `country`, `state`, `city`, `address`, `locality`, `pincode`, `landmark`) VALUES
(1, '3', 'biswas', 'male', 65, '7894561230', 'O-', 'asdf@gmail.com', 2, 'uk', 'col', 'vvv', 'qqq', 'ssss', 78945, 'ghjk'),
(2, '1', 'Rounik Biswas', 'male', 11, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 3, 'India', 'india', 'kolkata', 'www', 'www', 111, 'ffff'),
(3, '2', 'Rounik Biswas', 'male', 34, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 3, 'India', 'india', 'kolkata', 'www', 'www', 111, 'ffff'),
(4, '3', 'biswas', 'male', 65, '7894561230', 'O-', 'asdf@gmail.com', 2, 'uk', 'col', 'vvv', 'qqq', 'ssss', 78945, 'ghjk'),
(5, '4', 'Rounik Biswas', 'male', 12, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 3, 'India', 'india', 'kolkata', 'www', 'www', 111, 'ffff'),
(6, '5', 'Rounik Biswas', 'male', 12, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 3, 'India', 'india', 'kolkata', 'www', 'www', 111, 'ffff'),
(7, '6', 'Rounik Biswas', 'male', 123, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 3, 'India', 'india', 'kolkata', 'www', 'www', 111, 'ffff'),
(8, '7', 'Rounik Biswas', 'male', 123, '09775447292', 'A+', 'rounik.biswas@yahoo.com', 3, 'India', 'india', 'kolkata', 'www', 'www', 111, 'ffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`IDI`);

--
-- Indexes for table `addressneed`
--
ALTER TABLE `addressneed`
  ADD PRIMARY KEY (`IDI`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need`
--
ALTER TABLE `need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`ID1`);

--
-- Indexes for table `totalneed`
--
ALTER TABLE `totalneed`
  ADD PRIMARY KEY (`ID1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `IDI` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addressneed`
--
ALTER TABLE `addressneed`
  MODIFY `IDI` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `need`
--
ALTER TABLE `need`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `ID1` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `totalneed`
--
ALTER TABLE `totalneed`
  MODIFY `ID1` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
