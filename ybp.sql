-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Ago-2016 às 02:45
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ybp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `obreiro`
--

CREATE TABLE IF NOT EXISTS `obreiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_obreiro` varchar(75) NOT NULL COMMENT 'Nome do Obreiro\n',
  `dt_nascimento` date NOT NULL COMMENT 'Data de Nascimento',
  `sx_obreiro` varchar(10) NOT NULL COMMENT 'Sexo\nMasculino\nFeminino\n',
  `nm_profissao` varchar(100) NOT NULL COMMENT 'Profissão',
  `ds_profissao` varchar(400) DEFAULT NULL COMMENT 'Descrição da Profissão',
  `nm_grau` varchar(45) NOT NULL,
  `nm_loja` varchar(100) NOT NULL,
  `nm_status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `obreiro`
--

INSERT INTO `obreiro` (`id`, `nm_obreiro`, `dt_nascimento`, `sx_obreiro`, `nm_profissao`, `ds_profissao`, `nm_grau`, `nm_loja`, `nm_status`) VALUES
(1, 'Lidiane alencar', '0800-00-00', 'Feminino', 'Web Designer', 'bla bla ba', 'Aprendiz MaÃ§om', 'YBP11', 'tttt'),
(2, 'teste', '0000-00-00', 'Feminino', 'Web Designer', 'bla bla ba', 'Aprendiz MaÃ§om', 'YBP11', 'Ativa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
