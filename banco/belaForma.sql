-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06-Abr-2016 às 22:46
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belaForma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome_adm` varchar(45) COLLATE utf8_bin NOT NULL,
  `login` varchar(45) COLLATE utf8_bin NOT NULL,
  `senha` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome_adm`, `login`, `senha`) VALUES
(1, 'Marcos', 'root', 'root');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_bin NOT NULL,
  `login` varchar(45) COLLATE utf8_bin NOT NULL,
  `senha` varchar(45) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `fone` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `login`, `senha`, `data`, `email`, `fone`) VALUES
(1, 'marcos', 'aluno', 'aluno', '0000-00-00', NULL, NULL),
(2, 'aluno teste', 'aluno', 'aluno', '0000-00-00', NULL, NULL),
(3, 'aluno teste', 'aluno', 'aluno', '0000-00-00', NULL, NULL),
(4, 'aluno teste', 'aluno', 'aluno', '2016-01-01', NULL, NULL),
(6, 'eu mesmo', 'Marcos', '1234', '0000-00-00', NULL, NULL),
(7, 'eu mesmo', 'marcos', 'usdhbh', '0000-00-00', 'jdsfhj@jidfhv', '38947389'),
(8, 'jodhsjk', 'jkbjbj', 'jnhjknjk', '0000-00-00', '', ''),
(9, 'lknkjn', 'knkjnjkn', 'knklnkn', '0000-00-00', 'j@gt', 'jn');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id_horario` int(11) NOT NULL AUTO_INCREMENT,
  `dia` varchar(45) COLLATE utf8_bin NOT NULL,
  `hora` int(11) NOT NULL,
  PRIMARY KEY (`id_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_modalidade_aluno`
--

CREATE TABLE IF NOT EXISTS `horario_modalidade_aluno` (
  `id_horario` int(11) NOT NULL,
  `id_modalidade` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  PRIMARY KEY (`id_horario`,`id_modalidade`,`id_aluno`),
  KEY `fk_horario_has_modalidade_aluno_modalidade_aluno1_idx` (`id_modalidade`,`id_aluno`),
  KEY `fk_horario_has_modalidade_aluno_horario1_idx` (`id_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medidas`
--

CREATE TABLE IF NOT EXISTS `medidas` (
  `id_medidas` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `peso` float DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `imc` float DEFAULT NULL,
  `circAbd` float DEFAULT NULL,
  `circQuad` float DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_medidas`,`id_aluno`),
  KEY `fk_medidas_aluno1_idx` (`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `medidas`
--

INSERT INTO `medidas` (`id_medidas`, `id_aluno`, `peso`, `altura`, `imc`, `circAbd`, `circQuad`, `dia`, `mes`, `ano`, `data`) VALUES
(1, 1, 65.1, 1.65, 23.9118, 91, 100, 6, 4, 16, '2016-04-03'),
(2, 1, 67, 1.65, 24.6097, 91, 99, 6, 4, 16, '0000-00-00'),
(3, 1, 100, 1.4, 18.8776, 76, 87, 6, 4, 16, '2016-04-21'),
(4, 1, 65.9, 1.57, 26.7354, 78, 45, 6, 4, 16, '0000-00-00'),
(5, 1, 34.7, 1.67, 12.4422, 87, 98, 6, 4, 2016, '0000-00-00'),
(6, 1, 2, 7, 0.0408163, 8, 9, 6, 4, 2016, '0000-00-00'),
(7, 1, 2, 7, 0.0408163, 8, 9, 6, 4, 2016, '0000-00-00'),
(8, 1, 80, 7, 0.0408163, 8, 9, 6, 4, 2016, '2016-04-05'),
(9, 1, 90, 7, 0.0408163, 8, 9, 6, 4, 2016, '2016-04-06'),
(10, 2, 70, 1.5, 31.1111, 34, 56, 6, 4, 2016, '2016-04-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade`
--

CREATE TABLE IF NOT EXISTS `modalidade` (
  `id_modalidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_modalidade` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_modalidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `modalidade`
--

INSERT INTO `modalidade` (`id_modalidade`, `nome_modalidade`) VALUES
(1, 'Treinamento Funcional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade_aluno`
--

CREATE TABLE IF NOT EXISTS `modalidade_aluno` (
  `id_modalidade` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_modalidade`,`id_aluno`),
  KEY `fk_modalidade_has_aluno_aluno1_idx` (`id_aluno`),
  KEY `fk_modalidade_has_aluno_modalidade_idx` (`id_modalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE IF NOT EXISTS `pagamento` (
  `id_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pagamento`,`id_aluno`),
  KEY `fk_pagamento_aluno1_idx` (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `horario_modalidade_aluno`
--
ALTER TABLE `horario_modalidade_aluno`
  ADD CONSTRAINT `fk_horario_has_modalidade_aluno_horario1` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_has_modalidade_aluno_modalidade_aluno1` FOREIGN KEY (`id_modalidade`, `id_aluno`) REFERENCES `modalidade_aluno` (`id_modalidade`, `id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `medidas`
--
ALTER TABLE `medidas`
  ADD CONSTRAINT `fk_medidas_aluno1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `modalidade_aluno`
--
ALTER TABLE `modalidade_aluno`
  ADD CONSTRAINT `fk_modalidade_has_aluno_aluno1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_modalidade_has_aluno_modalidade` FOREIGN KEY (`id_modalidade`) REFERENCES `modalidade` (`id_modalidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `fk_pagamento_aluno1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
