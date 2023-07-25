<?php
include_once "header.php";
include_once "conexao_db.php";
// Verifica se o usuário está autenticado, caso contrário redireciona para a página de login
if (!isset($_SESSION['username'])) {
    header("Location: form-login.php");
    exit();
}
// Recupera o ID do usuário autenticado
$userId = $_SESSION['user_id'];

// Consulta para recuperar os filmes favoritos do usuário
$sql_favoritos = "SELECT tb_titulos.* FROM tb_titulos
                JOIN tb_favoritos ON tb_titulos.id = tb_favoritos.filme_id
                WHERE tb_favoritos.usuario_id = ?";
$stmt_favoritos = $conexao->prepare($sql_favoritos);
$stmt_favoritos->bind_param("s", $userId);
$stmt_favoritos->execute();
$arrayFavoritos = $stmt_favoritos->get_result();

echo '<main class="container">';
echo '<div class="row">';
echo '<h1 class="text-center">Favoritos</h1>';
while ($umFavorito = mysqli_fetch_assoc($arrayFavoritos)) {
    echo '<div class="col-4 mb-4">';
    echo '<div class="card" style="width: 18rem;">';
    echo '<img src="img/'.$umFavorito['img'].'" class="card-img-top">';
    echo '<div class="card-body justify-content-center">';
    echo '<h5 class="card-title text-center">'.$umFavorito['titulo'].'</h5>';
    echo '<a href="pagina-filme.php?id='. $umFavorito['id'] .'" class="link-secondary">Ver detalhes</a> ';
    echo '<a href="excluir-favorito.php?excluir='. $umFavorito['id'] .'" class="link-danger">Remover dos favoritos</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</div>';
echo '</main>';

$stmt_favoritos->close();
$conexao->close();

include_once "footer.php";
?>
