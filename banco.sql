CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(5) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `altura` float NOT NULL,
  `peso` float NOT NULL,
  `imc` float NOT NULL,
  `resultado` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
