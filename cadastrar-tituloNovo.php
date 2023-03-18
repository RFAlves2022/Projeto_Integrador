<?php
$titulo = $_POST["titulo"];
$elenco = $_POST["elenco"];
$diretor = $_POST["diretor"];
$genero = $_POST["genero"];
$sinopse = addslashes($_POST["sinopse"]);
$link = $_POST["linkTrailer"];

//----- upload file
$pasta = "img/";
$imgCapa = $_FILES["imagemCapa"]["name"];
$partesCapa = explode(".", $imgCapa);
$nomeNovoCapa = round(microtime(true)) . "." . end($partesCapa);
move_uploaded_file($_FILES["imagemCapa"]["tmp_name"], $pasta . $nomeNovoCapa);
//------
include_once "conexao_db.php";

$sql = "INSERT INTO tb_titulos (titulo,elenco,diretor,genero,sinopse,link,img) VALUES ('$titulo','$elenco','$diretor','$genero','$sinopse','$link','$nomeNovoCapa')";

mysqli_query($conexao,$sql);
$conexao->close();
header("location:form-tituloNovo.php");

?>