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
			INSERT INTO tb_pessoa(nr_matricula, email_pessoa, fl_validacao, telefone_pessoa, nome_pessoa, cod_tipo_pessoa) 
			VALUES (nr_matricula, email_pessoa, false, telefone_pessoa, nome_pessoa, tipo_pessoa);
		ELSE
			SELECT 'Preencha todos os campos!';
        END IF;
        
    ELSE
		select 'Tipo de pessoa inexistente!';
    END IF;
END $$
DELIMITER ;