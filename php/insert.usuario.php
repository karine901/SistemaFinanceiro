<?php
include 'conexao.php'; 

//receber os dados do formulário
$nomeCompleto=$_POST['nome'];
$email=$_POST['email'];
$cargo=$_POST['cargo'];
$senha=$_POST['senha'];



$sql="INSERT INTO tb_user values (null,'$nomeCompleto','$email','$cargo','$senha')";
$conexao->query($sql);