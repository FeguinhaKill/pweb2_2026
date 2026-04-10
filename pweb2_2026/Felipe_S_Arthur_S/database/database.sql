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


-- Copiando estrutura do banco de dados para laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `laravel`;

-- Copiando estrutura para tabela laravel.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.cache: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela laravel.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.cache_locks: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela laravel.categoria_produtos
CREATE TABLE IF NOT EXISTS `categoria_produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.categoria_produtos: ~8 rows (aproximadamente)
INSERT INTO `categoria_produtos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Acessórios', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(2, 'Pistolas', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(3, 'Revólveres', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(4, 'Munições', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(5, 'Espingardas', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(6, 'Submetralhadoras', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(7, 'Carabinas', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(8, 'Rifles', '2026-03-27 21:50:41', '2026-03-27 21:50:41');

-- Copiando estrutura para tabela laravel.failed_jobs
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

-- Copiando dados para a tabela laravel.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela laravel.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_available_at_index` (`queue`,`reserved_at`,`available_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela laravel.job_batches
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

-- Copiando dados para a tabela laravel.job_batches: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela laravel.logins
CREATE TABLE IF NOT EXISTS `logins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.logins: ~10 rows (aproximadamente)
INSERT INTO `logins` (`id`, `nome`, `email`, `senha`, `created_at`, `updated_at`) VALUES
	(1, 'Alek Feil', 'janelle79@example.com', '0A', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(2, 'Xander Ledner MD', 'carolanne.gutkowski@example.com', 'b3', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(3, 'Jalyn Champlin', 'treva.miller@example.org', 'YZH4', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(4, 'Prof. Demetris Ruecker DDS', 'laisha64@example.net', '0b', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(5, 'Rosemarie Hauck', 'zfahey@example.org', 'mATsf@', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(6, 'Dax Fisher', 'okon.lizzie@example.org', 'GU{Qz', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(7, 'Macy Wilderman', 'orie54@example.org', '[7Q', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(8, 'Devonte Hermann', 'hartmann.nya@example.com', '-r6', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(9, 'Megane Stiedemann IV', 'dahlia.schroeder@example.net', 'yl', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(10, 'Alejandrin Stroman', 'cedrick.bartell@example.com', 'og8fH', '2026-03-27 21:50:41', '2026-03-27 21:50:41');

-- Copiando estrutura para tabela laravel.mecanismo_produtos
CREATE TABLE IF NOT EXISTS `mecanismo_produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.mecanismo_produtos: ~5 rows (aproximadamente)
INSERT INTO `mecanismo_produtos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Eletropneumáticas', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(2, 'Spring', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(3, 'Mecânica', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(4, 'Gás', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(5, 'AEG', '2026-03-27 21:50:41', '2026-03-27 21:50:41');

-- Copiando estrutura para tabela laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.migrations: ~10 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_03_11_190553_create_logins_table', 1),
	(5, '2026_03_11_193913_create_produtos_table', 1),
	(6, '2026_03_11_194425_create_servicos_table', 1),
	(7, '2026_03_13_172140_create_sugestoes_table', 1),
	(8, '2026_03_25_182313_create_categoria_produtos', 1),
	(9, '2026_03_25_183313_create_mecanismo_produtos', 1),
	(10, '2026_03_25_185743_alter_produtos', 1);

-- Copiando estrutura para tabela laravel.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela laravel.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` bigint unsigned NOT NULL,
  `mecanismo_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_categoria_id_foreign` (`categoria_id`),
  KEY `produtos_mecanismo_id_foreign` (`mecanismo_id`),
  CONSTRAINT `produtos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria_produtos` (`id`),
  CONSTRAINT `produtos_mecanismo_id_foreign` FOREIGN KEY (`mecanismo_id`) REFERENCES `categoria_produtos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.produtos: ~9 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `mecanismo_id`, `created_at`, `updated_at`) VALUES
	(3, 'Dr. Maiya Kulas', 22783, 'Molestiae qui dolorem adipisci omnis et blanditiis asperiores.', 7, 4, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(4, 'Lawrence Lockman', 23155, 'Ratione in commodi et eveniet vitae vitae in molestias.', 2, 3, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(5, 'Iva Larson', 17669, 'Adipisci odit vero odit voluptas sapiente eos eaque.', 2, 2, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(6, 'Beau Goldner', 49661, 'Qui nihil eos aut error unde ratione officia.', 4, 1, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(7, 'Hettie Welch', 97803, 'Consequuntur blanditiis molestias et dignissimos ut.', 8, 2, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(8, 'Domenic Hansen V', 10675, 'Atque dolores quisquam laudantium sint placeat quaerat.', 1, 1, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(9, 'Dr. Aric Breitenberg PhD', 36266, 'Saepe ipsam et et occaecati facere in.', 6, 4, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(10, 'Giovanny Weimann', 56063, 'Alias vitae excepturi qui consequatur illo.', 4, 4, '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(11, 'Revolver  Smith & Wesson Model 327 TRR8', 850, 'util em curto alcance', 3, 2, '2026-03-27 21:52:51', '2026-03-27 21:52:51');

-- Copiando estrutura para tabela laravel.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.servicos: ~8 rows (aproximadamente)
INSERT INTO `servicos` (`id`, `nome`, `preco`, `descricao`, `created_at`, `updated_at`) VALUES
	(3, 'dolorem', 450.00, 'Placeat delectus excepturi odit debitis sunt asperiores quis.', '2026-03-27 21:50:41', '2026-03-27 21:53:55'),
	(4, 'architecto', 68.27, 'Omnis at non quasi quos ipsum.', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(5, 'ducimus', 19.20, 'Minima animi sint ut aperiam.', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(6, 'ipsa', 55.36, 'Est nulla commodi fuga qui voluptatem necessitatibus possimus.', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(7, 'quis', 74.11, 'Minus amet minus dicta omnis.', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(8, 'et', 18.06, 'Suscipit ab nobis consequatur id corporis pariatur debitis.', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(9, 'modi', 82.24, 'Consequatur ea sunt autem aspernatur fugit exercitationem magni.', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(10, 'neque', 22.94, 'Et est harum voluptas modi enim sapiente quas.', '2026-03-27 21:50:41', '2026-03-27 21:50:41');

-- Copiando estrutura para tabela laravel.sessions
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

-- Copiando dados para a tabela laravel.sessions: ~1 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('hLw1K5LAe4lTRcYRiE6AZxRj9CuMlnHsrMAJoe81', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3lLZGZ2YkZ1ZzhtTk1ybHZzMDYwNHE0M3VEWmdMaDRBVEljOVhYaSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdXRvcy9mb3JtIjtzOjU6InJvdXRlIjtzOjEzOiJwcm9kdXRvcy5mb3JtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774638036);

-- Copiando estrutura para tabela laravel.sugestoes
CREATE TABLE IF NOT EXISTS `sugestoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `palavras_chaves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela laravel.sugestoes: ~10 rows (aproximadamente)
INSERT INTO `sugestoes` (`id`, `titulo`, `descricao`, `palavras_chaves`, `created_at`, `updated_at`) VALUES
	(1, 'eveniet', 'Et ad natus quam nihil praesentium.', 'ut necessitatibus at', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(2, 'sapiente', 'Nobis aut pariatur aut qui consequatur officiis.', 'non dolores deserunt', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(3, 'et', 'Aut sit quia sit at unde occaecati est.', 'omnis quia ut', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(4, 'autem', 'Odit eum voluptas error quis suscipit qui eos.', 'exercitationem consequatur aliquid', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(5, 'ea', 'Quis cupiditate nulla veniam accusamus vero tenetur.', 'quia aut dolores', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(6, 'consequatur', 'Sunt provident facere aut qui.', 'nisi vero nisi', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(7, 'facere', 'Beatae velit molestias in cum.', 'nemo aut eum', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(8, 'voluptas', 'Eos illum non qui saepe nesciunt voluptatibus sequi.', 'laboriosam est nisi', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(9, 'enim', 'Est facilis hic non aut.', 'unde ducimus commodi', '2026-03-27 21:50:41', '2026-03-27 21:50:41'),
	(10, 'totam', 'Officia quidem eaque quia ratione et.', 'sunt veritatis mollitia', '2026-03-27 21:50:41', '2026-03-27 21:50:41');

-- Copiando estrutura para tabela laravel.users
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

-- Copiando dados para a tabela laravel.users: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
