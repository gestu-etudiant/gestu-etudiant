-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Septembre 2019 à 17:26
-- Version du serveur :  5.6.17-log
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestu`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messages` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `dates` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=176 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `messages`, `pseudo`, `dates`) VALUES
(57, 'Bonjour tout le monde', '@liw', ''),
(58, 'Bonjour @liw, comment ça va?', 'DofJob', ''),
(59, 'Ouais je vais bien au fait j''aimeari avoir de l''aide un peu', '@liw', ''),
(60, 'j''ai', 'ds', ''),
(61, 'j''ai', 'ds', ''),
(62, 'J''ai une suggestion: pourquoi pas améliorer la plateforme jusqu''à ce qu''elle devienne big big', 'Meumeuh', ''),
(63, 'Lamarana Jallow, cheri Fatimatou Jallow, doomou Alpha Jallow ak Aminata Barry', 'Lamarana', ''),
(64, 'zapcezapoiuezaoeienddnezp coezpezpezo czreezêz edsdsfmljdsfuremezumezuqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqjjjjjjjjjjjjjjjjjjjjjjjjjjjzerzio ez eza ucâ cz^,dzeid$;ezpoie,zeppd;re$zezreûoef,$zepo;dze;udr^pze:s$ezut$ruzd,$pr;fure$ofzre$d;rpoeeeeeeeeeeeeeeeeee', 'e', ''),
(65, 'dis moi pti pot de beurre quand te dépetitpodebeurrereris seras tu? Je me dépetitpode beurrererisserai quand tous les petits pots de beurres se dépetitpodebeurrerrisseront', 'dofbibindatina', ''),
(66, 'Blablabla', 'Blabla', ''),
(67, 'Aliou', 'Red', ''),
(68, 'zero', 'Aliou', ''),
(69, 'zero', 'Aliou', ''),
(70, 'qsmks', 'GHDJ', ''),
(71, 'qsmks', 'GHDJ', ''),
(72, 'qsmks', 'GHDJ', ''),
(73, 'qsmks', 'GHDJ', ''),
(74, 'qsmks', 'GHDJ', ''),
(75, 'qsmks', 'GHDJ', ''),
(76, 'qsmks', 'GHDJ', ''),
(77, 'qsmks', 'GHDJ', ''),
(78, 'qsmks', 'GHDJ', ''),
(79, 'qsmks', 'GHDJ', ''),
(80, 'qsmks', 'GHDJ', ''),
(81, 'qsmks', 'GHDJ', ''),
(82, 'qsmks', 'GHDJ', ''),
(83, 'Bonjour\r\n', 'Questions', ''),
(84, 'Bonjour\r\n', 'Questions', ''),
(85, 'Bonjour\r\n', 'Questions', ''),
(86, 'Bonjour\r\n', 'Questions', ''),
(87, 'Bonjour\r\n', 'Questions', ''),
(88, 'Bonjour\r\n', 'Questions', ''),
(89, 'Bonjour\r\n', 'Questions', ''),
(90, 'Bonjour\r\n', 'Questions', ''),
(91, 'Bonjour\r\n', 'Questions', ''),
(92, 'Bonjour à vous tous\r\n', '@liou', ''),
(93, 'Je suis nouvelle qui pour me souhaiter la bienvenue\r\n', 'Alima', ''),
(94, 'Blabla', 'dof', ''),
(95, 'Blabla', 'dof', ''),
(96, 'Blabla', 'dof', ''),
(97, 'Blabla', 'dof', ''),
(98, 'Blabla', 'dof', ''),
(99, 'Blabla', 'dof', ''),
(100, 'Blabla', 'dof', ''),
(101, 'Lorsque les pères s''habituent à laisser faire leurs enfants; lorsque les fils ne tiennent plus compte de leur parole; lorsque les maitres tremblent devant les élèves et préfèrent les flatter; lorsque les jeunes ne reconnaissent plus au dessus d''eux l''auto', '@liw', ''),
(102, 'Lorsque les pères s''habituent à laisser faire leurs enfants; lorsque les fils ne tiennent plus compte de leur parole; lorsque les maitres tremblent devant les élèves et préfèrent les flatter; lorsque les jeunes ne reconnaissent plus au dessus d''eux l''auto', '@liw', ''),
(103, 'Lorsque les pères s''habituent à laisser faire leurs enfants; lorsque les fils ne tiennent plus compte de leur parole; lorsque les maitres tremblent devant les élèves et préfèrent les flatter; lorsque les jeunes ne reconnaissent plus au dessus d''eux l''auto', '@liw', ''),
(104, 'Blabla que des conneries', '@moussa', ''),
(105, 'Blabla que des conneries', '@moussa', ''),
(106, 'Blabla que des conneries', '@moussa', ''),
(107, 'moussa', '@liw', ''),
(108, 'moussa', '@liw', ''),
(109, 'Blabla', 'Mouss@', ''),
(110, 'Blabla', 'Mouss@', ''),
(111, 'dqsdnsk', 'sljkdsqsnk', ''),
(112, 'dqsdnsk', 'sljkdsqsnk', ''),
(113, 'dqsdnsk', 'sljkdsqsnk', ''),
(114, 'dqsdnsk', 'sljkdsqsnk', ''),
(115, 'dqsdnsk', 'sljkdsqsnk', ''),
(116, 'sqnk', 'dslkj', ''),
(117, 'sqnk', 'dslkj', ''),
(118, 'new', 'der', ''),
(119, 'new', 'der', ''),
(120, 'sqd,', 'sqlkjm', ''),
(121, 'bro', 'dslmqso', ''),
(122, 'bro', 'dslmqso', ''),
(123, 'bro', 'dslmqso', ''),
(124, 'bro', 'dslmqso', 'Le:16-09-2019 à 15:58'),
(125, 'bro', 'dslmqso', 'Le:16-09-2019 à 15:58'),
(126, 'dsq,lk', 'zaoiuds', 'Le:16-09-2019 à 15:59'),
(127, 'dsq,lk', 'zaoiuds', 'Le:16-09-2019 à 16:06'),
(128, 'dsq,lk', 'zaoiuds', 'Le:16-09-2019 à 16:07'),
(129, 'àssààà', 'sqhlk', 'Le:16-09-2019 à 16:08'),
(130, 'àssààà', 'sqhlk', 'Le:16-09-2019 à 16:08'),
(131, 'àssààà', 'sqhlk', 'Le:16-09-2019 à 16:10'),
(132, 'je suis ', 'Blabla', 'Le:16-09-2019 à 16:10'),
(133, 'je suis ', 'BG', 'Le:16-09-2019 à 16:10'),
(134, '', 'sdq', 'Le:16-09-2019 à 16:11'),
(135, '', 'sdq', 'Le:16-09-2019 à 16:11'),
(136, '', 'sdq', 'Le:16-09-2019 à 16:11'),
(137, '', 'sdq', 'Le:16-09-2019 à 16:12'),
(138, '', 'je suis ? vous', 'Le:16-09-2019 à 16:13'),
(139, '', 'je suis ? vous', 'Le:16-09-2019 à 16:13'),
(140, '', 'je suis ? vous', 'Le:16-09-2019 a 16:14'),
(141, '', 'je suis ? vous', 'Le:16-09-2019 a 16:15'),
(142, '', 'je suis ? vous', 'Le:16-09-2019 a 16:15'),
(143, '', 'je suis ? vous', 'Le:16-09-2019 a 16:16'),
(144, '', 'je suis ? vous', 'Le:16-09-2019 a 16:17'),
(145, '', 'je suis ? vous', 'Le:16-09-2019 a 16:17'),
(146, '', 'je suis ? vous', 'Le:16-09-2019 a 16:18'),
(147, '', 'je suis ? vous', 'Le:16-09-2019 a 16:19'),
(148, 'skdlmkqsjdmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 'sdd', 'Le:16-09-2019 a 17:06'),
(149, 'lkjsslxq XLKJqklsQKJ SLDJKqqsk dQKJLSD LKSQDklj', 'ds', 'Le:16-09-2019 a 17:06'),
(150, 'wlksqj', 'dq', 'Le:16-09-2019 a 15:11'),
(151, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:29'),
(152, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:49'),
(153, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:50'),
(154, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:50'),
(155, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:51'),
(156, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:51'),
(157, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:52'),
(158, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:53'),
(159, 'aoyppznyeon xziexy exdskjgsx dziusqu od dsjkhv dqblzduezl ziuiezuieze biezueg  uigeziuez z iugigezu ezq ueug uiezez zx oiezuzeegi zeuieioez xzueioef  ouezgfeqio ezdouhd ezuigez oezoigeoieudd ezqgiueo e', 'dofbibindatina', 'Le:16-09-2019 a 15:54'),
(160, 'Blabla', 'AlCis', 'Le:16-09-2019 a 15:54'),
(161, 'Blabla', 'AlCis', 'Le:16-09-2019 a 15:55'),
(162, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:38'),
(163, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:38'),
(164, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:40'),
(165, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:41'),
(166, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:43'),
(167, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:43'),
(168, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:44'),
(169, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:49'),
(170, 'Ah bon?', 'man la rek', 'Le:16-09-2019 a 18:50'),
(171, 'Blabla', 'dof', 'Le:16-09-2019 a 21:25'),
(172, 'Bonjour;\r\nje suis nouveau.\r\nQui pour me souhaiter la bienvenue?', 'Alima', 'Le:16-09-2019 a 22:01'),
(173, 'bonjour<br><b>Comment vous allez?</b>', 'Aliou', 'Le:16-09-2019 a 22:02'),
(174, 'Manla man, dou kenen dou lenen dou fenen', 'Bagnbagnbeug', 'Le:17-09-2019 a 17:44'),
(175, 'j''ai mal à la tête', 'Man', 'Le:20-09-2019 a 10:53');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `pseudo` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `tel` double NOT NULL,
  `passe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`pseudo`, `adresse`, `tel`, `passe`) VALUES
('dof', 'yerd@gmail.com', 789086543, 'zero'),
('Alcis', 'hablar@univ-thies.sn', 789087654, 'sqlkjhq s '),
('Alcis', 'hablar@univ-thies.sn', 789087654, 'sqlkjhq s '),
('qsddmljk', 'ZAOIoi@sfdsl.db', 3280, 'dfg'),
('PI AIAPEZ ', 'sqlkshq@ds.nb', 932732, 'azer'),
('Lefou', 'lefou@dof.xam', 320972310, 'zerozero'),
('rez', 'sjl@outlook.com', 97068, 'dofdoflou'),
('rez', 'sjl@outlook.com', 97068, 'dofdoflou'),
('rez', 'sjl@outlook.com', 97068, 'dofdoflou'),
('Alciss', 'blablabla@gmail.com', 97209698, 'xamxamdoul'),
('@liw', 'Der@gmail.com', 789065432, 'xamxamrek'),
('@liw', 'Der@gmail.com', 789065432, 'xamxamrek'),
('babson', 'babson@outlook.com', 765436787, 'blablabla'),
('babson', 'babson@outlook.com', 765436787, 'blablabla'),
('babson', 'babson@outlook.com', 765436787, 'blablabla'),
('babson', 'babson@outlook.com', 765436787, 'blablabla'),
('babson', 'babson@outlook.com', 765436787, 'blablabla'),
('babson', 'babson@outlook.com', 765436787, 'blablabla'),
('Allex', 'alex@gmail.com', 21098732, 'alexalex'),
('Alioune', 'cisse@gmail.com', 765461564, 'dofdouwer');

-- --------------------------------------------------------

--
-- Structure de la table `gestu`
--

CREATE TABLE IF NOT EXISTS `gestu` (
  `nombre` int(11) NOT NULL AUTO_INCREMENT,
  `SM` varchar(102) NOT NULL,
  `region` varchar(100) NOT NULL,
  `jobPa` varchar(200) NOT NULL,
  `jobMa` varchar(200) NOT NULL,
  `logement` varchar(100) NOT NULL,
  `moyenne` varchar(200) NOT NULL,
  `provenance` varchar(100) NOT NULL,
  `revenu` bigint(20) NOT NULL,
  `ndoss` bigint(20) NOT NULL,
  `filiere` varchar(200) NOT NULL,
  `satloge` varchar(200) NOT NULL,
  `satens` varchar(200) NOT NULL,
  UNIQUE KEY `cle` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Contenu de la table `gestu`
--

INSERT INTO `gestu` (`nombre`, `SM`, `region`, `jobPa`, `jobMa`, `logement`, `moyenne`, `provenance`, `revenu`, `ndoss`, `filiere`, `satloge`, `satens`) VALUES
(66, 'Marié', 'Kolda', 'est dans le secteur primaire', 'travaille pas(chômage,retraitée ou morte)', 'Campus social des amicales', 'Entre 10,00 et 11,99', 'Bourses', 120983, 9123097132, 'Sciences Economiques et Gestion(SEG)', 'Insatisfait', 'Bonne'),
(67, 'Marié', 'Sedhiou', 'est dans le secteur primaire', 'est dans le secteur quaternaire', 'Location', 'Entre 10,00 et 11,99', 'Bourses', 21092, 12308321, 'Management des Activités Touristiques et Culturelles (MATC)', 'Satisfait', 'Normale'),
(68, 'Marié', 'Saint-Louis', 'est dans le secteur primaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Entre 7,00 et 9,99', 'Parents', 109821, 912809821, 'Sciences Economiques et Gestion(SEG)', 'Satisfait', 'Bonne'),
(69, 'Célibataire', 'Tambacounda', 'est dans le secteur primaire', 'est dans le secteur secondaire', 'Location', 'Entre 10,00 et 11,99', 'Bourses', 218129, 23198, 'Management du Tourisme et Hotelerie(MTH)', 'Insatisfait', 'Mauvaise'),
(70, 'Célibataire', 'Ziguinchor', 'est dans le secteur primaire', 'est dans le secteur quaternaire', 'Campus social des amicales', 'Entre 12,00 et 13,99', 'Bourses', 2109812, 219032, 'Sciences Economiques et Gestion(SEG)', 'Normal', 'Bonne'),
(71, 'Marié', 'Ziguinchor', 'est dans le secteur secondaire', 'est dans le secteur tertiaire', 'Location', 'Entre 12,00 et 13,99', 'Parents', 30912, 32190923, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Bonne'),
(72, 'Célibataire', 'Ziguinchor', 'est dans le secteur tertiaire', 'est dans le secteur tertiaire', 'Hotel du rail', 'Entre 7,00 et 9,99', 'Bourses', 210923, 219832221, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Mauvaise'),
(73, 'Marié', 'Ziguinchor', 'est dans le secteur quaternaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Entre 10,00 et 11,99', 'Bourses', 90000, 210921973, 'Management Informatisé des Organisations(MIO)', 'Normal', 'Mauvaise'),
(74, 'Divorcé', 'Ziguinchor', 'travaille pas(chômage,retraité ou mort)', 'est dans le secteur secondaire', 'Campus social des amicales', 'Moins de 7,00', 'Parents', 40000, 120983209, 'Langues Etrangères Appliquées (LEA)', 'Tres Satisfait', 'Bonne'),
(59, 'Marié', 'Fatick', 'est dans le secteur primaire', 'est dans le secteur quaternaire', 'Campus social des amicales', 'Entre 14,00 et 15,99', 'Bourses', 90300, 3210982138, 'Sciences Economiques et Gestion(SEG)', 'Satisfait', 'Normale'),
(60, 'Célibataire', 'Kaolack', 'est dans le secteur primaire', 'est dans le secteur tertiaire', 'Hotel du rail', 'Entre 10,00 et 11,99', 'Bourses', 32109, 9812332, 'Management des Activités Touristiques et Culturelles (MATC)', 'Satisfait', 'Normale'),
(61, 'Célibataire', 'Kaolack', 'est dans le secteur primaire', 'est dans le secteur tertiaire', 'Site VCN', 'Entre 10,00 et 11,99', 'Parents', 90712, 106932098, 'Sciences Economiques et Gestion(SEG)', 'Normal', 'Normale'),
(62, 'Célibataire', 'Kedougou', 'est dans le secteur primaire', 'est dans le secteur secondaire', 'Campus social des amicales', 'Entre 12,00 et 13,99', 'Parents', 12098, 21398, 'Sciences Economiques et Gestion(SEG)', 'Normal', 'Normale'),
(63, 'Célibataire', 'Kaffrine', 'est dans le secteur primaire', 'est dans le secteur secondaire', 'Hotel du rail', 'Entre 12,00 et 13,99', 'Parents', 12000, 120990, 'Management Informatisé des Organisations(MIO)', 'Insatisfait', 'Normale'),
(64, 'Célibataire', 'Louga', 'est dans le secteur primaire', 'est dans le secteur primaire', 'Chez parent ou tuteur', 'Entre 10,00 et 11,99', 'Parents', 12908, 2198218, 'Management Informatisé des Organisations(MIO)', 'Tres Satisfait', 'Normale'),
(65, 'Célibataire', 'Matam', 'est dans le secteur primaire', 'est dans le secteur primaire', 'Location', 'Entre 12,00 et 13,99', 'Bourses', 219709, 902119828021, 'Management du Tourisme et Hotelerie(MTH)', 'Pas du tout satisfait', 'Tres Bonne'),
(56, 'Célibataire', 'Dakar', 'travaille pas(chômage,retraité ou mort)', 'est dans le secteur tertiaire', 'Location', 'Entre 14,00 et 15,99', 'Bourses', 45000, 329087320, 'Management Informatisé des Organisations(MIO)', 'Satisfait', 'Mauvaise'),
(57, 'Marié', 'Thies', 'est dans le secteur primaire', 'est dans le secteur secondaire', 'Chez parent ou tuteur', 'Entre 10,00 et 11,99', 'Bourses', 98700, 39093294, 'Management Informatisé des Organisations(MIO)', 'Satisfait', 'Tres Bonne'),
(58, 'Marié', 'Diourbel', 'est dans le secteur primaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Entre 14,00 et 15,99', 'Bourses', 2329012, 98132096321, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Mauvaise'),
(55, 'Marié', 'Dakar', 'est dans le secteur primaire', 'est dans le secteur secondaire', 'Hotel du rail', 'Entre 14,00 et 15,99', 'Bourses', 45000, 3219087, 'Management des Activités Touristiques et Culturelles (MATC)', 'Tres Satisfait', 'Tres Bonne'),
(54, 'Marié', 'Diourbel', 'travaille pas(chômage,retraité ou mort)', 'travaille pas(chômage,retraitée ou morte)', 'Campus social des amicales', 'Entre 12,00 et 13,99', 'Bourses', 979210, 320707340, 'Management des Activités Touristiques et Culturelles (MATC)', 'Satisfait', 'Tres Bonne'),
(30, 'Célibataire', 'Dakar', 'est dans le secteur secondaire', 'travaille pas(chômage,retraitée ou morte)', 'Site VCN', 'Entre 12,00 et 13,99', 'Bourses', 40000, 17020101254, 'Management Informatisé des Organisations(MIO)', 'Normal', 'Normale'),
(31, 'Célibataire', 'Kaolack', 'est dans le secteur secondaire', 'est dans le secteur secondaire', 'Campus social des amicales', 'Entre 12,00 et 13,99', 'Autres', 40000, 1258, 'Management du Tourisme et Hotelerie(MTH)', 'Insatisfait', 'Mauvaise'),
(32, 'Marié', 'Dakar', 'est dans le secteur tertiaire', 'est dans le secteur secondaire', 'Hotel du rail', 'Entre 14,00 et 15,99', 'Parents', 10000, 21386365, 'Sciences Economiques et Gestion(SEG)', 'Normal', 'Mauvaise'),
(33, 'Marié', '--Sélectionner--', 'est dans le secteur quaternaire', 'travaille pas(chômage,retraitée ou morte)', 'Chez parent ou tuteur', 'Entre 10,00 et 11,99', 'Parents', 12000, 563310398, 'Management des Activités Touristiques et Culturelles (MATC)', 'Tres Satisfait', 'Tres Bonne'),
(34, 'Célibataire', 'Kaolack', 'est dans le secteur primaire', 'est dans le secteur secondaire', 'Chez parent ou tuteur', 'Entre 10,00 et 11,99', 'Bourses', 45000, 3138190, 'Langues Etrangères Appliquées (LEA)', 'Normal', 'Tres Bonne'),
(35, 'Célibataire', 'Sedhiou', 'est dans le secteur primaire', 'est dans le secteur primaire', 'Site VCN', 'Entre 12,00 et 13,99', 'Bourses', 40000, 2510351, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Mauvaise'),
(36, 'Marié', 'Dakar', 'est dans le secteur tertiaire', 'est dans le secteur tertiaire', 'Chez parent ou tuteur', 'Entre 12,00 et 13,99', 'Bourses', 5000, 213198108980, 'Management des Activités Touristiques et Culturelles (MATC)', 'Pas du tout satisfait', 'Mauvaise'),
(37, 'Célibataire', 'Dakar', 'est dans le secteur secondaire', 'est dans le secteur secondaire', 'Hotel du rail', 'Supérieur à 16,00', 'Bourses', 90000, 93281269239182, 'Management du Tourisme et Hotelerie(MTH)', 'Normal', 'Normale'),
(38, 'Marié', 'Dakar', 'est dans le secteur quaternaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Entre 14,00 et 15,99', 'Bourses', 96186, 123456789, 'Management Informatisé des Organisations(MIO)', 'Normal', 'Normale'),
(39, 'Marié', 'Dakar', 'est dans le secteur quaternaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Entre 14,00 et 15,99', 'Bourses', 96186, 123456789, 'Management Informatisé des Organisations(MIO)', 'Normal', 'Normale'),
(40, 'Marié', 'Diourbel', 'est dans le secteur tertiaire', 'est dans le secteur tertiaire', 'Chez parent ou tuteur', 'Supérieur à 16,00', 'Bourses', 67000, 123456789, 'Management Informatisé des Organisations(MIO)', 'Normal', 'Bonne'),
(41, 'Veuf', 'Tambacounda', 'est dans le secteur quaternaire', 'est dans le secteur quaternaire', 'Location', 'Entre 12,00 et 13,99', 'Parents', 45000, 932086023, 'Management du Tourisme et Hotelerie(MTH)', 'Normal', 'Normale'),
(42, 'Marié', 'Diourbel', 'est dans le secteur secondaire', 'est dans le secteur secondaire', 'Campus social des amicales', 'Entre 14,00 et 15,99', 'Bourses', 97932, 123456, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Bonne'),
(43, 'Célibataire', 'Fatick', 'est dans le secteur tertiaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Supérieur à 16,00', 'Bourses', 9021386, 9739863223, 'Sciences Economiques et Gestion(SEG)', 'Normal', 'Bonne'),
(44, 'Célibataire', 'Kaolack', 'est dans le secteur secondaire', 'est dans le secteur secondaire', 'Hotel du rail', 'Entre 12,00 et 13,99', 'Bourses', 9721021, 9875952, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Normale'),
(45, 'Marié', 'Fatick', 'est dans le secteur secondaire', 'est dans le secteur secondaire', 'Location', 'Entre 10,00 et 11,99', 'Bourses', 56500, 898963208, 'Management des Activités Touristiques et Culturelles (MATC)', 'Insatisfait', 'Tres Bonne'),
(46, 'Veuf', 'Kaffrine', 'est dans le secteur primaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Moins de 7,00', 'Bourses', 76000, 20937, 'Management du Tourisme et Hotelerie(MTH)', 'Normal', 'Tres Mauvaise'),
(47, 'Célibataire', 'Dakar', 'est dans le secteur quaternaire', 'est dans le secteur secondaire', 'Campus social des amicales', 'Entre 12,00 et 13,99', 'Bourses', 8980, 89302, 'Sciences Economiques et Gestion(SEG)', 'Tres Satisfait', 'Bonne'),
(48, 'Marié', 'Diourbel', 'est dans le secteur quaternaire', 'est dans le secteur tertiaire', 'Campus social des amicales', 'Entre 14,00 et 15,99', 'Parents', 14500, 985050, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Mauvaise'),
(49, 'Marié', 'Matam', 'est dans le secteur tertiaire', 'est dans le secteur tertiaire', 'Site VCN', 'Supérieur à 16,00', 'Autres', 209824, 979723096, 'Management des Activités Touristiques et Culturelles (MATC)', 'Tres Satisfait', 'Normale'),
(50, 'Marié', 'Kedougou', 'est dans le secteur quaternaire', 'est dans le secteur quaternaire', 'Campus social des amicales', 'Entre 14,00 et 15,99', 'Bourses', 647890, 67087497, 'Management des Activités Touristiques et Culturelles (MATC)', 'Tres Satisfait', 'Bonne'),
(51, 'Célibataire', 'Diourbel', 'est dans le secteur quaternaire', 'est dans le secteur secondaire', 'Location', 'Entre 14,00 et 15,99', 'Parents', 34000, 9866089, 'Management des Activités Touristiques et Culturelles (MATC)', 'Satisfait', 'Tres Mauvaise'),
(52, 'Marié', 'Diourbel', 'est dans le secteur tertiaire', 'est dans le secteur quaternaire', 'Site VCN', 'Entre 14,00 et 15,99', 'Bourses', 398970, 386023893298, 'Management des Activités Touristiques et Culturelles (MATC)', 'Normal', 'Mauvaise'),
(53, 'Célibataire', 'Fatick', 'est dans le secteur quaternaire', 'est dans le secteur tertiaire', 'Site VCN', 'Entre 14,00 et 15,99', 'Parents', 50000, 8903269893, 'Sciences Economiques et Gestion(SEG)', 'Tres Satisfait', 'Tres Bonne');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
