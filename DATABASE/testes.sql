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


UPDATE tb_equipamento as eq, tb_tipo_equipamento as teq 
SET eq.fl_status = 0,  teq.qtd_tipo = teq.qtd_tipo - 1 
WHERE eq.cod_tipo_equipamento = teq.cod_tipo_equipamento
AND eq.cod_equipamento = 1;

select * from tb_tipo_equipamento
select * from tb_equipamento

select * from tb_pessoa

SELECT tip.cod_tipo_equipamento, tip.desc_tipo, tip.qtd_tipo 
FROM tb_tipo_equipamento as tip, tb_equipamento as eq
WHERE tip.cod_tipo_equipamento = eq.cod_tipo_equipamento
AND eq.fl_curso_gti != TRUE
AND eq.fl_status != FALSE
AND tip.cod_tipo_equipamento LIMIT 1




INSERT INTO tb_pessoa(nr_matricula, email_pessoa, fl_validacao, telefone_pessoa, nome_pessoa, cod_tipo_pessoa, senha_pessoa) 
			VALUES (nr_matricula, email_pessoa, false, telefone_pessoa, nome_pessoa, tipo_pessoa, nr_matricula);

SELECT DISTINCT tip.cod_tipo_equipamento, tip.desc_tipo, tip.qtd_tipo 
FROM tb_tipo_equipamento as tip, tb_equipamento as eq 
WHERE tip.cod_tipo_equipamento = eq.cod_tipo_equipamento 
AND eq.fl_curso_gti != TRUE 
AND eq.fl_status != TRUE


