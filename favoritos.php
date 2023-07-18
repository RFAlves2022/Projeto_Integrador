<?php
session_start();

include_once "conexao_db.php";
include_once "header.php";

// Verifica se o usuário está autenticado
if (!isset($_SESSION['username'])) {
    // Redirecionar para a página de login ou exibir uma mensagem de erro
    // ...
}

$userId = $_SESSION['username'];

// Consulta para obter os filmes favoritos do usuário
$sql = "SELECT t.id, t.nome, t.imagem FROM tb_titulos AS t
        INNER JOIN favoritos AS f ON f.filme_id = t.id
        WHERE f.user_id = '$userId'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    echo '
    <main class="container text-white bg-dark pt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">';

    // Exibir os filmes favoritos em cards
    while ($row = $result->fetch_assoc()) {
        $filmeId = $row['id'];
        $nome = $row['nome'];
        $imagem = $row['imagem'];

        echo '
            <div class="col">
                <div class="card">
                    <img src="' . $imagem . '" class="card-img-top" alt="' . $nome . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $nome . '</h5>
                        <form method="post">
                            <input type="hidden" name="filme_id" value="' . $filmeId . '">
                            <button class="btn btn-danger" type="submit">Remover dos Favoritos</button>
                        </form>
                    </div>
                </div>
            </div>';
    }

    echo '
        </div>
    </main>';
} else {
    echo '
    <main class="container text-white bg-dark pt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="alert alert-info" role="alert">
                    Você não possui filmes favoritos.
                </div>
            </div>
        </div>
    </main>';
}

include_once "footer.php";
?>