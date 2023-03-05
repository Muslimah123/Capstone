-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 11:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--Table structure for table 'customers'
--
CREATE TABLE 'customers'(
  'cust_id' int(11) NOT NULL,
  

);
>>>>>>> origin/master
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `reg_date`) VALUES
(10, 'muslimah1234', 'idaya.seidu@ashesi.edu.gh', '$2y$10$tutSVNIC8.D8PkxliX.72uaJWyAmjHAlovjKQX6.nzEasFl0Hu4Ve', '2023-02-21 14:36:21'),
(11, 'Afifa', 'afifasuraj@yahoo.com', '$2y$10$3a.7GLZaI42O0QRxqks15u1nX.Hj5jWPCtfkHrSBWB/U/LcHgCzke', '2023-02-21 22:17:50'),
(12, 'Aisha', 'ayisha.nuhu@ashesi.edu.gh', '$2y$10$Xxb5sON2upvlHUcxxMlpbenX6b6iQT9KSFwsevPhfo0zucF4kHePe', '2023-02-21 23:31:07'),
(13, 'Mansura', 'mansurahzakari@gmail.com', '$2y$10$vmtYb6Q/FnXruhD.3eH36ObsJ0bUpxmsrUAkZR3MDauaAkq3dEHnW', '2023-02-21 23:34:37'),
(14, 'Hassan', 'hassan.alhassan@ashesi.edu.gh', '$2y$10$zl.y4Kz4cB.HrAU1d.MJGOh1FBvFRvFZ7bQg60J9rWL9es0eCE5N.', '2023-02-22 02:03:31'),
(15, 'Ella', 'ella.fosu@ashesi.edu.gh', '$2y$10$4Qpk3s4JOVlnyPgANokvfe8S2NkxhRRzKSra.RrlnM.jqaO8UrwHy', '2023-02-22 08:12:51'),
(16, 'Ubaida', 'ubaida.alhassan@ashesi.edu.gh', '$2y$10$18FAY0CbzcYNgCGVJ9.3pOUCfI6DmDTaLiA/zgWn.NJ0.KhekaZTS', '2023-02-22 08:22:54'),
(17, 'samantha', 'samantha.mavunga@ashesi.edu.gh', '$2y$10$ikmS3hVyGDeqPMM342CtmOBnTPrDkbk1BdEy3VjDCFa9XCTRdF1iq', '2023-02-22 09:13:03'),
(18, 'Gideon', 'gideon.bonsu@ashesi.ed.gh', '$2y$10$o655ULzHa5lYxEw4UGe3ZOzT3PZaQju3q9k/K4ZMOH0dtnMv3jPM2', '2023-02-22 11:04:22');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
