<?php
include_once "conexao_db.php";
include_once "header.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_titulos WHERE id = " . $id . "";
$arrayTitulo = mysqli_query($conexao, $sql);
$conteudoTitulo = mysqli_fetch_assoc($arrayTitulo);

echo '
<main class="container text-white bg-dark pt-5">
    <div class="row pt-4">
        <div class="col-6">
            <div class="ratio ratio-16x9 ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/4yX8fJKBHQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-6">
            <h1 class="mb-5" mt-2>'.$conteudoTitulo['titulo'].'</h1>
            <h5 class="mb-4 mx-2">Elenco: '.$conteudoTitulo['elenco'].'</h5>
            <h5 class="mb-4 mx-2">Diretor: '.$conteudoTitulo['diretor'].'</h5>
            <h5>Gênero: '.$conteudoTitulo['genero'].'</li>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center pt-4">
        <div class="col-8">
            <p>'.$conteudoTitulo['sinopse'].'</p>
        </div>
    </div>
    <button class="btn btn-outline-light btn-lg pt-3 pb-3"> adicionar aos favoritos </button>
</main>
';
?>

<footer class="bg-dark text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center text-white p-2">
    © 2023 Copyright:&nbsp; Desenvolvido por
    <a class="text-white" href="#!">Rafael Alves</a>
  </div>
  <!-- Copyright -->
</footer>

</body>

</html>
