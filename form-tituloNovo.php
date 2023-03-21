<?php include_once "header.php" ?>

<main>
    <div class="container pb-5 bg-dark">
        <form method="post" action="cadastrar-tituloNovo.php" enctype="multipart/form-data"
            class="row g-3 d-flex justify-content-center pt-5">
            <h2 class="text-center text-white">Cadastrar título</h2>
            <div class="col-8">
                <label class="form-label text-white">Título:</label>
                <input type="text" class="form-control" name="titulo">
            </div>
            <div class="col-8">
                <label class="form-label text-white">Elenco:</label>
                <input type="text" class="form-control" name="elenco">
            </div>
            <div class="col-8">
                <label class="form-label text-white">Diretor:</label>
                <input type="text" class="form-control" name="diretor">
            </div>
            <div class="col-8">
                <label class="form-label text-white">Gênero:</label>
                <input type="text" class="form-control" name="genero">
            </div>
            <div class="col-8">
                <label class="form-label text-white">Sinopse:</label>
                <textarea class="form-control" rows="3" name="sinopse"></textarea>
            </div>
            <div class="col-8">
                <label class="form-label text-white">Link do trailer(yt):</label>
                <input type="text" class="form-control" name="linkTrailer">
            </div>
            <div class="col-8 mb-3">
                <label for="formFile" class="form-label text-white">Imagem de capa</label>
                <input class="form-control" type="file" id="formFile" name="imagemCapa">
            </div>
            <button class="btn btn-outline-light btn-lg px-5 col-5 mb-5" type="submit">Cadastrar</button>
        </form>
    </div>
</main>

<?php include_once "footer.php" ?>