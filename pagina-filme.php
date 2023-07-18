<?php
session_start();

include_once "conexao_db.php";
include_once "header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o usuário está autenticado
    if (!isset($_SESSION['username'])) {
        // Redirecionar para a página de login ou exibir uma mensagem de erro
        // ...
    }

    // Obtém o ID do filme enviado pelo formulário
    $filmeId = $_POST['filme_id'];
    $userId = $_SESSION['username'];

    // Insere o filme favorito no banco de dados
    $sql = "INSERT INTO tb_favoritos (filme_id, user_id) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $filmeId, $userId);
    
    if ($stmt->execute()) {
        // Filme adicionado com sucesso aos favoritos
        // ...
    } else {
        // Ocorreu um erro ao adicionar o filme aos favoritos
        // ...
    }
    $stmt->close();
}

$id = $_GET['id'];
$sql = "SELECT * FROM tb_titulos WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$arrayTitulo = $stmt->get_result();
$conteudoTitulo = $arrayTitulo->fetch_assoc();

echo '
<main class="container text-white bg-dark pt-5">
    <div class="row pt-4">
        <div class="col-6">
            <div class="ratio ratio-16x9 ">
                '.$conteudoTitulo['link'].'
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
