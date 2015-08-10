-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql202.byetcluster.com
-- Generation Time: Mar 30, 2015 at 02:46 PM
-- Server version: 5.6.22-71.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b12_16055662_InternshipHunters`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE IF NOT EXISTS `intern` (
  `company` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` text,
  `edate` date DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  `openings` int(11) DEFAULT NULL,
  `areas` text,
  `eligibility` text NOT NULL,
  `stipend` text,
  `link` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`company`, `location`, `description`, `edate`, `duration`, `openings`, `areas`, `eligibility`, `stipend`, `link`) VALUES
('NATIONAL INSTITUTE OF TECHNOLOGY', 'ROURKELA', 'NIT Rourkela has launched a Summer Internship Program with an objective to encourage ambitious bright BE/B.Tech as well as B.Sc, B.Arch, M.Sc, MA and MBA students of different institutes in India other than NIT Rourkela to pursue an innovative research and development project under the guidance of NIT faculties.', '2014-03-25', '2 months', 10, 'Computer Science • Physics \r\n• Electrical Engineering\r\n• Chemistry \r\n• Electronics Engineering \r\n• Mathematics \r\n• Mechanical Engineering \r\n• Humanities & Social Sciences\r\n• Civil Engineering \r\n• School of Management (MBA)\r\n• Chemical Engineering\r\n• Planning & Architecture\r\n• Metallurgical, Mining & Materials Engineering\r\n• Biotechnology & Medical Engineering\r\n• Ceramic Engineering\r\n• Industrial Design\r\n• Food Processing Engineering', 'All BE / B.Tech students, All B.sc students, All B.Arch students, All M.Sc students', '3500/month', 'http://sip.nitrkl.ac.in/'),
('Entrinsico', 'Issaquah, WA', 'Now seeking career minded students seeking unpaid and paid internships, and entry level consulting opportunities with a startup corporation in consulting services. Depending on your background and experience the position type will be determined at the time of completing the interviewing process. ', NULL, NULL, 3, NULL, '- Have IT competency in the following: Software Engineering, Development, Architecture, Networking, Network Design, Programming, IT Security, E-commerce design and build \r\n- Understand how computers and software can increase efficiency \r\n- Possess skills in analyzing, formulating, trouble-shooting, and synthesizing ', 'unpaid', 'http://www.entrinsico.com/careers.html'),
('NATIONAL INSTITUTE OF TECHNOLOGY,SILCHAR', 'SILCHAR', 'NIT Silchar is inviting the best and the brightest students for Summer Research Fellowship Program 2014. This is a paid fellowship program for all engineering branches of 3rdyear. Students from 2nd year are also eligible to apply. The last date for application is 30.04.2014.', '2014-04-30', '6 weeks', NULL, NULL, 'Any undergraduate student who has completed at least 2 years of study towards an engineering degree and amongst the top ten in his / her class will be eligible to apply for this fellowship. Students who will be completing this requirement by April 2014 are also eligible.', 'INR 2000 per month + to and fro cost of travel (by bus or non-AC sleeper class) + free food and lodging at NIT Silchar for the period of internship.', 'http://www.nits.ac.in/academics/info/Internship/internship.html'),
('National Institute of Technology, Meghalaya(University)', 'Meghalaya', 'Here is the summer research programme for all the students from all disciplines for the period of 4 to 8 weeks. The dates of the particular internship can be clarified through email. The objective of the programme is to encourage bright students of different institutes of India to pursue an innovative research and development project under the guidance of faculty members. \r\nThe registration and accommodation is of free cost. But the candidates have to bear their travel and mess expenses. ', '2014-04-21', '4 to 8 weeks', NULL, 'CE	:	Civil Engineering\r\nCSE	:	Computer Science & Engineering\r\nCH	:	Chemistry\r\nECE	:	Electronics & Communication Engineering\r\nEEE	:	Electrical & Electronics Engineering\r\nHS	:	Humanities & Social Sciences\r\nMA	:	Mathematics\r\nME	:	Mechanical Engineering\r\nPH	:	Physics\r\nMS	:	Management Studies', 'B. Tech: Having completed at least four semesters in one of the following disciplines-\r\nCivil Engineering and related disciplines\r\nMechanical Engineering and related disciplines\r\nComputer Science and Engineering and related disciplines\r\nElectronics Engineering and related disciplines\r\nElectrical Engineering and related disciplines\r\nB. Sc: Chemistry, Mathematics, Physics, having completed at least two semesters.\r\nM. Sc: Chemistry, Mathematics, Physics, Electronics, Computer Sc. having completed at least two semesters.\r\nMCA: Having completed at least two semesters.\r\nMA: Students of MA in English having completed at least two semesters.\r\nBBA: Having completed at least four semesters.\r\nMBA: Having completed at least two semesters.\r\nM. Tech: Having completed at least two semesters.', 'unpaid', 'http://www.nitm.ac.in/summer_internship_2014.html'),
('Indian Institute of Technology Guwahati(Government Body)', 'Allhabad', 'It is a 4-10 weeks internship for the 2nd year of B.A./B.Sc./B.C.A. or the 3rd year of B.E./B.Tech./B.S./M.Sc(Integrated)/M.Tech(Integrated)/B.S.-M.S.(Duel) or the 1st year of M.A./M.Sc/M.C.A/M.Tech. students. The subject areas include: Algebra, Analysis, Differential Equations, Numerical Analysis, Probability & Statistics and Computer Science.\r\n\r\nThe interested candidates have to send the following items either online or offline:\r\n1. Application Form \r\n2. Forwarding Latter by HOD \r\n3. Letter of Reference\r\n4. Write Up on the proposed work', '2014-03-01', '4 to 10 weeks', NULL, NULL, 'Applicant must have to complete three years, i.e., six semesters in the B.Tech. / B.E. Computer Science program by the summer of 2014.', '2500/month', 'http://www.iitg.ernet.in/cseweb/summerinternship/home'),
('Motilal Nehru National Institute of Technology(University)', 'Allahabad ', 'Motilal Nehru National Institute of Technology, Allahabad, is hosting a 6-8 weeks long paid summer internship, for the third year undergraduate studets of any branch of engineering. \r\n\r\nThe internship offers hand on- practical experiences to the students, under the mentorship of qualified faculty members. A stipend of Rs. 2000 per month will be paid to the candidates. The eligibility criteria to enter the program is a CGPA of 7. The internship will start in the month of May.\r\n\r\nThe interested candidates have to send the application form along with an attested copy of the marksheet of the fifth semester, to the following address: \r\nThe Head of Department, Motilal Nehru National Institute of Technology \r\nAllahabad, Allahabad-211004, Uttar Pradesh', '2014-04-30', '6 to 8 weeks', NULL, 'all branches of engineering/technology', 'B. E. /B. Tech. students of 3rd year of any UGC/AICTE recognized University\r\n/Institute /College with CPI above 7.0.', 'INR 2000/month', 'http://www.mnnit.ac.in/index.php/component/content/article/34-rightside/844-notice-for-summer-internship-programme-in-different-engineering-departments.html');

-- --------------------------------------------------------

--
-- Table structure for table `tempo`
--

CREATE TABLE IF NOT EXISTS `tempo` (
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `psswrd` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `bday` date NOT NULL,
  `lang` varchar(500) NOT NULL,
  `soft` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `psswrd` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `bday` date NOT NULL,
  `lang` varchar(500) NOT NULL,
  `soft` varchar(500) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `psswrd`, `email`, `mob`, `address`, `age`, `sex`, `bday`, `lang`, `soft`) VALUES
('Rohan', 'Bhoi', 'rocker', 'br@gmail.com', 1121212121, 'Berhampur', 18, 'M', '2014-03-24', 'c,c++,java,php,html,perl,python', 'xilinx,photoshop,dreamweaver'),
('Bhubanananda', 'Chhatriya', 'qwerty', 'bc@gmail.com', 1111111111, 'Sambalpur', 18, 'M', '2014-04-30', 'java,c++,c,php,html,css', 'photoshop,dreamweaver,eclipse,netbeans,xilinx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
