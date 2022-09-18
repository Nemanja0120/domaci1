-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 12:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iteh_prvi_domaci`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(16) NOT NULL,
  `korisnickoIme` varchar(60) NOT NULL,
  `lozinka` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `korisnickoIme`, `lozinka`) VALUES
(1, 'Jelena', 'jelena');

-- --------------------------------------------------------

--
-- Table structure for table `muzej`
--

CREATE TABLE `muzej` (
  `muzejID` int(11) NOT NULL,
  `nazivMuzeja` varchar(100) NOT NULL,
  `grad` varchar(100) NOT NULL,
  `godinaOsnivanja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muzej`
--

INSERT INTO `muzej` (`muzejID`, `nazivMuzeja`, `grad`, `godinaOsnivanja`) VALUES
(1, 'The Louvre', 'Paris, France', 1793),
(4, 'State Hermitage Museum', 'Saint Petersburg, Russia', 1764),
(5, 'Prado', 'Madrid, Spain', 1819),
(6, 'Salvador Dali Museum', 'Malaga, Spain', 1960);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muzej`
--
ALTER TABLE `muzej`
  ADD PRIMARY KEY (`muzejID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `muzej`
--
ALTER TABLE `muzej`
  MODIFY `muzejID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
