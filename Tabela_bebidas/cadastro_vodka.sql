-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jun-2023 às 11:10
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
