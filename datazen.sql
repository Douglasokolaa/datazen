-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2020 at 09:40 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datazen`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `modules` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `modules`) VALUES
(1, 'Software Developer', 8),
(2, 'IT Administrator', 8),
(3, 'Customer Service Specialist', 8),
(4, 'Sales Representative', 8),
(5, 'Data analyst', 7),
(6, ' IT Support/ help desk', 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(16, '2020-09-12-173341', 'App\\Database\\Migrations\\AddUsersTable', 'default', 'App', 1599944375, 1),
(17, '2020-09-12-173712', 'App\\Database\\Migrations\\AddCoursesTable', 'default', 'App', 1599944375, 1),
(18, '2020-09-12-174956', 'App\\Database\\Migrations\\AddModulesTable', 'default', 'App', 1599944375, 1),
(19, '2020-09-12-175316', 'App\\Database\\Migrations\\AddViewedModulesTable', 'default', 'App', 1599944375, 1),
(20, '2020-09-12-180818', 'App\\Database\\Migrations\\AddLinkAndDescToModules', 'default', 'App', 1599944375, 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `link` text,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `course_id`, `name`, `link`, `description`) VALUES
(1, 1, 'Programming Foundations : Fundamentals', 'https://www.linkedin.com/learning/programming-foundations-fundamentals-3?trk=li-softwaredev-programfundamentals-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Prepare to learn the fundamental concepts, practices, and terminology of programming.'),
(2, 1, 'Programming Foundations : Databases', 'https://www.linkedin.com/learning/programming-foundations-databases-2?trk=li-softwaredev-programdatabases-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Find out how to build a database, define relationships, and write queries.'),
(3, 1, 'Succeeding in Web Development: Full Stack and Front End', 'https://www.linkedin.com/learning/succeeding-in-web-development-full-stack-and-front-end?trk=li-softwaredev-webdev-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn about the skills you need to get a job as a front-end, back-end, or full-stack web developer.'),
(4, 1, 'HTML Essential Training', 'https://www.linkedin.com/learning/html-essential-training-4?trk=li-softwaredev-html-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to write HTML, the programming language that powers the web.\n\n					'),
(5, 1, 'CSS Essential Training', 'https://www.linkedin.com/learning/css-essential-training-3?trk=li-softwaredev-css-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to select content, style text, manage layouts, and more as you work on a real-world project.'),
(6, 1, 'JavaScript Essential Training', 'https://www.linkedin.com/learning/javascript-essential-training-3?trk=li-softwaredev-javascript-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to work with objects, variables, data types, conditionals, functions, loops, closures, the DOM, ES6, and more.'),
(7, 1, 'Learning Python', 'https://www.linkedin.com/learning/learning-python-2?trk=li-softwaredev-python-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Get started with Python, the popular and highly readable object-oriented language.'),
(8, 1, 'Learning SQL Programming', 'https://www.linkedin.com/learning/learning-sql-programming?trk=li-softwaredev-sql-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn the basics of SQL, the programming language for retrieving and editing data from databases such as SQL Server and MySQL.'),
(9, 2, 'Cert Prep 1: Understanding Networks', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-1-understanding-networks?trk=li-itadmin-cert1-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Part 1 of our 9-part training series covers networking basics: OSI versus TCP/IP models, MAC and IP addressing, and packets and ports.'),
(10, 2, 'Cert Prep 2: The Physical Network', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-2-the-physical-network?trk=li-itadmin-cert2-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Prepare for questions on physical network components such as cabling, Ethernet, and switches.'),
(11, 2, 'Cert Prep 3: The World of TCP/IP', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-3-the-world-of-tcp-ip?trk=li-itadmin-cert3-en&src=re-other&veh=127.0.0.1%7Cre-other', 'This cert prep course covers TCP/IP basics, including IP addressing, subnetting, port forwarding, and routing.'),
(12, 2, 'Cert Prep 4: Making TCP/IP Work', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-4-making-tcp-ip-work?trk=li-itadmin-cert4-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Review key networking exam concepts as you learn about TCP/IP applications and network naming.'),
(13, 2, 'Cert Prep 5: Securing TCP/IP', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-5-securing-tcp-ip?trk=li-itadmin-cert5-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Review key network security exam concepts as you learn how to secure TCP/IP.'),
(14, 2, 'Cert Prep 6: Advanced IP Networking', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-5-securing-tcp-ip?trk=li-itadmin-cert5-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Review networking and infrastructure concepts as you learn about advanced networking devices, IPv6, and remote connectivity.'),
(15, 2, 'Cert Prep 7: Wireless, Cloud, and Mobile Networking', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-7-wireless-virtual-cloud-and-mobile-networking?trk=li-itadmin-cert7-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Review networking and infrastructure concepts as you learn about wireless, cloud, virtual, and mobile networking.'),
(16, 2, 'Cert Prep 8: Building a Real-World Network', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-8-building-a-real-world-network?trk=li-itadmin-cert8-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Review key networking exam concepts as you learn how to design and build a real-world network.'),
(17, 3, 'Customer Service Foundations', 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-8-building-a-real-world-network?trk=li-itadmin-cert8-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Make your customers feel valued. Learn practical techniques for delivering outstanding customer service and increasing customer loyalty.'),
(18, 3, 'Customer Service: Problem Solving and Troubleshooting', 'https://www.linkedin.com/learning/customer-service-problem-solving-and-troubleshooting?trk=li-customerservice-probsolving-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn critical problem-solving and troubleshooting processes for common sense customer service in a wide variety of applications.'),
(19, 3, 'Building Rapport with Customers', 'https://www.linkedin.com/learning/building-rapport-with-customers?trk=li-customerservice-rapport-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Forge a human connection with your customers. Learn how to establish rapport within the first few seconds of a customer service interaction.'),
(20, 3, 'Customer Service: Call Control Strategies', 'https://www.linkedin.com/learning/customer-service-call-control-strategies?trk=li-customerservice-callcontrol-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Get tips for communicating on the phone with upset customers. Discover time-saving call-control strategies to move customer issues to resolution.'),
(21, 3, 'Customer Service: Handling Abusive Customers', 'https://www.linkedin.com/learning/customer-service-handling-abusive-customers?trk=li-customerservice-abcustomer-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn strategies and techniques for handling abusive customers. Discover how to diffuse and refocus negative customer service interactions.'),
(22, 3, 'Positive Conversations with Challenging Customers', 'https://www.linkedin.com/learning/creating-positive-conversations-with-challenging-customers?trk=li-customerservice-positiveconvo-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to put a positive slant on a negative situation, and leave your customers feeling heard and valued.'),
(23, 3, 'De-Escalating Intense Situations', 'https://www.linkedin.com/learning/de-escalating-intense-situations?trk=li-customerservice-deescalate-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Successfully defuse intense situations with angry customers. Learn practical approaches for managing a customer\'s frustration, as well as your own.'),
(24, 3, 'Customer Service: Serve Customers Through Chat and Text', 'https://www.linkedin.com/learning/customer-service-serving-customers-through-chat-and-text?trk=li-customerservice-chat-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Provide top-notch customer service in the channels people love to use. Develop your chat and text writing skills to handle live, rapid-fire conversations.'),
(25, 4, 'Prepare Yourself for a Career in Sales', 'https://www.linkedin.com/learning/prepare-yourself-for-a-career-in-sales-2?trk=li-salesrep-prepare-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to develop yourself and build more effective relationships with both your teammates and your customers.'),
(26, 4, 'Sales Foundations', 'https://www.linkedin.com/learning/sales-foundations?trk=li-salesrep-foundations-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Find out what makes salespeople effective, and learn specific strategies for prospecting and product positioning and developing a sales process.'),
(27, 4, 'Asking Great Sales Questions', 'https://www.linkedin.com/learning/asking-great-sales-questions-5?trk=li-salesrep-salesqa-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to ask sales questions that lead to high-quality interactions with customers and clients.'),
(28, 4, 'Soft Skills for Sales Professionals', 'https://www.linkedin.com/learning/soft-skills-for-sales-professionals?trk=li-salesrep-softskills-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to build your soft sales skills to better connect with—and ultimately sell to—your customers.'),
(29, 4, 'Sales: Handling Objections', 'https://www.linkedin.com/learning/sales-handling-objections?trk=li-salesrep-objections-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to confidently handle objections that can crop up throughout the sales process.'),
(30, 4, 'Sales Negotiation', 'https://www.linkedin.com/learning/sales-negotiation?trk=li-salesrep-negotiation-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Discover what makes sales negotiations different and how to negotiate deals that stick.'),
(31, 4, 'Sales: Closing Strategies', 'https://www.linkedin.com/learning/sales-negotiation?trk=li-salesrep-negotiation-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Develop an effective closing strategy. Get tips to recognize buying signals and close more sales.'),
(32, 4, 'Selling with Stories: Stories Great Sales People Tell', 'https://www.linkedin.com/learning/selling-with-stories-part-2-stories-great-sales-people-tell?trk=li-salesrep-stories-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn the 25 most essential types of sales stories to earn buyer trust and make the sale.'),
(33, 5, 'Learning Data Analytics', 'https://www.linkedin.com/learning/learning-data-analytics-2?trk=li-data-dataanalytics-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn the basics of data analytics: using data for analysis and reporting. This beginner-level data science course is for anyone who works with data.'),
(34, 5, 'Data Fluency: Exploring and Describing Data', 'https://www.linkedin.com/learning/data-fluency-exploring-and-describing-data?trk=li-data-datafluency-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how anyone can speak the language of data analysis. Find out how to prepare data, explore it visually, and describe it using statistical methods.'),
(35, 5, 'Excel Statistics Essential Training: 1', 'https://www.linkedin.com/learning/excel-statistics-essential-training-1-2?trk=li-data-excelstatistics-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn statistics. Dr. Joseph Schmuller uses Microsoft Excel to teach the fundamentals of descriptive and inferential statistics.'),
(36, 5, 'Learning Excel: Data-Analysis', 'https://www.linkedin.com/learning/learning-excel-data-analysis-2?trk=li-data-learnexcel-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Unlock the power of your organization\'s data. Learn how to perform data analysis in Microsoft Excel.'),
(37, 5, 'Learning Data Visualization', 'https://www.linkedin.com/learning/learning-data-visualization-3?trk=li-data-datavisual-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Communicate complex ideas quickly and thoroughly with data visualization. Turn information into artwork and intrigue your audience.'),
(38, 5, 'Power BI Essential Training', 'https://www.linkedin.com/learning/power-bi-essential-training-3?trk=li-data-powerbi-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to use this powerful set of business analytics tools to create and share visualizations with others in your organization'),
(39, 5, 'Tableau Essential Training (2020.1)', 'https://www.linkedin.com/learning/tableau-essential-training-2020-1?trk=li-data-tableau-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Discover how to leverage the software to make smarter, more data-driven decisions.'),
(40, 6, 'Cert Prep 1: The Basics', 'https://www.linkedin.com/learning/tableau-essential-training-2020-1?trk=li-data-tableau-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Earn your CompTIA A+ certification. Study topics from the Core 1 (220-1001) exam, including hardware basics and best practices for safety, communication, and professionalism.'),
(41, 6, 'Cert Prep 2: Microprocessing and RAM', 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-2-microprocessing-and-ram?trk=li-itsupport-certprep2-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn all about CPUs, RAM technologies and features, and installing both a CPU and RAM.'),
(42, 6, 'Cert Prep 3: Core Hardware', 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-3-core-hardware?trk=li-itsupport-certprep3-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn about essential hardware components, devices, and processes.'),
(43, 6, 'Cert Prep 4: Storage and Peripherals', 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-4-storage-and-peripherals?trk=li-itsupport-certprep4-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Learn how to install and configure essential storage and peripheral devices as you prepare to take and pass the CompTIA A+ Core 1 (220-1001) exam.'),
(44, 6, 'Cert Prep 5: Display Technologies', 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-5-display-technologies?trk=li-itsupport-certprep5-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Prepare for the CompTIA A+ Core 1 (220-1001) exam. Study exam topics related to display technologies such as monitors, graphics cards, and projectors.'),
(45, 6, 'Cert Prep 6: Physical Networking', 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-6-physical-networking?trk=li-itsupport-certprep6-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Prepare for the CompTIA A+ Core 1 (220-1001) exam by reviewing the basics of networking: LANs and WANs, hubs and switches, and cables and connectors.'),
(46, 6, 'Cert Prep 7: Understanding Networking', 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-7-understanding-networking?trk=li-itsupport-certprep7-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Review essential wireless networking concepts—like DNS, configuring routers—as you prepare to take and pass the CompTIA A+ Core 1 (220-1001) exam.'),
(47, 6, 'Cert Prep 8: Internet and the Cloud', 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-7-understanding-networking?trk=li-itsupport-certprep7-en&src=re-other&veh=127.0.0.1%7Cre-other', 'Prepare to take and pass the CompTIA A+ Core 1 (220-1001) exam. Review internet fundamentals—from broadband connections to VPNs—and dig into key virtualization concepts.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `organization` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  `pass_reset_token` text COLLATE utf8_unicode_ci,
  `verify_token` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `organization`, `course`, `hours`, `created`, `modified`, `status`, `pass_reset_token`, `verify_token`) VALUES
(1, 'John Doe', 'user@datazen.test', 'datazen.test', '08130000000', 'xyz cust LTD', '2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL),
(2, 'John Smith Jr', 'smith@datazen.test', '$2y$10$Cl.Od5a245vOc6c6jFSdE.NOVedYHRbBdtnuHbRxcMp6unge/r0ge', '08130488941', 'SMITH LTD', '4', 3, '0000-00-00 00:00:00', '2020-09-15 21:05:15', 1, 'N1nvm3oigQaeVcj6', NULL),
(3, 'James Smith', 'smith@perfexcrm.test', '$2y$10$Y6UFAXz/A.nPf9ZpnXVRie/Hh2KwH80YE5Ud9rHNfvSe4m13QDjWe', '08130488941', 'SMITH LTD', '3', 123, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL),
(4, 'John Doe', 'user@datazen.test', '$2y$10$g8fAw8vAJe15O8iiGfGHce8ytv7jA.nCBoTS9xZh8OEQna5pczaj.', '08130488941', 'xyz cust LTD', '2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL),
(5, 'John Doe', 'user@datazen.test', '$2y$10$g8fAw8vAJe15O8iiGfGHce8ytv7jA.nCBoTS9xZh8OEQna5pczaj.', '08130488941', 'xyz cust LTD', '2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL),
(6, 'John Doe', 'user@datazen.test', '$2y$10$g8fAw8vAJe15O8iiGfGHce8ytv7jA.nCBoTS9xZh8OEQna5pczaj.', '08130488941', 'xyz cust LTD', '2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL),
(7, 'John Doe', 'user@datazen.test', '$2y$10$g8fAw8vAJe15O8iiGfGHce8ytv7jA.nCBoTS9xZh8OEQna5pczaj.', '08130488941', 'xyz cust LTD', '2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL),
(8, 'John Doe', 'user@datazen.test', '$2y$10$g8fAw8vAJe15O8iiGfGHce8ytv7jA.nCBoTS9xZh8OEQna5pczaj.', '08130488941', 'xyz cust LTD', '2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL),
(9, 'John 2020-05-25 10:18:28 Doe', 'lead1@perfexcrm.test', '$2y$10$cDHu1D6tbb3SMvWk0Zw5b.pPUIYOxUSX4Bp0yk02TVwwg8V7N7YeW', '08130000000', 'xyz cust LTD', '3', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, 'wq9ZYVDyANCmHXkL'),
(10, 'John Smith', 'John@datazen.test', '$2y$10$Z083gashLdgTDt59h.r3kOILmzJmwWKD6OY78W3bXmuYScSWedP.i', '2121212', 'xyz cust LTD', '2', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `viewed_modules`
--

CREATE TABLE `viewed_modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `viewed_modules`
--

INSERT INTO `viewed_modules` (`id`, `module_id`, `user_id`, `course_id`) VALUES
(1, 1, 2, 1),
(2, 2, 2, 1),
(3, 22, 2, 3),
(4, 25, 2, 4),
(5, 10, 3, 2),
(6, 1, 10, 1),
(7, 2, 10, 1),
(8, 3, 10, 1),
(9, 3, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewed_modules`
--
ALTER TABLE `viewed_modules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `viewed_modules`
--
ALTER TABLE `viewed_modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
