<?php

$server ="127.0.0.1";
$user = "root";
$password = "";
$database = "db_app";

try{
    $conexao = mysqli_connect($server, $user, $password, $database);
}catch(Exception $e){
    echo "Erro na conexão!";
    exit();
}

?>