-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 05:29 PM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `instagram`, `whatsapp`, `linkedin`, `created_at`) VALUES
(1, 'Fitriyana Nuril Khaqqi', '089509463731', 'fitriyananurilkh@gmail.com', 'https://www.instagram.com/fitriyananurill/', 'https://api.whatsapp.com/send/?phone=6289509463731&text&type=phone_number&app_absent=0', 'https://www.linkedin.com/in/fitriyana-nuril-khaqqi-517060312/', '2024-10-27 14:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `skills` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `duration`, `skills`) VALUES
(1, 'My Finance - A Desktop Application for Financial Record', 'A desktop application based on Python using the Tkinter GUI and MySQL database for recording and managing personal finances. With features for transaction logging, category management, and financial reporting, users can easily and efficiently track their financial flow.', 'May 2024 - July 2024', 'Python, Tkinter, MySQL, Figma, User Interface Design'),
(2, 'SHIP-ALERT (Smart Hazard Identification Protocol)', 'An IoT device that uses the ESP8266 as a microcontroller and LoRa as a communication module. The purpose of this device is to send emergency signals when fishermen encounter emergencies at sea and do not have network access to contact their relatives.', 'April 2024 - August 2024', 'Internet of Things (IoT), Microcontrollers'),
(3, 'Analysis and Prediction of Stock Prices Using LSTM', 'This project leverages the Long Short Term Memory (LSTM) algorithm to analyze and predict stock price movements, using TensorFlow and Keras in Python to process and train historical stock data.', 'September 2023 - December 2023', 'Python, Algorithms, TensorFlow, Keras, pandas'),
(4, 'E-Labventory - A Desktop Application for Laboratory Inventory Management', 'A desktop application based on Java using Java Swing GUI and MySQL database for managing inventory in a computer lab.', 'September 2023 - December 2023', 'Java, MySQL, Figma, User Interface Design, Databases'),
(5, 'GROWFII - \"Grow With Fun, Interactive, and Insightful\"', 'An Android-based Augmented Reality project designed as a learning medium for elementary schools, developed with Unity and C#.', 'February 2023 - June 2023', 'Augmented Reality (AR), Unity, C#, Blender, Databases');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `skill_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_description`) VALUES
(1, 'Python', 'Skilled in writing efficient code for various applications. Experienced in libraries such as Pandas & NumPy.'),
(2, 'Data Science', 'Capable of transforming raw data into actionable insights, using statistical analysis and machine learning techniques to drive decision-making.'),
(3, 'Data Analysis', 'Proficient in data cleaning, exploration, and manipulation to identify trends and solve business problems, with tools like Excel, Python, and SQL.'),
(4, 'Data Visualization\r\n\r\n', 'Able to create clear, impactful visualizations that simplify complex data, using tools like Matplotlib, Seaborn, and Tableau.'),
(5, 'Machine Learning', 'Experienced in developing predictive models using supervised and unsupervised learning algorithms. Skilled in scikit-learn & TensorFlow.'),
(6, 'IoT (Internet of Things)', 'Capable of designing and deploying IoT solutions involving sensor integration & data collection. Proficient in microcontroller programming.'),
(7, 'Web Development', 'Experienced in creating responsive websites with HTML, CSS, and JavaScript, and in building backend functionality.'),
(8, 'UI/UX', 'Able to design user-centered interfaces and experiences. Proficient in wireframing and prototyping with Figma.'),
(9, 'Copywriting', 'Skilled in crafting persuasive and engaging content tailored to specific audiences, enhancing user engagement and driving conversions.');

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `name`, `email`, `created_at`) VALUES
(24, 'Fitriyana Nuril Khaqqi', 'techxplore101@gmail.com', '2024-10-28 16:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `about_me` text DEFAULT NULL,
  `quote` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `description`, `skills`, `about_me`, `quote`) VALUES
(1, 'Fitri', 'A highly dedicated Informatics student at Universitas Pembangunan Jaya with a strong passion for data and technology. Experienced in programming and data analysis, and actively involved for two years in projects involving Excel, Python, R, data visualization, and data analysis. Recognized as a detail-oriented individual with strong analytical, problem-solving, and communication skills.', 'Data Science,Data Analyst,Machine Learning', 'I am a highly dedicated Informatics student at Universitas Pembangunan Jaya, driven by a strong passion for data and technology. Throughout my studies, I have gained valuable experience in programming and data analysis, which has solidified my foundation in these fields. Over the past two years, I have been actively involved in various projects that utilize tools such as Excel, Python, and R. These projects have allowed me to develop my skills in data visualization and analysis, providing me with hands-on experience in transforming complex data into meaningful insights.\r\n\r\nRecognized as a detail-oriented individual, I possess strong analytical and problem-solving skills that enable me to tackle challenges effectively. My ability to communicate clearly and collaborate with team members has been a key asset in my academic and project work. I am excited to continue honing my skills and exploring new opportunities in the data and technology landscape. My goal is to contribute to innovative projects that leverage data to drive decision-making and enhance overall performance.', 'The only way to do great work is to love what you do. - Steve Jobs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
