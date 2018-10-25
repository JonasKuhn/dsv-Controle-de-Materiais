select * from tb_situacao

insert into tb_situacao (desc_situacao) VALUES('EM ANDAMENTO')

nr_matricula, data_emprestimo, status, cod_equipamento, cod_pessoa, cod_situacao

select * from tb_equipamento where fl_status != 0 AND cod_tipo_equipamento = 2 limit 2


select * from tb_pessoa


update tb_pessoa set fl_validacao = true where nr_matricula = '471694'
UPDATE tb_equipamento SET fl_status = 0 WHERE cod_equipamento = '1';


select * from tb_equipamento

INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) 
VALUES('ADPHDMI - Adaptador HDMI',               '',              0,            1,         5,                    now());

cod_equipamento, desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created, modified


UPDATE tb_equipamento as eq, tb_tipo_equipamento as teq SET eqfl_status = 0 SET teq.qtd_equipame WHERE cod_equipamento = '$cod_equipamento';
Equip



select cod_tipo_equipamento, desc_tipo, qtd_tipo from tb_tipo_equipamento