-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 02:32 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `airline_company` -- Data Manipulation only
--


--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`EMPNUM`, `SURNAME`, `NAME`, `ADDRESS`, `PHONE`, `SALARY`) VALUES
(2, 'Howell', 'Darien', '3850 Heidi Glens\nMosciskiton, OR 90397-5061', '810.576.3954', 42089.00),
(300, 'Hilpert', 'Chad', '70072 Cummerata Highway\nWest Annamaetown, VT 21045-8333', '1-601-326-1612', 73820.00),
(339644, 'Wintheiser', 'Trevor', '56110 Huels Common\nNorth Tania, NE 14983', '1-818-332-8066', 38389.00),
(340075, 'Cremin', 'Elton', '285 Lesch Rapid\nSouth Addiehaven, CT 42797-6693', '603.898.5889', 29207.00),
(4985460, 'Schulist', 'Myrtle', '93678 Krystina Heights Suite 418\nMyahmouth, MS 29059', '(279) 581-0951', 60791.00),
(66888131, 'Wilderman', 'Clementina', '552 Anastasia Views Suite 320\nKeonshire, TX 81843-6318', '(731) 378-4493', 54034.00),
(80162240, 'Renner', 'Darryl', '6837 Schowalter Inlet Apt. 824\nPort Alene, TN 10555', '+1.785.908.9039', 11482.00),
(86835865, 'Eichmann', 'Jarrell', '563 Josephine Ports Suite 413\nEast Shannyview, MN 57632', '(806) 368-2209', 30989.00),
(94823570, 'Predovic', 'Mariano', '32634 Kenyatta Squares\nWest Robbieland, LA 00102-9781', '608.913.3415', 14611.00),
(329874520, 'Wisozk', 'Raleigh', '153 Isadore Mount Suite 179\nSchneiderhaven, TX 90631-6630', '+1 (979) 213-2832', 67494.00);


--
-- Dumping data for table `pilot`
--

INSERT INTO `pilot` (`Staff_EMPNUM`) VALUES
(300),
(66888131),
(94823570);

-- --------------------------------------------------------


--
-- Dumping data for table `airplane_rating`
--

INSERT INTO `airplane_rating` (`Rating_Number`, `Name`, `Description`) VALUES
(93, 'Wolf', 'Alice again, in a solemn tone, only changing the order of the jury asked.'),
(276, 'Wiegand', 'Alice to herself, "because of his Normans- -\" How are you thinking of?" "I beg.'),
(9731, 'Connelly', 'Alice whispered, "that it"s done by everybody minding their own business!".'),
(24297, 'Padberg', 'CHAPTER IV. The Rabbit Sends in a very humble tone, going down on one side, to.'),
(627606, 'Homenick', 'Queen, who were all shaped like the wind, and was surprised to see what would.'),
(6570844, 'O"Kon', 'Mock Turtle, capering wildly about. "Change lobsters again!" yelled the.');

-- --------------------------------------------------------


--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`NUMSER`, `Manufacturer_Model`, `Airplane_Rating_Number`) VALUES
(1, 'BOEING-777', 9731),
(3, 'BOEING-789', 9731),
(4, 'KING-656', 93),
(5, 'Queen of.', 627606),
(9, 'Duchess.', 93),
(49, 'Mouse.', 9731),
(271, 'I had.', 24297),
(7221, 'Hatter.', 276),
(86808868, 'Eaglet.', 9731);

-- --------------------------------------------------------

--
-- Dumping data for table `pilot_rating`
--

INSERT INTO `pilot_rating` (`id`, `Pilot_EMPNUM`, `Airplane_Rating_Number`) VALUES
(1, 300, 93),
(3, 66888131, 9731),
(4, 94823570, 9731),
(2, 94823570, 6570844);

-- --------------------------------------------------------

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FLIGHTNUM`, `ORIGIN`, `DEST`) VALUES
('Alice.', 'West Florenceshire', 'West Caterina'),
('Gryphon.', 'North Effie', 'Thielport'),
('Now I.', 'Port Gregorio', 'East Mattie'),
('PLEASE.', 'South Damian', 'Port Alfredaside');

-- --------------------------------------------------------

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `Flight_FLIGHTNUM`, `Date`, `DEP_TIME`, `ARR_TIME`, `Airplane_NUMSER`, `Pilot_EMPNUM`) VALUES
(1, 'Alice.', '2022-12-02', '2022-12-02 02:15:00', '2022-12-02 13:30:00', 3, 66888131),
(2, 'PLEASE.', '2022-12-10', '2022-12-10 00:00:00', '2022-12-11 05:00:00', 3, 94823570);

-- --------------------------------------------------------

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`id`, `Staff_EMPNUM`, `Flight_FLIGHTNUM`) VALUES
(3, 300, 'Alice.'),
(2, 340075, 'Alice.'),
(4, 4985460, 'Alice.'),
(5, 66888131, 'Alice.'),
(1, 86835865, 'Alice.');

-- --------------------------------------------------------

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`Passport_No`, `SURNAME`, `NAME`, `ADDRESS`, `PHONE`) VALUES
(2, 'Altenwerth', 'Mazie', '542 Brendan Rapid Apt. 721', '+1-352-574-0755'),
(6, 'Collins', 'Annabelle', '32094 Hudson Flat', '574-269-3637'),
(7, 'Turner', 'Foster', '239 Marge Prairie Apt. 012', '(667) 249-3765'),
(46, 'Veum', 'Saige', '1858 Dicki Pass', '+1.458.303.3560'),
(75, 'Reynolds', 'Marian', '47264 Cummerata Turnpike', '267-608-9885'),
(756, 'McKenzie', 'Marjory', '877 Zieme Point Apt. 362', '+1 (283) 361-4949'),
(758, 'Carter', 'Cydney', '944 King Square Suite 863', '+1.432.616.3841'),
(6716, 'Bode', 'Beverly', '6314 Hertha Shoals Suite 007', '+1 (425) 645-9008'),
(811145, 'Barrows', 'Nicholas', '6906 Cronin Villages', '1-458-568-8606'),
(7637295, 'Maggio', 'Jimmie', '7637 Carey Junctions', '828.815.9432'),
(574305506, 'Harber', 'Allie', '364 Enrico Center', '+14846379180');

-- --------------------------------------------------------

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Passenger_Passport_No`, `Schedule_Flight_FLIGHTNUM`) VALUES
(8, 2, 'Alice.'),
(9, 2, 'PLEASE.'),
(5, 6, 'Alice.'),
(11, 7, 'Alice.'),
(1, 46, 'Alice.'),
(3, 75, 'Alice.'),
(2, 758, 'Alice.'),
(7, 6716, 'PLEASE.'),
(4, 811145, 'Alice.'),
(10, 811145, 'PLEASE.');

-- --------------------------------------------------------
COMMIT