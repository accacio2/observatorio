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
-- Estrutura da tabela `boas_praticas`
--

CREATE TABLE IF NOT EXISTS `boas_praticas` (
  `id_boasPraticas` int(11) NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `breveDescricao` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `imagem` blob,
  `observacoes` text,
  PRIMARY KEY (`id_boasPraticas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `libraries`
--

CREATE TABLE IF NOT EXISTS `libraries` (
  `id_itemBiblioteca` int(11) NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `imagem` blob NOT NULL,
  `arquivo` mediumblob NOT NULL,
  PRIMARY KEY (`id_itemBiblioteca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `odm` int(1) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `imagem` blob NOT NULL,
  `breveDescricao` varchar(400) NOT NULL,
  `noticiaNaIntegra` text NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `notices`
--

INSERT INTO `notices` (`id_noticia`, `odm`, `titulo`, `imagem`, `breveDescricao`, `noticiaNaIntegra`) VALUES
(1, 1, 'wds', 0x6161736461, 'dasda', 'dasdas'),
(2, 1, 'a', 0x312e6a7067, 'a', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `imagem` blob NOT NULL,
  PRIMARY KEY (`id_parceiro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `partners`
--

INSERT INTO `partners` (`id_parceiro`, `nome`, `endereco`, `telefone`, `email`, `link`, `imagem`) VALUES
(1, 'asas', 'asasa', 'adasa', 'rogerio@gmail.com', 'www.abc.com.br', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `lembreteSenha` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_usuario`, `tipo`, `login`, `senha`, `lembreteSenha`, `email`) VALUES
(3, 'Usuario Admin', 'adm', '123', 'unipÃª', 'rogerionunes90@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
