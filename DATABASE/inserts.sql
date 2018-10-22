INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (1,'Filtro de Linha',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (2,'Notebook',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (3,'Passador de Slides',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (4,'Projetor Multimídia',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (5,'Adaptador HDMI',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (6,'T',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (7,'Mouse',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (8,'Teclado Numérico USB',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (9,'Adaptador VGA',2);
INSERT INTO tb_tipo_equipamento (cod_tipo_equipamento,desc_tipo,qtd_tipo) VALUES (10,'Leitor de Código de Barras',2);

INSERT INTO tb_admin (nome_admin,senha_admin,login_admin) VALUES ('Administrador',md5('admin'),'admin');

INSERT INTO tb_tipo_pessoa (desc_tipo) VALUES ('Aluno');
INSERT INTO tb_tipo_pessoa (desc_tipo) VALUES ('Professor');
INSERT INTO tb_tipo_pessoa (desc_tipo) VALUES ('Administrador');

INSERT INTO tb_situacao (desc_situacao) VALUES('EM ANDAMENTO');
INSERT INTO tb_situacao (desc_situacao) VALUES('FINALIZADO');
INSERT INTO tb_situacao (desc_situacao) VALUES('ATRASADO');

##Filtro de Linha
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('FL01 - Filtro de Linha',               '',              0,            1,         1,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('FL02 - Filtro de Linha',               '',              0,            1,         1,                    now());

##Notebook
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('NOTE01 - Notebook',               '',              0,            1,         2,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('NOTE02 - Notebook',               '',              0,            1,         2,                    now());

##Passador de Slides
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('PSL01 - Passador de Slides',               '',              0,            1,         3,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('PSL02 - Passador de Slides',               '',              0,            1,         3,                    now());

##Projetor Multimídia
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('PROJ01 - Projetor Multimídia',               '',              0,            1,         4,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('PROJ02 - Projetor Multimídia',               '',              0,            1,         4,                    now());

##Adaptador HDMI
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('ADPHDMI01 - Adaptador HDMI',               '',              0,            1,         5,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('ADPHDMI02 - Adaptador HDMI',               '',              0,            1,         5,                    now());

##T
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('T01 - T',               '',              0,            1,         6,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('T02 - T',               '',              0,            1,         6,                    now());

##Mouse
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('MOS01 - Mouse',               '',              0,            1,         7,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('MOS02 - Mouse',               '',              0,            1,         7,                    now());

##Teclado Numérico USB
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('TCLNUM01 - Teclado Numérico USB',               '',              0,            1,         8,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('TCLNUM02 - Teclado Numérico USB',               '',              0,            1,         8,                    now());


##Adaptador VGA
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('ADPVGA01 - Adaptador VGA',               '',              0,            1,         9,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('ADPVGA01 - Adaptador VGA',               '',              0,            1,         9,                    now());

##Leitor de Código de Barras
INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('LCB01 - Leitor de Código de Barras',               '',              0,            1,         9,                    now());

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('LCB02 - Leitor de Código de Barras',               '',              0,            1,         9,                    now());
