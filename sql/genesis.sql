-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2013 at 06:21 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `genesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `site_id` int(4) NOT NULL,
  `magazine` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `site_id`, `magazine`, `volume`) VALUES
(1, 'Synthesis, Characterization and Evaluation of Quaternary Compounds of 4-(N-Substituted)-3-Pyridyl-5-Mercapto-S-Triazole with Secondary Amines', 1, 'Pharmagene', 'volume1'),
(2, 'Development and Validation of Derivative Spectroscopic Method For Estimation of Acebrophylline In Bulk And Its Dosage Form and In Presence of Impurity, Ambroxol HCl', 2, 'Pharmagene', 'volume1'),
(3, 'Invitro Anticancer Activity of Rubia Cordifolia Against Hep G 32 Cell Line', 3, 'Pharmagene', 'volume1'),
(4, 'RP-HPLC Method Development and Validation for Estimation of Drospirenone and Ethinyl Estradiol in Bulk and Combined Dosage Form', 4, 'Pharmagene', 'volume1'),
(5, 'Synthesis, Characterization and Biological Evaluation of Substituted Novel Pyrazolone and Pyrazole Derivatives', 5, 'Pharmagene', 'volume1'),
(6, 'Development and Validation of Zero and First Order Derivative Spectrophotometric Methods For Determination of Oxcarbazepine In Pharmaceutical Dosage Forms', 6, 'Pharmagene', 'volume1'),
(7, 'Spectrophotometric Estimation of Moclobemide Using Folin Ciocalteu’s Reagent', 7, 'Pharmagene', 'volume1'),
(8, 'Solvent Free One Pot Microwave Synthesis of Quinazolin 4-(3H)-One Derivatives with their Antibacterial and Antifungal Activity', 8, 'Pharmagene', 'volume1'),
(9, 'A Novel Stability Indicating Liquid Chromatographic Method for the Estimation of Rimonabant Hydrochloride in Tablet Dosage Form', 9, 'Pharmagene', 'volume1'),
(10, 'Preparation and Evaluation of Effervescent Bioadhesive Vaginal Tablet of Itraconazole for Vaginal Candidiasis', 10, 'Pharmagene', 'volume1'),
(11, 'Clinical manifestation of Obesity', 11, 'Pharmagene', 'volume1'),
(12, 'Asthma Therapy in Ayurveda: An Ancient Scientific Approach', 12, 'Pharmagene', 'volume1');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int(6) NOT NULL AUTO_INCREMENT,
  `article_id` int(5) NOT NULL,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `article_id`, `author`) VALUES
(1, 1, 'Anil Manikrao'),
(2, 1, 'Prafulla M Sabale'),
(3, 1, 'Prashant Prajapati'),
(4, 2, 'Bhagavati Solanki'),
(5, 2, 'Harshal Trivedi'),
(6, 2, 'Ankita Khodiyar'),
(7, 2, 'Falguni Tandel'),
(8, 2, 'Lalit Lata Jha'),
(9, 2, 'Rajesh KS'),
(10, 3, 'Parag R. Patel'),
(11, 3, 'Nikita N. Patel'),
(12, 3, 'Maulik P. Suthar'),
(13, 3, 'Rajesh KS'),
(14, 3, 'L. D. Patel'),
(15, 4, 'R. C. Patel'),
(16, 4, 'D. K. Rathod'),
(17, 4, 'Rajesh KS'),
(18, 4, 'V.S.Patel'),
(19, 5, 'Prafulla M Sabale'),
(20, 5, 'Ronak S Patel'),
(21, 5, 'Chirag R Prajapati'),
(22, 6, 'Nikita N. Patel'),
(23, 6, 'Rajesh KS'),
(24, 6, 'Parag R. Patel'),
(25, 6, 'Jyotesh R. Jain'),
(26, 6, 'Shailesh A.Shah'),
(27, 6, 'Charmy S.Kothari'),
(28, 7, 'Shital V. Patel'),
(29, 7, 'M. B. Patel'),
(30, 7, 'Rajesh KS'),
(31, 7, ' T. Y. Pasha'),
(32, 8, 'Akhil A. Nagar'),
(33, 8, 'Ashish Patel'),
(34, 8, 'Rajesh KS'),
(35, 8, 'Kishore R. Danao'),
(36, 8, 'L.G. Rathi'),
(37, 9, 'Dhara Rathod'),
(38, 9, 'Rikin Patel'),
(39, 9, 'Bharat Chaudhari'),
(40, 9, 'Rajesh KS'),
(41, 9, 'Vipul Patel'),
(42, 10, 'Palak Patel'),
(43, 10, 'Vipul Barot'),
(44, 10, 'Bijal Prajapati'),
(45, 10, 'Rajesh KS'),
(46, 10, 'Lalit Lata Jha'),
(47, 11, 'Javid Mansuri'),
(48, 11, 'Anand Pithadia'),
(49, 11, 'Archana Navale'),
(50, 11, 'Rajesh KS'),
(51, 11, 'Archana Paranjape'),
(52, 12, 'Madhavi Patel'),
(53, 12, 'Viral Desai'),
(54, 12, 'Vishal Patel');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `keyword_id` int(6) NOT NULL AUTO_INCREMENT,
  `article_id` int(5) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`keyword_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`keyword_id`, `article_id`, `keyword`) VALUES
(1, 1, 'Oxadiazole'),
(2, 1, 'Quaternary Compound'),
(3, 1, 'Morpholine'),
(4, 1, 'Pyrrolidine'),
(5, 2, 'Acebrophylline'),
(6, 2, 'Anti asthmatic'),
(7, 2, 'Methanol'),
(8, 2, 'UV spectroscopy'),
(9, 3, 'Rubia cordifolia'),
(10, 3, 'Cell line'),
(11, 3, 'Anticancer'),
(12, 3, 'Hep G32'),
(13, 4, 'Drospirenone'),
(14, 4, 'Ethinylestradiol'),
(15, 4, 'RP-HPLC'),
(16, 5, 'Pyrazolones'),
(17, 5, 'Pyrazoles'),
(18, 5, 'Anti-inflammatory'),
(19, 5, 'Analgesics'),
(20, 6, 'Oxcarbazepine'),
(21, 8, 'Microwave assisted synthesis'),
(22, 8, 'one pot synthesis'),
(23, 8, 'antimicrobial activity'),
(24, 9, 'Rimonabant'),
(25, 9, 'RP-HPLC'),
(26, 9, 'Stability-indicating assay'),
(27, 9, 'Forced degradation'),
(28, 9, 'Validation'),
(29, 9, 'ICH guidelines'),
(30, 10, 'Vaginal drug delivery'),
(31, 10, 'Bioadhesion'),
(32, 10, 'Candidiasis'),
(33, 11, 'Hypertension'),
(34, 11, 'type 2 diabete'),
(35, 11, 'cancer'),
(36, 12, ' Bronchial Asthma'),
(37, 12, 'CAM'),
(38, 12, 'Bronchial Hyper responsiveness'),
(39, 12, 'Ethnopharmacology');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
