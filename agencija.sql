-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2015 at 09:27 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agencija`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `ime` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ime`, `email`, `pass`) VALUES
('Aleksandar', 'aleksandar.d@hotmail.com', 'aleksandar'),
('Dijana', 'dijana.l@hotmail.com', 'dijana'),
('Nadica', 'nadica.u@hotmail.com', 'nadica');

-- --------------------------------------------------------

--
-- Table structure for table `ponudi`
--

CREATE TABLE IF NOT EXISTS `ponudi` (
`id` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `opis` varchar(200) NOT NULL,
  `termin1` date NOT NULL,
  `termin2` date NOT NULL,
  `termin3` date NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `ponudi`
--

INSERT INTO `ponudi` (`id`, `ime`, `opis`, `termin1`, `termin2`, `termin3`, `cena`) VALUES
(1, 'Париз', 'Поминете го денот на вљубените со вашиот партнер во градот на светлината и љубовта и доживејте едно незаборавно и романтично патување кое ќе го паметите целиот живот.', '2010-02-20', '2012-02-20', '2013-02-20', 319),
(2, 'Венеција', 'Обележете го денот на жената така што секојдневните обврски ќе ги оставите зад вас и ќе заминете на незаборавно патување во еден од најуникатните градови во Европа- бисерот на Јадранското море', '2001-03-20', '2003-03-20', '2005-03-20', 219),
(3, 'Прага', 'Прославете го Христовото Воскресение со едно возбудливо патување во магичната престолнина на преубави катедрали, мостови и цркви, градот кој е познат како срцето на Европа- Прага.', '2002-04-20', '2003-04-20', '2008-04-20', 233),
(4, 'Банско', 'Побегнете од секојдневието и заминете на незаборавен викенд во Банско, еден од најголемите ски-центри на Балканот.\r\nОдвојте време за себе и уживајте во услугите кои што ги нуди туристичкиот центар.', '2023-02-20', '2028-02-20', '2002-03-20', 166),
(5, 'Солун', 'Понуда која што не смеете да ја пропуштите!! \r\nБидете дел од еднодневната прошетка и шопинг во градот Солун.', '2005-02-20', '2012-02-20', '2019-02-20', 12),
(6, 'Сандански', 'All inclusive понуда за двајца! \r\nНоќевање за двајца на база на полн пансион со користење на спа центарот во „Alex spa hotel“ во Сандански – Бугарија.\r\nИскористете ја понудата и препуштете се на убави', '2010-04-20', '2020-04-20', '2005-05-20', 40),
(7, 'Истанбул', 'Местото што ги исполнува сите желби на светот ви ги отвора портите кон непроценлива убавина, историја, шопинг и флерт на два континенти. Главниот град на 3 империи ќе ве освои, уживајте во тридневна а', '2015-03-20', '2021-03-20', '2031-03-20', 85),
(8, 'Милано', 'Тековна понуда која не смеете да ја пропуштите', '2015-00-20', '0000-00-00', '0000-00-00', 225),
(9, 'Дубаи', 'Најлуксузната дестинација за одмор.\r\n\r\nПовеќе информации за понудата во детали!', '2016-05-20', '0000-00-00', '0000-00-00', 1119),
(10, 'Израел', 'Тековна понуда која не смеете да ја пропуштите.', '2009-04-20', '2020-04-20', '0000-00-00', 725),
(11, 'Венеција-Карневал', 'Искористете ја понудата да заминете на најпознатиот Венецијански карневал', '2007-02-20', '0000-00-00', '0000-00-00', 249),
(12, 'Апсолвентска екскурзија', 'Заминете на најлудото патување од вашиот живот!', '2010-05-20', '0000-00-00', '0000-00-00', 450),
(13, 'Малта', 'Една од посебните топ понуди која не смее да биде пропуштена', '2020-04-20', '0000-00-00', '0000-00-00', 230),
(14, 'Грција', 'Поминете едно прекрасно летување во Грција\r\n\r\nПовеќе информации за понудата во детали!', '2024-05-20', '2007-06-20', '2002-08-20', 105),
(15, 'Боровец', 'Поминете незаборавно летување во Боровец!', '2011-06-20', '2021-06-20', '2031-06-20', 79),
(16, 'Истанбул-Летување', 'Не пропуштајте јапонудата да имате незаборавно лето во Истанбул!', '2005-07-20', '0000-00-00', '0000-00-00', 119),
(17, 'Банско-Викенд', 'Викенд во Банско\r\n\r\nПовеќе информации за понудата во детали!', '2031-03-20', '0000-00-00', '0000-00-00', 94),
(18, 'Амстердам', 'Поминете незаборавен викенд во Амстердам!', '2010-03-20', '0000-00-00', '0000-00-00', 264),
(19, 'Италија-Рим', 'Имајте еден незаборавен викенд со тоа што ќе отпатувате во Рим', '2020-02-20', '2027-03-20', '0000-00-00', 149);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacii`
--

CREATE TABLE IF NOT EXISTS `rezervacii` (
  `idr` int(11) NOT NULL,
  `ponuda` varchar(50) NOT NULL,
  `termin1` date NOT NULL,
  `smestuvanje` varchar(50) NOT NULL,
  `prevoz` varchar(50) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `baranja` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezervacii`
--

INSERT INTO `rezervacii` (`idr`, `ponuda`, `termin1`, `smestuvanje`, `prevoz`, `ime`, `email`, `tel`, `baranja`) VALUES
(0, 'Париз', '2010-02-20', 'Хотелско сместување', '', '', '', 0, ''),
(0, 'Солун', '2003-03-20', 'Приватно сместувањ', 'Авион', 'a', 'ace_dimitriev@yahoo.com', 0, 'aaaa'),
(0, '', '0000-00-00', 'Хотелско сместување', '', '', 'aleksandar.d@hotmail.com', 0, ''),
(1, 'nova', '2015-02-12', 'dsdas', 'dsadsa', 'sdasdsa', 'dsadas', 234567, 'ewqewqeqw'),
(1, 'nova', '2015-02-12', 'dssssssdas', 'dsadsa', 'sdasdsa', 'dsiujjjadas', 234567, 'ewqewqeqw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `ponudi`
--
ALTER TABLE `ponudi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervacii`
--
ALTER TABLE `rezervacii`
 ADD PRIMARY KEY (`idr`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ponudi`
--
ALTER TABLE `ponudi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
