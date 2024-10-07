<?php
//informações para conectar no banco de dados

$servidor = 'localhost';
$usuario = 'root';
$senha ='root';
$bd = 'db_contabilidade';

$conexao = new mysqli($servidor,$usuario,$senha,$bd);

if ($conexao->connect_error){

die('falha na connexao '.$conexao->connect_error);
}else{

    echo "conectado com sucesso";
}


 
?>
