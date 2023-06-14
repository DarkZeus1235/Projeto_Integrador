-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jun-2023 às 11:01
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
-- Estrutura da tabela `cadastro_conhaque`
--

DROP TABLE IF EXISTS `cadastro_conhaque`;
CREATE TABLE IF NOT EXISTS `cadastro_conhaque` (
  `id_conhaque` int(100) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(100) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_conhaque`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_conhaque`
--

INSERT INTO `cadastro_conhaque` (`id_conhaque`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(1, 'Conhaque Martell Vsop 700 ml', '4', 'Um conhaque elegante para o seu par.', 'recebidos/64886cf245267.webp', 'R$408,90'),
(2, 'Conhaque Comte Joseph VS 700 ml', '2', 'Uma elegante bebida destilada para degustacao.', 'recebidos/64886d59cf0ad.jpg', 'R$806,90'),
(3, 'Conhaque Hennessy Vsop Cognac 700 ml', '5', 'O elegante conhaque frances esta na nossa loja.', 'recebidos/64886f2409951.webp', 'R$ 753,90'),
(5, 'Conhaque Casa Valduga Xv Anos 700 ml', '8', 'Elegante, requintado, expressivo e potente.', 'recebidos/648997e880ac6.webp', 'R$ 575,90'),
(4, 'Conhaque Fundador Solera Reserva 750 ml', '9', 'Um Ã³timo conhaque e um bom preÃ§o.', 'recebidos/648996979a5c9.webp', 'R$ 128,90'),
(6, 'Conhaque RÃ©my Martin V.S.O.P 700 ml', '10', 'Um conhaque francÃªs fino de cor amarelo-ouro, Ã¢mbar.', 'recebidos/6489988db692f.webp', 'R$ 398,00'),
(7, 'Conhaque Osborne Brandy 700 ml', '20', 'O destilado ideal para curtir bons momentos.', 'recebidos/648998e6c2247.webp', 'R$ 160,90'),
(8, 'Conhaque Bache - Gabrielsen ', '12', 'Com um sabor delicado e distinto.', 'recebidos/648999afe007d.webp', 'R$ 374,68'),
(9, 'Conhaque Cortel Brandy XO 700 ml', '23', 'Um destilado de uvas vinÃ­feras francesas.', 'recebidos/64899b5247888.webp', 'R$ 308,36'),
(10, 'Conhaque Courvoisier Cognac VS 700 ml', '19', 'O elegente conhaque referido como \"O Cognac de NapoleÃ£o\".', 'recebidos/64899be2395bb.webp', 'R$ 846,29'),
(11, 'Conhaque Cortel Napoleon Vsop 700 ml', '25', 'Um Ã³timo conhaque, perfeito para noites de inverno!', 'recebidos/64899cce2dac4.webp', 'R$ 158,90'),
(12, 'Conhaque Cortel Brandy XO Superior 700 ml', '18', 'Com aromas elegantes de uva e um paladar muito refinado e harmÃ´nico.', 'recebidos/64899db2dab91.jpg', 'R$ 375,36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
