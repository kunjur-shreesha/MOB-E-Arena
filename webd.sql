-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 10, 2022 at 08:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webd`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Phno` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Bdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Password`, `Phno`, `Address`, `Bdate`) VALUES
('abcaaa', '11111111@111.com', 'abcd', '1234', 'Nitte,Karkala', '2021-12-16'),
('111', '111@111.com', '1111', '111111', '', NULL),
('aaa', 'aaaa@admin.com', 'aa', 'aaaa', '', NULL),
('aaa', 'aaaaaa@aaaa.com', 'aaa', 'aaa', '', NULL),
('abc', 'abcd@gmail.com', '123', '1234567890', '', NULL),
('admin', 'admin@admin.com', 'admin', '', '', NULL),
('zz', 'comz@comz', 'zzz', '12385279', 'zzzzzzzzzzz', '2021-12-24'),
('Harsith', 'harshith@abc.com', '123456789', '8552015945', 'KArkala,Udupi', '2021-12-10'),
('pankaj', 'pankaj@admin.com', '111', '1234567890', '', NULL),
('Shreesha', 'shreesha@admin.com', '1234', '7894561230', '20/140-D Nitte,Karkala.', '2021-12-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
