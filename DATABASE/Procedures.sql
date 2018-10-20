## INSERIR NOVA PESSOA
DELIMITER $$
CREATE PROCEDURE insere_cadastro(tipo_pessoa INT, nr_matricula INT(15),nome_pessoa VARCHAR(200),
				telefone_pessoa VARCHAR(20), email_pessoa VARCHAR(100))
BEGIN
    DECLARE aux INT;
    SET aux = 0;
    
    SELECT cod_tipo_pessoa FROM tb_tipo_pessoa WHERE cod_tipo_pessoa = tipo_pessoa INTO aux;
    
	IF((aux != ''))THEN
    
		IF((nr_matricula != '') && (nome_pessoa != '') && (telefone_pessoa != '') && (email_pessoa != ''))THEN
			INSERT INTO tb_pessoa(nr_matricula, email_pessoa, fl_validacao, telefone_pessoa, nome_pessoa, cod_tipo_pessoa, senha_pessoa) 
			VALUES (nr_matricula, email_pessoa, false, telefone_pessoa, nome_pessoa, tipo_pessoa, nr_matricula);
		ELSE
			SELECT 'Preencha todos os campos!';
        END IF;
        
    ELSE
		select 'Tipo de pessoa inexistente!';
    END IF;
END $$
DELIMITER ;

## QTD EQUIPAMENTO
DELIMITER $$
CREATE PROCEDURE atualiza_qtd_equipamento (desc_equipamento TEXT, desc_observacao TEXT, fl_curso_gti BOOLEAN, fl_status BOOLEAN, tipo_equipamento INT)
BEGIN
	IF ((desc_equipamento != '') && (desc_observacao != '') && (fl_curso_gti != '') && (fl_status != '') && (cod_tipo_equipamento != '')) THEN
		INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento) 
		VALUES                     (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, tipo_equipamento);
        
        UPDATE tb_tipo_equipamento SET qtd_tipo = qtd_tipo + 1  WHERE cod_tipo_equipamento = tipo_equipamento;
        
	ELSE
		SELECT 'Preencha todos os campos.';
	END IF;
END$$
DELIMITER ;