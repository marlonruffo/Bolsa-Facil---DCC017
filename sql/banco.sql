-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
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


-- Copiando estrutura do banco de dados para sistemabolsasufjf
CREATE DATABASE IF NOT EXISTS `sistemabolsasufjf` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sistemabolsasufjf`;

-- Copiando estrutura para tabela sistemabolsasufjf.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `matricula` varchar(64) NOT NULL,
  `cpf` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `dataIngresso` date DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `nome` varchar(64) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL,
  `curso` varchar(64) DEFAULT NULL,
  `periodo` varchar(64) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando estrutura para tabela sistemabolsasufjf.alunos_ufjf
CREATE TABLE IF NOT EXISTS `alunos_ufjf` (
  `id_alunos_ufjf` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(64) NOT NULL,
  PRIMARY KEY (`id_alunos_ufjf`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela sistemabolsasufjf.alunos_ufjf: ~21 rows (aproximadamente)
INSERT INTO `alunos_ufjf` (`id_alunos_ufjf`, `matricula`) VALUES
	(1, '202065165AC'),
	(2, '2018451273D'),
	(3, '202312589BM'),
	(4, '201957841KP'),
	(5, '202112365ZX'),
	(6, '201754896PT'),
	(7, '2020236547F'),
	(8, '201632587BH'),
	(9, '202189753KM'),
	(10, '2015789632R'),
	(11, '202265487LX'),
	(12, '201423698FK'),
	(13, '202345612WP'),
	(14, '201896347YG'),
	(15, '2020102036A'),
	(16, '201784512ZX'),
	(17, '202154789JL'),
	(18, '201632547DH'),
	(19, '202398754MP'),
	(20, '201547896VY'),
	(32, '202165101AC');

-- Copiando estrutura para tabela sistemabolsasufjf.professor
CREATE TABLE IF NOT EXISTS `professor` (
  `nome` varchar(64) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `siape` varchar(64) NOT NULL,
  `telefone` varchar(64) NOT NULL,
  `dataNasc` date DEFAULT NULL,
  `dataIngresso` date DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`siape`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando estrutura para tabela sistemabolsasufjf.professores_ufjf
CREATE TABLE IF NOT EXISTS `professores_ufjf` (
  `id_professores_ufjf` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(64) NOT NULL,
  PRIMARY KEY (`id_professores_ufjf`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela sistemabolsasufjf.professores_ufjf: ~20 rows (aproximadamente)
INSERT INTO `professores_ufjf` (`id_professores_ufjf`, `matricula`) VALUES
	(1, '1234567'),
	(2, '8901234'),
	(3, '5678901'),
	(4, '2345678'),
	(5, '9012345'),
	(6, '6789012'),
	(7, '3456789'),
	(8, '123456'),
	(9, '7890123'),
	(10, '4567890'),
	(11, '3450123'),
	(12, '6789012'),
	(13, '1234567'),
	(14, '8901234'),
	(15, '5678901'),
	(16, '2345678'),
	(17, '9012345'),
	(18, '6789012'),
	(19, '3456789'),
	(20, '123456');

-- Copiando estrutura para tabela sistemabolsasufjf.projeto
CREATE TABLE IF NOT EXISTS `projeto` (
  `idProjeto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProjeto` varchar(64) DEFAULT NULL,
  `tipoProjeto` varchar(64) DEFAULT NULL,
  `metodoDeEntrada` varchar(64) DEFAULT NULL,
  `qtdVagas` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `fk_Professor_siape` varchar(64) DEFAULT NULL,
  `data_inicio_processo` date DEFAULT NULL,
  `data_fim_processo` date DEFAULT NULL,
  `pre_requisito` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idProjeto`),
  KEY `FK_Projeto_2` (`fk_Professor_siape`),
  CONSTRAINT `FK_Projeto_2` FOREIGN KEY (`fk_Professor_siape`) REFERENCES `professor` (`siape`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Copiando estrutura para tabela sistemabolsasufjf.bolsa
CREATE TABLE IF NOT EXISTS `bolsa` (
  `valor` varchar(64) DEFAULT NULL,
  `e_voluntaria` varchar(64) DEFAULT NULL,
  `idBolsa` int(11) NOT NULL AUTO_INCREMENT,
  `fk_Projeto_idProjeto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idBolsa`),
  KEY `FK_Bolsa_2` (`fk_Projeto_idProjeto`),
  CONSTRAINT `FK_Bolsa_2` FOREIGN KEY (`fk_Projeto_idProjeto`) REFERENCES `projeto` (`idProjeto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=LATIN1;

-- Copiando estrutura para tabela sistemabolsasufjf.aluno_inscreve_se_projeto
CREATE TABLE IF NOT EXISTS `aluno_inscreve_se_projeto` (
  `fk_Aluno_matricula` varchar(64) DEFAULT NULL,
  `fk_Projeto_idProjeto` int(11) DEFAULT NULL,
  `id_inscricaoProjeto` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_inscricaoProjeto`),
  KEY `FK_Aluno_Inscreve_se_Projeto_2` (`fk_Aluno_matricula`),
  KEY `FK_Aluno_Inscreve_se_Projeto_3` (`fk_Projeto_idProjeto`),
  CONSTRAINT `FK_Aluno_Inscreve_se_Bolsa_2` FOREIGN KEY (`fk_Aluno_matricula`) REFERENCES `aluno` (`matricula`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `FK_Aluno_Inscreve_se_Bolsa_3` FOREIGN KEY (`fk_Projeto_idProjeto`) REFERENCES `projeto` (`idProjeto`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
