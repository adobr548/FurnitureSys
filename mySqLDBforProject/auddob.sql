-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 01:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auddob`
--

-- --------------------------------------------------------

--
-- Table structure for table `aptarnauja`
--

CREATE TABLE `aptarnauja` (
  `fk_Sandelysid_Sandelys` int(11) NOT NULL,
  `fk_Darbuotojasid_Darbuotojas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aptarnauja`
--

INSERT INTO `aptarnauja` (`fk_Sandelysid_Sandelys`, `fk_Darbuotojasid_Darbuotojas`) VALUES
(310795595, 1481785),
(310795595, 2343877),
(310795595, 106941129),
(310795595, 124876560),
(310795595, 503837996),
(310795595, 550603877),
(310795595, 587746336),
(310795595, 750900231),
(310795595, 961348545),
(310795595, 969344969),
(310795595, 990490356),
(581979589, 1481785),
(581979589, 2998326),
(581979589, 155738466),
(581979589, 200291610),
(581979589, 452213108),
(581979589, 541138039),
(581979589, 583315992),
(581979589, 704904655),
(581979589, 871961019),
(581979589, 877134773),
(581979589, 937021580),
(581979589, 950720290),
(876171476, 2343877),
(876171476, 260560118),
(876171476, 299379722),
(876171476, 518868944),
(876171476, 575035818),
(876171476, 593985424),
(876171476, 774415656),
(876171476, 776346086),
(876171476, 871961019);

-- --------------------------------------------------------

--
-- Table structure for table `baldai`
--

CREATE TABLE `baldai` (
  `pavadinimas` varchar(20) NOT NULL,
  `matavimo_vienetas` varchar(20) NOT NULL,
  `prekiu_kiekis` int(20) NOT NULL,
  `prekes_kaina` decimal(13,2) NOT NULL,
  `mokestis_PVM` decimal(13,2) NOT NULL,
  `antkainis` decimal(13,2) NOT NULL,
  `id_Baldas` int(11) NOT NULL,
  `fk_Pardavejasid_Pardavejas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baldai`
--

INSERT INTO `baldai` (`pavadinimas`, `matavimo_vienetas`, `prekiu_kiekis`, `prekes_kaina`, `mokestis_PVM`, `antkainis`, `id_Baldas`, `fk_Pardavejasid_Pardavejas`) VALUES
('Lentyna', 'vienetai', 3000, '117.86', '0.21', '0.10', 165449647, 512210600),
('Stalas', 'vienetai', 1000, '882.83', '0.21', '0.10', 189113592, 31767342),
('Fotelis', 'vienetai', 500, '213.98', '0.21', '0.10', 261055127, 742488957),
('Lova', 'vienetai', 3500, '324.00', '0.21', '0.10', 571417765, 742488957),
('Sekcija', 'vienetai', 5000, '615.47', '0.21', '0.10', 603264054, 573916914),
('Spinta', 'vienetai', 500, '625.92', '0.21', '0.10', 637184237, 573916914),
('Spintele', 'vienetai', 7000, '229.68', '0.21', '0.10', 637762746, 212968468),
('Kede', 'vienetai', 4000, '69.00', '0.21', '0.10', 685591475, 31767342),
('Sofa', 'vienetai', 3000, '289.45', '0.21', '0.10', 696239337, 908799153),
('Komoda', 'vienetai', 600, '571.16', '0.21', '0.10', 815598232, 742488957),
('lova', '', 0, '0.00', '0.00', '0.00', 815598233, 52706896);

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `vardas` varchar(20) NOT NULL,
  `pavarde` varchar(20) NOT NULL,
  `tabelio_nr` int(20) NOT NULL,
  `id_Darbuotojas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `darbuotojai`
--

