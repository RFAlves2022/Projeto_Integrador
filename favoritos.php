<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("location: form-login.php");
    exit();
}

include_once "conexao_db.php";
include_once "header.php";

// Consulta para obter os filmes favoritos do usuário
$username = $_SESSION['username'];
$sql = "SELECT * FROM tb_titulos WHERE username = '$username'";
$resultado = mysqli_query($conexao, $sql);

?>

<main>
    <div class="container">
        <h2>Favoritos</h2>

        <?php
        if (mysqli_num_rows($resultado) == 0) {
            echo '<p>Nenhum filme nos favoritos.</p>';
        } else {
            echo '<div class="row">';

            // Loop pelos filmes favoritos
            while ($row = mysqli_fetch_assoc($resultado)) {
                $filmeId = $row['filme_id'];
                // Consulta para obter informações do filme
                $sqlFilme = "SELECT * FROM tb_titulos WHERE id = '$filmeId'";
                $resultadoFilme = mysqli_query($conexao, $sqlFilme);
                $filme = mysqli_fetch_assoc($resultadoFilme);

                echo '<div class="col-md-4">';
                echo '<div class="card">';
                echo '<img src="' . $filme['img'] . '" class="card-img-top" alt="Imagem do filme">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $filme['titulo'] . '</h5>';
                echo '<form method="post" action="remover-favorito.php">';
                echo '<input type="hidden" name="filme_id" value="' . $filme['id'] . '">';
                echo '<button type="submit" class="btn btn-danger">Remover dos Favoritos</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            echo '</div>';
        }
        ?>

    </div>
</main>

<?php include_once "footer.php"; ?>
