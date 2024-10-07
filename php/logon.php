<?php
//recebendo os dados da tela de login 

$email = $_POST ['email'];
$password = $_POST['password'];

//link da conexão
include 'conexao.php';

//pegar os dados do banco

$sql = "SELECT * FROM tb_user WHERE email = '$email'";
 
$query = $conexao->query($sql);

$resultado = $query->fetch_assoc();

print_r($resultado);




?>