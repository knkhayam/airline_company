-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 12:00 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `check_pilot` (IN `Pilot_EMPNUM` INT, IN `Airplane_NUMSER` INT)  BEGIN
    select count(*) from pilot_rating as p join airplane_rating as ar on p.Airplane_Rating_Number = ar.Rating_Number join airplane as a on a.Airplane_Rating_Number = ar.Rating_Number where p.Pilot_EMPNUM = Pilot_EMPNUM and a.NUMSER = Airplane_NUMSER;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE `airplane` (
  `NUMSER` int(10) UNSIGNED NOT NULL,
  `Manufacturer_Model` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Airplane_Rating_Number` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `airplane_rating`
--

CREATE TABLE `airplane_rating` (
  `Rating_Number` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `Passenger_Passport_No` int(10) UNSIGNED NOT NULL,
  `Schedule_Flight_FLIGHTNUM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `id` int(10) UNSIGNED NOT NULL,
  `Staff_EMPNUM` int(10) UNSIGNED NOT NULL,
  `Flight_FLIGHTNUM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FLIGHTNUM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ORIGIN` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DEST` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `Passport_No` int(10) UNSIGNED NOT NULL,
  `SURNAME` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NAME` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ADDRESS` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PHONE` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pilot`
--

CREATE TABLE `pilot` (
  `Staff_EMPNUM` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pilot_rating`
--

CREATE TABLE `pilot_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `Pilot_EMPNUM` int(10) UNSIGNED NOT NULL,
  `Airplane_Rating_Number` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `Flight_FLIGHTNUM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `DEP_TIME` datetime NOT NULL,
  `ARR_TIME` datetime NOT NULL,
  `Airplane_NUMSER` int(10) UNSIGNED NOT NULL,
  `Pilot_EMPNUM` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `EMPNUM` int(10) UNSIGNED NOT NULL,
  `SURNAME` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NAME` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ADDRESS` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PHONE` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALARY` double(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplane`
--
ALTER TABLE `airplane`
  ADD PRIMARY KEY (`NUMSER`),
  ADD KEY `airplane_airplane_rating_number_index` (`Airplane_Rating_Number`);

--
-- Indexes for table `airplane_rating`
--
ALTER TABLE `airplane_rating`
  ADD PRIMARY KEY (`Rating_Number`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_passenger_passport_no_schedule_flight_flightnum_unique` (`Passenger_Passport_No`,`Schedule_Flight_FLIGHTNUM`),
  ADD KEY `booking_schedule_flight_flightnum_foreign` (`Schedule_Flight_FLIGHTNUM`),
  ADD KEY `booking_passenger_passport_no_index` (`Passenger_Passport_No`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crew_staff_empnum_flight_flightnum_unique` (`Staff_EMPNUM`,`Flight_FLIGHTNUM`),
  ADD KEY `crew_flight_flightnum_foreign` (`Flight_FLIGHTNUM`),
  ADD KEY `crew_staff_empnum_index` (`Staff_EMPNUM`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FLIGHTNUM`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`Passport_No`);

--
-- Indexes for table `pilot`
--
ALTER TABLE `pilot`
  ADD PRIMARY KEY (`Staff_EMPNUM`);

--
-- Indexes for table `pilot_rating`
--
ALTER TABLE `pilot_rating`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pilot_rating_pilot_empnum_airplane_rating_number_unique` (`Pilot_EMPNUM`,`Airplane_Rating_Number`),
  ADD KEY `pilot_rating_pilot_empnum_index` (`Pilot_EMPNUM`),
  ADD KEY `pilot_rating_airplane_rating_number_index` (`Airplane_Rating_Number`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schedule_flight_flightnum_airplane_numser_date_unique` (`Flight_FLIGHTNUM`,`Airplane_NUMSER`,`Date`),
  ADD KEY `schedule_airplane_numser_index` (`Airplane_NUMSER`),
  ADD KEY `schedule_pilot_empnum_index` (`Pilot_EMPNUM`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`EMPNUM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airplane`
--
ALTER TABLE `airplane`
  MODIFY `NUMSER` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `airplane_rating`
--
ALTER TABLE `airplane_rating`
  MODIFY `Rating_Number` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crew`
--
ALTER TABLE `crew`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilot`
--
ALTER TABLE `pilot`
  MODIFY `Staff_EMPNUM` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilot_rating`
--
ALTER TABLE `pilot_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `EMPNUM` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airplane`
--
ALTER TABLE `airplane`
  ADD CONSTRAINT `airplane_airplane_rating_number_foreign` FOREIGN KEY (`Airplane_Rating_Number`) REFERENCES `airplane_rating` (`Rating_Number`) ON DELETE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_passenger_passport_no_foreign` FOREIGN KEY (`Passenger_Passport_No`) REFERENCES `passenger` (`Passport_No`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_schedule_flight_flightnum_foreign` FOREIGN KEY (`Schedule_Flight_FLIGHTNUM`) REFERENCES `schedule` (`Flight_FLIGHTNUM`) ON DELETE CASCADE;

--
-- Constraints for table `crew`
--
ALTER TABLE `crew`
  ADD CONSTRAINT `crew_flight_flightnum_foreign` FOREIGN KEY (`Flight_FLIGHTNUM`) REFERENCES `schedule` (`Flight_FLIGHTNUM`) ON DELETE CASCADE,
  ADD CONSTRAINT `crew_staff_empnum_foreign` FOREIGN KEY (`Staff_EMPNUM`) REFERENCES `staff` (`EMPNUM`) ON DELETE CASCADE;

--
-- Constraints for table `pilot`
--
ALTER TABLE `pilot`
  ADD CONSTRAINT `pilot_staff_empnum_foreign` FOREIGN KEY (`Staff_EMPNUM`) REFERENCES `staff` (`EMPNUM`) ON DELETE CASCADE;

--
-- Constraints for table `pilot_rating`
--
ALTER TABLE `pilot_rating`
  ADD CONSTRAINT `pilot_rating_airplane_rating_number_foreign` FOREIGN KEY (`Airplane_Rating_Number`) REFERENCES `airplane_rating` (`Rating_Number`) ON DELETE CASCADE,
  ADD CONSTRAINT `pilot_rating_pilot_empnum_foreign` FOREIGN KEY (`Pilot_EMPNUM`) REFERENCES `pilot` (`Staff_EMPNUM`) ON DELETE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_airplane_numser_foreign` FOREIGN KEY (`Airplane_NUMSER`) REFERENCES `airplane` (`NUMSER`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedule_flight_flightnum_foreign` FOREIGN KEY (`Flight_FLIGHTNUM`) REFERENCES `flight` (`FLIGHTNUM`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedule_pilot_empnum_foreign` FOREIGN KEY (`Pilot_EMPNUM`) REFERENCES `pilot` (`Staff_EMPNUM`) ON DELETE CASCADE;
COMMIT;
