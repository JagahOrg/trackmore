-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 11:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `hashed_pwd` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobilenumber`, `hashed_pwd`, `salt`, `created_at`) VALUES
(2, 'Kazeem', 'David', 'davonkaze1@gmail.com', '0578588981', '1e9b447a3f62e5b5a41d1f937ce9176d7166f88590a87537b8af84420d26847edc6e62321813581b11b42e7fcc493002d9242e36c0e85f76f080858b592c2f27', 'Px0ZaM6tIkWNey$d7b65EOOEMTXrZ642h9j%lIoRko6X27w2BHFKh7muVoi9WjDq', '2019-12-04 17:19:00'),
(3, 'Kazeem', 'David', 'davonkaze1@gmail.com', '0578588981', '32d3ccdda8c4296f0e4235b62cb9c6544f0627948340e768c47d8b311c747a5373c72ff6f0223f3107f12a3e26a14ba4b9e38f633386e4b05e0ffa8eaaf772bc', '3lscvBvRHadyjIrdtKNYVZ62xq!Uh&amp;ea3Q94u4szqeUHJnFaHWeMhx65GKWd5e3o', '2019-12-04 17:23:36'),
(4, 'Kazeem', 'David', 'davonkaze1@gmail.com', '0578588981', '70dc026db2cc3a7a8e35cbbd0470dcf61082076a482cf6f1ec32347afaa713679a0ed5bcf5df0802ce9c1263ad7294b5757fd376879d743c2978823d70b58d9f', '%De!d%CQICE4Jc?kX&amp;Bwc?0zBkcIt*IuubNfi3MpnUZn1mr&amp;WtX#Wn%FUp!yS*Q0', '2019-12-04 17:23:50'),
(5, 'Kazeem', 'David', 'davonkaze1@gmail.com', '0578588981', '5c1589a40622654be9bd21b1455756ab574b6c8888d9474b05e92e9765abb0112bbb8aacdf306447b5de0213e744038adc9c48716706b1093d203652d5ca8895', 'c#lQGD$59Cn2iHo!xBwwnCt0s86SB99uG50hmkbYE0Q#ElL8byL#DJW4HR4GzRPY', '2019-12-04 17:24:03'),
(6, 'Kazeem', 'David', 'davonkaze1@gmail.com', '0578588981', 'fc3037046f4d58a37bc30167ca5c2ad5ecde99ec96f2c98f4645784e95a2eadd5423ecc90be203a2e8b87e60beb8fced66be63c5ed9e7ada37fe72609f2e87b6', '0gBCUyl0MPD88kHsJsORjpIVqA#JX!WJuupvjv2Lz40BbK&amp;Ip#4WTwsz5q*PJj!R', '2019-12-04 17:26:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
