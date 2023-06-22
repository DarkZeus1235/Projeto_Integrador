-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Jun-2023 às 15:03
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
-- Estrutura da tabela `cadastro_rum`
--

DROP TABLE IF EXISTS `cadastro_rum`;
CREATE TABLE IF NOT EXISTS `cadastro_rum` (
  `id_rum` int(200) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(200) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_rum`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_rum`
--

INSERT INTO `cadastro_rum` (`id_rum`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(17, 'Rum Bacardi 8 Anos ', '26', ' O rum BacardÃ­ Ocho possui um perfil complexo, harmÃ´nico e suave.', 'recebidos/64945e8667ec5.webp', 'R$ 267,80'),
(16, 'Rum Kraken ', '29', 'Como a tinta usada pela fera do mar para cobrir sua presa, o rum kraken Ã© poderoso, escuro e suave.', 'recebidos/64945e4570bba.webp', 'R$ 299,90'),
(15, 'Rum Havana Club ', '98', 'Ã‰  o rum tradicional cubano, com a cor adequada para ser utilizado em diversos coquetÃ©is.', 'recebidos/64945dc660838.webp', 'R$ 479,90'),
(14, 'Rum Wild Tiger Spiced ', '59', 'Ã‰ uma marca de rum premium da Ãndia que lanÃ§ou seu primeiro rum com especiarias,', 'recebidos/64945d71cc8cc.webp', 'R$ 498,00'),
(13, 'Rum Angostura Reserva', '29', 'Ã‰ um dos mais conceituados produtores de Rum do Caribe e lÃ­der mundial na produÃ§Ã£o de bitters.', 'recebidos/64945d1d3a776.webp', 'R$ 198,90'),
(12, 'Rum Appleton Estate', '49', 'Ã‰ um autÃªntico Rum Jamaicano feito nas montanhas de Cockpit Country.', 'recebidos/64945ce7350e0.webp', 'R$ 329,00'),
(11, 'Rum Pyrat Xo Reserve', '28', 'Ã‰ um dos melhores runs das ilhas do Caribe, com um sabor  doce e cÃ­trico.', 'recebidos/64945c591ecba.webp', 'R$ 296,01'),
(9, 'Rum Zacapa Centenario ', '35', 'O rum mais especial da linha permanente da renomada destilaria de Guatemala.', 'recebidos/64945b7b1aac6.webp', 'R$ 495,90'),
(18, 'Rum Dos Maderas 5+3 700', '68', 'Rum envelhecido com um processo de maturaÃ§Ã£o em dois estÃ¡gios. ', 'recebidos/64945ed430f0e.webp', 'R$ 285,90'),
(19, 'Rum Captain Morgan Dark', '999', 'O tradicional rum caribenho escuro, envelhecido por atÃ© 7 anos em barris antigos.', 'recebidos/64945f249b37e.webp', 'R$ 316,39'),
(20, 'Rum Angostura 1919', '35', 'E nomeado dessa forma em referencia a um incendio ocorrido na destilaria. ', 'recebidos/6494619cefd8e.webp', 'R$ 445,99'),
(21, 'Rum Bacardi Carta Oro', '78', 'Possui aromas de baunilha e frutas tropicais, ideal para elaboraÃ§Ã£o de coquetÃ©is.', 'recebidos/6494626a0e3e2.webp', 'R$ 198,90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
