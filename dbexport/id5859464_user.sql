-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 27 Μάη 2018 στις 12:46:30
-- Έκδοση διακομιστή: 5.7.14
-- Έκδοση PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `id5859464_user`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `admins`
--

INSERT INTO `admins` (`username`, `surname`, `name`, `password`, `phone`, `email`, `adminid`) VALUES
('bkeh97', 'Kehagias', 'Bill', '$2y$10$9DQOoZm/7B9jj1RCG90tReVP/Qnw6sLQvXx6XKM0YsH1cnkhG2QQK', '6969696969', 'b.keh97@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `productid` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quantity` float NOT NULL,
  `stprice` float NOT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `auction`
--

INSERT INTO `auction` (`id`, `productid`, `description`, `quantity`, `stprice`, `startdate`, `enddate`) VALUES
(1, '17', 'aaaa', 1, 123, NULL, '2018-12-03');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `bids`
--

CREATE TABLE `bids` (
  `bidprice` int(11) NOT NULL,
  `auctionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bidid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `offer`
--

CREATE TABLE `offer` (
  `offerid` int(11) NOT NULL,
  `auctionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `offerprice` float NOT NULL,
  `offerdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`) VALUES
(14, 'Test Product', 'Test Description', 0x3430302e6a7067),
(16, 'Test', 'Test Description That Is Actually Quite Long', 0x4453435f303037382e6a7067),
(17, 'dokismastiko', 'perigrafi', 0x3538306235376663643939393665323462633433633233382e706e67);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `type` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `type`, `userid`, `name`, `surname`, `phone`, `address`) VALUES
('bk', '$2y$10$.9oy1Al..zQ59l5q551oV.RKIUUHpHYoTVC1MUXE7SSKiixkpaID6', '11222@ew@qw', 1, 1, '', '', '0', ''),
('bkk', '$2y$10$LubuSoKSSOHKKm9t41B2Dud2APUZSVL8kTovp43UUkX8OsOkb0Pr6', '123@123.e', 2, 2, 'Bill', 'Kehagias', '6984065663', 'exnti'),
('testp', '$2y$10$mC7xDdi1EkdD8NIs1IQ2zO0QJPzZJBeP4haVxb7q7b/6fut/Bi3FG', '11222@ew@qw', 1, 3, 'Meh', 'Meh', '987987987', 'Ne'),
('geosmi', '$2y$10$uLtfW0U3/t3dEWcs266lp.E5vwyc3QA/P/GWHq7uA90QVuMJdTxbG', 'geosmi24@gmail.com', 2, 4, 'George', 'Smiaris', '6969696969', 'huh');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Ευρετήρια για πίνακα `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`bidid`),
  ADD KEY `auctionid` (`auctionid`),
  ADD KEY `userid` (`userid`);

--
-- Ευρετήρια για πίνακα `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offerid`),
  ADD KEY `auctionid` (`auctionid`),
  ADD KEY `userid` (`userid`);

--
-- Ευρετήρια για πίνακα `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `admins`
--
ALTER TABLE `admins`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `bids`
--
ALTER TABLE `bids`
  MODIFY `bidid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `offer`
--
ALTER TABLE `offer`
  MODIFY `offerid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`auctionid`) REFERENCES `auction` (`id`),
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Περιορισμοί για πίνακα `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`auctionid`) REFERENCES `auction` (`id`),
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
