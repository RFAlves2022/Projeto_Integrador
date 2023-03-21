<?php
include_once "header.php";
include_once "conexao_db.php";

$sqlTitulos = "SELECT * FROM tb_titulos";
$arrayTitulos = mysqli_query($conexao,$sqlTitulos);

echo '<main class="container-fluid">';
echo '<div class="row">';
while($umTitulo = mysqli_fetch_assoc($arrayTitulos)){
    echo "<div class='col-2 h-100'>";
    echo '<a class="text-decoration-none link-light" href="pagina-filme.php?id='. $umTitulo['id'] .'">';
    echo    '<div class="card bg-dark text-white mt-2 mb-2">';
    echo        '<img src="img/'.$umTitulo['img'].' " class="imgsize" class="card-img imagem" alt="Imagem do titulo" >';
    echo        '<div class="card-img-overlay">';
    echo            '<h5 class="card-title">'.$umTitulo['titulo'].'</h5>';
    echo        '</div>';
    echo    '</div>';
    echo '</a>';
    echo "</div>";
}
echo '</div>';
echo '</main>';

$conexao->close();
?>
<?php include_once "footer.php"?>


