--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `Drivers`
--

CREATE TABLE `Drivers` (
  `Name` text NOT NULL,
  `Number` int(11) NOT NULL,
  `Team` text NOT NULL,
  `Role` text NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Drivers`
--

INSERT INTO `Drivers` (`Name`, `Number`, `Team`, `Role`, `Img`) VALUES
('Esteban Gutiérrez', 13, 'Mercedes AMG', 'Simulator Driver', 'gutierrez.png'),
('Stoffel Vandoorne', 25, 'Mercedes AMG', 'Reserve Driver', 'stoffel.png'),
('Lewis Hamilton', 44, 'Mercedes AMG', 'Principal Driver', 'lewis_team.png'),
('Valteri Bottas', 77, 'Mercedes AMG', 'Principal Driver', 'bottas.png');

-- --------------------------------------------------------

--
-- Table structure for table `Index_Drivers`
--

CREATE TABLE `Index_Drivers` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Number` int(11) NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Index_Drivers`
--

INSERT INTO `Index_Drivers` (`Id`, `Name`, `Number`, `Img`) VALUES
(1, 'Lewis Hamilton', 44, 'lewis_card.png'),
(2, 'Valteri Bottas', 77, 'bottas_cards.png');

-- --------------------------------------------------------

--
-- Table structure for table `Managers`
--

CREATE TABLE `Managers` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Role` text NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Managers`
--

INSERT INTO `Managers` (`Id`, `Name`, `Role`, `Img`) VALUES
(1, 'Toto Wolff', 'Team Principal & CEO', 'toto.png'),
(2, 'Britta Seeger', 'Non-Executive Chairman', 'britta.png'),
(3, 'Rene Berger', 'Non-Executive Chairman', 'rene.jpeg'),
(4, 'Markus Schafer', 'Non-Executive Chairman', 'markus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Principal_Partners`
--

CREATE TABLE `Principal_Partners` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Principal_Partners`
--

INSERT INTO `Principal_Partners` (`Id`, `Name`, `Img`) VALUES
(1, 'Ineos', 'ineos.png');

-- --------------------------------------------------------

--
-- Table structure for table `Team_Partners`
--

CREATE TABLE `Team_Partners` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Team_Partners`
--

INSERT INTO `Team_Partners` (`Id`, `Name`, `Img`) VALUES
(1, 'Ubs', 'ubs-pa.svg'),
(2, 'Epson', 'EPSON.svg'),
(3, 'Bose', 'bose.svg'),
(4, 'Tommy', 'tommy.svg'),
(5, 'IWC', 'IWC.svg'),
(6, 'Monster Energy', 'monsterE.png');

-- --------------------------------------------------------

--
-- Table structure for table `Team_Supliers`
--

CREATE TABLE `Team_Supliers` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Team_Supliers`
--

INSERT INTO `Team_Supliers` (`Id`, `Name`, `Img`) VALUES
(1, 'Pirelli', 'pirelli.png'),
(2, 'OMP', 'OMP.png'),
(3, 'OZ Racing', 'OZ.png'),
(4, 'Police', 'police.png'),
(5, 'Puma', 'puma.png');

-- --------------------------------------------------------

--
-- Table structure for table `Title_Partners`
--

CREATE TABLE `Title_Partners` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Img` varchar(256) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Title_Partners`
--

INSERT INTO `Title_Partners` (`Id`, `Name`, `Img`) VALUES
(1, 'Petronas', 'petronas.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Drivers`
--
ALTER TABLE `Drivers`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `Index_Drivers`
--
ALTER TABLE `Index_Drivers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Managers`
--
ALTER TABLE `Managers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Principal_Partners`
--
ALTER TABLE `Principal_Partners`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Team_Partners`
--
ALTER TABLE `Team_Partners`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Team_Supliers`
--
ALTER TABLE `Team_Supliers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Title_Partners`
--
ALTER TABLE `Title_Partners`
  ADD PRIMARY KEY (`Id`);