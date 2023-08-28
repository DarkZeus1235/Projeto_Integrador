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
-- Estrutura da tabela `cadastro_champ`
--

DROP TABLE IF EXISTS `cadastro_champ`;
CREATE TABLE IF NOT EXISTS `cadastro_champ` (
  `id_champ` int NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(200) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_champ`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cadastro_champ`
--

INSERT INTO `cadastro_champ` (`id_champ`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(3, ' Champagne Veuve Clicquot Brut 375 ml', '42', '', 'recebidos/6491a02d928a7.webp', 'R$292,00'),
(2, 'Champagne Louis Roederer Cristal Rose 750 ml 2006', '6', '', 'recebidos/64919ed2167ae.webp', 'R$5.700,00'),
(4, 'Champagne Laurent Perrier Grand Siecle 750 ml', '8', '', 'recebidos/6491a0aba2313.jpg', 'R$1.456,00'),
(5, 'Champagne Laurent-Perrier Demi Seco 750 ml', '45', '', 'recebidos/6491a10991b4a.webp', 'R$644,00'),
(11, 'Champagne Veuve Clicquot Brut com Cartucho 750 ml', '23', '', 'recebidos/6491a470980cb.webp', 'R$529,00'),
(10, ' Champagne Moet Chandon Ice Imperial Rose 750 ml', '25', '', 'recebidos/6491a405458fe.webp', 'R$523,00'),
(8, 'Champagne Moet Chandon Brut Impérial Rosé 750 ml', '23', '', 'recebidos/6491a24505370.webp', 'R$566,00'),
(9, 'Champagne Moet Chandon Nectar Imperial Demi Sec 750 ml', '23', '', 'recebidos/6491a36a2650f.webp', 'R$477,00'),
(12, 'Champagne Veuve Clicquot Demi Sec 750 ml', '19', '', 'recebidos/6491a4d99da78.jpg', 'R$500,00'),
(13, 'Champagne Veuve Clicquot Brut Ice Jacket 750 ml', '27', '', 'recebidos/6491a53f40dc2.jpg', 'R$600,00'),
(14, 'Champagne Veuve Clicquot Rose Brut 750 ml', '34', '', 'recebidos/6491a5e657807.jpg', 'R$530,00'),
(15, 'Champagne Perrier Jouet Grand Brut 750 ml', '33', '', 'recebidos/6491a65392921.webp', 'R$455,00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
