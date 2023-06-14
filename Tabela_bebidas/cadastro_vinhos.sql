-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jun-2023 às 11:05
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
-- Estrutura da tabela `cadastro_vinhos`
--

DROP TABLE IF EXISTS `cadastro_vinhos`;
CREATE TABLE IF NOT EXISTS `cadastro_vinhos` (
  `id_vinho` int NOT NULL AUTO_INCREMENT,
  `nome_bebida` varchar(100) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `arquivo_caminho` varchar(200) NOT NULL,
  `valor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_vinho`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
