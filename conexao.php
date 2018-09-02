<?php
//PARAMETRODE DE CONFIGURAÇÃO INICIAL

$host='localhost';
$base='cafeteria';
$usuario='root';
$senha='1234';

//CONEXÃO AO BANCO DE DADOS

$mysqli = new mysqli($host,$usuario,$senha,$base);

//CASO TENHA ERRO 
if(mysqli_connect_errno()){
    trigger_error(mysqli_connect_error());
}

//ALTERA CARACTERES PARA UTF8
$mysqli->set_charset("utf8");

//Modifica a zona de horario para sp
date_default_timezone_set('America/Sao_Paulo');

