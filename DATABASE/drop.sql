# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          banco_controle-de-materiais.dez                 #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database drop script                            #
# Created on:            2018-10-03 20:21                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Drop foreign key constraints                                           #
# ---------------------------------------------------------------------- #

ALTER TABLE `tb_equipamento` DROP FOREIGN KEY `tb_tipo_equipamento_tb_equipamento`;

ALTER TABLE `tb_emprestimo` DROP FOREIGN KEY `tb_equipamento_tb_emprestimo`;

ALTER TABLE `tb_emprestimo` DROP FOREIGN KEY `tb_pessoa_tb_emprestimo`;

ALTER TABLE `tb_emprestimo` DROP FOREIGN KEY `tb_situacao_tb_emprestimo`;

ALTER TABLE `tb_pessoa` DROP FOREIGN KEY `tb_tipo_pessoa_tb_pessoa`;

# ---------------------------------------------------------------------- #
# Drop table "tb_emprestimo"                                             #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_emprestimo` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_emprestimo`;

# ---------------------------------------------------------------------- #
# Drop table "tb_pessoa"                                                 #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_pessoa` MODIFY `cod_pessoa` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_pessoa` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_pessoa`;

# ---------------------------------------------------------------------- #
# Drop table "tb_tipo_pessoa"                                            #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_tipo_pessoa` MODIFY `cod_tipo_pessoa` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_tipo_pessoa` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_tipo_pessoa`;

# ---------------------------------------------------------------------- #
# Drop table "tb_situacao"                                               #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_situacao` MODIFY `cod_situacao` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_situacao` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_situacao`;

# ---------------------------------------------------------------------- #
# Drop table "tb_admin"                                                  #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_admin` MODIFY `cod_admin` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_admin` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_admin`;

# ---------------------------------------------------------------------- #
# Drop table "tb_aplicacao"                                              #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_aplicacao` MODIFY `cod_aplicacao` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_aplicacao` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_aplicacao`;

# ---------------------------------------------------------------------- #
# Drop table "tb_equipamento"                                            #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_equipamento` MODIFY `cod_equipamento` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_equipamento` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_equipamento`;

# ---------------------------------------------------------------------- #
# Drop table "tb_tipo_equipamento"                                       #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_tipo_equipamento` MODIFY `cod_tipo_equipamento` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_tipo_equipamento` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_tipo_equipamento`;
