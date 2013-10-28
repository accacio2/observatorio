-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_observatorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contacts` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mesage` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_contacts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `good_practices`
--

CREATE TABLE IF NOT EXISTS `good_practices` (
  `id_good_practices` int(11) NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `county` varchar(45) CHARACTER SET latin1 NOT NULL,
  `title` varchar(45) CHARACTER SET latin1 NOT NULL,
  `briefDescription` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `image` blob,
  `observations` text CHARACTER SET latin1,
  PRIMARY KEY (`id_good_practices`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `libraries`
--

CREATE TABLE IF NOT EXISTS `libraries` (
  `id_libraries` int(11) NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `category` varchar(15) CHARACTER SET latin1 NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` blob NOT NULL,
  `file` mediumblob NOT NULL,
  PRIMARY KEY (`id_libraries`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id_notices` int(11) NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `title` varchar(45) CHARACTER SET latin1 NOT NULL,
  `image` blob NOT NULL,
  `briefDescription` varchar(400) CHARACTER SET latin1 NOT NULL,
  `noticesInIntegra` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_notices`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `notices`
--

INSERT INTO `notices` (`id_notices`, `odm`, `title`, `image`, `briefDescription`, `noticesInIntegra`) VALUES
(1, 1, 'wds', 0x6161736461, 'dasda', 'dasdas'),
(2, 1, 'a', 0x312e6a7067, 'a', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id_partners` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id_partners`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `partners`
--

INSERT INTO `partners` (`id_partners`, `name`, `address`, `phone`, `email`, `link`, `image`) VALUES
(1, 'asas', 'asasa', 'adasa', 'rogerio@gmail.com', 'www.abc.com.br', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) CHARACTER SET latin1 NOT NULL,
  `login` varchar(45) CHARACTER SET latin1 NOT NULL,
  `password` varchar(15) CHARACTER SET latin1 NOT NULL,
  `reminderPassword` varchar(45) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_users`, `type`, `login`, `password`, `reminderPassword`, `email`, `is_active`) VALUES
(3, 'Usuario Admin', 'adm', '123', 'unipÃª', 'rogerionunes90@gmail.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
