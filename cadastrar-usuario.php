<?php
$novoUsuario = $_POST["username"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha = md5($senha);

$sql = "INSERT INTO tb_usuarios (username,email,senha) VALUES ('$novoUsuario','$email','$senha')";

include_once "conexao_db.php";

try {
    mysqli_query($conexao, $sql);
}
catch(Exception $e){
    echo "Erro na conexão!";
    exit();
}

$conexao->close();

header("location:form-login.php")
?>