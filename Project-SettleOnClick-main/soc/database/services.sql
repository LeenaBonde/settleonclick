-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 08:36 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(3) NOT NULL,
  `Service` text NOT NULL,
  `service_provider_name` text NOT NULL,
  `locality` text NOT NULL,
  `phone_no` int(10) NOT NULL,
  `city` text NOT NULL,
  `description` varchar(265) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Service`, `service_provider_name`, `locality`, `phone_no`, `city`, `description`, `rating`) VALUES
(6, 'Transportors', 'Ramsingh Chavan', 'Ashok Stambh', 2147483647, 'Nashik', 'Pick up luggage and loads and drop service ', 4),
(8, 'Cleaners', 'Meena', 'College Road', 2147483647, 'Nashik', 'Cleaning and sweeping service ', 3),
(10, 'Cook', 'Asha', 'College Road', 2147483647, 'Nashik', 'Cooking maid', 5),
(11, 'Plumber', 'Sham', 'Shalimar', 2147483647, 'Nashik', 'Plumbing service avilable', 3),
(12, 'Electrician', 'Raj', 'Nashik road', 423567890, 'Nashik', 'Electric appliances and electrician available', 4),
(13, 'Labourers', 'Lokesh', 'Satpur', 2147483647, 'Nashik', ' Labour service for load trasportation', 4),
(14, 'Transportors', 'Kamlesh', 'Hiramandi', 2147483647, 'Mumbai', 'Transportation vehicle available', 4),
(15, 'Labourers', 'Shreyash', 'Mira road', 1324567890, 'Mumbai', 'Heavy load experts', 4),
(16, 'Cleaners', 'Govind', 'Church gate', 34356577, 'Mumbai', 'Cleaning service ', 3),
(17, 'Cook', 'Gangubai', 'Marine Drive', 2147483647, 'Mumbai', 'All cuisine cook', 4),
(18, 'Plumber', 'Gopal', 'Powai', 243567567, 'Mumbai', 'Plumbing service', 5),
(19, 'Electrician', 'Tripathi', 'Market', 2147483647, 'Mumbai', 'Eletricity available', 5),
(26, 'Transportors', 'Hitesh kumar', 'A1/1,Amar Gardens, Shahid Circle, Nashik', 1234567890, 'Nashik', 'Responsible for transporting goods, materials, or people from one location to another using various modes of transportation', 4),
(27, 'Transportors', 'Amar Pratap', 'Vrindavan Gardens, Kedar Nagar,', 987654321, 'Nashik', 'Responsible for transporting goods, materials, from one location to another using various modes of transportation', 4),
(28, 'Transportors', 'Aakash Mehta', 'Pipeline road,Gangapur naka, nashik', 987654321, 'Nashik', 'Responsible for transporting goods, materials, or people from one location to another using various modes of transportation', 3),
(29, 'Transportors', 'Lal Singh', '404,,Vrindavan marg, Kedar Nagar,', 234567891, 'Nashik', 'Responsible for transporting goods, materials, or people from one location to another using various modes of transportation', 5),
(30, 'Labourers', 'Ashish pathak', 'Cidco ,Trimurti Chowk,Nashik', 2147483647, 'Nashik', 'Responsible for transporting goods, materials, from one location to another using various modes of transportation', 4),
(31, 'Labourers', 'Amar Pratap', 'Kamatwada,near ITI,Nashik', 2147483647, 'Nashik', 'Responsible fo rloading goods, materials.', 3),
(32, 'Labourers', 'Salman Khana', 'Vrindavan Gardens, Kedar Nagar,', 2147483647, 'Nashik', 'erforms physical tasks such as lifting, carrying, digging, and general construction work at a construction site or other manual labor-intensive environments.', 3),
(33, 'Labourers', 'Lal Singh', 'Trimak naka,Satpur MIDc,Nashik', 2147483647, 'Nashik', 'erforms physical tasks such as lifting, carrying, digging, and general construction work at a construction site or other manual labor-intensive environments.', 4),
(34, 'Cleaners', 'Asha Gupta', 'Vrindavan Gardens, Kedar Nagar,Nashik', 2147483647, 'Nashik', 'Performs cleaning duties to maintain cleanliness and hygiene in various environments such as homes, offices, hospitals, hotels, or public spaces.', 5),
(35, 'Cook', 'Meena Kumari', 'Amar Garden,Shahid Circle,Nashik', 976512340, 'Nashik', 'Prepare and cook food in various settings such as restaurants, hotels, catering services, or institutions.', 0),
(36, 'Plumber', 'Rakesh Sharma', 'Godavari Ghat,Panchavati, Nashik', 2147483647, 'Nashik', ': Installs, maintains, and repairs plumbing systems including pipes, fixtures, and appliances that convey water, gas, or sewage', 0),
(38, 'Electrician', 'Ram Pratap', 'Myllon circle,near Dwarka,Nashik', 2147483647, 'Nashik', ': Specializes in installing, maintaining, and repairing electrical systems, wiring, and fixtures in residential, commercial, or industrial settings.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
