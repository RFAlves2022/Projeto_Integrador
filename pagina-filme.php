<?php
session_start();

include_once "conexao_db.php";
include_once "header.php";

$id = $_GET['id'];
$sql = "SELECT * FROM tb_titulos WHERE id = " . $id . "";
$arrayTitulo = mysqli_query($conexao, $sql);
$conteudoTitulo = mysqli_fetch_assoc($arrayTitulo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se o usuário está logado
    if (!isset($_SESSION['username'])) {
        header("location: form-login.php");
        exit();
    }
    // Obter o ID do filme
    $filmeId = $id;

    // Obter o ID do usuário logado
    $username = $_SESSION['username'];
    $sqlUsuario = "SELECT id FROM tb_usuarios WHERE username = '$username'";
    $resultadoUsuario = mysqli_query($conexao, $sqlUsuario);
    $usuario = mysqli_fetch_assoc($resultadoUsuario);
    $usuarioId = $usuario['id'];

    // Verificar se o filme já está nos favoritos do usuário
    $sqlVerificar = "SELECT * FROM favoritos WHERE usuario_id = $usuarioId AND filme_id = $filmeId";
    $resultadoVerificar = mysqli_query($conexao, $sqlVerificar);

    if (mysqli_num_rows($resultadoVerificar) > 0) {
        // O filme já está nos favoritos do usuário, exiba uma mensagem de erro ou redirecione para uma página apropriada
        echo '<p class="text-danger">Este filme já está nos seus favoritos.</p>';
    } else {
        // Inserir o filme na tabela de favoritos
        $sqlInserir = "INSERT INTO favoritos (usuario_id, filme_id) VALUES ($usuarioId, $filmeId)";
        mysqli_query($conexao, $sqlInserir);

        echo '<p class="text-success">Filme adicionado aos favoritos com sucesso!</p>';
    }
}
echo '
<main class="container text-white bg-dark pt-5">
    <div class="row pt-4">
        <div class="col-6">
        <div class="ratio ratio-16x9 ">
        '.$conteudoTitul['link'].'
        </div>
        </div>
        <div class="col-6">
            <h1 class="mb-5" mt-2>' . $conteudoTitulo['titulo'] . '</h1>
            <h5 class="mb-4 mx-2">Elenco: ' . $conteudoTitulo['elenco'] . '</h5>
            <h5 class="mb-4 mx-2">Diretor: ' . $conteudoTitulo['diretor'] . '</h5>
            <h5>Gênero: ' . $conteudoTitulo['genero'] . '</li>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center pt-4">
        <div class="col-8">
            <p>' . $conteudoTitulo['sinopse'] . '</p>
        </div>
    </div>
    <form method="post">
        <input type="hidden" name="filme_id" value="' . $id . '">
        <button class="btn btn-outline-light btn-lg pt-3 pb-3" type="submit">Adicionar aos Favoritos</button>
    </form>
</main>
</body>
';

include_once "footer.php";
