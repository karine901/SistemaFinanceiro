<?php
include 'conexao.php'; 

//receber os dados do formulário
$nomeCompleto=$_POST['nome'];
$email=$_POST['email'];
$cargo=$_POST['cargo'];
$senha=$_POST['senha'];



$sql="INSERT INTO tb_user values (null,'$nomeCompleto','$email','$cargo','$senha')";

if ($conexao->query($sql)) {
    echo "<script>alert('Inserido com sucesso!'); history.back();</script>";
}else {
    echo "Falha na conexão com banco de dados";
}
 