-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para godev
CREATE DATABASE IF NOT EXISTS `godev` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `godev`;

-- Copiando estrutura para tabela godev.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela godev.alunos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela godev.coffee_aluno
CREATE TABLE IF NOT EXISTS `coffee_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cafe` int(11) DEFAULT NULL,
  `id_aluno` int(11) DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_coffee_aluno_salas_cafe` (`id_cafe`),
  KEY `FK_coffee_aluno_alunos` (`id_aluno`),
  CONSTRAINT `FK_coffee_aluno_alunos` FOREIGN KEY (`id_aluno`) REFERENCES `alunos` (`id`),
  CONSTRAINT `FK_coffee_aluno_salas_cafe` FOREIGN KEY (`id_cafe`) REFERENCES `salas_cafe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela godev.coffee_aluno: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `coffee_aluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `coffee_aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela godev.matricula_aluno
CREATE TABLE IF NOT EXISTS `matricula_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sala` int(11) DEFAULT NULL,
  `id_aluno` int(11) DEFAULT NULL,
  `etapa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__salas_aula` (`id_sala`),
  KEY `FK__alunos` (`id_aluno`),
  CONSTRAINT `FK__alunos` FOREIGN KEY (`id_aluno`) REFERENCES `alunos` (`id`),
  CONSTRAINT `FK__salas_aula` FOREIGN KEY (`id_sala`) REFERENCES `salas_aula` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela godev.matricula_aluno: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `matricula_aluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `matricula_aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela godev.salas_aula
CREATE TABLE IF NOT EXISTS `salas_aula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `lotacao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela godev.salas_aula: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `salas_aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `salas_aula` ENABLE KEYS */;

-- Copiando estrutura para tabela godev.salas_cafe
CREATE TABLE IF NOT EXISTS `salas_cafe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `lotacao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela godev.salas_cafe: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `salas_cafe` DISABLE KEYS */;
/*!40000 ALTER TABLE `salas_cafe` ENABLE KEYS */;

-- Copiando estrutura para tabela godev.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela godev.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `senha`) VALUES
	(1, 'admin@godev.com', '$2y$10$r1hU/HjoMPxKCnGydJHPDeJxfA2ERFRrMle8nNR8.F9ssTsUeivXC');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