INSERT INTO `darbuotojai` (`vardas`, `pavarde`, `tabelio_nr`, `id_Darbuotojas`) VALUES
('Arthur', 'Carr', 9006, 1481785),
('Kathy', 'Fernandez', 2958, 2245703),
('Judith', 'Fuller', 811, 2343877),
('Doris', 'Austin', 7924, 2747411),
('Mary', 'White', 8972, 2998326),
('Ronald', 'Riley', 7256, 3144878),
('Patrick', 'Garza', 6665, 3729038),
('Keith', 'Diaz', 4578, 3934933),
('Lillian', 'Meyer', 5960, 4156108),
('Richard', 'Fox', 3978, 5191768),
('Philip', 'Powell', 4960, 5323434),
('Tina', 'Shaw', 5049, 5339162),
('Scott', 'Gonzales', 8581, 5358860),
('Stephen', 'Andrews', 1951, 5824374),
('Michelle', 'Ramirez', 3912, 6818999),
('Alice', 'Carroll', 1363, 7303513),
('Frank', 'Burton', 7520, 8297163),
('Frances', 'Cook', 3248, 8754652),
('John', 'Welch', 3726, 9436607),
('Michelle', 'Dixon', 8401, 106941129),
('Carol', 'Bradley', 3637, 124876560),
('Paula', 'Morrison', 1333, 155738466),
('Michelle', 'Roberts', 3592, 200291610),
('Eric', 'Reyes', 850, 260560118),
('Paula', 'Ramos', 6061, 299379722),
('Bonnie', 'Meyer', 7384, 311314417),
('Julie', 'Stone', 7510, 312273421),
('Beverly', 'Morgan', 9177, 441276622),
('Ernest', 'Diaz', 4651, 446680669),
('Catherine', 'Perez', 3469, 452213108),
('Wanda', 'Hamilton', 1176, 503837996),
('Stephanie', 'Brooks', 3491, 518868944),
('Judith', 'Shaw', 9092, 541138039),
('Kimberly', 'Price', 4411, 550603877),
('Nicholas', 'King', 418, 575035818),
('Michelle', 'Morales', 689, 583315992),
('Pamela', 'Schmidt', 9637, 587746336),
('Nicole', 'Turner', 919, 593985424),
('Robin', 'Wilson', 9539, 704904655),
('Terry', 'Franklin', 5820, 750900231),
('Nicole', 'Harvey', 8760, 774415656),
('Michael', 'Montgomery', 9167, 776346086),
('Jane', 'Dean', 1332, 871961019),
('Rose', 'Garza', 74, 877134773),
('Andrea', 'Perkins', 7036, 937021580),
('Adam', 'Wallace', 2197, 950720290),
('Debra', 'Duncan', 8322, 961348545),
('Larry', 'Medina', 7978, 969344969),
('Norma', 'Patterson', 180, 990490356),
('Donna', 'Gilbert', 8904, 1315317508),
('Henry', 'James', 8415, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `itrauktas`
--

CREATE TABLE `itrauktas` (
  `fk_Sutartisid_Sutartis` int(11) NOT NULL,
  `fk_Baldasid_Baldas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itrauktas`
--

INSERT INTO `itrauktas` (`fk_Sutartisid_Sutartis`, `fk_Baldasid_Baldas`) VALUES
(571533490, 165449647),
(571533490, 189113592),
(571533490, 261055127),
(571533490, 571417765),
(571533490, 603264054),
(571533490, 637184237),
(571533490, 637762746),
(571533490, 685591475),
(571533490, 696239337),
(571533490, 815598232),
(661079865, 165449647),
(661079865, 189113592),
(661079865, 261055127),
(661079865, 571417765),
(661079865, 603264054),
(661079865, 637184237),
(661079865, 637762746),
(661079865, 685591475),
(661079865, 696239337),
(661079865, 815598232),
(819542147, 165449647),
(997164126, 165449647),
(997164126, 189113592),
(997164126, 261055127),
(997164126, 571417765),
(997164126, 603264054),
(997164126, 637184237),
(997164126, 637762746),
(997164126, 685591475),
(997164126, 696239337),
(997164126, 815598232);

-- --------------------------------------------------------

--
-- Table structure for table `mokejimai`
--

CREATE TABLE `mokejimai` (
  `data` date NOT NULL,
  `mokejimo_suma` decimal(13,2) NOT NULL,
  `mokejimo_budas` int(11) NOT NULL,
  `id_Mokejimas` int(11) NOT NULL,
  `fk_Pirkejasid_Pirkejas` int(11) NOT NULL,
  `fk_Saskaitaid_Saskaita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mokejimai`
--

INSERT INTO `mokejimai` (`data`, `mokejimo_suma`, `mokejimo_budas`, `id_Mokejimas`, `fk_Pirkejasid_Pirkejas`, `fk_Saskaitaid_Saskaita`) VALUES
('2017-03-15', '2894.50', 2, 101336334, 107028723, 597783792),
('2017-03-08', '2894.50', 3, 163293786, 107028723, 613133327),
('2017-03-16', '2894.50', 2, 168715355, 107028723, 886696090),
('2017-03-09', '2894.50', 2, 188800243, 107028723, 697134781),
('2017-03-10', '2894.50', 2, 197279530, 107028723, 228040762),
('2017-03-16', '2894.50', 2, 332929065, 107028723, 784192405),
('2017-03-17', '2894.50', 1, 493187506, 107028723, 711879837),
('2017-03-09', '2894.50', 2, 513967586, 107028723, 236700084),
('2017-03-16', '2894.50', 1, 551278699, 107028723, 499280805),
('2017-03-22', '2894.50', 2, 560540187, 107028723, 564310227),
('2017-03-16', '2894.50', 2, 660538186, 107028723, 697134781),
('2017-03-04', '2894.50', 1, 679711794, 107028723, 666182257),
('2017-03-16', '2894.50', 2, 748236066, 107028723, 169071234),
('2017-03-09', '2894.50', 2, 792517138, 107028723, 363172257),
('2017-03-13', '2894.50', 3, 797172141, 107028723, 898317544),
('2017-03-07', '2894.50', 2, 830569541, 107028723, 601138640),
('2017-03-09', '2894.50', 3, 862245167, 107028723, 279914025),
('2017-03-13', '2894.50', 1, 902727686, 107028723, 647380402),
('2017-03-09', '2894.50', 3, 988507290, 107028723, 243326134),
('2017-03-02', '2894.50', 3, 2083145907, 107028723, 199209371),
('2017-03-09', '2894.50', 2, 2147483647, 107028723, 155131099);

-- --------------------------------------------------------

--
-- Table structure for table `mokejimobudai`
--

CREATE TABLE `mokejimobudai` (
  `id_Mokejimo_budai` int(11) NOT NULL,
  `name` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mokejimobudai`
--

INSERT INTO `mokejimobudai` (`id_Mokejimo_budai`, `name`) VALUES
(1, 'grynais'),
(2, 'pavedimu'),
(3, 'kortele');

-- --------------------------------------------------------

--
-- Table structure for table `pardavejai`
--

CREATE TABLE `pardavejai` (
  `pardavejo_pavadinimas` varchar(20) NOT NULL,
  `pardavejo_PVM_kodas` varchar(20) NOT NULL,
  `pardavejo_adresas` varchar(20) NOT NULL,
  `pardavejo_el_pastas` varchar(20) NOT NULL,
  `pardavejo_telefono_nr` varchar(20) NOT NULL,
  `id_Pardavejas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pardavejai`
--

INSERT INTO `pardavejai` (`pardavejo_pavadinimas`, `pardavejo_PVM_kodas`, `pardavejo_adresas`, `pardavejo_el_pastas`, `pardavejo_telefono_nr`, `id_Pardavejas`) VALUES
('Harolds', 'AF52395345', 'NorthAv.86', 'foxel@gmail.com', '8691345243', 97),
('Jayo', 'AL171523594 ', '5456 Tennessee Circl', 'chillh@soup.io', '7-(566)966-7388', 31767342),
('Skipfire', 'BA021265653 ', '01 Killdeer Parkway', 'cchapmani@utexas.edu', '970-(494)558-5727', 34055742),
('Plambee', 'GL376669833', '69 Garrison Center', 'elarsong@example.com', '371-(104)477-5819', 42067494),
('Rhyloo', 'PT638645104', '316 Lakewood Court', 'fjacobs6@cargo.com', '976-(294)172-6637', 52706896),
('Divape', 'MT797966897', '18506 Sunbrook Pass', 'dandrewsc@wiley.com', '62-(370)723-7105', 69005908),
('Dabshots', 'CR153846581', '34145 Bowman Pass', 'lyoung3@adver.com', '54-(891)464-4189', 97474749),
('Youopia', 'GL102366315', '359 Dexter Avenue', 'csanchezf@dot.gov', '81-(798)511-7702', 100686502),
('Lazz', 'PK154734639 ', '39 Goodland Way', 'cbarnes1@gmail.com', '86-(510)318-4829', 179267125),
('Demivee', 'PT488156765', '56 Aberg Center', 'apetersonl@sphinn.co', '48-(113)987-5961', 212968468),
('Pixope', 'EE411735192 ', '27 Grayhawk Circle', 'skellyp@cdbaby.com', '81-(139)767-9692', 279585784),
('Meembee', 'ES345808553 ', '4 Crescent Oaks Stre', 'hrice5@youku.com', '27-(761)108-1105', 290512762),
('Tambee', 'FR764174516 ', '1 Veith Circle', 'lmartineza@list.com', '62-(592)753-1435', 309515652),
('Bubblemix', 'LV579187693', '65709 Canary Court', 'jcarroll9@upenn.edu', '62-(431)382-7097', 458128236),
('Plambee', 'HR745702908 ', '432 Briar Crest Plac', 'lgutierrezn@php.net', '86-(117)568-2524', 469595728),
('Tagtune', 'FR058090812', '0534 Ronald Regan Tr', 'dgarrettq@blink.com', '1-(352)529-8131', 484817548),
('InnoZ', 'FO552029792 ', '241 Schiller Crossin', 'dfloresb@nih.gov', '420-(166)677-3564', 490652613),
('Yakitri', 'BR389405233 ', '236 Chinook Parkway', 'llopez8@squidoo.com', '62-(828)789-1238', 512210600),
('Livetube', 'PT426818164 ', '582 Packers Park', 'parnoldk@apple.com', '62-(414)782-0900', 545964682),
('Midel', 'BE392515030', '96 Fairfield Avenue', 'jrossd@noaa.gov', '7-(279)726-9431', 573916914),
('Pixoboo', 'FR028369366 ', '469 Rutledge Alley', 'eperez2@fda.gov', '30-(926)242-5768', 612554802),
('Linktype', 'FR178665857', '9 Gerald Parkway', 'mrodrigueze@mash.com', '55-(959)489-2479', 626627072),
('Agivu', 'SK882523482', '47835 Spenser Juncti', 'dfranklin4@gmail.com', '216-(959)855-7298', 722300018),
('Edgeblab', 'AT356064271 ', '11 Kedzie Way', 'swarren7@narod.ru', '358-(910)349-3521', 742488957),
('Wikivu', 'KW298184530 ', '70478 Ryan Parkway', 'frogerss@gmail.com', '371-(227)688-0380', 756409054),
('Edgepulse', 'FR277071336', '4399 Texas Pass', 'jevans0@sfgate.com', '86-(637)842-3556', 782196520),
('Skinte', 'LU249647638 ', '667 Warner Center', 'tfloresr@unicef.org', '1-(407)662-1607', 852575510),
('Photobean', 'SM117667755 ', '0 Farragut Crossing', 'bmorganm@ebay.co.uk', '62-(387)414-9974', 864229114),
('Edgewire', 'FR058849948', '754 Spohn Way', 'akellyj@addtoany.com', '62-(782)424-2088', 881290875),
('Photolist', 'PS578938501 ', '26 Fordem Lane', 'dhartt@scribd.com', '62-(678)738-8027', 908799153);

-- --------------------------------------------------------

--
-- Table structure for table `pirkejai`
--

CREATE TABLE `pirkejai` (
  `pirkejo_pavadinimas` varchar(20) NOT NULL,
  `pirkejo_PVM_kodas` varchar(20) NOT NULL,
  `adresas` varchar(20) NOT NULL,
  `el_pastas` varchar(20) NOT NULL,
  `telefono_nr` varchar(20) NOT NULL,
  `id_Pirkejas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pirkejai`
--

INSERT INTO `pirkejai` (`pirkejo_pavadinimas`, `pirkejo_PVM_kodas`, `adresas`, `el_pastas`, `telefono_nr`, `id_Pirkejas`) VALUES
('Karmelo', 'TR696425996', 'FredAv.657', 'kar@gmail.com', '8691143369', 88),
('Voonder', 'LU943299430  ', '61 Vidon Center', 'amartinezs@github.co', '54-(686)574-6998', 107028723),
('Jamia', 'BE408523399', '5242 Utah Park', 'mfisher4@ebay.com', '92-(982)573-2415', 129772163),
('John', 'IS092842004', '34500 Kipling Place', 'agrayf@soup.io', '356-(936)412-3659', 147581650),
('Snaptags', 'IL474815697', '74812 Tennessee Road', 'sperezm@domains.net', '86-(896)675-0831', 176921108),
('Voolia', 'FR144188903 ', '09582 Meadow Ridge C', 'tallenq@ibm.com', '86-(767)854-4401', 198539476),
('Kanoodle', 'CR952389702 ', '652 Northwestern Cir', 'pnicholsb@fema.gov', '420-(958)841-6127', 210275231),
('Browsecat', 'FI411674886', '1 Erie Crossing', 'wmccoy0@dropbox.com', '51-(518)732-8010', 221065693),
('Dabvine', 'CH949866884', '8614 John Wall Court', 'lcunninghamc@wiki.co', '63-(471)313-1714', 221416548),
('Ooba', 'RS416095693', '060 Melvin Drive', 'bthompsonr@hub.com', '1-(901)717-7994', 226482680),
('Jayo', 'GI127851396 ', '88373 Pearson Avenue', 'acooperd@ezine.com', '1-(794)417-8312', 298037317),
('Eire', 'FR871486514 ', '19 Mifflin Place', 'rdaniels5@tele.com', '62-(843)506-2352', 451777427),
('Tazzy', 'KZ836072483 ', '34 International Pla', 'bwarren6@psu.edu', '386-(823)616-5331', 463582182),
('Digitube', 'PK408449307 ', '3881 Mariners Cove A', 'bdunn9@myspace.com', '972-(754)298-5942', 500956024),
('Avamm', 'TR865265885 ', '4050 Elka Lane', 'agarrettt@ox.ac.uk', '62-(284)557-0330', 551061791),
('LiveZ', 'IL491202349 ', '23 Bartelt Circle', 'ralvarezo@europa.eu', '51-(434)271-8815', 653036945),
('Quimba', 'PL393419282 ', '48 Clarendon Point', 'tnicholsh@discuz.net', '55-(971)751-1445', 674385857),
('Gigabox', 'MD701569749 ', '2537 Bay Hill', 'tshawn@earthlink.net', '86-(561)858-4962', 714740109),
('Zoomcast', 'MD029544973', '8 Ridge Oak Drive', 'abrown7@wsj.com', '62-(689)310-0726', 788468685),
('Oozz', 'AL575037903 ', '6663 Paget Road', 'gstephensl@lines.com', '7-(183)280-0545', 815850003),
('Oba', 'DE753410356', '5583 Red Cloud Hill', 'smurraye@gmail.com', '385-(973)181-3492', 861041367),
('Fanoodle', 'SK404326431', '0562 Fieldstone Aven', 'emorganj@gmail.com', '63-(806)520-2504', 933715990),
('Tambee', 'RS118305334 ', '87147 Muir Plaza', 'mgibsong@exblog.jp', '970-(643)270-6744', 935558794),
('Youopia', 'DE354787122', '426 Talmadge Place', 'mwilson3@springer.co', '62-(656)288-7675', 937609463),
('Camido', 'FR539731730 ', '55844 Haas Junction', 'rarmstrong8@sc.com', '1-(408)716-7254', 942850850),
('Jaloo', 'TN923605790 ', '298 Helena Trail', 'afoster2@gmpg.org', '62-(459)909-6563', 946986026),
('Tazz', 'ES619217074 ', '2505 Hanover Terrace', 'radamsp@spotify.com', '86-(611)805-6656', 975772767),
('Realpoint', 'LI717740035 ', '1 Randy Trail', 'jknighta@hatena.ne.j', '84-(561)784-3652', 992876949),
('Skynoodle', 'GR979029570 ', '50578 Corscot Point', 'jpowell1@zimbio.com', '81-(650)563-6426', 995325921),
('Photolist', 'BH305930421 ', '8 Aberg Trail', 'sreyesi@bluehost.com', '234-(680)640-7472', 999501708);

-- --------------------------------------------------------

--
-- Table structure for table `sandeliai`
--

CREATE TABLE `sandeliai` (
  `sandelio_pavadinimas` varchar(20) NOT NULL,
  `sandelio_adresas` varchar(20) NOT NULL,
  `sandelio_el_pastas` varchar(20) NOT NULL,
  `id_Sandelys` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sandeliai`
--

INSERT INTO `sandeliai` (`sandelio_pavadinimas`, `sandelio_adresas`, `sandelio_el_pastas`, `id_Sandelys`) VALUES
('Krom', 'Kalavriju85', 'Gito@gmail.com', 1),
('Aw', 'afdg', 'sdgsg', 2),
('Krom', 'Kalavriju85', 'Gito@gmail.com', 879),
('sdfsdf', 'sdfsdf', 'sdfs', 6223),
('sdfdg', 'sdgdg', 'fdgd', 6954),
('5E', '7329 Eagle Crest Cir', 'arivera1@who.int', 310795595),
('N6', '03 Mockingbird Cross', 'jrichards0@utexas.ed', 581979589),
('8', '647 Dayton Trail', 'bdavis2@alibaba.com', 876171476);

-- --------------------------------------------------------

--
-- Table structure for table `sandeliuojama`
--

CREATE TABLE `sandeliuojama` (
  `fk_Sandelysid_Sandelys` int(11) NOT NULL,
  `fk_Baldasid_Baldas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sandeliuojama`
--

INSERT INTO `sandeliuojama` (`fk_Sandelysid_Sandelys`, `fk_Baldasid_Baldas`) VALUES
(310795595, 165449647),
(310795595, 189113592),
(310795595, 685591475),
(581979589, 261055127),
(581979589, 571417765),
(581979589, 637184237),
(581979589, 637762746),
(876171476, 603264054),
(876171476, 696239337),
(876171476, 815598232);

-- --------------------------------------------------------

--
-- Table structure for table `saskaitos`
--

CREATE TABLE `saskaitos` (
  `saskaitos_data` date NOT NULL,
  `prekes_pavadinimas` varchar(20) NOT NULL,
  `kekis` int(20) NOT NULL,
  `kaina` decimal(13,2) NOT NULL,
  `suma` decimal(13,2) NOT NULL,
  `id_Saskaita` int(11) NOT NULL,
  `fk_Sutartisid_Sutartis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saskaitos`
--

INSERT INTO `saskaitos` (`saskaitos_data`, `prekes_pavadinimas`, `kekis`, `kaina`, `suma`, `id_Saskaita`, `fk_Sutartisid_Sutartis`) VALUES
('2017-02-18', 'Sofa', 10, '289.45', '2894.50', 155131099, 997164126),
('2017-02-22', 'Sofa', 10, '289.45', '2894.50', 169071234, 997164126),
('2017-02-16', 'Sofa', 10, '289.45', '2894.50', 199209371, 997164126),
('2017-02-17', 'Sofa', 10, '289.45', '2894.50', 228040762, 997164126),
('2017-03-04', 'Sofa', 10, '289.45', '2894.50', 236700084, 997164126),
('2017-02-10', 'Sofa', 10, '289.45', '2894.50', 243326134, 997164126),
('2017-02-16', 'Sofa', 10, '289.45', '2894.50', 248427292, 997164126),
('2017-03-09', 'Sofa', 10, '289.45', '2894.50', 279914025, 997164126),
('2017-02-17', 'Sofa', 10, '289.45', '2894.50', 363172257, 997164126),
('2017-02-10', 'Sofa', 10, '289.45', '2894.50', 499280805, 997164126),
('2017-02-16', 'Sofa', 10, '2894.50', '2894.50', 564310227, 997164126),
('2017-02-18', 'Sofa', 10, '289.45', '2894.50', 597783792, 997164126),
('2017-02-24', 'Sofa', 10, '289.45', '2894.50', 601138640, 997164126),
('2017-02-17', 'Sofa', 10, '289.45', '2894.50', 613133327, 997164126),
('2017-02-16', 'Sofa', 10, '289.45', '2894.50', 647380402, 997164126),
('2017-03-01', 'Sofa', 10, '289.45', '2894.50', 666182257, 997164126),
('2017-02-16', 'Sofa', 10, '289.45', '2894.50', 697134781, 997164126),
('2017-02-16', 'Sofa', 10, '289.45', '2894.50', 711879837, 997164126),
('2017-02-09', 'Sofa', 10, '289.45', '2894.50', 784192405, 997164126),
('2017-02-16', 'Sofa', 10, '289.45', '2894.50', 886696090, 997164126),
('2017-02-09', 'Sofa', 10, '289.45', '2894.50', 898317544, 997164126),
('2016-01-03', 'Sofa', 0, '0.00', '2600.00', 898317545, 661079865),
('2016-01-04', 'Sofa', 0, '0.00', '1800.00', 898317546, 661079865);

-- --------------------------------------------------------

--
-- Table structure for table `sutartiesbusenos`
--

CREATE TABLE `sutartiesbusenos` (
  `id_Sutarties_busenos` int(11) NOT NULL,
  `name` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sutartiesbusenos`
--

INSERT INTO `sutartiesbusenos` (`id_Sutarties_busenos`, `name`) VALUES
(1, 'galiojanti'),
(2, 'negaliojanti');

-- --------------------------------------------------------

--
-- Table structure for table `sutartys`
--

CREATE TABLE `sutartys` (
  `sutarties_data` date NOT NULL,
  `sutarties_pradzios_data` date NOT NULL,
  `sutarties_pabaigos_data` date NOT NULL,
  `sutarties_tipas` varchar(20) NOT NULL,
  `busena` int(11) NOT NULL,
  `id_Sutartis` int(11) NOT NULL,
  `fk_Pirkejasid_Pirkejas` int(11) NOT NULL,
  `fk_Darbuotojasid_Darbuotojas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sutartys`
--

INSERT INTO `sutartys` (`sutarties_data`, `sutarties_pradzios_data`, `sutarties_pabaigos_data`, `sutarties_tipas`, `busena`, `id_Sutartis`, `fk_Pirkejasid_Pirkejas`, `fk_Darbuotojasid_Darbuotojas`) VALUES
('2015-12-29', '0000-00-00', '0000-00-00', 'Pirkimo', 2, 875, 674385857, 8297163),
('2017-01-28', '2017-03-31', '2018-03-31', 'pirkimo-pardavimo', 1, 571533490, 176921108, 961348545),
('2017-02-11', '2017-03-01', '2018-03-01', 'pirkimo-pardavimo', 1, 661079865, 129772163, 969344969),
('2016-10-02', '2017-01-12', '2018-01-12', 'pirkimo-pardavimo', 1, 819542147, 147581650, 550603877),
('2016-12-31', '2017-01-01', '2017-12-31', 'pirkimo-pardavimo', 1, 997164126, 107028723, 877134773);

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymai`
--

CREATE TABLE `uzsakymai` (
  `uzsakytos_prekes_pavadinimas` varchar(20) NOT NULL,
  `uzsakymo_kiekis` int(20) NOT NULL,
  `uzsakymo_kaina` decimal(13,2) NOT NULL,
  `uzsakymo_suma` decimal(13,2) NOT NULL,
  `pristatymo_data` date NOT NULL,
  `id_Uzsakymas` int(11) NOT NULL,
  `fk_Pirkejasid_Pirkejas` int(11) NOT NULL,
  `fk_Sutartisid_Sutartis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uzsakymai`
--

INSERT INTO `uzsakymai` (`uzsakytos_prekes_pavadinimas`, `uzsakymo_kiekis`, `uzsakymo_kaina`, `uzsakymo_suma`, `pristatymo_data`, `id_Uzsakymas`, `fk_Pirkejasid_Pirkejas`, `fk_Sutartisid_Sutartis`) VALUES
('Lova', 10, '324.00', '3240.00', '2017-03-17', 359607, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-10-20', 973142, 107028723, 997164126),
('Spinta', 10, '625.92', '6259.20', '2017-10-12', 991928, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-08-30', 1091665, 107028723, 997164126),
('Spinta', 10, '625.92', '6259.20', '2017-10-25', 1292283, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-09-21', 2431217, 107028723, 997164126),
('Lova', 10, '324.00', '3240.00', '2017-03-16', 3123650, 107028723, 997164126),
('Fotelis', 10, '213.98', '2139.80', '2017-11-15', 3400943, 107028723, 997164126),
('Lova', 10, '324.00', '3240.00', '2017-09-20', 3924460, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-11-22', 4293052, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-09-21', 5100096, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-10-20', 5149803, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-08-23', 5726587, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-08-25', 5771895, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-07-27', 5918446, 107028723, 997164126),
('Sofa', 10, '289.45', '2894.50', '2017-08-23', 6098507, 107028723, 997164126),
('Spinta', 10, '625.92', '6259.20', '2017-11-23', 6233195, 107028723, 997164126),
('Lentyna', 10, '117.86', '1178.60', '2017-11-11', 6237383, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-10-26', 6494318, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-07-19', 6914331, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-08-24', 6939676, 107028723, 997164126),
('Sofa', 10, '289.45', '2894.50', '2017-06-14', 7069443, 107028723, 997164126),
('Stalas', 10, '882.83', '8828.30', '2017-11-16', 7288671, 933715990, 661079865),
('Fotelis', 10, '213.98', '2139.80', '2017-08-24', 7418768, 107028723, 997164126),
('Kedes', 10, '69.00', '690.00', '2017-10-20', 8764997, 107028723, 997164126),
('Lova', 10, '324.00', '3240.00', '2017-10-19', 8872648, 999501708, 571533490),
('Sofa', 10, '289.45', '2894.50', '2017-06-11', 462572474, 107028723, 997164126),
('Stalas', 10, '882.83', '8828.30', '2017-08-17', 1756571318, 107028723, 997164126),
('', 0, '0.00', '0.00', '0000-00-00', 1756571319, 107028723, 819542147),
('', 0, '0.00', '0.00', '0000-00-00', 1756571320, 674385857, 875),
('', 0, '0.00', '0.00', '0000-00-00', 1756571321, 653036945, 661079865),
('', 0, '0.00', '0.00', '0000-00-00', 1756571322, 176921108, 819542147);

-- --------------------------------------------------------

--
-- Table structure for table `vaztarasciai`
--

CREATE TABLE `vaztarasciai` (
  `vaztarascio_data` date NOT NULL,
  `automobilio_nr` varchar(7) NOT NULL,
  `vezama_preke` varchar(20) NOT NULL,
  `vezamu_prekiu_kiekis` int(20) NOT NULL,
  `id_Vaztarastis` int(11) NOT NULL,
  `fk_Sutartisid_Sutartis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vaztarasciai`
--

INSERT INTO `vaztarasciai` (`vaztarascio_data`, `automobilio_nr`, `vezama_preke`, `vezamu_prekiu_kiekis`, `id_Vaztarastis`, `fk_Sutartisid_Sutartis`) VALUES
('2017-08-31', 'AKD281', 'Kede', 10, 365772, 997164126),
('2017-10-28', 'BPA814', 'Kede', 10, 2908214, 997164126),
('2017-10-20', 'ADI591', 'Kede', 10, 2941906, 997164126),
('2017-08-16', 'OPA946', 'Lova', 10, 3712507, 997164126),
('2017-09-07', 'UFA448', 'Stalas', 10, 3907123, 997164126),
('2017-11-17', 'UDA439', 'Kede', 10, 5875940, 997164126),
('2017-10-11', 'POP459', 'Fotelis', 10, 5955998, 997164126),
('2017-08-17', 'DOG654', 'Sofa', 10, 7612351, 997164126),
('2017-09-22', 'PDP504', 'Sofa', 10, 7680572, 997164126),
('2017-09-21', 'KDA842', 'Kede', 10, 8345801, 997164126),
('2017-10-13', 'ATE064', 'Sofa', 10, 9578381, 997164126),
('2017-06-01', 'GHM696', 'Sofa', 10, 233671688, 997164126),
('2017-11-28', 'OFP439', 'Stalas', 10, 268838830, 997164126),
('2017-10-26', 'GOD647', 'Stalas', 10, 2147483647, 997164126);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aptarnauja`
--
ALTER TABLE `aptarnauja`
  ADD PRIMARY KEY (`fk_Sandelysid_Sandelys`,`fk_Darbuotojasid_Darbuotojas`),
  ADD KEY `fk_Darbuotojasid_Darbuotojas` (`fk_Darbuotojasid_Darbuotojas`);

--
-- Indexes for table `baldai`
--
ALTER TABLE `baldai`
  ADD PRIMARY KEY (`id_Baldas`),
  ADD KEY `turi` (`fk_Pardavejasid_Pardavejas`);

--
-- Indexes for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD PRIMARY KEY (`id_Darbuotojas`);

--
-- Indexes for table `itrauktas`
--
ALTER TABLE `itrauktas`
  ADD PRIMARY KEY (`fk_Sutartisid_Sutartis`,`fk_Baldasid_Baldas`),
  ADD KEY `fk_Baldasid_Baldas` (`fk_Baldasid_Baldas`);

--
-- Indexes for table `mokejimai`
--
ALTER TABLE `mokejimai`
  ADD PRIMARY KEY (`id_Mokejimas`),
  ADD KEY `mokejimo_budas` (`mokejimo_budas`),
  ADD KEY `sumokejo` (`fk_Pirkejasid_Pirkejas`),
  ADD KEY `apmoka` (`fk_Saskaitaid_Saskaita`);

--
-- Indexes for table `mokejimobudai`
--
ALTER TABLE `mokejimobudai`
  ADD PRIMARY KEY (`id_Mokejimo_budai`);

--
-- Indexes for table `pardavejai`
--
ALTER TABLE `pardavejai`
  ADD PRIMARY KEY (`id_Pardavejas`);

--
-- Indexes for table `pirkejai`
--
ALTER TABLE `pirkejai`
  ADD PRIMARY KEY (`id_Pirkejas`);

--
-- Indexes for table `sandeliai`
--
ALTER TABLE `sandeliai`
  ADD PRIMARY KEY (`id_Sandelys`);

--
-- Indexes for table `sandeliuojama`
--
ALTER TABLE `sandeliuojama`
  ADD PRIMARY KEY (`fk_Sandelysid_Sandelys`,`fk_Baldasid_Baldas`),
  ADD KEY `fk_Baldasid_Baldas` (`fk_Baldasid_Baldas`);

--
-- Indexes for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD PRIMARY KEY (`id_Saskaita`),
  ADD KEY `israsyta` (`fk_Sutartisid_Sutartis`);

--
-- Indexes for table `sutartiesbusenos`
--
ALTER TABLE `sutartiesbusenos`
  ADD PRIMARY KEY (`id_Sutarties_busenos`);

--
-- Indexes for table `sutartys`
--
ALTER TABLE `sutartys`
  ADD PRIMARY KEY (`id_Sutartis`),
  ADD KEY `busena` (`busena`),
  ADD KEY `sudaro` (`fk_Pirkejasid_Pirkejas`),
  ADD KEY `patvirtina` (`fk_Darbuotojasid_Darbuotojas`);

--
-- Indexes for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  ADD PRIMARY KEY (`id_Uzsakymas`),
  ADD KEY `pateikia` (`fk_Pirkejasid_Pirkejas`),
  ADD KEY `israsytas` (`fk_Sutartisid_Sutartis`);

--
-- Indexes for table `vaztarasciai`
--
ALTER TABLE `vaztarasciai`
  ADD PRIMARY KEY (`id_Vaztarastis`),
  ADD KEY `uzpildytas` (`fk_Sutartisid_Sutartis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aptarnauja`
--
ALTER TABLE `aptarnauja`
  ADD CONSTRAINT `aptarnauja` FOREIGN KEY (`fk_Sandelysid_Sandelys`) REFERENCES `sandeliai` (`id_Sandelys`),
  ADD CONSTRAINT `aptarnauja_ibfk_1` FOREIGN KEY (`fk_Darbuotojasid_Darbuotojas`) REFERENCES `darbuotojai` (`id_Darbuotojas`);

--
-- Constraints for table `baldai`
--
ALTER TABLE `baldai`
  ADD CONSTRAINT `turi` FOREIGN KEY (`fk_Pardavejasid_Pardavejas`) REFERENCES `pardavejai` (`id_Pardavejas`);

--
-- Constraints for table `itrauktas`
--
ALTER TABLE `itrauktas`
  ADD CONSTRAINT `itrauktas` FOREIGN KEY (`fk_Sutartisid_Sutartis`) REFERENCES `sutartys` (`id_Sutartis`),
  ADD CONSTRAINT `itrauktas_ibfk_1` FOREIGN KEY (`fk_Baldasid_Baldas`) REFERENCES `baldai` (`id_Baldas`);

--
-- Constraints for table `mokejimai`
--
ALTER TABLE `mokejimai`
  ADD CONSTRAINT `Mokejimai_ibfk_1` FOREIGN KEY (`mokejimo_budas`) REFERENCES `mokejimobudai` (`id_Mokejimo_budai`),
  ADD CONSTRAINT `apmoka` FOREIGN KEY (`fk_Saskaitaid_Saskaita`) REFERENCES `saskaitos` (`id_Saskaita`),
  ADD CONSTRAINT `sumokejo` FOREIGN KEY (`fk_Pirkejasid_Pirkejas`) REFERENCES `pirkejai` (`id_Pirkejas`);

--
-- Constraints for table `sandeliuojama`
--
ALTER TABLE `sandeliuojama`
  ADD CONSTRAINT `sandeliuojama_ibfk_1` FOREIGN KEY (`fk_Sandelysid_Sandelys`) REFERENCES `sandeliai` (`id_Sandelys`),
  ADD CONSTRAINT `sandeliuojama_ibfk_2` FOREIGN KEY (`fk_Baldasid_Baldas`) REFERENCES `baldai` (`id_Baldas`);

--
-- Constraints for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD CONSTRAINT `israsyta` FOREIGN KEY (`fk_Sutartisid_Sutartis`) REFERENCES `sutartys` (`id_Sutartis`);

--
-- Constraints for table `sutartys`
--
ALTER TABLE `sutartys`
  ADD CONSTRAINT `Sutartys_ibfk_1` FOREIGN KEY (`busena`) REFERENCES `sutartiesbusenos` (`id_Sutarties_busenos`),
  ADD CONSTRAINT `patvirtina` FOREIGN KEY (`fk_Darbuotojasid_Darbuotojas`) REFERENCES `darbuotojai` (`id_Darbuotojas`),
  ADD CONSTRAINT `sudaro` FOREIGN KEY (`fk_Pirkejasid_Pirkejas`) REFERENCES `pirkejai` (`id_Pirkejas`);

--
-- Constraints for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  ADD CONSTRAINT `israsytas` FOREIGN KEY (`fk_Sutartisid_Sutartis`) REFERENCES `sutartys` (`id_Sutartis`),
  ADD CONSTRAINT `pateikia` FOREIGN KEY (`fk_Pirkejasid_Pirkejas`) REFERENCES `pirkejai` (`id_Pirkejas`);

--
-- Constraints for table `vaztarasciai`
--
ALTER TABLE `vaztarasciai`
  ADD CONSTRAINT `uzpildytas` FOREIGN KEY (`fk_Sutartisid_Sutartis`) REFERENCES `sutartys` (`id_Sutartis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
