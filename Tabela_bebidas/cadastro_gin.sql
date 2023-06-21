-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jun-2023 às 11:06
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_gin`
--

DROP TABLE IF EXISTS `cadastro_gin`;
CREATE TABLE IF NOT EXISTS `cadastro_gin` (
  `id_gin` int NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(200) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_gin`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cadastro_gin`
--

INSERT INTO `cadastro_gin` (`id_gin`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(2, 'Gin Tanqueray London Dry 750 ml', '23', '', 'recebidos/6492d4b7571ab.webp', 'R$124,00'),
(3, 'Gin Bombay Sapphire 1000 ml', '23', '', 'recebidos/6492d52d03022.webp', 'R$146,00'),
(4, 'Gin Tanqueray Ten 750 ml', '34', '', 'recebidos/6492d57204427.webp', 'R$233,00'),
(5, ' Gin Bombay 1761 The Original 1000 ml', '23', '', 'recebidos/6492d5e888e21.webp', 'R$179,00'),
(6, 'Gin Whitley Neill Watermelon - Kiwi 700 ml', '34', '', 'recebidos/6492d64122200.webp', '187,00'),
(7, 'Gin Whitley Neill Bood Orange 700 ml', '23', '', 'recebidos/6492d67cac3b4.jpg', 'R$178,00'),
(8, 'Gin Pink Royal 700 ml', '34', '', 'recebidos/6492d6c899afc.jpg', 'R$190,00'),
(9, 'Gin Black Tomato 500 ml', '27', '', 'recebidos/6492d71b2a015.webp', 'R$409,00'),
(10, 'Gin Bombay Bramble 700 ml', '21', '', 'recebidos/6492d75fd87b9.jpg', 'R$129,00'),
(11, 'Gin Bombay Star Of 750 ml', '25', '', 'recebidos/6492d793aa998.webp', 'R$230,00'),
(12, 'Gin Fifty Pounds 750 ml Lata Amarela', '43', '', 'recebidos/6492d7ca609e1.webp', 'R$398,00'),
(13, 'Gin Puerto De Indias Black Edition 700 ml', '20', '', 'recebidos/6492d809be769.webp', 'R$220,00'),
(14, 'Gin Puerto De Indias Black Edition 700 ml', '20', '', 'recebidos/6492d8c46a9e6.webp', 'R$220,00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
