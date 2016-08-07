-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 10:22 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `last_name`, `first_name`, `middle_name`, `birthdate`, `email`, `password`, `position`, `status`) VALUES
(4, 'Jacob', 'Maverick John', 'Ycoy', '1995-11-04', 'jacobmaverick07@gmail.com', '9adb41f2a66506c7e816424b455ad5ff', 'Survey Coordinator', 'active'),
(6, 'Reyes', 'Jeremiah', 'Dionson', '2016-04-20', 'jrmh.rys@gmail.com', 'e7ec4c603ee70851f5266811e1d54ee5', 'UST Admin', 'active'),
(7, 'Balmeo', 'Krisnamonte', 'Balmeo', '2016-04-22', 'balmeo.kris@gmail.com', 'f622f87978339803978ddaf5eda08c09', 'UST Admin', 'active'),
(8, 'Ko', 'Jerome', 'B.', '2016-05-16', 'jerome.ko@gmail.com', 'd42f72d0753cb41bcb2d67edd3f0a5fe', 'UST Admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int(11) NOT NULL,
  `barangay_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
(1, 'Barangay 1'),
(2, 'Barangay 2'),
(3, 'Barangay 3'),
(4, 'Barangay 4'),
(5, 'Barangay 5'),
(6, 'Barangay 6'),
(7, 'Barangay 7');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Manila'),
(2, 'Caloocan'),
(3, 'Quezon'),
(4, 'San Juan'),
(5, 'Sta. Mesa'),
(6, 'Pasig'),
(7, 'Pasay');

-- --------------------------------------------------------

--
-- Table structure for table `civil_status`
--

CREATE TABLE IF NOT EXISTS `civil_status` (
  `id` int(11) NOT NULL,
  `civil_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dahilan_pagkawala`
--

CREATE TABLE IF NOT EXISTS `dahilan_pagkawala` (
  `id` int(11) NOT NULL,
  `cause` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indigenous_tribe`
--

CREATE TABLE IF NOT EXISTS `indigenous_tribe` (
  `id` int(11) NOT NULL,
  `tribe_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lalawigan`
--

CREATE TABLE IF NOT EXISTS `lalawigan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(120) NOT NULL,
  `member_birthdate` date DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `civil_status` varchar(20) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `registered` varchar(7) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL,
  `indigenous_tribe` varchar(10) DEFAULT NULL,
  `tribe_name` varchar(20) DEFAULT NULL,
  `years_stayed` int(3) DEFAULT NULL,
  `former_home` varchar(120) DEFAULT NULL,
  `studying` varchar(7) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `school_status` varchar(10) DEFAULT NULL,
  `working` varchar(10) DEFAULT NULL,
  `work_type` varchar(200) DEFAULT NULL,
  `work_explanation` text,
  `industry` varchar(150) DEFAULT NULL,
  `industry_explanation` text,
  `work_status` varchar(60) DEFAULT NULL,
  `worker_class` varchar(100) DEFAULT NULL,
  `searching` varchar(7) DEFAULT NULL,
  `way` varchar(60) DEFAULT NULL,
  `chance` varchar(7) DEFAULT NULL,
  `willingness` varchar(10) DEFAULT NULL,
  `write_read` varchar(7) DEFAULT NULL,
  `association` varchar(10) DEFAULT NULL,
  `assoc_name` text,
  `voter` varchar(7) DEFAULT NULL,
  `voted` varchar(7) DEFAULT NULL,
  `nutrition_status` varchar(30) DEFAULT NULL,
  `simbahayan_id` int(11) DEFAULT NULL,
  `coordinator_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_birthdate`, `age`, `gender`, `civil_status`, `religion`, `registered`, `relation`, `indigenous_tribe`, `tribe_name`, `years_stayed`, `former_home`, `studying`, `year`, `school_status`, `working`, `work_type`, `work_explanation`, `industry`, `industry_explanation`, `work_status`, `worker_class`, `searching`, `way`, `chance`, `willingness`, `write_read`, `association`, `assoc_name`, `voter`, `voted`, `nutrition_status`, `simbahayan_id`, `coordinator_id`) VALUES
(1, 'Salandanan, Rene', '2013-01-06', 3, '1-Lalaki', '---', '---', '---', '---', '---', '---', 2, '', '---', '---', '---', '---', '---', '', '---', '', '---', '', '---', '---', '---', '---', '---', '---', '', '---', '---', NULL, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `code` varchar(30) NOT NULL,
  `display` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`code`, `display`) VALUES
('member_id', 'ID'),
('member_name', 'Name'),
('member_birthdate', 'Birthdate'),
('age', 'Age'),
('gender', 'Gender'),
('num_members', 'Number of Members'),
('puno', 'Simbahayan Head');

-- --------------------------------------------------------

--
-- Table structure for table `purok`
--

CREATE TABLE IF NOT EXISTS `purok` (
  `purok_id` int(11) NOT NULL,
  `purok_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purok`
--

INSERT INTO `purok` (`purok_id`, `purok_name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(1, 'Region 1'),
(2, 'Region 2'),
(3, 'Region 3'),
(4, 'Region 4'),
(5, 'Region 5'),
(6, 'Region 6'),
(7, 'Region 7');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE IF NOT EXISTS `relation` (
  `id` int(11) NOT NULL,
  `relasyon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `id` int(11) NOT NULL,
  `religion_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `simbahayan`
--

CREATE TABLE IF NOT EXISTS `simbahayan` (
  `simbahayan_id` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `lalawigan` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `barangay` int(11) NOT NULL,
  `purok` int(11) NOT NULL,
  `address` text NOT NULL,
  `nakapanayam` varchar(75) NOT NULL,
  `date_surveyed` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `puna` text NOT NULL,
  `num_members` int(11) NOT NULL,
  `simbahayan_head` varchar(100) NOT NULL,
  `other_members` varchar(10) NOT NULL,
  `om_name` varchar(100) NOT NULL,
  `om_age` int(3) NOT NULL,
  `om_gender` varchar(10) NOT NULL,
  `om_relation` varchar(20) NOT NULL,
  `om_dahilan` varchar(50) NOT NULL,
  `ofw` varchar(10) NOT NULL,
  `ofw_name` varchar(100) NOT NULL,
  `ofw_relation` varchar(20) NOT NULL,
  `ofw_country` varchar(20) NOT NULL,
  `ofw_work` varchar(100) NOT NULL,
  `isang_magulang` varchar(10) NOT NULL,
  `im_name` varchar(100) NOT NULL,
  `im_cause` varchar(200) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `pwd_cause` varchar(20) NOT NULL,
  `pwd_name` varchar(100) NOT NULL,
  `pwd_type` varchar(50) NOT NULL,
  `pwd_tulong` text NOT NULL,
  `pinanggalingan` varchar(15) NOT NULL,
  `sc_name` varchar(100) NOT NULL,
  `sc_id` varchar(10) NOT NULL,
  `sc_use` varchar(200) NOT NULL,
  `board_passer` varchar(10) NOT NULL,
  `bp_name` varchar(100) NOT NULL,
  `bp_profession` varchar(200) NOT NULL,
  `nagpapagamot` varchar(10) NOT NULL,
  `saan_nagpagamot` varchar(100) NOT NULL,
  `num_couples` int(3) NOT NULL,
  `couple_name` varchar(100) NOT NULL,
  `family_planning` varchar(10) NOT NULL,
  `fp_ways` varchar(50) NOT NULL,
  `dating_kasambahay` varchar(10) NOT NULL,
  `dk_name` varchar(100) NOT NULL,
  `dk_gender` varchar(10) NOT NULL,
  `dk_age` int(3) NOT NULL,
  `death_cause` varchar(50) NOT NULL,
  `pagpatay` varchar(10) NOT NULL,
  `pagpatay_lalaki` int(2) NOT NULL,
  `pagpatay_babae` int(2) NOT NULL,
  `kabuuan_pagpatay` int(2) NOT NULL,
  `pagnanakaw` varchar(10) NOT NULL,
  `pananakaw_lalaki` int(2) NOT NULL,
  `pagnanakaw_babae` int(2) NOT NULL,
  `kabuuan_pagnanakaw` int(2) NOT NULL,
  `panggagahasa` varchar(10) NOT NULL,
  `panggagahasa_lalaki` int(2) NOT NULL,
  `panggagahasa_babae` int(2) NOT NULL,
  `kabuuan_panggagahasa` int(2) NOT NULL,
  `pananakit` varchar(10) NOT NULL,
  `pananakit_lalaki` int(2) NOT NULL,
  `pananakit_babae` int(2) NOT NULL,
  `kabuuan_pananakit` int(2) NOT NULL,
  `iba_crime` varchar(10) NOT NULL,
  `iba_crime_lalaki` int(2) NOT NULL,
  `iba_crime_babae` int(2) NOT NULL,
  `kabuuan_iba_crime` int(2) NOT NULL,
  `water_source` varchar(100) NOT NULL,
  `water_location` varchar(70) NOT NULL,
  `palikuran` varchar(100) NOT NULL,
  `sambahayan_status` varchar(100) NOT NULL,
  `rental_fee` int(7) NOT NULL,
  `electricity` varchar(10) NOT NULL,
  `electricity_source` varchar(100) NOT NULL,
  `consumption_fee` int(7) NOT NULL,
  `kasangkapan` text NOT NULL,
  `materials_dingding` varchar(100) NOT NULL,
  `materials_bubong` varchar(100) NOT NULL,
  `pagsasaka` varchar(10) NOT NULL,
  `pagsasaka_salapi` int(11) NOT NULL,
  `pagsasaka_bagay` int(11) NOT NULL,
  `paghahayop` varchar(10) NOT NULL,
  `paghahayop_salapi` int(11) NOT NULL,
  `paghahayop_bagay` int(11) NOT NULL,
  `pangingisda` varchar(10) NOT NULL,
  `pangingisda_salapi` int(11) NOT NULL,
  `pangingisda_bagay` int(11) NOT NULL,
  `pangangahoy` varchar(10) NOT NULL,
  `pangangahoy_salapi` int(11) NOT NULL,
  `pangangahoy_bagay` int(11) NOT NULL,
  `pagtitinda` varchar(10) NOT NULL,
  `pagtitinda_salapi` int(11) NOT NULL,
  `pagtitinda_bagay` int(11) NOT NULL,
  `paggawa` varchar(10) NOT NULL,
  `paggawa_salapi` int(11) NOT NULL,
  `paggawa_bagay` int(11) NOT NULL,
  `pantao` varchar(10) NOT NULL,
  `pantao_salapi` int(11) NOT NULL,
  `pantao_bagay` int(11) NOT NULL,
  `transportasyon` varchar(10) NOT NULL,
  `transportasyon_salapi` int(11) NOT NULL,
  `transportasyon_bagay` int(11) NOT NULL,
  `pagmimina` varchar(10) NOT NULL,
  `pagmimina_salapi` int(11) NOT NULL,
  `pagmimina_bagay` int(11) NOT NULL,
  `contruction` varchar(10) NOT NULL,
  `contruction_salapi` int(11) NOT NULL,
  `contruction_bagay` int(11) NOT NULL,
  `pangkabuhayan` varchar(10) NOT NULL,
  `pangkabuhayan_salapi` int(11) NOT NULL,
  `pangkabuhayan_bagay` int(11) NOT NULL,
  `netong_salapi` int(11) NOT NULL,
  `netong_bagay` int(11) NOT NULL,
  `katayuan_pamamalagi` varchar(100) NOT NULL,
  `lawak_sinasaka` varchar(50) NOT NULL,
  `pananim` text NOT NULL,
  `kagamitang_pangagrikultura` text NOT NULL,
  `alagang_hayop` text NOT NULL,
  `buhay_hayop` text NOT NULL,
  `karne` text NOT NULL,
  `gatas` text NOT NULL,
  `itlog` text NOT NULL,
  `iba_pa` text NOT NULL,
  `lugar_pangingisda` text NOT NULL,
  `lawak_fishpond` varchar(100) NOT NULL,
  `bilang_fishcage` int(11) NOT NULL,
  `sukat_fishcage` text NOT NULL,
  `huling_isda` text NOT NULL,
  `bangka` varchar(50) NOT NULL,
  `kagamitan_pangingisda` text NOT NULL,
  `pamamahala_basura` text NOT NULL,
  `kumokolekta_basura` varchar(50) NOT NULL,
  `kadalas_pangongolekta` varchar(50) NOT NULL,
  `nasalanta` varchar(10) NOT NULL,
  `sumalanta` text NOT NULL,
  `gutom` varchar(10) NOT NULL,
  `buwan_gutom` text NOT NULL,
  `coordinator_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simbahayan`
--

INSERT INTO `simbahayan` (`simbahayan_id`, `region`, `lalawigan`, `city`, `barangay`, `purok`, `address`, `nakapanayam`, `date_surveyed`, `start_time`, `end_time`, `puna`, `num_members`, `simbahayan_head`, `other_members`, `om_name`, `om_age`, `om_gender`, `om_relation`, `om_dahilan`, `ofw`, `ofw_name`, `ofw_relation`, `ofw_country`, `ofw_work`, `isang_magulang`, `im_name`, `im_cause`, `pwd`, `pwd_cause`, `pwd_name`, `pwd_type`, `pwd_tulong`, `pinanggalingan`, `sc_name`, `sc_id`, `sc_use`, `board_passer`, `bp_name`, `bp_profession`, `nagpapagamot`, `saan_nagpagamot`, `num_couples`, `couple_name`, `family_planning`, `fp_ways`, `dating_kasambahay`, `dk_name`, `dk_gender`, `dk_age`, `death_cause`, `pagpatay`, `pagpatay_lalaki`, `pagpatay_babae`, `kabuuan_pagpatay`, `pagnanakaw`, `pananakaw_lalaki`, `pagnanakaw_babae`, `kabuuan_pagnanakaw`, `panggagahasa`, `panggagahasa_lalaki`, `panggagahasa_babae`, `kabuuan_panggagahasa`, `pananakit`, `pananakit_lalaki`, `pananakit_babae`, `kabuuan_pananakit`, `iba_crime`, `iba_crime_lalaki`, `iba_crime_babae`, `kabuuan_iba_crime`, `water_source`, `water_location`, `palikuran`, `sambahayan_status`, `rental_fee`, `electricity`, `electricity_source`, `consumption_fee`, `kasangkapan`, `materials_dingding`, `materials_bubong`, `pagsasaka`, `pagsasaka_salapi`, `pagsasaka_bagay`, `paghahayop`, `paghahayop_salapi`, `paghahayop_bagay`, `pangingisda`, `pangingisda_salapi`, `pangingisda_bagay`, `pangangahoy`, `pangangahoy_salapi`, `pangangahoy_bagay`, `pagtitinda`, `pagtitinda_salapi`, `pagtitinda_bagay`, `paggawa`, `paggawa_salapi`, `paggawa_bagay`, `pantao`, `pantao_salapi`, `pantao_bagay`, `transportasyon`, `transportasyon_salapi`, `transportasyon_bagay`, `pagmimina`, `pagmimina_salapi`, `pagmimina_bagay`, `contruction`, `contruction_salapi`, `contruction_bagay`, `pangkabuhayan`, `pangkabuhayan_salapi`, `pangkabuhayan_bagay`, `netong_salapi`, `netong_bagay`, `katayuan_pamamalagi`, `lawak_sinasaka`, `pananim`, `kagamitang_pangagrikultura`, `alagang_hayop`, `buhay_hayop`, `karne`, `gatas`, `itlog`, `iba_pa`, `lugar_pangingisda`, `lawak_fishpond`, `bilang_fishcage`, `sukat_fishcage`, `huling_isda`, `bangka`, `kagamitan_pangingisda`, `pamamahala_basura`, `kumokolekta_basura`, `kadalas_pangongolekta`, `nasalanta`, `sumalanta`, `gutom`, `buwan_gutom`, `coordinator_id`) VALUES
(1, 1, 0, 2, 1, 1, '', '', '2016-05-18', '00:00:21', '00:00:21', '', 0, '', '---', '', 0, '---', '---', '---', '---', '', '---', '', '', '---', '', '---', '---', '---', '', '---', '', '---', '', '---', '', '---', '', '', '---', '---', 0, '', '---', '---', '---', '', '---', 0, '---', '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', '---', '---', '---', 0, '---', '', 0, '', '---', '---', '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '', 0, 0, '---', 0, 0, 0, 0, '---', '---', '', '', '', '()', '()', '()', '()', '()', '', '---', 0, '', '', '---', '', '', '---', '---', '---', '', '---', '', 7),
(2, 1, 0, 2, 1, 1, '', '', '2016-05-18', '21:49:22', '00:00:21', '', 0, '', '---', '', 0, '---', '---', '---', '---', '', '---', '', '', '---', '', '---', '---', '---', '', '---', '', '---', '', '---', '', '---', '', '', '---', '---', 0, '', '---', '---', '---', '', '---', 0, '---', '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', '---', '---', '---', 0, '---', '', 0, '', '---', '---', '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '', 0, 0, '---', 0, 0, 0, 0, '---', '---', '', '', '', '()', '()', '()', '()', '()', '', '---', 0, '', '', '---', '', '', '---', '---', '---', '', '---', '', 7),
(3, 1, 0, 2, 1, 1, '', '', '2016-05-18', '21:50:31', '21:50:31', '', 0, '', '---', '', 0, '---', '---', '---', '---', '', '---', '', '', '---', '', '---', '---', '---', '', '---', '', '---', '', '---', '', '---', '', '', '---', '---', 0, '', '---', '---', '---', '', '---', 0, '---', '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', 0, 0, 0, '---', '---', '---', '---', 0, '---', '', 0, '', '---', '---', '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '---', 0, 0, '', 0, 0, '---', 0, 0, 0, 0, '---', '---', '', '', '', '()', '()', '()', '()', '()', '', '---', 0, '', '', '---', '', '', '---', '---', '---', '', '---', '', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `lalawigan`
--
ALTER TABLE `lalawigan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `purok`
--
ALTER TABLE `purok`
  ADD PRIMARY KEY (`purok_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simbahayan`
--
ALTER TABLE `simbahayan`
  ADD PRIMARY KEY (`simbahayan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lalawigan`
--
ALTER TABLE `lalawigan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `purok_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `relation`
--
ALTER TABLE `relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `simbahayan`
--
ALTER TABLE `simbahayan`
  MODIFY `simbahayan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
