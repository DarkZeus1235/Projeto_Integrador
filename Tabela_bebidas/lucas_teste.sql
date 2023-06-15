-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Jun-2023 às 15:12
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
  `username` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_login`, `email`, `senha`, `nome`, `username`, `cpf`, `endereco`) VALUES
(1, 'joaquim@sagionetti', 'joaquim', 'Joaquim Pedro Klima Sagionetti', '', '11213131', 'Avenida Brasil'),
(2, 'dieimes@teste.com', 'dieimes', 'Dieimes Nunes', '', '11123131', 'Rua Rio'),
(3, 'admin@hotmail.com', 'admin123', 'administrador', '', 'ADM', 'ADM'),
(4, 'dieimes@dieimes', 'dieimes123', 'Dieimes Nunes', 'KungFu', '11213131', 'Avenida Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_bebidas`
--

DROP TABLE IF EXISTS `cadastro_bebidas`;
CREATE TABLE IF NOT EXISTS `cadastro_bebidas` (
  `id_bebida` int(100) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(100) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bebida`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_bebidas`
--

INSERT INTO `cadastro_bebidas` (`id_bebida`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(26, 'Conhaque SÃ£o JoÃ£o da Barra', '45', 'Uma bebida muito forte e estimulante.', 'recebidos/64870973f4052.webp', 'R$200,00'),
(27, 'UÃ­suqe', 'dada', 'dada', 'recebidos/64886385eb962.png', 'dada'),
(25, 'Vodka', '5', 'Uma bebida forte e intensa, bem alcoolizada.', 'recebidos/648708aa75bf0.jpg', 'R$120');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_uisque`
--

INSERT INTO `cadastro_uisque` (`id_uisque`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(12, 'Whisky Bastille 1789 - 1000 ml', '9', ' Feito de uma mistura de cevada malteada e de trigo originada inteiramente do noroeste da FranÃ§a.', 'recebidos/648b21381f60d.webp', 'R$ 525,90'),
(3, 'Buffalo Trace Bourbon Whiskey 1000ml', '12', 'Os aromas e sabores do Buffalo Trace sao marcados por notas de laranja, caramelo, mel, baunilha e milho.', 'recebidos/648b1c0469b4f.webp', 'R$290,00'),
(13, 'Whisky Buchanan\'s Red Seal 750 ml', '12', 'O famoso whisky da coroaÃ§Ã£o do rei Edward VII. Os maltes e graos de whisky utilizados descansam por, no minimo, 18 anos.', 'recebidos/648b217ac3426.webp', 'R$1.806,90'),
(11, 'Whisky Highland Park 12 Anos Single Malt 700 ml', '5', 'Um Whisky escocÃªs amadurecido predominantemente em barris de carvalho.', 'recebidos/648b20e28aad0.jpg', 'R$ 650,90'),
(10, 'Whisky The Macallan Enigma 700 ml', '7', 'O malte oferece carvalho maduro com sutilezas de canela, baunilha e frutas secas.', 'recebidos/648b1fb07385b.jpg', 'R$ 3.286,90'),
(14, 'Whisky Buchanan\'s Finest Blended 1000 ml\r\nR$190,00', '32', 'Um Ã³timo Whisky escocÃªs, para os melhores apreciadores!', 'recebidos/648b222f7d2e8.webp', 'R$ 188,90'),
(15, 'Whisky Johnnie Walker Blue Label 750 ml + 2 Copos', '6', 'Ã‰ o whisky mais complexo e premium da famÃ­lia Johnnie Walker.', 'recebidos/648b2330ceee8.webp', 'R$ 1.813,41'),
(16, 'Whisky The Macallan David Carson Concept NÂº3 - 700 ml', '8', 'Conceito nÂº 3 delÃ­cias com notas de pÃªra, canela e baunilha.', 'recebidos/648b2361cf4de.jpg', 'R$ 2.862,81'),
(17, 'Whisky Kura Blended Malt Rum Cask 700 ml', '18', 'Ã‰ um whisky de malte misturado feito com cevada maltada, fermento e Ã¡gua.', 'recebidos/648b23a63513b.jpg', 'R$ 743,31'),
(18, 'Whisky Dalmore Premium 18 Anos 700 ml', '5', 'Robusto e formidÃ¡vel, o verdadeiro Whisky escocÃªs.', 'recebidos/648b241b8ee35.webp', 'R$ 3.999,80'),
(19, 'Whisky Jack Daniel\'s 3000 ml', '8', 'O envelhecimento em Barris de Carvalho novos, lhe confere um sabor suave e marcante.', 'recebidos/648b256c315a5.webp', 'R$ 1.600,01'),
(20, 'Whisky Ballantines 17 Anos 750 ml', '9', 'Primeiro e mais premiado blended scotch whisky de 17 anos do mundo.', 'recebidos/648b261f54472.webp', 'R$ 498,90');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_vinhos`
--

DROP TABLE IF EXISTS `cadastro_vinhos`;
CREATE TABLE IF NOT EXISTS `cadastro_vinhos` (
  `id_vinho` int(11) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(100) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_vinho`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_vinhos`
--

INSERT INTO `cadastro_vinhos` (`id_vinho`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(3, 'Vinho Caballo Loco Nº 17 750 ml', '4', 'e roxo', 'recebidos/6488686517e67.jpg', 'R$627,00'),
(5, 'Vinho Pispi Blend Tinto 750 ml', '4', 'dadadada', 'recebidos/648869edbf0a3.jpg', 'R$110,00'),
(7, 'Vinho Mau Criado Malbec 750 ml 2019', '5', 'e roxo', 'recebidos/64886c0f93cb1.jpg', 'R$486,00'),
(8, 'Vinho Tonel 78 Malbec Bonarda 750 ml', '5', 'e roxo', 'recebidos/64886d8030ca1.webp', 'R$129,00'),
(9, 'Vinho Caballo Loco Grand Cru Sagrada Familia 750 ml', '8', 'e grande', 'recebidos/64886e5443b4e.jpg', 'R$355,00'),
(10, 'Vinho Zuccardi Concreto Malbec 750 ml', '6', 'e grande', 'recebidos/64886ea45e0e7.webp', 'R$536,90'),
(13, 'Vinho Marques De Riscal Reserva Rioja 750 ml', '6', 'e roxo', 'recebidos/64899900647bb.jpg', 'R$192,00'),
(14, 'Vinho Casillero Del Diablo Reserva Privada', '6', 'dadadada', 'recebidos/6489994ff0b8a.webp', 'R$112,00'),
(15, 'Vinho Santa Rita Casa Real Cabernet Sauvignon 750 m', '6', 'e roxo', 'recebidos/648999adb6d71.jpg', 'R$112,00'),
(16, 'Vinho Kaiken Ultra Merlot 750 ml', '5', 'e roxo', 'recebidos/64899afc922d7.jpg', 'R$159,00'),
(17, ' Vinho Caballo Loco Grand Cru Apalta 750 ml', '6', 'e roxo', 'recebidos/64899baa79686.jpg', 'R$320,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_vodka`
--

DROP TABLE IF EXISTS `cadastro_vodka`;
CREATE TABLE IF NOT EXISTS `cadastro_vodka` (
  `id_vodka` int(200) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(200) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_vodka`)
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
