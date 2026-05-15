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


-- Copiando estrutura do banco de dados para trabalho_felipe_arthur
CREATE DATABASE IF NOT EXISTS `trabalho_felipe_arthur` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `trabalho_felipe_arthur`;

-- Copiando estrutura para tabela trabalho_felipe_arthur.acessorios
CREATE TABLE IF NOT EXISTS `acessorios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.acessorios: ~50 rows (aproximadamente)
INSERT INTO `acessorios` (`id`, `nome`, `preco`, `descricao`, `created_at`, `updated_at`, `imagem`) VALUES
	(1, '4x Prism Scope', 2500, 'Mira prismática 4x de alta precisão para rifles, ideal para tiro de médio alcance.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/4xprismscope.png'),
	(2, 'Red Dot Sight', 1200, 'Mira holográfica compacta com aquisição rápida de alvo para combate de curta distância.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/reddot.png'),
	(3, 'Silenciador Tático', 1800, 'Supressor de ruído em alumínio reforçado para disparos mais discretos.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/silenciadortatico.png'),
	(4, 'Grip Vertical', 350, 'Empunhadura vertical ergonômica que melhora a estabilidade e controle da arma.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/gripvertical.png'),
	(5, 'Lanterna Tática', 600, 'Lanterna de alta intensidade para operações noturnas e ambientes escuros.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/lanternatatica.png'),
	(6, 'Laser Verde', 750, 'Apontador laser verde com alta visibilidade para mira rápida.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/laserverde.png'),
	(7, 'Bipé Ajustávelel', 900, 'Bipé retrátil ajustável ideal para rifles de precisão.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/bipetatico.png'),
	(8, 'Mira 8x Tactical', 3200, 'Luneta de ampliação 8x com ajuste fino para tiros de longa distância.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/mira8x.png'),
	(9, 'Coronha Ajustável', 1100, 'Coronha retrátil com ajuste de altura e comprimento para maior conforto.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/coronhaajustavel.png'),
	(10, 'Tambor de Munição', 1500, 'Carregador em tambor com alta capacidade para armas automáticas.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/tambordemunicao.png'),
	(11, 'Bandoleira Tática', 250, 'Bandoleira acolchoada de dois pontos para transporte confortável.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/bandoleiratatica.png'),
	(12, 'Compensador de Recuo', 980, 'Compensador frontal que reduz o recuo e melhora a precisão em rajadas.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/compensadorderecuo.png'),
	(13, 'Mira Reflex', 1450, 'Mira reflex de alta resposta para pistolas e submetralhadoras.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/mirareflex.png'),
	(14, 'Handguard M-LOK', 1300, 'Handguard leve com trilhos M-LOK para personalização de acessórios.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/handguardmlock.png'),
	(15, 'Carregador Estendido', 500, 'Carregador de capacidade ampliada para pistolas e rifles.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/carregadorextendido.png'),
	(16, 'Mira Noturna', 4800, 'Sistema óptico de visão noturna para operações em baixa luminosidade.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/miranoturna.png'),
	(17, 'Quebra-Chamas', 700, 'Dispositivo frontal que reduz o clarão do disparo em ambientes escuros.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/quebrachamas.png'),
	(18, 'Trilho Picatinny', 400, 'Trilho universal para instalação de miras e acessórios táticos.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/trilhopicantinny.png'),
	(19, 'Trilho Picatinny', 400, 'Trilho universal para instalação de miras e acessórios táticos.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/trilhopicantinny.png'),
	(20, 'Coldre Tático', 650, 'Coldre rígido com trava de segurança para pistolas.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', 'imagens/coldretatico.png'),
	(21, 'Mr. Quinn Kub', 5998, 'Error vel et aut et adipisci sed mollitia.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(22, 'Blaise Orn', 18356, 'Sed voluptatibus dolor accusantium asperiores sit unde dolorem.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(23, 'Deanna Stamm', 7691, 'Quia iste quia quia est.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(24, 'Richmond O\'Conner', 5803, 'Aliquam corrupti earum velit accusantium enim rerum amet reprehenderit.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(25, 'Santino Hoppe', 3927, 'In dolore eum similique sed.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(26, 'Leopold Johnston', 8223, 'Facere aliquid totam et quam quos laborum cupiditate.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(27, 'Mr. Garrett Lowe', 19961, 'Adipisci qui mollitia ad eaque.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(28, 'Jazmin Homenick', 15838, 'Quia error magnam rem commodi.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(29, 'Marshall Daugherty', 10389, 'Aperiam cum itaque magnam est laborum.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(30, 'Alexa Wisozk', 2013, 'Est et voluptatem iure.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(31, 'Dr. Meredith Grimes', 8445, 'Hic quas et cupiditate natus sunt est aliquam.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(32, 'Dr. Nickolas Frami', 2254, 'Accusantium labore consectetur nesciunt ipsam reiciendis.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(33, 'Stewart Bartoletti III', 5053, 'Nostrum in sed voluptatem voluptatibus qui in.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(34, 'Prof. Adelle Yost I', 1356, 'Eum magni animi dolor.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(35, 'Aiyana Kunze', 8558, 'Id distinctio dolores repellendus ea incidunt.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(36, 'Dr. Katlynn Stracke', 579, 'Aut magni atque aspernatur exercitationem voluptas molestias.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(37, 'Dr. Miguel Lakin', 7700, 'Tenetur itaque assumenda reprehenderit quis.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(38, 'Laurianne Jenkins', 7167, 'Corporis beatae atque officia.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(39, 'Hilario Emmerich', 2982, 'Enim voluptas reiciendis sapiente quod cumque.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(40, 'Emelia Pacocha', 3712, 'Voluptatem ex quasi ipsum voluptatum iste a eius.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(41, 'Helga Jaskolski', 5731, 'Voluptatum consequatur inventore dolore numquam minima qui dolores.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(42, 'Zion Bauch', 6993, 'Ratione dolorem harum libero cupiditate et molestias ipsam.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(43, 'Prof. Cynthia Boyle V', 14759, 'Ratione esse quibusdam tempora quas iusto ducimus.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(44, 'Roberto Herzog', 4164, 'Soluta dolores veritatis omnis.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(45, 'Milan Altenwerth', 1370, 'Praesentium exercitationem saepe dolorem tenetur laudantium accusantium quia.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(46, 'Dr. Janiya Hettinger Sr.', 535, 'Dolores sit laudantium est.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(47, 'Sabina Sanford', 7460, 'Non est nostrum totam doloremque quas qui.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(48, 'Mr. Fredy Becker', 13546, 'Sequi doloribus ab labore ipsa error inventore.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(49, 'Dr. Millie Kessler', 3653, 'Praesentium minus commodi consequatur quasi eos explicabo.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL),
	(50, 'Ashley Graham', 13082, 'Odit voluptatem amet suscipit omnis.', '2026-05-08 22:31:09', '2026-05-08 22:31:09', NULL);

-- Copiando estrutura para tabela trabalho_felipe_arthur.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.cache: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela trabalho_felipe_arthur.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.cache_locks: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela trabalho_felipe_arthur.categoria_produtos
CREATE TABLE IF NOT EXISTS `categoria_produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.categoria_produtos: ~7 rows (aproximadamente)
INSERT INTO `categoria_produtos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Pistolas', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(2, 'Revólveres', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(3, 'Rifles', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(4, 'Carabinas', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(5, 'Submetralhadoras', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(6, 'Espingardas', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(7, 'Munições', '2026-05-08 22:31:08', '2026-05-08 22:31:08');

-- Copiando estrutura para tabela trabalho_felipe_arthur.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela trabalho_felipe_arthur.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela trabalho_felipe_arthur.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.job_batches: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela trabalho_felipe_arthur.mecanismo_produtos
CREATE TABLE IF NOT EXISTS `mecanismo_produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.mecanismo_produtos: ~6 rows (aproximadamente)
INSERT INTO `mecanismo_produtos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'AEG', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(2, 'Gás', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(3, 'Spring', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(4, 'Mecânica', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(5, 'Eletropneumáticas', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(6, 'Munição', '2026-05-08 22:31:08', '2026-05-08 22:31:08');

-- Copiando estrutura para tabela trabalho_felipe_arthur.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_03_11_193913_create_produtos_table', 1),
	(5, '2026_03_11_194425_create_servicos_table', 1),
	(6, '2026_03_13_172140_create_sugestoes_table', 1),
	(7, '2026_03_25_182313_create_categoria_produtos', 1),
	(8, '2026_03_25_183313_create_mecanismo_produtos', 1),
	(9, '2026_03_25_185743_alter_produtos', 1),
	(10, '2026_04_29_192512_create_acessorios_table', 1),
	(11, '2026_05_07_160830_alter_acessorios_remove_produto_id', 1),
	(12, '2026_05_07_160903_create_produto_acessorio_table', 1),
	(13, '2026_05_07_161852_add_foreign_keys_to_produto_acessorio_table', 1),
	(14, '2026_05_08_164842_add_imagem_to_acessorios_table', 1);

-- Copiando estrutura para tabela trabalho_felipe_arthur.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela trabalho_felipe_arthur.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` bigint unsigned NOT NULL,
  `mecanismo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_categoria_id_foreign` (`categoria_id`),
  KEY `produtos_mecanismo_id_foreign` (`mecanismo_id`),
  CONSTRAINT `produtos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria_produtos` (`id`),
  CONSTRAINT `produtos_mecanismo_id_foreign` FOREIGN KEY (`mecanismo_id`) REFERENCES `categoria_produtos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.produtos: ~16 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `mecanismo_id`, `created_at`, `updated_at`, `imagem`) VALUES
	(1, 'Requiem', 10000, 'Revolver de longo alcance e alto impacto, ideal para caça de alvos grandes.', 2, 3, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/requiem.png'),
	(2, 'AK-47', 8500, 'Rifle automático robusto e confiável, ideal para combate de médio alcance.', 3, 1, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/ak-47.png'),
	(3, 'AWM', 15000, 'Rifle sniper de altíssima precisão e longo alcance.', 3, 3, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/awm.png'),
	(4, 'Beretta', 4000, 'Pistola leve e eficiente, ideal para combates curtos.', 1, 2, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/beretta.png'),
	(5, 'Kar98', 12000, 'Rifle de ferrolho clássico, excelente para tiros de precisão.', 3, 3, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/kar98.png'),
	(6, 'Luger', 4500, 'Pistola histórica com design icônico e boa precisão.', 1, 2, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/luger.png'),
	(7, 'M4', 9000, 'Rifle moderno versátil, ideal para diversas situações de combate.', 3, 1, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/m4.png'),
	(8, 'MP40', 7000, 'Submetralhadora compacta, ideal para combate próximo.', 5, 1, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/mp40.png'),
	(9, 'Pump Action Shotgun', 6000, 'Espingarda de ação por bombeamento, poderosa a curta distância.', 6, 3, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/pump_action_shotgun.png'),
	(10, 'Ruger Scout', 11000, 'Rifle tático de precisão, ideal para médio e longo alcance.', 3, 4, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/ruger_scout.png'),
	(11, 'Munição Slug', 40, 'Cartucho para shotgun com alto poder de penetração.', 7, 6, '2026-05-08 22:31:08', '2026-05-08 22:31:08', 'imagens/slug.png'),
	(12, 'Dr. Bernhard Cummerata Jr.', 96327, 'Nobis provident asperiores molestiae vero sint.', 1, 3, '2026-05-08 22:31:08', '2026-05-08 22:31:08', NULL),
	(13, 'Kallie Jenkins DDS', 30789, 'Ullam id consequatur ab perferendis dolorem voluptates consequuntur.', 1, 3, '2026-05-08 22:31:08', '2026-05-08 22:31:08', NULL),
	(14, 'Don Gibson II', 87918, 'Perspiciatis inventore est ab aliquid explicabo quo.', 2, 1, '2026-05-08 22:31:08', '2026-05-08 22:31:08', NULL),
	(15, 'Marielle Waelchi', 72391, 'Itaque voluptatum eius commodi cupiditate perspiciatis nam est.', 7, 6, '2026-05-08 22:31:08', '2026-05-08 22:31:08', NULL),
	(16, 'Coy Skiles', 39560, 'Modi sint itaque libero nostrum aspernatur.', 5, 5, '2026-05-08 22:31:08', '2026-05-08 22:31:08', NULL);

-- Copiando estrutura para tabela trabalho_felipe_arthur.produto_acessorio
CREATE TABLE IF NOT EXISTS `produto_acessorio` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `produto_id` bigint unsigned NOT NULL,
  `acessorio_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `produto_acessorio_acessorio_id_unique` (`acessorio_id`),
  KEY `produto_acessorio_produto_id_foreign` (`produto_id`),
  CONSTRAINT `produto_acessorio_acessorio_id_foreign` FOREIGN KEY (`acessorio_id`) REFERENCES `acessorios` (`id`),
  CONSTRAINT `produto_acessorio_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.produto_acessorio: ~50 rows (aproximadamente)
INSERT INTO `produto_acessorio` (`id`, `produto_id`, `acessorio_id`) VALUES
	(1, 3, 1),
	(2, 8, 2),
	(3, 4, 3),
	(4, 8, 4),
	(5, 9, 5),
	(6, 4, 6),
	(7, 10, 7),
	(8, 10, 8),
	(9, 6, 9),
	(10, 7, 10),
	(11, 7, 11),
	(12, 1, 12),
	(13, 6, 13),
	(14, 2, 14),
	(15, 1, 15),
	(16, 5, 16),
	(17, 3, 17),
	(18, 3, 18),
	(19, 5, 19),
	(20, 4, 20),
	(21, 16, 21),
	(22, 13, 22),
	(23, 4, 23),
	(24, 12, 24),
	(25, 7, 25),
	(26, 13, 26),
	(27, 2, 27),
	(28, 14, 28),
	(29, 7, 29),
	(30, 12, 30),
	(31, 3, 31),
	(32, 16, 32),
	(33, 8, 33),
	(34, 2, 34),
	(35, 16, 35),
	(36, 6, 36),
	(37, 3, 37),
	(38, 7, 38),
	(39, 14, 39),
	(40, 8, 40),
	(41, 10, 41),
	(42, 13, 42),
	(43, 5, 43),
	(44, 9, 44),
	(45, 3, 45),
	(46, 12, 46),
	(47, 4, 47),
	(48, 8, 48),
	(49, 9, 49),
	(50, 4, 50);

-- Copiando estrutura para tabela trabalho_felipe_arthur.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.servicos: ~10 rows (aproximadamente)
INSERT INTO `servicos` (`id`, `nome`, `preco`, `descricao`, `created_at`, `updated_at`) VALUES
	(1, 'voluptatem', 48.38, 'Tempora laudantium quisquam eos iusto natus cupiditate.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(2, 'sint', 85.49, 'Modi sed et alias at.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(3, 'reprehenderit', 87.99, 'Ut deleniti aperiam ipsam ex debitis possimus officia.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(4, 'ipsam', 32.02, 'Non aliquam qui fuga.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(5, 'aspernatur', 38.13, 'Illum delectus nostrum fugit corrupti.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(6, 'aut', 35.83, 'Inventore minus nihil aspernatur voluptate et sunt tenetur praesentium.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(7, 'incidunt', 42.63, 'Odio non quam placeat eum qui nesciunt.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(8, 'eligendi', 37.24, 'Quo illum laborum repudiandae dolorem.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(9, 'Instalação de Mira Prismática', 50.00, 'Instalação de mira prismática em armas de fogo, garantindo precisão e estabilidade para atiradores.', '2026-05-08 22:31:08', '2026-05-08 22:31:08'),
	(10, 'Instalação de Mira Holográfica', 40.00, 'Instalação de mira holográfica nas pistolas e submetralhadoras', '2026-05-08 22:31:08', '2026-05-08 22:31:08');

-- Copiando estrutura para tabela trabalho_felipe_arthur.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.sessions: ~1 rows (aproximadamente)

-- Copiando estrutura para tabela trabalho_felipe_arthur.sugestoes
CREATE TABLE IF NOT EXISTS `sugestoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `palavras_chaves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.sugestoes: ~10 rows (aproximadamente)
INSERT INTO `sugestoes` (`id`, `titulo`, `descricao`, `palavras_chaves`, `created_at`, `updated_at`) VALUES
	(1, 'temporibus', 'Dolores blanditiis consequatur placeat nisi reiciendis nihil.', 'assumenda et qui', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(2, 'sequi', 'Deleniti ipsum non in minima.', 'et esse minima', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(3, 'ut', 'Eos officiis aut necessitatibus voluptatem nisi dolorem officiis.', 'nam fugiat dolor', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(4, 'aliquid', 'Corrupti doloremque error eveniet harum aut rerum amet.', 'nesciunt sequi labore', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(5, 'nobis', 'Iste est et dolorem iste fugiat dolor error ex.', 'omnis et fugit', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(6, 'illum', 'Alias et est ipsa quia animi quisquam qui.', 'eveniet quas nihil', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(7, 'quis', 'Vitae quasi soluta tempore et veniam sint id.', 'molestiae sed labore', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(8, 'nulla', 'Autem excepturi corrupti quia veritatis.', 'dolor suscipit dolorem', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(9, 'animi', 'Sequi quam cum dicta quod.', 'fugit et voluptates', '2026-05-08 22:31:09', '2026-05-08 22:31:09'),
	(10, 'sapiente', 'Suscipit sed consequatur perspiciatis itaque sit.', 'recusandae sit voluptatem', '2026-05-08 22:31:09', '2026-05-08 22:31:09');

-- Copiando estrutura para tabela trabalho_felipe_arthur.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela trabalho_felipe_arthur.users: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
