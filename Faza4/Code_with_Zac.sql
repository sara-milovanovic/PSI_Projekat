--Baza 22.5.2019. sa INSERT-ima

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_with_zac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `IdRegistrovani` int(11) NOT NULL,
  `Radi_od` date NOT NULL,
  PRIMARY KEY (`IdRegistrovani`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IdRegistrovani`, `Radi_od`) VALUES
(1, '2019-05-05'),
(2, '2019-05-05'),
(3, '2019-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `IdFAQ` int(11) NOT NULL AUTO_INCREMENT,
  `Pitanje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Odgovor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdFAQ`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`IdFAQ`, `Pitanje`, `Odgovor`) VALUES
(1, 'Kako da Vas kontaktiramo za dodatna pitanja?', 'Mozete nas kontaktirati putem naseg maila: code_with_zac@gmail.com'),
(2, 'Kada ce biti dostupni novi kursevi?', 'Nas tim radi na unapredjenju sajta i dodavanju novih kurseva i pitalica'),
(3, 'Da li radi kolega?', 'Ne radi plakyy'),
(4, 'stagod', 'stagod');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

DROP TABLE IF EXISTS `komentari`;
CREATE TABLE IF NOT EXISTS `komentari` (
  `IdKomentari` int(11) NOT NULL AUTO_INCREMENT,
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DatumVreme` date DEFAULT NULL,
  `IdRegistrovani` int(11) DEFAULT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdKomentari`),
  KEY `R_14` (`IdRegistrovani`),
  KEY `R_16` (`IdKurs`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`IdKomentari`, `Tekst`, `DatumVreme`, `IdRegistrovani`, `IdKurs`) VALUES
(1, 'Top kurs!', '2019-06-06', 4, 1),
(2, 'Zlata vredan!', '2019-05-06', 7, 1),
(4, 'You are doing a great service!! Thanks!', '2019-01-01', 4, 1),
(5, 'I have bookmarked your homepage, it is great and full of infos.', '2019-02-02', 5, 1),
(6, 'Nikad bolje!', '2019-05-22', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

DROP TABLE IF EXISTS `kurs`;
CREATE TABLE IF NOT EXISTS `kurs` (
  `IdKurs` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ocena` float DEFAULT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdKurs`),
  UNIQUE KEY `Ime` (`Ime`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`IdKurs`, `Ime`, `Ocena`, `Status`) VALUES
(1, 'C', 0, 'dostupan'),
(2, 'Java', 0, 'nedostupan');

-- --------------------------------------------------------

--
-- Table structure for table `materijali_na_cekanju`
--

DROP TABLE IF EXISTS `materijali_na_cekanju`;
CREATE TABLE IF NOT EXISTS `materijali_na_cekanju` (
  `IdMaterijali_na_cekanju` int(11) NOT NULL AUTO_INCREMENT,
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdOblast` int(11) NOT NULL,
  PRIMARY KEY (`IdMaterijali_na_cekanju`),
  KEY `R_25` (`IdOblast`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oblast`
--

DROP TABLE IF EXISTS `oblast`;
CREATE TABLE IF NOT EXISTS `oblast` (
  `IdOblast` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Materijal` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdOblast`),
  KEY `R_17` (`IdKurs`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oblast`
--

INSERT INTO `oblast` (`IdOblast`, `Ime`, `Materijal`, `IdKurs`) VALUES
(1, 'Pokazivaci', '**Pokazivaci materijali**', 1),
(2, 'For loop', '/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ocena`
--

DROP TABLE IF EXISTS `ocena`;
CREATE TABLE IF NOT EXISTS `ocena` (
  `IdOcena` int(11) NOT NULL AUTO_INCREMENT,
  `Vrednost` float DEFAULT NULL,
  `IdRegistrovani` int(11) DEFAULT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdOcena`),
  KEY `R_11` (`IdRegistrovani`),
  KEY `R_13` (`IdKurs`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ocena`
--

INSERT INTO `ocena` (`IdOcena`, `Vrednost`, `IdRegistrovani`, `IdKurs`) VALUES
(1, 5, 7, 1),
(2, 2, 1, 1),
(3, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `odgovor`
--

DROP TABLE IF EXISTS `odgovor`;
CREATE TABLE IF NOT EXISTS `odgovor` (
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Redni_br` int(11) NOT NULL,
  `IdPitalica` int(11) NOT NULL,
  `Tacan` int(11) NOT NULL,
  PRIMARY KEY (`IdPitalica`,`Redni_br`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `odgovor`
--

INSERT INTO `odgovor` (`Tekst`, `Redni_br`, `IdPitalica`, `Tacan`) VALUES
('asas', 1, 5, 1),
('asas', 2, 5, 0),
('a1', 1, 6, 0),
('a2', 2, 6, 0),
('a3', 3, 6, 1),
('a4', 4, 6, 0),
('A', 1, 7, 0),
(' B', 2, 7, 1),
('C', 3, 7, 0),
('ans1', 1, 8, 1),
('ans1', 2, 8, 0),
('fillans', 1, 9, 1),
('fdfdfd', 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `odslusani`
--

DROP TABLE IF EXISTS `odslusani`;
CREATE TABLE IF NOT EXISTS `odslusani` (
  `IdRegistrovani` int(11) NOT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdRegistrovani`,`IdKurs`),
  KEY `R_8` (`IdKurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pitalica`
--

DROP TABLE IF EXISTS `pitalica`;
CREATE TABLE IF NOT EXISTS `pitalica` (
  `IdPitalica` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tekst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdOblast` int(11) NOT NULL,
  PRIMARY KEY (`IdPitalica`),
  KEY `R_18` (`IdOblast`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pitalica`
--

INSERT INTO `pitalica` (`IdPitalica`, `Status`, `Tekst`, `Tip`, `IdOblast`) VALUES
(2, 'neaktivna', 'p', 'radio', 2),
(3, 'neaktivna', 'aaffgf', 'radio', 2),
(4, 'neaktivna', 'aa', 'radio', 2),
(5, 'neaktivna', 'assas', 'radio', 2),
(6, 'neaktivna', 'pitalicacb', 'radio', 2),
(7, 'neaktivna', 'Abc', 'radio', 2),
(8, 'neaktivna', 'lista', 'list', 2),
(9, 'neaktivna', 'fill', 'Fill the box', 2),
(10, 'neaktivna', 'fdfdfdf', 'checkbox', 2);

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `IdRegistrovani` int(11) NOT NULL,
  PRIMARY KEY (`IdRegistrovani`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`IdRegistrovani`) VALUES
(7),
(8);

-- --------------------------------------------------------

--
-- Table structure for table `registrovani`
--

DROP TABLE IF EXISTS `registrovani`;
CREATE TABLE IF NOT EXISTS `registrovani` (
  `IdRegistrovani` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prezime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_mail` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ime` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdRegistrovani`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `e_mail` (`e_mail`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrovani`
--

INSERT INTO `registrovani` (`IdRegistrovani`, `Username`, `Prezime`, `e_mail`, `Password`, `Ime`) VALUES
(1, 'sara97', 'Milovanovic', 'sara@gmail.com', 'sara123', 'Sara'),
(2, 'iva97', 'Veljkovic', 'iva@gmail.com', 'iva123', 'Iva'),
(3, 'nedeljko97', 'Jokic', 'ned@gmail.com', 'ned321', 'Ned'),
(4, 'Perica', 'Peric', 'pera@gmail.com', 'pera123', 'Pera'),
(5, 'zikicica', 'Zikic', 'zika@gmail.com', '111', 'Zikica'),
(6, 'mika97', 'Mikic', 'mika@gmail.com', 'mika123', 'Mika'),
(7, 'tasha', 'Sekularac', 'tasha@gmail.com', 'tasha123', 'Tasha'),
(8, 'drazen', 'Draskovic', 'drazen@gmail.com', 'drazen123', 'Drazen'),
(9, 'Jova', '', 'jova@gmail.com', 'sifra123', '');

-- --------------------------------------------------------

--
-- Table structure for table `rezultat`
--

DROP TABLE IF EXISTS `rezultat`;
CREATE TABLE IF NOT EXISTS `rezultat` (
  `IdRezultat` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Procenat_tacnih` float DEFAULT NULL,
  `IdOblast` int(11) NOT NULL,
  `IdRegistrovani` int(11) NOT NULL,
  PRIMARY KEY (`IdRezultat`),
  KEY `R_23` (`IdOblast`),
  KEY `R_24` (`IdRegistrovani`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slusa`
--

DROP TABLE IF EXISTS `slusa`;
CREATE TABLE IF NOT EXISTS `slusa` (
  `IdRegistrovani` int(11) NOT NULL,
  `IdKurs` int(11) NOT NULL,
  PRIMARY KEY (`IdRegistrovani`,`IdKurs`),
  KEY `R_6` (`IdKurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slusa`
--

INSERT INTO `slusa` (`IdRegistrovani`, `IdKurs`) VALUES
(4, 1),
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `IdRegistrovani` int(11) NOT NULL,
  `Najbolji` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdRegistrovani`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`IdRegistrovani`, `Najbolji`) VALUES
(4, 'da'),
(5, 'ne'),
(6, 'ne'),
(9, 'ne');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `R_1` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `R_14` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_16` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materijali_na_cekanju`
--
ALTER TABLE `materijali_na_cekanju`
  ADD CONSTRAINT `R_25` FOREIGN KEY (`IdOblast`) REFERENCES `oblast` (`IdOblast`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `oblast`
--
ALTER TABLE `oblast`
  ADD CONSTRAINT `R_17` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ocena`
--
ALTER TABLE `ocena`
  ADD CONSTRAINT `R_11` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_13` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odgovor`
--
ALTER TABLE `odgovor`
  ADD CONSTRAINT `R_26` FOREIGN KEY (`IdPitalica`) REFERENCES `pitalica` (`IdPitalica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odslusani`
--
ALTER TABLE `odslusani`
  ADD CONSTRAINT `R_7` FOREIGN KEY (`IdRegistrovani`) REFERENCES `student` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_8` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pitalica`
--
ALTER TABLE `pitalica`
  ADD CONSTRAINT `R_18` FOREIGN KEY (`IdOblast`) REFERENCES `oblast` (`IdOblast`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `R_3` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rezultat`
--
ALTER TABLE `rezultat`
  ADD CONSTRAINT `R_23` FOREIGN KEY (`IdOblast`) REFERENCES `oblast` (`IdOblast`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_24` FOREIGN KEY (`IdRegistrovani`) REFERENCES `student` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slusa`
--
ALTER TABLE `slusa`
  ADD CONSTRAINT `R_5` FOREIGN KEY (`IdRegistrovani`) REFERENCES `student` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_6` FOREIGN KEY (`IdKurs`) REFERENCES `kurs` (`IdKurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `R_2` FOREIGN KEY (`IdRegistrovani`) REFERENCES `registrovani` (`IdRegistrovani`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
