/*Trigger que aumenta a quantidade de qtd_tipo de cada tipo em tb_tipo_equipamento 
conforme são inseridos equipamentos*/
DELIMITER $$
CREATE TRIGGER add_qtde_tipo_equipamento AFTER INSERT
ON tb_equipamento
FOR EACH ROW
BEGIN
	UPDATE tb_tipo_equipamento set qtd_tipo = qtd_tipo+1 where cod_tipo_equipamento = new.cod_tipo_equipamento;
	UPDATE tb_tipo_equipamento set modified = now();
END $$
/*Trigger que diminui a quantidade de qtd_tipo de cada tipo em tb_tipo_equipamento 
conforme são deletados equipamentos*/
DELIMITER $$
CREATE TRIGGER delete_qtde_tipo_equipamento AFTER DELETE
ON tb_equipamento
FOR EACH ROW
BEGIN
	UPDATE tb_tipo_equipamento set qtd_tipo = qtd_tipo-1 where cod_tipo_equipamento = old.cod_tipo_equipamento;
	UPDATE tb_tipo_equipamento set modified = now() where cod_tipo_equipamento = old.cod_tipo_equipamento;
END $$