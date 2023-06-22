-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Jun-2023 às 13:55
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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
(7, 'Whisky Dalmore 18 anos', '14', 'Ã‰ um whisky bem equilibrado, com uma boa combinaÃ§Ã£o de doÃ§ura e especiarias.', 'recebidos/649312aa635ca.webp', 'R$ 575,90'),
(8, 'Whisky Buffalo Trace', '14', 'O envelhecimento em Barris de Carvalho novos, lhe confere um sabor suave e marcante.', 'recebidos/6494505b45efa.webp', 'R$ 374,68'),
(9, 'Whisky Jack Daniel\'s', '259', ' Um sabor verdadeiramente delicado e distinto, inspirado nos sabores tropicais do prÃ³prio carvalho americano.', 'recebidos/649450fe19e48.webp', 'R$ 1.278,90'),
(10, 'Whisky Bastille Single Malt ', '59', 'Ã‰ produzido a partir de cevada de primavera cultivada no nordeste da FranÃ§a.', 'recebidos/649451c107faf.webp', 'R$ 585,90'),
(11, 'Whisky The Macallan Enigma ', '609', 'O intenso malte oferece carvalho maduro com sutilezas de canela, baunilha e frutas secas.', 'recebidos/649452279430f.jpg', 'R$ 3.286,90'),
(12, 'Whisky Ballantines 17 Anos ', '999999', ' Envelhecido por 17 anos com uma textura frutada e aveludada vindo de frutas frescas.', 'recebidos/6494528c7b621.webp', 'R$495,90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
