-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Out-2023 às 14:43
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
-- Banco de dados: `projeto_integrador`
--
CREATE DATABASE IF NOT EXISTS `projeto_integrador` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projeto_integrador`;

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
  `telefone` varchar(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `foto_perfil_caminho` varchar(300) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_login`, `email`, `senha`, `nome`, `telefone`, `username`, `cpf`, `endereco`, `foto_perfil_caminho`) VALUES
(37, 'dirsel@gmail.com', '$2y$10$7W5QCSu.p.MkM1FClSKRYecx32b/vUBSq1VDW4vbPs0/jZiqYYc4q', 'Dirsel da silva', '(43) 99433-4325', 'Dirsel', '423.527.533-67', 'Monte Castel', 'Imagens/foto_padrao.png'),
(2, 'zere01011@gmail.com', '$2y$10$L/G.K5/aYz1w6BLRflHYXea1zulN4xLeJaPT0GnDrmhWK9mqU2afG', 'Matheus Henrique Vital', '(43) 99433-4325', 'Zere_br', '423.527.533-67', 'Monte Castel', ''),
(3, 'zeres@gmail.com', '$2y$10$E/er/WwCByeuzZVVHpcBsefNXfjQaH.JjY9gjWMV38E/BHrStQtYG', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'zere', ''),
(4, 'dieimes@dieimes', '$2y$10$Kp3sz0hFL9eLUhzglpauzeFV4FMdxdSAZDvyO1O5CEgcyXx2ELpgq', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '123.123.123-12', 'Monte Castel', ''),
(5, 'zere01011@gmail.com', '$2y$10$nsqq7..OJD5RjBbhTJWQaur2l5091dMERSHCFG0e0SaWMSh9Tlq6K', 'Matheus Henrique Vital', '(43) 99433-4325', 'clecle', '423.527.533-67', 'Avenida Brasil', ''),
(6, 'zeres@gmail.com', '$2y$10$0IYKw1TtMlasvTQNq2ya7exxQdMahz00ba6XvVXYhtwBW6V5ecTYK', 'Cleverson ', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', ''),
(7, 'zere@gmail.com', '$2y$10$9LFqFPxmmsfjtPdEJ4YwtunJqrv8oYKyY6njl45ZZknNiJ75HIwcu', 'Cleverson ', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', ''),
(8, 'zere@gmail.com', '$2y$10$9LFqFPxmmsfjtPdEJ4YwtunJqrv8oYKyY6njl45ZZknNiJ75HIwcu', 'Cleverson ', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', ''),
(9, 'cleverson@gmail.com', '$2y$10$ygK6UuxhLnuYThdr3Ngzl.XJrEVAch0NAdPHnTMM1IqfWbH71bccG', 'Cleverson ', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', ''),
(10, 'cleverson@gmail.com', '$2y$10$ygK6UuxhLnuYThdr3Ngzl.XJrEVAch0NAdPHnTMM1IqfWbH71bccG', 'Cleverson ', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', ''),
(11, 'dieimes@dieimes', '$2y$10$2jZK2Hmnps63jsslZsQZWeRX1opTmYmhfWAR7QaWCh9KYoqkcvvnu', 'Cleverson ', '(43) 99433-4325', 'zere', '443.122.333-52', 'Monte Castel', ''),
(12, 'dieimes@dieimes', '$2y$10$Ws8dtHLqhC3biqxoIFJ7uulYnN.xxUWnns9/l6utdfIYNUmCC/CN.', 'Cleverson ', '(43) 99433-4325', 'zere', '443.122.333-52', 'Monte Castel', ''),
(13, 'zere01011@gmail.com', '$2y$10$5RN7LbJ48l2VILGE8Kscpuu.hKCsk7DQVTl0r0FInWHljYVxQ2FqC', 'Dieimes Nunes de Souza', '(43) 99433-4325', 'clecle', '443.122.333-52', 'Avenida Brasil', ''),
(14, 'zere@gmail.com', '$2y$10$GeL.6jgSZ/VUFxpH2Jiht.bk9m4qlXEJrEbYK5bdEdHDJ0eO4guLG', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '123.123.123-12', 'Monte Castel', ''),
(15, 'cleverson@gmail.com', '$2y$10$kgSNCj1NMuGJNLCp8.xe5e4WMJ037.JP1REQRubDWm9jKTJ.oxfnu', 'Matheus Henrique Vital', '(43) 99433-4325', 'zere', '423.527.533-67', 'Monte Castel', ''),
(16, 'zeres@gmail.com', '$2y$10$fyf1EL7rBOg2uSNL7FYWg.muWPhSDBM7Tphat6yHYWF8Gb8EDMiPi', 'Matheus Henrique Vital', '(43) 99433-4325', 'clecle', '423.527.533-67', 'Avenida Brasil', ''),
(17, 'zere@gmail.com', '$2y$10$l1YYiTQhmnNwz7UspfyF2OqklqJ2xW.tCwF3L86xoZ/ZlRWgDzxEy', 'Cleverson ', '(43) 99433-4325', 'Zere_br', '443.122.333-52', 'Avenida Brasil', ''),
(18, 'zere@gmail.com', '$2y$10$MvtVPBi5ghwdmyPQ29vufuT/tA9r2Hc.f4c..a3BF2g97XTqx9Exu', 'Cleverson ', '(43) 99433-4325', 'Zere_br', '443.122.333-52', 'Avenida Brasil', ''),
(19, 'cleverson@gmail.com', '$2y$10$Yyf2xd3Ge6qyvTacCl6fe.IN1juNaXLXDtAf2QLP5wDceRY1z7FQC', 'Cleverson ', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', ''),
(20, 'zere01011@gmail.com', '$2y$10$ZRUSwXTjoEb5s8w9PWfc8ujy3E6F9cmRl5Jc46sR4JEQr95kgTR8W', 'Dieimes Nunes de Souza', '(43) 99433-4325', 'Dieimes', '423.527.533-67', 'Avenida Brasil', ''),
(21, '11111@dadad', '$2y$10$HJ6bLQIXktYTJZDrgOijp.2j7aa1vaYE/MZp8kuzx7xwSyzva.tPO', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', ''),
(22, 'dieimes@dieimes', '$2y$10$Glj5datQChIzzYmh/ykWUOlavO9gvbaUM4RuZmJ07OwYAt0ZCK2Ua', 'Dieimes Nunes de Souza', '(43) 99433-4325', 'clecle', '443.122.333-52', 'Avenida Brasil', ''),
(23, 'criscris@dieimes', '$2y$10$X4Q8yoh2D4v37dIquB88POoiw4doPm6kvBIER9G5Vs6spncjmS7ia', 'Matheus Henrique Vital', '(45) 99898-8776', 'Cr7', '443.122.333-52', 'Monte Castel', ''),
(24, 'dieimes@dieimes', '$2y$10$0jJynhLheT0PYmt1Qu7Sv.J6TNSfUZMcA11lKQWpC8nbrKtk8i6gS', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '523.525.642-34', 'zere', ''),
(25, 'zere01011@gmail.com', '$2y$10$jORO30a52RPqUe2GkM16h.BKT7EeNF4iK9xLxHaHHsk2lvVItN4Zq', 'zere', '(43) 99433-4325', 'Dieimes', '423.527.533-67', 'Monte Castel', ''),
(26, 'jpfernandes@gmail.com', '$2y$10$rkBI07uy3bqN6/Dchb9pGeKhq/WSeXG1dUAHaVdwrCC59nelu7IUe', 'JoÃ£o Pedro Fernandes', '(43) 99650-6831', 'Jp', '114.434.889-76', 'Avenida Brasil', 'Imagens/ftperfil/651fe341efaa2.jpg'),
(27, 'zere010111111@gmail.com', '$2y$10$wRGScJE3Bh6wYWWskGpeAOK63P45gc0vStcMHpmPxQcKWCYtsLA0e', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '423.527.533-67', 'Monte Castel', 'Imagens/foto_padrao.png'),
(28, 'zere213@gmail.com', '$2y$10$l9hjEu5gRsxunTzyNY3PIORT3anAlkO8eKFG5KwwfIL8YIubnKdZu', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '123.123.123-12', 'Monte Castel', 'Imagens/foto_padrao.png'),
(29, 'zere3123@gmail.com', '$2y$10$b9CG7TkJTTO/s2a8A./WGuuNA9Dr0.0lh2HFR1WEOKMJEe7zgEcAu', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', 'Imagens/foto_padrao.png'),
(30, 'zere644@gmail.com', '$2y$10$/Mhj6/1.yD6tEBOtRo.eM.bgziOOE74w5VF4yXPpkyUhKQY7Kup/a', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', 'Imagens/foto_padrao.png'),
(31, 'zer5341@gmail.com', '$2y$10$iXXyoTEwLMsMnqoTPPPTIOoZvog6hSzU1d4iiik.MKVawAU4QJhFS', 'Dieimes Nunes de Souza', '(43) 99433-4325', 'clecle', '123.123.123-12', 'Monte Castel', 'Imagens/foto_padrao.png'),
(32, 'zere01110@gmail.com', '$2y$10$ZVKMHmA06tiDW0A7MaibieYxUJF2oiNlAkIe3iKlrCldtl3HmpRwa', 'Matheus Henrique Vital', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', 'Imagens/foto_padrao.png'),
(33, 'zere0101111111@gmail.com', '$2y$10$/wk8aTHEUOvfcD4s2lIiAeh16rBvVzmjnmbD8qnX.8nAZwwzGbyoK', 'Dieimes Nunes de Souza', '(43) 99433-4325', 'Dieimes', '443.122.333-52', 'Avenida Brasil', 'Imagens/foto_padrao.png'),
(34, 'zere032110@gmail.com', '$2y$10$QTmFUzWygLkgF2rWy1fKQ.xTHWFtUauYJVr1hbjszyLoGT7wSkWdG', 'Matheus Henrique Vital', '(43) 99433-4325', 'Zere_br', '443.122.333-52', 'Avenida Brasil', 'Imagens/foto_padrao.png'),
(35, 'zere0143160@gmail.com', '$2y$10$nABxcS.UkqfUeN8N65h.r.pmPTWeTJ25We7eR7pmrl6XzFR1NLZHm', 'zere', '(43) 99433-4325', 'Dieimes', '123.123.123-12', 'Avenida Brasil', 'Imagens/foto_padrao.png'),
(36, 'zere01086@gmail.com', '$2y$10$UxWQJIP1lga2Xy7c7AsHKuMK6wTq9KjrOKZjBzVZx4RXo5w3mcZHy', 'Dieimes Nunes de Souza', '(43) 99433-4325', 'clecle', '123.123.123-12', 'Avenida Brasil', 'Imagens/ftperfil/6523e45ecbca8.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_adm`
--

DROP TABLE IF EXISTS `cadastro_adm`;
CREATE TABLE IF NOT EXISTS `cadastro_adm` (
  `id_login_adm` int(200) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `funcao` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `foto_perfil_caminho` varchar(300) NOT NULL,
  PRIMARY KEY (`id_login_adm`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_adm`
--

INSERT INTO `cadastro_adm` (`id_login_adm`, `nome`, `funcao`, `email`, `senha`, `foto_perfil_caminho`) VALUES
(4, 'Administrador JoÃ£o', 'Administrador Geral', 'admin@hotmail.com', '$2y$10$yJWty84YANLS8qAdcEhBwO7mti/YGhQ5Ny8tYze/VCmrBTUfbGcQq', 'Imagens/ftperfil/651fe2b969308.jpg'),
(2, 'Matheus Henrique Vital', 'Administrador Vice', 'zere@gmail.com', '$2y$10$2DExTYMdWNh5rcjkyC/5AOewBGdwkKG9bmEUm1qjpgkegDEYEi2ju', ''),
(3, 'JoÃ£o Rafael de Carvalho Bissoloti (Jraffis)', 'Vice - LÃ­der e Vice - Administrador', 'jraffis@gmail.com', '$2y$10$fi44MPPKeoQplD3o6DCKKu1mpJwHdyLUnneSMikWEzLvcv6CTUHRO', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_bebidas`
--

INSERT INTO `cadastro_bebidas` (`id_bebida`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(32, 'Vinho Marques De Riscal Reserva Rioja 750 ml', '4', 'Vinho exÃ³tico e com sabor artesanal e produzido em boa safra.', 'recebidos/649457424fa56.jpg', 'R$192,00'),
(31, 'Vinho Mau Criado Malbec 750 ml 2019', '6', 'Um vinho artesanal produzido da melhor safra de uvas', 'recebidos/649456d3ab39d.jpg', 'R$486,00'),
(30, 'Conhaque Cortel Napoleon Vsop 700 ml', '3', 'Um Ã³timo conhaque, perfeito para noites de inverno!', 'recebidos/649456815abb2.webp', 'R$158,90'),
(29, 'Conhaque RÃ©my Martin V.S.O.P 700 ml', '4', 'Um conhaque francÃªs fino de cor amarelo-ouro, Ã¢mbar.', 'recebidos/64945643364d9.webp', 'R$398,00'),
(28, 'Conhaque Martell Vsop 700 ml', '4', 'Um conhaque elegante para o seu par.', 'recebidos/649450bcd1c77.webp', 'R$408,90'),
(33, 'Vinho Caballo Loco Grand Cru Sagrada Familia 750 ml', '4', 'Um vinho que foi inspirado em um artista renascentista.', 'recebidos/649457c018a78.jpg', 'R$355,00'),
(34, 'Vinho Kaiken Ultra Merlot 750 ml', '3', 'Um vinho em tons de cor mais escuros porÃ©m saborosos como sempre.', 'recebidos/6494584d875fb.jpg', 'R$159,00'),
(35, 'Whisky The Macallan David Carson Concept NÂº3 - 700 ml', '3', 'Conceito nÂº 3 delÃ­cias com notas de pÃªra, canela e baunilha.', 'recebidos/649458fac043a.jpg', 'R$ 3.180,90'),
(36, 'Whisky Kura Blended Malt Rum Cask 700 ml', '3', 'Ã‰ um whisky de malte misturado feito com cevada maltada, fermento e Ã¡gua.', 'recebidos/649459143ac3e.jpg', 'R$ 825,90'),
(37, 'Whisky Glenfiddich 18 Anos', '3', 'Ã‰ um whisky escocÃªs com um toque adocicado e frutado da madeira espanhola Oloroso', 'recebidos/649459a05d1c5.webp', 'R$ 748,90'),
(38, 'Champagne Laurent Perrier Grand Siecle 750 ml', '4', 'Um champanhe utilizado em comemoraÃ§Ãµes, um dos melhores', 'recebidos/649459e3ae5f5.jpg', 'R$1.456,00'),
(39, 'Champagne Moet Chandon Nectar Imperial Demi Sec 750 ml', '5', 'Um champanhe com cor mais escura, e saboroso.', 'recebidos/64945a0560f37.webp', 'R$477,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_champ`
--

DROP TABLE IF EXISTS `cadastro_champ`;
CREATE TABLE IF NOT EXISTS `cadastro_champ` (
  `id_champ` int(11) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(200) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_champ`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_gin`
--

DROP TABLE IF EXISTS `cadastro_gin`;
CREATE TABLE IF NOT EXISTS `cadastro_gin` (
  `id_gin` int(11) NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(200) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_gin`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

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
(13, 'Gin Puerto De Indias Black Edition 700 ml', '20', '', 'recebidos/6492d809be769.webp', 'R$220,00');

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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_vinhos`
--

INSERT INTO `cadastro_vinhos` (`id_vinho`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(3, 'Vinho Caballo Loco Nº 17 750 ml', '4', '', 'recebidos/6488686517e67.jpg', 'R$627,00'),
(5, 'Vinho Pispi Blend Tinto 750 ml', '4', '', 'recebidos/648869edbf0a3.jpg', 'R$110,00'),
(7, 'Vinho Mau Criado Malbec 750 ml 2019', '5', '', 'recebidos/64886c0f93cb1.jpg', 'R$486,00'),
(8, 'Vinho Tonel 78 Malbec Bonarda 750 ml', '5', '', 'recebidos/64886d8030ca1.webp', 'R$129,00'),
(9, 'Vinho Caballo Loco Grand Cru Sagrada Familia 750 ml', '8', '', 'recebidos/64886e5443b4e.jpg', 'R$355,00'),
(10, 'Vinho Zuccardi Concreto Malbec 750 ml', '6', '', 'recebidos/64886ea45e0e7.webp', 'R$536,90'),
(13, 'Vinho Marques De Riscal Reserva Rioja 750 ml', '6', '', 'recebidos/64899900647bb.jpg', 'R$192,00'),
(14, 'Vinho Casillero Del Diablo Reserva Privada', '6', '', 'recebidos/6489994ff0b8a.webp', 'R$112,00'),
(15, 'Vinho Santa Rita Casa Real Cabernet Sauvignon 750 m', '6', '', 'recebidos/648999adb6d71.jpg', 'R$112,00'),
(16, 'Vinho Kaiken Ultra Merlot 750 ml', '5', '', 'recebidos/64899afc922d7.jpg', 'R$159,00'),
(17, ' Vinho Caballo Loco Grand Cru Apalta 750 ml', '6', '', 'recebidos/64899baa79686.jpg', 'R$320,00'),
(24, 'Vinho Cechi La Mora Maremma Toscana 750 ml', '38', '', 'recebidos/6491a3039761d.jpg', 'R$198,00');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_vodka`
--

INSERT INTO `cadastro_vodka` (`id_vodka`, `nome_bebida`, `quantidade`, `descricao`, `arquivo_caminho`, `valor`) VALUES
(1, 'Vodka Stolichnaya Elit 700ml', '14', 'A Elit Ã© uma vodka da categoria Ultra Luxury, de pureza e maciez sem precedentes.', 'recebidos/6492d3378cdd5.webp', 'R$ 519,99'),
(2, 'Vodka Crystal Head ', '14', 'A vodka possui um aroma delicado de frutas cÃ­tricas, suave com um toque de baunilha.', 'recebidos/6492d3bd53900.webp', 'R$ 574,68'),
(3, 'Vodka Belvedere Intense', '14', 'A vodka polonesa possui notas sedutoras de baunilha, creme e caramelo.', 'recebidos/6492d478ccf21.webp', 'R$ 547,90'),
(4, ' Vodka Ed Hardy ', '12', 'Produzida na FranÃ§a, contÃ©m uma qualidade e sabor inigualÃ¡vel, sendo destilada e filtrada cinco vezes.', 'recebidos/6492d4ecb3378.webp', 'R$ 572,90'),
(5, 'Vodka Absolut Peppar', '14', 'A primeira vodka com sabor da famÃ­lia Absolut, e ainda, foi a primeira vodka com sabor do mundo.', 'recebidos/6492d5544f6c8.webp', 'R$ 139,90'),
(6, 'Vodka Ciroc Peach', '14', 'CÃ®roc Peach Ã© a tradicional CÃ®roc com infusÃ£o de uma mistura de pÃªssegos e outros aromatizantes naturais.', 'recebidos/6492d5f5cfa64.jpg', 'R$ 232,90'),
(7, 'Vodka Zernoff Mendeleev', '99', 'Ã‰ uma vodcka secular de sabor suave, tratada com elegancia, cheia de filosofia e sabedoria.', 'recebidos/6492d6614c602.webp', 'R$ 225,90'),
(8, 'Vodka Beluga Noble', '56', 'A Beluga Ã© uma vodka russa clÃ¡ssica, de sabor limpo e fresco, com sutis traÃ§os de grÃ£os', 'recebidos/6492d7a9a4cde.webp', 'R$ 396,36'),
(9, 'Vodka Absolut Natural ', '40', 'A Absolut Ã© uma vodka sueca produzida exclusivamente nas montanhas de Ã„hus.', 'recebidos/6492d820deecf.webp', 'R$ 1.016,01'),
(10, 'Vodka Russian Standard ', '40', 'A Vodka premium mais vendida na Russia, destilada e engarrafada em St. Petersburg.', 'recebidos/6492d88a4d22e.webp', ' R$ 174,90'),
(11, 'Vodka Roberto Cavalli', '59', ' Produzida a partir da seleÃ§Ã£o dos melhores grÃ£os de trigo cultivados nos vales do Piemonte.', 'recebidos/6492d98911156.webp', 'R$ 278,90'),
(12, 'Vodka Absolut Elyx ', '14', 'A verdadeira vodca de luxo, produzida nas montanhas glaciais da SuÃ©cia.', 'recebidos/6492da1ccae31.webp', 'R$ 1.020,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartoes`
--

DROP TABLE IF EXISTS `cartoes`;
CREATE TABLE IF NOT EXISTS `cartoes` (
  `id_cartao` int(200) NOT NULL AUTO_INCREMENT,
  `titular` varchar(200) NOT NULL,
  `numero_cartao` varchar(200) NOT NULL,
  `data_validade` varchar(200) NOT NULL,
  `cvv` varchar(200) NOT NULL,
  `cpf` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cartao`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cartoes`
--

INSERT INTO `cartoes` (`id_cartao`, `titular`, `numero_cartao`, `data_validade`, `cvv`, `cpf`) VALUES
(1, 'matheus vital', '3436  5476  4756  8756', '17/09', '233', '131.313.123-21'),
(2, 'matheus vital', '3436  5476  4756  8756', '17/09', '233', '131.313.123-21'),
(3, 'matheus vital', '3436  5476  4756  8756', '17/09', '111', '131.313.123-21'),
(4, 'Indoali', '1431  4134  3252  3524', '56/57', '542', '323.549.254-69'),
(5, 'Indoali', '1431  4134  3252  3524', '56/57', '542', '323.549.254-69'),
(6, 'JOÃƒO RAFAEL DE CARVALHO', '5427  4373  4327  4244', '14/31', '234', '323.549.254-69');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_formulario_contato`
--

DROP TABLE IF EXISTS `mensagem_formulario_contato`;
CREATE TABLE IF NOT EXISTS `mensagem_formulario_contato` (
  `id_mensagem` int(200) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagem_formulario_contato`
--

INSERT INTO `mensagem_formulario_contato` (`id_mensagem`, `nome`, `email`, `mensagem`) VALUES
(1, 'Joaquim', 'joaquim@gmail.com', 'Mensagem teste 4\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `codigo_pedido` int(200) NOT NULL AUTO_INCREMENT,
  `nome_pedido` varchar(200) NOT NULL,
  `data_pedido` varchar(200) NOT NULL,
  `valor_pedido` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo_pedido`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
