-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 08:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_job_post`
--

CREATE TABLE `apply_job_post` (
  `id_apply` int(11) NOT NULL,
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_job_post`
--

INSERT INTO `apply_job_post` (`id_apply`, `id_jobpost`, `id_company`, `id_user`) VALUES
(45, 14, 7, 1),
(7, 1, 1, 5),
(42, 8, 3, 16),
(13, 6, 1, 5),
(16, 1, 1, 1),
(14, 7, 1, 5),
(15, 1, 1, 7),
(44, 12, 1, 1),
(76, 33, 2, 1),
(89, 9, 3, 26),
(47, 12, 1, 18),
(40, 15, 8, 10),
(50, 11, 1, 1),
(51, 16, 10, 1),
(71, 31, 3, 23),
(58, 17, 3, 1),
(54, 13, 6, 1),
(55, 15, 8, 1),
(62, 11, 1, 20),
(84, 10, 4, 28),
(64, 10, 4, 20),
(65, 12, 1, 20),
(68, 28, 3, 1),
(78, 33, 2, 20),
(79, 13, 6, 20),
(83, 11, 1, 27),
(81, 33, 2, 25),
(85, 37, 14, 26),
(86, 36, 13, 26),
(88, 18, 3, 26);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `headofficecity` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `companytype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProPic` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `companyname`, `headofficecity`, `contactno`, `website`, `companytype`, `email`, `password`, `createdAt`, `ProPic`) VALUES
(1, 'Basundhara LTD.', 'Basundhara,Dhaka-1203', '01678998214', 'www.basundhara.com', 'Land Properties', 'test@gamil.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-04-07 13:58:09', 'images.jpg'),
(2, 'Grameenphone', 'Motijheel,Dhaka-1210', '017856466878', 'www.grameenphone.com', 'IT Telecommunication', 'gp@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-04-08 20:41:59', 'gp.jpg'),
(3, 'PRAN RFL', 'Motijheel,Dhaka-1201', '0197856466878', 'pran-rfl.com', 'Business', 'pranrfl@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-04-08 21:00:44', 'Pran-RFL_20170604052113_20.png'),
(4, 'Beximco ', 'Beximco Industrial Park \r\nSarabo, Kashimpur, Gazipur, Bangladesh', ': 01713-001659 ', ' www.bextex.net ', 'Textile', 'sardar@beximtex.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-04-09 05:28:34', '0.png'),
(5, 'R K Group', 'SAN ANTONIO\r\n1220 E. Commerce\r\nSan Antonio, TX 78205\r\n(210) 223-2680', '+880182323223', 'rk-communication.com', 'Event Management', 'rk@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-04-09 18:46:36', 'download.png'),
(6, 'Sinha Group', 'House# 368, Road#28, New DOHS, Mohakhali, Dhaka-1206', '8828860-64, 9891390-91', 'www.sinha.com', 'Factory', 'sinha@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-04-10 01:43:22', 'Sinhalogo.jpg'),
(7, 'Neel Sagar', 'Nilphamary', '01976654676789', 'www.neel-sagar.com', 'IT Solutions', 'nil@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-04-10 04:09:52', 'images.png'),
(13, 'SQUARE Pharmaceuticals Limited ', 'Pabna, Bangladesh', '12378595', 'www.square.com', 'business', 'square@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-09-16 06:32:33', 'download.jpg'),
(14, 'Dream 71', 'Dhanmondi 2, Dhaka', '7854512142', 'www.dream71.com', 'Software', 'dream71@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2018-09-16 06:50:30', 'dream.png.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `minimumsalary` varchar(255) NOT NULL,
  `maximumsalary` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id_jobpost`, `id_company`, `jobtitle`, `description`, `minimumsalary`, `maximumsalary`, `experience`, `qualification`, `createdat`) VALUES
(11, 1, 'Administrative Assistant', 'The person(s) evaluating your supplemental questionnaire does not have access to your resume and will only know the information about you that you document in...', '20,000tk', '28,000 tk', '1 year', 'B.sc Honrs.', '2018-04-09 05:36:33'),
(18, 3, 'Assistant Manager', 'University Management Information System\r\nPrepare report for various departments.\r\nAudio and video editing\r\nWeb Design and development\r\nPOS System maintain and development\r\nWebsite maintain and development\r\nEMS maintenance', '21,000 tk', '31,000 tk', 'Fresher', 'M.Sc. or equliant', '2018-09-03 19:31:46'),
(9, 3, 'Deputy Manager', 'The job specification for a marketing manager is a short form overview of the job description for a marketing manager. The job specification describes the knowledge, education, experience, skills, and abilities you believe are essential for any candidate who will successfully perform a particular job.', '30,000 tk', '60,000 tk', '6 years', 'M.Sc. or equliant', '2018-04-08 21:07:45'),
(10, 4, 'Assistant Manager', 'He or she helps manage and train the staff to ensure they provide exceptional service to customers in a timely, courteous, efficient, and accurate manner and...', '25,000 tk ', '30,000 tk ', '3 years', 'B.sc Honrs.', '2018-04-09 05:34:26'),
(12, 1, 'Assistant Manager', 'Assistant Shop Manager:. We are seeking friendly, enthusiastic individuals who are passionate about providing great customer service for our location in:....', '10,000 tk', '20,000 tk', 'Fresher', 'HSC or equivilant', '2018-04-09 05:38:20'),
(13, 6, 'Site Coordinator', '\r\nProvides information to the Practice Manager regarding the competency of staff personnel and any additional training if warranted....', '21,500 tk', '29,000 tk', 'Fresher', 'B.Sc. ', '2018-04-10 01:45:26'),
(33, 2, ' Intern', 'Grameenphone invites you to join us for a unique internship experience for three months internship for interested students. This internship program is for students and offered in a range of functions across the company. Our interns work on projects that tackle some of the most cutting-edge business challenges in the industry.', '20,000tk', '30,000 tk', 'Fresher', 'Graduate in any discipline from any reputed University. Business graduate is preferred for business understanding.', '2018-09-08 13:53:08'),
(36, 13, 'Assistant Manager', 'The job specification for a marketing manager is a short form overview of the job description for a marketing manager. The job specification describes the knowledge, education, experience, skills, and abilities you believe are essential for any candidate who will successfully perform a particular job', '21,000 tk ', '30,000 tk', '1 years', 'B.SC.', '2018-09-16 06:40:27'),
(37, 14, 'Software Developer', 'Senior Java Programmer (Remotely Work) \r\nWelcome to the company where your ideas are counted, where your determination create a new world, where your talent and hard-works are rewarded. \r\nAt Dream71 we always endeavor to lead towards development and creating a flexible, dynamic and successful company.', '25,000', '30,000 tk', '4 years', ' B.Sc in Computer Science from reputed university.', '2018-09-16 07:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text,
  `city` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `passingyear` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `Resume` varchar(5000) DEFAULT NULL,
  `ProPic` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `contactno`, `qualification`, `passingyear`, `dob`, `age`, `designation`, `Resume`, `ProPic`) VALUES
(1, 'Ashik', 'Khan', 'aakn22@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', '', '', '', '', '', '', '', 'CV.pdf', 'PSX_20170617_215601.jpg'),
(2, 'Ashik', 'khan', 'aasshhik98@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', '', '', '', NULL, NULL, NULL, NULL, '', NULL),
(3, 'at', 'tb', 'tb@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', '', '', '', NULL, NULL, NULL, NULL, '', 'fb.png'),
(4, 'ami', 'tumi', 'ami@gmai.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', '', '', '', NULL, NULL, NULL, NULL, '', NULL),
(5, 'Akash', 'K', 'Akash@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', 'test', 'ab', '018', 'ab', '2017-11-11', '1992-10-10', '26', 'abc', '', NULL),
(6, 'tanvir ', 'Mahmud', 'tanvir@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(7, 'dj', 'kobir', 'dj@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', 'i love jotey', 'singara', '', '', '', '', '', '', '', NULL),
(9, 'Kobir', 'Shoron', 'Kobir@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Fahmid', 'Anabi', 'anabi@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jhgdffhjhbnklj;klk;', NULL),
(11, 'Drubo', 'Said', 'D@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', '', '', '', '', '', '', '', '', NULL),
(12, 'Rakib', 'Khan', 'Rakib@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', 'Dhaka', '', 'H.S.C.', '', '', '', '', 'I am a student.', NULL),
(13, 'Azizul', 'Haque', 'azizulhaque@gmail.com', 'OTQ2MjQxY2JmZGQ5NzI4MzUyYjE4MWY0NWJlY2RlNDk=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Tanvir', 'Rahman', 'T@gmail.com', 'ZDU3ZDAxZmM4Yzg3MjkwMDE3N2Y2NmYwY2QyMTgzNGM=', '', '', '', '', '', '', '18', '', NULL, NULL),
(15, 'a', 'b', 'ab@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Ashik', 'khan', 'ashik12@gmail.com', 'ZTVlOGY2YzU0MDc0ZmYwNWQxNTFjNTRlN2UyMmEyMDI=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Tanvir', 'Mahmud', 'Tanvir123@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Samin', 'Aurgha', 'Aurgha@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/fb.png', NULL),
(19, 'Ashik', 'Khan', 'As@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/36323688_1853319811380381_5899932248790007808_n.jpg', NULL),
(20, 'Tanvir', 'Mahmud', 'TanvirM@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', '', '', '', '', '1995-01-19', '22', '', 'resume-samples.pdf', '38160633_2237564316477694_836819036971991040_n.jpg'),
(21, 'Ashik', 'khan', 'aaaaa@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CV.pdf', NULL),
(22, 'Tanvir', 'Rahman', 'TRahman@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Sakib', 'Hasan', 'Sakib75@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Shariar', 'Niloy', 'shariar07@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', 'Domar, Nilphamari.', 'Nilphamari', '12324354776', 'B.SC.', '2019-04-08', '1994-08-12', '23', '', 'resume-samples.pdf', 'Niloy.jpg'),
(26, 'Rakibul', 'Hasan', 'hasanrakibul977@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', ' Pabna Sadar\r\n', 'Pabna', '12378595', 'B.SC.', '2019-04-08', '1996-11-24', '22', '', 'resume-samples.pdf', 'Proyash.jpg'),
(27, 'Rakibul', 'Hasan', 'hasanrakibul7@gmail.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '', '', '', '', '', '', '22', '', 'resume-samples.pdf', 'ccy2uflo1mg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_job_post`
--
ALTER TABLE `apply_job_post`
  ADD PRIMARY KEY (`id_apply`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id_jobpost`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_job_post`
--
ALTER TABLE `apply_job_post`
  MODIFY `id_apply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id_jobpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
