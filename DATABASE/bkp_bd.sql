-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.31-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela emprestimo_nti.tb_admin: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
INSERT INTO `tb_admin` (`cod_admin`, `nome_admin`, `senha_admin`, `login_admin`, `created`, `modified`) VALUES
	(1, 'Administrador', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2018-10-11 11:33:09', NULL);
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;

-- Copiando dados para a tabela emprestimo_nti.tb_aplicacao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_aplicacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_aplicacao` ENABLE KEYS */;

-- Copiando dados para a tabela emprestimo_nti.tb_emprestimo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_emprestimo` DISABLE KEYS */;
INSERT INTO `tb_emprestimo` (`cod_emprestimo`, `nr_matricula`, `data_emprestimo`, `status`, `cod_equipamento`, `cod_pessoa`, `cod_situacao`, `created`, `modified`) VALUES
	(1, '1234', '2018-10-16 22:34:22', '1', 1, 1, 1, '2018-10-16 22:34:22', NULL),
	(2, '1234', '2018-10-16 22:35:07', '1', 1, 1, 1, '2018-10-16 22:35:07', NULL),
	(3, '1234', '2018-10-16 22:35:07', '1', 2, 1, 1, '2018-10-16 22:35:07', NULL);
/*!40000 ALTER TABLE `tb_emprestimo` ENABLE KEYS */;

-- Copiando dados para a tabela emprestimo_nti.tb_equipamento: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_equipamento` DISABLE KEYS */;
INSERT INTO `tb_equipamento` (`cod_equipamento`, `desc_equipamento`, `desc_observacao`, `fl_curso_gti`, `fl_status`, `cod_tipo_equipamento`, `created`, `modified`) VALUES
	(1, 'Regua-001', '3 pinos', 0, 0, 1, '2018-10-12 13:28:16', NULL),
	(2, 'Regua-002', '3 pinos', 0, 0, 1, '2018-10-12 13:28:30', NULL),
	(3, 'Regua-003', '3 pinos', 0, 0, 1, '2018-10-12 13:28:34', NULL),
	(7, 'Notebook Dell', 'Windows', 0, 0, 2, '2018-10-12 13:56:42', NULL),
	(8, 'Notebook Dell', 'Windows', 0, 0, 2, '2018-10-12 13:56:43', NULL),
	(9, 'Notebook Dell', 'Windows', 0, 0, 2, '2018-10-12 13:56:43', NULL);
/*!40000 ALTER TABLE `tb_equipamento` ENABLE KEYS */;

-- Copiando dados para a tabela emprestimo_nti.tb_pessoa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_pessoa` DISABLE KEYS */;
INSERT INTO `tb_pessoa` (`cod_pessoa`, `nr_matricula`, `email_pessoa`, `fl_validacao`, `telefone_pessoa`, `nome_pessoa`, `cod_tipo_pessoa`, `created`, `modified`) VALUES
	(1, 1234, 'emersonklunk2014@gmail.com', 49, '1', 'Emerson Klunk', 3, '2018-10-12 14:03:38', NULL);
/*!40000 ALTER TABLE `tb_pessoa` ENABLE KEYS */;

-- Copiando dados para a tabela emprestimo_nti.tb_situacao: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_situacao` DISABLE KEYS */;
INSERT INTO `tb_situacao` (`cod_situacao`, `desc_situacao`) VALUES
	(1, 'Emprestado'),
	(2, 'Devolvido');
/*!40000 ALTER TABLE `tb_situacao` ENABLE KEYS */;

-- Copiando dados para a tabela emprestimo_nti.tb_tipo_equipamento: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_tipo_equipamento` DISABLE KEYS */;
INSERT INTO `tb_tipo_equipamento` (`cod_tipo_equipamento`, `desc_tipo`, `qtd_tipo`) VALUES
	(1, 'Régua', 20),
	(2, 'Notebook', 48),
	(3, 'Passador de Slides', 5),
	(4, 'Projetor Multimídia', 10),
	(5, 'Adaptador HDMI', 7),
	(6, 'T', 5),
	(7, 'Mouse', 5),
	(8, 'Teclado Numérico USB', 4),
	(9, 'Adaptador VGA', 2),
	(10, 'Leitor de Código de Barras', 8);
/*!40000 ALTER TABLE `tb_tipo_equipamento` ENABLE KEYS */;

-- Copiando dados para a tabela emprestimo_nti.tb_tipo_pessoa: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_tipo_pessoa` DISABLE KEYS */;
INSERT INTO `tb_tipo_pessoa` (`cod_tipo_pessoa`, `desc_tipo`) VALUES
	(1, 'Colaborador'),
	(2, 'Administrador'),
	(3, 'Aluno');
/*!40000 ALTER TABLE `tb_tipo_pessoa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
