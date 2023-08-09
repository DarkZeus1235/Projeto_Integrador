-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Ago-2023 às 10:42
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
-- Banco de dados: `banco_teste`
--
CREATE DATABASE IF NOT EXISTS `banco_teste` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `banco_teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `nome` varchar(50) NOT NULL,
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `data_nasc` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `turma` varchar(10) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `curso` varchar(35) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`nome`, `id_aluno`, `data_nasc`, `sexo`, `turma`, `cpf`, `telefone`, `endereco`, `email`, `curso`) VALUES
('Van der Sar', 1, '2023-08-03', 'Masculino', 'info', '1324456567', '(43)563865868', 'Rua Vasco da Gama, 24', 'vanderrsar@gmail.com', 'info'),
('Luiz', 2, '2023-08-11', 'Masculino', 'info', '2223232322', '(43)90685868', 'Rua Juan Chupa Pinto', 'luizzzz@gmail.com', 'info'),
('Pacho Herrera Escobar', 3, '2033-08-18', 'Masculino', 'info', '555674642', '(43)9963824', 'Avenida Norte dell Vale', 'pachoHerreraEs@gmail.com', 'info');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `nome` varchar(200) NOT NULL,
  `Id_curso` int(200) NOT NULL AUTO_INCREMENT,
  `Carga_horaria` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `turno` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

DROP TABLE IF EXISTS `professores`;
CREATE TABLE IF NOT EXISTS `professores` (
  `id_professor` int(200) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `salario` varchar(200) NOT NULL,
  `area_atuacao` varchar(200) NOT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `nome`, `salario`, `area_atuacao`) VALUES
(1, 'Cleberto De las Visconseras', '24555553564346', 'zelador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
