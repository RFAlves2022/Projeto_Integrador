<?php
include_once "conexao_db.php";
include_once "header.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_titulos WHERE id = ".$id."";
$arrayTitulo =  mysqli_query($conexao,$sql);
$conteudoTitulo = mysqli_fetch_assoc($arrayTitulo);

echo '<main class="container text-white">';
echo '  <div class="row">';
echo '      <div class="col-6">';
echo '          <div class="ratio ratio-16x9">';
echo $conteudoTitulo['link'];   
echo '          </div>';
echo '      </div>';
echo '      <div class="col-6">';
echo '          <h2>sssssssssssss</h2>';
echo '      </div>';
echo '  </div>';
echo '</main>';


