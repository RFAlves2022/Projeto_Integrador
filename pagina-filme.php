<?php
include_once "header.php";
include_once "conexao_db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_titulos WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$arrayTitulo = $stmt->get_result();
$conteudoTitulo = $arrayTitulo->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o usuário está autenticado
    if (!isset($_SESSION['username'])) {
        echo '<script type="text/javascript">
            if (confirm("Deseja entrar para adicionar aos favoritos?")) {
                window.location.href = "form-login.php";
            } else {
                window.location.href = history.back();
            }
          </script>';
    }

    // Obtém o ID do filme enviado pelo formulário
    $filmeId = $_POST['filme_id'];
    $userId = $_SESSION['user_id'];

    // Verifica se o filme já está nos favoritos do usuário
    $sql_verificar_favorito = "SELECT id FROM tb_favoritos WHERE filme_id = ? AND usuario_id = ?";
    $stmt_verificar_favorito = $conexao->prepare($sql_verificar_favorito);
    $stmt_verificar_favorito->bind_param("ss", $filmeId, $userId);
    $stmt_verificar_favorito->execute();
    $result_verificar_favorito = $stmt_verificar_favorito->get_result();
   
    if ($result_verificar_favorito->num_rows == 0) {
        // O filme ainda não está nos favoritos, então podemos adicioná-lo
        $sql_adicionar_favorito = "INSERT INTO tb_favoritos (filme_id, usuario_id) VALUES (?, ?)";
        $stmt_adicionar_favorito = $conexao->prepare($sql_adicionar_favorito);
        $stmt_adicionar_favorito->bind_param("ss", $filmeId, $userId);
        
        if ($stmt_adicionar_favorito->execute()) {
            echo '<script type="text/javascript">
            alert("Filme adicionado aos favoritos com sucesso!");
          </script>';
        } else {
            echo '<script type="text/javascript">
            alert("Ocorreu um erro ao adicionar o filme aos favoritos");
          </script>';
        }
      
        $stmt_adicionar_favorito->close();
    } else {
        echo '<script type="text/javascript">
            alert("Este filme já está nos seus favoritos.");
          </script>';
    }

    $stmt_verificar_favorito->close();
}

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
    <div>
    <div class="d-flex justify-content-center align-items-center">
        <form method="post">
            <input type="hidden" name="filme_id" value="' . $id . '">
            <button class="btn btn-outline-light mt-3 btn-lg pt-3 pb-3 active" type="submit">Adicionar aos Favoritos</button>
        </form>
    </div>
</main>
</body>
';

include_once "footer.php";
