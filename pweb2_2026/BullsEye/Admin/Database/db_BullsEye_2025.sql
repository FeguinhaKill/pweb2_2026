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


-- Copiando estrutura do banco de dados para db_bullseye_2025_2
CREATE DATABASE IF NOT EXISTS `db_bullseye_2025_2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_bullseye_2025_2`;

-- Copiando estrutura para tabela db_bullseye_2025_2.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL,
  `formato` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_bullseye_2025_2.categorias: ~8 rows (aproximadamente)
INSERT INTO `categorias` (`id`, `formato`) VALUES
	(1, 'Pistolas'),
	(2, 'Revolveres'),
	(3, 'Rifles'),
	(4, 'Carabinas'),
	(5, 'Submetralhadoras'),
	(6, 'Espingardas'),
	(7, 'Munições'),
	(8, 'Acessórios');

-- Copiando estrutura para tabela db_bullseye_2025_2.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `descricao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `preco` int NOT NULL,
  `categoria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `mecanismo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `categoria_id` int DEFAULT '0',
  `mecanismo_id` int DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_produtos_tipomecanismo` (`mecanismo_id`),
  KEY `FK_produtos_categorias` (`categoria_id`),
  CONSTRAINT `FK_produtos_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `FK_produtos_tipomecanismo` FOREIGN KEY (`mecanismo_id`) REFERENCES `tipomecanismo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_bullseye_2025_2.produtos: ~2 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `categoria`, `mecanismo`, `categoria_id`, `mecanismo_id`) VALUES
	(10, 'fuzil', 'fuzil super poderoso', 12000, '0', '0', 3, 1),
	(11, 'Pistola', 'Pistola medonhas', 3900, '0', '0', 1, 3);

-- Copiando estrutura para tabela db_bullseye_2025_2.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `descricao` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `duracao` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `preco` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_bullseye_2025_2.servicos: ~2 rows (aproximadamente)
INSERT INTO `servicos` (`id`, `nome`, `descricao`, `duracao`, `preco`) VALUES
	(3, 'conserto', 'aefreb', '12', 11),
	(5, 'avaliação', 'sask;lj', '5', 123);

-- Copiando estrutura para tabela db_bullseye_2025_2.tipomecanismo
CREATE TABLE IF NOT EXISTS `tipomecanismo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_bullseye_2025_2.tipomecanismo: ~5 rows (aproximadamente)
INSERT INTO `tipomecanismo` (`id`, `nome`) VALUES
	(1, 'AEG'),
	(2, 'Gás'),
	(3, 'Spring'),
	(4, 'Mecânica'),
	(5, 'Eletropneumáticas');

-- Copiando estrutura para tabela db_bullseye_2025_2.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cpf` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `login` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_bullseye_2025_2.usuario: ~2 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome`, `cpf`, `telefone`, `email`, `login`, `senha`) VALUES
	(19, 'admin', '1241352', '49991079353', 'admin@admin.com', 'admin1', '$2y$10$dPptyhok24Jniqmi8TnWJegKSzPvxso1IBrbarx8MQWPFTV77w1Xq'),
	(21, 'admin2', '12423534754', '3468568', 'Chu@Passeios.com', 'admin2', '$2y$10$bawVm4sB5mnhUUIt0zb././0ZgP06RNti3r0.zuhqW4qakEHcpG/u');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
