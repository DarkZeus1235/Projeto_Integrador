-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jun-2023 às 15:13
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_uisque`
--

DROP TABLE IF EXISTS `cadastro_uisque`;
CREATE TABLE IF NOT EXISTS `cadastro_uisque` (
  `id_uisque` int(200) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(200) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_uisque`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_uisque`
--

INSERT INTO `cadastro_uisque` (`id_uisque`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(1, 'Whisky Johnnie Walker Blue Label 750 ml + 2 Copos', '28', 'Blue Label Ã© o Ã¡pice dos whiskies da Casa de Walker â€“ a epÃ­tome da arte de preparar blends.', 'recebidos/64930c99584e9.webp', 'R$ 2.014,90'),
(2, 'Whisky The Macallan David Carson Concept NÂº3 - 700 ml', '35', 'Conceito nÂº 3 delÃ­cias com notas de pÃªra, canela e baunilha. ', 'recebidos/64930cfd6580c.jpg', 'R$ 3.180,90'),
(3, 'Whisky Kura Blended Malt Rum Cask 700 ml', '38', 'Ã‰ um whisky de malte misturado feito com cevada maltada, fermento e Ã¡gua.', 'recebidos/64930d52ce246.jpg', ' R$ 825,90'),
(4, 'Whisky Buchanan\'s Finest Blended', '14', 'Um Ã³timo Whisky escocÃªs, para os melhores apreciadores!', 'recebidos/64930da78a594.webp', 'R$ 214,90'),
(5, ' Whisky Glenfiddich 18 Anos', '14', 'Ã‰ um whisky escocÃªs com um toque adocicado e frutado da madeira espanhola Oloroso.', 'recebidos/6493106a0e251.webp', 'R$ 748,90'),
(6, 'Whisky Buchanan\'s Red Seal', '21', ' Um whisky excepcionalmente rico, liso foi requerido para a coroaÃ§Ã£o do rei Edward VII.', 'recebidos/649311624fec8.webp', 'R$ 1.650,90'),
(7, 'Whisky Dalmore 18 anos', '14', 'Ã‰ um whisky bem equilibrado, com uma boa combinaÃ§Ã£o de doÃ§ura e especiarias.', 'recebidos/649312aa635ca.webp', 'R$ 575,90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
