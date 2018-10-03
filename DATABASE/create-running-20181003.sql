CREATE DATABASE emprestimo_nti

USE emprestimo_nti;
CREATE TABLE `tb_tipo_equipamento` (
    `cod_tipo_equipamento` INTEGER NOT NULL AUTO_INCREMENT,
    `desc_tipo` TEXT,
    `qtd_tipo` INTEGER,
    CONSTRAINT `PK_tb_tipo_equipamento` PRIMARY KEY (`cod_tipo_equipamento`)
);

CREATE TABLE `tb_equipamento` (
    `cod_equipamento` INTEGER NOT NULL AUTO_INCREMENT,
    `desc_equipamento` TEXT NOT NULL,
    `desc_observacao` TEXT,
    `fl_curso_gti` BOOL NOT NULL,
    `fl_status` BOOL,
    `cod_tipo_equipamento` INTEGER,
    `created` TIMESTAMP NOT NULL DEFAULT NOW(),
    `modified` TIMESTAMP NULL,
    CONSTRAINT `PK_tb_equipamento` PRIMARY KEY (`cod_equipamento`)
);

CREATE TABLE `tb_aplicacao` (
    `cod_aplicacao` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_aplicacao` VARCHAR(200) NOT NULL,
    `img_aplicacao` VARCHAR(200),
    `nome_instituicao` VARCHAR(200),
    `img_instituicao` VARCHAR(200),
    CONSTRAINT `PK_tb_aplicacao` PRIMARY KEY (`cod_aplicacao`)
);

CREATE TABLE `tb_admin` (
    `cod_admin` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_admin` VARCHAR(200) NOT NULL,
    `senha_admin` VARCHAR(200) NOT NULL,
    `login_admin` VARCHAR(200) NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT NOW(),
    `modified` TIMESTAMP NULL,
    CONSTRAINT `PK_tb_admin` PRIMARY KEY (`cod_admin`)
);

CREATE TABLE `tb_situacao` (
    `cod_situacao` INTEGER NOT NULL AUTO_INCREMENT,
    `desc_situacao` TEXT,
    CONSTRAINT `PK_tb_situacao` PRIMARY KEY (`cod_situacao`)
);

CREATE TABLE `tb_emprestimo` (
    `cod_emprestimo` INTEGER NOT NULL,
    `nr_matricula` VARCHAR(200),
    `data_emprestimo` DATETIME NOT NULL,
    `status` VARCHAR(200),
    `cod_equipamento` INTEGER,
    `cod_pessoa` INTEGER,
    `cod_situacao` INTEGER,
    `created` TIMESTAMP NOT NULL DEFAULT NOW(),
    `modified` TIMESTAMP NULL,
    CONSTRAINT `PK_tb_emprestimo` PRIMARY KEY (`cod_emprestimo`)
);

CREATE TABLE `tb_pessoa` (
    `cod_pessoa` INTEGER NOT NULL AUTO_INCREMENT,
    `nr_matricula` INTEGER(8) NOT NULL,
    `email_pessoa` VARCHAR(100),
    `fl_validacao` BOOL,
    `telefone_pessoa` VARCHAR(20) NOT NULL,
    `nome_pessoa` VARCHAR(200) NOT NULL,
    `cod_tipo_pessoa` INTEGER,
    `created` TIMESTAMP NOT NULL DEFAULT NOW(),
    `modified` TIMESTAMP NULL,
    CONSTRAINT `PK_tb_pessoa` PRIMARY KEY (`cod_pessoa`)
);

CREATE TABLE `tb_tipo_pessoa` (
    `cod_tipo_pessoa` INTEGER NOT NULL AUTO_INCREMENT,
    `desc_tipo` TEXT NOT NULL,
    CONSTRAINT `PK_tb_tipo_pessoa` PRIMARY KEY (`cod_tipo_pessoa`)
);

ALTER TABLE `tb_equipamento` ADD CONSTRAINT `tb_tipo_equipamento_tb_equipamento` 
    FOREIGN KEY (`cod_tipo_equipamento`) REFERENCES `tb_tipo_equipamento` (`cod_tipo_equipamento`);

ALTER TABLE `tb_emprestimo` ADD CONSTRAINT `tb_equipamento_tb_emprestimo` 
    FOREIGN KEY (`cod_equipamento`) REFERENCES `tb_equipamento` (`cod_equipamento`);

ALTER TABLE `tb_emprestimo` ADD CONSTRAINT `tb_pessoa_tb_emprestimo` 
    FOREIGN KEY (`cod_pessoa`) REFERENCES `tb_pessoa` (`cod_pessoa`);

ALTER TABLE `tb_emprestimo` ADD CONSTRAINT `tb_situacao_tb_emprestimo` 
    FOREIGN KEY (`cod_situacao`) REFERENCES `tb_situacao` (`cod_situacao`);

ALTER TABLE `tb_pessoa` ADD CONSTRAINT `tb_tipo_pessoa_tb_pessoa` 
    FOREIGN KEY (`cod_tipo_pessoa`) REFERENCES `tb_tipo_pessoa` (`cod_tipo_pessoa`);
