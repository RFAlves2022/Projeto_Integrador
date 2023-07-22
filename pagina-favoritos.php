<?php
session_start();
include_once "conexao_db.php";
include_once "header.php";

// Verificar se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("location: form-login.php");
    exit();
}

// Obter o ID do usuário logado
$username = $_SESSION['username'];
$sqlUsuario = "SELECT id FROM tb_usuarios WHERE username = '$username'";
$resultadoUsuario = mysqli_query($conexao, $sqlUsuario);
$usuario = mysqli_fetch_assoc($resultadoUsuario);
$usuarioId = $usuario['id'];

// Consultar os filmes favoritos do usuário
$sqlFavoritos = "SELECT tb_titulos.* FROM tb_titulos
                JOIN tb_favoritos ON tb_favoritos.filme_id = tb_titulos.id
                WHERE tb_favoritos.usuario_id = $usuarioId";
$resultadoFavoritos = mysqli_query($conexao, $sqlFavoritos);
?>

<main class="container text-white bg-dark pt-5">
    <h1 class="mb-4 text-center">Filmes Favoritos</h1>
    <div class="row">
        <?php while ($favorito = mysqli_fetch_assoc($resultadoFavoritos)) : ?>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="ratio ratio-16x9">
                        <?php echo $favorito['link']; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $favorito['titulo']; ?></h5>
                        <p class="card-text"><?php echo $favorito['sinopse']; ?></p>
                        <a href="detalhes_filme.php?id=<?php echo $favorito['id']; ?>" class="btn btn-primary">Detalhes</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>
</body>
</html>
