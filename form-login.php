<?php
include_once "header.php";
include_once "conexao_db.php";
// Verificar se o usuário já está logado
if (isset($_SESSION['username'])) {
    header("location:index.php");
    exit();
}

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    $senha = md5($senha);

    // Verificar as credenciais do usuário
    $sql = "SELECT * FROM tb_usuarios WHERE username = '$username' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login bem-sucedido, iniciar a sessão
        $_SESSION['username'] = $username;
        while($usuario=mysqli_fetch_assoc($result)){

        $_SESSION['user_id'] = $usuario['id'];
        }
        header("location:index.php");
        exit();
    } else {
        $erro = "Nome de usuário ou senha inválidos!";
    }
}
?>

<main>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form method="post" action="">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <br>
                                    <p>Preencha os campos para entrar</p>
                                    <br>
                                    <?php if (isset($erro)) { echo "<p>$erro</p>"; } ?>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX">Nome de usuário</label>
                                        <input type="text" name="username" id="username" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Senha</label>
                                        <input type="password" name="senha" id="senha" class="form-control form-control-lg" />
                                    </div>

                                    <button class="btn btn-outline-dark btn-lg px-5" type="submit">Entrar</button>

                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Crie um perfil para entrar!<br><a href="form-cadastro.php" class="text-dark-50 fw-bold">Cadastrar-se</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<?php include_once "footer.php" ?>
