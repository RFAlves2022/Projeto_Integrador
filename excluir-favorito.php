<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: form-login.php");
    exit();
}

// Verifica se o filme_id foi enviado através da URL
if (isset($_GET['excluir']) && !empty($_GET['excluir'])) {
    $filmeIdExcluir = $_GET['excluir'];
    $userId = $_SESSION['user_id'];

    // Conecta ao banco de dados
    include_once "conexao_db.php";

    // Remove o filme dos favoritos do usuário
    $sql_excluir_favorito = "DELETE FROM tb_favoritos WHERE filme_id = ? AND usuario_id = ?";
    $stmt_excluir_favorito = $conexao->prepare($sql_excluir_favorito);
    $stmt_excluir_favorito->bind_param("ss", $filmeIdExcluir, $userId);

    if ($stmt_excluir_favorito->execute()) {
        echo '<script type="text/javascript">
            alert("Filme excluído com sucesso!");
          </script>';
        header("Location: pagina-favoritos.php");
        exit();
    } else {
        // Se houver algum erro, você pode redirecionar para uma página de erro ou exibir uma mensagem adequada
        echo "Ocorreu um erro ao excluir o filme dos favoritos.";
    }

    $stmt_excluir_favorito->close();
    $conexao->close();
} else {
    // Se o filme_id não foi enviado, redireciona para a página de favoritos
    header("Location: pagina-favoritos.php");
    exit();
}
?>
