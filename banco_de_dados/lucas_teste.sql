-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Jun-2023 às 17:34
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lucas_teste`
--
CREATE DATABASE IF NOT EXISTS `lucas_teste` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lucas_teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_login`, `email`, `senha`, `nome`, `cpf`, `endereco`) VALUES
(1, 'joaquim@sagionetti', 'joaquim', 'Joaquim Pedro Klima Sagionetti', '11213131', 'Avenida Brasil'),
(2, 'dieimes@teste.com', 'dieimes', 'Dieimes Nunes', '11123131', 'Rua Rio'),
(3, 'admin@hotmail.com', 'admin123', 'administrador', 'ADM', 'ADM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_bebidas`
--

DROP TABLE IF EXISTS `cadastro_bebidas`;
CREATE TABLE IF NOT EXISTS `cadastro_bebidas` (
  `id_bebida` int(100) NOT NULL AUTO_INCREMENT,
  `Nome da bebida` varchar(100) NOT NULL,
  `Quantidade` varchar(100) NOT NULL,
  `Valor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bebida`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcioarios`
--

DROP TABLE IF EXISTS `funcioarios`;
CREATE TABLE IF NOT EXISTS `funcioarios` (
  `id_func` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_func`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcioarios`
--

INSERT INTO `funcioarios` (`id_func`, `email`, `senha`, `nome`) VALUES
(1, 'administrador@hotmail.com', 'adm123', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

DROP TABLE IF EXISTS `teste`;
CREATE TABLE IF NOT EXISTS `teste` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_de_nascimento` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id`, `nome`, `data_de_nascimento`, `cpf`, `endereco`, `email`, `senha`) VALUES
(1, 'Usuario 1', '', '', 'Rua Rio', 'teste@gmail.com', 'dieimes2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
