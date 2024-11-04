<?php
include 'conexao.php';
 
$email = $_POST['email'];
$password = $_POST['password'];
 
 
 
$sql = "SELECT * FROM tb_user WHERE email = '$email'";
$query = $conexao->query($sql);
$resultado = $query->fetch_assoc();
 
$email_banco = $resultado['email'];
$senha_banco = $resultado['senha'];
 
 
if($email == $email_banco && $password == $senha_banco) {
    session_start();
    $_SESSION['id'] = $resultado['id_usuario'];
    header('location: ../tela_inicial.php');
}else {
    echo "<script> alert('Usuario ou senha invalida'); history.back(); </script>";
}
 
?>