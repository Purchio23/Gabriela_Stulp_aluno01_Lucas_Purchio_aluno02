-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_aula
CREATE DATABASE IF NOT EXISTS `db_aula` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_aula`;

-- Copiando estrutura para tabela db_aula.reuniao
CREATE TABLE IF NOT EXISTS `reuniao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `data` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `servico` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `nome` varchar(50) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `descricao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

-- Copiando dados para a tabela db_aula.reuniao: ~3 rows (aproximadamente)
INSERT INTO `reuniao` (`id`, `titulo`, `data`, `horario`, `servico`, `nome`, `email`, `telefone`, `descricao`) VALUES
	(1, 'aaa', '2023-04-10', '06:00:21', 'Selecione o Serviço que deseja', 'LUCAS DA SILVA LUCAS PURCHIO', 'lucassilvapurchio11@gmail.com', '49984172104', 'aaaaaaaaaaaaaaaaaaaaaaaa'),
	(2, 'aaa', '2023-05-01', '01:20:00', 'Gestão de Tráfego', 'LUCAS DA SILVA LUCAS PURCHIO', 'lucassilvapurchio11@gmail.com', '49984172104', 'Venda de mercadoria a não contribuinte');

-- Copiando estrutura para tabela db_aula.trabconosco
CREATE TABLE IF NOT EXISTS `trabconosco` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `CPF` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `funcao` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

-- Copiando dados para a tabela db_aula.trabconosco: ~5 rows (aproximadamente)
INSERT INTO `trabconosco` (`id`, `nome`, `email`, `telefone`, `CPF`, `funcao`) VALUES
	(10, 'LUCAS DA SILVA LUCAS PURCHIO', 'lucassilvapurchio11@gmail.com', '49984172104', '13168792918', 'Gestor de Tráfego'),
	(12, 'LUCAS DA SILVA LUCAS PURCHIO', 'lucassilvapurchio11@gmail.com', '54444444', '0000000000', ' Social Media'),
	(13, 'Maria Terezinha Vieira Da Silva', 'lucassilvapurchio11@gmail.com', '4999999999', '12345678911', 'Selecione sua função'),
	(14, 'LUCAS DA SILVA LUCAS PURCHIO', 'lucassilvapurchio11@gmail.com', '49984172104', '1234567891', ' Social Media');

-- Copiando estrutura para tabela db_aula.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `cpf` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

-- Copiando dados para a tabela db_aula.usuario: ~4 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome`, `telefone`, `cpf`) VALUES
	(5, 'LUCAS DA  PURCHIO', '49984172104', '13168792918'),
	(6, 'Gabriela', '(49) 988688013', '1234567891'),
	(7, 'Arthur', '219999999', '123131313'),
	(8, 'Maria Terezinha Vieira Da Silva', '(49) 999981502', '13168792918');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
